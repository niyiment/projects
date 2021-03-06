@extends('layouts.admin')

@section('title','Add New Author')
@section('module','Authors')
@section('content')

<div class="row">
 <div class="col-sm-8 col-sm-offset-2">
    <div class="box box-info">
        <div class="box-header with-border">
            <h4 class="box-title">Creating New Author</h4>
            <p class="category">Fill in the fields to create a new author</p>
        </div>
        <div class="box-body">
            @include('layouts.partials.messages')

            <form action="{{ route('authors.store') }}" method="POST" autocomplete="off">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block btn-lg" value="Create Author">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection