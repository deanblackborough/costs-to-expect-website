<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('images/theme/favicon.ico') }}">
        <link rel="icon" sizes="16x16 32x32 64x64" href="{{ asset('images/theme/favicon.ico') }}">
        <link rel="icon" type="image/png" sizes="196x196" href="{{ asset('images/theme/favicon-192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/theme/favicon-180.png') }}">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="{{ asset('images/theme/favicon-144.png') }}">
        <title>Dashboard: Costs to Expect</title>
    </head>
    <body>
        <div class="container-fluid container-cte">
            <div class="row container-row">
                <div class="col-xl-2 col-lg-3 col-md-3 container-column container-left d-none d-sm-none d-md-block">
                    <div class="logo">
                        <img src="{{ asset('images/theme/logo-128.png') }}" width="64" height="64" alt="Logo" title="Costs to Expect" />
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="nav-title">The Blackborough Children</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Jack</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled menu item</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-10 col-lg-9 col-md-9 col-sm-12 col-12 container-column container-right d-block">
                    <div class="row">
                        <div class="col-12">
                            <div class="screen-intro">
                                <div class="icon">
                                    <img src="{{ asset('images/theme/dashboard.png') }}" width="32" height="32" alt="Screen icon" title="Dashboard" />
                                </div>
                                <div class="welcome">
                                    <small class="text-muted">Welcome to Costs to Expect.com</small>
                                </div>
                                <div class="title">
                                    <h2>The Dashboard</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <h4>Total expenses to date</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 1rem;">
                            <div class="media summary-block shadow-sm h-100">
                                <img src="{{ asset('images/theme/expenses.png') }}" class="mr-2" width="48" height="48" alt="icon">
                                <div class="media-body">
                                    <h4 class="mt-0">Jack Blackborough</h4>
                                    <h6 class="mt-0">Total expenses <small class="text-muted">From birth 28th June 2013</small></h6>
                                    <p class="total mb-0">&pound;39,951.29</p>
                                    <p class="mt-1 mb-0 small text-muted" style="overflow-wrap: break-word; word-break: break-all; word-wrap: break-word">API Request:<br /><a href="https://api.costs-to-expect.com/v1/summary/resource-types/d185Q15grY/resources/kw8gLq31VB/items">/v1/summary/resource-types/d185Q15grY/resources/kw8gLq31VB/items</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 1rem;">
                            <div class="media summary-block shadow-sm h-100">
                                <img src="{{ asset('images/theme/expenses.png') }}" class="mr-2" width="48" height="48" alt="icon">
                                <div class="media-body">
                                    <h4 class="mt-0">Pending Blackborough</h4>
                                    <h6 class="mt-0">Total expenses <small class="text-muted">From birth xx April 2019</small></h6>
                                    <p class="total mb-0">&pound;484.42</p>
                                    <p class="mt-1 mb-0 small text-muted" style="overflow-wrap: break-word; word-break: break-all; word-wrap: break-word">API Request:<br /><a href="https://api.costs-to-expect.com/v1/summary/resource-types/d185Q15grY/resources/kw8gLq31VB/items">/v1/summary/resource-types/d185Q15grY/resources/kw8gLq31VB/items</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 1rem;">
                            <div class="media summary-block shadow-sm h-100">
                                <img src="{{ asset('images/theme/expenses.png') }}" class="mr-2" width="48" height="48" alt="icon">
                                <div class="media-body">
                                    <h4 class="mt-0">Blackborough Children</h4>
                                    <h6 class="mt-0">Total expenses <small class="text-muted">Both children</small></h6>
                                    <p class="total mb-0">&pound;40,435.71</p>
                                    <p class="mt-1 mb-0 small text-muted" style="overflow-wrap: break-word; word-break: break-all; word-wrap: break-word">API Request:<br /><a href="https://api.costs-to-expect.com/v1/summary/resource-types/d185Q15grY/items">/v1/summary/resource-types/d185Q15grY/items</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <h4>Expenses for current year (2019)</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 1rem;">
                            <div class="media summary-block shadow-sm h-100">
                                <img src="{{ asset('images/theme/expenses.png') }}" class="mr-2" width="48" height="48" alt="icon">
                                <div class="media-body">
                                    <h4 class="mt-0">Jack Blackborough</h4>
                                    <h6 class="mt-0">2019 <small class="text-muted">Expenses in 2019</small></h6>
                                    <p class="total mb-0">&pound;1,121.19</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 1rem;">
                            <div class="media summary-block shadow-sm h-100">
                                <img src="{{ asset('images/theme/expenses.png') }}" class="mr-2" width="48" height="48" alt="icon">
                                <div class="media-body">
                                    <h4 class="mt-0">Pending Blackborough</h4>
                                    <h6 class="mt-0">2019 <small class="text-muted">Expenses in 2019</small></h6>
                                    <p class="total mb-0">&pound;484.42</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 1rem;">
                            <div class="media summary-block shadow-sm h-100">
                                <img src="{{ asset('images/theme/expenses.png') }}" class="mr-2" width="48" height="48" alt="icon">
                                <div class="media-body">
                                    <h4 class="mt-0">Blackborough Children</h4>
                                    <h6 class="mt-0">2019 <small class="text-muted">Total expenses in 2019</small></h6>
                                    <p class="total mb-0">&pound;1,605.61</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <h4>The 50 most recent expenses for both children</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-3 shadow-sm table-white-container">
                                <table class="table table-borderless table-hover">
                                    <caption>API Request: <a href="https://api.costs-to-expect.com/v1/resource-types/d185Q15grY/items">/v1/resource-types/d185Q15grY/items</a></caption>
                                    <thead>
                                    <tr>
                                        <th scope="col">Child</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Date</th>
                                        <th scope="col" class="d-none d-md-table-cell">Category</th>
                                        <th scope="col" class="d-none d-md-table-cell">Subcategory</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="top">
                                        <td>Jack</td>
                                        <td>Easter egg</td>
                                        <td><span class="d-none d-md-block">9th April 2019</span><span class="d-table-cell d-sm-block d-md-none">9/04/2019</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Non-Essential</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Clothes, Food, Medicine etc.</span></td>
                                        <td><strong>&pound;7.00</strong></td>
                                    </tr>
                                    <tr class="top">
                                        <td>Jack</td>
                                        <td>Share of shopping</td>
                                        <td><span class="d-none d-md-block">12th April 2019</span><span class="d-table-cell d-sm-block d-md-none">12/04/2019</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Essential</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Clothes, Food, Medicine etc.</span></td>
                                        <td><strong>&pound;42.52</strong></td>
                                    </tr>
                                    <tr class="top">
                                        <td>Jack</td>
                                        <td>Share of pizza</td>
                                        <td><span class="d-none d-md-block">12th April 2019</span><span class="d-table-cell d-sm-block d-md-none">12/04/2019</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Essential</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Clothes, Food, Medicine etc.</span></td>
                                        <td><strong>&pound;7.00</strong></td>
                                    </tr>
                                    <tr class="top">
                                        <td>Pending</td>
                                        <td>Mattress for Moses basket</td>
                                        <td><span class="d-none d-md-block">5th April 2019</span><span class="d-table-cell d-sm-block d-md-none">5/04/2019</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Essential</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Furniture</span></td>
                                        <td><strong>&pound;12.38</strong></td>
                                    </tr>
                                    <tr class="top">
                                        <td>...</td>
                                        <td>...</td>
                                        <td><span class="d-none d-md-block">...</span><span class="d-table-cell d-sm-block d-md-none">5/04/2019</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">...</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">...</span></td>
                                        <td><strong>...</strong></td>
                                    </tr>
                                    <tr class="top">
                                        <td>Jack</td>
                                        <td>Easter egg</td>
                                        <td><span class="d-none d-md-block">9th April 2019</span><span class="d-table-cell d-sm-block d-md-none">9/04/2019</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Non-Essential</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Clothes, Food, Medicine etc.</span></td>
                                        <td><strong>&pound;7.00</strong></td>
                                    </tr>
                                    <tr class="top">
                                        <td>Jack</td>
                                        <td>Share of shopping</td>
                                        <td><span class="d-none d-md-block">12th April 2019</span><span class="d-table-cell d-sm-block d-md-none">12/04/2019</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Essential</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Clothes, Food, Medicine etc.</span></td>
                                        <td><strong>&pound;42.52</strong></td>
                                    </tr>
                                    <tr class="top">
                                        <td>Jack</td>
                                        <td>Share of pizza</td>
                                        <td><span class="d-none d-md-block">12th April 2019</span><span class="d-table-cell d-sm-block d-md-none">12/04/2019</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Essential</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Clothes, Food, Medicine etc.</span></td>
                                        <td><strong>&pound;7.00</strong></td>
                                    </tr>
                                    <tr class="top">
                                        <td>Pending</td>
                                        <td>Mattress for Moses basket</td>
                                        <td><span class="d-none d-md-block">5th April 2019</span><span class="d-table-cell d-sm-block d-md-none">5/04/2019</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Essential</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">Furniture</span></td>
                                        <td><strong>&pound;12.38</strong></td>
                                    </tr>
                                    <tr class="top">
                                        <td>...</td>
                                        <td>...</td>
                                        <td><span class="d-none d-md-block">...</span><span class="d-table-cell d-sm-block d-md-none">5/04/2019</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">...</span></td>
                                        <td class="d-none d-md-table-cell"><span class="category">...</span></td>
                                        <td><strong>...</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('node_modules/jquery/dist/jquery.js') }}" defer></script>
        <script src="{{ asset('node_modules/popper.js/dist/umd/popper.js') }}" defer></script>
        <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.js') }}" defer></script>
    </body>
</html>
