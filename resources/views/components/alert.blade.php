<div style="height: 10%; width: 100%; color: @if($type === 'error') red @elseif($type === 'success') green @else grey @endif">
    {{ $message }}
</div>
