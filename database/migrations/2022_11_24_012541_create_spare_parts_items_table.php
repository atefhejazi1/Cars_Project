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
        Schema::create('spare_parts_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('path_image');
            $table->double('price');
            $table->unsignedBigInteger('spare_parts_department_id');
            $table->foreign('spare_parts_department_id')->references('id')->on('spare_parts_department')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('featured');

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
        Schema::dropIfExists('_spare_parts_items');
    }
};
