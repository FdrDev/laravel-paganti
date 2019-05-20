<div class="main">

  <div class="container">


    <ul>
      @foreach ($paganti as $infoPaganti)
      <li>{{ $infoPaganti -> id }} - {{ $infoPaganti -> name }} - {{ $infoPaganti -> lastname }}</li>

      @endforeach

    </ul>

  </div>
</div>
