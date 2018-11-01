<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',32)->unique()->comment('用户名');
            $table->string('password',255)->comment('密码');
            $table->char('phone',15)->nullable()->comment('手机号码');
            $table->string('email',32)->unique()->nullable()->comment('邮箱');
            $table->boolean('status')->default(TRUE)->comment('用户状态');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
