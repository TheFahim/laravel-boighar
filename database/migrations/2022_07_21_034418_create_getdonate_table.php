<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetdonateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getdonate', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',100);
            $table->string('email',100);
            $table->string('address');
            $table->string('mobile');
            $table->string('describe')->nullable();
            $table->string('booktitle',100);
            $table->string('bookauthor',100);
            $table->string('bookedition',100);
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
        Schema::dropIfExists('getdonate');
    }
}
