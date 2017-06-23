<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecargaCartuchosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recarga_cartuchos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cartucho_id')->unsigned();
			$table->integer('numerorecarga');
			$table->date('fechainiciorecarga');
			$table->date('fechafinrecarga');
			$table->integer('contadoriniciorecarga');
			$table->integer('contadorfinrecarga');
			$table->integer('difcontinifinrecarga');
			$table->string('observacion', 150)->nullable();
			$table->timestamps();

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
		Schema::table('recarga_cartuchos', function(Blueprint $table)
		{
			$table->dropColumn(['cartucho_id','numerorecarga','fechainiciorecarga','fechafinrecarga','contadoriniciorecarga','contadorfinrecarga','difcontinifinrecarga','observacion']);
		});
	}

}
