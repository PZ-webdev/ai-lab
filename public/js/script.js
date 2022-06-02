const url = `http://localhost:8000/api/countries`;
const countryForm = document.forms['country-form'];

window.addEventListener("load", () => {
    console.log("Wczytano zawartość strony");
    document.title = 'Kraje';

    const footer = document.querySelector('footer');
    footer.classList.add('fixed-bottom');

    fillCountryTable();
    appendCurrentTimeToFooter();
    prepareModal();
});

function appendCurrentTimeToFooter() {
    var today = new Date();
    var time = ' (' + today.getHours() + ':' + today.getMinutes() + ':' + today.getSeconds() + ')';
    var p = document.querySelector('footer p');
    var text = document.createTextNode(time);
    p.appendChild(text);
}

function fillCountryTable() {
    getCountries().then(countries => {
        document.getElementById('no-countries').remove();
        const table = document.getElementById('countries-table');
        countries.data.forEach(country => {
            const row = createTableRow(country);
            table.appendChild(row);
        });
    }).catch(error => {
        console.log(error);
        document.getElementById('country-add').disabled = true;
        showToast(error, false);
    });
}

function createTableRow(country) {
    const row = document.createElement('tr');
    row.setAttribute('data-id', country['id']);

    for (const [key, value] of Object.entries(country)) {
        const td = document.createElement(key === 'id' ? 'th' : 'td');
        td.textContent = value;
        row.appendChild(td);
    }

    const tde = document.createElement('td');
    const edit = document.createElement("BUTTON");
    edit.textContent = 'Edycja';
    edit.type = 'button';
    edit.classList.add('btn');
    edit.classList.add('btn-link');
    edit.setAttribute('data-bs-toggle', 'modal');
    edit.setAttribute('data-bs-target', '#modal');
    edit.setAttribute('data-id', country['id']);
    tde.appendChild(edit);
    row.appendChild(tde);

    const tdd = document.createElement('td');
    const del = document.createElement("BUTTON");
    del.textContent = 'Usuń';
    del.type = 'button';
    del.classList.add('btn');
    del.classList.add('btn-link');
    del.setAttribute('data-id', country['id']);
    del.addEventListener('click', deleteButtonHandler);
    tdd.appendChild(del);
    row.appendChild(tdd);

    return row;
}

function prepareModal() {
    const modal = document.getElementById('modal')
    modal.addEventListener('show.bs.modal', function (event) {
        document.getElementById("danger-alert-form").classList.add("visually-hidden");
        const button = event.relatedTarget
        const modalTitle = modal.querySelector('.modal-title')
        const modalBodyInput = modal.querySelector('.modal-body input')

        const id = button.getAttribute('data-id')
        if (id == null) {
            countryForm.reset();
            countryForm.id.removeAttribute('value');
            modalTitle.textContent = 'Dodanie nowego kraju';
        } else {
            document.getElementById("spinner-div").classList.remove('visually-hidden');
            getCountry(id).then(country => {
                for (const [key, _] of Object.entries(country.data)) {
                    countryForm[key].value = country.data[key];
                }
            }).catch(error => {
                showToast(error, false);
                console.log(error);
                hideModal();
            }).finally(_ => {
                document.getElementById("spinner-div").classList.add('visually-hidden');
            });
            modalTitle.textContent = 'Edycja kraju o id: ' + id
            modalBodyInput.value = id
        }
    })
}

countryForm.addEventListener('submit', e => {
    e.preventDefault();
    if (!countryForm.id.hasAttribute('value')) {
        createCountry().then(country => {
            hideModal();
            showToast(`Kraj (o id ${country.data.id}) został pomyślnie dodany.`, true);
            const updatedRow = document.querySelector('tr[data-id]');
            updatedRow.parentNode.appendChild(createTableRow(country.data));
        }).catch(error => {
            console.log(error['message']);
            showFormAlertDanger(error['message']);
        });
    } else {
        updateCountry(countryForm.id.value).then(country => {
            hideModal();
            const id = country.data['id'];
            showToast(`Kraj (o id ${id}) został pomyślnie zaktualizowany.`, true);
            const updatedRow = document.querySelector('tr[data-id="' + id + '"]');
            updatedRow.parentNode.replaceChild(createTableRow(country.data), updatedRow);
        }).catch(error => {
            console.log(error['message']);
            showFormAlertDanger(error['message']);
        });
    }
});

function deleteButtonHandler() {
    var id = this.getAttribute('data-id')
    deleteCountry(id).then(message => {
        var deletedRow = document.querySelector('tr[data-id="' + id + '"]');
        deletedRow.remove();
        showToast(message, true);
    }).catch(error => {
        showToast(error['message'], false);
    });
}

//Alerts & toasts

function showToast(message, success) {
    const toast = document.querySelector('#toast');
    toast.classList.add(success ? 'bg-success' : 'bg-danger');
    toast.classList.remove(!success ? 'bg-success' : 'bg-danger');
    const bToast = bootstrap.Toast.getOrCreateInstance(toast);
    const toastText = document.querySelector('#toast div .toast-body')
    toastText.textContent = message;
    bToast.show();
}

function showFormAlertDanger(message) {
    const alert = document.getElementById("danger-alert-form");
    alert.textContent = message;
    alert.classList.remove("visually-hidden");
    alertHideTimeout(alert);
}

function alertHideTimeout(alert) {
    (() => {
        setTimeout(() => alert.classList.add("visually-hidden"), 10000);
    })();
}

//Modal

function hideModal() {
    bootstrap.Modal.getInstance(document.getElementById('modal')).hide();
}

// XHR

function getCountries() {
    const xhr = new XMLHttpRequest();
    return new Promise((resolve, reject) => {
        xhr.onreadystatechange = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status >= 200 && xhr.status < 300) {
                    resolve(JSON.parse(xhr.response));
                } else {
                    reject(`Wystąpił błąd przy pobieraniu krajów (${xhr.status})`);
                }
            }
        };
        xhr.open('GET', url, true);
        xhr.setRequestHeader('Accept', 'application/json');
        xhr.send();
    });
}

function getCountry(id) {
    const xhr = new XMLHttpRequest();
    return new Promise((resolve, reject) => {
        xhr.onreadystatechange = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status >= 200 && xhr.status < 300) {
                    resolve(JSON.parse(xhr.response));
                } else {
                    reject(`Wystąpił błąd przy pobieraniu kraju (${xhr.status})`);
                }
            }
        };
        xhr.open('GET', `${url}/${id}`, true);
        xhr.setRequestHeader('Accept', 'application/json');
        xhr.send();
    });
}

function createCountry() {
    const xhr = new XMLHttpRequest();
    return new Promise((resolve, reject) => {
        xhr.onreadystatechange = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status >= 200 && xhr.status < 300) {
                    resolve(JSON.parse(xhr.response));
                } else {
                    reject(JSON.parse(xhr.response));
                }
            }
        };
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Accept', 'application/json');
        xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
        xhr.send(JSON.stringify(getFormData(countryForm)));
    });
}

function updateCountry(id) {
    const xhr = new XMLHttpRequest();
    return new Promise((resolve, reject) => {
        xhr.onreadystatechange = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status >= 200 && xhr.status < 300) {
                    resolve(JSON.parse(xhr.response));
                } else {
                    reject(JSON.parse(xhr.response));
                }
            }
        };
        xhr.open('PUT', `${url}/${id}`, true);
        xhr.setRequestHeader('Accept', 'application/json');
        xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
        xhr.send(JSON.stringify(getFormData(countryForm)));
    });
}

function deleteCountry(id) {
    const xhr = new XMLHttpRequest();
    return new Promise((resolve, reject) => {
        xhr.onreadystatechange = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status >= 200 && xhr.status < 300) {
                    resolve(`Kraj (o id ${id}) został pomyślnie usunięty.`);
                } else {
                    reject(JSON.parse(xhr.response));
                }
            }
        };
        xhr.open('DELETE', `${url}/${id}`, true);
        xhr.setRequestHeader('Accept', 'application/json');
        xhr.send();
    });
}

function getFormData(form) {
    const data = {};
    const formData = [... new FormData(form).entries()];
    formData.forEach(([fieldName, fieldValue]) => {
        data[fieldName] = fieldValue;
    });
    return data;
}
