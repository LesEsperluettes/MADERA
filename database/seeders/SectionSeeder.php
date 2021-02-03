<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\TypeSection;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new Section();
        $s->type()->associate(TypeSection::find(1));
        $s->save();
    }
}
