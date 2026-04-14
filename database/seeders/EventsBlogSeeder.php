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
            'image_path' => 'images/events-blog/events-rem_day.jpg',
            ],

            [
            'title' => '427 Wing: A Local Legacy',
            'post_type' => 'blog',
            'description' => 'The origins and ongoing role of 427 (London) Wing within the RCAF Association.',
             'content' => "<h3>Introduction</h3>
            <p>Long before it became home to a museum and community gathering space, the site of the 427 (London) Wing Royal Canadian Air Force Association played an important role in Canada's wartime aviation history.</p>

            <p>Located near London International Airport, the building that now houses the Spirit of Flight Aviation Museum dates back to the early years of World War II.</p>

            <h3>The Training Ground for a Generation of Aircrew</h3>
            <p>In 1939 and 1940, Canada became a key participant in the British Commonwealth Air Training Plan, an ambitious Allied program designed to train thousands of pilots, navigators, and aircrew.</p>

            <p>During this period, the London airport area was known as RCAF Station Crumlin, where training schools such as the No. 3 Elementary Flying Training School and No. 4 Observer School operated.</p>

            <p>Young airmen from Canada and across the Commonwealth trained here before being deployed overseas.</p>

            <h3>A Legacy That Continues Today</h3>
            <p>After the war, the air station evolved alongside Canada's aviation industry, eventually becoming part of the modern civilian airport and surrounding aviation community.</p>

            <p>Today, volunteers from the 427 Wing maintain the London Aviation Museum, preserving artifacts and stories from Canada's military aviation history.</p>

            <p>The organization also supports veterans and community initiatives, including visits to veterans at Parkwood Hospital and support for mental health programs serving former service members.</p>

            <h3>Keeping Aviation History Alive</h3>
            <p>Museums like this play an important role in protecting local heritage. Through displays, educational programs, and community engagement, the Spirit of Flight Aviation Museum helps ensure that the achievements of Canada's air force and the individuals who served, are never forgotten.</p>

            <p>For visitors, it's a chance to step into the past and experience the history of aviation right where it happened.</p>",
            'image_path' => 'images/events-blog/blog-427_wing.jpg',
        ],
    ];
         foreach ($eventsBlogs as $post) {
            EventsBlog::create($post);
        }
    }
}

