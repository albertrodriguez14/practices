<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\Dni\Dni;
use  App\Models\Contact\Contact;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // realizamos la consulta a la tabla DNI y enviamos a la vista 

     //   $dnis = DB::table('dnis')->get();
        $dnis = Dni::get();
         // dd($dnis);

        $contact = Contact::get();

        //dd($contact);

        return view("contact\contacto",['dnis'=> $dnis,'contact'=> $contact,"contacto"=> new Contact]);
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
        //realizamos la insercion de los datos con ORM 
             
       $result =  Contact::create($request->all());
         
          return redirect()->route("contacto.index");

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
        //$contacto = Contact::find($id)->get();
        $dnis = Dni::get();
       $contacto = Contact::with('dni')->where('id',$id)->get();
         
          //dd($contacto);
        return view("contact\update",["dnis"=>$dnis,"contacto"=>$contacto]);
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

        
         $solicitud = contact::findOrfail($id);
            $solicitud->fill($request->all());
              $solicitud->save();

            return redirect()->route("contacto.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
           $delete = Contact::findOrFail($id);
            $delete->delete();
            return redirect()->route("contacto.index");


    }
}
