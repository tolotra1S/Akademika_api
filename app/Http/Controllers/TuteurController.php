<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tuteur;
 
class TuteurController extends Controller
{  
    public function index()
    {
        $tuteur = Tuteur::all();
        return response()->json($tuteur);
    }  
    public function store(Request $request)
    {
        $tuteur = new Tuteur([
            'name' => $request->input('name'),
            'firstname' => $request->input('firstname'),
            'mail' => $request->input('mail'),
            'phone' => $request->input('phone'),
            'birthday' => $request->input('birthday'),
            'addresse' => $request->input('addresse'),
            'cin' => $request->input('cin'),
            'description' => $request->input('description'),
            'subject' => $request->input('subject'),
            'tarif' => $request->input('tarif'),
            'free' => $request->input('free'),
            
        ]);
        $tuteur->save();
        return response()->json('Tuteur created!');
    }
    public function show($id)
    {
        $show = Tuteur::find($id);
        return response()->json($show);
    }
    public function update(Request $request, $id)
    {
       $tuteur = Tuteur::find($id);
       $tuteur->update($request->all());
       return response()->json('Tuteur updated');
    }
    public function destroy($id)
    {
        $tuteur = Tuteur::find($id);
        $tuteur->delete();
        return response()->json(' deleted!');
    }
    public function tuteurs($id)
    {
        $detail = Tuteur::where('id', $id)->get();
        return $detail;
    }
}