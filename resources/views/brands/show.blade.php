<x-layout.main title="Бренд # {{$brand->id}}">
    <x-alert.status />

<br>
 Название: {{ $brand->title }}
 <br>
ID: {{ $brand->id }}
 <br>

 @foreach($brand->cars as $car)
 -- Car: {{$car->model}}
 <br>
@endforeach
<br>
 <a href="{{ route('brands.index') }}">
 На главную
</a>
</x-layout.main>