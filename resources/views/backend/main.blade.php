@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Main</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Main</li>
                        </ol>


                <form action="{{route('admin.main.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT')}}

                     <div class="row">

                            <div class="form-group col-md-4 mt-3" >

                                    <div class="mb-4">
                                    <label for="title"> <h4>Title</h4></label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$main->title}}">
                                    </div>

                                    <div class="mb-4">
                                    <label for="sub_title"> <h4>Sub Title</h4></label>
                                    <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$main->sub_title}}">
                                    </div>

                                    <div class="mb-4">
                                    <label for="resume"> <h4>Resume</h4></label>
                                    <input type="file" class="form-control" id="resume" name="resume" value="{{$main->resume}}">
                                    </div>

                            </div>


                              <div class="form-group col-md-2 mt-5" >
                                    <h4>Background Image</h4>
                                    <img style="height: 20vh" src="{{ url($main->bc_img) }}" alt="bg" class="img-thumbnail">

                                    <input style="width: 30vh" class="form-control mt-3" type="file" id="bc_img" name="bc_img">
                                </div>


                                <div class="form-group col-md-2 mt-5" >
                                        <h4>Logo</h4>
                                        <img style="height: 20vh" src="{{ url($main->logo) }}" alt="logo" class="img-thumbnail">
                                        <input style="width: 20vh" class="form-control mt-3" type="file" id="logo" name="logo">
        
                                    </div>


                                    <div class="form-group col-md-2 mt-5" >
                                        <h4>Favicon Icon</h4>
                                        <img style="height: 20vh" src="{{ url($main->favicon) }}" alt="favicon" class="img-thumbnail">
                                        <input style="width: 20vh" class="form-control mt-3" type="file" id="favicon" name="favicon">
    
                                    </div>


                    </div>

                    <input type="submit" name="submit" class="btn btn-primary mt-5">

                    </div>

                </form>
                
                </main>


@endsection


               