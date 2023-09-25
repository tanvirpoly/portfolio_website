@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Team Create</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>

                        
                        <form action="{{route('admin.teams.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT')}}
        
                             <div class="row">

                                    <div class="form-group col-md-4 mt-3" >
        
                                            <div class="mb-4">
                                            <label for="title"> <h4>Name</h4></label>
                                            <input type="text" class="form-control" id="title" name="title" value="">
                                            </div>
        
                                            <div class="mb-4">
                                            <label for="sub_title"> <h4>Sub Title</h4></label>
                                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="">
                                            </div>

                                            <div class="mb-4">
                                                <label for="linkedin"> <h4>Linkedin Link</h4></label>
                                                <input type="text" class="form-control" id="linkedin" name="linkedin" value="">
                                            </div>

                                            <div class="mb-4">
                                                <label for="facebook"> <h4>Facebook Link</h4></label>
                                                <input type="text" class="form-control" id="facebook" name="facebook" value="">
                                            </div>

                                            <div class="mb-4">
                                                <label for="twitter"> <h4>Twitter Link</h4></label>
                                                <input type="text" class="form-control" id="twitter" name="twitter" value="">
                                            </div>
                                         
                                            
                                    </div>
        
        
                                      <div class="form-group col-md-2 mt-5" >
                                            <h4>Profile(200*200px)</h4>
                                            <img style="height: 30vh" src="{{url('/img/big_image.jpg')}}" alt="Team Image" class="img-thumbnail">
        
                                            <input style="width: 30vh" class="form-control mt-3" type="file" name="team_image">
                                        </div>
        
                            </div>
        
                            <input type="submit" name="submit" class="btn btn-primary mt-5">
        
                            </div>
        
                        </form>

                </main>


@endsection


               