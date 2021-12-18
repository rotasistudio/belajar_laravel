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
        //     'name' => 'Aan',
        //     'email' => 'aan@aan.com',
        //     'password' => \bcrypt(123)
        // ]);
        // User::create([
        //     'name' => 'yuli',
        //     'email' => 'yuli@aan.com',
        //     'password' => \bcrypt(123)
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'tittle' => "Judul 1",
        //     'slug' => "judul-1",
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        //     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam libero sed quos eaque quae, et ipsumipsa magnam quia quibusdam provident laudantium officiis quasi adipisci iusto autem reiciendis, atque repellat mollitia odio nemo numquam eum architecto. Exercitationem quisquam dicta facilis corporis magnam dignissimos sit earum quasi ipsa sequi. Error voluptatum minima tempora, eum, ad tenetur delectus cum eaque doloremque dolorem, quasi sequi vitae inventore. Fuga quaerat atque quas, quam veritatis totam vero ipsum dicta maxime accusantium repudiandae vitae eumplaceat ipsa debitis mollitia voluptates quasi ducimus quos. Eum at aliquam, tenetur cumque quis a consequunturrecusandae impedit rem accusantium quam ex nesciunt fuga officiis consequatur nihil ipsa voluptatum numquam ab etmollitia, perferendis quas! Atque maiores facilis, repudiandae quam tenetur provident ea mollitia illo nemo amet! Iusto alias dolorem maiores rerum cupiditate doloremque. Explicabo laboriosam in cupiditate autem ab, numquam tempora officia,sit reiciendis dolorem aperiam modi, saepe commodi."
        // ]);
        // Post::create([
        //     'tittle' => "Judul 2",
        //     'slug' => "judul-2",
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        //     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam libero sed quos eaque quae, et ipsumipsa magnam quia quibusdam provident laudantium officiis quasi adipisci iusto autem reiciendis, atque repellat mollitia odio nemo numquam eum architecto. Exercitationem quisquam dicta facilis corporis magnam dignissimos sit earum quasi ipsa sequi. Error voluptatum minima tempora, eum, ad tenetur delectus cum eaque doloremque dolorem, quasi sequi vitae inventore. Fuga quaerat atque quas, quam veritatis totam vero ipsum dicta maxime accusantium repudiandae vitae eumplaceat ipsa debitis mollitia voluptates quasi ducimus quos. Eum at aliquam, tenetur cumque quis a consequunturrecusandae impedit rem accusantium quam ex nesciunt fuga officiis consequatur nihil ipsa voluptatum numquam ab etmollitia, perferendis quas! Atque maiores facilis, repudiandae quam tenetur provident ea mollitia illo nemo amet! Iusto alias dolorem maiores rerum cupiditate doloremque. Explicabo laboriosam in cupiditate autem ab, numquam tempora officia,sit reiciendis dolorem aperiam modi, saepe commodi."
        // ]);
        // Post::create([
        //     'tittle' => "Judul 3",
        //     'slug' => "judul-3",
        //     'user_id' => 2,
        //     'category_id' => 2,
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        //     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam libero sed quos eaque quae, et ipsumipsa magnam quia quibusdam provident laudantium officiis quasi adipisci iusto autem reiciendis, atque repellat mollitia odio nemo numquam eum architecto. Exercitationem quisquam dicta facilis corporis magnam dignissimos sit earum quasi ipsa sequi. Error voluptatum minima tempora, eum, ad tenetur delectus cum eaque doloremque dolorem, quasi sequi vitae inventore. Fuga quaerat atque quas, quam veritatis totam vero ipsum dicta maxime accusantium repudiandae vitae eumplaceat ipsa debitis mollitia voluptates quasi ducimus quos. Eum at aliquam, tenetur cumque quis a consequunturrecusandae impedit rem accusantium quam ex nesciunt fuga officiis consequatur nihil ipsa voluptatum numquam ab etmollitia, perferendis quas! Atque maiores facilis, repudiandae quam tenetur provident ea mollitia illo nemo amet! Iusto alias dolorem maiores rerum cupiditate doloremque. Explicabo laboriosam in cupiditate autem ab, numquam tempora officia,sit reiciendis dolorem aperiam modi, saepe commodi."
        // ]);
    }
}
