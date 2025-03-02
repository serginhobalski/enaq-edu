<?php

namespace Database\Seeders;

use App\Models\Disciplina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisciplinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $disciplinas = [
            [
                'curso_id' => 1,
                'nome' => 'Doutrinas Bíblicas',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2024',
                'imagem' => 'doutrinas.jpg',
                'codigo' => 'ENAQ24',
            ],
            [
                'curso_id' => 1,
                'nome' => 'Declaração de Fé',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2024',
                'imagem' => 'declaracao.jpg',
                'codigo' => 'ENAQ24',
            ],
            [
                'curso_id' => 1,
                'nome' => 'Panorama Bíblico',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2024',
                'imagem' => 'panorama.jpg',
                'codigo' => 'ENAQ24',
            ],
            [
                'curso_id' => 1,
                'nome' => 'Evangelho Quadrangular',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2024',
                'imagem' => 'quadrangular.jpg',
                'codigo' => 'ENAQ24',
            ],
            [
                'curso_id' => 1,
                'nome' => 'Ética',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2024',
                'imagem' => 'etica.jpg',
                'codigo' => 'ENAQ24',
            ],
            [
                'curso_id' => 1,
                'nome' => 'Cidadania',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2024',
                'imagem' => 'cidadania.jpg',
                'codigo' => 'ENAQ24',
            ],
            [
                'curso_id' => 1,
                'nome' => 'Administração Eclesiástica',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2024',
                'imagem' => 'administracao.jpg',
                'codigo' => 'ENAQ24',
            ],
            [
                'curso_id' => 1,
                'nome' => 'Atualidades',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2024',
                'imagem' => 'atualidades.jpg',
                'codigo' => 'ENAQ24',
            ],
            [
                'curso_id' => 1,
                'nome' => 'Redação',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2024',
                'imagem' => 'redacao.jpg',
                'codigo' => 'ENAQ24',
            ],
            [
                'curso_id' => 1,
                'nome' => 'Livro (leitura obrigatória)',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2024',
                'imagem' => 'livro.jpg',
                'codigo' => 'ENAQ24',
            ],
            [
                'curso_id' => 2,
                'nome' => 'Introdução ao Curso de Postulantes 2025',
                'descricao' => 'Orientaçoes gerais sobre o Curso de Postulantes 2025',
                'imagem' => 'enaq25.jpg',
                'codigo' => 'ENAQ25',
            ],
            [
                'curso_id' => 2,
                'nome' => 'Evangelho Quadrangular',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2025',
                'imagem' => 'quadrangular.jpg',
                'codigo' => 'ENAQ25',
            ],
            [
                'curso_id' => 2,
                'nome' => 'Declaração de Fé',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2025',
                'imagem' => 'declaracao.jpg',
                'codigo' => 'ENAQ25',
            ],
            [
                'curso_id' => 2,
                'nome' => 'Administração da Igreja + Células',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2025',
                'imagem' => 'administracao.jpg',
                'codigo' => 'ENAQ25',
            ],
            [
                'curso_id' => 2,
                'nome' => 'Ética',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2025',
                'imagem' => 'etica.jpg',
                'codigo' => 'ENAQ25',
            ],
            [
                'curso_id' => 2,
                'nome' => 'Cidadania',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2025',
                'imagem' => 'cidadania.jpg',
                'codigo' => 'ENAQ25',
            ],
            [
                'curso_id' => 2,
                'nome' => 'Panorama Bíblico',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2025',
                'imagem' => 'panorama.jpg',
                'codigo' => 'ENAQ25',
            ],
            [
                'curso_id' => 2,
                'nome' => 'Doutrinas Bíblicas',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2025',
                'imagem' => 'doutrinas.jpg',
                'codigo' => 'ENAQ25',
            ],
            [
                'curso_id' => 2,
                'nome' => 'Atualidades',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2025',
                'imagem' => 'atualidades.jpg',
                'codigo' => 'ENAQ25',
            ],
            [
                'curso_id' => 2,
                'nome' => 'Redação',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2025',
                'imagem' => 'redacao.jpg',
                'codigo' => 'ENAQ25',
            ],
            [
                'curso_id' => 2,
                'nome' => 'Livro (leitura obrigatória)',
                'descricao' => 'Disciplina do integrante do Curso de Postulantes 2025',
                'imagem' => 'livro.jpg',
                'codigo' => 'ENAQ25',
            ],


        ];

        foreach ($disciplinas as $disciplina) {
            $disciplina = Disciplina::create($disciplina);
        }

        echo 'Disciplinas cadastradas com sucesso!';
    }
}
