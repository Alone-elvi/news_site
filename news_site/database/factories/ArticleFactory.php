<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Article::class;
    public function definition()
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/', "-", $title)), 0, -1);
        return [
            'title' => $title,
            'body' => $this->faker->paragraph(100, true),
            'slug' => $slug,
            'img' => 'https://via.placeholder.com/688/5F1130/FFFFFF/?text=LARAVEL:8.*',
            'created_at' => $this->faker->dateTimeBetween('-1 years'),
            //
        ];
    }
}
