<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('product_img_pc')->nullable();
            $table->longText('product_img_phone')->nullable();
            $table->string('product_title')->nullable();
            $table->longText('product_content')->nullable();
            $table->string('product_uri')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_products');
    }
};
