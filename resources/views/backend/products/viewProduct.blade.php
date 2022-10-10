@extends('backend.adminLayout')

@section('adminContent')
    <div class="product mt-5 mb-3">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-dark float-left">View Product</h4>
                            <a href="{{ URL::to('/admin/product/edit/'.$product->id) }}" class="btn btn-success float-right">Edit Product</a>
                        </div>
                        <div class="col-12 mt-4">
                            <h1>Title: {{ $product->title }}</h1>
                            <h3>Name: {{ $product->name }}</h3>
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <img src="{{ URL::to($product->image1) }}" alt="">
                                    <p>Main Image</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ URL::to($product->image2) }}" alt="">
                                    <p>Image 2</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ URL::to($product->image3) }}" alt="">
                                    <p>Image 3</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ URL::to($product->image4) }}" alt="">
                                    <p>image 4</p>
                                </div>
                                <div class="col-12">
                                    <p class="ml-3" style="font-size: 18px; color: #333; font-weight: 500; margin-top: 10px;">Category: {{ $product->category->category }},<br>Sub Category: {{ $product->subcategory->subcategory }},<br>Product Code: {{ $product->product_code }}, <br>Is Feature: {{ $product->isFeature == 1 ? "Yes" : "No" }}</p>
                                </div>
                                <div class="col-12">
                                    <h4 class="ml-3">Old Price: ${{ $product->old_price }}</h4>
                                    <h4 class="ml-3">Price: ${{ $product->price }}</h4>   
                                </div>
                                <div class="col-12 ml-3 mt-3">
                                    <h2 class="text-dark">Short Description:</h2>
                                    <p>{{ $product->short_desc }}</p>
                                </div>
                                <div class="col-12 ml-3 mt-3">
                                    <h2 class="text-dark">Description:</h2>
                                    <div class="ml-5">
                                        {!! $product->desc !!}
                                    </div>
                                </div>
                                <div class="col-12 ml-3 mt-3">
                                    <h2 class="text-dark">Specifications:</h2>
                                    <div class="ml-5">
                                        {!! $product->specification !!}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection