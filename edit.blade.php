@extends('layouts.app')

@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header" style="color: Black;text-transform: capitalize;font-weight: bold; ">
                        Update POST 

                        @if(Session::has('updatesuccess'))
                        <div class="alert alert-success mt-2">
                            {{session('updatesuccess')}}
                        </div>
                        @endif

                    </header>
                    <div class="card-body">
                        <form action="{{ route('blogs.update',$blog->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select name="category" id="category" class="form-control select2box">
                                            <option value="" disabled selected>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}"  {{$category->id==$blog->category_id ? "selected":""}} >{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="post">POST</label>
                                        <textarea name="post" id="post" class="form-control" cols="30" rows="10"> {!! $blog->post !!} </textarea>
                                    </div>
                                </div>
                            </div>  
                            <button type="submit" class="btn btn-success" >Submit</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

@endsection