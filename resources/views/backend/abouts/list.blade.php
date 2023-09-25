@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">List of Abouts</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Abouts</li>
                        </ol>

                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title one</th>
                                <th scope="col">Title two</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                                @if (count($abouts) > 0)
                                   @foreach ($abouts as $about)

                                        <tr>
                                            <th scope="row">{{$about->id}}</th>
                                            <td>{{$about->title1}}</td>
                                            <td>{{$about->title2}}</td>

                                            <td><img style="height: 10vh" src="{{url($about->image)}}" alt="Image"></td>

                                            <td>{{Str::limit(strip_tags($about->description),40)}}</td>

                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <a href="{{route('admin.abouts.edit', $about->id)}}" class="btn btn-primary">Edit</a>
                                                    </div>

                                                    <div class="col-sm-2">
                                                        <form action="{{route('admin.abouts.destroy',$about->id)}}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" name="submit" value="delete" class="btn btn-danger">
                                                            
                                                            </form>

                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                      
                                   @endforeach
                                    
                                @endif


                            
                            </tbody>
                          </table>

                </main>

@endsection


               