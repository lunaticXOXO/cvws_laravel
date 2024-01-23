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
        Schema::create('ordered_project', function (Blueprint $table) {
            $table->string("idordered")->nullable(true);
            $table->smallInteger("quantity")->nullable(true);
            $table->dateTime("orderdate")->nullable(true);
            $table->string("project")->nullable(true);
            $table->string("customer")->nullable(true);
            $table->primary("idordered");
            $table->foreign("project")->references("idproject")->on("project");
            $table->foreign("customer")->references("idcustomer")->on("customer");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
