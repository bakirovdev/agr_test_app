<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->foreign('director_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
        });
    }
};
