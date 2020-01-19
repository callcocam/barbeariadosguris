<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tenant();
            $table->user();
            $table->uuid('uuid');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('wallet_id')->nullable();
            $table->enum('type',['expense','income'])->default('income')->nullable();
            $table->enum('period',['month','year'])->default('month')->nullable();
            $table->string('currency',10)->default('BRL')->nullable();
            $table->integer('enrollments')->default('1')->nullable();
            $table->decimal('price',9, 4)->default('0')->nullable();
            $table->string('description')->nullable();
            $table->status();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign("client_id")->references("id")->on("users")->onDelete('no action');
            $table->foreign("wallet_id")->references("id")->on("wallets")->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
