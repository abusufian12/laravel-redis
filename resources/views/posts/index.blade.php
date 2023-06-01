@extends('posts.layout')
 
    <div class="container" style="margin-top: 5rem;">
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        <?php $i=1;?>
        @foreach ($posts ?? '' as $key => $value) 
        <tr>
            <td><?php  echo $i; //dd($value["title"]); ?></td>
            <td>{{ ++$i ?? '' ?? '' }}</td>
            <td>
                {{ $value->title ?? $value["title"] }}
                {{-- !empty($value->title) ? $value["title"]:'' --}}
            </td>
            <td>{{ \Str::limit($value->description  ?? $value["description"], 100) }}</td>
            <td>
                <form action="{{ route('posts.destroy',$value->id ?? $value['id']) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('posts.show',$value->id ?? $value['id']) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('posts.edit',$value->id ?? $value['id']) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {{-- {!! $posts ?? ''->links() !!}   --}} 
</div>
    
