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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title_az');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->text('description_az');
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->string('button_az');
            $table->string('button_en')->nullable();
            $table->string('button_ru')->nullable();
            $table->string('link_az');
            $table->string('link_en')->nullable();
            $table->string('link_ru')->nullable();
            $table->string('image');
            $table->boolean('status')->default(1);
            $table->timestamp('deleted_at')->nullable();



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
        Schema::dropIfExists('sliders');
    }
};
