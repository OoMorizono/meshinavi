<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Arr;

class RestaurantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Restaurant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word();
        $holiday = ['不定休', '月曜定休', '年中無休', '火､水､祝定休'];

        return [
            'name' => $name,
            'name_kana' => $name,
            'address' => $name,
            'opentime' => 'lunch(11:00〜14:00) dinner(18:30〜22:00)',
            'holiday' => $holiday[array_rand($holiday)],
            'category_id' => Arr::random(Arr::pluck(Category::all(), 'id')),
            'note' => '駐車場 ' . rand(1, 30) . '台 駅から徒歩' . rand(1, 30) . '分 電子マネーは使用出来ません。',
            'pr_short' => '気のあう仲間たちと素敵な時間をすごしてください★',
            'pr_long' => '多国籍の人たちが集う素敵な空間になっています。期間限定プランもありますのでお気軽に起こしください♪',
            'img_path' => 'restaurant_image/' . rand(1, 17) . '.jpg',
            'latitude' => $this->faker->latitude($min = 39.3956, $max = 39.4845),
            'longitude' => $this->faker->longitude($min = 141.0915, $max = 141.0916),
        ];
    }
}
