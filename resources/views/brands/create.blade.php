<x-layout.main title="Создать бренд">
    <x-form action="{{route('brands.store')}}">
    <x-form-input name="title" label="Название бренда" />
        <div class="mb-3">
            <button class="btn btn-success">Отправить</button>
        </div>
    </x-form>
</x-layout.main>

