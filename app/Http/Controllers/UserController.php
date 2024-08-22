<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{



    public function show(User $user)
    {
        $affichages = $user->affichages()->paginate(5);

    $students = $user->students;
return view("user.show", compact("user","affichages","students"));
    }

    public function edit(User $user)
    {
        $affichages = $user->affichages()->paginate(5);
        $editing = true;
        $students = $user->students;
        return view("user.edit", compact("user","editing","affichages","students"));
    }


    public function update(User $user)
    {
        $validated = request()->validate([
             "name"=>"required|min:3|max:40",
            "bio"=>"nullable|min:1|max:255",
            "image"=>'image'
        ]);
        if(request('image')){
            $imagePath = request('image')->store('profile','public');
            $validated['image']=$imagePath;
        }

if ($user->image !== null) {
    Storage::disk('public')->delete($user->image);
}
        $user->update($validated);
        return redirect()->route('profile')->with('success','');

    }

public function search(Request $request)
{
    $query = $request->input('query');
    $users = User::where('name', 'like', "%$query%")
                ->orWhere('role', 'like', "%$query%")
                ->get();

    // Store the results in the session
   $request->session()->put('search_results', $users);

    // Redirect back to the previous page with a success message or query
    return redirect()->back()->with('search_results', $users);
}

public function profile(){

    return $this->show(auth()->user());
}
}