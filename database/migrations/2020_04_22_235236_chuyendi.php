<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chuyendi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('chuyendi')) {
            Schema::create('chuyendi', function (Blueprint $table) {
                $table->increments('machuyendi')->comment('');
                $table->dateTime('thoidiembatdau')->comment('');
                $table->integer('mayeucau')->comment('');
                $table->integer('madiadiem')->comment('');
                $table->string('biensoxe')->comment('');
                $table->integer('manguoidung')->comment('');
                $table->integer('soluongghe')->comment('');
                $table->dateTime('thoigiandukien')->comment('');
                $table->string('loaichuyendi')->comment('');
                $table->integer('gia')->comment('');
                $table->string('noidungchitiet')->comment('');
                $table->string('danhgiabinhluan')->comment('');
                $table->string('chitietbinhluan')->comment('');
                
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
            DB::statement("ALTER TABLE `chuyendi` comment ''");
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
