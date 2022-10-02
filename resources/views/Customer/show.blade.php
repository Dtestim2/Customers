<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie_edge">
        <title>Ver cliente</title>
    </head>
    <body>
        <label>Nome</label><br>
        <input type="text" name="name" value="{{ $customer->name }}"><br>
        <label>Telefone</label><br>
        <input type="tel" name="phone" value="{{ $customer->phone }}"><br>
        <label>CPF</label><br>
        <input type="text" name="cpf" value="{{ $customer->cpf }}"><br>
        <label>Placa do carro</label><br>
        <input type="text" name="license_plate" value="{{ $customer->license_plate }}"><br>
    </body>
</html>
