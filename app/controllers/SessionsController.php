<?php

use Wedding\Forms\LoginForm;

class SessionsController extends \BaseController {

    /**
     * @var LoginForm
     */
    private $loginForm;

    public function __construct(LoginForm $loginForm)
    {

        $this->loginForm = $loginForm;
    }

	/**
	 * Display a listing of the resource.
	 * GET /sessions
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

    /**
     * Authenticate the user
     *
     * @return Response
     */
    public function store()
    {
        //fetch the form input
        $formData = Input::only('username', 'password');

        //validate the form
        //if invalid, then go back
        $this->loginForm->validate($formData);

        //if is valid, then try to sign in
        if (!Auth::attempt($formData)) {
            Flash::message('We were unable to log you in. Please try again.');
            return Redirect::back()->withInput();
        } else {
            //redirect to statuses
            Flash::message('Welcome Back!');
            return Redirect::intended('/');
        }
    }

	/**
	 * Display the specified resource.
	 * GET /sessions/{id}
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
	 * GET /sessions/{id}/edit
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
	 * PUT /sessions/{id}
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
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
        return Redirect::home();
	}

}