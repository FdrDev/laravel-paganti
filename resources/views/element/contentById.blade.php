<div class="main">

  <div class="container">


    <ul>

      @foreach ($pagante as $infoPagante)
      <li>{{ $infoPagante -> id }} - {{ $infoPagante -> name }} - {{ $infoPagante -> lastname }}</li>

      @endforeach

    </ul>

  </div>
</div>
