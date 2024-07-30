<?php

namespace Modules\WebStack\Database\Seeders;

use App\Support\Helpers\ModuleHelper;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WebStackContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        // $this->call("OthersTableSeeder");
        $table = DB::table('_metas');
        $table->insert(['name' => '123']);
    }
}