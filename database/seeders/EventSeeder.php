<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['title' => 'Idol Fest',
            'producer' => 'El EMERGENTE',
            'description' => 'VUELVE LA IDOLFEST 🇰🇷💥 el SÁBADO 25/5 y este mes con 4 Headliners 😎🚀💓: SVT, Twice, TxT e Itzy 🌈💫. Tu Fiesta K-pop manija lista para hacerte bailar toda la noche con los mejores temazos 🤝🥳.
            🌈Quiénes pueden entrar?: mayores de 18 con DNI (la fiesta es para mayores porque hay venta de alcohol 🍻)
            📍En puerta: $4.000
            
            💥Previa y Minisets: POP/REGGAETON Y CUMBIA💥- 🇰🇷JODA FULL KPOP - PROYECCIÓN DE VIDEOS de los Headliners: SVT, Twice, TxT e Itzy 🌈 ✨😘
            ✨🎉STORES KPOP 😎🇰🇷- STAND DE FOTOS📸- GLITTER FREE✨ ',
            'location_name' => 'El Emergente Almagro',
            'location_address' => 'Francisco Acuña de Figueroa 1030, Comuna 5, Ciudad Autónoma de Buenos Aires, Argentina',
            'price' => 4000,
            'type_id'=>1,
            'image_id'=>1,
            'event_date' => '2024-05-25',
        ],
            ['title' => 'MUSEUM MICROS',
            'producer' => 'URBBAN PRODD',
            'description' => '31/05 MUSEUM
            SHOW EN VIVO DOBLE P + LOCURA MIX
            
            MICROS DESDE 
            PACHECO/TIGRE/SAN FERNANDO/VICTORIA/SAN ISIDRO/MARTINEZ/OLIVOS/VICENTE LOPEZ/MUNRO/VILLA ADELINA/BOULOGNE
            
            
            CONSULTAR PARADAS Y HORARIOS.
            1133415301
            ',
            'location_name' => null,
            'location_address' => 'PERU 535, Comuna 1, Ciudad Autónoma de Buenos Aires, Argentina',
            'price' => 6000,
            'type_id'=>1,
            'image_id'=>2,
            'event_date' => '2024-05-31',
        ],
            ['title' => 'NATIVE',
            'producer' => 'Move It',
            'description' => 'Native es un evento que se realizara en zona norte, en una ubicación open air. Este evento contará con carpa, puesta en escena y dj invitados. Las entradas compradas tanto por Flashpass como Mercado Pago van a contar con barra libre y estacionamiento dentro del predio donde se realizara el evento.

            El evento es exclusivamente para +18.
            Nos reservamos el derecho de entrada.',
            'location_name' => null,
            'location_address' => 'Secrect Location - Zona Norte, Pilar, Buenos Aires, Argentina',
            'price' => 15000,
            'type_id'=>1,
            'image_id'=>3,
            'event_date' => '2024-06-01',
        ],
            ['title' => 'mp3 Tour - EMILIA',
            'producer' => 'Fenix Entertainment',
            'description' => 'Emilia presenta su nueva gira ".MP3" en Buenos Aires después de su exitoso Tour 2023 que abarcó 22 fechas en diversos países. Con producción de Fenix Entertainment, la gira promete una puesta en escena impactante, destacando la escenografía, vestuario y coreografías que caracterizan los shows de Emilia.

            El álbum ".mp3" marca la reinvención de Emilia como artista de pop urbano y ha obtenido reconocimiento con más de 3 billones de reproducciones en plataformas digitales. Además, destaca su participación en eventos destacados como el "Festival Equal" de Spotify y su nominación a los Premios Los 40.',
            'location_name' => 'Estadio Velez Sarfield',
            'location_address' => 'Av. Juan Bautista Justo 9200, C1408AKU Cdad. Autónoma de Buenos Aires',
            'price' => 70000,
            'type_id'=>2,
            'image_id'=>4,
            'event_date' => '2024-05-30',
        ],
            ['title' => 'Miranda!',
            'producer' => 'Flow',
            'description' => 'Miranda! llega por primera vez al Movistar Arena de Buenos Aires el próximo 20, 21 y 22 de junio.
            
            La banda redobla la apuesta una vez más y prepara un nuevo show extraordinario con los mejores temas de todo su repertorio. Pero esto no es todo: ¡Será la ocasión ideal para presentar en vivo nuevas canciones!
            
            El artista invitado para abrir las 3 noches será Juan Ingaramo.',
            'location_name' => 'Movistar Arena',
            'location_address' => 'Humboldt 450, C1414 Cdad. Autónoma de Buenos Aires',
            'price' => 55000,
            'type_id'=>2,
            'image_id'=>5,
            'event_date' => '2024-06-22',
        ],
            ['title' => 'Desde Cerca - Tan Bionica',
            'producer' => 'DF Entertainment',
            'description' => 'Tan Bionica agrega una noche mágica más: el show llega el 1 de agosto al Luna Park, con producción de DF Entertainment.



            Para este show, a diferencia de los que la banda realizó el año pasado en estadios de más de 60.000 personas, Chano, Bambi, Seby y Diega eligieron un espacio que les permita lograr una conexión más íntima y cercana con sus fans. Las entradas para esta Última noche mágica en el Luna Park estarán disponibles desde el 30 de abril a las 13 hs, únicamente por la web oficial de IdolPass.
            ',
            'location_name' => 'Luna Park',
            'location_address' => 'Av. Eduardo Madero 470, C1106 Cdad. Autónoma de Buenos Aires',
            'price' => 45000,
            'type_id'=>2,
            'image_id'=>6,
            'event_date' => '2024-06-22',
        ],
            ['title' => 'Legalmente rubia',
            'producer' => 'DF Entertainment',
            'description' => 'Basada en el best seller de Amanda Brown y en la película de 2001 nominada al Globo de Oro.
            Elle Woods es una chica que aparentemente lo tiene todo, muy popular en técnicas de moda y novia del heredero de una familia de apellido importante. Pero su vida da un vuelco de 180 grados cuando su novio decide terminar la relación porque quiere hacer carrera en el mundo de la política y necesita una novia menos "RUBIA". Elle entonces decide hacer todo lo que sea necesario para inscribirse en la prestigiosa Facultad de Derecho de Harvard y demostrar que puede ser tan seria como cualquiera. Pocos creen en ella al principio, pero fiel a sí misma, con frescura, audacia, las uñas lindas y usando rosa en tribunales, dejará sin palabras a más de uno. Y demostrará que los prejuicios definitivamente pasaron de moda.',
            'location_name' => 'Teatro Liceo',
            'location_address' => 'Avenida Rivadavia 1495, Buenos Aires, Argentina',
            'price' => 22000,
            'type_id'=>3,
            'image_id'=>7,
            'event_date' => '2024-06-09',
        ],
            ['title' => 'SCHOOL OF ROCK',
            'producer' => 'Preludio Entertainment',
            'description' => 'De los productores y equipo creativo de Matilda, obra que alcanzó más de 160.000 espectadores en Buenos Aires, sube al escenario del Teatro Gran Rex, SCHOOL OF ROCK, el Musical, la obra más esperada para toda la familia. 

            Protagonizada por el multifacético Agustín Soy Rada Aristaran (Matilda) y la indiscutida Angela Leiva como Rosalie Mullins, directora del Colegio Horace Green, Sofía Pachano como Patty Di Marco y Santiago Otero Ramos interpretando a Ned Schneebly. Patty es la antagonista de la historia y novia de Ned, el mejor amigo de aventuras rockeras en la juventud de Dewey. 
            
            Completa este elenco fuera de serie Germán “TRIPA” Tripel en el rol de Theo, compañero de banda de Dewey.
            
            El 20 de JUNIO de 2024 se abrirá paso para el estreno de SCHOOL OF ROCK, el Musical en BUENOS AIRES, luego del éxito mundial de sus producciones en Nueva York, Londres, China, Australia, Nueva Zelanda, San Pablo, Sudáfrica, Madrid y Corea.
            
            Para toda la familia y con una gran apuesta de producción nacional formada por tres elencos de 39 niños y niñas, SCHOOL OF ROCK, el Musical, será el único espectáculo en la cartelera Argentina con una banda de niños y niñas, actuando, bailando y TOCANDO INSTRUMENTOS EN VIVO.',
            'location_name' => 'Teatro Gran Rex',
            'location_address' => 'Av. Corrientes 857, Buenos Aires, Argentina',
            'price' => 22000,
            'type_id'=>3,
            'image_id'=>8,
            'event_date' => '2024-06-20',
        ]
    ];
        DB::table('events')->insert($data);
    }
}
