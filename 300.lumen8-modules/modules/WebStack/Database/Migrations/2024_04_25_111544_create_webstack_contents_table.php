<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebstackContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webstack_contents', function (Blueprint $table) {
            $table->id('cid');
            $table->string('slug')->unique()->nullable();
            $table->string('ico')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();

            $table->timestamps();
            $table->timestamp("deleted_at")->nullable();
            $table->timestamp("release_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webstack_contents');
    }
}
