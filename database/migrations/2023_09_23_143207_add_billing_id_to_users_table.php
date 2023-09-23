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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('billing_id')->nullable()->after('email');

            // 外部キー制約
            $table->foreign('billing_id')->references('id')->on('billings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // 外部キー制約を削除
            $table->dropForeign(['billing_id']);

            // billing_id カラムを削除
            $table->dropColumn('billing_id');
        });
    }
};
