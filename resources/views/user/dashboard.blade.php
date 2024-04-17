@extends('user.master')
@section('content')
<style>
/* CSS styles */
.widget-container {
    z-index: 2;
    display: block;
    width: 502px;
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
    width: calc(50% - 10px);
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
  font-size:25px
}
/* Add more styles as needed */
</style>

<div class="main-content app-content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        @if(auth()->user()->is_active == 2)
        <div class="callout callout-warning">
            <h5>Warning !</h5>
            <p>Your account is currently undergoing review.</p>
        </div>
        @endif
        @if(auth()->user()->is_banned == 2)
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
    <div style="display: flex;justify-content: space-around;">
    <gridster-item class="widget-container">
        <app-gridster-widget-factory id="totalBalance">
            <div class="widget-header">
                <div class="widget-label">
                    <app-icon class="widget-header-icon">
                    <i class='bx bx-wallet-alt' ></i>
                    </app-icon>
                    <span>Wallets Overview <span style="color:green">(Withdrawble amount:${{auth()->user()->withdraw_amount}})</span></span>
                </div>
            </div>
            <div class="widget">
                <app-total-balance>
                    <div class="total-balance">
                        <div class="wrapper">
                            <div class="control-panel" style="display: flex;justify-content: space-between;align-items: center;">
                                <span>Last Update 2024-04-15 13:00:03</span>
                                
                                    <span class="mat-button-wrapper">
                                    <i class='bx bx-refresh' ></i>
                                    </span>
                                
                            </div>
                            <app-base-chart class="chart"></app-base-chart>
                        </div>
                    </div>
                    <div class="total-balance-list">
                        <div class="total-balance-card">
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
                        </div>
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
                        <div class="total-balance-card">
                            <div class="color-indicator" style="background-color: rgb(255, 214, 50);"></div>
                            <dl>
                                <dt>USD</dt>
                                <dd>USD</dd>
                            </dl>
                            <dl class="price">
                                <dt>0 USD</dt>
                                <dd>0 USD</dd>
                            </dl>
                        </div>
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
                    
                    <i style="color:green" class='bx bxs-badge-check' ></i>
                    </app-icon>
                    <span>VerifiCation Status</span>
                </div>
            </div>
            <div class="widget">
                <app-total-balance>
                    <div class="total-balance">
                        <div class="wrapper">
                            <div class="control-panel" style="display: flex;justify-content: space-between;align-items: center;">
                                <span>Last Update 2024-04-15 13:00:03</span>
                                
                                    <span class="mat-button-wrapper">
                                    <i class='bx bx-refresh' ></i>
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
                                    @foreach($doc as $data)
                                    <tr>
                                      <td>{{$data->document_type}}</td>
                                      <td></td>
                                      <td>{{$data->created_at->format('d-m-Y')}}</td>
                                      <td>{{$data->status}}</td>
                                        
                                       
                                       
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Wallet History</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Request Date</th>
                                        <th>Response Date</th>
                                        <th>Amount</th>
                                        <th>Intrest</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mergedRecords as $data)
                                    <tr>
                                        <td>{{$data->users->first_name}}</td>
                                        <td>{{$data->created_at->format('d-m-Y H:i:s')}}</td>
                                        <td>{{$data->date ?? '--'}}</td>
                                        <td>{{$data->amount}}</td>
                                        <td>{{$data->intrest ?? '--'}}</td>
                                        
                                        <td>
                                        @if($data->model_name=='Withdraw')
                                          
                                          <div class="text-danger font-weight-bold"><span>{{$data->model_name}}</span></div>
                                        @else
                                        <div class="text-success font-weight-bold"><span>{{$data->model_name}}</span></div>
                                        @endif
                                        </td>
                                        <td>
                                            @if($data->status=='pending')
                                            <div class="badge bg-warning">Pending</div>
                                            @elseif($data->status=='approved')
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
                                        <th>User Name</th>
                                        <th>Request Date</th>
                                        <th>Response Date</th>
                                        <th>Amount</th>
                                        <th>Intrest</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </tfoot>
                            </table>
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
