<x-layout.main title="Статья # {{$article->id}}">
    <x-alert.status />

<br>
<h4>{{ $article->title }}</h4>
 <br>
ID: {{ $article->id }}
 <br>
 {{ $article->body }}
<hr>

Комментарии: {{$article->comments->count()}}
<br>
@foreach($article->comments as $comment)
=============
<br>
#{{ $comment->id }}
<br>
{{ $comment->body }}
<br>
@endforeach
<br>
<x-form action="{{route('comments.store')}}">
    <x-form-textarea name="body" label="Добавить комментарий" placeholder="Комментарий" />
    <input type="hidden" name="commentable_type" value="{{ $article::class }}" />
    <input type="hidden" name="commentable_id" value="{{ $article->id }}" />
        <div class="mb-3">
            <button class="btn btn-success">Отправить</button>
        </div>
    </x-form>

<br>

 <a href="{{ route('articles.index') }}">
 На главную
</a>
</x-layout.main>