<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpresorasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('impresoras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('modeloimpresora_id')->unsigned();
			$table->string('numeroserie', 45)->unique();
			$table->string('ipimpresora', 45)->unique();
			$table->string('macimpresora', 45)->unique();
			$table->date('fechacompra')->nullable();
			$table->string('numerofactura', 45)->nullable();
			$table->enum('estado', ['asignado', 'disponible']);
			$table->string('observacion', 150)->nullable();
			$table->timestamps();

			$table->foreign('modeloimpresora_id')
				->references('id')->on('modelo_impresoras')
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
		Schema::table('impresoras', function(Blueprint $table)
		{	
			$table->dropColumn(['modeloimpresora_id','numeroserie','ipimpresora','macimpresora','fechacompra','numerofactura','estado','observacion']);
		});
	}

}
