@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>

                        
                <form action="{{route('admin.services.update', $service->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- {{ method_field('PUT')}} --}}

                        <div class="row">

                    

                        <div class="form-group col-md-4 mt-2" >

                             <div class="mb-3">
                                <label for="icon"> <h4>Font Awesome Icon</h4></label>
                                <input type="text" class="form-control" id="icon" name="icon" value="{{$service->icon}}">

                             </div>

                             <div class="mb-3">
                                <label for="title"> <h4>Title</h4></label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$service->title}}">

                             </div>

                             <div class="mb-3">
                                <label for="description"> <h4>Sub Title</h4></label>

                                <textarea class="form-control" name="description" id="description" cols="30" rows="10"> {{$service->description}} </textarea>

                             </div>

                        </div>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary mt-3">

                    </div>

                </form>
                </main>


@endsection


               