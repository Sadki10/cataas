<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('cat_images', function (Blueprint $table) {
            $table->id();
            $table->string('_id');
            $table->json('tags');
            $table->string('mimetype');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cat_images');
    }
};
