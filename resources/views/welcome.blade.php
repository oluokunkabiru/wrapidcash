@extends('layouts.app')
@section('title', 'Home')
@section('style')
<style>
    .carouselcontent{
        /* padding: 80px 20px 200px 20px; */
        margin: 80px 20px 200px 20px ;
        background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7));
        /* border-radius: 10%; */
    }
</style>

@endsection
@section('content')
<section>
    <div class="wow slideInDown" data-wow-duration='2s' data-wow-delay='0.5s'>
        <div class="site-section bg-image" style="background-image:url({{ asset('front-asset/images/wallpaper.jpg') }});max-width:cover; height: 100%;
        background-repeat: no-repeat; " >
        <div class="carouselcontent rounded text-white">
                <h2 class="font-weight-bold text-warning text-center display-4">FAQ</h2>
            <div id="demo" class="carousel slide" data-ride="carousel" >

                <!-- Indicators -->
                {{-- <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>

                </ul> --}}

                <div class="carousel-inner">

                    <div class="carousel-item active">
                            <div class="container" >
                                <h4 class="bg-primary text-light p-3 rounded text-uppercase" style="max-width: max-content">what is Rapid cash ?</h4>
                                <h5>
                                    Rapid Cash is an organization with the aim of building individuals
                                    financial capacity over time with our self generating digital Assets,
                                    which generates liquidity for members who holds it for 30 days time
                                    period.
                                </h5>
                                <h5>
                                  With the raise of many struggles on making hands meet, we have put
                                  together constructive efforts and work for every member of Rapid
                                  Cash so as to save them, their time, energy and money With WRAP
                                  COIN.
                                </h5>
                            </div>
                    </div>

                    <div class="carousel-item">
                      <div class="container" >
                          <h4 class="bg-primary text-light p-3 rounded text-uppercase" style="max-width: max-content">what is wrap coin?</h4>
                          <h5>
                            Wrap coin is an Investment coin owned by Rapid Cash, it is not a
                            market based or user based coin and as such its price is determined
                            by the organization.
                          </h5>
                          <h5>
                            Wrap coin has the potency to give you 100% returns for purchasing it
                            and holding it within 30 days.
                            Wrap coin is a digital asset and can be converted into fiat.
                          </h5>
                      </div>
              </div>

              <div class="carousel-item">
                <div class="container" >
                    <h2 class="bg-primary text-light p-3 rounded text-uppercase" style="max-width: max-content">Rapid Cash:- Breaking Financial Limits.</h2>
                </div>
              </div>

              <div class="carousel-item">
                <div class="container" >
                    <h6 class="bg-primary text-light p-3 rounded text-uppercase" style="max-width: max-content">How do I earn with rapid cash/ how do I
                      Earn with wrap coin ?</h6>
                    <h5>
                      Wrap coin is an auto liquidity generating coin ,because of the
                      nature of this coin , all you need to do as an investor is to buy the
                      coin and watch the coin grow
                    </h5>
                    <h5>
                      Wrap coin has the potency to give you 100% returns for purchasing it
                      and holding it within 30 days
                    </h5>
                </div>
        </div>
        <div class="carousel-item">
          <div class="container" >
              <h3 class="bg-primary text-light p-3 rounded text-uppercase" style="max-width: max-content">Can I partner with Rapid cash?</h3>
              <h4>
                Yes you can partner with rapid cash organization this option will be
                available very soon
              </h4>

          </div>
  </div>

  <div class="carousel-item">
    <div class="container" >
        <h4 class="bg-primary text-light p-3 rounded text-uppercase" style="max-width: max-content">How do I invest?</h4>
        <h5>
          Wrap coin is an Investment coin owned by Rapid Cash, it is not a
          market based or user based coin and as such its price is determined
          by the organization.
        </h5>
        <h5>
          Wrap coin has the potency to give you 100% returns for purchasing it
          and holding it within 30 days.
          Wrap coin is a digital asset and can be converted into fiat.
        </h5>
    </div>
</div>
<div class="carousel-item">
  <div class="container" >
      <h4 class="bg-primary text-light p-3 rounded text-uppercase" style="max-width: max-content">How and when do I withdraw?</h4>
      <h5>
        Wrap coin generate 100% in 30 days therefore withdrawal can only
        be made after 30days of investment.
      </h5>

  </div>
</div>

<div class="carousel-item">
  <div class="container" >
      <h4 class="bg-primary text-light p-3 rounded text-uppercase" style="max-width: max-content">How long does it takes my withdrawal to be
        processed?</h4>
      <h5>
        Kindly notice that your withdrawal will be processed under 24hrs
        after you order to withdraw. and if you didn’t get your withdrawal
        under 24hrs kindly contact our 27/7 customer care support team
      </h5>

  </div>
</div>




                </div>


                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>

        </div>

        {{-- <img src="{{ asset('front-asset/images/wallpaper.jpg') }}" alt="" style="visibilit: hidden; max-width: 100%; height: auto;"> --}}
        </div>
  </div>
</section>
<section>
    <div class="site-section bg-image overlay " style=" background-image:  url('{{ asset('front-asset/images/rc_Logo.png') }}'); " id="about-section">
        <div class="container" style="z-index: 3;">
        <div class="row no-gutter">
            <div class="col-md-6">
                <img src="{{ asset('front-asset/images/RC Logo.jpg') }}" alt="rapidcashlogo" style=" max-width: 100%; height: auto;">
            </div>
            <div class="col-md-6">
                <h2 class="text-black mb-4 text-uppercase section-title">About Us</h2>
                <p class="text-black">Rapid Cash is Set to improve the World of Finance with his Digital Asset That Generates Liquidity Over Time.
                        With people who have lost hope on different circumstances for financial freedom to live their desired life dreams,
                        we have put together systems for you all to have that desired life dreams and lifestyle you want with Wrap Coin (RP)
                        giving you 100% Returns Liquidity in 30 days.</p>
                <p class="text-black">This is a Legitimate and Genuine platform designed to help individuals overcome their financial challenges with our Digital Asset,
                    in a country where much efforts produce little financial result.
                    <a type="text" class="text-info" data-toggle="modal" data-target="#myModal">
                        .....Continue reading
                    </a>

                </p>

            </div>
        </div>

        </div>
    </div>

    <!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-black">About Rapid Cash</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body text-black">
            <p class="text-black">Rapid Cash is Set to improve the World of Finance with his Digital Asset That Generates Liquidity Over Time.
                With people who have lost hope on different circumstances for financial freedom to live their desired life dreams,
                we have put together systems for you all to have that desired life dreams and lifestyle you want with Wrap Coin (RP)
                giving you 100% Returns Liquidity in 30 days.
            </p>
            <p class="text-black">This is a Legitimate and Genuine platform designed to help individuals overcome their financial challenges with our Digital Asset,
                in a country where much efforts produce little financial result. <br><br>
                This Platform is designed to help you handle your financial needs,
                to live out your desired life dreams without putting the burden on others.
            </p>
                <h5>
                    RAPID CASH
                </h5>
            <p>
                Rapid Cash is an organization with the aim of building individuals financial capacity over time with our self-generating Digital Assets, which generates
                liquidity for members who holds it for 30 days time period.
                With the raise of many struggles on making hands meet, we have put together constructive efforts and work for every member of Rapid Cash so as to save them,
                their time, energy and money With WRAP COIN.
            </p>
            <h5>
                WHAT IS WRAP COIN?
            </h5>

            <p>
                •	Wrap coin is an Investment coin owned by Rapid Cash, it is not a market based or user based coin and as such its price is determined by the organization. <br>
                •	Wrap coin generates auto liquidity. <br>
                •	Wrap coin has the potency to give you 100% returns for purchasing it and holding it within 30 days. <br>
                •	Wrap coin is a digital asset and can be converted into fiat. <br>

            </p>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
</section>

<section>
    <div class="site-section" id="team-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="text-black text-uppercase section-title">Our Patners</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up">
              <div class="block-team-member-1 text-center rounded">
                <figure>
                  <img src="{{ asset('front-asset/images/person_1.jpg') }}" alt="Image" class="img-fluid rounded-circle">
                </figure>
                <h3 class="font-size-20 text-white">Jean Smith</h3>
                <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Mining Expert</span>
                <p class="px-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, repellat. At, soluta. Repellendus vero, consequuntur!</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="block-team-member-1 text-center rounded">
                <figure>
                  <img src="{{ asset('front-asset/images/person_2.jpg') }}" alt="Image" class="img-fluid rounded-circle">
                </figure>
                <h3 class="font-size-20 text-white">Bob Carry</h3>
                <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project Manager</span>
                <p class="px-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil quia veritatis, nam quam obcaecati fuga.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="block-team-member-1 text-center rounded">
                <figure>
                  <img src="{{ asset('front-asset/images/person_3.jpg') }}" alt="Image" class="img-fluid rounded-circle">
                </figure>
                <h3 class="font-size-20 text-white">Ricky Fisher</h3>
                <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Engineer</span>
                <p class="px-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quidem, laudantium, illum minus numquam voluptas?</p>
              </div>
            </div>
          </div>
        </div>
      </div>

</section>
@endsection

