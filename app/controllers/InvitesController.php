<?php

class InvitesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /invites
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /invites/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('invites.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /invites
	 *
	 * @return Response
	 */
	public function store()
	{
        //Get all the input
		$input = Input::all();

        //Create invite with the invite specific stuff
        $invite = Invite::create(Input::only(['name', 'email', 'address', 'address2', 'city', 'state', 'zip']));

        $numInvites = 0;
        for($i=1; $i<=5; $i++) {
            if (!empty($input['first_name' . $i])) {
                $guest = Guest::create([
                    'first_name' => $input['first_name' . $i],
                    'last_name' => $input['last_name' . $i],
                    'invite_id' => $invite->id,
                ]);

                $numInvites++;
            }
        }

        Flash::success("Invite successfully created with $numInvites guests.");
        return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /invites/{id}
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
	 * GET /invites/{id}/edit
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
	 * PUT /invites/{id}
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
	 * DELETE /invites/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}