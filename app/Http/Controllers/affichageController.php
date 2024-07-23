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

return redirect()->route('news')->with('success','affichage submitted successfully.');
    }
public function destroy($id)
{

    $affichage = Affichage::findOrFail($id);

    // Check if the authenticated user is authorized to delete this affichage
    if (auth()->id() != $affichage->user_id) {
        abort(403, 'Unauthorized action.');
    }

    // Delete the affichage
    $affichage->delete();


    return redirect()->route('news')->with('success', 'Affichage deleted successfully.');
}

public function show(Affichage $affichage){

    return view('affichage.show',['affichage'=>$affichage]);

}
}