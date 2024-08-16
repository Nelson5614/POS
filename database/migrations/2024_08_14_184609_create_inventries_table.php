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
        Schema::create('inventries', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('code')->unique();
            $table->string('expiring_date')->nullable();
            $table->string('catergory');
            $table->integer('quantity');
            $table->integer('price');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('inventries');
    }
};
