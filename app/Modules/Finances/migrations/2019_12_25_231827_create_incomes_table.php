<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tenant();
            $table->user();
            $table->uuid('uuid');
            $table->unsignedBigInteger('invoice_id')->nullable();
            $table->integer('enrollment')->default('1')->nullable();
            $table->decimal('price',9, 4)->default('0')->nullable();
            $table->decimal('discount',9, 4)->default('0')->nullable();
            $table->decimal('affix',9, 4)->default('0')->nullable();
            $table->decimal('total',9, 4)->default('0')->nullable();
            $table->date('payment_up')->nullable();
            $table->date('payment_down')->nullable();
            $table->string('description')->nullable();
            $table->status();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign("invoice_id")->references("id")->on("invoices")->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incomes');
    }
}
