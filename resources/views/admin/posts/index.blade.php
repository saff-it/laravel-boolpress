@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($posts as $post)
            <tr>
                <th scope="row">{{$post -> id}}</th>
                <td>
                    <a href="{{ route('admin.posts.show', $post -> id) }}">
                        {{$post -> title}}
                    </a>
                    
                </td>
                <td>{{$post->user->name}}</td>
                
                <td>{{$post -> post_date}}</td>
                <td>{{$post -> post_content}}</td>
                <td><button> <a href="{{route('admin.posts.edit', $post->id)}}"> Edit</a></button></td>
                <td>
                  <form class="delete-item" action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                  </form>
                </td>  
                <td><button> <a href="{{route('admin.posts.create', $post->id)}}"> Create</a></button></td>

              
            </tr>
        @endforeach
    </tbody>
  </table>
</section>

@endsection