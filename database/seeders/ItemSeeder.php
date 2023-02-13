<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groceries = [  ['item_name' => 'Apples', 'picture_link'=>'images/Vegetabels.jpg' , 'item_desc' => 'Red apples that so delicious', 'price' => 20000],
                        ['item_name' => 'Bananas', 'picture_link'=>'images/Vegetabels.jpg' , 'item_desc' => 'Yellow bananas that really yellow', 'price' => 10000],
                        ['item_name' => 'Carrots', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Orange carrots. is this Orange or yellow?', 'price' => 20000],
                        ['item_name' => 'Oranges', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Juicy oranges. Really nice orange', 'price' => 30000],
                        ['item_name' => 'Grapes', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Green grapes. So many green grapes', 'price' => 40000],
                        ['item_name' => 'Strawberries', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Sweet strawberries. So Sweet', 'price' => 50000],
                        ['item_name' => 'Blueberries', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Tasty blueberries. This is So tasty.', 'price' => 60000],
                        ['item_name' => 'Raspberries', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Delicious raspberries. This is really delicious', 'price' => 70000],
                        ['item_name' => 'Blackberries', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Juicy blackberries. Maybe this juicier than orange', 'price' => 80000],
                        ['item_name' => 'Tomatoes', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Red ripe tomatoes. This is really red tomatoes', 'price' => 90000],
                        ['item_name' => 'Lettuce', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Fresh lettuce. This is a fresh lettuce from farm', 'price' => 10000],
                        ['item_name' => 'Spinach', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Dark green spinach. This is really dar. Popeye like it.', 'price' => 11000],
                        ['item_name' => 'Broccoli', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Crunchy broccoli. This is really crunchy.', 'price' => 12000],
                        ['item_name' => 'Cauliflower', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Cauliflower. This is a cauliflower', 'price' => 13000],
                        ['item_name' => 'Peppers', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Red and green peppers. I dont know what color is this.', 'price' => 14000],
                        ['item_name' => 'Onions', 'picture_link'=>'images/Vegetabels.jpg','item_desc' => 'Yellow onions. Very yellow like banana', 'price' => 15000],
                        ['item_name' => 'Garlic', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Fresh garlic. Very fresh vampire doesnt want to stand near it.', 'price' => 16000],
                        ['item_name' => 'Potatoes', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Brown potatoes. Very big brown potatoes.', 'price' => 17000],
                        ['item_name' => 'Sweet Potatoes', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Orange sweet potatoes', 'price' => 18000],
                        ['item_name' => 'Squash', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Yellow squash. This squash is premium', 'price' => 19000],
                        ['item_name' => 'Zucchini', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Green zucchini. Its very Green like a brokoli.', 'price' => 20000],
                        ['item_name' => 'Eggplant', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Purple eggplant. Purple i like the color maybe.', 'price' => 21000],
                        ['item_name' => 'Peaches', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Sweet peaches. Its very Sweet like you.', 'price' => 22000],
                        ['item_name' => 'Plums', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Juicy plums. its realy juicy. i dont lie', 'price' => 23000],
                        ['item_name' => 'Nectarines', 'picture_link'=>'images/Vegetabels.jpg','item_desc' => 'Tasty nectarines. its very tasty', 'price' => 24000],
                        ['item_name' => 'Cucumber', 'picture_link'=>'images/Vegetabels.jpg', 'item_desc' => 'Green Cucucmber, its a green cucumber. A lot of people like t when its big', 'price' => 25000]
        ];

        foreach ($groceries as $grocery) {
            Item::create([
                'item_name' => $grocery['item_name'],
                'picture_link' => $grocery['picture_link'],
                'item_desc' => $grocery['item_desc'],
                'price' => $grocery['price'],
            ]);
        }
    }
}
// {{-- Bryan Theophillus - 2401953966 --}}
