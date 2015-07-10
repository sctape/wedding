<?php

class GuestsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $guests = Guest::all();
		return View::make('guests.create')->withGuests($guests);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

        $guest = Guest::register($input);
        $guest->save();

        return Redirect::back();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function search($string) {
        Log::debug($string);

        $users = DB::table('guests')
            ->select('name')->distinct()
            ->join('invites', 'guests.invite_id', '=', 'invites.id')
            ->orWhere('invites.name', 'LIKE', '%' . $string . '%')
            ->orWhere('guests.first_name', 'LIKE', '%' . $string . '%')
            ->orWhere('guests.last_name', 'LIKE', '%' . $string . '%')
            ->lists('name');

        Log::debug($users);

        $json = [];
        foreach($users as $user) {
            $json[] = ['value' => $user];
        }

        return Response::json($json);
    }


}
