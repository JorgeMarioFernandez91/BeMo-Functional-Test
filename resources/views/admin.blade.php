@extends('layouts.auth')

@section('content')

<!-- @include('contents.create') -->

<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-sticky-top" >
    <div class="container">
        <!-- Left side of Navbar -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://cdainterview.com/rw_common/images/bemo-logo2.png" width="167" height="100" alt="Site logo">
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <li style="padding-right: 30px;" ><a class="nav-links" href="#">Main</a></li>
                <li style="padding-right: 30px" ><a class="nav-links" href="#">How To Prepare</a></li>
                <li style="padding-right: 30px" ><a class="nav-links" href="#">CDA Interview Questions</a></li>
                <li style="padding-right: 30px" ><a class="nav-links" href="#">Contact Us</a></li>
                
                <li class="logout">
                    <a class="nav-links" href="{{ route('logout') }}"
                        onclick="   event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid" style="padding: 0; min-width: 100%;">

    <div class="row" style="margin-left:0; margin-right: 0">
    <div class="container" style="position:relative; min-width: 100%; padding: 0px;">
            <img src="https://cdainterview.com/resources/cda-interview-guide.jpg" alt="" class="img-fluid img-size"> 
                
            <div class="container" style="position:absolute; top: 50%; left: 0; right: 0;">

                <p class="img-text">CDA Interview Guide</p>
                <hr style=" top: 55%; left: 0; right: 0;  width: 60%; border: 1px solid white;">
            
            </div>
        </div>

    </div>
    <div class="row" style="margin-left:0; margin-right: 0">
    
        <div class="container" style="position:relative;">

            

            <!-- ================================== -->
            <br><br><br>
            <span class="section-headers" style="color:#000066;">Ultimate Guide to CDA Structured Interview: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Interview</span><br><br>
            
            <span class="section-headers">Overview</span><br><br>
            <span>History and rationale of the CDA interview</span><br>
            <span>Types of Questions</span><br>
            <span>The Seven Competencies</span><br>
            <span>Structure of the CDA interview</span><br>
            
            <span style="color: #ff6600;">How prepare for your CDA Interview</span><br>
            <span style="color: #ff6600;">Sample CDA interview questions</span><br>
            <span style="color: #ff6600;">BeMo CDA-structured interview prep program</span><br>
            <span style="color: #ff6600;">Contact us</span><br><br>
            
            <span class="section-headers">What is the purpose of the dental school interview?</span><br><br>
            <span>Regardless of the format of dental school interview (e.g. CDA structured interview, MMI, or Panel interview), the purpose of the interview is rather straightforward and remains constant across the board: to assess the personality and Non-Cognitive Skills (NCSs) of the candidate</span><br><br>
            <span>What are NCSs? By these we mean the following: Communication skills, interpersonal skills, ethical and moral decision making capacity, maturity, professionalism, sense of social responsibility, service to community, leadership, initiative, scholarship, ability to collaborate with others, conflict resolution skills, etc.</span><br><br>
            <span>Research has shown that, although academic performance (i.e. GPA and DAT scores) is a great indicator of didactic abilities in the first and second years of dental school, it provides, however, a very poor predictive value when it comes to future clinical performance. In fact, research shows that, an effective interview process is the best indicator of future clinical performance in the upper years, as it gives insight into the characteristics of the candidate and whether or not there will be a likelihood of future behavioural problems (an issue that dental schools constantly encounter and struggle to overcome). For example, it has been shown that those candidates who are "conscientious" and "open to new experiences" perform more effectively in the third and fourth years of dental school studies, where the education takes place in a clinical setting for the most part.</span><br><br>
            <span>Thus, dental schools, much like other professional schools, have over the past decade spent a lot of resources to devise the most effective interview process that will give them insight into the NCSs of their future candidates. And of course, for Canadian dental schools the answer has been the Canadian Dental Association's structured interview or CDA structured interviews.</span><br><br><br>
            
            <span class="section-headers">History, rationale, and the structure of the CDA interview</span> <br> <br>
            <span>Recall from our discussion above that we said an effective interview process is the most reliable way to select candidates who perform well clinically. Well in an attempt to test this theory, in 2004, Smithers et al. conducted a study, which produced results that were so shocking, that it unequivocally reinforced the Canadian Dental Association's earlier decision to commission a "new structured interview based on state-of-the-art contemporary interview techniques" (i.e. CDA structured interview)</span> <br><br>
            <span>What were these shocking results you may ask? The evidence gathered by Smithers et al. (2004) simply reinforced earlier suspicions about the ineffectiveness of traditional interview processes. They showed that, "a typical [traditional] admissions interview was in fact worse than neutral in that it was negatively associated with students' performance in the first year of dental training, did not predict academic performance, and may have led to poor selection decisions." Thus, it should come as no surprise that the traditional panel interview has been replaced by most dental school with the CDA structured interview, which is a more reliable and valid future predictor of clinical performance.</span><br><br>
            <span>The CDA interview was not only re-structured in its format of delivery, but it was also restructured in terms of the type of questions that would be ask, and how they would be rated or scored by the interviewers. Let us first talk about the type of questions that you may encounter on your CDA structured interview.</span><br><br><br>
            
            <span class="section-headers">Types of Questions</span><br><br>
            <span>The types of questions that you may be asked during your dental school interview can be divided into two categories: (1) Situational Interview (SI) questions and (2) Patterned Behaviour Descriptive Interview (PBDI) questions. SI questions are those in which the candidates is placed in a hypothetical situations (i.e. vignette) and is asked what they would react in that given situation. For example,</span><br><br>
            <span>"You are babysitting your sister’s young child, who is nervous and upset about his mother being away. You are trying to calm him down and offer him some ice cream. As you are dishing out the ice cream, the child bites down hard on your hand. How would you react?"</span><br><br>
            <span>Conversely, PBDI type questions, ask the candidates "about past behaviour with the assumption that past behaviour is the best predictor of future behaviour." An example of a PBDI type questions is:</span><br><br>
            <span>Many of us have had to deal with juggling busy schedules. Think of a time in the past when an important but unscheduled situation arose that required your attention, but you had a number of prior commitments on your agenda. What did you do? What was the outcome?</span><br><br>
            <span>Notice how SI questions are typically future-oriented, as opposed to PBDI questions, which are past-oriented. The specific and actual SI and PBDI questions are devised according to seven competencies, that the CDA has found to be reliable and valid indicators of future performance. In other words, every question that is asked during a dental school interview, regardless of being a SI or PBDI question, will address one or more than one of the seven competencies.</span><br><br><br>



            <span class="section-headers">The Seven Competencies</span><br>
            <span>1. Communication: does the applicant have excellent communication skills?</span><br>
            <span>2. Conscientiousness: is the applicant thorough, careful to do tasks well?</span><br>
            <span>3. Integrity : is the applicant honest with themselves and others?</span><br>
            <span>4. Judgment and analysis: does the applicant have the capability to make sound judgments? Do they gather all the facts before making a decision?</span><br>
            <span>5. self-control : Does the applicant remain calm and in control in difficult situations?</span><br>
            <span>6. sensitivity to others : Does the applicant show empathy towards others? Do they take the feelings of others into consideration?</span><br>
            <span>7. Tact and diplomacy : Does the applicant show sensitivity in dealing with difficult issues? Does the applicant possess the necessary skills to deal with others without causing negative feelings?</span><br><br>
            <span>Notice in the above examples that the SI sample question is addressing the competencies of self-control, sensitivity to others, communication, while the PBDI question addresses the competencies of conscientiousness, Integrity, and judgement and analysis. In all of the questions that will be asked of you during your interview, the competency of communication is a constant that is continuously tested and retested. In order to be successful, however, you will have to be able to know which other competencies also apply to the question so that you can formulate an appropriate response, which touches on the key factors essential for the interviewers.</span><br><br>
            
            
            <span class="section-headers">Structure of the CDA interview</span><br><br>
            <span>The CDA structured interview is comprised of seven questions, one for each of the seven competencies described above. Each question, which can either be a SI or a PBDI type, is scored on a 5-point scale for a total and a maximum of 35 points by two interviewers who are either a pair of dentists, or senior dental students. The interview usually takes about 20-30 minutes to be completed.</span><br><br>
            <span>Click <span style="color: #ff6600;">here</span> to learn how to prepare for your CDA interview</span><br><br>
            <span>Click <span style="color: #ff6600;">here</span> to practice with our sample CDA interview questions</span><br><br>
            <span>Click <span style="color: #ff6600;">here</span> to learn more about our money-back guarantee CDA interview preparation programs.</span><br><br>
            
            
            <span class="section-headers">Reference:</span><br><br>

            <span>Poole A., Catano, VM., and Cunningham, DP. Predicting performance in Canadian dental schools: the new CDA structured interview, a new personality assessment, and the DAT. Journal of Dental Education. 2007; 71: 664 - 676.</span><br><br>

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

@endsection



