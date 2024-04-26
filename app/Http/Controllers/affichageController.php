<?php

namespace App\Http\Controllers;

use App\Models\Affichage;
use App\Models\User;
use Illuminate\Http\Request;

class affichageController extends Controller
{
    public function store(){

        $validated = request()->validate([
            "content"=> 'required|min:3|max:256',
        ]);

    $validated['user_id']=auth()->id();
 Affichage::create( $validated );

//           $affichage = new Affichage([
//              'content'=>request()->get('affichage','')

//         ]);

//         $affichage ->save();
return redirect()->route('news')->with('success','affichage submitted successfully.');
    }
    public function destroy(Affichage $affichage){
        if(auth()->id()==$affichage->user_id){
abort(404);
        }
       $affichage->delete();

return redirect()->route('news')->with('success','affichage deleted successfully.');
}
public function show(Affichage $affichage){

    return view('affichage.show',['affichage'=>$affichage]);

}
}
