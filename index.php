<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       <!--  <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro:300' rel='stylesheet' type='text/css'> -->
        <title>BFA DT THESIS</title>
        <link rel="stylesheet" type="text/css" href="scripts/jquery.fullPage.css" />
        <link rel="stylesheet" type="text/css" href="main.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
        <script type="text/javascript" src="scripts/jquery.fullPage.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.23/p5.min.js"></script>
        <script type="text/javascript">

            $(document).ready(function() {
                $('#fullpage').fullpage({});
            });

            jQuery(function($){

                $('.box').removeClass('temptoggle');
                $('.imgtoggle').removeClass('show');
                $('.box').addClass('addpointer');
                $('.box').addClass('original');
                $('.imgtogglefirst').addClass('show');
                $('.hovers').addClass('rotatepara');
                $('.nullhover').addClass('rotatepara2');

                $('.projects').click(function () {
                    $('.projects').addClass('active');
                    $('.people').removeClass('active');
                    $('.box').removeClass('temptoggle');
                    $('.imgtoggle').removeClass('show');
                    $('.box').addClass('addpointer');
                    $('.box').addClass('original');
                    $('.imgtogglefirst').addClass('show');
                    $('.hovers').addClass('rotatepara');
                    $('.nullhover').addClass('rotatepara2');
                });   
           
                $('.people').click(function () {
                    $('.people').addClass('active');
                    $('.projects').removeClass('active');
                    $('.box').removeClass('original');
                    $('.box').addClass('addpointer');
                    $('.imgtogglefirst').removeClass('show');
                    $('.hovers').removeClass('rotatepara');
                    $('.nullhover').removeClass('rotatepara2');
                    $('.box').addClass('temptoggle');
                    $('.imgtoggle').addClass('show');
                });

                $('.box').hover( function(){
                    $(this).find(".hovers").addClass('showpara');
                }, function(){
                    $(this).find(".hovers").removeClass('showpara');
                });
            });

        </script>
    </head>
    <body>
        <div id="fullpage">

            <div class="section">
                <div id="canvasIdentity"></div>
                <!-- <script src='scripts/sketch_0.js'></script> -->
            </div>


            <div class="section">
                <div id="topbar">
                    <ul>
                        <li class="listelements"><a class="projects active">projects</a></li> //
                        <li class="listelements"><a class="people">designers</a></li> //
                        <li class="listelements"><a class="aboutlink" href="#thirdPage">about</a></li>
                    </ul>
                </div>

                <div id="boxwrapper">

                    <a href="/designers/mischa.html">
                        <div class="box mischa">
                            <img class="imgtogglefirst" src="designers/images/covers/mischa_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/mischa.png">
                            <p class="hovers mischahover"><span>octocom</span> <br><br>mischa abakumova</p>
                        </div>
                    </a>

                    <a href="/designers/nobonita.html">
                        <div class="box nobo">
                            <img class="imgtogglefirst" src="designers/images/covers/nobo_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/nobo.png">
                            <p class="hovers nobohover"><span>from roots to needles</span> <br><br>nobonita bhowmik</p>
                        </div>
                    </a>

                    <a href="/designers/angela.html">
                        <div class="box angela">
                            <img class="imgtogglefirst" src="designers/images/covers/angela_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/angela.png">
                            <p class="hovers angelahover"><span>mood</span> <br><br>angela chen</p>
                        </div>
                    </a>

                    <a href="/designers/agustin.html">
                        <div class="box nevaris">
                            <img class="imgtogglefirst" src="designers/images/covers/nevaris_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/nevaris.png">
                            <p class="hovers nevarishover"><span>digitalphysical</span> <br><br>agust&iacute;n emilio</p>
                        </div>
                    </a>

                    <a href="/designers/mady.html">
                        <div class="box mady">
                            <img class="imgtogglefirst" src="designers/images/covers/mady_cover.jpg">
                            <img class="imgtoggle" src="designers/images/profiles/mady.png">
                            <p class="hovers madyhover"><span>cathexis</span> <br><br>mady dean</p>
                        </div>
                    </a>

                    <a href="/designers/jessy.html">
                        <div class="box jessy">
                            <img class="imgtogglefirst" src="designers/images/covers/jessy_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/jessy.png">
                            <p class="hovers jessyhover"><span>black box</span> <br><br>jessy jo gomez</p>
                        </div>
                    </a>

                    <a href="/designers/tiffany.html">
                        <div class="box tiffany">
                            <img class="imgtogglefirst" src="designers/images/covers/tiffany_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/tiffany.png">
                            <p class="hovers tiffanyhover"><span>cupola</span> <br><br>tiffany kao</p>
                        </div>
                    </a>

                    <a href="/designers/summer.html">
                        <div class="box summer">
                            <img class="imgtogglefirst" src="designers/images/covers/summer_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/summer.png">
                            <p class="hovers summerhover"><span>tale of the lava rock man</span> <br><br>summer lacuin</p>
                        </div>
                    </a>

                    <a href="/designers/khushboo.html">
                        <div class="box khushboo">
                            <img class="imgtogglefirst" src="designers/images/covers/kboo_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/kboo.png">
                            <p class="hovers kboohover"><span>intertidal</span> <br><br>khushboo lalwani</p>
                        </div>
                    </a>

                    <div class="box">
                        <p class="nullhover">BFA DT</p>
                    </div>

                    <div class="box">
                        <p class="nullhover"><span>class of 2016</span></p>
                    </div>

                    <a href="/designers/sam.html">
                        <div class="box sam">
                            <img class="imgtogglefirst" src="designers/images/covers/sam_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/sam.png">
                            <p class="hovers samhover"><span>portal</span> <br><br>sam madhu</p>
                        </div>
                    </a>

                    <a href="/designers/melissa.html">
                        <div class="box melissa">
                            <img class="imgtogglefirst" src="designers/images/covers/melissa_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/melissa.png">
                            <p class="hovers melissahover"><span>stop shooting: save our youth</span> <br><br>melissa martinez</p>
                        </div>
                    </a>

                    <a href="/designers/natalia.html">
                        <div class="box natalia">
                            <img class="imgtogglefirst" src="designers/images/covers/natalia_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/natalia.png">
                            <p class="hovers nataliahover"><span>dissolving physicalities & extended bodies</span> <br><br>natalia mrozek</p>
                        </div>
                    </a>

                    <a href="/designers/grant.html">
                        <div class="box grant">
                            <img class="imgtogglefirst" src="designers/images/covers/grant_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/grant.png">
                            <p class="hovers granthover"><span>materoleum</span> <br><br>grant schofield</p>
                        </div>
                    </a>

                    <a href="/designers/peter.html">
                        <div class="box peter">
                            <img class="imgtogglefirst" src="designers/images/covers/petertoh_cover.jpg">
                            <img class="imgtoggle" src="designers/images/profiles/peter.png">
                            <p class="hovers peterhover"><span>master clock</span> <br><br>peter toh</p>
                        </div>
                    </a>

                    <a href="/designers/simon.html">
                        <div class="box simon">
                            <img class="imgtogglefirst" src="designers/images/covers/simon_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/simon.png">
                            <p class="hovers simonhover"><span>tower rangers</span> <br><br>simon yang</p>
                        </div>
                    </a>

                    <a href="/designers/laurie.html">
                        <div class="box laurie">
                            <img class="imgtogglefirst" src="designers/images/covers/laurie_cover.png">
                            <img class="imgtoggle" src="designers/images/profiles/laurie.png">
                            <p class="hovers lauriehover"><span>flandill</span> <br><br>laurie waxman</p>
                        </div>
                    </a>

                </div>
            </div>

            <div class="section">
                <p class="aboutpara">Supertranpositions is a collective of 16 digital designers from the BFA Design and Technology program at Parsons. The designers represent the graduating class of 2016 and demonstrate the evolving nature of the program through dynamic projects which are born from an amalgamation of technology and design thinking. Supertranspositions places emphasis on the procedural bridge between conceptualization and technical production.</p>

                <p class="aboutpara">The <a class="listelements" href="http://www.newschool.edu/parsons/bfa-design-technology/" target="_blank">BFA Design and Technology</a> program at Parsons focuses on time-based media, interaction, and experiential design. Through courses, collaborative projects, internships, and sponsored projects, the program immerses you in emerging design and art practices such as computational art, game design, physical computing, computer graphics, and experimental interfaces.</p>

                <p class="aboutpara"><b><span>This design collective was instructed by Kyle Li (Director of BFA DT), Benjamin Norskov and Ernesto Klar.</span></b></p>
            </div>

        </div>
         <?php 
            $choose = rand(1, 4);
            // if($choose<=1){
            //     echo "<script src='scripts/sketch_0.js'></script>";
            //     echo "<h1>script_0</h1>";
            // }else 
            if($choose>1 && $choose<=2){
                echo "<script src='scripts/sketch_1.js'></script>";
                echo "<h1>script_1</h1>";
            }else if($choose>2 && $choose<=3){
                echo "<script src='scripts/sketch_2.js'></script>";
                echo "<h1>script_2</h1>";
            }else{
                echo "<script src='scripts/sketch_3.js'></script>";
                echo "<h1>script_3</h1>";
            }
        ?>
    </body>
</html>
