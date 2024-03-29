<x-layout title="Formulario Cadastro">

    <div class="container">
        @foreach($dados as $dado)
            <li class="list-group-item">{{$dado->nome}}</li>
            <li class="list-group-item">{{$dado->telefone}}</li>
        @endforeach
    </div>
    
    <form action="/cadastrar/salvar" method="POST">
        @csrf <!-- valida o formulario -->
        <br>
        <label>Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Informe seu nome" required/> <br><br>
        
        <label>Telefone</label>
        <input type="text" id="telefone" name="telefone" placeholder="(11)99999-9999" required/>

        <button type="submit">Enviar</button>
    </form>
</x-layout>