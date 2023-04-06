@extends('admin.dashboard')
@section('main_component')
@include('sweetalert::alert')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <strong>Create New Blog</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog Tag</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="tag" placeholder="Enter Blog Tag Name" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog Title</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="title" placeholder="Enter Blog Title" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Author Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="author_name" placeholder="Enter Author Name" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Blog Details</label></div>
                    <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="5" placeholder="Enter Blog Description........." class="form-control"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection