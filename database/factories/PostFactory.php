<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(50),
            'description' => fake()->paragraph(5),
            'markdown' => '### Hi there 👋 

            <br>
            
            [![Github](https://img.shields.io/badge/-Github-000?style=flat&logo=Github&logoColor=white)](https://github.com/Re4ch-Jay)
            [![Linkedin](https://img.shields.io/badge/-LinkedIn-blue?style=flat&logo=Linkedin&logoColor=white)](https://www.linkedin.com/in/panhareach-phat-0a5897249/)
            <a href="https://github.com/Re4ch-Jay/">
               <img src="https://komarev.com/ghpvc/?username=Re4ch-Jay">
            </a>
            <br>
            
            <img src="images/wallpaper.png"/>
            
            Welcome to my Github page! 
            
            - I ❤️ coding
            - I ❤️ <a href="https://flutter.dev/">Flutter</a> for Cross-Platform Development
            - I ❤️ <a href="https://laravel.com/">Laravel</a> for Backend, APIs
            - I ❤️ <a href="https://react.dev/">React</a> for building UI on the Web
            - I ❤️ building <a href="https://github.com/Re4ch-Jay/Open-Source-Flutter-Projects">mobile app</a> when I have free time
            
            <div style="align: right">
            
            [![Top Langs](https://github-readme-stats.vercel.app/api/top-langs/?username=Re4ch-Jay&layout=compact&theme=transparent&langs_count=10)](https://github.com/anuraghazra/github-readme-stats)
            
            </div>
            ',
            'user_id' => 1,
            'category_id' => rand(1, 5),
        ];
    }
}
