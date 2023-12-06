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
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("table",20);
            $table->string("tag",10)->nullable()->default(null);
            $table->unsignedBigInteger('ref_id');
            $table->text('link')->nullable()->default(null);
            $table->timestamps();

            $table->index('ref_id');
            $table->index('table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
