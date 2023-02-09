@if(session('sucesso'))
    <p style="color:green;">{{(session('sucesso'))}}</p>
@endif

@if(session('erro'))
    <p style="color:red;">{{(session('erro'))}}</p>
@endif