<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Grupo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $grupos = [
            ['grupo' => 'adm'], # ID: 1
            ['grupo' => 'uetp'], # ID: 2
            ['grupo' => 'aluno'], # ID: 3
            ['grupo' => 'professor'], # ID: 4
            ['grupo' => 'secretario'], # ID: 5
            ['grupo' => 'visitante'], # ID: 6
        ];

        foreach ($grupos as $grupo) {
            Grupo::create($grupo);
        }

        $this->call([
            CursosSeeder::class, // Adicionando CursosSeeder
            DisciplinasSeeder::class, // Adicionando DisciplinasSeeder
            EnaqSeeder::class, // Adiciona alunos do Curso de Postulantes
        ]);

        $adm = User::create([
            'name' => 'Admin',
            'surname' => 'Geral',
            'username' => 'admin',
            'email' => 'adm@geral.com',
            'group' => 'adm',
            'password' => Hash::make('123456789'),
        ]);

        $adm_id = $adm->id;

        $attr = [
            'user_id' => $adm_id,
            'grupo_id' => 1,
        ];
        DB::table('usuario_grupos')->insert($attr);


        echo 'Grupos, cursos, disciplinas e usuários criados com sucesso!';


    }
}
