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
            'name' => 'RCAF “Wing” Insignias',
            'object_type' => 'Military Insignias (Qualification Badges)',
            'period' => 'Second World War (WWII), c. 1939-1945',
            'origin' => 'Canada',
            'material' => 'Embroidered Fabric',
            'description' => '<p>These Royal Canadian Air Force (RCAF) wing insignias were awarded to individual airmen upon graduation from specialized training schools under the British Commonwealth Air Training Plan (BCATP). Each insignia denotes a specific aircrew role:</p>
            <ul>
                <li>N - Air Navigator</li>
                <li>B - Air Bomber</li>
                <li>E - Flight Engineer</li>
                <li>WAG - Wireless Air Gunner</li>
                <li>AG - Air Gunner</li>
            </ul>
            <p>A full set of wings was awarded to pilots upon successful completion of flight training. These badges symbolized both qualification and status within the aircrew and were worn on the uniform.</p>',
            'image_path' => 'images/artifacts/RCAF-Wing-Insignias.jpg',
        ],
    
        [
            'name' => 'Canadian Memorial Cross ',
            'object_type' => 'Military Decoration (Memorial Medal)',
            'period' => 'Second World War (WWII), c. 1939-1945',
            'origin' => 'Canada',
            'material' => 'Silver (Medal); Case - Cardboard, Paper, Metal, And Velvet Lining',
            'description' => '<p>The Memorial Cross, commonly known as the Silver Cross, was awarded to the mothers and widows of Canadian service members who died in active service. Instituted in 1919, it became a significant symbol of personal sacrifice and national remembrance. The decoration was typically worn or kept by the recipient in honour of their fallen relative.</p>',
            'image_path' => 'images/artifacts/Canadian-Memorial-Cross.jpg',
        ],

        [
            'name' => 'Supermarine Spitfire Model',
            'object_type' => 'Aircraft Model',
            'period' => 'Late 20th Century',
            'origin' => 'Likely United Kingdom (Model Depicting a British Aircraft)',
            'material' => 'Plastic',
            'description' => '<p>This model represents a Supermarine Spitfire but has been inaccurately marked with the squadron code “VY-Q” and serial number “P3854,” which are associated with a Hawker Hurricane flown by Group Captain Peter Townsend.</p>
            <p>The additional markings, including the Donald Duck emblem, are linked to Squadron Leader Jan Zumbach of No. 303 (Polish) Squadron. Zumbach did fly Spitfires during the Second World War, including during the Battle of Britain.</p>',
            'image_path' => 'images/artifacts/Spitfire-Model.jpg',
        ],

        [
            'name' => 'Practice Bomb',
            'object_type' => 'Training Munition',
            'period' => 'Second World War (WWII), c. 1939-1945',
            'origin' => 'Canada',
            'material' => 'Metal; Chemical Charge (For Smoke Marker)',
            'description' => '<p?>This practice bomb was used in aerial training, particularly within the British Commonwealth Air Training Plan (BCATP). Trainee aircrew flying aircraft such as the Avro Anson would pass over ground targets measuring approximately 30 feet square and release these bombs, each weighing about 11 pounds.</p>
            <p>Upon impact, the bomb emitted a puff of smoke, allowing observers to accurately identify the point of impact. Trainees typically made three passes over a target, dropping two bombs per sortie. Over the course of a six-week training program, a student might release as many as 117 practice bombs.</p>',
            'image_path' => 'images/artifacts/Practice-Bomb.jpg',
        ],

        [
            'name' => 'Hockey Gear',
            'object_type' => 'Sports Equipment',
            'period' => 'c. 1948',
            'origin' => 'Canada',
            'material' => 'Leather (Glove); Metal And Leather (Skates); Wood (Stick)',
            'description' => "<p>These skates, goalie stick, and blocker glove were used by Murray Dowey during the 1948 Winter Olympics in St. Moritz, Switzerland, as part of the gold medal-winning Royal Canadian Air Force (RCAF) Flyers team.</p>
            <p>The stick bears the “Battleship” stamp, referring to a brand of hockey sticks manufactured by Albert “Battleship” Leduc, a former Montreal Canadiens defenseman who later established his own company following his retirement from the NHL in the 1930s.</p>
            <p>Dowey played a key role in the team's success, recording five shutouts and achieving a goals-against average of 0.62, which remains an Olympic record.</p>",
            'image_path' => 'images/artifacts/Hockey-Gear.jpg',
        ],
        
        [
            'name' => 'RCAF Uniform Jacket',
            'object_type' => "Officer's Uniform Jacket",
            'period' => 'c. 1943',
            'origin' => 'London, Ontario, Canada',
            'material' => 'Wool Serge (Uniform Fabric); Metal (Buttons); Embroidered Textile (Insignia)',
            'description' => "<p>This uniform jacket belonged to Flying Officer Nathan Isaacovitch, J38327 of the Royal Canadian Air Force (RCAF). It was tailored in the Smallman and Ingram department store in London, Ontario.</p>
            <p>The jacket displays a Navigator's wing badge and accompanying insignia, indicating Isaacovitch's role as an air navigator. He graduated from No. 4 Air Observer School (AOS) around 1943 as part of the British Commonwealth Air Training Plan.</p>",
            'additional_info' => "<p>Nathan Isaacovitch (later Nathan Isaacs) was born on November 27, 1922, in Winnipeg, Manitoba, and passed away in Toronto on August 17, 2022, just short of his 100th birthday. He was the son of Manya and Isaac Isaacovitch and the third of four children. He was predeceased by his sisters, Evelyn and Sadie, and his younger brother, Avrom.</p>
            <p>He was raised in a close-knit community in Winnipeg's North End during the Great Depression, surrounded by extended family. At age 16, his family moved to Toronto, though his strong connection to Winnipeg and its values of community and generosity remained throughout his life.</p>
            <p>In Toronto, he attended Jarvis Collegiate Institute, where he met his future wife, Miriam Isaacs (née Lavine). After graduation, he began pursuing a career in accounting before enlisting in the Royal Canadian Air Force during the Second World War.</p>
            <p>Serving as a navigator, he flew 35 operational missions over Europe, primarily in Halifax bombers, consistently bringing his crew home safely. Navigators played a critical role, performing complex calculations under combat conditions, often in low-light environments where the success of the mission depended on their precision.</p>
            <p>Following the war, he returned to Toronto, married Miriam, and had two sons, Howard and Peter. He completed his studies in accounting and spent his entire professional career with one firm, eventually retiring as a partner.</p>",
            'image_path' => 'images/artifacts/RCAF-Uniform.jpg',
        ],

        [
            'name' => 'Photograph of Air Bombers, Course 78 (1943)',
            'object_type' => 'Photograph',
            'period' => 'c. 1943',
            'origin' => 'London, Ontario, Canada',
            'material' => 'Photographic Paper; Gelatin Silver Print (Film Emulsion)',
            'description' => "<p>This group photograph depicts members of Air Bombers Course 78 during their training in 1943, likely as part of the British Commonwealth Air Training Plan (BCATP). Although the individuals are not identified in the image, most of the men signed the reverse of the photograph.
            The only known individual from London, Ontario, is Keith Caspell, who later served as a bomb aimer in a Halifax bomber with No. 427 Squadron in 1944.</p>",
            'additional_info' => "<p>Group photographs were typically taken for each training course, often at the beginning of instruction. The museum holds only two such group photographs in its collection.</p>
            <p>During the Second World War, there were just over 100 training courses for both Air Navigators and Air Bombers under the BCATP, reflecting the scale of Canada's aircrew training program.</p>",
            'image_path' => 'images/artifacts/Air-Bombers.jpg',
        ],

        [
            'name' => 'Medals',
            'object_type' => 'Military Decorations (Medal Group)',
            'period' => 'Second World War (WWII), c. 1939-1945',
            'origin' => 'Canada',
            'material' => 'Metal; Woven Ribbon',
            'description' => "<p>This court-mounted medal group was awarded to Flying Officer Nathan Isaacovitch of the Royal Canadian Air Force (RCAF) in recognition of his service during the Second World War.</p>
            <p>The medals, from left to right, are: the 1939-45 Star, the France and Germany Star, the Defence Medal, the Canadian Volunteer Service Medal with bar and Bomber Command clasp, and the 1939-45 War Medal.</p>
            <p>These decorations reflect Isaacovitch's operational service in the European theatre, including his role as a navigator flying missions over occupied Europe.</p>",
            'image_path' => 'images/artifacts/Medals.jpg',
        ],

        [
            'name' => '1943 Programme',
            'object_type' => 'Programme',
            'period' => 'c. 1943',
            'origin' => 'Canada',
            'material' => 'Card Stock (Printed Paper)',
            'description' => "<p>This programme was produced for the graduation and presentation of wings ceremony for Air Bombers Course 78 and Air Navigators Course 7, held on July 23, 1943.</p>
            <p>Graduation was marked by a formal public ceremony in which trainees paraded before a reviewing stand and were individually presented with their wings. Air Observers initially received an “O” brevet, later replaced by the “N” for Navigator, while Air Bombers received a “B” brevet.</p>
            <p>The ceremony was typically presided over by the base commander, often Wing Commander W. R. Kingsland, who presented the wings to the graduates. On this occasion, both an Air Bomber and an Air Navigator course completed training simultaneously.</p>
            <p>At any given time, as many as seven training courses could be active at the base, with wings ceremonies held approximately every two weeks.</p>",
            'image_path' => 'images/artifacts/1943-Program.jpg',
        ],

        [
            'name' => "Uniform Jacket (Women's Division)",
            'object_type' => "Military Uniform (Women's Division)",
            'period' => 'c. 1950s',
            'origin' => 'Canada',
            'material' => 'Wool (Uniform Fabric); Metal (Buttons); Textile (Cap)',
            'description' => "<p>This Royal Canadian Air Force (RCAF) Women's Division uniform consists of a dress jacket and dress cap associated with two service members.</p>
            <p>The dress cap belonged to Marilyn Chalk, who served in the RCAF from April 1957 to April 1959. The dress jacket belonged to Corporal Glenora (“Glen”) Cole, who served from 1957 to 1964.</p>
            <p>The Women's Division of the RCAF played an important role in supporting air force operations during and after the Second World War, with members serving in a variety of administrative and technical positions.</p>",
            'image_path' => 'images/artifacts/Uniform-Women.jpg',
        ],

        [
            'name' => 'Western Fair Plaque',
            'object_type' => 'Plaque',
            'period' => 'c. 1960',
            'origin' => 'Canada',
            'material' => 'Wood; Cast Metal',
            'description' => "<p>This plaque was presented to No. 2420 Aircraft Control and Warning Squadron (Auxiliary), Royal Canadian Air Force (RCAF), by the Western Fair Association in recognition of the unit's participation in the 1960 Warriors' Day Parade.</p>
            <p>The squadron received the award for “Best Reserve Women's Force,” reflecting the performance and appearance of its airwomen during the event.</p>",
            'additional_info' => "<p>According to the 2420 Squadron Historical Narrative dated September 17, 1960, the airwomen of 2420 AC&W Squadron (Auxiliary) were awarded the Duchess of Kent trophy for the best Reserve Force Women's Unit on parade. They were led by Flight Lieutenant M. L. Shipley.</p>
            <p>The 2420 Aircraft Control and Warning Squadron (Auxiliary), RCAF, was based at Crumlin, Ontario, from 1957 to 1961. As a part-time reserve unit, its members trained during the summer at Falconbridge, Ontario. Similar AC&W squadrons were located across Canada.</p>
            <p>In the event of war or national emergency, these units would have operated as “Guardians of the Sky,” supporting early warning systems from radar installations along the Pinetree Line. This network of radar stations, later integrated under the North American Aerospace Defense Command (NORAD), was designed to detect potential Soviet bomber attacks during the early Cold War.</p>
            <p>With the development of the Semi-Automatic Ground Environment (SAGE) system, which used advanced computer networks to coordinate radar data, the role of AC&W squadrons became obsolete, and the units were disbanded in 1961.</p>",
            'image_path' => 'images/artifacts/Western-Plaque.jpg',
        ],

                [
            'name' => 'RCAF Insignia (Embroidered)',
            'object_type' => 'Decorative Textile (Wall Hanging)',
            'period' => 'Mid-Late 20th Century',
            'origin' => 'Canada',
            'material' => 'Woven Textile (Likely Wool Or Cotton Yarn)',
            'description' => "<p>This decorative wall hanging features the insignia of the Royal Canadian Air Force (RCAF), including the crowned eagle and maple leaf emblem.</p>
            <p>Produced as a display piece rather than for uniform use, such items were commonly created for commemorative, decorative, or institutional purposes. The insignia reflects the identity and heritage of the RCAF and would have been used to signify affiliation, pride, or service.</p>",
            'image_path' => 'images/artifacts/RCAF-Insignia.jpg',
        ],
    ];

    foreach ($artifacts as $artifact) {
        Artifact::create($artifact);
    }

    //Artifact::factory()->create();
    }
}