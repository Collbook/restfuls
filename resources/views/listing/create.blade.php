@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                
                <div class="card-header">Create Listing <span class="pull-right"> <a href="/dashboard" class="btn btn-primary btn-sm">Go Back</a> </span> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!empty($errors->first()))
                    <div class="row col-lg-12">
                        <div class="alert alert-danger">
                            <span>{{ $errors->first() }}</span>
                        </div>
                    </div>
                    @endif
                    
                    <form method="POST" action="{{url('listings')}}">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Listing name</label>
                            <input type="text" class="form-control" name="name" id="name" value=" {{ old('name') }} "  placeholder="Enter Listing">
                        </div>
                        <div class="form-group">
                            <label for="address">Address </label>
                            <input type="text" class="form-control" name="address" id=""  value="{{ old('address') }}"  placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="name">Website</label>
                            <input type="name" class="form-control" name="website" id="name"  value="{{ old('website') }}" placeholder="Enter Website">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" name="email" id="email"  value="{{ old('email') }}" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="name">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}"  placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label for="name">Listing Bio</label>
                            <textarea type="name" class="form-control" name="bio" id="bio" rows="6"  value="{{ old('bio') }}" placeholder="Enter Bio"> </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
