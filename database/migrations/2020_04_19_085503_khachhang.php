<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Khachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('khachhang')) {
            Schema::create('khachhang', function (Blueprint $table) {
                $table->increments('makhachhang')->comment('');
                $table->string('tenkhachhang')->comment('');
                $table->string('diachi')->comment('');
                $table->string('gioitinh')->comment('');
                $table->string('email')->comment('');
                $table->integer('sdt')->comment('');
                $table->integer('so_tk_nh')->comment('');
                $table->string('matkhau')->comment('');
                $table->string('anhdaidien')->comment('');
                
                $table->timestamp('created_at')
            ->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('ngày tạo');

                $table->timestamp('updated_at')
                ->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))
                ->comment('ngày cập nhật');

                $table->timestamp('deleted_at')
                ->nullable()
                ->comment('ngày xóa tạm');
            });
            DB::statement("ALTER TABLE `khachhang` comment ''");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
