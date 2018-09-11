@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Listing Manager <span class="pull-right"> <a href="listings/create" class="btn btn-primary btn-sm float-right">Create Listing</a> </span> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                    <table id="example" class="table table-hover table-responsive" style="width:100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Website</th>
                                    <th>Email</th>
                                    <th>Listing</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($listings))
                                @foreach ($listings as $key => $listing)
                                <tr>
                                    <td> {{  ++$key }} </td>
                                    <td> {{ $listing->website }} </td>
                                    <td> {{ $listing->email }} </td>
                                    <td> {{ $listing->name }} </td>
                                    <td> 
                                        <a href="{{action('ListingController@edit', $listing->id)}}" class="btn btn-primary btn-sm mb-2" role="button" aria-pressed="true">edit</a> 
                                        <form action="{{action('ListingController@destroy', $listing->id)}}" method="post">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                        
                                </tr>
                                @endforeach
                            @else
                            <td colspan="5"> Empty Data </td>
                            @endif
                            </tbody>
                        </table>
                 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
