@extends('layout')

@section('content')
    <div class="container mt-4">
        <form
          style="display: inline-block;"
          method="POST"
          action="{{ route('posts.destroy', ['post' => $post]) }}"
          >
          @csrf
          @method('DELETE')
          <button class="btn btn-danger">削除する</button>
        </form>
        <div class="mb-4 text-right">
            <a class="btn btn-primary" href="{{ route('posts.edit', ['post' => $post]) }}">
                編集する
            </a>
        </div>

        <div class="border p-4">
            <h1 class="h5 mb-4">
                {{ $post->title }}
            </h1>
            <p class="mb-5">
                {!! nl2br(e($post->body)) !!}
            </p>

            <section>
                <h2 class="h5 mb-4">
                    コメント
                </h2>


                <form class="mb-4" action="{{route('comments.store' )}}">
                    @csrf

                    <input 
                      type="hidden"
                      name="post_id"
                      value="{{$post->id}}"
                    >

                    <div class="form-group">
                        <label for="body">
                            本文
                        </label>

                        <textarea 
                          name="body" 
                          id="body" 
                          rows="4"
                          class="form-control {{$errors->has('body')? 'is-invalid':''}}"
                          >{{old('body')}}</textarea>
                          @if($errors->has('body'))
                          <div class="invalid-feedback">
                              {{$errors->first('body')}}
                          </div>
                          @endif
                        </div>

                        <div class="mt-4">
                            <button type="submit" clasS="btn btn-primary">
                                コメントする
                            </button>
                        </div>
                    </form>

                @forelse($post->comments as $comment)
                    <div class="border-top p-4">
                        <time class="text-secondary">
                            {{ $comment->created_at->format('Y.m.d H:i') }}
                        </time>
                        <p class="mt-2">
                            {!! nl2br(e($comment->body)) !!}
                        </p>
                    </div>
                @empty
                    <p>コメントはまだありません。</p>
                @endforelse
            </section>
        </div>
    </div>
@endsection



