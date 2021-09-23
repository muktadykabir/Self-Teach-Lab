@extends('layouts.app')
@section('title','Dashboard')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <div class="row state-overview" style="margin: 25px 0px;">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="card">
                        <div class="symbol blue">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <div class="value">
                            <p style="font-size: 20px;text-align: center;">Total Due AmmountTo Client</p>
                        </div>
                    </a>
                    
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="card" href="#">
                        <div class="symbol red">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="value">
                            <p style="font-size: 20px;text-align: center;">Client/Customer</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="card" href="#">
                        <div class="symbol yellow">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <div class="value">
                            <p style="font-size: 20px;text-align: center;">Available Ammount In Bank</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row state-overview" style="margin: 25px 0px;">
                <div class="col-lg-4 col-sm-6">
                    <a class="card" href="#">
                        <div class="symbol terques">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <div class="value">
                            <p style="font-size: 20px;text-align: center;">Available Full Fill Tweenty LTR Bottle</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="card" href="#">
                        <div class="symbol yellow">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <div class="value">
                            <p style="font-size: 20px;text-align: center;">Cash In Hand</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="card" href="#">
                        <div class="symbol red">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <div class="value">
                            <p style="font-size: 20px;text-align: center;">Available Bottle Tweenty LTR</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </section>
    <!--main content end-->

@endsection


