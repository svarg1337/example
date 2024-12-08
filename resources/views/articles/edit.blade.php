<x-layout.main title="Редактировать статью # {{$article->id}}">
    <br>
    <br>
    Название: {{ $article->title }}
    <br>
    ID: {{ $article->id }}
    <br>
    <hr>
    {{ var_dump($errors->any()) }}
    <br>
    <x-form method="PUT" action="{{route('articles.update', [$article->id])}}">
        @bind($article)
        <x-form-input name="title" label="Название статьи" />
        <x-form-textarea name="body" label="Текст статьи" placeholder="Текст статьи" />
        @endbind
        <button class="btn btn-success">Отправить</button>
    </x-form>
    <hr>
    <x-form method="DELETE" action="{{route('articles.destroy', [$article->id])}}">
    <button class="btn btn-danger">Удалить</button>
    </x-form>
</x-layout.main>