@extends('products.layout')

@section('title', 'logicinfo - template crud - exibir registro')

@section('content')

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/products">produtos</a></li>
            <li class="breadcrumb-item active" aria-current="page">exibir produto</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
        <div class="card-footer">
            visite o site da logicinfo: <a href="https://logicinfo.com.br/"> https://logicinfo.com.br/</a>
        </div>
    </div>

@endsection
