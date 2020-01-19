<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddToNamespaceStoredRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stored_routes', function (Blueprint $table) {
            $table->string('namespace')->nullable()->default('admin')->after('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stored_routes', function (Blueprint $table) {
            $table->removeColumn('namespace');
        });
    }
}
