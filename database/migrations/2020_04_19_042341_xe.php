<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Xe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('xe')) {
            Schema::create('xe', function (Blueprint $table) {
                $table->string('biensoxe', 191)->comment('');
                $table->string('hangxe')->comment('');
                $table->integer('maloaixe')->comment('');
                $table->primary('biensoxe');
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
            DB::statement("ALTER TABLE `xe` comment ''");
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
