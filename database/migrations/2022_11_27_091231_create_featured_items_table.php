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
        Schema::create('featured_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('accessory_id');
            $table->unsignedBigInteger('detergent_id');
            $table->unsignedBigInteger('extrasse_id');
            $table->unsignedBigInteger('oil_id');
            $table->unsignedBigInteger('spare_parts_item_id');
            
            $table->foreign('accessory_id')->references('id')->on('accessories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('detergent_id')->references('id')->on('detergents')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('extrasse_id')->references('id')->on('extrasses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('oil_id')->references('id')->on('oils')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('spare_parts_item_id')->references('id')->on('spare_parts_items')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();

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
        Schema::dropIfExists('featured_items');
    }
};
