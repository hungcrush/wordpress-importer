<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImportHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_history', function (Blueprint $table) {
            $table->id();
            $table->string('file_name', 120);
            $table->string('status', 60)->default(WORDPRESS_IMPORTING_STATUS);
            $table->timestamps();
        });

        Schema::create('imported_items', function (Blueprint $table) {
            $table->id();
            $table->integer('import_history_id', false, true);
            $table->integer('post_id');
            $table->string('post_title', 255);
            $table->integer('status')->unsigned()->default(0);
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
        Schema::dropIfExists('import_history');
        Schema::dropIfExists('imported_items');
    }
}
