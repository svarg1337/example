<x-layout.main title="Редактировать тег # {{$tag->id}}">
    <br>
    <br>
    Название: {{ $tag->title }}
    <br>
    ID: {{ $tag->id }}
    <br>
    <hr>
    {{ var_dump($errors->any()) }}
    <br>
    <x-form method="PUT" action="{{route('tags.update', [$tag->id])}}">
        @bind($tag)
        <x-form-input name="title" label="Название бренда" />
        @endbind
        <button class="btn btn-success">Отправить</button>
    </x-form>
    <hr>
    <x-form method="DELETE" action="{{route('tags.destroy', [$tag->id])}}">
    <button class="btn btn-danger">Удалить</button>
    </x-form>
</x-layout.main>