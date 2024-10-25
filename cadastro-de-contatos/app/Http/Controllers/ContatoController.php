<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index(Request $request)
    {
        $query = Contato::query();
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->whereRaw('LOWER(nome) LIKE ?', ['%' . strtolower($search) . '%'])
                ->orWhereRaw('LOWER(telefone) LIKE ?', ['%' . strtolower($search) . '%']);
        }
        $contatos = $query->orderBy('id', 'asc')->paginate(10);
        return view('contatos.index', compact('contatos'));
    }

    public function create()
    {
        return view('contatos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'idade' => 'required|integer',
            'cep' => 'required',
            'rua' => 'required',
            'numero' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
        ]);
        
        Contato::create($request->all());
        return redirect()->route('contatos.index')->with('success', 'Contato adicionado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'telefone' => 'required',
            'idade' => 'required|integer',
            'cep' => 'required',
            'rua' => 'required',
            'numero' => 'required',
            'complemento' => 'nullable',
            'cidade' => 'required',
            'estado' => 'required',
        ]);

        $contato = Contato::findOrFail($id);
        $contato->update($validated);

        return redirect()->back()->with('success', 'Contato atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $contato = Contato::findOrFail($id);
        $contato->delete();

        return redirect()->route('contatos.index')->with('success', 'Contato excluído com sucesso!');
    }

}
