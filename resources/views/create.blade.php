@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row"> 
                        <h4 class="col-md-6">
                            Novo IMC
                        </h4>                        
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                    <h1>Cadastrar seu IMC</h1>
            
                    <form method="POST" action="{{ route('salvarIMC') }}">
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Peso</label>
                                <input type="text" name="peso" class="form-control" id="exampleInputEmail1">                            
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Altura</label>
                                <input type="text" name="altura" class="form-control" d="exampleFormControlTextarea1">
                            </div>

                            <button type="submit" class="btn btn-dark">Calcular</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

            

