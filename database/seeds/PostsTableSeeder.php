<?php

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $author1 = App\User::create([
            'name' => 'Fauzan',
            'email' => 'fauzan@radyalabs.com',
            'password' => Hash::make('kosakionodera')
        ]);

        $author2 = App\User::create([
            'name' => 'Kosaki',
            'email' => 'Kosaki@radyalabs.com',
            'password' => Hash::make('kosakionodera')
        ]);

        $category1 = Category::create([
            'name' => 'News',
        ]);

        $category2 = Category::create([
            'name' => 'Marketing',
        ]);

        $category3 = Category::create([
            'name' => 'Partnership',
        ]);

        $post1 = Post::create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'lorem ipsum agaer',
            'content' => 'Agaericus leaenfl KAJeoos KJFBee Hubsin ASjeooe',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg',
            'user_id' => $author1->id
        ]);

        $post2 = $author2->posts()->create([
            'title' => 'Lorem',
            'description' => 'lorem za agaer',
            'content' => 'wq leaenfl KAJeoos KJFBee Hubsin ASjeooe',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg'
        ]);

        $post3 = $author2->posts()->create([
            'title' => 'Ipsum',
            'description' => 'z za agaer',
            'content' => 'ewq leaenfl KAJeoos KJFBee Hubsin ASjeooe',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg'
        ]);

        $post4 = $author1->posts()->create([
            'title' => 'WW',
            'description' => 'DF za agaer',
            'content' => 'EFEE leaenfl KAJeoos KJFBee Hubsin ASjeooe',
            'category_id' => $category3->id,
            'image' => 'posts/4.jpg'
        ]);

        $tag1 = Tag::create([
            'name' => 'Job',
        ]);

        $tag2 = Tag::create([
            'name' => 'Customer',
        ]);

        $tag3 = Tag::create([
            'name' => 'Record',
        ]);

        $post1->tags()->attach([$tag1->id,$tag2->id]);
        $post2->tags()->attach([$tag2->id,$tag3->id]);
        $post3->tags()->attach([$tag1->id,$tag3->id]);

    }
}
