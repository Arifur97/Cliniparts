@extends('backend.adminLayout')

@section('adminContent')
    <div class="homePage mt-5 mb-3">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-dark float-left">Slider</h4>
                            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addSlider">Add Slider</button>
                        </div>
                        <div class="col-12 mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Text</th>
                                    <th scope="col">Button Text</th>
                                    <th scope="col">Button Url</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                <tbody>
                                    @foreach($slider as $row)
                                    <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>
                                        <img src="{{ URL::to($row->sliderImage) }}" alt="" style="width: 80px; height: auto;">
                                    </td>
                                    <td>{!! $row->sliderText !!}</td>
                                    <td>{{ $row->sliderBtn }}</td>
                                    <td>{{ $row->sliderBtnUrl }}</td>
                                    <td>
                                        <a href="#editSlider-{{ $row->id }}"  data-toggle="modal" class="btn btn-success">Edit</a>
                                        <a href="{{ URL::to('/admin/homepage/delete/slider/'.$row->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>


                            <!-- Edit Homepage Slider -->
                            @foreach($slider as $li)
                            <div class="modal fade" id="editSlider-{{ $li->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Slider</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ URL::to('/admin/homepage/update/slider/'.$li->id) }}"  method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <div class="from-group mt-3">
                                                    <label for="">Edit Slider Image:</label> <br>
                                                    <img src="{{ URL::to($li->sliderImage) }}" alt="" style="width: 150px; height: auto;"> <br>
                                                    <input type="file" id="" name="sliderImage">
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label>Slider Text:</label>
                                                    <textarea class="textarea form-control" name="sliderText"  id="editor2" cols="10" rows="10">{!! $li->sliderText !!}</textarea>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label>Slider Button Text:</label>
                                                    <input type="text" name="sliderBtn" class="form-control" placeholder="Slider Button Text" value="{{ $li->sliderBtn }}">
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label for="">Slider Button Url:</label>
                                                    <input type="text" name="sliderBtnUrl" class="form-control" placeholder="Slider Button Url" value="{{ $li->sliderBtnUrl }}">
                                                </div>
                                                <div class="form-group mt-3">
                                                    <input type="submit" class="btn btn-success btn-block" value="Update Slider">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Homepage Slider -->
    <div class="modal fade" id="addSlider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.slider.store') }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="from-group mt-3">
                            <label for="">Add Slider Image:</label> <br>
                            <input type="file" id="" name="sliderImage" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Slider Text:</label>
                            <textarea class="textarea form-control" name="sliderText"  id="editor2" cols="10" rows="10"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label>Slider Button Text:</label>
                            <input type="text" name="sliderBtn" class="form-control" placeholder="Slider Button Text">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Slider Button Url:</label>
                            <input type="text" name="sliderBtnUrl" class="form-control" placeholder="Slider Button Url">
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success btn-block" value="Add Slider">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- home page banner -->

    <div class="homePageBanner mt-5 mb-3">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-dark float-left">Banner</h4>
                            <button type="button" class="btn btn-info float-right ml-3" data-toggle="modal" data-target="#addRightBanner">Right Banner</button>
                            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addLeftBanner">Left Banner</button>
                        </div>
                        <div class="col-12 mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Left Banner</th>
                                    <th scope="col">Right Banner</th>
                                    </tr>
                                <tbody>
                                    @foreach($homepagebanner as $li)
                                    <tr>
                                    <th scope="row">{{ $li->id }}</th>
                                    <td>
                                        <img src="{{ URL::to($li->left_banner) }}" alt="" style="width: 200px; height: auto;">
                                    </td>
                                    <td>
                                        <img src="{{ URL::to($li->right_banner) }}" alt="" style="width: 200px; height: auto;">
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- left banner -->
    <div class="modal fade" id="addLeftBanner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Left Banner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ URL::to('/admin/homepage/add/leftBanner/1') }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="from-group mt-3">
                            <label for="">Add Left Banner Image:</label> <br>
                            <input type="file" id="" name="leftBannerImage" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success btn-block" value="Add Left Banner">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- right banner -->
    <div class="modal fade" id="addRightBanner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Left Banner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ URL::to('/admin/homepage/add/rightBanner/2') }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="from-group mt-3">
                            <label for="">Add Right Banner Image:</label> <br>
                            <input type="file" id="" name="rightBannerImage" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success btn-block" value="Add Right Banner">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- home page poster -->

    <div class="homePageBanner mt-5 mb-3">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-dark float-left">Poster</h4>
                            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#changePoster">Change Poster</button>
                        </div>
                        <div class="col-12 mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Poster</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                <tbody>
                                    @foreach($poster as $poster)
                                    <tr>
                                    <th scope="row">{{ $poster->id }}</th>
                                    <td>
                                        <img src="{{ URL::to($poster->poster) }}" alt="" style="width: 300px; height: auto;">
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#changePoster">Change Poster</a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- poster -->
    <div class="modal fade" id="changePoster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Poster</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.poster.store') }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="from-group mt-3">
                            <label for="">Change Poster:</label> <br>
                            <input type="file" id="" name="poster" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success btn-block" value="Change Poster">
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