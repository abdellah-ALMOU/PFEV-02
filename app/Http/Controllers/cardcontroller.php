<?php

namespace App\Http\Controllers;

use App\Models\Citoyene;
use App\Models\Incident;
use App\Models\Photo;
use App\Models\Type;
use Illuminate\Http\Request;

class cardcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $products = Incident ::all();
        $type = Type :: all();
        $photo = Photo :: all();
        return view('site.index', ['incidents' => $products ,'types' => $type , 'photos'=>$photo]);


    //        foreach ($products as $product) {
    //         session()->put('incident',$product);
    //        }
          
    //    return view('site.index', ['incident' => $products ]);
   
    }
    public function delete($id)
    {
        $incident = Incident::find($id);
        $incident->photos()->delete();
        $incident->delete();
    
        return redirect()->route('index');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function USERS()
    {
       $citoyens = Citoyene::all();
       return view ('site.header.users-table',['citoyen'=>$citoyens]);
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteuser($id)
    {
        $citoyen= Citoyene::find($id);
        $citoyen->delete();
        return redirect()->route('USERS');
      
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





    // partie de mes incident
    public function mesincident()

    {
        $products = Incident ::all();
        $type = Type :: all();
        $photo = Photo :: all();
        return view('site.header.mes-incident', ['incidents' => $products ,'types' => $type , 'photos'=>$photo]);
    }
}
