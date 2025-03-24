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
        Schema::create('procesing', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('file_path');
            $table->text('message');
            $table->enum('status',['approved', 'reiceted',]);
            $table->unsignedBigInteger('department_id')->nullable();
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('department')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('procesing');
    }
};
