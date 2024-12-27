<x-layout.main title="Товар # {{$car->id}}">
    <x-alert.status />



    <br>
    Марка: {{ $car->brand->title }}
    <br>
    Модель: {{ $car->model }}
    <br>
    Цена: {{ $car->price }}₽
    <br>
    Теги:
    @foreach($car->tags as $tag)
    <span class="badge text-bg-warning">
        <a href="{{ route('tags.show', [$tag->id]) }}">
            {{ $tag->title }}
        </a>
    </span>
    @endforeach
    <br>
    <hr>
    Комментарии: {{$car->comments->count()}}
    <br>
    @foreach($car->comments as $comment)
    =============
    <br>
    #{{ $comment->id }}
    <br>
    {{ $comment->body }}
    <br>

    <br>
    @endforeach
    <br>
    <x-form action="{{route('comments.store')}}">
        <x-form-textarea name="body" label="Добавить комментарий" placeholder="Комментарий" />
        <input type="hidden" name="commentable_type" value="{{ $car::class }}" />
        <input type="hidden" name="commentable_id" value="{{ $car->id }}" />
        <div class="mb-3">
            <button class="btn btn-success">Отправить</button>
        </div>
    </x-form>

    <x-form action="{{route('comments.store2', [class_basename($car::class), $car->id])}}">
        <x-form-textarea name="body" label="Добавить комментарий Способ через родительскую модель" placeholder="Комментарий" />

        <div class="mb-3">
            <button class="btn btn-success">Отправить</button>
        </div>
    </x-form>

    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br>
    <a href="{{ route('cars.index') }}">
        На главную
    </a>
</x-layout.main>