@extends('backend.adminLayout')

@section('adminContent')
    <div class="dashboard-card container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="
                    background: #91d18b;
                ">
                    <div class="card-body">
                        <i class="fas fa-users"></i>
                        <div class="float-right">
                            <h4 class="text-light">10</h4>
                            <h4 class='text-light'>User</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="
                    background: #9ad3bc;
                ">
                    <div class="card-body">
                    <i class="fas fa-sitemap"></i>
                        <div class="float-right">
                            <h4 class="text-light">10</h4>
                            <h4 class='text-light'>Category</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="
                    background: #f08a5d;
                ">
                    <div class="card-body">
                    <i class="fas fa-drumstick-bite"></i>
                        <div class="float-right">
                            <h4 class="text-light">10</h4>
                            <h4 class='text-light'>Products</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection