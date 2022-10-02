<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie_edge">
        <title>Cadastrar novo cliente</title>
    </head>
    <body>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <label>Nome</label><br>
            <input type="text" name="name" required><br>
            <label>Telefone</label><br>
            <input type="tel" name="phone" required><br>
            <label>CPF</label><br>
            <input type="text" name="cpf" required><br>
            <label>Placa do carro</label><br>
            <input type="text" name="license_plate" required><br>
            <button>Salvar</button><br>
        </form>
    </body>
</html>
