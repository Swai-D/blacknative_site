<!DOCTYPE HTML>

<html>
<head>
    <title>Welcome to | Blacknative Inc official site</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" type="image/png">
    <noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" /></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="logo">
            <span class="icon fa-gem" id ="black"></span>
        </div>
        <div class="content">
            <div class="inner">
                <h1><span id="black">Black</span><span class="halfStyle" data-content="N">N</span>ative inc.</h1>
                <p>"<i><b>simplicity is the key</b></i>" <a href="#"></a><br />
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#intro"><b id="black">Intro</b></a></li>
                <li><a href="#work"><b id="black">Work</b></a></li>
                <li><a href="#about"><b id="black">About</b></a></li>
                <li><a href="#contact"><b id="black">Contact</b></a></li>
                <!--<li><a href="#elements">Elements</a></li>-->
            </ul>
        </nav>
    </header>


    <!-- Main -->
    <div id="main">
        <!-- Intro -->
        <article id="intro">
            <h2 class="major">Intro</h2>
            <span class="image main"><img src="{{asset('images/ux.jpg')}}" alt="" /></span>
            <p>Design and imagination are all the key to creativity,but if you add simplisity inside them life becomes even more extraodinary</p>
            <p>Blacknative Inc. exist to bring all together and reach peoples life with software.We just impowers peoles life with software</p><a href="#work">awesome work</a>.</p>
        </article>

        <!-- Work -->
        <article id="work">
            <h2 class="major" align="center">What we do</h2>
             <h3 class="major">Web design</h3>
            <span class="image main"><img src="{{asset('images/computer.jpg')}}" alt="" /></span>
            <p>Total control of our life is our number one goal as human being,So to have someone knows what you what and deliver it to your with an epic design, life will bring more meanig.we are here to customerze your digital world  of web design.with a team of talented engineers we are always eager to help you out</p>

            <h3 class="major">Web Application/System Design</h3>
             <span class="image main"><img src="{{asset('images/typing.jpg')}}" alt="" /></span>
            <p>There is no dought that the digital age is taking over every single day. system now controls every mojor aspect of production. if your kind of person try to figure it out what kind of system might be compatible with your production line.. Guy ! we cant make it happen </p>

        </article>

        <!-- About -->
        <article id="about">
            <h2 class="major">About</h2>
            <span class="image main"><img src="{{asset('images/about.jpg')}}" alt="" /></span>
            <p>Blacknative inc. is a software company that is located in Dar es Salaa,Tanzania East Africa, design mega, simple and digestable software that solve real life problems.Dont hesitate to be our client and taste life of software to the next level. <br>"<i>simplicity is the key</i>"
        </article>

        <!-- Contact -->
        <article id="contact">
            <h2 class="major">Contact</h2>
            <form method="POST" action="/contact">
                <div class="fields">
                    <div class="field half">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class=" @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Jane Doe" required autocomplete="name"/>
                    </div>
                    <div class="field half">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class=" @error('email') is-invalid @enderror"  value="{{ old('email') }}" placeholder="JoeDoe@example.com" required autocomplete="email"/>
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea  id="message" rows="4" class=" @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" placeholder="whats in your mind !" required autocomplete="message"></textarea>
                    </div>
                </div>
                <ul class="actions padding"><br>
                    <li><input type="submit" value="Send Message" class="primary" /></li>
                    <li><input type="reset" value="Reset" /></li>
                </ul>
                @csrf
            </form>
            <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands fa-telegram"><span class="label">Telegram</span></a></li>
            </ul>
        </article>

        <!-- Elements -->
       

    </div>

    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">&copy; <a href="#"><b id="black">Blacknative Inc</a>. <b id="black">{{date('M,Y')}}</b></b></p>
    </footer>

</div>

<!-- BG -->
<div id="bg" >
    <video autoplay loop muted>
        <source src="{{asset('video/native.mp4')}}" type="">
    </video>

</div>

<!-- Scripts -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/browser.min.js')}}"></script>
<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('assets/js/util.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
