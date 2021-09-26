@extends('users.investor.layout.app')
@section('title', 'Investment details')
@section('style')
<style>
     ul#example {
    list-style: none;
    padding: 19px 0 0;
    margin: 0;
    display: block;
    text-align: center;
    background-color: #fff;
}

ul#example li { display: inline-block; }

ul#example li span {
    font-size: 35px;
    font-weight: 900;
    color: #00bcd4;
    letter-spacing: 5px;
}
ul#example li span.hap{
    font-size: 2em;
    font-weight: 900;
    color: #00bcda;
    letter-spacing: 3px;
}
ul#example li.seperator {
	font-size: 33px;
    vertical-align: top;
    line-height: 80px;
    color: #000000;
    margin: 0 0.3em;
}

ul#example li p {
    color: #000;
    font-size: 1em;
    line-height: 1em;
}


 @media screen and (max-width: 768px) {

    ul#example {
    list-style: none;
    padding: 12px 0 0;
    margin: 0;
    display: block;
    text-align: center;
    background-color: white
}

ul#example li { display: inline-block; }

ul#example li span {
    font-size: 30px;
    font-weight: 900;
    color: #00bcd4;
    letter-spacing: 3px;
}
ul#example li span.hap{
    font-size: 2em;
    font-weight: 900;
    color: #00bcda;
    letter-spacing: 3px;
}
ul#example li.seperator {
	font-size: 28px;
    vertical-align: top;
    line-height: 50px;
    color: #000000;
    margin: 0 0.15em;
}

ul#example li p {
    color: #000;
    font-size: 0.6em;
    line-height: 0.6em;
}


        }


</style>
@endsection
@section('content')
<div class="container my-2 p-2">
    <div class="card">
        <div class="card-header p-4">Investment details</div>
    <div class="card-body p-2">
        <div class="card-columns">


            <div class="card shadow-box">
                <div class="card-header">
                    <h5 class="text-center font-weight-bold m-3">Coin detail</h5>
                </div>
                <div class="card-body text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="{{$inv->coin->getMedia('coin-avatar')->first()->getFullUrl() }}" class="card-img" alt="">
                            </div>
                            <div class="col">
                                <h6>{{ $inv->coin->quantity }} Rash coin</h6>
                                <h4> <span class=" mdi mdi-currency-ngn "></span> {{ number_format($inv->coin->price, 2, '.', ',') }} </h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="text-center font-weight-bold m-3">Time remaining withdraw</h5>
                </div>
                <div class="card-body">
                    <ul id="example">
                        <li><span class="days">00</span>
                            <p class="days_text">Days</p>
                        </li>

                        <li class="seperator">:</li>
                        <li><span class="hours">00</span>
                            <p class="hours_text">Hours</p>
                        </li>
                        <li class="seperator">:</li>
                        <li><span class="minutes">00</span>
                            <p class="minutes_text">Minutes</p>
                        </li>
                        <li class="seperator">:</li>
                        <li><span class="seconds">00</span>
                            <p class="seconds_text">Seconds</p>
                        </li>
                    </ul>
                </div>


            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="font-weight-bold text-center">Withdraw status</h5>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <h6 class="text-muted col">Withdraw on:</h6>
                        <h6 class="text-dark col font-weight-bold">{{ date('d, M Y', strtotime($inv->end_date)) }}</h6>
                    </div>

                    <div class="row">
                        <h6 class="text-muted col">Balance : </h6>
                        <h6 class="text-dark col font-weight-bold"><span class=" mdi mdi-currency-ngn "></span> {{ number_format($inv->coin->price, 2, '.', ',') }}</h6>
                    </div>
                    @if (date("Y-m-d : H:s:i") <= $inv->end_date)
                    <a href="" class="btn btn-warning btn-rounded m-2 disabled font-weight-bold">Pending</a>

                    @else
                    <a href="{{ route('request-my-money', [$inv->id, str_replace(" ", "-", Auth::user()->name)]) }}" class="btn btn-primary btn-rounded m-2 font-weight-bold"> Withdraw now</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $("#example").countdown('{{ $inv->end_date }}').on('update.countdown', function(event){
    var $this = $(this).html(event.strftime(''
    +'<li><span >%-w</span><p>Week%!w:s;</p></li>'
    +'<li class="seperator">:</li>'
    +'<li><span >%-d</span><p >Day%!d:s;</p></li>'
    +'<li class="seperator">:</li>'
    +'<li><span>%-H</span><p >Hour%!H:s;</p></li>'
    +'<li class="seperator">:</li>'
    +'<li><span>%-M</span><p>Minute%!M:s;</p></li>'
    +'<li class="seperator">:</li>'
    +'<li><span>%-S</span><p>Second%!S:s;</p></li>'
    )

    )
    $('.adv').html("in advance");
   }).on('finish.countdown', function(event){
    var $this = $(this).html(event.strftime(''
    +'<li><span class="hap">Completed</span></li>'
    ))
   });
    })
</script>
@endsection
