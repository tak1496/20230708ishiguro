<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CraeteItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('price')->nullable(false);
            $table->string('description')->nullable(false);
            $table->string('img_url')->nullable();
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('category_item_id')->nullable(false);
            $table->foreign('category_item_id')->references('id')->on('category_item');
            $table->unsignedBigInteger('category_good_id')->nullable(false);
            $table->foreign('category_good_id')->references('id')->on('category_good');
            $table->unsignedBigInteger('condition_id')->nullable(false);
            $table->foreign('condition_id')->references('id')->on('conditions');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
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
