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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->string('type'); //1 tỉnh, thành phố, 2 Quận huyện thị xã 3 phường xã
            $table->timestamps();
        });
    }

//     INSERT INTO locations (name, parent_id, type)
// VALUES ('Phường Thành Công', 2, 3);

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
