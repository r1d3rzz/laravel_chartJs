<x-layout>
    <x-actionNav />

    <x-showContent :data="$data" :total_outcome="$total_outcome" :total_income="$total_income" :day_arr="$day_arr"
        :income_amount="$income_amount" :outcome_amount="$outcome_amount" />
</x-layout>