<?php

use Illuminate\Database\Seeder;

class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('beers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'beer_name' => 'Liberty Bay IPA',
			'user_id' => 1,
			'public' => 0,
			'mash_time' => '60',
			'directions' => 'Infusion Mash at 152º for 1 hour.
				Sparge to 6.5 gals of wort. Boil for one hour using the hop schedule above.
				Remove hops and cool to 70º.
				Pitch the yeast and aerate.
				Return to heat and bring to a boil for 5 minutes, then add the boiling hops. (1 oz Columbus and 1 oz Cascade Hops)
				Continue boiling for 30 mins then add 1 oz of Cascade hops.
				Continue boiling for 10 mins then add 1 oz of Cascade hops.
				Continue boiling for 10 mins then add 1 oz of Cascade hops.
				Continue boiling for 5 mins then add 1/2 oz of Columbus hops.
				Continue boiling for 4 mins then add 1 oz of Columbus hops.
				Continue to boil for 1 mins.
				Fill your fermenter with 2 gals of cold water(40º).
				Remove and rinse(sparge) the hops with 1 quart of cold water into the fermenter.
				Add the wort to the fermenter with cold water to make 5 gals.
				Add yeast and Amylase Enzyme when the temp reaches 70º. Aerate the wort(shaking works well).
				Ferment at 65º to 70º for 1 week.
				Rack to a secondary fermenter, dry hop with 1 oz of Columbus hops. Let it age to clarity, then bottle or keg.',
		]);

		DB::table('beers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'beer_name' => 'Porter TEST',
			'user_id' => 1,
			'public' => 1,
			'mash_time' => '60',
			'directions' => 'Inf',
		]);

		DB::table('beers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'beer_name' => 'Lager TEST',
			'user_id' => 2,
			'public' => 0,
			'mash_time' => '60',
			'directions' => 'Inf',
		]);		
		
		DB::table('beers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'beer_name' => 'Amber TEST',
			'user_id' => 2,
			'public' => 1,
			'mash_time' => '60',
			'directions' => 'Inf',
  		]);		
	}
}
