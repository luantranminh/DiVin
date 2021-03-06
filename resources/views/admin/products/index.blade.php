@extends ('layouts.app')

@section ('content')

    <div class="panel panel-default">
        <div class="panel-heading">Products</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Trash</th>
                  </tr>
                </thead>
                <tbody>
                    
                    @foreach ($products as $product)
                        <tr>
                            <td><img src="{{ asset($product->image) }}" alt="{{ $product->name . ' image' }}" width="40"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-info btn-xs">Edit</button>
                            </td>
                            <td>
                                <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger btn-xs">Trash</button>
                                </form>
                            </td>
                          </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>

@stop