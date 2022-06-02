<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Country;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25)->unique();
            $table->string('continent', 25);
            $table->smallInteger('period');
            $table->text('description');
            $table->decimal('price');
            $table->foreignIdFor(Country::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('trips', function (Blueprint $table) {
        //     $table->dropForeign('trips_country_id_foreign');
        // });
        Schema::dropIfExists('trips');
    }
};
