<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorizableTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('categories', function (Blueprint $table) {

            $table->nestedSet();
        });

        Schema::create('categorizable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('category_id');
            $table->nullableMorphs('categorizable');

            $table->index('categorizable_type', 'categorizable_id');
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
        if (Schema::hasTable('categories')) {
            Schema::drop('categories');
        }

        if (Schema::hasTable('categorizable')) {
            Schema::drop('categorizable');
        }
    }
}
