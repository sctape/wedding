<?php

class RsvpController extends \BaseController {

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
	public function create($name)
	{
        $invite = Invite::where('name', '=', $name)->first();
//		return View::make('rsvp.create')->with('invite', $invite);
		return View::make('rsvp.create')->with(['invite' => $invite]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

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
     * @param $invite_id
     * @return Response
     */
	public function update($invite_id)
	{
        /** @var Invite $invite */
        $invite = Invite::findOrFail($invite_id);

//        dd($invite->guests());

        $invite->rsvp = true;
        $invite->save();

        foreach($invite->guests as $guest) {
            /** @var Guest $guest */
            $guest->attending = (boolean)Input::get('rsvp_' . $guest->id);
            $guest->save();
        }

		return Redirect::route('rsvp_path', $invite->name);
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


}
