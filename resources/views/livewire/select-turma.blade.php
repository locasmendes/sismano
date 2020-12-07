<div class="row">
        <strong>Curso</strong>
    @if ($cursos)
        @if (count($cursos) == 0)
        <select name="" id="turmaId">
            <option value="" disabled>Crie uma disciplina primeiro.</option>
        </select>
        @else
        <select name="turmaId" id="turmaId">
            @foreach ($cursos as $curso)
                <option value="{{$curso->id}}">{{$curso->turma}}</option>
            @endforeach
        </select>
        @endif
    @else
        <select name="" id="turmaId">
            <option value="" disabled>Crie uma disciplina primeiro.</option>
        </select>
    @endif
</div>
