<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionImpresorasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignacion_impresoras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('area_id')->unsigned();
			$table->integer('oficina_id')->unsigned();
			$table->integer('impresora_id')->unsigned();
			$table->date('fechaasignacion');
			$table->timestamps();

			$table->foreign('area_id')
			->references('id')->on('areas')
			->onUpdate('CASCADE')
			->onDelete('NO ACTION');

			$table->foreign('oficina_id')
			->references('id')->on('oficinas')
			->onUpdate('CASCADE')
			->onDelete('NO ACTION');

			$table->foreign('impresora_id')
			->references('id')->on('impresoras')
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
		Schema::table('asignacion_impresoras', function(Blueprint $table)
		{	
			$table->dropColumn(['area_id','oficina_id','impresora_id','fechaasignacion']);
		});
	}

}
