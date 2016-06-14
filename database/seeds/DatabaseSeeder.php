<?php

use Illuminate\Database\Seeder;
use estoque\Categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaTableSeeder::class);
    }
}

/**
* 
*/
class CategoriaTableSeeder extends Seeder
{	
	public function run()
    {
        Categoria::create(['nome' => 'ELETRONICO']);
        Categoria::create(['nome' => 'ELETRODOMESTICO']);
        Categoria::create(['nome' => 'BRINQUEDO']);
        Categoria::create(['nome' => 'ESPORTE']);
        Categoria::create(['nome' => 'SAÚDE']);
        Categoria::create(['nome' => 'CELULAR']);
        Categoria::create(['nome' => 'VARIADOS']);
    }
}