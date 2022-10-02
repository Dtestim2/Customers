<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie_edge">
        <title>Editar cliente</title>
    </head>
    <body>
    <form action="{{ route('edit_customer', ['id' => $customer->id]) }}" method="post">
        @csrf
        @method('put')
        <label>Nome</label><br>
        <input type="text" name="name" minlength="1" maxlength="100" value="{{ $customer->name }}"><br>
        <label>Telefone</label><br>
        <input type="tel" name="phone" minlength="10" maxlength="20" value="{{ $customer->phone }}"><br>
        <label>CPF</label><br>
        <input type="text" name="cpf" minlength="14" maxlength="14" value="{{ $customer->cpf }}"><br>
        <label>Placa do carro</label><br>
        <input type="text" name="license_plate" minlength="7" maxlength="7" value="{{ $customer->license_plate }}"><br>
        <button>Editar</button><br>
    </form>
    </body>
</html>
