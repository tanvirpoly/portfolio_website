@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>

                        
                <form action="{{route('admin.abouts.update', $about->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- {{ method_field('PUT')}} --}}


                    <div class="row">

                        <div class="form-group col-md-4 mt-3" >

                                <div class="mb-4">
                                <label for="title1"> <h4>Title one</h4></label>
                                <input type="text" class="form-control" id="title1" name="title1" value="{{$about->title1}}">
                                </div>

                                <div class="mb-4">
                                <label for="title2"> <h4>Title two</h4></label>
                                <input type="text" class="form-control" id="title2" name="title2" value="{{$about->title2}}">
                                </div>

                                <div class="mb-4">
                                    <label for="description"> <h4>Description</h4></label>
                                    <textarea class="form-control" name="description" rows="5">{{$about->description}}</textarea>
                                </div>

                        </div>


                          <div class="form-group col-md-2 mt-5" >
                                <h4>Image</h4>
                                <img style="height: 20vh" src="{{url($about->image)}}" alt="image" class="img-thumbnail">

                                <input style="width: 30vh" class="form-control mt-3" type="file" name="image">
                            </div>

                </div>

                    <input type="submit" name="submit" class="btn btn-primary mt-3">

                    </div>

                </form>
                
                </main>


@endsection


               