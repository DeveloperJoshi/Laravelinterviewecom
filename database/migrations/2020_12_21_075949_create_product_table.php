<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('product')) {

            Schema::create('product', function (Blueprint $table) {
                $table->increments('product_id');
                $table->integer('category_foreign_id')->unsigned();
                $table->string('product_name',30);
                $table->longText('description');
                $table->integer('price')->unsigned();
                $table->foreign('category_foreign_id')->references('category_id')->on('category');
            });
           
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        if (Schema::hasTable('product')) {
            Schema::dropIfExists('product');
        }
        
       
    }
}
