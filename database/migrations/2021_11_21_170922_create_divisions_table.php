<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('ambassadors', function(Blueprint $table){
			$table->id();
			$table->string('name');
            $table->timestamps();
		});

        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
			$table->string('name', 45);
			$table->foreignId('division_id')->nullable()->references('id')->on('divisions');
			$table->foreignId('ambassador_id')->nullable()->references('id')->on('ambassadors');
			$table->integer('num_collaborators');
			$table->integer('level');
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
        Schema::dropIfExists('ambassadors');
        Schema::dropIfExists('divisions');
    }
}
