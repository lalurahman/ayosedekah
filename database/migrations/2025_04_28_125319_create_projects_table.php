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
    { {
            Schema::create('projects', function (Blueprint $table) {
                $table->id();
                $table->foreignId('project_category_id')
                    ->constrained('project_categories')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table->string('title');
                $table->string('slug')->unique();
                $table->text('description');
                $table->string('image')->nullable();
                $table->bigInteger('goal_amount');
                $table->bigInteger('current_amount')->default(0);
                $table->date('deadline_date');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
