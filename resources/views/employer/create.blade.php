@extends('base')

@section('content')
    <div class="container border p-3 shadow rounded-3">
        <form action="{{ route('employer.store') }}" method="POST">
            @csrf
            <div class="m-auto col-md-6">
                <h2>Cadastro de Funcionários</h2>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome do funcionário">
                    <label for="floatingInput">Nome</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="sobrenome do funcionário">
                    <label for="floatingPassword">Sobrenome</label>
                </div>
                <div class="form-floating mb-2">
                    <select class="form-select" id="occupation" name="occupation" aria-label="">
                      @foreach ($occupations as $occupation)
                        <option value="{{ $occupation->id }}">{{$occupation->role}}</option>
                      @endforeach
                    </select>
                    <label for="floatingSelect">Ocupação</label>
                  </div>
                <input type="submit" value="Cadstrar" class="btn btn-primary">
            </div>
    </div>
    </form>
@endsection
