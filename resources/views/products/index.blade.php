@extends('products.layout')

@section('title', 'logicinfo - template crud - listar produtos')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">produtos</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('products.create') }}"> adicionar um produto</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>produto</th>
                        <th>detalhes</th>
                        <th width="280px"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>

                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->detail }}</td>

                            <td>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                                    <a class="btn btn-secondary" href="{{ route('products.show', $product->id) }}">ver</a>

                                    <a class="btn btn-primary"
                                        href="{{ route('products.edit', $product->id) }}">editar</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>
        <div class="card-footer">
            visite o site da logicinfo: <a href="https://logicinfo.com.br/"> https://logicinfo.com.br/</a>
        </div>
    </div>

    {!! $products->links() !!}
@endsection
