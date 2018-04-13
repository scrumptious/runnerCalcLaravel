<span>
@if($hours<10)
0{{$hours}}:@else{{$hours}}:@endif
@if($minutes<10)
0{{$minutes}}:@else{{$minutes}}:@endif
@if($seconds<10)
0{{$seconds}}@else{{$seconds}}@endif
</span>