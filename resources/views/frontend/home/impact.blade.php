<style>
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

    .highliter {
        font-weight: 900;
        font-size: 30px;
        margin: 9px;
    }

    .impact_padding {
        padding: 50px 0px;
    }
</style>
<section class="impact-section">
    <div class="container">
        <div class="impact_padding">
            <div class="card shadow welcome-border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                        <img src="{{ asset('storage/'.$data->img) }}" alt="">
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0 d-flex align-items-center">
                        <div class="leftcontainer">
                            <div class="top">
                                <h1 class="f-900">Impact We've Made</h1>
                            </div>
                            <p>{{ $data->impact }}
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>