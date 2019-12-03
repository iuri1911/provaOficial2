@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row"> 
                        <h4 class="col-md-6">
                        </h4>
                        <div class="text-right col-md-6">
                            <a type="button" class="btn btn-outline-dark" href="{{ route('novoIMC') }}">Inserir</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                    <h1 class="text-center display-1" style="padding: 30px 0px 30px 0;"> Listagem dos IMC's</h1>
                    <img src="https://1.bp.blogspot.com/-5-f-GLaShCM/WxsDc4JBYCI/AAAAAAAAAJo/0-4LKtkpoOkckmcnS3SmcyyVpojPS10RwCEwYBhgL/s400/1.%2BVeja%2Bo%2Bgordo%2Bsentado%252C%2Bse%2Ba%2Bcadeira%2Bnao%2Bfosse%2Bde%2Bferro%2Bestaria%2Bquebrada.jpg" style="display: block;margin-left: auto;margin-right: auto;width: 30%; padding: 0 0 65px 0;" class="img-responsive center-block">
                    <table class = "table table-striped table-hover">
                        <thead class = "thead">
                            <tr>
                                <th>Nome</th>
                                <th>Peso</th>
                                <th>Altura</th>
                                <th>Resultado</th>
                                <th>Diagnóstico</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resultado as $resultados)           
                                <tr> 
                                    <td>{{$resultados->nome}}</td>
                                    <td>{{$resultados->peso}}</td>
                                    <td>{{$resultados->altura}}</td>
                                    <td>{{$resultados->resultado}}</td>
                                    <td>{{$resultados->diagnostico}}</td>
                                </tr>                  
                            @endforeach 
                        </tbody>  
                    </table>  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

