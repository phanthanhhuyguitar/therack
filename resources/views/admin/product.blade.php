@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
  @if(Session::has('success'))
  <div class="row">
    <div class="col-12">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif
    <div class="card">
        <div class="card-header">
            <h5>DS SẢN PHẨM</h5>
        </div>
        <div class="card-body">
            <a href="{{ route('admin.addform') }}" class="btn btn-success mb-4" style="color:white; width:150px;">THÊM</a>
            <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Hãng</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                  <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td><img style="height:100px;" src="{{ asset('/storage/'.$product->image) }}" alt=""></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('product.editform',['id'=>$product->id]) }}" class="btn btn-primary w-100 m-1" style="color:white;">Sửa</a>
                        <a href="{{ route('product.remove',['id'=>$product->id]) }}" class="btn btn-danger w-100 m-1" style="color:white;">Xóa</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            {{ $products->links() }}
        </div>
    </div>
</div>

@endsection
