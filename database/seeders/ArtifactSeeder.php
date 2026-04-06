<?php

namespace Database\Seeders;

use App\Models\Artifact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtifactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artifacts = [
            [
            'name' => 'Military Insignias',
            'object_type' => 'Military Insignias (Qualification Badges)',
            'period' => 'Second World War (WWII), c. 1939-1945',
            'origin' => 'Canada',
            'material' => 'Embroidered Fabric ',
            'description' => 'These Royal Canadian Air Force (RCAF) wing insignias were awarded to individual airmen upon graduation from specialized training schools under the British Commonwealth Air Training Plan (BCATP). Each insignia denotes a specific aircrew role:
            N - Air Navigator
            B - Air Bomber
            E - Flight Engineer
            WAG - Wireless Air Gunner
            AG - Air Gunner
            A full set of wings was awarded to pilots upon successful completion of flight training. These badges symbolized both qualification and status within the aircrew and were worn on the uniform.',
            'image_path' => 'images/august12.png',
        ],

        [
            'name' => ' Supermarine Spitfire Model',
            'object_type' => 'Aircraft Model',
            'period' => 'Late 20th Century',
            'origin' => 'Likely United Kingdom (Model Depicting a British Aircraft)',
            'material' => 'Plastic',
            'description' => 'This model represents a Supermarine Spitfire but has been inaccurately marked with the squadron code “VY-Q” and serial number “P3854,” which are associated with a Hawker Hurricane flown by Group Captain Peter Townsend.
            The additional markings, including the Donald Duck emblem, are linked to Squadron Leader Jan Zumbach of No. 303 (Polish) Squadron. Zumbach did fly Spitfires during the Second World War, including during the Battle of Britain.',
            'image_path' => 'images/august13.png',
        ],
        
    ];

    foreach ($artifacts as $artifact) {
        Artifact::create($artifact);
    }

    Artifact::factory()->count(5)->create();
    }
}