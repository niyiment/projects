@extends('layouts.admin')

@section('title','Add Edit Customer')
@section('module','Customers')
@section('content')

<div class="row">
 <div class="col-sm-8 col-sm-offset-2">
    <div class="box box-info">
        <div class="box-header with-border">
            <h4 class="box-title">Editing Customer - {{$customer->name}}</h4>
            <p class="category">Fill in the fields to create a new author</p>
        </div>
        <div class="box-body">
            @include('layouts.partials.messages')

            <form action="{{ route('customers.update', $customer) }}" method="POST" autocomplete="off">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name',$customer->name) }}">
                </div>
                 <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone',$customer->phone) }}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block btn-lg" value="Update Customer">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection