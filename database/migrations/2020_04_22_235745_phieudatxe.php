<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Phieudatxe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('phieudatxe')) {
            Schema::create('phieudatxe', function (Blueprint $table) {
                $table->increments('maphieudatxe')->comment('');
                $table->string('biensoxe')->comment('');
                $table->string('hinhthucthanhtoan')->comment('');
                $table->integer('madiadiem')->comment('');
                $table->dateTime('thoidiembatdau')->comment('');
                $table->integer('machuyendi')->comment('');
                $table->integer('manguoidung')->comment('');
             
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
            DB::statement("ALTER TABLE `phieudatxe` comment ''");
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
