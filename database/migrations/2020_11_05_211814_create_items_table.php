<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps('name')->nullable;
             $table->timestamps('price')->nullable;
              $table->timestamps('discounted-price')->nullable;
              $table->timestamps('is-active')->nullable;
              $table->timestamps('brands-id')->nullable;
              $table->timestamps('options-id')->nullable;
            $table->timestamps('categorys-id')->nullable;
             $table->timestamps('description')->nullable;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
