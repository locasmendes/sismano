<div>
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
        <th colspan="{{($disciplina->avaliacoes)}}">Notas</th>
        <th>Média</th>
        <th>Ações</th>
        </tr><tr>
@foreach ($alunos as $aluno)

            <td><a href="{{ route('alunos.show', $aluno->id) }}">{{$aluno->firstName}}</a></td>
            <td>{{$aluno->lastName}}</td>
            @foreach ($notas[$loop->index]->notas as $key => $nota)
                <td>
                    {{$nota}}
                </td>
@endforeach
@php($media = ((float)array_sum($notas[$loop->index]->notas))/$disciplina->avaliacoes)
    <td style="background-color: @if($media<6) #ff9e9e @else #c1ffc1 @endif" >{{$media}}</td>
            <td><a href="{{route('notas.edit', ['disciplinaid' => $disciplina->id, 'alunoid' => $aluno->id])}}">Lançar/Editar Nota</a></td>
</tr>
@endforeach
</table>
</div>
