<div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
        <div class="line line4"></div>
        <div class="line line5"></div>
        <br>
        <br>
        <div class="bordline portflex">
            <div class="picbox1"> <img id="show" onclick="showMe()" class="kiwipic" src="images/kiwihome.PNG" alt="kiwihome"> </div>
            <div id="noshow" onclick="showMe()" class="textbox">
                <p>We teamed up in groups to present, plan, and build a professional website on a near extinct species. We created a whole entire website to showcase and spread awareness of a certain endangered species. We did our website on the endangered kiwi birds of New Zealand. It explained everything from what they were about to where to donate and all in intricate detail. My page that I worked on specifically was the home page which had a very asthetic feel to it.</p>
            </div>
        </div>
        <div class="background portflex2">
            <div class="picbox2">
                <div class="timepic"> <img id="show2" onclick="showMe2()" src="images/timeconversion.PNG" class="timepicset" alt="timeconv"> </div>
                <div class="timemarg">
                    <h1 class="timeheader">Time Conversion Tool</h1>
                    <p class="timep alittleleft">This tool converts 12 hour to 24 hour time.</p>
                    <div class="alittleleft">
                        <form name="timeForm">
                            <label class="timep" for="hour">Hour</label>
                            <input id="hour" name="hour" type="text">
                            <label class="timep" for="minutes">Minutes</label>
                            <input id="minutes" name="minutes" type="text">
                            <select id="meridian" name="meridian">
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                            </select>
                            <input type="button" value="Convert" onClick="convertTime()"> </form>
                    </div>
                    <br>
                    <br>
                    <h2 class="timep alotleft" id="output">&nbsp;</h2> </div>
            </div>
            <div id="noshow2" onclick="showMe2()" class="textbox">
                <p>One of the things we created was a JavaScript time conversion script. What the script did was it converted any 12 hour time to 24 hour military time. It looked for certain specifics that are in a 12 hour time, such as 12 being greatest hour and AM and PM time meridiems, and converted them into their equivalent 24 hour times. This was also our first time learning how to implement JavaScript into HTML pages.</p>
            </div>
        </div>
        <div class="portflex">
            <div class="picbox3"> <img id="show3" onclick="showMe3()" class="flexpic" src="images/flexbox.PNG" alt="layer"> </div>
            <div id="noshow3" onclick="showMe3()" class="textbox">
                <p>This project turned all that we knew about aligning content around. This lesson taught us of a new more common and also well adopted new way of alignment called Flexbox. Using flexboxes, aligning content to the left or right, centering evenly, and using rows or columns all became super simple and easy to use. The only drawback was that it was just recently created, this meaning that older computers and browsers might not support it. Although now it is supported by over 97% of all global browsers and is the new name of the game. The only reason we needed to know the previous method, floats, was to still be able to understand older websites that have yet to transition.</p>
            </div>
        </div>
    </div>
    <script src="JavaScript/mobiledropdown.js"></script>
    <script src="JavaScript/buttons/mobilebuttons.js"></script>
    <script src="JavaScript/buttons/mobilebuttons2.js"></script>
    <script src="JavaScript/buttons/mobilebuttons3.js"></script>
    <script src="JavaScript/timeconverter.js"></script>