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
        Schema::create('merchandises', function (Blueprint $table) {
            $table->id();
            $table->integer('merchandise_number')->comment('商品番号');
            $table->string('merchandise_name')->comment('商品名');
            $table->string('merchandise_classification')->comment('分類');
            $table->integer('merchandise_price')->comment('価格');
            $table->boolean('merchandise_plastic')->comment('プラ');
            $table->string('merchandise_plastic_notes')->comment('付記');
            $table->boolean('merchandise_paper')->comment('紙');
            $table->string('merchandise_paper_notes')->comment('付記');
            $table->string('merchandise_color')->comment('色');
            $table->integer('merchandise_size')->comment('サイズ');
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
        Schema::dropIfExists('merchandises');
    }
};
