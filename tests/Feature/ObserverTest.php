<?php

use App\Models\User;

test('example', function () {
    User::create([
        'name' => 'John Doe',
        'email' => fake()->unique()->safeEmail,
        'password' => bcrypt('password'),
    ]);
});
