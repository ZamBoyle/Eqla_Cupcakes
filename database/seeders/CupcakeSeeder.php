<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Category;

class CupcakeSeeder extends Seeder
{
        public function run()
        {
                if (DB::table('cupcakes')->count() == 0) {
                        DB::table('cupcakes')->insert([
                                ['name' => 'Le Pinky', 'price' => 2.5, 'stock' => 10, 'imageName' => 'cupcake1.jpg', 'description' => 'Marzipan tootsie roll dragée cake. Lollipop gummies sweet chocolate cake sweet roll candy canes tiramisu fruitcake. Fruitcake sweet roll gummi bears pudding carrot cake cookie sweet tiramisu halvah. Gummi bears donut gummi bears chocolate cake biscuit. Chocolate cake tiramisu tart chocolate cake chocolate. Macaroon ice cream pudding icing jelly. Gummi bears wafer brownie wafer cake jelly gingerbread gummi bears. Gingerbread lemon drops halvah macaroon jelly gummi bears soufflé cookie oat cake. Macaroon tiramisu pie apple pie oat cake cake pastry. Gummi bears dragée bonbon halvah cotton candy brownie pie sugar plum. Tart cotton candy dessert sesame snaps sweet brownie cotton candy chocolate cake marzipan. Icing dessert ice cream sweet sesame snaps topping cookie cake. Jelly ice cream liquorice.', 'category_id' => 1],                        
                                ['name' => 'Le Brown', 'price' => 2, 'stock' => 0, 'imageName' => 'cupcake2.jpg', 'description' => 'Sweet halvah bonbon danish toffee bear claw candy chocolate bar carrot cake. Marzipan cupcake oat cake bonbon chocolate cake macaroon. Cake cotton candy candy canes sesame snaps marzipan icing danish cookie powder. Lollipop cookie gingerbread oat cake cake cake fruitcake. Tart caramels cheesecake jelly beans sesame snaps. Wafer chocolate cake ice cream dragée lemon drops donut powder. Cupcake cupcake caramels wafer powder wafer pastry. Candy donut dragée danish. Muffin bear claw oat cake cheesecake. Powder oat cake candy canes donut. Soufflé cupcake chocolate bar cotton candy croissant dessert dessert tootsie roll. Croissant cotton candy icing.', 'category_id' => 2],
                                ['name' => 'Le Caramel', 'price' => 3, 'stock' => 2, 'imageName' => 'cupcake3.jpg', 'description' => 'Sugar plum gingerbread biscuit topping pudding croissant sweet roll chupa chups topping. Cake sugar plum gummies jelly beans. Halvah jelly wafer carrot cake cupcake. Marzipan sweet roll fruitcake cotton candy wafer. Cake jujubes wafer. Sweet marzipan brownie wafer bear claw. Dragée lollipop gummies gummi bears jelly-o biscuit oat cake marzipan. Cheesecake toffee tiramisu. Cookie biscuit oat cake. Halvah tootsie roll cake halvah jujubes toffee bonbon soufflé jelly-o. Dessert pudding apple pie. Jelly cookie jelly beans chocolate bar bonbon brownie.', 'category_id' => 3],
                                ['name' => 'Le Blue', 'price' => 3, 'stock' => 3, 'imageName' => 'cupcake4.jpg', 'description' => 'Sweet roll ice cream jelly beans. Soufflé marzipan jelly beans cheesecake. Cookie cake candy canes pudding soufflé bonbon cookie. Caramels icing donut tiramisu caramels. Sugar plum apple pie sugar plum gummi bears jelly beans sesame snaps tiramisu. Wafer jujubes apple pie marzipan jelly soufflé. Chocolate pie icing chocolate bar. Gummies pie donut pie. Jelly beans jujubes croissant gummies marshmallow. Icing dragée pastry danish. Cotton candy jelly beans apple pie cupcake biscuit cupcake. Muffin marshmallow toffee. Toffee chupa chups carrot cake.', 'category_id' => 3],
                                ['name' => 'Le Rainbow', 'price' => 2, 'stock' => 8, 'imageName' => 'cupcake4.jpg', 'description' => 'Apple pie pie fruitcake. Candy canes jujubes halvah wafer brownie tart dessert candy canes gingerbread. Marshmallow chocolate bar muffin jujubes chocolate croissant gummies halvah caramels. Apple pie marzipan chocolate cake donut jelly-o ice cream. Bear claw tootsie roll pie chupa chups toffee. Chocolate bar candy bonbon carrot cake jelly halvah jelly gummi bears. Biscuit bonbon sweet roll dragée macaroon chocolate bar wafer. Croissant apple pie chocolate cake. Gingerbread powder apple pie gummies wafer. Carrot cake soufflé pastry pudding lollipop icing wafer croissant sugar plum. Topping fruitcake pudding halvah bonbon macaroon cupcake wafer candy. Brownie icing brownie sweet roll macaroon marshmallow pie cotton candy. Dragée gingerbread bonbon sweet gingerbread muffin. Wafer candy canes macaroon jelly pastry liquorice wafer.', 'category_id' => 1]
                        ]);
                }
        }
}
