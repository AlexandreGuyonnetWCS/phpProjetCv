<?php
if (isset($_POST['id'])) echo $_POST['id'];
?>

<<<<<<< HEAD
<!-- <div id="alert">
        <a href="#">fermer</a>
        <h1>alert</h1>
        Hello <?php echo $_POST['fname'] ?> May the force be with you
<<<<<<< HEAD
    </div>
    <div id="getintouch">
<<<<<<< HEAD
=======
    </div> -->
=======
>>>>>>> FEAT/jf
<section id="contact">
>>>>>>> b9bfb80db1476da33a689ca116d6d0508c6eca1c

    <h2>Get in touch</h2>
    <div id="alert">
        <a href="#header">fermer</a>
        <img src="./assets/images/yoda.png">;
        Hello <?php echo $_POST['fname'] ?> May the force be with you
    </div>

    <div id="getintouch">
        <div class="form">
            <form action="#alert" method="post">
                <label for="fname">First name</label>
                <input type="text" id="fname" name="fname" placeholder="Name">
                <label for="lname">Last name</label>
                <input type="text" id="lname" name="lname" placeholder="Surname">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="@">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Your message"></textarea>
                <input class="bouton" type="submit" value="Submit">
        </div>
=======
        <form action="" method="post"> 
            <div class="form">
                <label for="fname">First name</label> 
                <input type="text" id="fname" name="fname" placeholder="Name">
                <label for="lname">Last name</label>  
                <input type="text" id="lname" name="lname" placeholder="Surname">  
                <label for="email">E-mail</label> 
                <input type="email" id="email" name="email" placeholder="@">
                <label for="message">First name</label>
                <textarea id="message" name="message" placeholder="Your message"></textarea>
                <input class="bouton" type="submit" value="Submit">
            </div>
>>>>>>> FEAT/contact
        </form>
    </div>
    <div class="contact">
        <div class="callme">
            <div class="image">
                <div><img src="assets/images/phone.png" alt="Call me"></div>
            </div>
            <div class="text">
                <div>
                    <h3>Call me</h3>
                </div>
                <div>
                    <p>800-5-5-21-1980</p>
                </div>
            </div>
        </div>
        <div class="contactme">
            <div class="image">
                <div><img src="assets/images/email.png" alt="Contact me"></div>
            </div>
            <div class="text">
                <div>
                    <h3>Contact me</h3>
                </div>
                <div>
                    <p>darth.vader@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="findme">
            <div class="image">
                <div><img src="assets/images/map.png" alt="Find me"></div>
            </div>
            <div class="text">
                <div>
                    <h3>Location</h3>
                </div>
                <div>
                    <p>Death star - Level1</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>