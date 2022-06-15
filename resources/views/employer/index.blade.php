@extends('base')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Ocupação</th>
            <th></th>
        </tr>
        @if (isset($employers))
            @foreach ($employers as $employer)
                <tr>
                    <th>{{ $employer->id }}</th>
                    <td>{{ $employer->name }}</td>
                    <td>{{ $employer->lastname }}</td>
                    <td>{{ $employer->occupation }}</td>
                    <td>
                        <div class="d-flex flex-row col-md-5 justify-content-around">
                            <div class="mr-5"><a href="{{ route('employer.edit', $employer->id) }}"
                                    class="btn btn-info">Editar</a></div>
                            <form action="{{ route('employer.destroy', $employer->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Excluir" class="btn btn-danger margin-left-5">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">Não há dados cadastrados</td>
            </tr>
        @endif


    </table>
@endsection
