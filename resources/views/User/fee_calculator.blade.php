@extends('User.layouts.master')
@section('content')

<section class="sec4 secti4">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <h3>FEE CALCULATOR </h3>
                <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
            </div>
        </div>
    </div>
</section>
<section class="sec8">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="boxed">
                    <div>
                        <span>01</span>
                        <p class="para">Enter the sold (final) price amount. Please remember <br> .that company only operates in USD</p>
                    </div>
                    <input type="text" placeholder="Example: 3000">
                </div>
                <div class="boxed">
                    <div>
                        <span>02</span>
                        <p class="para">Please choose which category you're selling in, as <br> each category has different fees.</p>
                    </div>
                    <select>
                        <option value="Category">Category</option>
                    </select>
                </div>
                <div class="boxed">
                    <div>
                        <span>03</span>
                        <p class="para">Pick which payment merchant you and the buyer will <br> choose. To view which merchant will save you <br> .the most money, click here</p>
                    </div>
                    <select>
                        <option value="Payment Type">Payment Type</option>
                    </select>
                </div>
                <div class="boxed">
                    <div>
                        <span>04</span>
                        <p class="para">Our VIP members have lower (progressive) rates <br> on transactions. To find out more about our VIP <br> status, click here.</p>
                    </div>
                    <select>
                        <option value="Are you a Vip Member">Are you a Vip Member</option>
                    </select>
                </div>
                <div class="boxed">
                    <div>
                        <p class="para"></p>
                    </div>
                    <a href="#" class="theme-btn">Calculate Fee</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <ul class="ours">
                    <li><a href="#"> Terms of service</a></li>
                    <li><a href="#"> Start a Transaction</a></li>
                    <li><a href="#"> How to use our Checkout </a></li>
                    <li><a href="#">Learn more about our fee </a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


@endsection