<?php

namespace RobersonFaria\DatabaseSchedule\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use RobersonFaria\DatabaseSchedule\Models\Schedule;

class ScheduleFactory extends Factory
{
    protected $model = Schedule::class;

    public function definition(): array
    {
        return [
            'command' => $this->faker->word,
            'expression' => '* * * * *',
        ];
    }
}
