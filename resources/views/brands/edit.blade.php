<x-layout.main title="Редактировать товар # {{$brand->id}}">
    <br>
    <br>
    Название: {{ $brand->title }}
    <br>
    ID: {{ $brand->id }}
    <br>
    <hr>
    {{ var_dump($errors->any()) }}
    <br>
    <x-form method="PUT" action="{{route('brands.update', [$brand->id])}}">
        @bind($brand)
        <x-form-input name="title" label="Название бренда" />
        @endbind
        <button class="btn btn-success">Отправить</button>
    </x-form>
    <hr>
    <x-form method="DELETE" action="{{route('brands.destroy', [$brand->id])}}">
    <button class="btn btn-danger">Удалить</button>
    </x-form>
</x-layout.main>