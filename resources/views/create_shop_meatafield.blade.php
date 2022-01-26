@extends('shopify-app::layouts.default')
@section('content')

<div class="container mt-4">
    <div class="row">
        <form action="{{ route('store_shop_metafield') }}" method="post">
            <h5 class="mb-4">Create Metafield (Shop)</h5>
            <input type="hidden" name="token" value="{{ request('token') }}">
            <div class="form-floating mb-2">
                <input type="text" name="key" id="key" placeholder="Enter key name" class="form-control" autocomplete="off">
                <label for="key">Key</label>
            </div>

            <div class="form-floating mb-2">
                <input list="namespace" name="namespace" placeholder="Enter Namespace name" class="form-control" autocomplete="off">
                <datalist id="namespace">
                    @foreach ($namespaces as $namespace)
                        <option value="{{$namespace}}">{{$namespace}}</option>
                    @endforeach
                </datalist>
                <label for="namespace">Namespace</label>
            </div>

            <div class="form-floating mb-2">
                <select name="value_type" id="" class="form-select" id="value_type">
                    @foreach ($metafield_value_types as $value_type)
                        <option value="{{ $value_type['type'] }}">
                                {{ $value_type['api_name'] }} ({{ $value_type['type'] }})
                            </div>
                        </option>
                    @endforeach
                </select>
                <label for="value_type">Type</label>
            </div>

            <div class="form-floating mb-2">
                <input type="text" name="value" id="value" placeholder="Enter value name" class="form-control" autocomplete="off">
                <label for="value">Value</label>
            </div>
            
            <div class="form-floating mb-2">
                <textarea name="description" id="description" placeholder="Enter description name" class="form-control" rows="3"></textarea>
                <label for="description">Description <span><small>(Optional)</small></span></label>
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