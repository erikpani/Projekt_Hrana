<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{

    public function up(): void
    {
        Schema::connection('mysql')->create('jezici-jela', function (Blueprint $table) {
            $table->id();
            $table->string('name_hr')->unique();
            $table->string('name_en')->unique();
        });
        Schema::connection('mysql4')->create('jezici-tagovi', function (Blueprint $table) {
            $table->id();
            $table->string('name_hr')->unique();
            $table->string('name_en')->unique();
        });
        Schema::connection('mysql3')->create('jezici-kategorije', function (Blueprint $table) {
            $table->id();
            $table->string('name_hr')->unique();
            $table->string('name_en')->unique();
        });
        Schema::connection('mysql2')->create('jezici-sastojci', function (Blueprint $table) {
            $table->id();
            $table->string('name_hr')->unique();
            $table->string('name_en')->unique();
        });
    }


    public function down(): void
    {
    }
};
