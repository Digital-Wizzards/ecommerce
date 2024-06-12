<?php

namespace Database\Factories;

use App\Enums\PaymentMethod;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $key = array_rand(PaymentMethod::cases());
        return [
            'payment_method' => PaymentMethod::cases()[$key]->value,
            'payment_status' => $this->faker->boolean(),
            'transaction_id' => PaymentMethod::cases()[$key]->value === PaymentMethod::ESEWA->value ? $this->faker->uuid() : null,
            'order_id' => Order::factory()->create()->id,
        ];
    }
}
