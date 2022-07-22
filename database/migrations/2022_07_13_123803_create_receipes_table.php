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
        Schema::create('receipes', function (Blueprint $table) {
            $table->id();
            $table->string("name",config("global.string_medium"))->nullable(false);
            $table->integer("preparation_time")->nullable(false);
            $table->integer("cooking_time")->nullable(false);
            $table->integer("difficulty")->nullable(true);
            $table->integer("author")->nullable(false)->comment("fk user.id");
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
        Schema::dropIfExists('receipes');
    }
};
