<?php

namespace App\Modules\Blog\Database\Seeds;

use Nova\Database\Seeder;
use Nova\Database\ORM\Model;


class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the Database Seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('App\Modules\Blog\Database\Seeds\FoobarTableSeeder');
    }
}
