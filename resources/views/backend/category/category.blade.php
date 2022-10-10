@extends('backend.adminLayout')

@section('adminContent')
    <div class="category mt-5 mb-3">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-dark float-left">Category</h4>
                            <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#addSubCategoryModal">Add Sub Category</button>
                            <button type="button" class="btn btn-success float-right mr-3" data-toggle="modal" data-target="#addCategoryModal">Add Category</button>
                        </div>
                        <div class="col-12 mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Sub Category</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($subcategory as $row)
                                    <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>{{ $row->category->category }}</td>
                                    <td>{{ $row->subcategory }}</td>
                                    <td>
                                        <a href="{{ URL::to('/admin/subcategory/delete/'.$row->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $subcategory->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.category.store') }}" method="post">
                    @csrf
                        <div class="from-group mt-3">
                            <input type="text" name="category" class="form-control" placeholder="Category">
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success btn-block" value="Create Category">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Sub Category Modal -->
    <div class="modal fade" id="addSubCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.subcategory.store') }}" method="post">
                    @csrf
                        <div class="from-group mt-3">
                            <label for="" class="text-dark mb-2">Select Catagory:</label>
                            <select name="category" class="form-control">
                                @foreach($category as $li)
                                <option value="{{ $li->id }}"><?php echo $li->category ?></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" name="subcategory" class="form-control" placeholder="Sub Category">
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success btn-block" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection