<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="scripts\main.js"></script>


</head>

<body>
    <div class="nameheader">
        <h1 class="John">John.</h1>
        <h1 class="Mills">Mills</h1>
    </div>
    <a href="about.php">
        <div class="nochat">No time for chat.</div>
    </a>


    <br>

    <div id="home">
        <div class="container">
            <div class="message1 bubble bubbleClient">
                <p>Howdy! 👋 It looks like you're experiencing technical difficulties.😮 Fortunately, you've come to the
                    right place!</p>
            </div>
            <image class="typing1" src="typing.gif"></image>
            <br>

            <div class="message2 bubble bubbleClient">
                <p>My name is John and I have a passion for creating interactive user experiences while creating
                    solutions for your technical problems. 👍</p>
            </div>
            <image class="typing2" src="typing.gif"></image>
            <br>

            <div class="message3 bubble bubbleClient">
                <p>I'd love to tell you more about me. But first, what's your name?</p>
            </div>
            <br>

            <div class="message4 bubbleUser">
                <form>
                    Hi John! My name is <br>
                    <input type="text" name="message" id="user_input">
                </form>
                <a href="#abrakadabra"><button type="submit"
                        onclick="showInput(); visibility(); togglerun();">Send</button></a><br>
            </div>

            <br>
            <div id="abrakadabra" class="">
                <div id="introchat1" class="bubble bubbleClient">
                    <p>Nice to meet you, <span id="display"></span> 😍. Let me tell you a little bit more about myself. I
                        love crazy adventures in my Volkswagen beetle 🐞, playing computer games 🕹️, adding to my board game
                        collection, and spending time with my wife and daughter.
                    </p>
                </div>


                <image id="introchat2" class="" src="typing.gif"></image>


                <div id="introchat3" class="bubble bubbleClient">
                    <p>Here are a few pictures of my most recent adventures:</p>
                    <div class="row">
                        <div class="column">
                            <img class="shrinkme" src="family.jpg">
                        </div>
                        <div class="column">
                            <img class="shrinkme"src="vwbug.JPG">
                        </div>
                        <div class="column">
                            <img class="shrinkme" src="jump.jpg">
                        </div>
                        <div class="column">
                                <img class="shrinkme" src="paint.JPG">
                            </div>
                    </div>


                </div>


                <image id="introchat4" class="" src="typing.gif "></image>
                <div id="introchat5" class="bubble bubbleClient">
                    <p>I graduated with a Bachelors Degree in International Studies from Brigham Young University- Idaho 🎓🎈 I worked a couple years doing Spanish Translation and Higher Education recruiting for an International Department.</p>
                </div>
                <br>

                <div id="introchat6" class="bubbleUser">
                    <p>You sound pretty rad, John! You have an interesting background! How did you get into tech? 💿💾💻 </p>
                    <a href="#abrakadabra1"><button onclick="visibility1(); togglerun1();">Send</button></a>
                </div><br>

                <div id="abrakadabra1" class="">
                    <div id="aboutchat1" class="bubble bubbleClient">
                        <p>I'm a firm believer that we should use technology to create solutions to our every day problems.
                        This is why my career focuses have shifted so heavily into technology over the past few years. I'm currently working at a tech startup called Podium as a Product Specialist.</p>
                    </div>

                    <image id="aboutchat2" class="" src="typing.gif"></image>

                    <div id="aboutchat3" class="bubble bubbleClient">
                        <p> I spend a lot of my time providing technical support for our clients but also for my fellow co-workers at Podium who use our product. I troubleshoot API connection issues, javascript code installation, and numerous caching issues.</p>
                    </div>

                    <image id="aboutchat4" class="" src="typing.gif"></image>

                    <div id="aboutchat5" class="bubble bubbleClient">
                        <p>I even get to participate in building 🔨🏘️ new projects at Podium! </p>
                    </div><br>

                    <div id="aboutchat6" class="bubble bubbleUser">
                        <p> Alright, you've got me intrigued. What sort of projects are you working on? </p>
                        <a href="#abrakadabra2"><button onclick="visibility2(); togglerun2();">Send it!</button></a>
                    </div>
                </div><br>


                <div id="abrakadabra2" class="">
                    <div id="workchat1" class="bubble bubbleClient">
                        <p>Because my role has a huge portion which is client-facing, I get the unique perspective of how our clients use and interact with the product. Because of this skillset, I provide valuable feedback on any new projects so that we can further delight the customer.</p>
                    </div>

                    <image id="workchat2" class="" src="typing.gif"></image>

                    <div id="workchat3" class="bubble bubbleClient">
                        <p> Overall, I'm an easy going guy. A lot of my time is spent learning new things. Particularly in relation to front end web development. </p>
                    </div>

                    <image id="workchat4" class="" src="typing.gif"></image>

                    <div id="workchat5" class="bubble bubbleClient">
                        <p>I'm always looking for new oppportunities to improve and grow. So if you know of anything, let me know! </p>
                    </div><br>

                    <div id="workchat6" class="bubble bubbleUser">
                        <p> What's the best way to reach you? </p>
                        <a href="#contactchat1"><button onclick="visibility3(); togglerun3();">Deliver</button></a>
                    </div>
                </div><br>

                <div id="abrakadabra3" class="">
                    <div id="contactchat1" class="bubble bubbleClient">
                        <p>Just send me over your name, email, phone and maybe even a message and I'll make sure to get back to you! </p>
                    </div> <br>

           


                    <div id="contactchat2" class="bubble bubbleUser">
                    <form>
                            <p>Sure thing!</p>
                            <p>Name: </p><input type="text" name="nametext" id="nametext"><br>
                            <p>Phone: </p><input type="text" name="phonetext" id="phonetext"><br>
                            <p>Email: </p><input type="text" name="emailaddress" id="emailaddress"><br>
                            <p>Message: </p><input type="textarea" name="messagetext" id="messagetext"><br>
                    
                        </form>        
                             <button onclick="togglerun4(); visibility4();">Send</button>
                    </div>







                    <br>
                    <div id="abrakadabra4" class="">
                        <div id="lastchat1" class="bubble bubbleClient">
                            <p>Thanks <span id="display"></span>, I have to take off for now. If you still want to learn
                                more about me, check out my <a href="about.php">Resume Site</a></p>
                        </div>
                    </div>
                    <br><br>
                    <br>

                </div>













            </div>

        </div>
    </div>


</body>

</html>