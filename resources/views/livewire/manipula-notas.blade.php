<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2>Lançamentos de {{$aluno->firstName}} {{$aluno->lastName}}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('turmas.show', ['turma' => $disciplina->id]) }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>
<div class="row">
<form action="{{route('notas.update')}}" method="POST">
    @csrf
<input type="hidden" name="id" value="{{$notasid}}">
<input type="hidden" name="turmaid" value="{{$disciplina->id}}">
        <table class="table table-bordered table-responsive-lg">
            <tr>
                <td colspan="{{($disciplina->avaliacoes)}}">Notas</td>
                <td>Ação</td>
            </tr>
            <tr>
                @foreach ($notas as $valor)
            <td> <input type="text" name="notas[{{$loop->index}}]" value="{{$valor}}"></td>
                @endforeach
                <td><button type="submit">Salvar</button></td>
            </tr>
        </table>
    </form>
</div>
