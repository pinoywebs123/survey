<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleSeeder::class);
        //$this->call(QuestionSeeder::class);
        $this->call(SectionTwoSeeder::class);
        $this->call(SectionTwoBatchTwoSeeder::class);
        $this->call(BatchTwoAllSeeder::class);
        $this->call(BatchTwoLast::class);

        $this->call(SectionFourSeeder::class);
        $this->call(SectionFourBatchTwoSeeder::class);
        $this->call(SectionFourBatchThreeSeeder::class);
        $this->call(SectionFourBatchFourSeeder::class);
        $this->call(SectionFourBatchFiveSeeder::class);

        $this->call(SectionThreeSeeder::class);
    }
}
