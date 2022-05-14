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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->foreignId("category_id")->constrained();
            $table->foreignId("brand_id")->constrained();
            $table->string("image");
            $table->float("price");
<<<<<<< HEAD
            $table->float("discount_price")->nullable();
            $table->integer("stock");
            $table->text("description");
=======
            $table->text("description");
            $table->float("discount_price");
            $table->string("stock");
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
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
        Schema::dropIfExists('products');
    }
};
