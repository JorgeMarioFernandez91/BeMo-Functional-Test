@extends('base')
@section('main')
@include('navbar')

<div class="container-fluid" style="padding: 0; min-width: 100%;">

        <div class="row" style="margin-left:0; margin-right: 0">
            <div class="container" style="position:relative; min-width: 100%; padding: 0px;">
                <!-- here we are replacing the image -->
                <img src="https://cdainterview.com/resources/contact-us.png" alt="" class="img-fluid img-size"> 
                    
                <div class="container" style="position:absolute; top: 50%; left: 0; right: 0;">

                    <!-- <p class="img-text">CDA Interview Guide</p>
                    <hr style=" top: 55%; left: 0; right: 0;  width: 60%; border: 1px solid white;"> -->
                
                </div>
            </div>
        </div>
        </div>
    </div>
<div>
<!-- <form method="get" action="{{ route('mail/send') }}">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="message" placeholder="message">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit">submit email</button>
</form> -->
<div class="container" style="padding-right: 0; padding-left: 0; max-width: 1400px;">
<br><br>
    <h3>BeMo Academic Consulting Inc.</h3>
    <p>Toll Free: 1-855-900-BeMo (2366)</p>
    <p>Email: info@bemoacademicconsulting.com</p><br><br>
</div>
<div class="row">
 <div class="col-sm-8 offset-sm-2">

<form method="post" action="{{ route('mail/send') }}">

        <div class="form-group">
            <label for="image_name">Name:</label>
            <input type="text" class="form-control" name="name"/>

            <label for="image_name">Email:</label>
            <input type="text" class="form-control" name="email"/>
          
            <label for="message">Message:</label>
            <textarea type="message" class="form-control" name="message" ></textarea>
        </div>

        <!-- <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <textarea type="text" name="message" placeholder="message"></textarea> -->
        <!-- <input type="text" name="message" placeholder="message"> -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-primary" type="submit">Submit</button>
</form>

</div>

</div>
</div>

<div class="container-fluid" style="background-color: #000066; min-width: 100%;">
    <div class="row" style="margin-left:0; margin-right: 0">

        <div class="column-8" style="color: white; padding: 15px; padding-left: 20px; margin-left: 40px; margin-right: 200px">

            <span >©2013-2016 BeMo Academic Consulting Inc. All rights reserved. <span style="color: #ff6600;">Disclaimer & Privacy Policy Contact Us</span></span>

        </div>
        <div class="column-4" style="padding-left: 50px; padding-top: 10px;">

            <img src="photos/social_media_images.PNG" alt="">

        </div>

    </div>
    
</div>