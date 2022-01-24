@extends('shopify-app::layouts.default')
@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
customers
  
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Customers' });
    </script>
@endsection