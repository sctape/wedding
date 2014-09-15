
<?php

class DatabaseSeeder extends Seeder {

    /**
     * @var array
     */
    protected $tables = [
        'guests',
        'tables'
    ];

    /**
     * @var array
     */
    protected $seeders = [
        'InvitesTableSeeder',
        'TablesTableSeeder',
        'GuestsTableSeeder',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->cleanDatabase();

        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }
    }

    /**
     * Clean out the database for a new seed generation.
     */
    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}