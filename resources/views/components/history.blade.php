@props(['data'])

<!-- History  -->
<div class="col-md-6 mb-1">
    <!-- Filter With Date  -->
    <div class="form-group">
        <form class="input-group mb-3">
            <div class="input-group-prepend">
                <a href="/" class="input-group-text bg-primary text-white" style="cursor: pointer">All</a>
            </div>
            <input type="date" class="form-control" value="{{request('date')}}" name="date"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-sm btn-primary" type="submit" id="button-addon2">
                    <i class="uil uil-filter" style="font-size: 18px;"></i>
                </button>
            </div>
        </form>
    </div>

    <ul class="list-group">
        @forelse ($data as $d)
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
        @empty
        <div class="alert alert-danger text-center">{{request("date")}} ရက်နေ့တွင် ဝင်ငွေ ထွက်ငွေ မရှိပါ။</div>
        @endforelse

        {{$data->links()}}
    </ul>
</div>