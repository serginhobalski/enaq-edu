<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cursos = [
            [
                // ID: 1
                'nome' => 'Curso de Postulantes 2024',
                'descricao' => 'Curso preparatório para postulantes ao ingresso ou progressão ministerial na Igreja do Evangelho Quadrangular.',
                'valor' => 130.00,
                'imagem' => 'enaq24.jpg',
                'ativo' => true,
                'categoria' => 'enaq',
                'codigo' => 'ENAQ24',
            ],
            [
                // ID: 2
                'nome' => 'Curso de Postulantes 2025',
                'descricao' => 'Curso preparatório para postulantes ao ingresso ou progressão ministerial na Igreja do Evangelho Quadrangular.',
                'valor' => 150.00, // 1
                'imagem' => 'enaq25.jpg', // 1
                'ativo' => true, // 1
                'categoria' => 'enaq',
                'codigo' => 'ENAQ25',
            ],
        ];

        foreach ($cursos as $curso) {
            $curso = Curso::create($curso);
        }

        echo 'Cursos semeados com sucesso!';
    }
}
