<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    //crea la tabla 
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //integer Unsigned Increment
            $table->string('name'); //varchar
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     */

    //ELIMINA LA TABLA
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
