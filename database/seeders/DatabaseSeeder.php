<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Discover;
use App\Models\Category;
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
        // User::factory(10)->create();


        User::create([
         'name' => 'Mulya Saputra',
         'username' => 'MulyaSaputra',
         'email' => 'MulyaSaputra@team.dev',
         'password' => bcrypt('12345'),
        ]);
        User::create([
         'name' => 'Mulya Hadi Saputra',
         'username' => 'MulyaHDSaputra',
         'email' => 'MulyaHadiSaputra@team.dev',
         'password' => bcrypt('12345'),
        ]);
        Post::create([
         'category_id' => 2,
         'user_id' => 1,
         'title' => 'Judul ke Satu',
         'slug' => 'Judul-ke-satu',
         'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, inventore fugiat ullam excepturi itaque suscipit numquam dolore quisquam. Dolores minima ipsam, nemo consequatur, odit eius veniam aut doloremque iure, necessitatibus alias aliquam quo officiis. Eos minus ea ut et eveniet vel. Distinctio, odit dolor. In possimus necessitatibus fuga quo voluptas.',
         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum repellat, quod id culpa dolorem rerum in sit? Ratione dignissimos omnis velit. Voluptas ut et nisi ducimus! Esse temporibus harum repudiandae similique ex repellat, officia in quae. Magni, quis quam veniam maiores reiciendis, nam ducimus repudiandae quod voluptatem, odit natus! Veritatis aspernatur maiores accusantium, quae non corporis nulla voluptates quisquam saepe asperiores architecto est possimus explicabo quibusdam harum perspiciatis labore tempora consequatur! Aliquam eveniet optio praesentium non cumque sed mollitia. Optio nostrum, rem nesciunt obcaecati, dolorem culpa totam eum ea quasi ullam, iure recusandae suscipit asperiores.</p><p>Dolores commodi rerum iste iusto, provident error laudantium quisquam blanditiis assumenda eos. Saepe accusantium maxime pariatur tenetur eveniet iusto illo quia quis ratione quaerat nulla facere, labore dicta ullam accusamus totam incidunt tempore cupiditate sunt iste animi? Vel sequi excepturi, in voluptate facere vitae magni! Ipsam, quasi dolorum minus iure aperiam ipsa possimus. Sequi soluta consequuntur laborum quas ab autem itaque provident eius officia maiores modi culpa labore impedit fuga temporibus, dolores veritatis distinctio, officiis rerum deserunt voluptas atque nulla? Totam quaerat aut quibusdam minima odio omnis. Dicta, incidunt perferendis! Soluta qui quibusdam quos odit cupiditate. Reiciendis consectetur, harum facilis quisquam delectus distinctio nostrum laudantium!</p>'
        ]);
        Post::create([
         'category_id' => 1,
         'user_id' => 1,
         'title' => 'Judul ke Dua',
         'slug' => 'Judul-ke-dua',
         'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, inventore fugiat ullam excepturi itaque suscipit numquam dolore quisquam. Dolores minima ipsam, nemo consequatur, odit eius veniam aut doloremque iure, necessitatibus alias aliquam quo officiis. Eos minus ea ut et eveniet vel. Distinctio, odit dolor. In possimus necessitatibus fuga quo voluptas.',
         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum repellat, quod id culpa dolorem rerum in sit? Ratione dignissimos omnis velit. Voluptas ut et nisi ducimus! Esse temporibus harum repudiandae similique ex repellat, officia in quae. Magni, quis quam veniam maiores reiciendis, nam ducimus repudiandae quod voluptatem, odit natus! Veritatis aspernatur maiores accusantium, quae non corporis nulla voluptates quisquam saepe asperiores architecto est possimus explicabo quibusdam harum perspiciatis labore tempora consequatur! Aliquam eveniet optio praesentium non cumque sed mollitia. Optio nostrum, rem nesciunt obcaecati, dolorem culpa totam eum ea quasi ullam, iure recusandae suscipit asperiores.</p><p>Dolores commodi rerum iste iusto, provident error laudantium quisquam blanditiis assumenda eos. Saepe accusantium maxime pariatur tenetur eveniet iusto illo quia quis ratione quaerat nulla facere, labore dicta ullam accusamus totam incidunt tempore cupiditate sunt iste animi? Vel sequi excepturi, in voluptate facere vitae magni! Ipsam, quasi dolorum minus iure aperiam ipsa possimus. Sequi soluta consequuntur laborum quas ab autem itaque provident eius officia maiores modi culpa labore impedit fuga temporibus, dolores veritatis distinctio, officiis rerum deserunt voluptas atque nulla? Totam quaerat aut quibusdam minima odio omnis. Dicta, incidunt perferendis! Soluta qui quibusdam quos odit cupiditate. Reiciendis consectetur, harum facilis quisquam delectus distinctio nostrum laudantium!</p>'
        ]);
        Category::create([
         'name' => 'Web Programin',
         'slug' => 'web-programin'
        ]);
        Category::create([
         'name' => 'Web Design',
         'slug' => 'web-design'
        ]);
        Discover::create([
         'category_id' => 1,
         'user_id' => 2,
         'title' => 'LokerIn WebUI desain by Insketch',
         'name' => 'Website LokerIn',
         'slug' => 'lokerin-webui-desain-by-insketch',
         'tag' => 'Web Design, UI Design, UX Design',
         'link' => 'https://google.com',
         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum repellat, quod id culpa dolorem rerum in sit? Ratione dignissimos omnis velit. Voluptas ut et nisi ducimus! Esse temporibus harum repudiandae similique ex repellat, officia in quae. Magni, quis quam veniam maiores reiciendis, nam ducimus repudiandae quod voluptatem, odit natus! Veritatis aspernatur maiores accusantium, quae non corporis nulla voluptates quisquam saepe asperiores architecto est possimus explicabo quibusdam harum perspiciatis labore tempora consequatur! Aliquam eveniet optio praesentium non cumque sed mollitia. Optio nostrum, rem nesciunt obcaecati, dolorem culpa totam eum ea quasi ullam, iure recusandae suscipit asperiores.</p><p>Dolores commodi rerum iste iusto, provident error laudantium quisquam blanditiis assumenda eos. Saepe accusantium maxime pariatur tenetur eveniet iusto illo quia quis ratione quaerat nulla facere, labore dicta ullam accusamus totam incidunt tempore cupiditate sunt iste animi? Vel sequi excepturi, in voluptate facere vitae magni! Ipsam, quasi dolorum minus iure aperiam ipsa possimus. Sequi soluta consequuntur laborum quas ab autem itaque provident eius officia maiores modi culpa labore impedit fuga temporibus, dolores veritatis distinctio, officiis rerum deserunt voluptas atque nulla? Totam quaerat aut quibusdam minima odio omnis. Dicta, incidunt perferendis! Soluta qui quibusdam quos odit cupiditate. Reiciendis consectetur, harum facilis quisquam delectus distinctio nostrum laudantium!</p>'
        ]);
    }
}
