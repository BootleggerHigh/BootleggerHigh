@extends('posts.layout',['title'=>'Редактирование поста'])
@section('content')
    <form action="{{route('post.update',$post->post_id)}}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <h3>Редактировать пост</h3>
        @include('posts.parts.form')
        <input type="submit" value="Изменить пост" class="btn btn-success btn-lg btn-block">
    </form>
@endsection
