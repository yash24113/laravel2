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
        Schema::create('demo_log1_reg1', function (Blueprint $table) {
        $table->bigincrements('id');
        $table->string('name',20);
            
            $table->text('email',20);
            $table->text('password',20);
            $table->text('role',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
           Schema::dropIfExists('demo_log1_reg1');
    }
};
