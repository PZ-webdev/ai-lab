<?php

use App\Models\Country;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->unsignedBigInteger('id_country');
            $table->foreign('id_country')->references('id')->on('countries');
            // ->onDelete('cascade')->onUpdate('cascade');
            //->onDelete('SET NULL')->onUpdate('SET NULL'); 
            // also available CASCADE, RESTRICT, DO NOTHING, NO ACTION
            // $table->foreignIdFor(Country::class)->constrained();
            $table->string('name');
            $table->string('continent');
            $table->text('description');
            $table->integer('period');
            $table->float('price');
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
        Schema::dropIfExists('trips');
    }
};
