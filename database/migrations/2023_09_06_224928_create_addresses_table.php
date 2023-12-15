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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id'); // Khóa ngoại tham chiếu đến bảng Users
            $table->string('name'); 
            $table->string('province'); // Tỉnh hoặc thành phố
            $table->string('district'); // Quận hoặc huyện
            $table->string('ward'); // Xã hoặc phường
            $table->boolean('is_default')->default(false);
            $table->string('address_details')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
