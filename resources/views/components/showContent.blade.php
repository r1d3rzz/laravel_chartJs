@props(['data',"total_income","total_outcome"])

<div class="row">
    <div class="col-md">
        <div class="card card-body bg-light">
            <div class="row">
                <x-history :data="$data" />

                <x-chartDiagram :total_outcome="$total_outcome" :total_income="$total_income" />

            </div>
        </div>
    </div>
</div>