@extends('master')

@section('content')

    <div class="blogs">

        <div class="head">
            <div class="title">
                <h1>Blogs</h1>
            </div>

            <div class="filters">
                <button class="active-blogs-btn">all</button>
                <button>web</button>
                <button>languages</button>
                <button>mobile</button>
                <button>frameworks</button>
            </div>
        </div>


        <div class="blogs-container">
            <div class="card">

                <div class="head">
                    <img src="{{asset("storage/logo-react-js.png")}}" alt="post-img">
                    <div class="date">12:00 pm 12/22/2019</div>
                    <div class="new">new</div>
                </div>

                <div class="body">
                    <div class="title">
                        <h4 class="name"> <a href="#"> web using docker</a></h4>
                        <h5 class="category">web</h5>
                    </div>

                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur
                         adipisicing elit. Eaque alias officia
                         adipisicing elit. Eaque alias officia
                         aliquam molestias! Natus...
                         <a class="read-more" href="#">read more</a>
                    </p>
                </div>
            </div>
            <div class="card">

                <div class="head">
                    <img src="{{asset("storage/presentation.png")}}" alt="post-img">
                    <div class="date">12/22/2019</div>
                </div>

                <div class="body">
                    <div class="title">
                        <h4 class="name"> <a href="#"> web using docker</a></h4>
                        <h5 class="category">web</h5>
                    </div>

                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur
                         adipisicing elit. Eaque alias officia
                         adipisicing elit. Eaque alias officia
                         aliquam molestias! Natus...
                         <a class="read-more" href="#">read more</a>
                    </p>
                </div>
            </div>
            <div class="card">

                <div class="head">
                    <img src="{{asset("storage/Node.js_logo.svg.png")}}" alt="post-img">
                    <div class="date">12/22/2019</div>
                </div>

                <div class="body">
                    <div class="title">
                        <h4 class="name"> <a href="#"> web using docker</a></h4>
                        <h5 class="category">web</h5>
                    </div>

                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur
                         adipisicing elit. Eaque alias officia
                         adipisicing elit. Eaque alias officia
                         aliquam molestias! Natus...
                         <a class="read-more" href="#">read more</a>
                    </p>
                </div>
            </div>
            <div class="card">

                <div class="head">
                    <img src="{{asset("storage/NoSQL-Database.jpg")}}" alt="post-img">
                    <div class="date">12/22/2019</div>

                </div>

                <div class="body">
                    <div class="title">
                        <h4 class="name"> <a href="#"> web using docker</a></h4>
                        <h5 class="category">web</h5>
                    </div>

                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur
                         adipisicing elit. Eaque alias officia
                         adipisicing elit. Eaque alias officia
                         aliquam molestias! Natus...
                         <a class="read-more" href="#">read more</a>
                    </p>
                </div>
            </div>
            <div class="card">

                <div class="head">
                    <img src="{{asset("storage/uml.png")}}" alt="post-img">
                    <div class="date">12/22/2019</div>

                </div>

                <div class="body">
                    <div class="title">
                        <h4 class="name"> <a href="#"> web using docker</a></h4>
                        <h5 class="category">web</h5>
                    </div>

                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur
                         adipisicing elit. Eaque alias officia
                         adipisicing elit. Eaque alias officia
                         aliquam molestias! Natus...
                         <a class="read-more" href="#">read more</a>
                    </p>
                </div>
            </div>
            <div class="card">

                <div class="head">
                    <img src="{{asset("storage/presentation.png")}}" alt="post-img">
                    <div class="date">12/22/2019</div>

                </div>

                <div class="body">
                    <div class="title">
                        <h4 class="name"> <a href="#"> web using docker</a></h4>
                        <h5 class="category">web</h5>
                    </div>

                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur
                         adipisicing elit. Eaque alias officia
                         adipisicing elit. Eaque alias officia
                         aliquam molestias! Natus...
                         <a class="read-more" href="#">read more</a>
                    </p>
                </div>
            </div>


        </div>

    </div>

@endsection
