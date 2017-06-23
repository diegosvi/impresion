<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeloImpresorasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modelo_impresoras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('detalle', 45)->unique(); 
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
		//Schema::drop('modelo_impresoras');
		Schema::table('modelo_impresoras', function(Blueprint $table)
		{	
			$table->dropColumn(['detalle']);
		});
	}

}
