<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('total');
            $table->integer('flour');
            $table->integer('water');
            $table->integer('salt');
            $table->integer('oil')->default(0);
            $table->float('yeast');
            $table->string('others');
        });

        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('ingredient_id')->constrained('ingredients');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
        Schema::dropIfExists('ingredients');
    }
}
