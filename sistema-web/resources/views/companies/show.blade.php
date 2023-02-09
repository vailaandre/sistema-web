<x-layout title='Cadastro de Concedentes'>
    
    <a href="{{route('companies.index')}}">Listar</a>
    
    <h1>Destalhes do registro da concedente</h1>

    <h3>ID:</h3>  {{$company->id}}<br>
    <h3>CNPJ:</h3> {{$company->cnpj}}<br>




</x-layout>