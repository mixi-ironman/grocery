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
         Schema::table('products', function (Blueprint $table) {
            $table->integer('is_featured')->default(1);
            $table->integer('is_popular')->default(1);
            $table->integer('is_onsale')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('is_featured');
            $table->dropColumn('is_popular');
            $table->dropColumn('is_onsale');
        });
    }
};
