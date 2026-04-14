<?php

namespace Database\Seeders;

use App\Models\Remembrance;
use App\Models\RemembrancePage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RemembranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entries = [
            ['image' => 'images/bor/vol1/Page117_Ballingall.jpg', 'label' => 'Page 117', 'full_name' => 'Donald Leslie Ballingall'],
            ['image' => 'images/bor/vol1/Page118_Bartlett.jpg', 'label' => 'Page 118', 'full_name' => 'Ralph William Bartlett'],
            ['image' => 'images/bor/vol1/Page119_Baxter.jpg', 'label' => 'Page 119', 'full_name' => 'Robert Leroy Baxter'],
            ['image' => 'images/bor/vol1/Page120_Bowery.jpg', 'label' => 'Page 120', 'full_name' => 'Edwin Maurice Bowery'],
            ['image' => 'images/bor/vol1/Page121_Brayford.jpg', 'label' => 'Page 121', 'full_name' => 'Lloyd Willis Brayford'],
            ['image' => 'images/bor/vol1/Page122_Buchanan.jpg', 'label' => 'Page 122', 'full_name' => 'Robert Munro Buchanan'],
            ['image' => 'images/bor/vol1/Page123_Burston.jpg', 'label' => 'Page 123', 'full_name' => 'Frank Lorne Burston'],
            ['image' => 'images/bor/vol1/Page124_Burston.jpg', 'label' => 'Page 124', 'full_name' => 'Glen Richard Burston'],
            ['image' => 'images/bor/vol1/Page125_Caton.jpg', 'label' => 'Page 125', 'full_name' => 'Archie Ernest Caton'],
            ['image' => 'images/bor/vol1/Page126_Chapman.jpg', 'label' => 'Page 126', 'full_name' => 'Kenneth Frank Chapman'],
            ['image' => 'images/bor/vol1/Page127_Cowing.jpg', 'label' => 'Page 127', 'full_name' => 'Gordon Lloyd Cowing'],
            ['image' => 'images/bor/vol1/Page128_Crawley.jpg', 'label' => 'Page 128', 'full_name' => 'Frederick William Crawley'],
            ['image' => 'images/bor/vol1/Page129_Crone.jpg', 'label' => 'Page 129', 'full_name' => 'Robert Duncan Crone'],
            ['image' => 'images/bor/vol1/Page130_Crowe.jpg', 'label' => 'Page 130', 'full_name' => 'Eric Arthur Crowe'],
            ['image' => 'images/bor/vol1/Page131_Curtis.jpg', 'label' => 'Page 131', 'full_name' => 'Kenneth George Curtis'],
            ['image' => 'images/bor/vol1/Page134_Deane.jpg', 'label' => 'Page 134', 'full_name' => 'Kenneth Ignatius Joseph Deane'],
            ['image' => 'images/bor/vol1/Page135_Dickson.jpg', 'label' => 'Page 135', 'full_name' => 'Harry George Dickson'],
            ['image' => 'images/bor/vol1/Page136_Dimock.jpg', 'label' => 'Page 136', 'full_name' => 'Hedley Gilbert Dimock'],
            ['image' => 'images/bor/vol1/Page137_Dissing.jpg', 'label' => 'Page 137', 'full_name' => 'Jens Lawrence Dissing'],
            ['image' => 'images/bor/vol1/Page138_Dixon.jpg', 'label' => 'Page 138', 'full_name' => 'Michael Ralph Dixon'],
            ['image' => 'images/bor/vol1/Page139_Dobson.jpg', 'label' => 'Page 139', 'full_name' => 'Walter Arthur Dobson'],
            ['image' => 'images/bor/vol1/Page140_Dorey.jpg', 'label' => 'Page 140', 'full_name' => 'Albert I. Dorey'],
            ['image' => 'images/bor/vol1/Page141_Douglas.jpg', 'label' => 'Page 141', 'full_name' => 'Glenn Thomas Douglas'],
            ['image' => 'images/bor/vol1/Page142_Doupe.jpg', 'label' => 'Page 142', 'full_name' => 'Richard Vernon Doupe'],
            ['image' => 'images/bor/vol1/Page143_Drew.jpg', 'label' => 'Page 143', 'full_name' => 'Thomas Alexander Drew'],
            ['image' => 'images/bor/vol1/Page144_Drynan.jpg', 'label' => 'Page 144', 'full_name' => 'Gerald Clarence Drynan'],
            ['image' => 'images/bor/vol1/Page145_Dymond.jpg', 'label' => 'Page 145', 'full_name' => 'Charles Vernon Dymond'],
            ['image' => 'images/bor/vol1/Page146_Fletcher.jpg', 'label' => 'Page 146', 'full_name' => 'Arthur Gordon Fletcher'],
            ['image' => 'images/bor/vol1/Page147_Gartside.jpg', 'label' => 'Page 147', 'full_name' => 'Wallace Mallory Gartside'],
            ['image' => 'images/bor/vol1/Page148_Granger.jpg', 'label' => 'Page 148', 'full_name' => 'Frederick Harold Granger'],
            ['image' => 'images/bor/vol1/Page149_Gregory.jpg', 'label' => 'Page 149', 'full_name' => 'Harold William Gregory'],
            ['image' => 'images/bor/vol1/Page150_Hanley.jpg', 'label' => 'Page 150', 'full_name' => 'John Edwin Hanley'],
            ['image' => 'images/bor/vol1/Page151_Hardy.jpg', 'label' => 'Page 151', 'full_name' => 'Robert Edward Hardy'],
            ['image' => 'images/bor/vol1/Page152_Hawkey.jpg', 'label' => 'Page 152', 'full_name' => 'John Walter Hawkey'],
            ['image' => 'images/bor/vol1/Page153_Hexter.jpg', 'label' => 'Page 153', 'full_name' => 'Robert William Hexter'],
            ['image' => 'images/bor/vol1/Page154_Hill.jpg', 'label' => 'Page 154', 'full_name' => 'Rowland Wilkins Hill'],
            ['image' => 'images/bor/vol1/Page156_Holtze.jpg', 'label' => 'Page 156', 'full_name' => 'Jack Holtze'],
            ['image' => 'images/bor/vol1/Page157_James.jpg', 'label' => 'Page 157', 'full_name' => 'John William James'],
            ['image' => 'images/bor/vol1/Page158_Lee.jpg', 'label' => 'Page 158', 'full_name' => 'Calvin Frederick Lee'],
            ['image' => 'images/bor/vol1/Page159_Lee.jpg', 'label' => 'Page 159', 'full_name' => 'James Livingston Lee'],
            ['image' => 'images/bor/vol1/Page160_Lee.jpg', 'label' => 'Page 160', 'full_name' => 'Richard John Lee'],
            ['image' => 'images/bor/vol1/Page161_Lewis.jpg', 'label' => 'Page 161', 'full_name' => 'Harvey Daniel Lewis'],
            ['image' => 'images/bor/vol1/Page162_Lott.jpg', 'label' => 'Page 162', 'full_name' => 'William Wesley Lott'],
            ['image' => 'images/bor/vol1/Page163_MacKenzie.jpg', 'label' => 'Page 163', 'full_name' => 'Ian MacKenzie'],
            ['image' => 'images/bor/vol1/Page164_Marshall.jpg', 'label' => 'Page 164', 'full_name' => 'John Glenford Alexander Marshall'],
            ['image' => 'images/bor/vol1/Page165_McKinstry.jpg', 'label' => 'Page 165', 'full_name' => 'Kenneth McKinstry'],
            ['image' => 'images/bor/vol1/Page166_McMillan.jpg', 'label' => 'Page 166', 'full_name' => 'Harold Roy McMillan'],
            ['image' => 'images/bor/vol1/Page167_McWade.jpg', 'label' => 'Page 167', 'full_name' => 'John Robert McWade'],
            ['image' => 'images/bor/vol1/Page168_Moffitt.jpg', 'label' => 'Page 168', 'full_name' => 'Stuart Bruce Moffitt'],
            ['image' => 'images/bor/vol1/Page169_Mosley.jpg', 'label' => 'Page 169', 'full_name' => 'William Bertram Mosley'],
            ['image' => 'images/bor/vol1/Page170_Murdie.jpg', 'label' => 'Page 170', 'full_name' => 'Ross Thomas Murdie'],
            ['image' => 'images/bor/vol1/Page171_Murdie.jpg', 'label' => 'Page 171', 'full_name' => 'Willis Don Murdie'],
            ['image' => 'images/bor/vol1/Page172_Navin.jpg', 'label' => 'Page 172', 'full_name' => 'Donald Joseph Navin'],
            ['image' => 'images/bor/vol1/Page173_Norfolk.jpg', 'label' => 'Page 173', 'full_name' => 'Kenney Weeks Norfolk'],
            ['image' => 'images/bor/vol1/Page174_Parkinson.jpg', 'label' => 'Page 174', 'full_name' => 'Jack Askew Parkinson'],
            ['image' => 'images/bor/vol1/Page175_Pierce.jpg', 'label' => 'Page 175', 'full_name' => 'Jack Randolph Pierce'],
            ['image' => 'images/bor/vol1/Page176_Piercy.jpg', 'label' => 'Page 176', 'full_name' => 'Howard Shurvin Piercy'],
            ['image' => 'images/bor/vol1/Page177_Pitt.jpg', 'label' => 'Page 177', 'full_name' => 'Harold Ernest Pitt'],
            ['image' => 'images/bor/vol1/Page178_Purser.jpg', 'label' => 'Page 178', 'full_name' => 'John Henry Purser'],
            ['image' => 'images/bor/vol1/Page179_Rider.jpg', 'label' => 'Page 179', 'full_name' => 'William Albert Rider'],
            ['image' => 'images/bor/vol1/Page180_Roulston.jpg', 'label' => 'Page 180', 'full_name' => 'Jack Chester Roulston'],
            ['image' => 'images/bor/vol1/Page181_Rowed.jpg', 'label' => 'Page 181', 'full_name' => 'Samuel Edgar Rowed'],
            ['image' => 'images/bor/vol1/Page187_Stanfield.jpg', 'label' => 'Page 187', 'full_name' => 'Donald Arthur Standfield'],
            ['image' => 'images/bor/vol1/Page190_Smith.jpg', 'label' => 'Page 190', 'full_name' => 'Frederick John Smith'],
            ['image' => 'images/bor/vol1/Page193_Sparling.jpg', 'label' => 'Page 193', 'full_name' => 'John Lewis Sparling'],
        ];

        foreach ($entries as $entry) {
            $page = RemembrancePage::create([
                'image_path' => $entry['image'],
                'page_label' => $entry['label'],
            ]);

            Remembrance::create([
                'full_name' => $entry['full_name'],
                'page_id' => $page->id,
            ]);
        }
    }
}
