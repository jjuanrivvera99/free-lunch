<?php

use App\RequestState;
use Illuminate\Database\Seeder;

class RequestStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequestState::create([
            'name' => 'sended',
            'description' => 'The request was sended',
        ]);

        RequestState::create([
            'name' => 'assigned',
            'description' => 'The request was assigned to a kitchener',
        ]);

        RequestState::create([
            'name' => 'waiting',
            'description' => 'Waiting for ingredients',
        ]);

        RequestState::create([
            'name' => 'processing',
            'description' => 'The request is in process',
        ]);

        RequestState::create([
            'name' => 'done',
            'description' => 'Done',
        ]);

    }
}
