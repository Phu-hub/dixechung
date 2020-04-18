<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Thoidiem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('thoidiem')) {
            Schema::create('thoidiem', function (Blueprint $table) {
                $table->dateTime('thoidiembatdau')->comment('');
                $table->dateTime('thoidiemketthuc')->comment('');
                $table->primary('thoidiembatdau');
                // $table->increments('id')->comment('id');
                // $table->integer('academy_id')->unsigned()->comment('id khoa,vien');
                // $table->string('major_code', 12)->comment('mã nghành');
                // $table->string('major_name')->comment('tên nghành');
                // $table->string('major_description')->comment('mô tả nghành');
                // log time
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
            DB::statement("ALTER TABLE `thoidiem` comment ''");
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
