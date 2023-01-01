@extends('master') @section('content')

<div class="about-me">
    <div class="head">
        <div class="title">
            <h1>About Me</h1>
        </div>
    </div>

    <div class="about-me-container">
        <div class="presentation">
            <div class="presentation-text">
                <h4 class="fullname">Ayoub AIT BABA HAMOU</h4>
                <h6 class="address">
                    <i class="fa-solid fa-location-dot"></i> Zagora, Morrocco
                </h6>
                <p class="who-iam">
                    Welcome! <br />

                    I'm Ayoub, <br />

                    J'aide les designers, les petites agences et les entreprises
                    à donner vie à leurs idées. Propulsé par PHP, Angular et le
                    café, je transforme vos exigences en sites Web CMS et de
                    commerce électronique - dans les délais et le budget. <br />
                    Vous avez des questions? Contactez moi.
                </p>

                <div class="some-statics">

                    <div class="static">
                        <div class="logo">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>

                        <div class="text">
                            <strong>+0 years</strong>  of experience
                        </div>

                    </div>

                    <div class="static">
                        <div class="logo">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                        <div class="text">
                            <strong>+4 projects</strong>  are made
                        </div>
                    </div>

                    <div class="static">
                        <div class="logo">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                        <div class="text">
                            <strong>+0 interviews</strong>  with companies
                        </div>
                    </div>
                </div>
            </div>

            <div class="presentation-img">
                <img src="{{ asset("storage/presentation.png") }}"
                alt="presentation">
            </div>
        </div>

        <div class="my-services">
            <div class="title">mes service</div>

            <div class="services">
                <div class="service">
                    <div class="service-img">
                        <img src="{{ asset("storage/presentation.png") }}" alt="" />
                    </div>
                    <div class="service-content">
                        <div class="title">web design</div>

                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur
                            repudiandae cupiditate tempore incidunt sequi, minima libero quis,
                            unde dignissimos praesentium voluptatibus, voluptas aliquam i
                            llum accusantium.
                        </p>
                    </div>
                </div>

                <div class="service">
                    <div class="service-img">
                        <img src="{{ asset("storage/presentation.png") }}" alt="" />
                    </div>
                    <div class="service-content">
                        <div class="title">web dev</div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur
                            repudiandae cupiditate tempore incidunt sequi, minima libero quis,
                            unde dignissimos praesentium voluptatibus, voluptas aliquam i
                            llum accusantium.
                        </p>
                    </div>
                </div>

                <div class="service">
                    <div class="service-img">
                        <img src="{{ asset("storage/presentation.png") }}" alt="" />
                    </div>
                    <div class="service-content">
                        <div class="title">desktop app</div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur
                            repudiandae cupiditate tempore incidunt sequi, minima libero quis,
                            unde dignissimos praesentium voluptatibus, voluptas aliquam i
                            llum accusantium.
                        </p>
                    </div>
                </div>

                <div class="service">
                    <div class="service-img">
                        <img src="{{ asset("storage/presentation.png") }}" alt="" />
                    </div>
                    <div class="service-content">
                        <div class="title">app mobile</div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur
                            repudiandae cupiditate tempore incidunt sequi, minima libero quis,
                            unde dignissimos praesentium voluptatibus, voluptas aliquam i
                            llum accusantium.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="my-clients">
            <div class="title">mes clients</div>

            <div class="clients">
                <div class="client">
                    <img src="{{ asset("storage/presentation.png") }}" alt="" />
                </div>
                <div class="client">
                    <img src="{{ asset("storage/presentation.png") }}" alt="" />
                </div>
                <div class="client">
                    <img src="{{ asset("storage/presentation.png") }}" alt="" />
                </div>
                <div class="client">
                    <img src="{{ asset("storage/presentation.png") }}" alt="" />
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
