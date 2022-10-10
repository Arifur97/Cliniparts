@extends('backend.adminLayout')

@section('adminContent')
    <div class="addProduct mt-5 mb-3">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-dark float-left">Add Product</h4>
                        </div>
                        <div class="col-12">
                            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="from-group mt-3">
                                            <label for="" class="text-dark mb-2">Select Catagory</label>
                                            <select name="category" class="form-control">
                                                @foreach($category as $row)
                                                <option value="{{ $row->id }}"><?php echo $row->category ?></option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="from-group mt-3">
                                            <label for="" class="text-dark mb-2">Select Sub Catagory</label>
                                            <select name="subcategory" class="form-control">
                                                @foreach($category as $row)
                                                    <optgroup label="{{ $row->category }}">
                                                        @foreach($subcategory as $li)
                                                            @if($row->id == $li->category_id)
                                                            <option value="{{ $li->id }}"><?php echo $li->subcategory ?></option>
                                                            @endif
                                                        @endforeach
                                                    </optgroup>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="from-group mt-3">
                                            <label for="" class="text-dark mb-2">Is Feature</label>
                                            <select name="isFeature" class="form-control">
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label for="">Title</label>
                                                    <input name="title" type="text" class="form-control" placeholder="Title" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input name="name" type="text" class="form-control" placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label for="">Product Code</label>
                                                    <input name="product_code" type="text" class="form-control" placeholder="Product Code" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="form-group">
                                                <label for="">Main Image</label>
                                                    <input type="file" id="img1" name="image1" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="form-group">
                                                <label for="">Image2</label>
                                                    <input type="file" id="img2" name="image2" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="form-group">
                                                <label for="">Image3</label>
                                                    <input type="file" id="img3" name="image3" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="form-group">
                                                <label for="">Image4</label>
                                                    <input type="file" id="img4" name="image4" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Old price</label>
                                                    <input name="oldPrice" type="text" class="form-control" placeholder="Old Price">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">price</label>
                                                    <input name="price" type="text" class="form-control" placeholder="Price" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Short Description</label>
                                                <textarea name="shortDesc" rows="6" class="form-control" placeholder="Short Description"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Description</label>
                                                <textarea class="textarea form-control" name="desc"  id="editor" cols="10" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <label>Specification</label>
                                        <textarea class="textarea form-control" name="specification"  id="editor1" cols="10" rows="10"></textarea>

                                        <input type="submit" value="Uplaod Product" class="btn btn-success btn-block mt-4">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection