<?php

class AuthController extends \BaseController {


		
	public function login()
	{
		// Obtenemos el email, borramos los espacios
        // y convertimos todo a minúscula
        $email = mb_strtolower(trim(Input::get('email')));
        // Obtenemos la contraseña enviada
        $password = Input::get('password');
 
        // Realizamos la autenticación
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            // Aquí también pueden devolver una llamada a otro controlador o
            // devolver una vista
            return /*Response::json(array('status' => true, 'message' => 'Chingon estas logueado'));*/Redirect::to('/user');
        } else {
            return /*Response::json(array('status' => false, 'message' => 'Mamaste'));*/Redirect::to('/login');
        }
	}

	public function logout()
	{
		 //Desconectamos al usuario
        Auth::logout();
 
        //Redireccionamos al inicio de la app con un mensaje
        return Redirect::to('/login');
	}

	/**
	 * Display a listing of the resource.
	 * GET /auth
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /auth/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /auth
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /auth/{id}
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
	 * GET /auth/{id}/edit
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
	 * PUT /auth/{id}
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
	 * DELETE /auth/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}