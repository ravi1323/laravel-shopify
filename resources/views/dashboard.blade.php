@extends('shopify-app::layouts.default')
@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
@foreach ($shop_metafields as $shop_metafield)
    {{$shop_metafield}}
@endforeach
  
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Shop Metafields' });
    </script>
@endsection