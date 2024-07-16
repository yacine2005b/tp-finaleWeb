@extends('layout.layout')

@section('content')
    <div class="sec">

        <div class="welcome">
            <h1>Welcome to Our School</h1>
            <p><strong>We are committed to providing the best education for our students. Our school offers a range of
                    academic
                    and
                    extracurricular activities designed to help students succeed and grow.</strong></p>
        </div>

        {{-- <div class="news">
            <div class="new">
                <h2>Latest News</h2>
                <p><strong>Stay updated with the latest news and announcements from our school.</strong></p>
            </div>

            <div class="new">
                <h2>Upcoming Events</h2>
                <p><strong>Join us for our upcoming events and activities.</strong></p>
            </div>
            <div class="map">
                <h1>Our Position On The Map</h1>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3221.475384618131!2d1.3513983152587656!3d36.15498488195056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12840e110ad0e11b%3A0x2da6c5bb9749a4d2!2sCEM%20Bachiri%20Abdelkader!5e0!3m2!1sfr!2sdz!4v1712879473863!5m2!1sfr!2sdz"
                    width="350" height="300" style="border:1;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div> --}}
    </div>
@endsection


<style>
    .sec {
        display: flex;
    }

    .welcome {
        border: 2px solid black;
        text-align: center;
        margin: 2rem 2rem;
        padding: 10px 1rem;
    }

    .news {
        display: flex;
    }

    .new {
        width: 400px;
        text-align: center;
        border: 2px solid black;
        padding: 10px 1rem;
        margin: 1rem 2rem;
    }

    .new p {
        margin-top: 2rem;
        font-size: 18px
    }

    .map {
        width: 400px;
        text-align: center;
        border: 2px solid black;
        padding: 10px 0;
        margin: 1rem 2rem;
    }
</style>
