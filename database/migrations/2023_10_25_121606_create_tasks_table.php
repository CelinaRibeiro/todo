<?php

use App\Models\{
    Category,
    User
};
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->dateTime('due_date');
            $table->foreignIdFor(Category::class)->references('id')->on('categories')->onDelete('cascade');
            $table->foreignIdFor(User::class)->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function(Blueprint $table){
            $table->dropForeignIdFor(Category::class);
            $table->dropForeignIdFor(User::class);
        });
        Schema::dropIfExists('tasks');
    }
};
