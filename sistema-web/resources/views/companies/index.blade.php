<x-layout title='Lista de Concedentes'>

    <a href="{{ route('companies.create') }}">cadastro</a>
   
    <h1>Lista de Concedentes</h1>

    @include('components/flash-message')

    @foreach ($companies as $company)
    <p>{{$company->id}}</p> <p>{{$company->name}}</p> <a href="{{ route('companies.show', $company->id) }}">Vizualizar detalhes</a>
    @endforeach
    


</x-layout>