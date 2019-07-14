@extends('layouts.default', ['meta' => $meta, 'welcome' => $welcome])

@section('content')

@include(
    'page-component.child-details',
    [
        'child_details' => $child_details,
        'total' => $total,
        'total_number_of_expenses' => $total_number_of_expenses,
        '$largest_essential_expense' => '$largest_essential_expense',
        '$largest_non_essential_expense' => '$largest_non_essential_expense',
        '$largest_hobby_interest_expense' => '$largest_hobby_interest_expense'
    ]
)

@if ($categories_summary !== null)
<div class="row mt-4">
    <div class="col-12">
        <h4>Total expenses by category</h4>

        <p>We group expenses into three core categories, these are the totals for each category,
            select a category for more detail.</p>
    </div>
</div>
<div class="row">
    @foreach ($categories_summary as $category)
        @include(
            'component-container.cost-summary-block',
            [
                'icon' => 'expenses.png',
                'uri' => $active . '/expenses/category/' . $category['id'],
                'heading' => $category['name'],
                'subheading' => $category['description'],
                'description' => null,
                'value' => $category['total'],
                'active' => false
            ]
        )
    @endforeach
</div>
<div class="row">
    <div class="col-12">
        <hr />
    </div>
</div>
@endif
@if ($annual_summary !== null)
<div class="row mt-4">
    <div class="col-12">
        <h4>Expenses for the last three years</h4>

        <p>Total expenses for the last three years, select a year for additional detail including
            the ability to view all years.</p>
    </div>
</div>
<div class="row">
    @foreach ($annual_summary as $year)
        @include(
            'component-container.cost-summary-block',
            [
                'icon' => 'expenses.png',
                'uri' => $active . '/expenses/year/' . $year['year'],
                'heading' => $year['year'],
                'subheading' => 'Summary of all expenses for ' . $child_details['short_name'] . ' in ' . $year['year'],
                'description' => null,
                'value' => $year['total'],
                'active' => false
            ]
        )
    @endforeach
</div>
<div class="row">
    <div class="col-12">
        <hr />
    </div>
</div>
@endif
@if ($recent_expenses !== null)
<div class="row mt-4">
    <div class="col-12">
        <h4>The 25 most recent expenses for {{ $child_details['short_name'] }} <small> - <a href="{{ $child_details['uri'] . '/expenses' }}">(View all)</a></small></h4>

        <p>The table below lists the last 25 expenses we have logged for {{ $child_details['short_name'] }}, to see more select any
            summary count, category or subcategory.</p>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="p-3 shadow-sm white-container">
            <table class="table table-borderless table-hover">
                <caption>25 most recent expenses</caption>
                <thead>
                    <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col" class="d-none d-md-table-cell">Category</th>
                        <th scope="col" class="d-none d-md-table-cell">Subcategory</th>
                        <th scope="col" class="d-none d-xl-table-cell">Total</th>
                        <th scope="col" class="d-none d-xl-table-cell">Allocation</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recent_expenses as $expense)
                    <tr class="top">
                        <td>{{ $expense['description'] }}</td>
                        <td><span class="d-none d-md-block">{{ date('j M Y', strtotime($expense['effective_date'])) }}</span><span class="d-table-cell d-sm-block d-md-none">{{ date('d/m/Y', strtotime($expense['effective_date'])) }}</span></td>
                        <td class="d-none d-md-table-cell"><span class="category"><a href="{{ $child_details['uri'] . '/expenses?category=' . $expense['category']['id'] }}">{{ $expense['category']['name'] }}</a></span></td>
                        <td class="d-none d-md-table-cell"><span class="category"><a href="{{ $child_details['uri'] . '/expenses?category=' . $expense['category']['id'] . '&subcategory=' . $expense['subcategory']['id'] }}">{{ $expense['subcategory']['name'] }}</a></span></td>
                        <td class="d-none d-xl-table-cell">£{{ $expense['total'] }}</td>
                        <td class="d-none d-xl-table-cell">{{ $expense['percentage'] }}%</td>
                        <td><strong>&pound;{{ $expense['actualised_total'] }}</strong></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif

@include(
    'page-component.api-requests',
    [
        'api_requests' => $api_requests
    ]
)

@endsection
