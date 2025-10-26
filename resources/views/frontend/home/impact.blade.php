<style>
    .rightContainer {
        display: flex;
        flex-wrap: wrap;
        height: 100%;
    }

    .rightContainer .box {
        flex: 1 1 calc(50%);
        padding: 20px;
        text-align: center;
        /* background: #f8f9fa; */
        box-sizing: border-box;

    }

    .leftcontainer .top {
        position: relative;
        padding-bottom: 10px;
        overflow: hidden;
        margin-bottom: 50px;
    }

    .leftcontainer .top::after {
        content: "";
        position: absolute;
        width: 326px;
        height: 126px;
        /* background-color: red; */
        border: 3px solid #ffdc0c;
        border-radius: 66%;
        left: -99px;
        bottom: -113px;
    }

    .first {
        border-right: 2px solid #a98617f0;
        border-bottom: 2px solid #a98617f0;
    }

    .two {
        border-bottom: 2px solid #a98617f0;
    }

    .third {
        border-right: 2px solid #a98617f0;
    }

    .boxcontainer {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .highliter {
        font-weight: 900;
        font-size: 30px;
        margin: 9px;
    }
    .impact_padding{
        padding: 50px 0px;
    }
    
</style>
<section class="impact-section">
    <div class="container">
        <div class="row impact_padding">
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center">
                <div class="leftcontainer">
                    <div class="top">
                        <h1 class="f-900">Impact We've Made</h1>
                    </div>
                    <p>{{ $data->impact }}
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-12 mb-lg-0" style="">
                <div class="rightContainer">
                    <div class="box first">
                        <div class="boxcontainer">
                            <div class="card" style="width:70px">
                                <div class="card-body">
                                    <img src="{{ asset('frontend/images/impact/cricket.png') }}" alt="">
                                </div>
                            </div>
                            <h1 class="highliter">{{ $data->batsman }}</h1>
                            <p>Established Batsman</p>
                        </div>
                    </div>
                    <div class="box two">
                        <div class="boxcontainer">
                            <div class="card" style="width:70px">
                                <div class="card-body">
                                    <img src="{{ asset('frontend/images/impact/ball.png') }}" alt="">
                                </div>
                            </div>
                            <h1 class="highliter">{{ $data->bowler }}</h1>
                            <p>Established Bowler</p>
                        </div>
                    </div>
                    <div class="box third">
                        <div class="boxcontainer">
                            <div class="card" style="width:70px">
                                <div class="card-body">
                                    <img src="{{ asset('frontend/images/impact/badge.png') }}" alt="">
                                </div>
                            </div>
                            <h1 class="highliter">{{ $data->awart }}</h1>
                            <p>Awards</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="boxcontainer">
                            <div class="card" style="width:70px">
                                <div class="card-body">
                                    <img src="{{ asset('frontend/images/impact/trophy .png') }}" alt="">
                                </div>
                            </div>
                            <h1 class="highliter">{{ $data->trophies }}</h1>
                            <p>Trophies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>