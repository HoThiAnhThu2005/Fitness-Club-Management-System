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
        Schema::create('huan_luyen_viens', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('ho_va_ten');
            $table->string('slug');
            $table->string('password');
            $table->string('hinh_anh');
            $table->text('mo_ta_ngan');
            $table->longText('gioi_thieu_chi_tiet');
            $table->string('kinh_nghiem');
            $table->text('thanh_tich');
            $table->text('chuyen_mon');
            $table->string('triet_ly');
            $table->string('so_dien_thoai')->nullable();
            $table->integer('tinh_trang')->default(1);
            $table->integer('is_master')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huan_luyen_viens');
    }
};
