<?php

class TestDatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('UserTableSeeder');
        $this->call('GroupTableSeeder');
        $this->call('MemberTableSeeder');
        $this->call('MessageTablesSeeder');
    }

}