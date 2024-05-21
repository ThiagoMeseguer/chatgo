<?php

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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('transmitter_phone');
            $table->string('receiver_phone');
            $table->string('body');
            $table->string('transmitter_language', 50);
            $table->string('receiver_language', 50);
            $table->timestamps();
            
            $table->foreign('transmitter_phone')->references('phone')->on('users');
            $table->foreign('receiver_phone')->references('phone')->on('users');
            $table->foreignId('translated_id')->nullable()->references('id')->on('translations');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
