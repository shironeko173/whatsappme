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
        Schema::create('whats_app_me', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('noWA')->unsigned();
            // $table->string('email');
            $table->string('Weburl')->unique()->nullable();
            $table->string('urlacak')->unique()->nullable();
            $table->string('WA_WEBurl')->nullable();
            $table->string('WA_APIurl')->nullable();
            $table->text('teks')->nullable();
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
        Schema::dropIfExists('whats_app_me');
    }
};
