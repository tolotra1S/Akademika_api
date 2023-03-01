<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postuleposte;

class PostulePosteController extends Controller
{
    public function index()
    {
        $postules = Postuleposte::all();
        return response()->json($postules);
    }
    public function store(Request $request)
    {
        $postules = new Postuleposte([
            'entreprise' => $request->input('entreprise'),
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
        ]);
        $postules->save();
        return response()->json('Reponse Envoyer!');
    }
    public function show($id)
    {
        $contact = Postuleposte::find($id);
        return response()->json($contact);
    }
    public function update(Request $request, $id)
    {
       $postules = Postuleposte::find($id);
       $postules->update($request->all());
       return response()->json('Mise a jours reussi!');
    }
    public function destroy($id)
    {
        $postules = Postuleposte::find($id);
        $postules->delete();
        return response()->json(' deleted!');
    }
}
