<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Annonce;

class AnnonceSeeder extends Seeder
{
    public function run(): void
    {
        Annonce::create([
            'titre' => 'Appartement Casablanca',
            'description' => 'Très bel appartement',
            'type' => 'Appartement',
            'ville' => 'Casablanca',
            'superficie' => 80,
            'neuf' => true,
            'prix' => 900000
        ]);

        Annonce::create([
            'titre' => 'Villa Marrakech',
            'description' => 'Villa luxe',
            'type' => 'Villa',
            'ville' => 'Marrakech',
            'superficie' => 300,
            'neuf' => false,
            'prix' => 2500000
        ]);
    }
