@include('inc.header')

<body>
<div class="all-wrapper menu-side solid-bg-all">
    <div class="top-menu-secondary with-overflow color-scheme-dark">
        <!--------------------
START - Messages Link in secondary top menu
-------------------->
        <div class="logo-w menu-size">
            <a class="logo" href="index.html"><img src=""><span>Clean Admin</span></a>
        </div>
        <div class="fancy-selector-w">
            <div class="fancy-selector-current">
                <div class="fs-img"><img alt="" src="asset/img/card1.png"></div>
                <div class="fs-main-info">
                    <div class="fs-name">American Express Platinum</div>
                    @if(isset($withdrawal->amount))
                        <div class="fs-sub"><span>Balance:</span><strong>$</strong></div>
                    @endif
                </div>
                <div class="fs-extra-info"><strong>5476</strong><span>ending</span></div>
                <div class="fs-selector-trigger"><i class="os-icon os-icon-arrow-down4"></i></div>
            </div>
            <div class="fancy-selector-options">
                <div class="fancy-selector-option">
                    <div class="fs-img"><img alt="" src="asset/img/card2.png"></div>
                    <div class="fs-main-info">
                        <div class="fs-name">Capital One Venture Card</div>
                        <div class="fs-sub"><span>Balance:</span><strong>$50,304</strong></div>
                    </div>
                    <div class="fs-extra-info"><strong>5476</strong><span>ending</span></div>
                </div>
                <div class="fancy-selector-option active">
                    <div class="fs-img"><img alt="" src="asset/img/card1.png"></div>
                    <div class="fs-main-info">
                        <div class="fs-name">American Express Platinum</div>
                        <div class="fs-sub"><span>Balance:</span><strong>$80,274</strong></div>
                    </div>
                    <div class="fs-extra-info"><strong>2523</strong><span>ending</span></div>
                </div>
                <div class="fancy-selector-option">
                    <div class="fs-img"><img alt="" src="asset/img/card3.png"></div>
                    <div class="fs-main-info">
                        <div class="fs-name">CitiBank Preferred Credit</div>
                        <div class="fs-sub"><span>Balance:</span><strong>$1,202</strong></div>
                    </div>
                    <div class="fs-extra-info"><strong>6345</strong><span>ending</span></div>
                </div>
                <div class="fancy-selector-actions text-right"><a class="btn btn-primary" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add Account</span></a></div>
            </div>
        </div>
        <div class="top-menu-controls">
            <div class="element-search hidden-lg-down">
                <input placeholder="Start typing to search..." type="text">
            </div>
            <div class="top-icon top-search hidden-xl-up"><i class="os-icon os-icon-ui-37"></i></div>
            <!--------------------
START - Messages Link in secondary top menu
-------------------->

            <!--------------------
END - Messages Link in secondary top menu
-------------------->
            <!--------------------
START - Settings Link in secondary top menu
-------------------->
            <div class="top-icon top-settings os-dropdown-trigger os-dropdown-center"><i class="os-icon os-icon-ui-46"></i>
                <div class="os-dropdown">
                    <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                    <ul>
                        <li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a></li>
                        <li><a href="#"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a></li>
                        <li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a></li>
                        <li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Deactivate Account</span></a></li>
                    </ul>
                </div>
            </div>
            <!--------------------
END - Settings Link in secondary top menu
-------------------->
            <!--------------------
START - User avatar and menu in secondary top menu
-------------------->
            <div class="logged-user-w">
                <div class="logged-user-i">
                    <div class="avatar-w"><img alt="" src="asset/img/avatar1.jpg"></div>
                    <div class="logged-user-menu">
                        <div class="logged-user-avatar-info">
                            <div class="avatar-w"><img alt="" src="asset/img/avatar1.jpg"></div>
                            <div class="logged-user-info-w">
                                <div class="logged-user-name">{{Auth::User()->name}}</div>
                                <div class="logged-user-role">Platnum Membership</div>
                            </div>
                        </div>
                        <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                        <ul>
                            <li><a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Check Balance</span></a></li>
                            <li><a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a></li>
                            <li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a></li>
                            <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>
                            <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--------------------
END - User avatar and menu in secondary top menu
-------------------->
        </div>
    </div>
    <div class="layout-w">
        <!--------------------
START - Mobile Menu
-------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w">
                <a class="mm-logo" href="index.html"><img src="asset/img/logo.png"><span>Clean Admin</span></a>
                <div class="mm-buttons">
                    <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w"><img alt="" src="asset/img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">Maria Gomez</div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                </div>
                <!--------------------
START - Mobile Menu List
-------------------->
                <ul class="main-menu">
                    <li class="has-sub-menu">
                        <a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div><span>Dashboard</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="apps_support_dashboard.html">Dashboard 2 <strong class="badge badge-danger">New</strong></a></li>
                            <li><a href="apps_projects.html">Dashboard 3</a></li>
                            <li><a href="apps_bank.html">Dashboard 4 <strong class="badge badge-danger">New</strong></a></li>
                            <li><a href="layouts_menu_top_image.html">Dashboard 5</a></li>
                        </ul>
                    </li>


                </ul>
                <!--------------------
END - Mobile Menu List
-------------------->

            </div>
        </div>
        <!--------------------
END - Mobile Menu
-------------------->
        <!--------------------
START - Menu side v2
-------------------->

        <!--------------------
END - Menu side v2
-------------------->

        <div class="content-w">
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper compact pt-4">
                        <div class="element-actions"><a class="btn btn-primary btn-sm" href="{{route('beneficiary.store')}}"><i class="os-icon os-icon-ui-22"></i><span>Add Beneficiary</span></a><a class="btn btn-success btn-sm" href="#"><i class="os-icon os-icon-grid-10"></i><span>Make Payment</span></a></div>
                        <h6 class="element-header">Financial Overview</h6>
                        <div class="element-box-tp">
                            <div class="row">
                                <div class="col-lg-7 col-xxl-6">
                                    <!--START - BALANCES-->
                                    <div class="element-balances">
                                        <div class="balance hidden-mobile">
                                            <div class="balance-title">Total Balance</div>
                                            <div class="balance-value"><span>$</span><span class="trending trending-down-basic"><span>%12</span><i class="os-icon os-icon-arrow-2-down"></i></span>
                                            </div>
                                            <div class="balance-link"><a class="btn btn-link btn-underlined" href="#"><span>View Statement</span><i class="os-icon os-icon-arrow-right4"></i></a></div>
                                        </div>
                                        <div class="balance">
                                            <div class="balance-title">Credit Available</div>
                                            <div class="balance-value"></div>
                                            <div class="balance-link"><a class="btn btn-link btn-underlined" href="#"><span>Request Increase</span><i class="os-icon os-icon-arrow-right4"></i></a></div>
                                        </div>

                                    </div>

                                    <!--END - BALANCES-->
                                </div>
                                <div class="col-lg-5 col-xxl-6">
                                    <!--START - MESSAGE ALERT-->

                                    <div class="element-wrapper">
                                        <div class="element-box">

                                            {!! Form::open(['method'=>'POST','action'=>'WithdrawalController@store']) !!}
                                            {{Form::token()}}
                                                <h5 class="element-box-header">Transfer Money</h5>
                                            @include('errors.validationerrors')
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                            <label  for="">Enter Amount</label>
                                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                <input class="form-control" placeholder="Enter Amount..." type="text" value="0" name="amount">
                                                                <div class="input-group-addon">USD</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <div class="form-group">
                                                            {!! Form::label('beneficiary_id','Beneficiary:') !!}
                                                            {!! Form::select('beneficiary_id',$beneficiaries,'',['class'=>'form-control']) !!}

                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div >
                                                            <textarea class="form-control" rows="3" placeholder="Please Enter Description" name="description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-buttons-w text-right compact"><button class="btn btn-primary" type="submit">Transfer</button></div>
                                            {!! Form::close() !!}

                                        </div>
                                    </div>

                                    <!--END - MESSAGE ALERT-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-xxl-6">
                            <!--START - CHART-->

                            <!--END - CHART-->
                        </div>
                        <div class="col-lg-5 col-xxl-6">
                            <!--START - Money Withdraw Form-->

                            <!--END - Money Withdraw Form-->
                        </div>
                    </div>
                    <!--START - Transactions Table-->
                    <div style="margin-top: -100px"   class="element-wrapper">
                        <h6 class="element-header">Recent Transactions</h6>
                        <div class="element-box-tp">
                            <div class="table-responsive">
                                <table class="table table-padded">
                                    <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th class="text-center">Beneficiary</th>
                                        <th class="text-right">Amount</th>
                                        <th class="text-right">Print</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($withdrawals)
                                        @foreach($withdrawals as $withdrawal)
                                    <tr>
                                        <td class="nowrap"><span class="status-pill smaller green"></span><span>Complete</span></td>
                                        <td><span></span><span class="smaller lighter">{{$withdrawal->created_at}}</span></td>
                                        <td class="cell-with-media"><img alt="" src="asset/img/company1.png" style="height: 25px;"><span>{{$withdrawal->description}}</span></td>
                                        <td class="text-center"><a class="badge badge-success" href="#">{{$withdrawal->beneficiary->account_name}}</a></td>
                                        <td class="text-right bolder nowrap"><span class="text-success">{{$withdrawal->amount}}</span></td>
                                        <td class="text-right bolder nowrap"><span class="text-success">sfwX</span></td>
                                    </tr>
                                        @endforeach
                                        @endif


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--END - Transactions Table-->
                    <!--------------------
START - Chat Popup Box
-------------------->

                    <!--------------------
END - Chat Popup Box
-------------------->
                </div>
            </div>
        </div>
    </div>
    <div class="display-type"></div>
</div>

@include('inc.footer')

