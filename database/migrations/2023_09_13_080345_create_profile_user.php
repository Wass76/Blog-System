<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profile_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('province') ->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('gender') ->nullable();
            $table->longText('bio') ->nullable();
            $table->longText('facebook') ->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_user');
    }
};
