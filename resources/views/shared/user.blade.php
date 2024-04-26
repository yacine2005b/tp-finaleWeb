
<div>
    @if (Auth::user()->role == 'parent')
    <h4 style="color: green;text-transform :uppercase">{{Auth::user()->role}} <b style="color: black;text-transform:initial">{{Auth::user()->name}}</b></h4>
    @else
    <h4 style="color: red;text-transform :uppercase">{{Auth::user()->role}} <b style="color: black;text-transform:initial">{{Auth::user()->name}}</b></h4>
    @endif
</div>



<style>

h4,b{
    white-space: nowrap;
}


</style>
