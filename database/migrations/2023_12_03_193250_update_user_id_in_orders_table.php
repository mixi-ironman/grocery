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
        Schema::table('orders', function (Blueprint $table) {
            //Cách cũ
            // $table->unsignedBigInteger('user_id')->nullable();;
            // $table->foreign('user_id')
            // ->references('id')->on('users')
            // ->onDelete('cascade')->onUpdate('cascade'); // Tùy chọn: onDelete để xác định hành động khi xóa dòng liên quan.
            //Cách mới
            // $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            //nếu đã tạo rồi add thêm như này sẽ bị lỗi kiểu như đã có khóa ngoại rồi giờ add thêm
            
            $table->dropForeign(['user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            Schema::dropIfExists('orders');
        });
    }
};
