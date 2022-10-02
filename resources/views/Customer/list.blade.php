<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie_edge">
    <title>Editar cliente</title>
</head>
    <a href="{{ route('new_customer') }}">Cadastrar novo cliente</a>
    <form action="{{ route('list_search_customers') }}" method="get">
        <label>Consultar placas com número final:</label>
        <input type="number" name="number" required/>
        <button>Buscar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Placa do Carro</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listCustomers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->cpf }}</td>
                    <td>{{ $customer->license_plate }}</td>
                    <td>
                        <a href="{{ route('show_edit',['id'=>$customer->id ]) }}">Editar</a>
                        <form action="{{ route('delete_customer',['id'=>$customer->id ]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button>Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
