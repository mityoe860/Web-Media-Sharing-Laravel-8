<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Genre;
use App\Models\genre_post;
use App\Models\Post;
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

        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Mityo',
            'username' => 'mityo',
            'email' => 'mityo@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Mirza',
            'username' => 'mirza',
            'email' => 'mirza@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Genre::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);
        Genre::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);
        Genre::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Post::create([
            'title' => 'Naruto',
            'slug' => 'naruto',
            'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aliquam voluptatem distinctio obcaecati minus nulla et debitis facere accusantium necessitatibus.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque illum aperiam dolores cumque ad odit modi, cum ipsum illo aliquam, at necessitatibus maxime. Quibusdam cupiditate commodi repellat incidunt facere aperiam nobis, magni quasi ut recusandae ducimus earum modi beatae! Placeat, velit. Excepturi fugiat illum minus dolorum perspiciatis quasi harum molestiae eaque illo at, assumenda molestias ullam sequi, ipsam amet, voluptatem vel debitis consectetur a laborum modi similique impedit nisi. Numquam minus blanditiis architecto, perspiciatis consequuntur ea doloremque culpa, vitae modi explicabo quod officia fuga dicta voluptas corporis obcaecati ad sit. Maxime consequatur quibusdam assumenda error labore dolorum sed nam molestiae neque alias. Asperiores dolor, error quas omnis similique eaque atque odio quia ab voluptatum qui dicta fugiat corrupti mollitia a laboriosam, consequatur debitis itaque id quae? Quis, quod nam non eum quo quia iure itaque aliquam aliquid sit porro ducimus veritatis corrupti numquam nulla. Inventore ut distinctio aliquid error, minima eligendi. Animi aliquid odit accusantium qui laboriosam! Dolorem ea earum maxime rem, cupiditate ducimus alias esse, nostrum debitis ipsa facilis corporis! Tenetur eveniet quam laudantium quaerat rem excepturi quasi fugit assumenda, vitae voluptates suscipit aperiam? Nesciunt laborum temporibus consequatur rem tempora in quia praesentium ea adipisci expedita, illo accusamus iure.',

            'user_id' => 2
        ]);
        Post::create([
            'title' => 'One Piece',
            'slug' => 'onepiece',
            'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aliquam voluptatem distinctio obcaecati minus nulla et debitis facere accusantium necessitatibus.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque illum aperiam dolores cumque ad odit modi, cum ipsum illo aliquam, at necessitatibus maxime. Quibusdam cupiditate commodi repellat incidunt facere aperiam nobis, magni quasi ut recusandae ducimus earum modi beatae! Placeat, velit. Excepturi fugiat illum minus dolorum perspiciatis quasi harum molestiae eaque illo at, assumenda molestias ullam sequi, ipsam amet, voluptatem vel debitis consectetur a laborum modi similique impedit nisi. Numquam minus blanditiis architecto, perspiciatis consequuntur ea doloremque culpa, vitae modi explicabo quod officia fuga dicta voluptas corporis obcaecati ad sit. Maxime consequatur quibusdam assumenda error labore dolorum sed nam molestiae neque alias. Asperiores dolor, error quas omnis similique eaque atque odio quia ab voluptatum qui dicta fugiat corrupti mollitia a laboriosam, consequatur debitis itaque id quae? Quis, quod nam non eum quo quia iure itaque aliquam aliquid sit porro ducimus veritatis corrupti numquam nulla. Inventore ut distinctio aliquid error, minima eligendi. Animi aliquid odit accusantium qui laboriosam! Dolorem ea earum maxime rem, cupiditate ducimus alias esse, nostrum debitis ipsa facilis corporis! Tenetur eveniet quam laudantium quaerat rem excepturi quasi fugit assumenda, vitae voluptates suscipit aperiam? Nesciunt laborum temporibus consequatur rem tempora in quia praesentium ea adipisci expedita, illo accusamus iure.',

            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Dragon Ball',
            'slug' => 'dragonball',
            'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aliquam voluptatem distinctio obcaecati minus nulla et debitis facere accusantium necessitatibus.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque illum aperiam dolores cumque ad odit modi, cum ipsum illo aliquam, at necessitatibus maxime. Quibusdam cupiditate commodi repellat incidunt facere aperiam nobis, magni quasi ut recusandae ducimus earum modi beatae! Placeat, velit. Excepturi fugiat illum minus dolorum perspiciatis quasi harum molestiae eaque illo at, assumenda molestias ullam sequi, ipsam amet, voluptatem vel debitis consectetur a laborum modi similique impedit nisi. Numquam minus blanditiis architecto, perspiciatis consequuntur ea doloremque culpa, vitae modi explicabo quod officia fuga dicta voluptas corporis obcaecati ad sit. Maxime consequatur quibusdam assumenda error labore dolorum sed nam molestiae neque alias. Asperiores dolor, error quas omnis similique eaque atque odio quia ab voluptatum qui dicta fugiat corrupti mollitia a laboriosam, consequatur debitis itaque id quae? Quis, quod nam non eum quo quia iure itaque aliquam aliquid sit porro ducimus veritatis corrupti numquam nulla. Inventore ut distinctio aliquid error, minima eligendi. Animi aliquid odit accusantium qui laboriosam! Dolorem ea earum maxime rem, cupiditate ducimus alias esse, nostrum debitis ipsa facilis corporis! Tenetur eveniet quam laudantium quaerat rem excepturi quasi fugit assumenda, vitae voluptates suscipit aperiam? Nesciunt laborum temporibus consequatur rem tempora in quia praesentium ea adipisci expedita, illo accusamus iure.',

            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Sasuke',
            'slug' => 'sasuke',
            'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aliquam voluptatem distinctio obcaecati minus nulla et debitis facere accusantium necessitatibus.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque illum aperiam dolores cumque ad odit modi, cum ipsum illo aliquam, at necessitatibus maxime. Quibusdam cupiditate commodi repellat incidunt facere aperiam nobis, magni quasi ut recusandae ducimus earum modi beatae! Placeat, velit. Excepturi fugiat illum minus dolorum perspiciatis quasi harum molestiae eaque illo at, assumenda molestias ullam sequi, ipsam amet, voluptatem vel debitis consectetur a laborum modi similique impedit nisi. Numquam minus blanditiis architecto, perspiciatis consequuntur ea doloremque culpa, vitae modi explicabo quod officia fuga dicta voluptas corporis obcaecati ad sit. Maxime consequatur quibusdam assumenda error labore dolorum sed nam molestiae neque alias. Asperiores dolor, error quas omnis similique eaque atque odio quia ab voluptatum qui dicta fugiat corrupti mollitia a laboriosam, consequatur debitis itaque id quae? Quis, quod nam non eum quo quia iure itaque aliquam aliquid sit porro ducimus veritatis corrupti numquam nulla. Inventore ut distinctio aliquid error, minima eligendi. Animi aliquid odit accusantium qui laboriosam! Dolorem ea earum maxime rem, cupiditate ducimus alias esse, nostrum debitis ipsa facilis corporis! Tenetur eveniet quam laudantium quaerat rem excepturi quasi fugit assumenda, vitae voluptates suscipit aperiam? Nesciunt laborum temporibus consequatur rem tempora in quia praesentium ea adipisci expedita, illo accusamus iure.',

            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Oregairu',
            'slug' => 'oregairu',
            'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aliquam voluptatem distinctio obcaecati minus nulla et debitis facere accusantium necessitatibus.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque illum aperiam dolores cumque ad odit modi, cum ipsum illo aliquam, at necessitatibus maxime. Quibusdam cupiditate commodi repellat incidunt facere aperiam nobis, magni quasi ut recusandae ducimus earum modi beatae! Placeat, velit. Excepturi fugiat illum minus dolorum perspiciatis quasi harum molestiae eaque illo at, assumenda molestias ullam sequi, ipsam amet, voluptatem vel debitis consectetur a laborum modi similique impedit nisi. Numquam minus blanditiis architecto, perspiciatis consequuntur ea doloremque culpa, vitae modi explicabo quod officia fuga dicta voluptas corporis obcaecati ad sit. Maxime consequatur quibusdam assumenda error labore dolorum sed nam molestiae neque alias. Asperiores dolor, error quas omnis similique eaque atque odio quia ab voluptatum qui dicta fugiat corrupti mollitia a laboriosam, consequatur debitis itaque id quae? Quis, quod nam non eum quo quia iure itaque aliquam aliquid sit porro ducimus veritatis corrupti numquam nulla. Inventore ut distinctio aliquid error, minima eligendi. Animi aliquid odit accusantium qui laboriosam! Dolorem ea earum maxime rem, cupiditate ducimus alias esse, nostrum debitis ipsa facilis corporis! Tenetur eveniet quam laudantium quaerat rem excepturi quasi fugit assumenda, vitae voluptates suscipit aperiam? Nesciunt laborum temporibus consequatur rem tempora in quia praesentium ea adipisci expedita, illo accusamus iure.',

            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Ousama',
            'slug' => 'ousama',
            'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aliquam voluptatem distinctio obcaecati minus nulla et debitis facere accusantium necessitatibus.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque illum aperiam dolores cumque ad odit modi, cum ipsum illo aliquam, at necessitatibus maxime. Quibusdam cupiditate commodi repellat incidunt facere aperiam nobis, magni quasi ut recusandae ducimus earum modi beatae! Placeat, velit. Excepturi fugiat illum minus dolorum perspiciatis quasi harum molestiae eaque illo at, assumenda molestias ullam sequi, ipsam amet, voluptatem vel debitis consectetur a laborum modi similique impedit nisi. Numquam minus blanditiis architecto, perspiciatis consequuntur ea doloremque culpa, vitae modi explicabo quod officia fuga dicta voluptas corporis obcaecati ad sit. Maxime consequatur quibusdam assumenda error labore dolorum sed nam molestiae neque alias. Asperiores dolor, error quas omnis similique eaque atque odio quia ab voluptatum qui dicta fugiat corrupti mollitia a laboriosam, consequatur debitis itaque id quae? Quis, quod nam non eum quo quia iure itaque aliquam aliquid sit porro ducimus veritatis corrupti numquam nulla. Inventore ut distinctio aliquid error, minima eligendi. Animi aliquid odit accusantium qui laboriosam! Dolorem ea earum maxime rem, cupiditate ducimus alias esse, nostrum debitis ipsa facilis corporis! Tenetur eveniet quam laudantium quaerat rem excepturi quasi fugit assumenda, vitae voluptates suscipit aperiam? Nesciunt laborum temporibus consequatur rem tempora in quia praesentium ea adipisci expedita, illo accusamus iure.',

            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Kono',
            'slug' => 'kono',
            'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aliquam voluptatem distinctio obcaecati minus nulla et debitis facere accusantium necessitatibus.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque illum aperiam dolores cumque ad odit modi, cum ipsum illo aliquam, at necessitatibus maxime. Quibusdam cupiditate commodi repellat incidunt facere aperiam nobis, magni quasi ut recusandae ducimus earum modi beatae! Placeat, velit. Excepturi fugiat illum minus dolorum perspiciatis quasi harum molestiae eaque illo at, assumenda molestias ullam sequi, ipsam amet, voluptatem vel debitis consectetur a laborum modi similique impedit nisi. Numquam minus blanditiis architecto, perspiciatis consequuntur ea doloremque culpa, vitae modi explicabo quod officia fuga dicta voluptas corporis obcaecati ad sit. Maxime consequatur quibusdam assumenda error labore dolorum sed nam molestiae neque alias. Asperiores dolor, error quas omnis similique eaque atque odio quia ab voluptatum qui dicta fugiat corrupti mollitia a laboriosam, consequatur debitis itaque id quae? Quis, quod nam non eum quo quia iure itaque aliquam aliquid sit porro ducimus veritatis corrupti numquam nulla. Inventore ut distinctio aliquid error, minima eligendi. Animi aliquid odit accusantium qui laboriosam! Dolorem ea earum maxime rem, cupiditate ducimus alias esse, nostrum debitis ipsa facilis corporis! Tenetur eveniet quam laudantium quaerat rem excepturi quasi fugit assumenda, vitae voluptates suscipit aperiam? Nesciunt laborum temporibus consequatur rem tempora in quia praesentium ea adipisci expedita, illo accusamus iure.',

            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Poi',
            'slug' => 'poi',
            'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aliquam voluptatem distinctio obcaecati minus nulla et debitis facere accusantium necessitatibus.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque illum aperiam dolores cumque ad odit modi, cum ipsum illo aliquam, at necessitatibus maxime. Quibusdam cupiditate commodi repellat incidunt facere aperiam nobis, magni quasi ut recusandae ducimus earum modi beatae! Placeat, velit. Excepturi fugiat illum minus dolorum perspiciatis quasi harum molestiae eaque illo at, assumenda molestias ullam sequi, ipsam amet, voluptatem vel debitis consectetur a laborum modi similique impedit nisi. Numquam minus blanditiis architecto, perspiciatis consequuntur ea doloremque culpa, vitae modi explicabo quod officia fuga dicta voluptas corporis obcaecati ad sit. Maxime consequatur quibusdam assumenda error labore dolorum sed nam molestiae neque alias. Asperiores dolor, error quas omnis similique eaque atque odio quia ab voluptatum qui dicta fugiat corrupti mollitia a laboriosam, consequatur debitis itaque id quae? Quis, quod nam non eum quo quia iure itaque aliquam aliquid sit porro ducimus veritatis corrupti numquam nulla. Inventore ut distinctio aliquid error, minima eligendi. Animi aliquid odit accusantium qui laboriosam! Dolorem ea earum maxime rem, cupiditate ducimus alias esse, nostrum debitis ipsa facilis corporis! Tenetur eveniet quam laudantium quaerat rem excepturi quasi fugit assumenda, vitae voluptates suscipit aperiam? Nesciunt laborum temporibus consequatur rem tempora in quia praesentium ea adipisci expedita, illo accusamus iure.',

            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Hen',
            'slug' => 'hen',
            'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aliquam voluptatem distinctio obcaecati minus nulla et debitis facere accusantium necessitatibus.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque illum aperiam dolores cumque ad odit modi, cum ipsum illo aliquam, at necessitatibus maxime. Quibusdam cupiditate commodi repellat incidunt facere aperiam nobis, magni quasi ut recusandae ducimus earum modi beatae! Placeat, velit. Excepturi fugiat illum minus dolorum perspiciatis quasi harum molestiae eaque illo at, assumenda molestias ullam sequi, ipsam amet, voluptatem vel debitis consectetur a laborum modi similique impedit nisi. Numquam minus blanditiis architecto, perspiciatis consequuntur ea doloremque culpa, vitae modi explicabo quod officia fuga dicta voluptas corporis obcaecati ad sit. Maxime consequatur quibusdam assumenda error labore dolorum sed nam molestiae neque alias. Asperiores dolor, error quas omnis similique eaque atque odio quia ab voluptatum qui dicta fugiat corrupti mollitia a laboriosam, consequatur debitis itaque id quae? Quis, quod nam non eum quo quia iure itaque aliquam aliquid sit porro ducimus veritatis corrupti numquam nulla. Inventore ut distinctio aliquid error, minima eligendi. Animi aliquid odit accusantium qui laboriosam! Dolorem ea earum maxime rem, cupiditate ducimus alias esse, nostrum debitis ipsa facilis corporis! Tenetur eveniet quam laudantium quaerat rem excepturi quasi fugit assumenda, vitae voluptates suscipit aperiam? Nesciunt laborum temporibus consequatur rem tempora in quia praesentium ea adipisci expedita, illo accusamus iure.',

            'user_id' => 2
        ]);
        genre_post::create([
            'post_id' => 1,
            'genre_id' => 1
        ]);
        genre_post::create([
            'post_id' => 1,
            'genre_id' => 2
        ]);
        genre_post::create([
            'post_id' => 2,
            'genre_id' => 1
        ]);
        genre_post::create([
            'post_id' => 2,
            'genre_id' => 3
        ]);
        genre_post::create([
            'post_id' => 3,
            'genre_id' => 1
        ]);
        genre_post::create([
            'post_id' => 4,
            'genre_id' => 3
        ]);
        genre_post::create([
            'post_id' => 5,
            'genre_id' => 1
        ]);
        genre_post::create([
            'post_id' => 6,
            'genre_id' => 2
        ]);
        genre_post::create([
            'post_id' => 7,
            'genre_id' => 1
        ]);
        genre_post::create([
            'post_id' => 8,
            'genre_id' => 1
        ]);
        genre_post::create([
            'post_id' => 9,
            'genre_id' => 3
        ]);
    }
}
