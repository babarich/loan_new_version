@extends('layouts.app')
@section('content')
    <div class="row mb-6 mt-4">
        <div class="col-sm-12 col-md-6 col-lg-6">

        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="d-flex flex-row-reverse gap-3">
                <div class="mr-4">
                    <a class="btn btn-primary" href="{{route('interest.index')}}"><i class="bx bx-left-arrow-alt"></i>Back</a>
                </div>




            </div>
        </div>
    </div>
    <!-- Start::row-1 -->
    <div class="row" style="margin-top: 50px">
        <div class="col-xxl-9 col-xl-8">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                 Create a new Interest
                    </div>
                </div>
                <form method="POST" action="{{route('interest.store')}}" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                        <div class="row gy-4 mb-4">
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Interest Name</label>
                                <input type="text" class="form-control" id="name" placeholder="" name="name">
                                @error('name')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Percent</label>
                                <input type="number" class="form-control" id="percent" placeholder="" name="percent">
                                @error('percent')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary btn-wave waves-effect waves-light">
                        <i class="bi bi-save"></i> Submit
                    </button>
                </div>
                </form>
            </div>
        </div>

    </div>
    <!--End::row-1 -->










@endsection
