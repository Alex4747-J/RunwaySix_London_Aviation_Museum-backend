<?php

namespace Database\Seeders;

use App\Models\EventsBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventsBlogs = [
            [
            'title' => 'Remembrance Day: Honouring RACF Airmen',
            'post_type' => 'event',
            'event_date' => '2026-11-11',
            'event_time' => '10:00 AM - 5:00 PM',
            'location' => 'London Aviation Museum',
            'description' => 'A commemorative event honouring Royal Canadian Air Force personnel from London who served during the Second World War.',
            'content' => '<h3>About the Event</h3>
            <p>Remembrance Day is dedicated to commemorating the service and sacrifice of Royal Canadian Air Force airmen from London who served during the Second World War.</p>
            <p>Held at the London Aviation Museum, this event brings together visitors, historians, and members of the community to reflect on the contributions of those who served. It highlights the role of the Royal Canadian Air Force and the experiences of local airmen who took part in the air war.</p>
            <p>Through a combination of remembrance activities and historical interpretation, the event offers an opportunity to honour their legacy and better understand the impact of their service during a critical period of the war.</p>
            <h3>What to Expect</h3>
            <ul>
                <li>A commemorative ceremony honouring Royal Canadian Air Force personnel from London who served during the Second World War</li>
                <li>A moment of silence to reflect on the service and sacrifice of those who took part in the air war</li>
                <li>Historical insights provided by museum staff or guest speakers, highlighting the experiences of local airmen</li>
                <li>Access to selected exhibits at the museum that relate to the air war and the contributions of local airmen</li>
                <li>An opportunity to learn more about the contributions of local individuals and their role in the defence of Britain</li>
            </ul>
            <h3>Visitor Information</h3>
            <p>Admission is free. Visitors are encouraged to arrive early for the commemorative programme to ensure seating and participation in the ceremony.</p>
            <p>The event will take place at the London Aviation Museum, with access to selected exhibits available during the programme. For further details or enquiries, visitors are encouraged to contact the museum directly.</p>',
            'image_path' => 'images/august12.png',
            ],

            [
            'title' => '427 Wing: A Local Legacy',
            'post_type' => 'blog',
            'description' => 'The origins and ongoing role of 427 (London) Wing within the RCAF Association.',
             'content' => "<h3>Discover the Spirit of Flight in London, Ontario</h3>
            <p>Tucked beside London International Airport sits a hidden gem for aviation enthusiasts, history lovers, and curious visitors alike: the London Aviation Museum.</p>
            <p>Operated by the 427 (London) Wing Royal Canadian Air Force Association, the museum celebrates Canada's rich aviation heritage and the people who made it possible. Inside the museum, visitors can explore a fascinating collection of Royal Canadian Air Force memorabilia, artifacts, photographs, and aviation stories that span generations of flight.</p>
            <h3>A Building with History</h3>
            <p>The museum is located in a historic World War II airmen's canteen built between 1939 and 1940. During the war years, the site was part of the training grounds for pilots and observers in the British Commonwealth Air Training Plan, one of the most important aviation training programs of the Second World War.</p>
            <p>Thousands of aircrew trained across Canada during this time, with the nearby airfield, then known as RCAF Station Crumlin, playing an important role in preparing airmen for service overseas.</p>
            <p>Today, the museum stands as a living tribute to that history.</p>
            <h3>Preserving Stories of Canadian Aviation</h3>
            <p>Visitors to the museum will find displays filled with uniforms, photographs, equipment, and personal stories from Canadian airmen and women. These exhibits help preserve the memory of those who served while also educating new generations about Canada's aviation legacy.</p>
            <p>The museum is maintained by passionate volunteers who dedicate their time to collecting artifacts, sharing knowledge, and keeping these stories alive.</p>
            <h3>More Than a Museum</h3>
            <p>A visit to the site offers more than historical displays. The 427 Wing facility is also a vibrant community hub that includes:</p>
            <ul>
                <li>Aviation and military exhibits</li>
                <li>A café and gathering space</li>
                <li>Event halls and community activities</li>
                <li>Support programs for veterans and Air Cadets</li>
            </ul>
            <p>Whether you're a lifelong aviation enthusiast or simply looking for a unique place to explore local history, the Spirit of Flight Aviation Museum offers a meaningful look at the people and stories behind Canada's aviation heritage.</p>",
            'image_path' => 'images/august12.png',
        ],
    ];
         foreach ($eventsBlogs as $post) {
            EventsBlog::create($post);
        }
    }
}

