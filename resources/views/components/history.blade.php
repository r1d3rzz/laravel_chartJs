@props(['data'])

<!-- History  -->
<div class="col-md-6 mb-1">
    <ul class="list-group">
        @foreach ($data as $d)
        <li class="list-group-item d-flex justify-content-between">
            <div>
                <div class="font-weight-bold">
                    {{$d->about}}
                </div>
                <div>{{$d->date}}</div>
            </div>
            @if ($d->type == 'in')
            <div class="text-success"> +{{$d->amount}}ks</div>
            @else
            <div class="text-danger"> -{{$d->amount}}ks</div>
            @endif
        </li>
        @endforeach

        {{$data->links()}}
    </ul>
</div>