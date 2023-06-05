@props(["total_income","total_outcome"])

<div class="col-md-6">
    <div class="card card-body">
        <!-- Status Bar  -->
        <div class="d-flex justify-content-between align-items-center">
            <div class="font-weight-600">
                <h4>Chart</h4>
            </div>

            <div class="font-weight-bold">
                <span class="text-success mr-2">
                    ဝင်ငွေ : +{{$total_income}}ks
                </span>
                <span class="text-danger">
                    ထွက်ငွေ : -{{$total_outcome}}ks
                </span>
            </div>
        </div>

        <hr class="p-0 my-2 border" />

        <!-- Diagram  -->
        <div class="mt-2">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>