@props(['cardTitle'=>'', 'cardTools'=>'', 'cardFooter'=>''])
<div class="card" style="width: 18rem;">
    <div class="card-header">
      <h3 class="card-title">{{ $cardTitle }}</h3>
      <p class="card-tools">{{ $cardTools }}</p>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
    <div class="footer">
        {{ $cardFooter }}
    </div>
  </div>