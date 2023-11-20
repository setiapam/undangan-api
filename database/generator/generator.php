<?php

use Core\Database\Generator;
use App\Models\User;
use Core\Valid\Hash;

return new class implements Generator
{
    /**
     * Generate nilai database
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('murphilah')
        ]);
    }
};
