<?php 
/* Template Name: FAQ 
*/ 
get_header();

?>
<div class="innerTemplate FAQTemplate">
	<section class="innerPageBanner" style="background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/images/contactBanner.png');">
		<div class="container">
			<div class="banneInner">
				<div class="banneInnerCon">
					<h1>FAQ</h1>
					<div class="bradCrum">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><span>FAQ</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sectionPadd FAQInnerContent">
		<div class="container">
			<h2 class="hide"> </h2>
			<div class="faqSearch labelHide">
				<form>
					<div class="form-group query">
						<input type="text" name="query" id="query" class="form-control">
						<label for="query">Search Term or Question</label>
					</div>
					<input type="submit" name="querySubmit" value="Search">
				</form>
			</div>

			<div class="faqTabs">
				<ul>
					<li><a href="#" data-link="general">General</a></li>
					<li><a href="#" data-link="membership">Membership</a></li>
					<li><a href="#" data-link="patientportalphr">Patient Portal/PHR</a></li>
					<li><a href="#" data-link="refunds">Refunds</a></li>
					<li><a href="#" data-link="testing">Testing</a></li>
				</ul>
			</div>

			<div class="faqContainer">
				<ul>
					<li data-tab="general membership patientportalphr refunds testing">
						<a href="#" class="question" data-question="1">Why choose Lorem ipsum dolor sit amet?</a>
						<div class="answer" data-answer="1">Why choose Lorem ipsum dolor sit amet?</div>
					</li>
					<li data-tab="membership">
						<a href="#" class="question" data-question="2">What does the Lorem Ipsum text mean?</a>
						<div class="answer" data-answer="2">What does the Lorem Ipsum text mean?</div>
					</li>
					<li data-tab="patientportalphr">
						<a href="#" class="question" data-question="3">What is the Lorem Ipsum text?</a>
						<div class="answer" data-answer="3">What is the Lorem Ipsum text?</div>
					</li>
					<li data-tab="refunds">
						<a href="#" class="question" data-question="4">Why do people use Lorem Ipsum?</a>
						<div class="answer" data-answer="4">Why do people use Lorem Ipsum?</div>
					</li>
					<li data-tab="testing">
						<a href="#" class="question" data-question="5">What is Lorem Ipsum Dolor Sit Amet?</a>
						<div class="answer" data-answer="5">What is Lorem Ipsum Dolor Sit Amet?</div>
					</li>
					<li data-tab="general">
						<a href="#" class="question" data-question="6">What is this 'Lorem Ipsum' or 'Lorum Ipsum' stuff?</a>
						<div class="answer" data-answer="6">What is this 'Lorem Ipsum' or 'Lorum Ipsum' stuff?</div>
					</li>
					<li data-tab="membership">
						<a href="#" class="question" data-question="7">What is this But, aren't there already a lot of Lipsum generators out there?</a>
						<div class="answer" data-answer="7">What is this But, aren't there already a lot of Lipsum generators out there?</div>
					</li>
					<li data-tab="patientportalphr">
						<a href="#" class="question" data-question="8">Dude, you're using &lt;b&gt;-tags! Why don't you generate XHTML?</a>
						<div class="answer" data-answer="8">Dude, you're using &lt;b&gt;-tags! Why don't you generate XHTML?</div>
					</li>
					<li data-tab="refunds">
						<a href="#" class="question" data-question="9">What's the difference in the output if I select the 'Prude version'?</a>
						<div class="answer" data-answer="9">What's the difference in the output if I select the 'Prude version'?</div>
					</li>
					<li data-tab="testing">
						<a href="#" class="question" data-question="10">Where does this text come from?</a>
						<div class="answer" data-answer="10">Where does this text come from?</div>
					</li>
					<li data-tab="general">
						<a href="#" class="question" data-question="11">Have you heard of the lorizzle gansta generator? Why don't you do that?</a>
						<div class="answer" data-answer="11">Have you heard of the lorizzle gansta generator? Why don't you do that?</div>
					</li>
					<li data-tab="membership">
						<a href="#" class="question" data-question="12">Where does this text come from?</a>
						<div class="answer" data-answer="12">Where does this text come from?</div>
					</li>
					<li data-tab="patientportalphr">
						<a href="#" class="question" data-question="13">What is this But, aren't there already a lot of Lipsum generators out there?</a>
						<div class="answer" data-answer="13">What is this But, aren't there already a lot of Lipsum generators out there?</div>
					</li>
					<li data-tab="refunds">
						<a href="#" class="question" data-question="14">What is Lorem Ipsum Dolor Sit Amet?</a>
						<div class="answer" data-answer="14">What is Lorem Ipsum Dolor Sit Amet?</div>
					</li>
					<li data-tab="testing">
						<a href="#" class="question" data-question="15">What does the Lorem Ipsum text mean?</a>
						<div class="answer" data-answer="15">What does the Lorem Ipsum text mean?</div>
					</li>
					<li data-tab="general">
						<a href="#" class="question" data-question="16">Why choose Lorem ipsum dolor sit amet?</a>
						<div class="answer" data-answer="16">Why choose Lorem ipsum dolor sit amet?</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
</div>
<?php get_footer();?>