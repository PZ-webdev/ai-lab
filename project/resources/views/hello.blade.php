@php
$i = 0;
@endphp

@if (empty($name))
    Witaj nieznajomy
@else
    Witaj {{ $name }}
@endif

<br>

@if (!empty($name) && $name[0] === 'B')
    Imię zaczyna się na B
@else
    Imię nie zaczyna się na B
@endif

<br>

@foreach ($arr as $a)
    <p>{{ $a }}</p>
@endforeach

<br>

@while ($i <= 5)
    <p>{{ $i++ }}</p>
@endwhile

<h3>
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</h3>
