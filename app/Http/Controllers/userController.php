<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;

//controlador del usuario

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Imprime los datos de la tabla usuario en un rango de 10 filas
        $datos['users']=users::paginate(10);
        return view('users.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //FUncion para crear usuarios en la base de datos
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosUsers=request()->all();
        //trae los daots de la peticion exceptuando el toque que le ppone por defecto laravel
        $datosUsers=request()->except('_token');
        users::insert($datosUsers);
        return redirect('users')->with('Mensaje','Empleado agregado con exito');
        //return response()->json($datosUsers);  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Edita un usuario dependiendo su id
        $user =users::findOrfail($id);
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualiza a un usuario y el excep elimina el toquen y el metodo de peticion que se esta haciendo de los datos
        $datosUsers=request()->except(['_token','_method']);
        users::where('id','=',$id   )->update($datosUsers); 
        //$user= users::findOrfail($id);
        //return view('users.edit',compact('user'));
        return redirect('users')->with('Mensaje','Empleado modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Elimina un usuario mediante una id
        users::destroy($id);
        return redirect('users')->with('Mensaje','Empleado eliminado con exito');
    }
}
