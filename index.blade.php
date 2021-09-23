@extends('layouts.app')

@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header" style="color: Black;text-transform: capitalize;font-weight: bold; ">
                        POST Information
                        @if(Session::has('deletesuccess'))
                        <div class="alert alert-success mt-2">
                            {{session('deletesuccess')}}
                        </div>
                        @endif

                        @if(Session::has('updatesuccess'))
                        <div class="alert alert-success mt-2">
                            {{session('updatesuccess')}}
                        </div>
                        @endif

                    </header>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="table-responsive">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Category Name</th>
                                        <th>POST</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $n = 1;
                                    @endphp
                                    @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$n++}}</td>
                                        <td>{{$blog->category->name}}</td>
                                        <td>{!! substr($blog->post,0,30) !!}</td>
                                        <td>
                                            <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this?');" class="btn btn-danger">Delete</button>
                                                <a class="btn btn-info" href="{{route('blogs.edit', $blog->id)}}"> Edit</a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<!--main content end-->

@endsection