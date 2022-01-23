<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeederClass extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
                'title' => 'The Basics Of Bird Migration',
                'slug' => 'The Basics Of Bird Migration',
                'content' => '        <p class="text-justify">
                  Geese winging their way south in wrinkled V-shaped flocks is perhaps the classic picture of
                  migration—the annual, large-scale movement of birds between their breeding (summer) homes and their
                  nonbreeding (winter) grounds. But geese are far from our only migratory birds. Of the more than 650
                  species of North American breeding birds, more than half are migratory.
                </p>
                <div class="text-h6 text-weight-medium">Why Do Birds Migrate?</div>
                <p class="text-justify">
                  Birds migrate to move from areas of low or decreasing resources to areas of high or increasing
                  resources. The two primary resources being sought are food and nesting locations. Here’s more about
                  how migration evolved.

                  Birds that nest in the Northern Hemisphere tend to migrate northward in the spring to take advantage
                  of burgeoning insect populations, budding plants and an abundance of nesting locations. As winter
                  approaches and the availability of insects and other food drops, the birds move south again.
                  Escaping the cold is a motivating factor but many species, including hummingbirds, can withstand
                  freezing temperatures as long as an adequate supply of food is available.
                </p>
                <div class="text-h6 text-weight-medium">Origins Of Long-Distance Migration</div>
                <p class="text-justify">
                  While short-distance migration probably developed from a fairly simple need for food, the origins of
                  long-distant migration patterns are much more complex. They’ve evolved over thousands of years and
                  are controlled at least partially by the genetic makeup of the birds. They also incorporate
                  responses to weather, geography, food sources, day length, and other factors.
                </p>
                <p class="text-justify">
                  For birds that winter in the tropics, it seems strange to imagine leaving home and embarking on a
                  migration north. Why make such an arduous trip north in spring? One idea is that through many
                  generations the tropical ancestors of these birds dispersed from their tropical breeding sites
                  northward. The seasonal abundance of insect food and greater day length allowed them to raise more
                  young (4–6 on average) than their stay-at-home tropical relatives (2–3 on average). As their
                  breeding zones moved north during periods of glacial retreat, the birds continued to return to their
                  tropical homes as winter weather and declining food supplies made life more difficult. Supporting
                  this theory is the fact that most North American vireos, flycatchers, tanagers, warblers, orioles,
                  and swallows have evolved from forms that originated in the tropics.
                </p>',
                'cover' => 'andy-li-r2AlgxMb-yc-unsplash.jpg',
                'likes' => 359,
                'views' => 874,
       ];

        Post::create($post);
    }
}
