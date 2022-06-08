@extends('base')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Ocupação</th>
        </tr>
        @if (isset($employers))
            @foreach ($employers as $employer)
                <tr>
                    <th>{{ $employer->id }}</th>
                    <td>{{ $employer->name }}</td>
                    <td>{{ $employer->lastname }}</td>
                    <td>{{ $employer->ocupation }}</td>
                    <td><a href="{{ route('employer.edit', $employer->id) }}">Editar</a></td>
                    <td>
                        <form action="{{ route('employer.destroy', $employer->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Excluir">
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">Não há dados cadastrados</td>
            </tr>
        @endif


    </table>
