@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>This is you : {{ $shopDomain ?? Auth::user()->name }}</p>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>vendor</th>
                <th>created</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>vendor</th>
                <th>created</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>    
                    <td>{{ $product['title'] }}</td>    
                    <td>{{ $product['vendor'] }}</td>    
                    <td>{{ $product['created_at'] }}</td>    
                </tr>   
            @endforeach
        </tbody>
    </table>
    {{-- @php
        dd($products);
    @endphp --}}
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection