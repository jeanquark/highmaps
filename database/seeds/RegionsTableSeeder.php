<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->delete();
 
        $regions = array(
            ['id' => 1, 'country_id' => 17, 'name' => 'Baden-Württemberg', 'code' => 'de-bw', 'density' => '298.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'country_id' => 17, 'name' => 'Bayern', 'code' => 'de-by', 'density' => '179.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'country_id' => 17, 'name' => 'Berlin', 'code' => 'de-be', 'density' => '3863.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'country_id' => 17, 'name' => 'Brandenburg', 'code' => 'de-bb', 'density' => '82.7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'country_id' => 17, 'name' => 'Bremen', 'code' => 'de-hb', 'density' => '1574.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'country_id' => 17, 'name' => 'Hamburg', 'code' => 'de-hh', 'density' => '2323.9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'country_id' => 17, 'name' => 'Hessen', 'code' => 'de-he', 'density' => '287.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'country_id' => 17, 'name' => 'Mecklenburg-Vorpommern', 'code' => 'de-mv', 'density' => '68.8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'country_id' => 17, 'name' => 'Niedersachsen', 'code' => 'de-ni', 'density' => '164.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'country_id' => 17, 'name' => 'Nordrhein-Westfalen', 'code' => 'de-nw', 'density' => '516.1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'country_id' => 17, 'name' => 'Rheinland-Pfalz', 'code' => 'de-rp', 'density' => '201.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'country_id' => 17, 'name' => 'Saarland', 'code' => 'de-sl', 'density' => '385.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'country_id' => 17, 'name' => 'Sachsen-Anhalt', 'code' => 'de-st', 'density' => '109.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 14, 'country_id' => 17, 'name' => 'Schleswig-Holstein', 'code' => 'de-sh', 'density' => '178.7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 15, 'country_id' => 17, 'name' => 'Thüringen', 'code' => 'de-th', 'density' => '133.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 16, 'country_id' => 17, 'name' => 'Sachsen', 'code' => 'de-sn', 'density' => '219.9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 17, 'country_id' => 16, 'name' => 'Ile de France', 'code' => 'fr-j', 'density' => '1002.7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 18, 'country_id' => 16, 'name' => 'Champagne-Ardenne', 'code' => 'fr-g', 'density' => '52.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 19, 'country_id' => 16, 'name' => 'Picardie', 'code' => 'fr-s', 'density' => '99.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 20, 'country_id' => 16, 'name' => 'Haute-Normandie', 'code' => 'fr-q', 'density' => '150.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 21, 'country_id' => 16, 'name' => 'Centre', 'code' => 'fr-f', 'density' => '65.9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 22, 'country_id' => 16, 'name' => 'Basse-Normandie', 'code' => 'fr-p', 'density' => '84.1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 23, 'country_id' => 16, 'name' => 'Bourgogne', 'code' => 'fr-d', 'density' => '52.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 24, 'country_id' => 16, 'name' => 'Nord - Pas-de-Calais', 'code' => 'fr-o', 'density' => '327.9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 25, 'country_id' => 16, 'name' => 'Lorraine', 'code' => 'fr-m', 'density' => '99.4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 26, 'country_id' => 16, 'name' => 'Alsace', 'code' => 'fr-a', 'density' => '226.8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 27, 'country_id' => 16, 'name' => 'Franche-Comté', 'code' => 'fr-i', 'density' => '72.7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 28, 'country_id' => 16, 'name' => 'Pays de la Loire', 'code' => 'fr-r', 'density' => '115.4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 29, 'country_id' => 16, 'name' => 'Bretagne', 'code' => 'fr-e', 'density' => '120.7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 30, 'country_id' => 16, 'name' => 'Poitou-Charentes', 'code' => 'fr-t', 'density' => '69.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 31, 'country_id' => 16, 'name' => 'Aquitaine', 'code' => 'fr-b', 'density' => '81.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 32, 'country_id' => 16, 'name' => 'Midi-Pyrénées', 'code' => 'fr-n', 'density' => '65.9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 33, 'country_id' => 16, 'name' => 'Limousin', 'code' => 'fr-l', 'density' => '43.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 34, 'country_id' => 16, 'name' => 'Rhône-Alpes', 'code' => 'fr-v', 'density' => '148.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 35, 'country_id' => 16, 'name' => 'Auvergne', 'code' => 'fr-c', 'density' => '52.4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 36, 'country_id' => 16, 'name' => 'Languedoc-Roussillon', 'code' => 'fr-k', 'density' => '101.4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 37, 'country_id' => 16, 'name' => 'Provence-Alpes-Côte d\'Azur', 'code' => 'fr-u', 'density' => '158.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 38, 'country_id' => 16, 'name' => 'Corse', 'code' => 'fr-h', 'density' => '37.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 39, 'country_id' => 16, 'name' => 'Guadeloupe', 'code' => 'fr-gp', 'density' => '259.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 40, 'country_id' => 16, 'name' => 'Martinique', 'code' => 'fr-mq', 'density' => '337.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 41, 'country_id' => 16, 'name' => 'Guyane', 'code' => 'fr-gf', 'density' => '3.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 42, 'country_id' => 16, 'name' => 'La Réunion', 'code' => 'fr-re', 'density' => '336.1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 43, 'country_id' => 16, 'name' => 'Mayotte', 'code' => 'fr-yt', 'density' => '570.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 44, 'country_id' => 46, 'name' => 'Vaud', 'code' => 'ch-vd', 'density' => '267.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 45, 'country_id' => 46, 'name' => 'Valais', 'code' => 'ch-vs', 'density' => '63.2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 46, 'country_id' => 46, 'name' => 'Genève', 'code' => 'ch-ge', 'density' => '1925.8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 47, 'country_id' => 46, 'name' => 'Bern', 'code' => 'ch-be', 'density' => '172.1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 48, 'country_id' => 46, 'name' => 'Freiburg', 'code' => 'ch-fr', 'density' => '188.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 49, 'country_id' => 46, 'name' => 'Solothurn', 'code' => 'ch-so', 'density' => '332.2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 50, 'country_id' => 46, 'name' => 'Neuchâtel', 'code' => 'ch-ne', 'density' => '246.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 51, 'country_id' => 46, 'name' => 'Jura', 'code' => 'ch-ju', 'density' => '86.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 52, 'country_id' => 46, 'name' => 'Basel-Stadt', 'code' => 'ch-bs', 'density' => '5140.9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 53, 'country_id' => 46, 'name' => 'Basel-Landschaft', 'code' => 'ch-3306', 'density' => '540.8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 54, 'country_id' => 46, 'name' => 'Aargau', 'code' => 'ch-ag', 'density' => '459.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 55, 'country_id' => 46, 'name' => 'Zürich', 'code' => 'ch-zh', 'density' => '864.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 56, 'country_id' => 46, 'name' => 'Glarus', 'code' => 'ch-gl', 'density' => '58.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 57, 'country_id' => 46, 'name' => 'Schaffhausen', 'code' => 'ch-sh', 'density' => '265.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 58, 'country_id' => 46, 'name' => 'Appenzell Ausserrhoden', 'code' => 'ch-ar', 'density' => '221.9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 59, 'country_id' => 46, 'name' => 'Appenzell Innerrhoden', 'code' => 'ch-ai', 'density' => '91.7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 60, 'country_id' => 46, 'name' => 'St. Gallen', 'code' => 'ch-sg', 'density' => '253.1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 61, 'country_id' => 46, 'name' => 'Graubünden', 'code' => 'ch-gr', 'density' => '27.5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 62, 'country_id' => 46, 'name' => 'Thurgau', 'code' => 'ch-tg', 'density' => '303.7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 63, 'country_id' => 46, 'name' => 'Luzern', 'code' => 'ch-lu', 'density' => '274.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 64, 'country_id' => 46, 'name' => 'Uri', 'code' => 'ch-ur', 'density' => '34.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 65, 'country_id' => 46, 'name' => 'Schwyz', 'code' => 'ch-sz', 'density' => '178.6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 66, 'country_id' => 46, 'name' => 'Obwalden', 'code' => 'ch-nw', 'density' => '76.3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 67, 'country_id' => 46, 'name' => 'Nidwalden', 'code' => 'ch-7', 'density' => '173.9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 68, 'country_id' => 46, 'name' => 'Zug', 'code' => 'ch-zg', 'density' => '575.0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 69, 'country_id' => 46, 'name' => 'Ticino', 'code' => 'ch-ti', 'density' => '127.1', 'created_at' => new DateTime, 'updated_at' => new DateTime],

        );

        DB::table('regions')->insert($regions);
    }
}
