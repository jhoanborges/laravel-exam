<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class GetUsersWithProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Listar usuarios con sus productos relacionados';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::with('products')->get()->toArray();
        print_r($user);
    }
}
