<x-layout.main title="Бренды">
<x-alert.status />


<h2>Найдено: {{ $brands->count() }} штук</h2>
<br>
<br>
<h4><a href="{{route('brands.create')}}">+++Добавить новый+++</a></h4>
<br>
<div class="row">
@foreach ($brands as $brand)
<div class="col m-3">
 
 <br>
<a href="{{route('brands.show', [$brand->id])}}">
 #{{ $brand->id }} 
</a>
 <br>
 Название бренда: {{ $brand->title }}
 <br>
 
 <a href="{{route('brands.edit',  [$brand->id])}}"> Редактировать </a>
 <br>
 </div>
 @endforeach
 </div>

 

</x-layout.main>