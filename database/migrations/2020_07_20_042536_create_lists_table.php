<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lists', function (Blueprint $table) {
		$table->id();
		$table->string('name');
		//$table->unsignedBigInteger('type_id');
		//$table->foregin('type_id')->reference('id')->on('type')
		$table->foreignId('type_id')->constrained();
		$table->BigInteger('price');
		$tsble->json('detail');
		$table->timestamp('speed_time');
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
        Schema::dropIfExists('lists');
    }
}
