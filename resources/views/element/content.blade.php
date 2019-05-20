<div class="main">

<ul>
  @foreach ($paganti as $infoPaganti)
  <li>{{ $infoPaganti -> id }} - {{ $infoPaganti -> name }} - {{ $infoPaganti -> lastname }}</li>

  @endforeach
</ul>

</div>
