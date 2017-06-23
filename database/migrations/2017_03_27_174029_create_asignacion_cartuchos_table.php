<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionCartuchosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignacion_cartuchos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('impresora_id')->unsigned();
			$table->integer('cartucho_id')->unsigned();
			$table->date('fechaasignacion');
			$table->timestamps();

			$table->foreign('impresora_id')
			->references('id')->on('impresoras')
			->onUpdate('CASCADE')
			->onDelete('NO ACTION');

			$table->foreign('cartucho_id')
			->references('id')->on('cartuchos')
			->onUpdate('CASCADE')
			->onDelete('NO ACTION');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('asignacion_cartuchos', function(Blueprint $table)
		{	
			$table->dropColumn(['impresora_id', 'cartucho_id','fechaasignacion']);
		});
	}

}
