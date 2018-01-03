@extends ('layouts.app')

@section('content')
    
    <div class="panel panel-default">
        <div class="panel-heading">Create a new product</div>
        <div class="panel-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                </div>
                <div class="form-group">
                    <label for="category">Select a category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success form-control">Save Product</button>
                </div>
            </form>
        </div>
    </div>

@endsection