<?php $PAGE_ID='method'; ?>
<?php include('header.php'); ?>

<!------------------------------------------------------->
<!-- page content starts here with the first two cards -->
<div class="col-md-12 row">
  <div class="col-md-12">
    <h2>The GenderMag Method</h2>

    <ul class="nav nav-tabs gm-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="what-tab" data-toggle="tab" href="#what" role="tab" aria-controls="what" aria-selected="true">What is it?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="how-tab" data-toggle="tab" href="#how" role="tab" aria-controls="how" aria-selected="false">How does it work?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="downloads-tab" data-toggle="tab" href="#downloads" role="tab" aria-controls="downloads" aria-selected="false">What to download...</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">


      <div class="tab-pane fade show active" id="what" role="tabpanel" aria-labelledby="what-tab">
        <br />
        <p>Although gender differences in a technological world receive significant research attention, much of this research and practice aims at how society and education can impact the success and retention of women in computer science. The possibility of gender biases <i>within</i> software, however, has received almost no attention. We hypothesize that the human problem-solving styles supported by software have strong gender biases, and further that addressing these gender biases can help problem solvers of any gender. Evidence from other fields and investigations in our own have significant evidence supporting this hypothesis.</p>
        <p>We are investigating gender biases in people's problem-solving experiences with software. We term this research topic "gender HCI" to reflect its focus on human-computer interaction (HCI) properties that take gender differences into account in the design of software.

        <p>The GenderMag Method is a <i>process</i> and <i>set of materials</i> to help with the process.  It enables software practitioners (e.g., developers, managers, UX professionals) <i>find</i> gender-inclusivity "bugs" in their software, and then <i>fix</i> the bugs they find.</p>

        <p>The core of the GenderMag Method is a gender-specialized cognitive walkthrough and a set of GenderMag personas that focus on five cognitive factors in problem-solving styles.</p>

	<iframe src="https://www.youtube.com/embed/YQwElUH1Wvs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>


      <div class="tab-pane fade" id="how" role="tabpanel" aria-labelledby="how-tab">
        <div class="col-md-12"><br />
          <h3>How GenderMag Works</h3>
          <p>Do steps 1-2 then repeat steps 3a-3e, as in the figure below, until the scenario is finished. For more details, see the video below (shows how to GenderMag using the tool), see the presentations and webinars (see blue navigation bar above) or download the kit (downloads tab just above).
          </p>
	  <div class="row col-md-12">
	    <div style="float: left;">
	      <IMG src="./Old_GM_Site/images/howGenderMagWorks.png" height="470">
	    </div>
	    <div style="float: right;">
	      <video  width="260" height="220" controls>
		<source src="./Videos/GenderMag Demonstration.mp4" type="video/mp4">
	      </video>
	    </div>
	  </div>
	  
        </div>
	
      </div>
      

      <div class="tab-pane fade" id="downloads" role="tabpanel" aria-labelledby="downloads-tab"><br />
        <h3>GenderMag Links and Downloads</h3>
	<ul>
	  1. <a href="https://docs.google.com/forms/d/1NXjpj7NSGuVScPdR9EJgzv-eeKM9-NOY4gP9B0Dpf4U/viewform?edit_requested=true" class="btn btn-primary uppercase">Download the Kit and Forms</a> (Latest version is May 2020. Older versions also downloadable.)
	  <br><br>
	  2. <a href="./custom_persona.php" class="btn btn-primary uppercase">Create or Download a Customizable Persona</a>
	  <br><br>
<!--	  3. Download the Session Forms: <a href="./Docs/GM_Form_v2_Subgoal.pdf" class="btn btn-primary uppercase">Subgoal Forms</a> and <a href="./Docs/GM_Form_v2_Action.pdf" class="btn btn-primary uppercase">Action Forms</a><br><br>
	  Old version of Forms: <a href="./Docs/oldForms-Subgoal.pdf" class="btn btn-primary uppercase">Subgoal Forms</a> and <a href="./Docs/oldForms-Action.pdf" class="btn btn-primary uppercase">Action Forms</a>
<-->
      </div>


    </div>





  </div>




		</div>

<?php include('footer.php'); ?>