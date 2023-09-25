@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Portfolio Create</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>

                        
                        <form action="{{route('admin.portfolios.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT')}}
        
                             <div class="row">

                                    <div class="form-group col-md-4 mt-3" >
        
                                            <div class="mb-4">
                                            <label for="title"> <h4>Title</h4></label>
                                            <input type="text" class="form-control" id="title" name="title" value="">
                                            </div>
        
                                            <div class="mb-4">
                                            <label for="sub_title"> <h4>Sub Title</h4></label>
                                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="">
                                            </div>

                                            <div class="mb-4">
                                                <label for="description"> <h4>Description</h4></label>
                                                <textarea class="form-control" name="description" rows="5"></textarea>
                                            </div>

                                            <div class="mb-4">
                                                <label for="client"> <h4>Client</h4></label>
                                                <input type="text" class="form-control" id="client" name="client" value="">
                                            </div>

                                            <div class="mb-4">
                                                <label for="category"> <h4>Category</h4></label>
                                                <input type="text" class="form-control" id="category" name="category" value="">
                                            </div>
        
                                    </div>
        
        
                                      <div class="form-group col-md-2 mt-5" >
                                            <h4>Big Image</h4>
                                            <img style="height: 30vh" src="{{url('/img/big_image.jpg')}}" alt="Big Image" class="img-thumbnail">
        
                                            <input style="width: 30vh" class="form-control mt-3" type="file" name="big_image">
                                        </div>
        
                                        <div class="form-group col-md-2 mt-5" >
                                                <h4>Small Image</h4>
                                                <img style="height: 20vh" src="{{url('/img/small_image.jpg')}}" alt="Small Image" class="img-thumbnail">
                                                <input style="width: 20vh" class="form-control mt-3" type="file" name="small_image">
                                        </div>
        
                            </div>
        
                            <input type="submit" name="submit" class="btn btn-primary mt-5">
        
                            </div>
        
                        </form>

                </main>


@endsection


               