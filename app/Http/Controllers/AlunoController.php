<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Nota;
use App\Models\Turma;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    private $disciplinas;

    public function __construct()
    {
        $this->disciplinas = Turma::all()->keyBy('id');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disciplinas = $this->disciplinas;
        $alunos = Aluno::latest()->paginate(5);
        return view('alunos.index', compact('alunos', 'disciplinas'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'turmaId' => 'required'
        ]);
        $aluno = new Aluno();
        $aluno->firstName = $request->firstName;
        $aluno->lastName = $request->lastName;
        $aluno->turmaId = $request->turmaId;

        $aluno->save();
        $nota = new Nota();
        $nota->disciplina_id = $aluno->turmaId;
        $nota->aluno_id = $aluno->id;
        $nota->notas = '0';
        $nota->save();

        return redirect()->route('alunos.index')
        ->with('success', 'Aluno criado com sucesso.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        $disciplinas = $this->disciplinas;
        return view('alunos.show', compact('aluno', 'disciplinas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        return view('alunos.edit', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'turmaId' => 'required'
        ]);

        $aluno->update($request->all());

        return redirect()->route('alunos.index')
        ->with('success', 'Aluno atualizado com sucesso.');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        $notas = Nota::where('aluno_id', $aluno->id)->first();
        $notas->delete();
        $aluno->delete();

        return redirect()->route('alunos.index')
            ->with('success', 'Aluno deletado com sucesso');    }
}
