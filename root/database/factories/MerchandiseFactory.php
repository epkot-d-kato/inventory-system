<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchandise>
 */
class MerchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'merchandise_number' => $this -> faker -> unique() -> randomNumber(),
            'merchandise_name' => $this -> faker -> word,
            'merchandise_classification' => $this -> faker -> word,
            'merchandise_price' => $this -> faker -> numberBetween(100,10000),
            'merchandise_plastic' => $this -> faker -> boolean,
            'merchandise_plastic_notes' => $this -> faker -> word,
            'merchandise_paper' => $this -> faker -> boolean,
            'merchandise_paper_notes' => $this -> faker -> word,
            'merchandise_color' => $this -> faker -> word,
            'merchandise_size' => $this -> faker -> numberBetween(100,10000),
        ];
    }
}
