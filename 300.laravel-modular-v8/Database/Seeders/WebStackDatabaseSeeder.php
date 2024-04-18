<?php

namespace Modules\WebStack\Database\Seeders;

use App\Support\Helpers\ModuleHelper;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WebStackDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([WebStackContentSeeder::class]);
        Model::unguard();
    }
}