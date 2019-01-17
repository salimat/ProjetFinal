<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultats', function (Blueprint $table) {
           $table->increments('id');
              $table->unsignedInteger('examens_id')->nullable();

                  $table->unsignedInteger('patients_id')->nullable();

                      $table->unsignedInteger('employes_id')->nullable();
                        $table->date('date_resultat');
                          $table->time('heure_resultat');
                            $table->longText('observation');
                              $table->longText('conclusion');

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
        Schema::dropIfExists('resultats');
    }
}
