@extends('back.master')

@section('page-title')
New portfolio
@endsection


@section('page-content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>New Portfolio</h3>
            </div>
        </div>

        <div class="row" id="cancel-row">

            <div class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Post Details</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="/admin/portfolio" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">Image</label>
                                <input type="file" class="form-control" id="exampleFormControlInput2" name="img" value="">
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput2" name="name" value="">
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">Date</label>
                                <input type="text" class="form-control" id="exampleFormControlInput2" name="date" value="">
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">Category</label>
                                <select name="cat_id" id="cat_id" class="form-control" >
                                    <option disabled selected>Select Blog Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="submit" value="Save" name="time" class="mt-4 mb-4 btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
