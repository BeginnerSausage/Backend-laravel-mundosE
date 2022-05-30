<?php
namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;
use App\Mail\MensajeContacto;
use Illuminate\Support\Facades\Mail;
use Validator;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulario = Formulario::all();
        return $formulario;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $form = new Formulario();
        // $form->nombre = $request->nombre;
        // $form->email = $request->email;
        // $form->phone = $request->phone;
        // $form->mensaje = $request->mensaje;
        
        // $form->save();
        $validator = Validator::make(request()->all(), [
            'nombre'=>'required | min:3',
            'email'=>'required',
            'phone'=>'required | min:6',
            'mensaje'=>'required',
        ]);

        if ($validator -> fails()){
            return response([
                'error'=> true,
                'data'=> $validator -> errors()
            ],422);
        }

        $form = Formulario::create([
            'nombre' => request()->nombre,
            'email' => request()->email,
            'phone' => request()->phone,
            'mensaje' => request()->mensaje,
        ]);

        Mail::to('gmpereyramarcolongo@gmail.com')->send(new MensajeContacto($form));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
