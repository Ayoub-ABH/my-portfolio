@extends('master')

@section('content')

    <div class="contact">

        <div class="head">
            <div class="title">
                <h1>Contact </h1>
            </div>
        </div>


        <div class="contact-container">
            <div class="message-form">
                <form action="">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="">

                    <label for="name">name</label>
                    <input type="text" name="name" id="">

                    <label for="message">message</label>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>

                </form>
            </div>
        </div>

    </div>

@endsection
