<?php

namespace Database\Seeders;

use App\Models\Carros;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++){
            Carros::create([
                'modelo' => 'teste' . $i,
                'ano' => '20' .$i,
                'marca' => 'marca' .$i,
                'cor' => 'cor' . $i,
                'peso' => 'tolelada' .$i,
                'potencia' => 'potencia' . $i,
                'descricao' => 'descricao' . $i,
                'preco' => '500000.00',
            ]);
        }
    }
}
