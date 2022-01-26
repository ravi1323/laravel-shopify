@extends('shopify-app::layouts.default')
@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="container-xl">
        <div class="row mt-2">
            <div class="col d-flex flex-row-reverse">
                <a href="/create_shop_metafield" class="create-button">Create Metafield</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="shop_metafield_table" class="table">
                    <thead class="w-100">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Namespace</th>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                            <th scope="col">Description</th>
                            <th scope="col">Created</th>
                            <th scope="col" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="w-100">
                        @foreach ($shop_metafields as $shop_metafield)
                        <tr>
                            <td scope="row">{{$shop_metafield['id']}}</td>
                            <td>{{$shop_metafield['namespace']}}</td>
                            <td>{{$shop_metafield['key']}}</td>
                            <td>{{$shop_metafield['value']}}</td>
                            <td>{{$shop_metafield['description']}}</td>
                            <td>{{$shop_metafield['created_at']}}</td>
                            <td>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-outline-success">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Shop Metafields' });
    </script>
@endsection