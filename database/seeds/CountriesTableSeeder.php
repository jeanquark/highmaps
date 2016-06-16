<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
 
        $countries = array(
            ['id' => 1, 'name' => 'Albania', 'code' => 'al', 'density' => '105.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Andorra', 'code' => 'ad', 'density' => '154.9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Austria', 'code' => 'at', 'density' => '103.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Belarus', 'code' => 'by', 'density' => '46.7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Belgium', 'code' => 'be', 'density' => '370.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Bosnia and Herzegovina', 'code' => 'ba', 'density' => '74.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Bulgaria', 'code' => 'bg', 'density' => '66.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'name' => 'Croatia', 'code' => 'hr', 'density' => '74.9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'name' => 'Cyprus', 'code' => 'cy', 'density' => '92.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'name' => 'Cyprus (No mans area)', 'code' => 'cnm', 'density' => NULL, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'name' => 'Czech Republic', 'code' => 'cz', 'density' => '136.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'name' => 'Denmark', 'code' => 'dk', 'density' => '131.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'name' => 'Estonia', 'code' => 'ee', 'density' => '30.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 14, 'name' => 'Faroe Islands', 'code' => 'fo', 'density' => '34.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 15, 'name' => 'Finland', 'code' => 'fi', 'density' => '18.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 16, 'name' => 'France', 'code' => 'fr', 'density' => '104.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 17, 'name' => 'Germany', 'code' => 'de', 'density' => '226.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 18, 'name' => 'Greece', 'code' => 'gr', 'density' => '83.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 19, 'name' => 'Hungary', 'code' => 'hu', 'density' => '106.1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 20, 'name' => 'Iceland', 'code' => 'is', 'density' => '3.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 21, 'name' => 'Ireland', 'code' => 'ie', 'density' => '67.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 22, 'name' => 'Italy', 'code' => 'it', 'density' => '201.2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 23, 'name' => 'Kosovo', 'code' => 'kv', 'density' => '167.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 24, 'name' => 'Latvia', 'code' => 'lv', 'density' => '32.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 25, 'name' => 'Liechtenstein', 'code' => 'li', 'density' => '232.8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 26, 'name' => 'Lithuania', 'code' => 'lt', 'density' => '46.8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 27, 'name' => 'Luxembourg', 'code' => 'lu', 'density' => '215.1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 28, 'name' => 'Macedonia', 'code' => 'mk', 'density' => '83.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 29, 'name' => 'Malta', 'code' => 'mt', 'density' => '1352.4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 30, 'name' => 'Moldova', 'code' => 'md', 'density' => '123.8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 31, 'name' => 'Monaco', 'code' => 'mc', 'density' => '18713.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 32, 'name' => 'Montenegro', 'code' => 'me', 'density' => '45.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 33, 'name' => 'Netherlands', 'code' => 'nl', 'density' => '500.7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 34, 'name' => 'Northern Cyprus', 'code' => 'nc', 'density' => NULL, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 35, 'name' => 'Norway', 'code' => 'no', 'density' => '16.9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 36, 'name' => 'Poland', 'code' => 'pl', 'density' => '124.1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 37, 'name' => 'Portugal', 'code' => 'pt', 'density' => '112.8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 38, 'name' => 'Romania', 'code' => 'ro', 'density' => '86.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 39, 'name' => 'Russia', 'code' => 'ru', 'density' => '8.4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 40, 'name' => 'San Marino', 'code' => 'sm', 'density' => '521.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 41, 'name' => 'Serbia', 'code' => 'rs', 'density' => '81.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 42, 'name' => 'Slovakia', 'code' => 'sk', 'density' => '110.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 43, 'name' => 'Slovenia', 'code' => 'si', 'density' => '102.4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 44, 'name' => 'Spain', 'code' => 'es', 'density' => '92.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 45, 'name' => 'Sweden', 'code' => 'se', 'density' => '23.8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 46, 'name' => 'Switzerland', 'code' => 'ch', 'density' => '204.7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 47, 'name' => 'Turkey', 'code' => 'tr', 'density' => '100.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 48, 'name' => 'Ukraine', 'code' => 'ua', 'density' => '78.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 49, 'name' => 'United Kingdom', 'code' => 'gb', 'density' => '266.4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 50, 'name' => 'Vatican', 'code' => 'va', 'density' => '1877.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],



        );

        DB::table('countries')->insert($countries);
    }
}
