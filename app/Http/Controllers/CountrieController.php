<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Countrie;

class CountrieController extends Controller
{
    public function index()
    {   
        $countries = Countrie::all();
        
        return view("/pais")->with(array("countries" => $countries));
    }

    public function insertar(Request $request)
    {
        $registro = Countrie::create(
            [   'country' => $request['country']
              
            ]);
       
        $user = auth()->user();
        $countrie = new Countrie();

        $countrie->country = request('country');
        $countrie->user_id = $user->id;
        $countrie->save();
        return redirect('/home')->with('success', 'Countrie Created Successfully!');
    }
    
    public function edit($id)
    {
        $editar = Countrie::findOrFail($id);        
            $this->user_id = $id;
            $this->country = $editar->country;
    }    
    
    public function update()
    {
        $this->validate([
                        'country' => 'required|min:5'
        ]);        
            if ($this->user_id) {
                $record = Countrie::find($this->user_id);
                $record->update([
                                'country' => $this->country
            ]);            
            $this->resetInput();
            
        }    }    
        
    public function destroy($id)
    {
        if ($id) {
            $record = Countrie::where('id', $id);
            $record->delete();
        }
    }
}
