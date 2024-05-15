@extends('user.master')
@section('content')
    <style>
        /* CSS styles */
        .widget-container {
            z-index: 2;
            display: block;
            width: 650px;
            height: auto;
        }

        .widget-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f0f0f0;
        }

        .widget-label {
            display: flex;
            align-items: center;
        }

        .widget-label span {
            margin-left: 5px;
            font-weight: bold;
        }

        .widget-container .widget {
            padding: 10px;
            background-color: #ffffff;
            border: 1px solid #ccc;
        }

        .total-balance {
            margin-top: 10px;
        }

        .total-balance-list {
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .total-balance-card {
            width: calc(100% - 10px);
            margin-right: 10px;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            display: flex;
            align-items: center;
        }

        .color-indicator {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .price {
            margin-left: auto;
        }

        i {
            font-size: 25px
        }

        .line {
            width: 100%;
            height: 2px;
            background-color: #111c43;
            border-radius: 5px;
        }

        .btn_upgrade {
            border: 1px solid #608ED7;
            color: #608ED7;
            border-radius: 10px;
            padding: 10px 25px;
        }

        .level_details {
            text-decoration: none;
            color: #708494 !important;
            font-size: 16px;
            font-weight: 500;
            padding: 7px 20px;
            transition: .3s;
        }

        .level_details:hover {
            background-color: #0A2235;
            color: #fff !important;
        }
        .iconnames{
            width: calc(25% - 20px);
        }
        @media screen and (max-width:991px) {
            .iconnames{
            width: calc(50% - 20px);
        }
        }
        @media screen and (max-width:768px) {
            .table_dash_over{
            overflow-x: auto;
        }
        .table_dash{
            width: max-content
        }
    }

        /* Add more styles as needed */
    </style>

    <div class="main-content app-content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            @if (auth()->user()->is_active == 2)
                <div class="callout callout-warning">
                    <h5>Warning !</h5>
                    <p>Your account is currently undergoing review.</p>
                </div>
            @endif
            @if (auth()->user()->is_banned == 2)
                <div class="callout callout-danger">
                    <h5>Alert !</h5>
                    <p>Your account is banned due to unusual activity please contact admin.</p>
                </div>
            @endif
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!-- <h1 class="m-0">Dashboard</h1> -->
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol> -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="main-header-banner d-flex align-items-center justify-content-end"
            style="background-image: url({{ asset('dashboard.jpeg') }}); height:200px; background-size: cover;">
            <a href="{{route('user.deposit')}}">
                <button type="button" class="btn bg-white me-5">
                    Deposit
                </button>
            </a>
        </div>
        <div class="row py-5">
            <div class="col-md-6 py-3 px-3">
                <div class="px-3 py-3" style="background-color: #fff;border-radius: 10px">
                    <h5 class="fs-bold"><i class="bi bi-wallet2 fs-6 pe-2"></i>Wallets Overview</h5>
                    <div class="p-4 d-flex align-items-center justify-content-between">
                        <p>Last Update 2024-05-02 08:44:03</p>
                        <p><i class="bi bi-arrow-clockwise fs-6"></i></p>
                    </div>
                    <div style="height: 340px;overflow-y:auto">
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div>
                                <h5>{{\App\Models\User::walletamount()}} USD</h5>
                                <p style="color: #6e6e6e" class="fs-6">Total Balance</p>
                            </div>
                        </div>
                         <!-- <div class="d-flex justify-content-between py-3 px-4 mt-3"
                            style="box-shadow: 0 0 15px rgba(0, 0, 0, .1);border-radius: 10px">
                            <div>
                                <p class="fs-6" style="margin-bottom: 0">BTC</p>
                                <p style="color: #6e6e6e;margin-bottom: 0" class="fs-6">Bitcoin</p>
                            </div>
                            <div>
                                <p class="fs-6" style="margin-bottom: 0">0 BTC</p>
                                <p style="color: #6e6e6e;margin-bottom: 0" class="fs-6">0 USD</p>
                            </div>
                        </div> -->
                        <!--<div class="d-flex justify-content-between py-3 px-4 mt-3"
                            style="box-shadow: 0 0 15px rgba(0, 0, 0, .1);border-radius: 10px">
                            <div>
                                <p class="fs-6" style="margin-bottom: 0">BTC</p>
                                <p style="color: #6e6e6e;margin-bottom: 0" class="fs-6">Bitcoin</p>
                            </div>
                            <div>
                                <p class="fs-6" style="margin-bottom: 0">0 BTC</p>
                                <p style="color: #6e6e6e;margin-bottom: 0" class="fs-6">0 USD</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between py-3 px-4 mt-3"
                            style="box-shadow: 0 0 15px rgba(0, 0, 0, .1);border-radius: 10px">
                            <div>
                                <p class="fs-6" style="margin-bottom: 0">BTC</p>
                                <p style="color: #6e6e6e;margin-bottom: 0" class="fs-6">Bitcoin</p>
                            </div>
                            <div>
                                <p class="fs-6" style="margin-bottom: 0">0 BTC</p>
                                <p style="color: #6e6e6e;margin-bottom: 0" class="fs-6">0 USD</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-3 px-3">
                <div class="px-3 py-3" style="background-color: #fff;border-radius: 10px">
                    <h5 class="fs-bold"><i class="bi bi-patch-check fs-6 pe-2"></i></i>Verification</h5>
                    <div class="d-flex align-items-center mt-3">
                        <div>
                            <h3 class="me-3" style="margin-bottom: 0">Level 0</h3>
                        </div>
                        <div class="d-flex align-items-center w-75">
                            <div class="line"></div>
                            <p class="txt fs-6 ms-2" style="margin-bottom: 0">0%</p>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <button class="btn btn_upgrade">Click To Upgrade </button>
                        <a href="#" class="level_details d-block ms-2" style="margin-bottom: 0">Level Details</a>
                    </div>
                    <div class="mt-5">
                        <h5 class="fs-bold"><i class="bi bi-star-fill fs-6 pe-2"></i></i>Quick Links</h5>
                        <div class="d-flex flex-wrap justify-content-center">
                            <a href="{{route('user.subscription')}}" class="d-flex justify-content-center py-3 iconnames" style="margin: 10px;box-shadow: 0 0 15px rgba(0, 0, 0, .1);">
                                <div>
                                    <div  class="d-flex justify-content-center align-items-center">
                                        <div class="d-flex justify-content-center align-items-center" style="width: 50px;height: 50px;border-radius: 50%;background-color: #111c43;color: #fff">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                    </div>
                                    <p class="fs-6 mt-2" style="margin-bottom: 0">Subscription</p>
                                </div>
                            </a>
                            <a href="{{route('user.deposit')}}" class="d-flex justify-content-center py-3 iconnames" style="margin: 10px;box-shadow: 0 0 15px rgba(0, 0, 0, .1);">
                                <div>
                                    <div  class="d-flex justify-content-center align-items-center">
                                        <div class="d-flex justify-content-center align-items-center" style="width: 50px;height: 50px;border-radius: 50%;background-color: #111c43;color: #fff">
                                            <i class="bi bi-piggy-bank-fill"></i>
                                        </div>
                                    </div>
                                    <p class="fs-6 mt-2" style="margin-bottom: 0">Deposit</p>
                                </div>
                            </a>
                            <a href="{{route('user.withdraw')}}" class="d-flex justify-content-center py-3 iconnames" style="margin: 10px;box-shadow: 0 0 15px rgba(0, 0, 0, .1);">
                                <div>
                                    <div  class="d-flex justify-content-center align-items-center">
                                        <div class="d-flex justify-content-center align-items-center" style="width: 50px;height: 50px;border-radius: 50%;background-color: #111c43;color: #fff">
                                            <i class="bi bi-wallet2"></i>
                                        </div>
                                    </div>
                                    <p class="fs-6 mt-2" style="margin-bottom: 0">Withdraw</p>
                                </div>
                            </a>
                            <a href="{{route('user.wallet-history')}}" class="d-flex justify-content-center py-3 iconnames" style="margin: 10px;box-shadow: 0 0 15px rgba(0, 0, 0, .1);">
                                <div>
                                    <div  class="d-flex justify-content-center align-items-center">
                                        <div class="d-flex justify-content-center align-items-center" style="width: 50px;height: 50px;border-radius: 50%;background-color: #111c43;color: #fff">
                                            <i class="bi bi-clock-history"></i>
                                        </div>
                                    </div>
                                    <p class="fs-6 mt-2" style="margin-bottom: 0">Wallet History</p>
                                </div>
                            </a>
                            <a href="{{route('user-profile')}}" class="d-flex justify-content-center py-3 iconnames" style="margin: 10px;box-shadow: 0 0 15px rgba(0, 0, 0, .1);">
                                <div>
                                    <div  class="d-flex justify-content-center align-items-center">
                                        <div class="d-flex justify-content-center align-items-center" style="width: 50px;height: 50px;border-radius: 50%;background-color: #111c43;color: #fff">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <p class="fs-6 mt-2" style="margin-bottom: 0">Profile</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: flex;justify-content: space-between;" class="px-4 d-none">
            <gridster-item class="widget-container">
                <app-gridster-widget-factory id="totalBalance">
                    <div class="widget-header">
                        <div class="widget-label">
                            <app-icon class="widget-header-icon">
                                <i class='bx bx-wallet-alt'></i>
                            </app-icon>
                            <span>Wallets Overview <span style="color:green">(Withdrawble
                                    amount:${{ auth()->user()->withdraw_amount }})</span></span>
                        </div>
                    </div>
                    <div class="widget">
                        <app-total-balance>
                            <div class="total-balance">
                                <div class="wrapper">
                                    <div class="control-panel"
                                        style="display: flex;justify-content: space-between;align-items: center;">
                                        <span>Last Update 2024-04-15 13:00:03</span>

                                        <span class="mat-button-wrapper">
                                            <i class='bx bx-refresh'></i>
                                        </span>

                                    </div>
                                    <app-base-chart class="chart"></app-base-chart>
                                </div>
                            </div>
                            <div class="total-balance-list">
                                {{-- <div class="total-balance-card">
                            <div class="color-indicator" style="background-color: rgb(36, 84, 255);"></div>
                            <dl>
                                <dt>BTC</dt>
                                <dd>Bitcoin</dd>
                            </dl>
                            <dl class="price">
                                <dt>0 BTC</dt>
                                <dd>0 USD</dd>
                            </dl>
                        </div>
                        <div class="total-balance-card">
                            <div class="color-indicator" style="background-color: rgb(8, 225, 4);"></div>
                            <dl>
                                <dt>ETH</dt>
                                <dd>Ethereum</dd>
                            </dl>
                            <dl class="price">
                                <dt>0 ETH</dt>
                                <dd>0 USD</dd>
                            </dl>
                        </div> --}}
                                <div class="total-balance-card">
                                    <div class="color-indicator" style="background-color: rgb(255, 122, 0);"></div>
                                    <dl>
                                        <dt>USDT</dt>
                                        <dd>Tether</dd>
                                    </dl>
                                    <dl class="price">
                                        <dt>0 USDT</dt>
                                        <dd>0 USD</dd>
                                    </dl>
                                </div>
                                {{-- <div class="total-balance-card">
                            <div class="color-indicator" style="background-color: rgb(255, 214, 50);"></div>
                            <dl>
                                <dt>USD</dt>
                                <dd>USD</dd>
                            </dl>
                            <dl class="price">
                                <dt>0 USD</dt>
                                <dd>0 USD</dd>
                            </dl>
                        </div> --}}
                            </div>
                        </app-total-balance>
                    </div>
                </app-gridster-widget-factory>
            </gridster-item>
            <gridster-item class="widget-container">
                <app-gridster-widget-factory id="totalBalance">
                    <div class="widget-header">
                        <div class="widget-label">
                            <app-icon class="widget-header-icon">

                                <i style="color:green" class='bx bxs-badge-check'></i>
                            </app-icon>
                            <span>VerifiCation Status</span>
                        </div>
                    </div>
                    <div class="widget">
                        <app-total-balance>
                            <div class="total-balance">
                                <div class="wrapper">
                                    <div class="control-panel"
                                        style="display: flex;justify-content: space-between;align-items: center;">
                                        <span>Last Update 2024-04-15 13:00:03</span>

                                        <span class="mat-button-wrapper">
                                            <i class='bx bx-refresh'></i>
                                        </span>

                                    </div>
                                    <app-base-chart class="chart"></app-base-chart>
                                </div>
                            </div>
                            <div class="total-balance-list">
                                <table id="" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Doc ..</th>
                                            <th>Upload Date</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($doc as $data)
                                            <tr>
                                                <td>{{ $data->document_type }}</td>
                                                <td></td>
                                                <td>{{ $data->created_at->format('d-m-Y') }}</td>
                                                <td>{{ $data->status }}</td>



                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Type</th>
                                            <th>Doc ..</th>
                                            <th>Upload Date</th>
                                            <th>Status</th>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </app-total-balance>
                    </div>
                </app-gridster-widget-factory>
            </gridster-item>
        </div>
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 table_dash_over">
                        <div class="card table_dash">
                            <div class="card-header" style="background-color: #111c43 !important">
                                <h3 class="card-title text-white" style="margin-bottom: 0">Transaction History</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <!-- <th>User Name</th> -->
                                            <!-- <th>Request Date</th> -->
                                            <th>Response Date</th>
                                            <th>Amount</th>
                                            <th>Intrest</th>
                                            <th>Type</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mergedRecords as $data)
                                            <tr>
                                                <!-- <td>{{ $data->users->first_name }}</td> -->
                                                <td>{{ $data->created_at->format('d-m-Y H:i:s') }}</td>
                                                <!-- <td>{{ $data->date ?? '--' }}</td> -->
                                                <td>{{ $data->amount }}</td>
                                                <td>{{ $data->intrest ?? '--' }}</td>

                                                <td>
                                                    @if ($data->model_name == 'Withdraw')
                                                        <div class="text-danger font-weight-bold">
                                                            <span>{{ $data->model_name }}</span>
                                                        </div>
                                                    @else
                                                        <div class="text-success font-weight-bold">
                                                            <span>{{ $data->model_name }}</span>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($data->status == 'pending')
                                                        <div class="badge bg-warning">Pending</div>
                                                    @elseif($data->status == 'approved')
                                                        <div class="badge bg-success">Approved</div>
                                                    @else
                                                        <div class="badge bg-danger">Rejected</div>
                                                    @endif

                                                </td>



                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <!-- <th>User Name</th> -->
                                            <!-- <th>Request Date</th> -->
                                            <th>Response Date</th>
                                            <th>Amount</th>
                                            <th>Intrest</th>
                                            <th>Type</th>
                                            <th>Status</th>

                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="d-flex justify-content-center mt-5">
                                    <a class="btn btn-dark" target="_blank"
                                        href="{{ route('user.wallet-history') }}">See All Records</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.container-fluid -->
        </section>
        <!-- Integration of Verification Code -->
        <!-- <gridster-item class="widget-container">
                <app-gridster-widget-factory id="verification">
                    <div class="widget-header">
                        <div class="widget-label">
                            <app-icon class="widget-header-icon">
                            <svg role="img">
                                <use xlink:href="/assets/img/icon-sprite.svg?cacheOff=1712237277946#icon-verification"></use>
                            </svg>
                            </app-icon>
                            <span>Verification</span>
                        </div>
                    </div>
                    <div class="widget">
                        <app-verification>
                            <app-profile-verification-level>
                                <div class="verification-status-info">
                                    <div class="verification-label">Level 0</div>
                                    <div class="verification-status">
                                        <div class="status-line">
                                            <div class="status-indicator" style="width: 0%;"></div>
                                        </div>
                                        <div class="status-value">0%</div>
                                    </div>
                                </div>
                                <div class="verification-actions">
                                    <div class="status-button">
                                        <button mat-stroked-button="" color="accent" class="mat-focus-indicator card-bg mat-stroked-button mat-button-base mat-accent" tabindex="0">
                                            <span class="mat-button-wrapper"> Click To Upgrade </span>
                                            <span matripple="" class="mat-ripple mat-button-ripple"></span>
                                            <span class="mat-button-focus-overlay"></span>
                                        </button>
                                    </div>
                                    <a mat-button="" class="mat-focus-indicator detail-link mat-button mat-button-base" aria-disabled="false" href="/profile/verification">
                                        <span class="mat-button-wrapper"> Level details </span>
                                        <span matripple="" class="mat-ripple mat-button-ripple"></span>
                                        <span class="mat-button-focus-overlay"></span>
                                    </a>
                                </div>
                            </app-profile-verification-level>
                        </app-verification>
                    </div>
                </app-gridster-widget-factory>
            </gridster-item> -->
        <!-- End of Verification Code -->

        <!-- /.content -->
    </div>
@endsection