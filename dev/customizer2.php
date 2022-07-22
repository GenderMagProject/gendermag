<?php $PAGE_ID='personas'; ?>
<?php $CURRENT_PERSONA='Abi'; // default persona ?>
<?php include('header.php'); ?>
<?php 
if (isset($_GET['persona'])) { 
    $personavar = $_GET['persona'];
    if($personavar=='Abi') { $CURRENT_PERSONA = 'Abi'; } // whitelist
    if($personavar=='Pat') { $CURRENT_PERSONA = 'Pat'; } // whitelist
    if($personavar=='Tim') { $CURRENT_PERSONA = 'Tim'; } // whitelist
} ?>
<?php
$data = array(
    'Abi' => array(
        'name' => 'Abi',
        'longname' => 'Abi (Abigail/Abishek)',
        'fullname' => 'Abi Jones',
        'facet_mot' => 'Abi uses technologies <span style="color: red"><u>to accomplish <span class="poadoutput">her</span> tasks.</u></span> <span class="nounoutput" style="text-transform: capitalize;">she</span> learns new technologies if and when <span class="nounoutput"> she</span> needs to, but prefers to use methods <span class="nounoutput">she</span> is <span style="color: red"><u>already familiar and comfortable with, to keep <span class="poadoutput">her</span> focus</u></span> on the tasks <span class="nounoutput">she</span> cares about.',
        'facet_cse' => 'Abi has <span style="color: red"><u>lower self confidence than <span class="poadoutput">her</span> peers about doing unfamiliar computing tasks.</u></span> If problems arise with <span class="poadoutput">her</span> technology, <span class="nounoutput">she</span> often <span style="color: red"><u>blames <span class="refloutput">herself</span> for these problems.</u></span> This affects whether and how <span class="nounoutput">she</span> will persevere with a task if technology problems have arisen.',
        'facet_atr' => 'Abi\'s life is a little complicated and <span class="nounoutput">she</span> <span style="color: red"><u>rarely has spare time.</u></span> So <span class="nounoutput">she</span> is <span style="color: red"><u>risk averse about using unfamiliar technologies that might need <span class="obproutput">her</span> to spend extra time</u></span> on them, even if the new features might be relevant. <span class="nounoutput" style="text-transform: capitalize;">she</span> instead performs tasks using familiar features, because they\'re more predictable about what <span class="nounoutput">she</span> will get from them and how much time they will take.',
        'facet_ips' => 'Abi tends towards a comprehensive information processing style when <span class="nounoutput">she</span> needs to gather more information. So, instead of acting upon the first option that seems promising, <span class="nounoutput">she</span> <span style="color: red"><u>gathers information comprehensively to try to form a complete understanding of the problem before trying to solve it.</u></span> Thus, <span class="poadoutput">her</span> style is "burst-y"; first <span class="nounoutput">she</span> reads a lot, then <span class="nounoutput">she</span> acts on it in a batch of activity.',
        'facet_ls' => 'When learning new technology, Abi leans toward <span style="color: red"><u>process-oriented learning,</u></span> e.g., tutorials, step-by-step processes, wizards, online how-to videos, etc. <span style="color: red"><u><span style="text-transform: capitalize;" class="nounoutput">she</span> doesn\'t particularly like learning by tinkering with software </u></span>(i.e., just trying out new features or commands to see what they do), but when <span class="nounoutput">she</span> does tinker, it has positive effects on <span class="poadoutput">her</span> understanding of the software.',
        'background' => 'Abi works as an accountant and is comfortable with the technologies Abi uses regularly. Abi just moved to this employer 1 week ago, and their software systems are new to. Abi writes and edits spreadsheet formulas for work. During free time, Abi also enjoys working with numbers and logic. Abi especially likes working out puzzles and puzzle games, either on paper or on the computer. ',
        'add_background'=>'Abi likes scanning all <span class="poadoutput">her</span> emails first to get an overall picture before answering any of them.',
        'ent_add_back'=>'Abi has always liked music. While traveling to work in the morning, Abi listens to music from a wide variety of styles. Some nights Abi exercises or stretches, and sometimes likes to play computer puzzle games like Sudoku. ',
        'pronoun_1'=>'she',
        'pronoun_2'=>'her',
        'pronoun_3'=>'hers',
        'pronoun_4'=>'herself'

      
    ),
    'Pat' => array(
        'name' => 'Pat',
        'longname' => 'Pat (Patricia/Patrick)',
        'fullname' => 'Patricia',
        'facet_mot' => 'Pat learns new technologies when <span class="nounoutput">ze</span> needs to, but <span class="nounoutput">ze</span> <span style="color: red"><u>doesn\'t spend <span class="poadoutput">hir</span> free time exploring technology </u></span> or exploring obscure functionality of programs and devices that<span class="nounoutput">ze</span> uses. <span class="nounoutput" style="text-transform:capitalize;">ze</span> tends to use methods <span class="nounoutput">ze</span> is already familiar and comfortable with to achieve <span class="poadoutput">hir</span> goals.',
        'facet_cse' => 'Pat has <span style="color: red"><u>medium computer self-efficacy about doing unfamiliar computing tasks.</u></span> If problems arise with <span class="poadoutput">hir</span> technology, <span class="nounoutput">ze</span> will keep on trying to figure out how to achieve what <span class="nounoutput">ze</span> has set out to do for quite awhile; <span class="nounoutput">ze</span> doesn\'t give up right away when computers or technology present a challenge to <span class="obproutput">hir</span>.',
        'facet_atr' => 'Pat is busy and so <span class="nounoutput">ze</span> rarely has spare time. So Pat is <span style="color: red"><u>risk averse and worries that <span class="nounoutput">ze</span> will spend time on them and not get any benefits from doing so. </u></span> <span class="nounoutput">Ze</span> prefers to perform tasks using familiar features, because they\'re more predictable about what <span class="nounoutput">ze</span>  will get from them and how much time they\'ll take.',
        'facet_ips' => 'Pat leans towards a comprehensive information processing style when <span class="nounoutput">ze</span> needs to gather information to problem-solve. So, instead of acting upon the first option that seems promising, <span class="nounoutput">ze</span> <span style="color: red"><u>first gathers information comprehensively to try to form a complete understanding of the problem before trying to solve it.</u></span>Thus, <span class="poadoutput">hir</span> style is "burst-y"; first <span class="nounoutput">ze</span> reads a lot, then <span class="nounoutput">ze</span> acts on it in a batch of activity.',
        'facet_ls' => 'When Pat sees a need to learn new technology, <span class="nounoutput">ze</span> <span style="color: red"><u>does so by trying out new features</u></span> or commands to see what they do and to understand how the software works. When <span class="nounoutput">ze</span> does this, <span class="nounoutput">ze</span> <span style="color: red"><u>does so purposefully; that is, <span class="nounoutput">ze</span> reflects on each bit of feedback <span class="nounoutput">ze</span> gets </u></span>along the way to understand how the feature might benefit <span class="obproutput">hir</span>. Eventually, if <span class="nounoutput">ze</span> doesn\'t think it will get <span class="obproutput">hir</span> closer to what <span class="nounoutput">ze</span> wants to achieve, <span class="nounoutput">ze</span> will <span style="color: red"><u>revert back to ways that <span class="nounoutput">ze</span> already knows will work.</u>',
        'background' => 'Pat works as an accountant and is comfortable with the technologies Pat uses regularly. Pat just moved to this employer 1 week ago, and their software systems are new to . Pat writes and edits spreadsheet formulas for work. During free time, Pat also enjoys working with numbers and logic. Pat especially likes working out puzzles and puzzle games, either on paper or on the computer.',
         'add_background'=>'Pat likes scanning all <span class="poadoutput">hir</span> emails first to get an overall picture before answering any of them.',
         'ent_add_back'=>'Pat loves public transportation and knows at least three routes to get to work from home. Some nights Pat exercises or stretches, and sometimes Pat likes to play computer puzzle games like Sudoku.',
         'pronoun_1'=> 'ze',
         'pronoun_2'=>'hir',
         'pronoun_3'=>'hirs',
         'pronoun_4'=>'hirself'
        ),
    'Tim' => array(
        'name' => 'Tim',
        'longname' => 'Tim (Timothy/Timara)',
        'fullname' => 'Timothy',
        'facet_mot' => 'Tim <span style="color: red"><u>likes learning all the available functionality on all of <span class="poadoutput">his</span> devices</u></span> and computer systerms <span class="nounoutput">he</span> uses, even when it may not be necessary to help <span class="obproutput">his</span> achieve <span class="poadoutput">his</span> tasks. <span class="nounoutput">he</span> sometimes finds <span class="refloutput">himself</span> exploring functions of one of <span class="poadoutput">his</span> gadgets for so long that <span class="nounoutput">he</span> loses sight of what <span class="nounoutput">he</span> wanted to do with it to begin with.',
        'facet_cse' => 'Tim has <span style="color: red"><u>high confidence in <span class="poadoutput">his</span> abilities with technology,</u></span> and thinks <span class="nounoutput">he</span>\'s better than the average person at learning about new features. <span style="color: red"><u>If <span class="nounoutput">he</span> can\'t fix the problem, <span class="nounoutput">he</span> blames it on the software vendor. </u></span> It\'s not <span class="poadoutput">his</span> fault if <span class="nounoutput">he</span> can\'t get it to work.',
        'facet_atr' => 'Tim <span style="color: red"><u>doesn\'t mind talking risks using features of technology.</u></span> that haven\'t been proven to work. When <span class="nounoutput">he</span> is presented with challenges because <span class="nounoutput">he</span> has tried a new way that doesn\'t work, it doesn\'t changes <span class="poadoutput">his</span> attitudes toward technology.',
        'facet_ips' => 'Tim leans towards a selective information processing style or "depth first" approach. That is, <span class="nounoutput">he</span> usually <span style="color: red"><u>delves into the first promising option, pursues it, and if it doesn\'t work out <span class="nounoutput">he</span> backs out </u></span>and gathers a bit more information until <span class="nounoutput">he</span> sees <span style="color: red"><u>another option to try. </u></span>Thus, <span class="poadoutput">his</span> style is very incremental.',
        'facet_ls' => 'Whenever Tim uses new technology, <span class="nounoutput">he</span> tries to construct <span class="poadoutput">his</span> own understanding of how the software works internally. <span class="nounoutput" style="text-transform: capitalize;">He</span> <span style="color: red"><u>likes tinkering and exploring</u></span> the menu items and functions of the software in order to build that understanding. Sometimes <span class="nounoutput">he</span> plays with features too much, losing focus on what <span class="nounoutput">he</span> set out to do originally, but this helps <span class="nounoutput">him</span> gain better understanding of the software.',
        'background' => 'Tim works as an accountant and is comfortable with the technologies Tim uses regularly. Tim just moved to this employer 1 week ago, and their software systems are new to. Tim writes and edits spreadsheet formulas for work. During free time, Tim also enjoys working with numbers and logic. Tim especially likes working out puzzles and puzzle games, either on paper or on the computer.',
         'add_background'=>'Tim starts work with answering emails one by one. Sometimes this backfires, if there is a second related message <span class="nounoutput">he</span> hasn\'t read yet, but <span class="nounoutput">he</span> doesn\'t mind sending a follow-up email.',
         'ent_add_back'=>'Tim loves public transportation. Tim knows several routes to get to work from home and always exploring ways to optimize trips into the office.Some nights Tim plays computer games with some online friends. ',
         'pronoun_1'=>'he',
         'pronoun_2'=>'him',
         'pronoun_3'=>'his',
         'pronoun_4'=>'himself'
    )
);
$persona_name = $data[$CURRENT_PERSONA]['name'];
$persona_longname = $data[$CURRENT_PERSONA]['longname'];
$persona_facet_mot = $data[$CURRENT_PERSONA]['facet_mot'];
$persona_facet_cse = $data[$CURRENT_PERSONA]['facet_cse'];
$persona_facet_atr = $data[$CURRENT_PERSONA]['facet_atr'];
$persona_facet_ips = $data[$CURRENT_PERSONA]['facet_ips'];
$persona_facet_ls = $data[$CURRENT_PERSONA]['facet_ls'];
$persona_background = $data[$CURRENT_PERSONA]['background'];
$persona_add_background = $data[$CURRENT_PERSONA]['add_background'];
$persona_ent_add_background = $data[$CURRENT_PERSONA]['ent_add_back'];

$persona_pronoun1 = $data[$CURRENT_PERSONA]['pronoun_1'];
$persona_pronoun2 = $data[$CURRENT_PERSONA]['pronoun_2'];
$persona_pronoun3 = $data[$CURRENT_PERSONA]['pronoun_3'];
$persona_pronoun4 = $data[$CURRENT_PERSONA]['pronoun_4'];


$default_persona_age = '28 years old';
$default_persona_emp = 'Employed as an Accountant';
$default_persona_place = 'Lives in Cardiff, Wales';
?>

<!-- DROPDOWN PERSONA SELECTION -->

<div class="col-md-12" id= "persona">
  <div class="persona-generator">
    <h1>Customize
      <select id="persona-name-dropdown" onchange="location = this.options[this.selectedIndex].value;">
      <?php
      foreach ($data as $persona) {
      $name = $persona['name'];
      $longname = $persona['longname'];
      $selected = '';
      if ($CURRENT_PERSONA==$name) { $selected='selected'; }
      echo "<option value=\"?persona=$name\" $selected>$longname</option>";
      } ?>
      </select>
      <br>
    </h1>

<!-- INSTRUCTIONS -->

    <div class="red-box persona-input-border">
      <h5>Instructions</h5>
      <ol>
        <li>Update/Change the text-boxes as desired.</li>
        <li>When finished, click "Print Persona" at the bottom of the page, to produce a printout (or save-as pdf) of your customized persona</li>
      </ol>
    </div>
    </br>
    </br>
    </br>

<!-- PRONOUNS CUSTOMIZATION -->

    <div id="<?php echo $persona_name; ?>" class="persona-section">
      <div class="blue-box persona-input-border">
        <h3><?php echo $persona_name; ?>'s Pronouns</h3>
        <div class="row">
          <div class="form-group col-md-2">
            <label>Subject Pronoun</label>
            <input class="persona-input form-control form-control-sm" id="Nouneip" value="<?php echo $persona_pronoun1; ?>" oninput="Noune()">
            <small id="pronounHelp" class="form-text text-muted">(e.g. he,she,ze)</small>
          </div>
          <div class="form-group col-md-2">
            <label>Object Pronoun</label>
            <input class="persona-input form-control form-control-sm" id="Objpro" value="<?php echo $persona_pronoun2; ?>"  oninput="objpro()">
            <small class="form-text text-muted">(e.g. him,her,hir)</small>
          </div>
          <div class="form-group col-md-2">
            <label>Possessive Adjective</label>
            <input class="persona-input form-control form-control-sm" id="Pos.adj" value="<?php echo $persona_pronoun2; ?>"  oninput="possadj()">
            <small class="form-text text-muted">(e.g. his,her,hir)</small>
          </div>
          <div class="form-group col-md-2">
            <label>Possessive Pronoun</label>
            <input class="persona-input form-control form-control-sm"  id="Pos.pro" value="<?php echo $persona_pronoun3; ?>"  oninput="posspro()">
            <small class="form-text text-muted">(e.g. his,hers,hirs)</small>
          </div>
          <div class="form-group col-md-2">
            <label>Reflexive</label>
            <input class="persona-input form-control form-control-sm" id="ref" value="<?php echo $persona_pronoun4; ?>"  oninput="Reflexive()">
            <small class="form-text text-muted">(e.g. himself,herself,hirself)</small>
          </div>
        </div>
      </div>
      <hr>
  
      <h3>About Your <?php echo $persona_name; ?></h3>
        <div class = "col-md-12 row" >
          <div class="col-md-3 form-group">
            <div>
              <label>Age</label>
              <input class="persona-input form-control form-control-sm" type="text" id="year" value="<?php echo $default_persona_age; ?>" oninput="yearinput()" >
            </div>
            <br>
            <div>
              <label>Role</label>
              <input class="persona-input form-control form-control-sm" type="text" id="emp" value="<?php echo $default_persona_emp; ?>" oninput="empinput()">
            </div>
            <br>
            <div>
              <label>Location</label>
              <input class="persona-input form-control form-control-sm" type="text" id="place" value="<?php echo $default_persona_place; ?>" oninput="placeinput()">
            </div>
          </div>
      </div>
      <form>
        <div>
          <br/>
          <label>Additional background information about <span id="persona-name"><?php echo $persona_name; ?>: </span></label>
          <p class="permanent-text"><span id="persona-name"><?php echo $persona_add_background;?></span></p>
          <textarea class="form-control persona-input" rows="6" id="Para1" oninput="paraone()">Example:<?php echo $persona_ent_add_background; ?> </textarea>
        </div>
      </form>
      <br><br>
      <div class="blue-box persona-input-border">
        <h3><?php echo $persona_name; ?>'s Background and Skills</h3>
        <form>
          <div>
            <br/>
            <p class="permanent-text">The technologies at <?php echo $persona_name; ?>'s new employer are new to <span class="obproutput"><?php echo $persona_pronoun2; ?></span>. <?php echo $persona_name; ?> likes math and working with logic. <span class="nounoutput" style="text-transform: capitalize;"> <?php echo $persona_pronoun1; ?></span> considers <span class="refloutput"> <?php echo $persona_pronoun4; ?></span> a numbers person.</p>
            <label>Additional background and skills information</label>
            <textarea class="form-control persona-input" rows="3"  id="backparaone" oninput="backparaoneip()">Example: <?php echo $persona_name; ?> works as an accountant and is comfortable with the technologies <?php echo $persona_name; ?> uses regularly. <?php echo $persona_name; ?> just moved to this employer 1 week ago, and their software systems are new to . <?php echo $persona_name; ?> writes and edits spreadsheet formulas for work. During free time, <?php echo $persona_name; ?> also enjoys working with numbers and logic. <?php echo $persona_name; ?> especially likes working out puzzles and puzzle games, either on paper or on the computer.</textarea>
          </div>
        </form>
      </div>
      <br>
      <br>


<!-- PRINT PREVIEW -->

      <center><h2>Print preview below</h2></center>
      <hr>
      <div id="printbody">
        <h1 style="margin-top: 5px;margin-bottom: 5px; color: #ff0000;"><?php echo $persona_longname; ?></h1>
        <div class="row col-md-12">
          <div class="col-md-2" >
            <center><img style="width: 10em; height: auto;" src = "/images/multi<?php echo $persona_name; ?>" alt = "<?php echo $persona_fullname; ?>"/></center>
          </div>
          <div class="col-md-10">
            <div class="row col-md-12">
              <div class="col-md-3">
                  <li class="col-md-12"><span id="yearoutput"><?php echo $default_persona_age; ?></span></li>
                  <li class="col-md-12"><span id="empoutput"><?php echo $default_persona_emp; ?></span></li>
                  <li class="col-md-12"><span id="placeoutput"><?php echo $default_persona_place; ?></span></li>
              </div>
              <div class="col-md-8">
                <p><span id="para1output"><?php echo $persona_ent_add_background;?></span> <?php echo $persona_add_background; ?></p> 
              </div>
            </div>
            <div class="row col-md-12 knowledge_block">
              <h3>Background and Skills</h3>
              <ul style="margin-bottom: 5px;margin-top: 5px;">
                <p style="margin-top: 5px;margin-bottom: 15px; display: inline;">The technologies at <?php echo $persona_name; ?>'s new employer are new to <span class="obproutput"> <?php echo $persona_pronoun2; ?></span>. <?php echo $persona_name; ?> likes math and working with logic. <span class="nounoutput" style="text-transform: capitalize;"> <?php echo $persona_pronoun1; ?></span> considers <span class="refloutput"> <?php echo $persona_pronoun4; ?></span> a numbers person.</p>
                <p id="backparaoneop" style=""><?php echo $persona_background; ?> </p>
              </ul>
            </div>
          </div>
        </div>
        <br>
        <div class = "col-md-12 motivation_block">
          <h3>Motivations and Attitudes</h3>
          <div class = "row col-md-12">
            <div class = "col-md-4"><i><b>Motivations</b></i>: <?php echo $persona_facet_mot; ?></div>
            <div class = "col-md-4"><i><b>Computer Self-Efficacy</i></b>: <?php echo $persona_facet_cse; ?></div>
            <div class = "col-md-4"><b><i>Attitude toward Risk</i></b>: <?php echo $persona_facet_atr; ?></div>
          </div>
        </div>
        <br>
        <div class = "col-md-12 attitude_block">
          <h3>Attitude to Technology</h3>
          <div class="row col-md-12">
            <div class = "col-md-6"><i><b>Information Processing Style</b></i>: <?php echo $persona_facet_ips; ?></div>
            <div class = "col-md-6"><i><b>Learning: by Process vs. by Tinkering</b></i>: <?php echo $persona_facet_ls; ?></div>
          </div>
        </div>
        <br>
        <div>
          <small><sup>1</sup><?php echo $persona_name; ?> represents users with motivations/attitudes and information/learning styles similar to theirs. For more information, see <a href="http://gendermag.org/foundations.php" target="_blank">http://gendermag.org/foundations.php</a>
          </small>
        </div>
      </div>
    </div>
  </div>
  <hr>
  </br>
  <center><button class="btn btn-primary" type="button" onclick="printDiv()" target="_blank">Print Persona</button></center>
  </br>
</div>



<?php include('footer.php'); ?>



