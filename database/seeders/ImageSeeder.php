<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['src' => 'events/event1.jpeg',
            
        ],
            ['src' => 'events/event2.jpeg',
            
        ],
            ['src' => 'events/event3.png',
           
        ],
            ['src' => 'events/event4.jpg',
            
        ],
            ['src' => 'events/event5.jfif',
            
        ],
            ['src' => 'events/event6.jpg',
            
        ],
            ['src' => 'events/event7.jpg',
           
        ],
            ['src' => 'events/event8.webp',
            
        ]
    ];
        DB::table('images')->insert($data);
    }
}
