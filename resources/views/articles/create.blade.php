<x-layout.main title="Создать статью">
    <x-form action="{{route('articles.store')}}">
    <x-form-input name="title" label="Название статьи" />
    <x-form-textarea name="body" label="Текст статьи" placeholder="Текст статьи" />
        <div class="mb-3">
            <button class="btn btn-success">Отправить</button>
        </div>
    </x-form>
</x-layout.main>

