<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [

            [
                'name' => '',
                'username' => '',
                'email' => '',
                'password' => '',
                'group' => 'aluno',
            ],


        ];

        foreach ($usuarios as $user) {
            $user = User::create($user);

            $user_id = $user->id;

            $attr = [
                'user_id' => $user_id,
                'grupo_id' => 3,
            ];
            DB::table('usuario_grupos')->insert($attr);

            $attr = [
                'user_id' => $user_id,
                'cuso_id' => 2,
            ];
            DB::table('aluno_cursos')->insert($attr);
        }

        echo 'Alunos do ENAQ cadastrados com sucesso!';
    }
}
