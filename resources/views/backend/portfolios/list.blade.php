@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">List of Portfolio</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">List of Portfolio</li>
                        </ol>

                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Sub Title</th>
                                <th scope="col">Big Image</th>
                                <th scope="col">Small Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Client</th>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                                @if (count($portfolios) > 0)
                                   @foreach ($portfolios as $portfolio)

                                        <tr>
                                            <th scope="row">{{$portfolio->id}}</th>
                                            <td>{{$portfolio->title}}</td>
                                            <td>{{$portfolio->sub_title}}</td>

                                            <td><img style="height: 6vh" src="{{url($portfolio->big_image)}}" alt="Big Image"></td>
                                            <td><img style="height: 6vh" src="{{url($portfolio->small_image)}}" alt="Small Image"></td>

                                            <td>{{Str::limit(strip_tags($portfolio->description),30)}}</td>
                                            <td>{{$portfolio->client}}</td>
                                            <td>{{$portfolio->category}}</td>

                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <a href="{{route('admin.portfolios.edit', $portfolio->id)}}" class="btn btn-primary">Edit</a>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <form action="{{route('admin.portfolios.destroy',$portfolio->id)}}" method="POST">
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


               