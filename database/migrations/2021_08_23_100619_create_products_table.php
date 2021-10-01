<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('short_description')->nullable();
            $table->decimal('regular_price');
            // $table->decimal('sale_price')->nullable();
            $table->text('skins');
            // $table->enum('stock_status', ['instock' ,'outofstock']);
            $table->bigInteger('icons');
            $table->bigInteger('ward');
            $table->string('type');
            $table->string('previous_ranked');
            $table->string('ranked');
            $table->text('date_ofcreation');
            $table->string('level');
            $table->bigInteger('be');
            $table->bigInteger('rp');
            $table->string('urf');
            $table->string('honor');
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->string('account_type');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');



    }
}
