<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        // User::create([
        //     'name' => "Esto TN",
        //     'email' => "esto@gmail.com",
        //     'password' => bcrypt('123456'),
        // ]);
        
        // User::create([
        //     'name' => "doddy",
        //     'email' => "doddy@gmail.com",
        //     'password' => bcrypt('123456'),
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem 2psum pertama',
        //     'body' => '<p>Lorem ipsum, do2or sit amet consectetur adipisicing elit. Dolores, sed molestias. A consequuntur quibusdam voluptatum praesentium illum architecto! Facere ad ratione dignissimos in perferendis tempore, commodi iusto quaerat minima voluptate odit distinctio? Quos omnis aspernatur sequi delectus qui adipisci ducimus perferendis nihil facilis quaerat atque distinctio excepturi maiores earum provident, architecto illo inventore mollitia!</p><p>Enim incidunt minus, dicta placeat quia labore delectus voluptatum nisi itaque deserunt possimus suscipit doloribus ratione eaque facilis natus a, earum temporibus eos repellat nemo similique ab. Accusantium asperiores voluptatum similique tenetur voluptas incidunt minus architecto eum?</p><p>Labore qui quisquam reiciendis sequi provident est iure corrupti. Placeat explicabo laudantium ab corporis quod earum maiores similique praesentium! Iusto eaque voluptate ea necessitatibus quisquam, animi sequi. Facilis iure qui numquam, perspiciatis nam quisquam atque exercitationem repellendus eos! Voluptatum nisi laudantium, blanditiis sit sequi dolorum sunt cum consequatur qui? Sunt dolore ipsa quasi magnam possimus nesciunt reiciendis nam sint.</p>',
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem 2psum Kedua',
        //     'body' => '<p>Lorem ipsum, do2or sit amet consectetur adipisicing elit. Dolores, sed molestias. A consequuntur quibusdam voluptatum praesentium illum architecto! Facere ad ratione dignissimos in perferendis tempore, commodi iusto quaerat minima voluptate odit distinctio? Quos omnis aspernatur sequi delectus qui adipisci ducimus perferendis nihil facilis quaerat atque distinctio excepturi maiores earum provident, architecto illo inventore mollitia!</p><p>Enim incidunt minus, dicta placeat quia labore delectus voluptatum nisi itaque deserunt possimus suscipit doloribus ratione eaque facilis natus a, earum temporibus eos repellat nemo similique ab. Accusantium asperiores voluptatum similique tenetur voluptas incidunt minus architecto eum?</p><p>Labore qui quisquam reiciendis sequi provident est iure corrupti. Placeat explicabo laudantium ab corporis quod earum maiores similique praesentium! Iusto eaque voluptate ea necessitatibus quisquam, animi sequi. Facilis iure qui numquam, perspiciatis nam quisquam atque exercitationem repellendus eos! Voluptatum nisi laudantium, blanditiis sit sequi dolorum sunt cum consequatur qui? Sunt dolore ipsa quasi magnam possimus nesciunt reiciendis nam sint.</p>',
        //     'user_id' => 2
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem 2psum ketiga',
        //     'body' => '<p>Lorem ipsum, do2or sit amet consectetur adipisicing elit. Dolores, sed molestias. A consequuntur quibusdam voluptatum praesentium illum architecto! Facere ad ratione dignissimos in perferendis tempore, commodi iusto quaerat minima voluptate odit distinctio? Quos omnis aspernatur sequi delectus qui adipisci ducimus perferendis nihil facilis quaerat atque distinctio excepturi maiores earum provident, architecto illo inventore mollitia!</p><p>Enim incidunt minus, dicta placeat quia labore delectus voluptatum nisi itaque deserunt possimus suscipit doloribus ratione eaque facilis natus a, earum temporibus eos repellat nemo similique ab. Accusantium asperiores voluptatum similique tenetur voluptas incidunt minus architecto eum?</p><p>Labore qui quisquam reiciendis sequi provident est iure corrupti. Placeat explicabo laudantium ab corporis quod earum maiores similique praesentium! Iusto eaque voluptate ea necessitatibus quisquam, animi sequi. Facilis iure qui numquam, perspiciatis nam quisquam atque exercitationem repellendus eos! Voluptatum nisi laudantium, blanditiis sit sequi dolorum sunt cum consequatur qui? Sunt dolore ipsa quasi magnam possimus nesciunt reiciendis nam sint.</p>',
        //     'user_id' => 1
        // ]);
       
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem 2psum keempat',
        //     'body' => '<p>Lorem ipsum, do2or sit amet consectetur adipisicing elit. Dolores, sed molestias. A consequuntur quibusdam voluptatum praesentium illum architecto! Facere ad ratione dignissimos in perferendis tempore, commodi iusto quaerat minima voluptate odit distinctio? Quos omnis aspernatur sequi delectus qui adipisci ducimus perferendis nihil facilis quaerat atque distinctio excepturi maiores earum provident, architecto illo inventore mollitia!</p><p>Enim incidunt minus, dicta placeat quia labore delectus voluptatum nisi itaque deserunt possimus suscipit doloribus ratione eaque facilis natus a, earum temporibus eos repellat nemo similique ab. Accusantium asperiores voluptatum similique tenetur voluptas incidunt minus architecto eum?</p><p>Labore qui quisquam reiciendis sequi provident est iure corrupti. Placeat explicabo laudantium ab corporis quod earum maiores similique praesentium! Iusto eaque voluptate ea necessitatibus quisquam, animi sequi. Facilis iure qui numquam, perspiciatis nam quisquam atque exercitationem repellendus eos! Voluptatum nisi laudantium, blanditiis sit sequi dolorum sunt cum consequatur qui? Sunt dolore ipsa quasi magnam possimus nesciunt reiciendis nam sint.</p>',
        //     'user_id' => 1
        // ]);

    }
}
