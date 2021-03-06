@extends('layouts.default', ['meta' => $meta, 'welcome' => $welcome])

@section('content')

<div class="row mt-4">
    <div class="col-12">
        <h4>Total expenses to date</h4>

        <p>Total expenses for each child to date, select a child to see further detail.</p>
    </div>
</div>
<div class="row">
    @include(
        'component-container.cost-summary-block',
        [
            'icon' => 'expenses.png',
            'uri' => '/jack#categories',
            'heading' => $jack_total['name'],
            'subheading' => 'Summary of all expenses since ' . $jack_total['dob'],
            'description' => null,
            'value' => $jack_total['total'],
            'active' => false
        ]
    )
    @include(
        'component-container.cost-summary-block',
        [
            'icon' => 'expenses.png',
            'uri' => '/niall#categories',
            'heading' => $niall_total['name'],
            'subheading' => 'Summary of all expenses since ' . $niall_total['dob'],
            'description' => null,
            'value' => $niall_total['total'],
            'active' => false
        ]
    )
    @include(
        'component-container.cost-summary-block',
        [
            'icon' => 'expenses.png',
            'uri' => null,
            'heading' => 'The Blackboroughs',
            'subheading' => 'Summary of all expenses',
            'description' => null,
            'value' => $jack_total['total'] + $niall_total['total'],
            'active' => false
        ]
    )
    <hr />
</div>
@if ($jack_current_year !== null && $niall_current_year !== null)
<div class="row mt-4">
    <div class="col-12">
        <h4>Expenses for current year ({{ date('Y') }})</h4>

        <p>Sum of expenses for the current year, select to see the total for each year.</p>
    </div>
</div>
<div class="row">
    @include(
        'component-container.cost-summary-block',
        [
            'icon' => 'expenses.png',
            'uri' => '/jack/expenses/year/' . date('Y') . '#years',
            'heading' => 'Jack Blackborough',
            'subheading' => 'Summary of expenses in ' . date('Y'),
            'description' => null,
            'value' => ($jack_current_year !== null ? $jack_current_year : 0.00),
            'active' => false
        ]
    )
    @include(
        'component-container.cost-summary-block',
        [
            'icon' => 'expenses.png',
            'uri' => '/niall/expenses/year/' . date('Y') . '#years',
            'heading' => 'Niall Blackborough',
            'subheading' => 'Summary of expenses in ' . date('Y'),
            'description' => null,
            'value' => ($niall_current_year !== null ? $niall_current_year : 0.00),
            'active' => false
        ]
    )
    @include(
        'component-container.cost-summary-block',
        [
            'icon' => 'expenses.png',
            'uri' => null,
            'heading' => 'The Blackboroughs',
            'subheading' => 'Summary of expenses in ' . date('Y'),
            'description' => null,
            'value' => ($jack_current_year !== null ? $jack_current_year : 0.00) + ($niall_current_year !== null ? $niall_current_year : 0.00),
            'active' => false
        ]
    )
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
        <h4>The 25 most recent expenses for both children</h4>

        <p>The table below lists the last 25 expenses we have logged for both children, to see more,
            select a child, any summary count or a category or subcategory.</p>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="p-3 shadow-sm white-container">
            <table class="table table-borderless table-hover">
                <caption>25 most recent expenses</caption>
                <thead>
                    <tr>
                        <th scope="col">Child</th>
                        <th scope="col">Expense</th>
                        <th scope="col">Date</th>
                        <th scope="col" class="d-none d-md-table-cell">Categories</th>
                        <th scope="col" class="d-none d-xl-table-cell">Total</th>
                        <th scope="col" class="d-none d-xl-table-cell">Allocation</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recent_expenses as $expense)
                    <tr class="top">
                        <td><a href="/{{ strtolower($expense['resource']['name']) }}">{{ $expense['resource']['name'] }}</a></td>
                        <td>{{ $expense['name'] }}</td>
                        <td><span class="d-none d-md-block">{{ date('j M Y', strtotime($expense['effective_date'])) }}</span><span class="d-table-cell d-sm-block d-md-none">{{ date('d/m/Y', strtotime($expense['effective_date'])) }}</span></td>
                        <td class="d-none d-md-table-cell">

                            @foreach ($expense['categories'] as $category)
                                <span class="category">
                                    <a href="{{ strtolower($expense['resource']['name']) . '/expenses?category=' . $category['category_id'] }}">{{ $category['name'] }}</a>
                                </span>

                                @foreach ($category['subcategories'] as $subcategory)
                                    <span class="subcategory">
                                        / <a href="{{ strtolower($expense['resource']['name']) . '/expenses?category=' . $category['category_id'] . '&subcategory=' . $subcategory['subcategory_id']}}">{{ $subcategory['name'] }}</a>
                                    </span>
                                @endforeach
                            @endforeach
                        </td>
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
