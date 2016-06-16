<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Country;
use App\Region;
use View;
use Input;
use Response;

class HomeController extends Controller
{
	public function index() {

		$country_pop = Country::lists('population', 'code');
		$country_density = Country::lists('density', 'code');
		$country_id = Country::lists('id', 'code');

		return view::make('home')
			->with('country_pop', $country_pop)
			->with('country_density', $country_density)
			->with('country_id', $country_id);

	}

	public function ajax() {
        
        $id = $_POST['country_id'];

        //$regions = Region::where('country_id', '=', $id)->lists('population', 'code');
        $regions = Region::where('country_id', '=', $id)->lists('density', 'code');

        return $regions;    	
    }
}