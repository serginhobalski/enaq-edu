<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [

            [
                'name' => 'Aida Raquel De Andrade',
                'username' => 'aidara',
                'email' => 'aida_raquel24@hotmail.com',
                'password' => 'Enaq2516',
                'group' => 'aluno',
            ],

            [
                'name' => 'Aimee Israely Mafra Santa Rosa',
                'username' => 'aimeemsr',
                'email' => 'aimee.israely12@gmail.com',
                'password' => 'Enaq2560',
                'group' => 'aluno',
            ],

            [
                'name' => 'Alony Da Conceição Da Silva Costa ',
                'username' => 'cscalodsc',
                'email' => 'cscalony@gmail.com',
                'password' => 'Enaq2561',
                'group' => 'aluno',
            ],

            [
                'name' => 'Amanda Naiara Pompeu Da Cunha Magno',
                'username' => 'amandacm',
                'email' => 'nutriamandapompeu@gmail.com',
                'password' => 'Enaq2548',
                'group' => 'aluno',
            ],

            [
                'name' => 'Amarildo Pimentel Braga ',
                'username' => 'amarildopb',
                'email' => 'pramarildobraga190@gmail.com',
                'password' => 'Enaq2549',
                'group' => 'aluno',
            ],

            [
                'name' => 'Ana Cristina Livramento Da Cruz ',
                'username' => 'anaclc',
                'email' => 'pastorluiseduardo189@gmail.com',
                'password' => 'Enaq2509',
                'group' => 'aluno',
            ],

            [
                'name' => 'Ana Cristina Machado Do Rosário Soares',
                'username' => 'anacrisrs',
                'email' => 'anacristmach@gmail.com',
                'password' => 'Enaq2522',
                'group' => 'aluno',
            ],

            [
                'name' => 'Ana Maria De Brito Bandeira',
                'username' => 'anamardbb',
                'email' => 'anamariabb1971@gmail.com',
                'password' => 'Enaq2556',
                'group' => 'aluno',
            ],

            [
                'name' => 'Angela Saldanha Sousa',
                'username' => 'angelass',
                'email' => 'saldanhasousaangela31@gmail.com',
                'password' => 'Enaq2540',
                'group' => 'aluno',
            ],

            [
                'name' => 'Antonio Eduardo Sousa Dos Santos ',
                'username' => 'antonioess',
                'email' => 'eduardo8487@yahoo.com.br',
                'password' => 'Enaq2551',
                'group' => 'aluno',
            ],

            [
                'name' => 'Beatriz Souza Moraes',
                'username' => 'beatrizs',
                'email' => 'beatrizsouza.tst@hotmail.com',
                'password' => 'Enaq2514',
                'group' => 'aluno',
            ],

            [
                'name' => 'Beneilson Mendes Do Nascimento ',
                'username' => 'beneilsondn',
                'email' => 'prbeneilsonnascimento.bvc @gmail.com',
                'password' => 'Enaq2545',
                'group' => 'aluno',
            ],

            [
                'name' => 'Benivan Souza Sarja ',
                'username' => 'benivanss',
                'email' => 'benivansouzasarja@gmail.com',
                'password' => 'Enaq2542',
                'group' => 'aluno',
            ],

            [
                'name' => 'Berinaldo Gonzaga De Oliveira ',
                'username' => 'berinaldodo',
                'email' => 'gonzagaberinaldo4@gmail.com',
                'password' => 'Enaq2510',
                'group' => 'aluno',
            ],

            [
                'name' => 'Bruna Helena Alves Da Costa',
                'username' => 'brunadc',
                'email' => 'bruna20helena@gmail.com',
                'password' => 'Enaq2550',
                'group' => 'aluno',
            ],

            [
                'name' => 'Carlos Willer Da Silva Maradei',
                'username' => 'carlosdsm',
                'email' => 'carlosrelocel@gmail.com',
                'password' => 'Enaq2502',
                'group' => 'aluno',
            ],

            [
                'name' => 'Carolina Alfaia De Amorim Felesmino',
                'username' => 'karoldaf',
                'email' => 'karol.alfaia11@gmail.com',
                'password' => 'Enaq2527',
                'group' => 'aluno',
            ],

            [
                'name' => 'Cicero Carvalho Romão ',
                'username' => 'cicerocr',
                'email' => 'cc5065932@gmail.com',
                'password' => 'Enaq2543',
                'group' => 'aluno',
            ],

            [
                'name' => 'Cleber Oliveira Silva',
                'username' => 'cleberos',
                'email' => 'clbosilva@gmail.com',
                'password' => 'Enaq2541',
                'group' => 'aluno',
            ],

            [
                'name' => 'Cleiton De Oliveira Lopes ',
                'username' => 'cleitonol',
                'email' => 'cleitolopsif@gmail.com',
                'password' => 'Enaq2552',
                'group' => 'aluno',
            ],

            [
                'name' => 'Cleudia Ferreira Alves Silva ',
                'username' => 'cleudiafas',
                'email' => 'ferreiraalvessilva.cleudia2009@gmail.com',
                'password' => 'Enaq2537',
                'group' => 'aluno',
            ],

            [
                'name' => 'Darilene Pantoja Viana',
                'username' => 'darilenepv',
                'email' => '982737828dd@gmail.com',
                'password' => 'Enaq2543',
                'group' => 'aluno',
            ],

            [
                'name' => 'Edelson De Lima Oliveira ',
                'username' => 'edelsonlo',
                'email' => 'oliveiraedelson@hotmail.com',
                'password' => 'Enaq2536',
                'group' => 'aluno',
            ],

            [
                'name' => 'Ederli Carlos Silva ',
                'username' => 'ederlics',
                'email' => 'nsrefrigeracaoautomotiva@gmail.com',
                'password' => 'Enaq2540',
                'group' => 'aluno',
            ],

            [
                'name' => 'Emanuel Dos Santos Pereira',
                'username' => 'emanuelsp',
                'email' => 'bobyleona12@gmail.com',
                'password' => 'Enaq2518',
                'group' => 'aluno',
            ],

            [
                'name' => 'Francieudes Silva Melo',
                'username' => 'francieudessm',
                'email' => 'francieudesmelo68@gmail.com',
                'password' => 'Enaq2521',
                'group' => 'aluno',
            ],

            [
                'name' => 'Francilma Monteiro ',
                'username' => 'francilm',
                'email' => 'francilmamonteiro897@gmail.com',
                'password' => 'Enaq2557',
                'group' => 'aluno',
            ],

            [
                'name' => 'Francinildo Nascimento Araújo ',
                'username' => 'francinildo',
                'email' => 'francinildon774@gmail.com',
                'password' => 'Enaq2552',
                'group' => 'aluno',
            ],

            [
                'name' => 'Fryda Vingren Jaster De Oliveira',
                'username' => 'frydavjo',
                'email' => 'karina28.v.oliveira@gmail.com',
                'password' => 'Enaq2532',
                'group' => 'aluno',
            ],

            [
                'name' => 'Gabrielle Gonçalves Avelar',
                'username' => 'gabyga',
                'email' => 'gaby.avelar48@gmail.com',
                'password' => 'Enaq2558',
                'group' => 'aluno',
            ],

            [
                'name' => 'Gustavo Da Silva Oliveira',
                'username' => 'gustavoso',
                'email' => 'gssillva@gmail.com',
                'password' => 'Enaq2546',
                'group' => 'aluno',
            ],

            [
                'name' => 'Ingrid Daniela Vilar da Conceição ',
                'username' => 'ingridvc',
                'email' => 'danielaingridbritovilar@gmail.com',
                'password' => 'Enaq2540',
                'group' => 'aluno',
            ],

            [
                'name' => 'Isaac Nunes Palmeira ',
                'username' => 'isaacnp',
                'email' => 'isaacnunes1968@gmail.com',
                'password' => 'Enaq2515',
                'group' => 'aluno',
            ],

            [
                'name' => 'Isabella Ramos da Rocha ',
                'username' => 'isabelladr',
                'email' => 'isabellaramosdarocha@gmail.com',
                'password' => 'Enaq2541',
                'group' => 'aluno',
            ],

            [
                'name' => 'Ivani Ribeiro Dos Santos',
                'username' => 'ivanids',
                'email' => 'paulosouzanp25@gmail.com',
                'password' => 'Enaq2545',
                'group' => 'aluno',
            ],

            [
                'name' => 'João Erick Dos Santos Cristo ',
                'username' => 'joaoerdsc',
                'email' => 'joaoerickboy@gmail.com',
                'password' => 'Enaq2546',
                'group' => 'aluno',
            ],

            [
                'name' => 'Joaquim Ramos Sampaio',
                'username' => 'joaquimrs',
                'email' => 'pastorjoaquim32ramos@gmail.com',
                'password' => 'Enaq2566',
                'group' => 'aluno',
            ],

            [
                'name' => 'Jose Augusto Da Costa Colares ',
                'username' => 'augustodcc',
                'email' => 'augusto.colares007@gmail.com',
                'password' => 'Enaq2563',
                'group' => 'aluno',
            ],

            [
                'name' => 'José Francisco Andrade Felesmino ',
                'username' => 'josefel',
                'email' => 'jose_felesmino@hotmail.com',
                'password' => 'Enaq2526',
                'group' => 'aluno',
            ],

            [
                'name' => 'Josilene Dos Santos Marinho ',
                'username' => 'josilenesm',
                'email' => 'josilenedossantosmarinho@gmail.com',
                'password' => 'Enaq2528',
                'group' => 'aluno',
            ],

            [
                'name' => 'Kaylane Layanna Ramos Da Rocha',
                'username' => 'kaylanedr',
                'email' => 'kaylanerocha764@gmail.com',
                'password' => 'Enaq2547',
                'group' => 'aluno',
            ],

            [
                'name' => 'Kleber Anderson Reis Gomes ',
                'username' => 'kleberrg',
                'email' => 'kleber.anderson68@gmail.com',
                'password' => 'Enaq2564',
                'group' => 'aluno',
            ],

            [
                'name' => 'Lourimar Andrade ',
                'username' => 'lourimar',
                'email' => 'lourimarandrade09@gmail.com',
                'password' => 'Enaq2530',
                'group' => 'aluno',
            ],

            [
                'name' => 'Luana Costa De Sousa Milhomem ',
                'username' => 'luanacdsm',
                'email' => 'luanacdsmilhomem@outlook.com',
                'password' => 'Enaq2550',
                'group' => 'aluno',
            ],

            [
                'name' => 'Mailton Dias De Souza',
                'username' => 'mailtonds',
                'email' => 'mailtondias5@gmail.com',
                'password' => 'Enaq2551',
                'group' => 'aluno',
            ],

            [
                'name' => 'Marcilene Nunes Farias Ribeiro ',
                'username' => 'marcilenefr',
                'email' => 'marcilenefarias2110@gmail.com',
                'password' => 'Enaq2519',
                'group' => 'aluno',
            ],

            [
                'name' => 'Maria Benedita Caldeira De Carvalho Serrão',
                'username' => 'marycadcs',
                'email' => 'marycaldeira630@gmail.com',
                'password' => 'Enaq2533',
                'group' => 'aluno',
            ],

            [
                'name' => 'Maria Clara De Oliveira Carvalho ',
                'username' => 'mariacdoc',
                'email' => 'mariaclara03carvalho@gmail.com',
                'password' => 'Enaq2501',
                'group' => 'aluno',
            ],

            [
                'name' => 'Maria De Lourdes Da Silva Reis Monteiro',
                'username' => 'lurdessrm',
                'email' => 'lurdesreism72@gmail.com',
                'password' => 'Enaq2503',
                'group' => 'aluno',
            ],

            [
                'name' => 'Maria Orlete Ferreira Dos Santos ',
                'username' => 'mariaofds',
                'email' => 'mariaorletedossantos17@gmail.com',
                'password' => 'Enaq2505',
                'group' => 'aluno',
            ],

            [
                'name' => 'Marília Silveira Silva',
                'username' => 'maríliass',
                'email' => 'liliasaem@gmail.com',
                'password' => 'Enaq2506',
                'group' => 'aluno',
            ],

            [
                'name' => 'Nelson Manoel Pereira ',
                'username' => 'nelsonmp',
                'email' => 'pastornelson0np130573@gmail.com',
                'password' => 'Enaq2547',
                'group' => 'aluno',
            ],

            [
                'name' => 'Odair Pureza Belo',
                'username' => 'odairpb',
                'email' => 'obelo450@gmail.com',
                'password' => 'Enaq2544',
                'group' => 'aluno',
            ],

            [
                'name' => 'Oséas Teodósio Braga',
                'username' => 'aseastb',
                'email' => 'oseastbraga@gmail.com',
                'password' => 'Enaq2542',
                'group' => 'aluno',
            ],

            [
                'name' => 'Patricia Do Socorro Costa Andrade ',
                'username' => 'patricsca',
                'email' => 'patriciasocorroandrade@hotmail.com',
                'password' => 'Enaq2529',
                'group' => 'aluno',
            ],

            [
                'name' => 'Rafael Trindade Lago',
                'username' => 'rafaeltl',
                'email' => 'rafaelpopmovida@gmail.com',
                'password' => 'Enaq2508',
                'group' => 'aluno',
            ],

            [
                'name' => 'Regilene Da Costa Do Nascimento ',
                'username' => 'donasccdn',
                'email' => 'donascimentoregilene@gmail.com',
                'password' => 'Enaq2517',
                'group' => 'aluno',
            ],

            [
                'name' => 'Renato Ferreira De Moraes',
                'username' => 'renatodm',
                'email' => 'renatomoraes01@gmail.com',
                'password' => 'Enaq2555',
                'group' => 'aluno',
            ],

            [
                'name' => 'Roberta Machado Nóbrega De Moares ',
                'username' => 'robertndm',
                'email' => 'robertamoraes2000@gmail.com',
                'password' => 'Enaq2553',
                'group' => 'aluno',
            ],

            [
                'name' => 'Rosiliane Caldeira De Carvalho Pereira ',
                'username' => 'rosecadcp',
                'email' => 'rosecaldeira2@gmail.com',
                'password' => 'Enaq2512',
                'group' => 'aluno',
            ],

            [
                'name' => 'Sara Letícia Dos Reis Miranda ',
                'username' => 'saraardrm',
                'email' => 'saraaraujo2079@gmail.com',
                'password' => 'Enaq2548',
                'group' => 'aluno',
            ],

            [
                'name' => 'Sarah Israely Mafra Santa Rosa',
                'username' => 'sarahmsr',
                'email' => 'sarah.israely7@gmail.com',
                'password' => 'Enaq2559',
                'group' => 'aluno',
            ],

            [
                'name' => 'Sayuri Karolina Sousa Shimakawa Lago',
                'username' => 'sayurissl',
                'email' => 'sayurikarolina2@gmail.com',
                'password' => 'Enaq2507',
                'group' => 'aluno',
            ],

            [
                'name' => 'Sergio Dos Santos Tabarana',
                'username' => 'sergiost',
                'email' => 'sergiotabarana@gmail.com',
                'password' => 'Enaq2541',
                'group' => 'aluno',
            ],

            [
                'name' => 'Sharley Fonseca Costa ',
                'username' => 'sharleyc',
                'email' => 'sharleycosta@yahoo.com.br',
                'password' => 'Enaq2538',
                'group' => 'aluno',
            ],

            [
                'name' => 'Sueli De Castro Neves ',
                'username' => 'suelicn',
                'email' => 'mprsueli1@yahoo.com',
                'password' => 'Enaq2554',
                'group' => 'aluno',
            ],

            [
                'name' => 'Tamara Dos Santos Miranda De Souza',
                'username' => 'tamaramds',
                'email' => 'tamarasantossouza1208@gmail.com',
                'password' => 'Enaq2513',
                'group' => 'aluno',
            ],

            [
                'name' => 'Tarcila Cardoso Feitoza Nunes ',
                'username' => 'tarcilafn',
                'email' => 'tarcilacardoso15@gmail.com',
                'password' => 'Enaq2542',
                'group' => 'aluno',
            ],

            [
                'name' => 'Tony Raimundo Braga Da Silva ',
                'username' => 'tonyrbds',
                'email' => 'tonybraga871@gmail.com',
                'password' => 'Enaq2520',
                'group' => 'aluno',
            ],


            [
                'name' => 'Vanessa Alves Da Silva ',
                'username' => 'vanessaas',
                'email' => 'vanessaalvesbvc.89@gmail.com',
                'password' => 'Enaq2524',
                'group' => 'aluno',
            ],

            [
                'name' => 'Verônica Thalia Miranda De Souza',
                'username' => 'thaliamds',
                'email' => 'thaliamiranda898@gmail.com',
                'password' => 'Enaq2525',
                'group' => 'aluno',
            ],

            [
                'name' => 'Virlania Quesia Ferreira De Barros',
                'username' => 'virlanfdb',
                'email' => 'virlaniaquezia@hotmail.com',
                'password' => 'Enaq2504',
                'group' => 'aluno',
            ],

            [
                'name' => 'Walber Queiroz Dos Santos',
                'username' => 'walberds',
                'email' => 'walbercsrr@hotmail.com',
                'password' => 'Enaq2565',
                'group' => 'aluno',
            ],

            [
                'name' => 'Wanyerick Santos Buss',
                'username' => 'wanyericksb',
                'email' => 'wanyfigueira70@gmail.com',
                'password' => 'Enaq2562',
                'group' => 'aluno',
            ],

            [
                'name' => 'Washington Santos da Silva ',
                'username' => 'washingtonds',
                'email' => 'wkdpvatbelem@outlook.com',
                'password' => 'Enaq2544',
                'group' => 'aluno',
            ],

            [
                'name' => 'Wemerson Nunes Santos ',
                'username' => 'wemersonns',
                'email' => 'wemersonalmonte@gmail.com',
                'password' => 'Enaq2543',
                'group' => 'aluno',
            ],

            [
                'name' => 'Willian Sousa De Morais',
                'username' => 'williandm',
                'email' => 'moraiswillian473@gmail.com',
                'password' => 'Enaq2544',
                'group' => 'aluno',
            ],

            [
                'name' => 'Yara Cristiny Da Silva Rocha',
                'username' => 'yarasr',
                'email' => 'yaracristiny@icloud.com',
                'password' => 'Enaq2549',
                'group' => 'aluno',
            ],

            [
                'name' => 'Yvanete Dos Santos Moutinho ',
                'username' => 'yvanetesm',
                'email' => 'netemoutinho.81.s@gmail.com',
                'password' => 'Enaq2539',
                'group' => 'aluno',
            ],

            [
                'name' => 'Huguianny da Silva Teixeira ',
                'username' => 'huguiannyst',
                'email' => 'teixeirahuguianny@gmail.com',
                'password' => 'Enaq2540',
                'group' => 'aluno',
            ],

            [
                'name' => 'Fernando Vieira da Silva ',
                'username' => 'fernandods',
                'email' => 'fernandoimburana@gmail.com',
                'password' => 'Enaq2541',
                'group' => 'aluno',
            ],

            [
                'name' => 'Késsia Cristina Alves Moraes Silva ',
                'username' => 'kessiams',
                'email' => 'kessiamoraes2020@gmail.com',
                'password' => 'Enaq2542',
                'group' => 'aluno',
            ],

            [
                'name' => 'Nilza Santos de Araujo',
                'username' => 'nilzasda',
                'email' => 'nilzasoares2121@gmail.com',
                'password' => 'Enaq2543',
                'group' => 'aluno',
            ],




            [
                'name' => 'Rosangela Maria Paiva Figueira',
                'username' => 'rosangelapf',
                'email' => 'rosangelafigueira477@gmail.com',
                'password' => 'Enaq2544',
                'group' => 'aluno',
            ],
            [
                'name' => 'Valdilene da Silva Pantoja Pantoja',
                'username' => 'valdilenepp',
                'email' => 'valdilenedasilvapantojapantoja@gmail.com',
                'password' => 'Enaq2545',
                'group' => 'aluno',
            ],

            [
                'name' => 'Naurenir Cruz Almeida ',
                'username' => 'naurenirca',
                'email' => 'naurenir.cruz@gmail.com',
                'password' => 'Enaq2547',
                'group' => 'aluno',
            ],
            [
                'name' => 'Alessandra Sueli Rodrigues da Silva Barradas ',
                'username' => 'alessandrasb',
                'email' => 'alessandra_barradas22@htmail.com',
                'password' => 'Enaq2548',
                'group' => 'aluno',
            ],

            [
                'name' => 'Vânia Maria da Silva Aquino',
                'username' => 'vaniasa',
                'email' => 'vaniaaquino763@gmail.com',
                'password' => 'Enaq2550',
                'group' => 'aluno',
            ],
            [
                'name' => 'Giomaque Ferreira da Fonseca',
                'username' => 'giomaquedf',
                'email' => 'giomaqueferreiradafonseca@hotmail.com',
                'password' => 'Enaq2551',
                'group' => 'aluno',
            ],
            [
                'name' => 'Deivisson Gomes de Alfaia',
                'username' => 'deivissonda',
                'email' => 'deivissonalfaia659@gmail.com',
                'password' => 'Enaq2552',
                'group' => 'aluno',
            ],
            [
                'name' => 'Jacicleia Rodrigues de Alfaia',
                'username' => 'jucicleiada',
                'email' => 'alfaiapaty@gmail.com',
                'password' => 'Enaq2553',
                'group' => 'aluno',
            ],
            [
                'name' => 'Nayara kariny campos de Sá',
                'username' => 'nayarads',
                'email' => 'nayaracampos1010@gmail.com',
                'password' => 'Enaq2554',
                'group' => 'aluno',
            ],
            [
                'name' => 'Iranor de Freitas da Silva',
                'username' => 'iranords',
                'email' => 'pastoriranorsilva@gmail.com',
                'password' => 'Enaq2555',
                'group' => 'aluno',
            ],
            [
                'name' => 'Weliton de Jesus Borges',
                'username' => 'welitonjb',
                'email' => 'welitondejesusjesus@gmail.com',
                'password' => 'Enaq2556',
                'group' => 'aluno',
            ],
            [
                'name' => 'Carlos Augusto da Silva Cruz',
                'username' => 'carlossc',
                'email' => 'djpopshow@hotmail.com',
                'password' => 'Enaq2557',
                'group' => 'aluno',
            ],
            [
                'name' => 'Manoel Alves Machado Junior',
                'username' => 'manoelmj',
                'email' => 'manoelbaratinha55@gmail.com',
                'password' => 'Enaq2558',
                'group' => 'aluno',
            ],
            [
                'name' => 'Ana Paula Galvan Orsato Sousa',
                'username' => 'anapgos',
                'email' => 'ana171090@gmail.com',
                'password' => 'Enaq2559',
                'group' => 'aluno',
            ],
            [
                'name' => 'Maria Rosa Queiroz Vieira',
                'username' => 'mariarqv',
                'email' => 'mrqueirozvieira@gmail.com',
                'password' => 'Enaq2560',
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

            $attr2 = [
                'aluno_id' => $user_id,
                'curso_id' => 2,
            ];
            DB::table('aluno_cursos')->insert($attr2);
        }

        echo 'Alunos do ENAQ cadastrados com sucesso!';
    }
}
