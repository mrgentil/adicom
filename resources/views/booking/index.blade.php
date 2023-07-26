@extends('layouts.main')
@section('title')
    @parent Réservation
@endsection
@section('content')
    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap mb-0">
            <div class="inner-baner-container" style="background-image: url(assets/img/eventum-img1.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Reservation</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Reservation section html start -->
        <div class="reservation-page-section">
            <div class="container">
                <form method="post" class="reservation-form">
                    <div class="reservation-detais form-inner">
                        <h3>Your Details</h3>
                        <div class="row form-wrap">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <input type="text" name="name" id="name" placeholder="First Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <input type="text" name="name" id="last-name" placeholder="Last Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <input type="email" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <input type="text" name="address" id="address" placeholder="Address">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <input type="tel" name="phone-no" id="address" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <input type="date" name="date" id="date" value="2023-06-01">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <input type="time" name="time" id="time" value="6:22">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <input type="number" name="number" id="no-people" placeholder="Number of Ticket">
                            </div>
                            <div class="col-lg-12 col-12 form-group">
                                <textarea rows="7" name="note" id="note" placeholder="Case Description..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="reservation-method form-inner">
                        <h3>Choose Your Payment Method</h3>
                        <div class="form-wrap d-flex gy-5">
                            <div class="form-group radio-img">
                                <input type="radio" checked name="a" id="card-1">
                                <label for="card-1">
                                    <img src="assets/img/icon-img1.png" alt="">
                                </label>
                            </div>
                            <div class="form-group radio-img">
                                <input type="radio" name="a" id="card-2">
                                <label for="card-2">
                                    <img src="assets/img/icon-img2.png" alt="">
                                </label>
                            </div>
                            <div class="form-group radio-img">
                                <input type="radio" name="a" id="card-3">
                                <label for="card-3">
                                    <img src="assets/img/icon-img3.png" alt="">
                                </label>
                            </div>
                            <div class="form-group radio-img">
                                <input type="radio" name="a" id="card-4">
                                <label for="card-4">
                                    <img src="assets/img/icon-img4.png" alt="">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <label>Card holder Name</label>
                                <input type="text" name="name" id="card-name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <label>Card Number</label>
                                <input type="number" name="card number" id="card-number">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <label>CVV</label>
                                <input type="number" name="ccv" id="ccv">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <label>Expire Date</label>
                                <input type="number" name="expire date" id="expire-date">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="button-round-primary">Pay Now</button>
                </form>
            </div>
        </div>
    </main>
@endsection
