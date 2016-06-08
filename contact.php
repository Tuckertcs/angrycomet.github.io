<!DOCTYPE html>
<html>
    <!-- file:///C:/Users/tucke/Documents/GitHub/angrycomet.github.io/index.html -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Angry Comet</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="contact-form.css">
    </head>
    <body>
        <!-- Navigation Bar -->
        <div class="navBarDiv">
            <ul>
                <li><a href="index.html"><img class="headerLogo" src="logo.png"></a></li>
                <li><a href="index.html">Home</a></li>
                <div class="dropDown">
                    <li><a href="#">Full Game Tutorials</a></li>
                    <div class="dropDownContent">
                        <a href="top-down-rpg.html">Top Down RPG</a>
                    </div>
                </div>
                <div class="dropDown">
                    <li><a href="#">Feature Tutorials</a></li>
                    <div class="dropDownContent">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <!--Body -->
        <h1 class="bodyH1"><span class="coloredLeftLine">|</span>Contact Me</h1>
        <div class="contactPageDiv">
            <div class="floatLeft">
                <h2>Twitter and Youtube</h2>
                <div class="form2">
                    <a href="https://twitter.com/Tuckertcs">Twitter</a>
                    <br>
                    <br>
                    <a href="https://www.youtube.com/channel/UCSSe-BOt8E78f1zjlfd5xMA/featured">Youtube</a>
                </div>
            </div>
            <div class="floatLeft">
                <h2>Email</h2>
                <form class="contactForm" action="MAILTO:tucker.sandin@gmail.com" method="post">

                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="Name: " />
                    </div>
                    <div>
                        <label for="mail">Email:</label>
                        <input type="email" id="mail" name="Email: " />
                    </div>
                    <div>
                        <label for="msg">Message:</label>
                        <textarea id="msg" name="Message:"></textarea>
                    </div>

                    <div class="button">
                        <button type="submit">Send your message</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>