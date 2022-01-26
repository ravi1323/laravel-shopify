@extends('shopify-app::layouts.default')
@section('content')

<div class="container mt-4">
    <div class="row">
        <form action="{{ route('store_shop_metafield') }}" method="post">
            <h5 class="mb-4">Create Metafield (Shop)</h5>
            <div class="col-md-6">
                <input type="hidden" name="token" value="{{ request('token') }}">
                <div class="form-floating mb-2">
                    <input type="text" name="key" id="key" placeholder="Enter key name" class="form-control" autocomplete="off">
                    <label for="key">Key</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" name="namespace" id="namespace" placeholder="Enter key name" class="form-control" autocomplete="off">
                    <label for="key">Namespace</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" name="value" id="value" placeholder="Enter value name" class="form-control" autocomplete="off">
                    <label for="value">Value</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-2">
                    <input list="value_type" name="value_type" class="form-control" autocomplete="off">
                    <datalist id="value_type">
                        @foreach ($metafield_value_types as $value_type)
                            <option value="{{$value_type["api_name"]}}">{{$value_type["api_name"]}}</option>
                        @endforeach
                    </datalist>
                    <label for="namespace">Type</label>
                </div>
                
                <div class="form-floating mb-2">
                    <textarea name="description" id="description" placeholder="Enter description name" class="form-control" rows="3"></textarea>
                    <label for="description">Description <span><small>(Optional)</small></span></label>
                </div>
            </div>
            <button type="submit" class="btn btn-dark">Create</button>
        </form>
    </div>
</div>

@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Create Shop Metafields' });
    </script>
@endsection