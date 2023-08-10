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
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->id('user_id');
            $table->timestamps('end_date');
            $table->string('to_do_suggestions');
            $table->string('title');
            $table->string('body');
            $table->softDeletes('deleted_at');
            $table->timestamps('created_at')->useCurrent()->nullable();
            $table->timestamps('uploded_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
};
