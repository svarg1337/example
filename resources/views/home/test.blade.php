<br>

@foreach ($data as $item)
 ----{{ $item['id'] }}-----
 <br>
 {{ $item['title'] }}
 <br>
 {{ $item['price'] }}
 <br>
 ==========================
 <br>
 @endforeach