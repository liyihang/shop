<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->comment('goods_logo');
            $table->string('goods_name')->unique()->comment('商品名称');
            $table->integer('brand_id')->comment('品牌id');
            $table->integer('type_id')->comment('分类id');
            $table->integer('attr_id')->comment('属性id');
            $table->tinyInteger('is_show')->default(1)->comment('是否展示');
            $table->tinyInteger('is_recomm')->default(1)->comment('是否推荐');
            $table->tinyInteger('is_new')->default(1)->comment('是否新品');
            $table->decimal('goods_price',10,2)->comment('本店价');
            $table->decimal('shop_price',10,2)->comment('本价');
            $table->string('keyword')->default('')->comment('商品关键字');
            $table->string('simple_description')->default('')->comment('商品简单描述');
            $table->text('description')->comment('商品描述');
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
        Schema::dropIfExists('goods');
    }
}
