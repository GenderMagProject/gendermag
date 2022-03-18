<?php $PAGE_ID='personas'; ?>
<?php include('header.php'); ?>


<div class="col-md-12">

        <h1>Customize "Abi (Abigail/Abishek)"</h1>

         <i><b><p style="color: red; ">* Update the blue text as desired. Produces a printout (or save-as pdf) of your customized persona "Abi (Abigail/Abishek)"</p></b></i>


          <h3>Preferred Pronoun</h3>

            <div class="row">

              <div class="form-group col-md-2">
                <label>Subjective Pronoun</label>
                <input class="persona-input form-control form-control-sm" id="Nouneip" value="she" oninput="Noune()">
                <small id="pronounHelp" class="form-text text-muted">(e.g. he,she,ze)</small>

              </div>

              <div class="form-group col-md-2">
                <label>Object Pronoun</label>
                <input class="persona-input form-control form-control-sm" id="Object" value="her" oninput="objpro()">
                <small class="form-text text-muted">(e.g. him,her,hir)</small>
              </div>

              <div class="form-group col-md-2">
                 <label>Possessive Adjective</label>
                 <input class="persona-input form-control form-control-sm" id="Pos.adj" value="her" oninput="possadj()">
                 <small class="form-text text-muted">(e.g. his,her,hir)</small>

              </div>

              <div class="form-group col-md-2">
                 <label>Possessive Pronoun</label>
                 <input class="persona-input form-control form-control-sm"  id="poss.Noune" value="hers" oninput="posspro()">
                 <small class="form-text text-muted">(e.g. his,hers,hirs)</small>
              </div>

              <div class="form-group col-md-2">
                <label>Reflexive</label>
                 <input class="persona-input form-control form-control-sm" id="ref" value="herself" oninput="Reflexive()">
                 <small class="form-text text-muted">(e.g. himself,herself,hirself)</small>
              </div>

            </div>
            <hr>

    <h3>About Your Persona</h3>
     <div class = "col-md-12 row" >


        <div class="col-md-3 form-group">
            <ul>
                <li><input class="persona-input form-control form-control-sm" type="text" id="year" value="28 years old" oninput="yearinput()"></li>
                <li><input class="persona-input form-control form-control-sm" type="text" id="emp" value="Employed as an Accountant" oninput="empinput()">
                </li>
                <li><input class="persona-input form-control form-control-sm" type="text" id="place" value="Lives in Cardiff, Wales" oninput="placeinput()">
                </li>
            </ul>
       </div>
       <form class="form-inline col-md-9">
            <div class="form-group col-md-12">
                <textarea class="form-control persona-input col-md-4" rows="6" id="Para1" oninput="paraone()">Abi has always liked music. When she is on her way to work in the morning, she listens to music that spans a wide variety of styles. But when she arrives at work, she turns it off, and begins her day by...
                </textarea>

                <small class="col-md-4">scanning all <span id="Pos.adjin1">her</span>emails first to get an overall picture before answering any of them.</small>

                <textarea class="form-control persona-input col-md-4" rows="6" id="Para2" oninput="paratwo()">(This extra pass takes time but seems worth it.) Some nights she exercises or stretches, and sometimes she likes to play computer puzzle games like Sudoku
                </textarea>
             </div>
        </form>
     </div>

     <h3>Background and Skills</h3>
     <form class = "form-inline col-md-12 persona-border ">
            <div class="form-group col-md-12">
              <textarea class="col-md-9 persona-input form-control form-control-sm" id="backparaone" oninput="backparaoneip()" value="">Abi works as an accountant. She is comfortable with the technologies she uses regularly, but she just moved to this employer 1 week ago, and...</textarea>
              <small><u>their software systems are new to <span id="obj.pro_inputbox">her</span>.</u></small>
            </div>

            <div class="form-group col-md-12">
              <small>Abi says <span id="Nouneop_inputbox1">she</span>'s a "numbers person",</small>
              <textarea class="col-md-4 persona-input form-control form-control-sm" id="backparatwo" oninput="backparatwoip()" value=""> but she has never taken any computer programming or IT systems classes.</textarea>

              <small><span id="Nouneop_inputbox">She</span><u> likes Math</u> and knows how to think with numbers.</small>
              <textarea class="col-md-3 persona-input form-control form-control-sm" id="backparathree" oninput="backparathreeip()" value=""> She writes and edits spreadsheet formulas in her work.</textarea>
            </div>

             <div class="form-group col-md-12">
               <textarea class=" col-md-1 persona-input form-control form-control-sm" id="backparafour" oninput="backparafourip()" value="">In her free time,</textarea>
               <small><span id="Nouneopip3">she</span> also<u> enjoys working with numbers and logic.</u></small>
               <textarea class="col-md-5 persona-input form-control form-control-sm" id="backparafive" oninput="backparafiveip()" value="">She especially likes working out puzzles and puzzle games, either on paper or on the computer.</textarea>
             </div>
     </form>

    <br>
    <hr>
    <center><h2>Print preview below</h2></center>
    <hr>

    <div id="printbody">
         <h1 style="margin-top: 5px;margin-bottom: 5px; color: #ff0000;">Abi (Abigail/Abishek) </h1>
     <div class="row col-md-12">
        <div class="col-md-2" >
          <center><img style="width: 10em; hieght: auto;" src = "/images/multiAbby-2017-0911.png" alt = "Abi Jones"/></center>
        </div>

        <div class="col-md-10">
          <div class="row col-md-12">
            <div class="col-md-3">
                    <li class="col-md-12"><span id="yearoutput" style="color: #1E57C8">28 Years Old</span></li>
                    <li class="col-md-12"><span id="empoutput" style="color: #1E57C8">Employed as an Accountant</span></li>
                    <li class="col-md-12"><span id="placeoutput" style="color: #1E57C8">Lives in Cardiff, Wales</span></li>
            </div>
            <div class="col-md-8">
                    <p id="para1output" style="margin-bottom: 0px;margin-top: 0px; display: inline; color: #1E57C8;">Abi has always liked music. When she is on her way to work in the morning, she listens to music that spans a wide variety of styles. But when she arrives at work, she turns it off, and begins her day by </p><i> scanning all <span id="Pos.adjin2">her</span> emails first to get an overall picture before answering any of them.</i><p id="para2output" style="margin-bottom: 0px;margin-top: 0px;display: inline; color: #1E57C8;"> (This extra pass takes time but seems worth it.) Some nights she exercises or stretches, and sometimes she likes to play computer puzzle games like Sudoku</p>
            </div>
          </div>

<br>
          <div class = "row col-md-12 knowledge_block">
             <h3>Background and Skills</h3>
             <ul style="margin-bottom: 5px;margin-top: 5px;">
                 <p id="backparaoneop" style="margin-top: 5px;margin-bottom: 15px; display: inline; color: #1E57C8;">Abi works as an accountant. She is comfortable with the technologies she uses regularly,but she just moved to this employer 1 week ago,and </p>
                 <span style="color: red"><u>their software systems are new to <span id="obj.pro_opbox">her</span>.</u></span>
                 <p id="backparatwoop" style="margin-top: 5px;margin-bottom: 5px; display: inline; color: #1E57C8;">Abi says <span id="Nouneop_inputbox2">she</span>'s a <span style="color: black;">"numbers person"</span>, but she has never taken any computer programming or IT systems classes.</p>
                 <span id="Nouneop_inputbox3" style="text-transform: capitalize;">she</span>&nbsp;<span style="color: red;"><u>likes Math</u></span> and knows how to think with numbers.
                 <p id="backparathreeop" style="display: inline; color: #1E57C8;"> She writes and edits spreadsheet formulas in her work.</p>
                 <p id="backparafourop" style="margin-top: 5px;margin-bottom: 1px; display: inline; color: #1E57C8;">In her free time, </p> <span id="Nouneop_inputbox4">she</span> also <span style="color: red"><u>enjoys working with numbers and logic.</u>&nbsp;</span>
                 <p id="backparafiveop" style="display: inline; color: #1E57C8;">she especially likes working out puzzles and puzzle games, either on paper or on the computer.</p>
             </ul>
          </div>
        </div>


     </div>
<br>


     <div class = "col-md-12 motivation_block">
        <h3>Motivations and Attitudes</h3>
      <div class = "row col-md-12">
        <div class = "col-md-4">
            <i><b>Motivations</b></i>: Abi uses technologies <span style="color: red"><u>to accomplish <span id="Pos.adj1">her</span> tasks.</u></span>&nbsp;<span id="Nouneopmo" style="text-transform: capitalize;">she</span> learns new technologies if and when <span id="Nouneopmo2"> she</span> needs to, but prefers to use methods <span id="Nouneopmo3">she</span> is <span style="color: red"><u>already familiar and comfortable with, to keep <span id="Pos.adj2">her</span> focus</u></span> on the tasks <span id="Nouneopmo4">she</span> cares about.
        </div>

        <div class = "col-md-4">
            <i><b>Computer Self-Efficacy</i></b>: Abi has <span style="color: red"><u>lower self confidence than <span id="Pos.adj3">her</span> peers about doing unfamiliar computing tasks.</u></span> If problems arise with <span id="Pos.adj4">her</span> technology, <span id="Nouneopcs">she</span> often <span style="color: red"><u>blames <span id="Reflexive">herself</span> for these problems.</u></span> This affects whether and how <span id="Nouneopcs1">she</span> will persevere with a task if technology problems have arisen.
        </div>

        <div class = "col-md-4">
            <b><i>Attitude toward Risk</i></b>: Abi's life is a little complicated and <span id="Nouneopar">she</span> <span style="color: red"><u>rarely has spare time.</u></span> So <span id="Nouneopar1">she</span> is <span style="color: red"><u>risk averse about using unfamiliar technologies that might need <span id="obj.pro">her</span> to spend extra time</u></span> on them, even if the new features might be relevant. <span id="Nouneopar2" style="text-transform: capitalize;">she</span> instead performs tasks using familiar features, because they're more predictable about what <span id="Nouneopar3">she</span> will get from them and how much time they will take.
        </div>
      </div>
     </div>

     <br>

     <div class = "col-md-12 attitude_block">
        <h3>Attitude to Technology</h3>
        <div class="row col-md-12">
          <div class = "col-md-6">
          <i><b>Information Processing Style</b></i>: Abi tends towards a comprehensive information processing style when <span id="Nouneopip">she</span> needs to gather more information. So, instead of acting upon the first option that seems promising, <span id="Nouneopip1">she</span> <span style="color: red"><u>gathers information comprehensively to try to form a complete understanding of the problem before trying to solve it.</u></span> Thus, <span id="Pos.adj5">her</span> style is "burst-y"; first <span id="Nouneopip2">she</span> reads a lot, then <span id="Nouneopip4">she</span> acts on it in a batch of activity.
          </div>

          <div class = "col-md-6">
              <i><b>Learning: by Process vs. by Tinkering </b></i>: When learning new technology, Abi leans toward <span style="color: red"><u>process-oriented learning,</u></span> e.g., tutorials, step-by-step processes, wizards, online how-to videos, etc. <span style="color: red"><u><span style="text-transform: capitalize;" id="Nouneoppt">she</span> doesn't particularly like learning by tinkering with software </u></span>(i.e., just trying out new features or commands to see what they do), but when <span id="Nouneoppt1">she</span> does tinker, it has positive effects on <span id="Pos.adj6">her</span> understanding of the software.
          </div>
        </div>
     </div>
     <br>
     <div ><small><sup>1</sup>Abi represents users with motivations/attitudes and information/learning styles similar to hers. For data on men and women similar to and different from Abi, see<br>
        <a href="http://gendermag.org/foundations.php" target="_blank">http://gendermag.org/foundations.php</a>
        </small>
     </div>

</div>
<hr>
</br>
         <!-- <i><b><p style="color: red;margin-top: 0px;margin-bottom: 0px; ">* For best results print in "Portrait" Layout</p></b></i> -->
    <center><button class="btn btn-primary" type="button" onclick="printDiv('printbody')">Print Abi persona</button></center>
</br>
</div>



<?php include('footer.php'); ?>
