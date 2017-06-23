<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartuchosTable extends Migration {

	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cartuchos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('modelocartucho_id')->unsigned();
			$table->string('codigointerno', 45);
			$table->integer('contadorinicialrecarga');
			$table->date('fechacompra')->nullable();
			$table->string('numerofactura', 45)->nullable();
			$table->enum('estado', ['asignado', 'baja', 'recargar']);
			$table->string('observacion', 150)->nullable();
			$table->timestamps();

			$table->foreign('modelocartucho_id')
			->references('id')->on('modelo_cartuchos')
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
		Schema::table('cartuchos', function(Blueprint $table)
		{	
			$table->dropColumn(['modelocartucho_id','codigointerno','contadorinicialrecarga','fechacompra','numerofactura','estado','observacion']);
		});
	}

}
