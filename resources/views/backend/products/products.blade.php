@extends('backend.adminLayout')

@section('adminContent')
    <div class="product mt-5 mb-3">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-dark float-left">Products</h4>
                            <a href="{{ route('admin.product.add') }}" class="btn btn-success float-right">Add Product</a>
                        </div>
                        <div class="col-12 mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Old Price</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $li)
                                    <tr>
                                        <th scope="row">{{ $li->id }}</th>
                                        <td>
                                            <img src="{{ URL::to($li->image1) }}" alt="" style="width: 80px;">
                                        </td>
                                        <td>{{ $li->name }}</td>
                                        <td>{{ $li->old_price }}</td>
                                        <td>{{ $li->price }}</td>
                                        <td>
                                            <a href="{{ URL::to('/admin/product/view/'.$li->id) }}" class="btn btn-warning">View</a>
                                            <a href="{{ URL::to('/admin/product/edit/'.$li->id) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ URL::to('/admin/product/delete/'.$li->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection