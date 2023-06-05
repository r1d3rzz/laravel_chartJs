<!-- Action Nav  -->
<div class="row my-3">
    <div class="col-md">
        <div class="card card-body p-2">
            @if (session('success'))
            <div class="alert alert-success font-weight-bold text-center">
                {{session('success')}}
            </div>
            @endif

            <form action="" method="POST">
                @csrf

                <input type="text" name="about" value="{{old('about')}}" placeholder="အကြောင်းအရာ"
                    class="btn btn-dark" />

                <input type="number" name="amount" value="{{old('amount')}}" placeholder="Amount"
                    class="btn btn-dark" />

                <input type="date" name="date" class="btn btn-dark" value="{{date('Y-m-d')}}" />

                <select name="type" class="btn btn-dark">
                    <option value="in">ဝင်ငွေ</option>
                    <option value="out">ထွက်ငွေ</option>
                </select>

                <button type="submit" class="btn btn-success">
                    စာရင်းသွင်းမယ်
                </button>
            </form>


            @if ($errors->count())
            <ul class="mt-2 text-danger">
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif

        </div>
    </div>
</div>