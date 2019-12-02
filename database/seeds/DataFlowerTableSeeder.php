<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataFlowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_flowers')->insert([
            [
                'name' => 'Aconite',
                'flower_image' => 'aconite.jpg',
                'description' => 'Also known as winter aconite. They spread easily and can be planted as tubers or seed. They are often found growing in patches and are spring’s first flower.'
            ],
            [
                'name' => 'Ageratum',
                'flower_image' => 'ageratum.jpg',
                'description' => 'A tough plant that is a favorite for many gardens. Beautiful blue annuals known for their powder puff blooms.'
            ],
            [
                'name' => 'Allium',
                'flower_image' => 'allium.jpg',
                'description' => 'Also known as flowering onion, this plant grows from a bulb or from seed, and produces globes of purple clusters of flowers atop long stems.'
            ],
            [
                'name' => 'Alstromeria',
                'flower_image' => 'alstromeria.jpg',
                'description' => 'A common flower to be found in floral arrangements due to its variation in colors and its ability to be dyed.'
            ],
            [
                'name' => 'Alyssum',
                'flower_image' => 'alyssum.jpg',
                'description' => 'Classified as a perennial, this plant is grown as an annual in cold climates. Its tiny clusters of blooms are attractive at the edge of a bed or in pots with geraniums or other annuals.'
            ],
            [
                'name' => 'Amaryllis',
                'flower_image' => 'amarylis.png',
                'description' => 'Amaryllis flowers are one of the easiest to grow. They do very well indoors or out and come in a variety of colors. Try to plant the largest bulbs you can find because larger bulbs means more flowers!'
            ],
            [
                'name' => 'Anemone',
                'flower_image' => 'anemone.jpg',
                'description' => 'Also known as windflower, these tuberous flowers produce poppy-like blooms in early-to-mid spring.'
            ],
            [
                'name' => 'Angelica',
                'flower_image' => 'angelica.jpg',
                'description' => 'A tall , hardy biennial herb with stalks that can be candied and used on cakes or cookies. Produces green foliage the first year and flowers the second.'
            ],
            [
                'name' => 'Angelonia',
                'flower_image' => 'angelonia.jpg',
                'description' => 'Also know as summer snapdragon, it is a fairly new plant that has only been around since the late 1990s. It is a tough perennial and stands up to heat with no problem.'
            ],
            [
                'name' => 'Artemisia',
                'flower_image' => 'artemisia.jpg',
                'description' => 'This perennial plant is grown more for its silvery, white foliage than for the small, white flowers, but makes an excellent backdrop for more showy flowers in a perennial bed.'
            ],
            [
                'name' => 'Aster',
                'flower_image' => 'aster.jpg',
                'description' => 'Asters bloom in late summer to early fall, when many other perennials have faded. They range from varieties that skim the ground, to those towering 6 feet high. The daisy-like flowers come in many colors; the most common shades are purple, lavender, pink, red, blue and white.'
            ],
            [
                'name' => 'Astilbe',
                'flower_image' => 'astilbe.jpg',
                'description' => 'Know for being a graceful flower that does well in cooler climates in the northern third of the country. It can tolerate full sun as long as it has a constant supple of moisture.'
            ],
            [
                'name' => 'Aubrieta',
                'flower_image' => 'aubrieta.jpg',
                'description' => 'Named after the French artist who made them famous from his paintings. They are perfect for rock gardens.'
            ],
            [
                'name' => 'Balloon-flower',
                'flower_image' => 'balloon-flower.jpg',
                'description' => 'Known for being great cut flowers and for having petals that can be popped. In fall, the foliage turns clear gold.'
            ],
            [
                'name' => 'Balsam',
                'flower_image' => 'balsam.jpg',
                'description' => 'An old-fashioned annual that was a favorite of Victorian gardens.'
            ],
            [
                'name' => 'Baneberry',
                'flower_image' => 'baneberry.jpg',
                'description' => 'A white fluffy flower that produces ornamental and poisonous red berries. Perfect for cool areas.'
            ]
        ]);
    }
}
