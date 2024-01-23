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
        Schema::create('project', function (Blueprint $table) {
            $table->string('idproject')->unique();
            $table->string('projectname')->nullable(true);
            $table->string('description')->nullable(true);
            $table->string('filename')->nullable(true);
            $table->dateTime('start_date')->nullable(true);
            $table->dateTime('finish_date')->nullable(true);
            $table->timestamps();
            $table->primary('idproject');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
