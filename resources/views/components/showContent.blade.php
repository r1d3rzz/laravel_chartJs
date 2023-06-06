@props(['data',"total_income","total_outcome","day_arr","income_amount","outcome_amount"])

<div class="row">
    <div class="col-md">
        <div class="card card-body bg-light">
            <div class="row">
                <x-history :data="$data" />

                <x-chartDiagram :total_outcome="$total_outcome" :total_income="$total_income" :day_arr="$day_arr"
                    :income_amount="$income_amount" :outcome_amount="$outcome_amount" />

            </div>
        </div>
    </div>
</div>