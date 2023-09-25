@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">List of Teams</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Teams</li>
                        </ol>

                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Sub Title</th>
                                <th scope="col">Linkedin</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Twitter</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                                
                              </tr>
                            </thead>
                            <tbody>

                                @if (count($teams) > 0)
                                   @foreach ($teams as $team)

                                        <tr>
                                            <th scope="row">{{$team->id}}</th>
                                            <td>{{$team->title}}</td>
                                            <td>{{$team->sub_title}}</td>
                                            <td>{{Str::limit(strip_tags($team->linkedin),22)}}</td>
                                            <td>{{Str::limit(strip_tags($team->facebook),22)}}</td>
                                            <td>{{Str::limit(strip_tags($team->twitter),22)}}</td>
                                           
                                            <td><img style="height: 6vh" src="{{url($team->team_image)}}" alt="Team Image"></td>


                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <a href="{{route('admin.teams.edit', $team->id)}}" class="btn btn-primary">Edit</a>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <form action="{{route('admin.teams.destroy',$team->id)}}" method="POST">
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


               