<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpresionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('impresions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('impresora_id')->unsigned();
			$table->date('fechainicioimpresion');
			$table->date('fechafinimpresion');
			$table->integer('contadorinicioimpresion');
			$table->integer('contadorfinimpresion');
			$table->integer('difconinifinimpresion');
			$table->string('observacion', 150)->nullable();
			$table->timestamps();

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
		Schema::table('impresions', function(Blueprint $table)
		{	
			$table->dropColumn(['impresora_id','fechainicioimpresion','fechafinimpresion','contadorinicioimpresion','contadorfinimpresion','difconinifinimpresion','observacion']);
		});
	}

}
