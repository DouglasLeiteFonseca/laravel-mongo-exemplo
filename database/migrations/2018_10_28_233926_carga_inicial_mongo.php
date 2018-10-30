<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CargaInicialMongo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection('mongodb');

        
        DB::collection('pessoa')->insert(array("nome"=>"Douglas Leite", "dt_nascimento"=>'1992-02-14', "email"=>"douglasleitefonseca1@gmail.com"));
        DB::collection('pessoa')->insert(array("nome"=>"Elivando Franca", "dt_nascimento"=>'1992-10-11', "email"=>"elivando@gmail.com"));
        DB::collection('pessoa')->insert(array("nome"=>"Vitor Campos", "dt_nascimento"=>'1992-05-04', "email"=>"vitor@gmail.com"));
        DB::collection('pessoa')->insert(array("nome"=>"Wanderson Colatino", "dt_nascimento"=>'1992-06-12', "email"=>"wanderson@gmail.com"));
        DB::collection('pessoa')->insert(array("nome"=>"Elizabeth Fortunato", "dt_nascimento"=>'1992-03-11', "email"=>"elizabeth@gmail.com"));
        DB::collection('pessoa')->insert(array("nome"=>"Jõao Teodoro" , "dt_nascimento"=>'1992-01-01', "email"=>"joao@gmail.com"));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::collection('pessoa')->truncate();
    }
}
