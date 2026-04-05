<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Annonce;


class AnnonceController extends Controller
{
    public function index()
    {
        $annonces = Annonce::all();
        return view('annonce.index', compact('annonces'));
    }

    public function create()
    {
        return view('annonce.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:Appartement,Maison,Villa,Magasin,Terrain',
            'ville' => 'required|string|max:255',
            'superficie' => 'required|integer|min:1',
            'prix' => 'required|numeric|min:0',
        ]);

        $data = $request->all();
        $data['neuf'] = $request->has('neuf');

        if($request->hasFile('photo')){
            $data['photo'] = $request->file('photo')->store('photos','public');
        }

        Annonce::create($data);

        return redirect()->route('annonce.index')
            ->with('success', 'Annonce ajoutée avec succès');
    }

    public function show($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('annonce.show', compact('annonce'));
    }

    public function edit($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('annonce.edit', compact('annonce'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:Appartement,Maison,Villa,Magasin,Terrain',
            'ville' => 'required|string|max:255',
            'superficie' => 'required|integer|min:1',
            'prix' => 'required|numeric|min:0',
        ]);

        $annonce = Annonce::findOrFail($id);

        $data = $request->all();
        $data['neuf'] = $request->has('neuf');

        if($request->hasFile('photo')){
            $data['photo'] = $request->file('photo')->store('photos','public');
        }

        $annonce->update($data);

        return redirect()->route('annonce.index')
            ->with('success', 'Annonce modifiée');
    }

    public function destroy($id)
    {
        $annonce = Annonce::findOrFail($id);
        $annonce->delete();

        return redirect()->route('annonce.index')
            ->with('success', 'Annonce supprimée');
    }
}
