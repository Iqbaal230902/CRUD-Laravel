<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Student;
use App\Models\User;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'fullname' => fake()->regexify('[A-Za-z0-9]{150}'),
            'nickname' => fake()->regexify('[A-Za-z0-9]{50}'),
            'gender' => fake()->regexify('[A-Za-z0-9]{20}'),
            'dob' => fake()->date(),
            'pob' => fake()->regexify('[A-Za-z0-9]{250}'),
            'address' => fake()->text(),
            'religion' => fake()->regexify('[A-Za-z0-9]{50}'),
            'citizen' => fake()->regexify('[A-Za-z0-9]{60}'),
            'child_order' => fake()->word(),
            'sibling_blood' => fake()->word(),
            'sibling_step' => fake()->word(),
            'sibling_adoption' => fake()->word(),
            'status_child' => fake()->regexify('[A-Za-z0-9]{50}'),
            'language' => fake()->regexify('[A-Za-z0-9]{70}'),
            'blood_type' => fake()->regexify('[A-Za-z0-9]{10}'),
            'height' => fake()->word(),
            'weight' => fake()->word(),
            'disease' => fake()->regexify('[A-Za-z0-9]{200}'),
            'imunization' => fake()->regexify('[A-Za-z0-9]{200}'),
            'ideal_job' => fake()->regexify('[A-Za-z0-9]{200}'),
            'father_name' => fake()->regexify('[A-Za-z0-9]{150}'),
            'mother_name' => fake()->regexify('[A-Za-z0-9]{150}'),
            'father_religion' => fake()->regexify('[A-Za-z0-9]{50}'),
            'mother_religion' => fake()->regexify('[A-Za-z0-9]{50}'),
            'father_citizen' => fake()->regexify('[A-Za-z0-9]{60}'),
            'mother_citizen' => fake()->regexify('[A-Za-z0-9]{60}'),
            'father_last_education' => fake()->regexify('[A-Za-z0-9]{100}'),
            'mother_last_education' => fake()->regexify('[A-Za-z0-9]{100}'),
            'father_job' => fake()->regexify('[A-Za-z0-9]{100}'),
            'mother_job' => fake()->regexify('[A-Za-z0-9]{100}'),
            'father_phone' => fake()->regexify('[A-Za-z0-9]{20}'),
            'mother_phone' => fake()->regexify('[A-Za-z0-9]{20}'),
            'father_address' => fake()->text(),
            'mother_address' => fake()->text(),
            'father_job_address' => fake()->text(),
            'mother_job_address' => fake()->text(),
            'guardian_name' => fake()->regexify('[A-Za-z0-9]{150}'),
            'guardian_relation' => fake()->regexify('[A-Za-z0-9]{50}'),
            'guardian_last_education' => fake()->regexify('[A-Za-z0-9]{100}'),
            'guardian_phone' => fake()->regexify('[A-Za-z0-9]{20}'),
            'guardian_job' => fake()->regexify('[A-Za-z0-9]{100}'),
            'guardian_address' => fake()->text(),
            'status' => fake()->regexify('[A-Za-z0-9]{50}'),
            'accepted_at' => fake()->dateTime(),
            'from_school' => fake()->regexify('[A-Za-z0-9]{150}'),
            'left_school' => fake()->regexify('[A-Za-z0-9]{150}'),
        ];
    }
}
