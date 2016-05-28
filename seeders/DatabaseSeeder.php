<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('EstadosTableSeeder');
		$this->call('CidadesTableACSeeder');
		$this->call('CidadesTableALSeeder');
		$this->call('CidadesTableAMSeeder');
		$this->call('CidadesTableAPSeeder');
		$this->call('CidadesTableBASeeder');
		$this->call('CidadesTableCESeeder');
		$this->call('CidadesTableDFSeeder');
		$this->call('CidadesTableESSeeder');
		$this->call('CidadesTableGOSeeder');
		$this->call('CidadesTableMASeeder');
		$this->call('CidadesTableMGSeeder');
		$this->call('CidadesTableMSSeeder');
		$this->call('CidadesTableMTSeeder');
		$this->call('CidadesTablePASeeder');
		$this->call('CidadesTablePBSeeder');
		$this->call('CidadesTablePESeeder');
		$this->call('CidadesTablePISeeder');
		$this->call('CidadesTablePRSeeder');
		$this->call('CidadesTableRJSeeder');
		$this->call('CidadesTableRNSeeder');
		$this->call('CidadesTableROSeeder');
		$this->call('CidadesTableRRSeeder');
		$this->call('CidadesTableRSSeeder');
		$this->call('CidadesTableSCSeeder');
		$this->call('CidadesTableSESeeder');
		$this->call('CidadesTableSPSeeder');
		$this->call('CidadesTableTOSeeder');
	}

}
