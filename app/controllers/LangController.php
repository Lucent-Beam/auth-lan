<?php

class LangController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function index(){


		//	return View::make('hello');
	//	$users = User::all();
	//$users = User::find(1);
	//	return $users->lang;
	//$session_id = Session::getId();
	//return $session_id;
		$language = Auth::user()->lang;
		$email = Auth::user()->email;
		App::setLocale($language);

		//return $language;
		return View::make('hello')

			->with('lang', $language)
			->with('email',$email);



	}

	public function change(){
		$language = Auth::user()->lang;
		App::setLocale($language);



			$id = Auth::user()->id;
			return View::make('form_change')
			->with('id',$id)
			->with('lang', $language);


	}

	public function postchange(){
		$id = $_POST['id'];
		$lang = $_POST['lang'];
		Auth::user()->lang = $lang;

		retuwn View::make('hello');



	}

}
