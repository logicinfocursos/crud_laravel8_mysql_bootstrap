@extends('products.layout')

@section('title', 'logicinfo - template crud - editar registro')

@section('content')

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/products">produtos</a></li>
            <li class="breadcrumb-item active" aria-current="page">editar produto</li>
        </ol>
    </nav>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>OOOOPS!</strong> ocorreu um erro, não consegui salvar o registro.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h2>edição do produto</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="row">
                    <div class="mb-3">
                        <label for="name" class="form-label">nome do produto</label>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                            placeholder="nome do produto">
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label">detalhes do produto</label>
                        <textarea class="form-control" name="detail" placeholder="detalhes do produto" rows=3>{{ $product->detail }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">salvar</button>
                </div>
            </form>
        </div>
        <div class="card-footer">
            visite o site da logicinfo: <a href="https://logicinfo.com.br/"> https://logicinfo.com.br/</a>
        </div>
    </div>


@endsection
