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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('link')->nullable();
            $table->integer('role')->default(1);
            $table->text('bio')->nullable();
            $table->string('position')->nullable();
            $table->boolean('gender')->default(false);
            $table->string('city');
            $table->foreignId('company_id')->constrained();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
