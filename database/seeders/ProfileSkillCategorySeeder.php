<?php

namespace Database\Seeders;

use App\Models\ProfileSkillCategory;
use Illuminate\Database\Seeder;

class ProfileSkillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'skill_category' => 'English',
                'skill_type' => 'language'
            ],
            [
                'skill_category' => 'Indonesian',
                'skill_type' => 'language'
            ],
            [
                'skill_category' => 'Framework',
                'skill_type' => 'hardskill'
            ],
            [
                'skill_category' => 'Programming Language',
                'skill_type' => 'hardskill'
            ],
            [
                'skill_category' => 'Frontend Framework',
                'skill_type' => 'hardskill'
            ],
            [
                'skill_category' => 'Version Control',
                'skill_type' => 'hardskill'
            ],
            [
                'skill_category' => 'Version Control',
                'skill_type' => 'hardskill'
            ],
            [
                'skill_category' => 'Softskill',
                'skill_type' => 'softkill'
            ],
        ];
        foreach($data as $index => $value) {
            ProfileSkillCategory::create($value);
        }
    }
}
