@extends('layout.app')
@push('css')
    <style>
        button.like_btn {
    background: none;
    border: none;
    font-weight: 500;
    color: #0062cc;
    padding-left: 0;
    padding-right: 10px;
    font-size: 15px;
}
    </style>
@endpush
@section('title','Post Create')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 bg-light mt-3 br-5 rounded p-4">
                <form action="{{ route('posts') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="textarea">Create a new post</label>
                        <textarea class="form-control @error('body') border-danger @enderror" name="body" id="textarea" rows="3" placeholder="Write Something!"></textarea>
                        @error('body')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                      <button type="submit" class="btn btn-primary">Post</button>
                </form>

                @if($posts->count())
                    @foreach ($posts as $post)
                        <div class="post mt-3">
                            <p class="mb-0"><b>{{ $post->user->name }}</b> <span><i>{{ $post->created_at->diffForHumans() }}</i></span></p>
                            <p class="mb-0">{{ $post->body }}</p>
                            <div class="d-flex">
                                {{-- @if (!$post->likedBy(auth()->user()))
                                    <form action="{{ route('posts.store', $post) }}" method="post">
                                        @csrf
                                        <button class="like_btn" type="submit">Like</button>
                                    </form>
                                @else    
                                    <form action="{{ route('posts.store', $post) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button class="like_btn" type="submit">Unlike</button>
                                    </form>
                                @endif --}}
                                
                                {{-- <p>{{ $post->likes->count() }} {{ \Str::plural('Like', $post->likes->count()) }}</p> --}}
                            </div>
                            
                        </div>
                    @endforeach
                @else
                    No Post Found!
                @endif

                <div class="d-flex justify-content-end">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection