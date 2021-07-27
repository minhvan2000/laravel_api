@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thêm danh mục bài viết') }} <a href="{{ url('/home') }}"> Back </a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form autocomplete="off" method="POST" action="{{ route('category.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text" placeholder="Tiêu đề..." class="form-control" name="title">
                            <label for="title">Mô tả danh mục</label>
                            <textarea name="short_desc" id="" cols="30" rows="5" class="form-control" style="resize: none"></textarea>
                            <input type="submit" name="themdanhmuc" class="btn btn-primary mt-2" value="Thêm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
