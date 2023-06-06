@props(["total_income","total_outcome","day_arr","income_amount","outcome_amount"])

<div class="col-md-6">
    <div class="card card-body">
        <!-- Status Bar  -->
        <div class="d-flex justify-content-between align-items-center">
            <div class="font-weight-600">
                <h4>Chart Today</h4>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById("myChart");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: @json($day_arr),
                    datasets: [
                        {
                            label: "ဝင်ငွေ",
                            data: @json($income_amount),
                            borderWidth: 1,
                            backgroundColor: "#26AF74",
                        },
                        {
                            label: "ထွက်ငွေ",
                            data: @json($outcome_amount),
                            borderWidth: 1,
                            backgroundColor: "#F5365C",
                        },
                    ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
</script>