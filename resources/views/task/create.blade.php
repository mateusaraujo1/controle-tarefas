@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('task.store') }}">
                        @csrf
                        <div class="form-group">
                          <label class="form-label">Tarefa</label>
                          <input type="text" class="form-control" name="task">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Data limite conclusão</label>
                          <input type="date" class="form-control" name="limit_date_conclusion">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
