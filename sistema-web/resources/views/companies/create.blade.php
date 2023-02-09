<x-layout title='Cadastro de Concedentes'>
    
    <a href="{{route('companies.index')}}">Listar</a>
    
    <h1>Cadastro de Concedentes</h1>

    <form action="{{route('companies.store')}}" method="POST">
        @csrf
        <label>Nome da Concedente</label>
        <input type="text" name="name" id="name" placehold="Nome da Concededente">
        <br><br>

        <label>CNPJ</label>
        <input type="text" name="cnpj" id="cnpj" placehold="CNPJ da Concededente">
        <br><br>

        <button type="submit">Cadastrar</button>
    </form>



</x-layout>