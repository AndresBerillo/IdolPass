<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['value' => 'Boliche',
            
        ],
            ['value' => 'Concierto',
            
        ],
            ['value' => 'Teatro',
           
        ]
    ];
        DB::table('types')->insert($data);
    }
}
