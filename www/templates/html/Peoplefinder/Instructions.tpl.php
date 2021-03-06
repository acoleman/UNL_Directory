<?php
    if (isset($context->options['adv'])) {
        echo $savvy->render($context, 'Peoplefinder/AdvancedForm.tpl.php');
    } else {
        echo $savvy->render($context, 'Peoplefinder/StandardForm.tpl.php');
    }
?>
<div class="grid6 first" id="instructions_people">
    <div class="intro">
    <img width="100" height ="100" class="profile_pic medium planetred_profile" src="<?php echo UNL_Peoplefinder::getURL(); ?>images/peopleHerbie.png" alt="sample people results" />
    <h3 class="recordDetails">
        Search <span class="search_context">People</span>
    </h3>
    <div class="intro_support clear">
        <p>Find contact information for faculty, staff and students. Search by:</p>
        <ul>
            <li>First name</li>
            <li>Last name</li>
            <li>Both first and last name</li>
            <li>Last 3 or more digits of telephone</li>
        </ul>
    </div>
    </div>
</div>

<div class="grid6" id="instructions_departments">
    <div class="intro">
	    <img width="100" height ="100" class="profile_pic medium planetred_profile" src="<?php echo UNL_Peoplefinder::getURL(); ?>images/organizationVC.png" alt="sample department results" />
	    <h3 class="recordDetails">
	        Search <span class="search_context">Departments</span>
	    </h3>
	    <div class="intro_support clear">
	        <p>Find UNL departments by entering a full or partial department name. Information available:</p>
	        <ul>
	        	<li>Department contact information and location on campus</li>
	        	<li>Complete list of department employees</li>
	        	<li>Organizational hierarchy of department</li>
	        </ul>
	    </div>
    </div>
</div>
<?php if(!$context->options['mobile']) :?>
<div class="first footer">
	<a href="<?php echo UNL_Officefinder::getURL(); ?>?view=alphalisting">Log in and view the printer-friendly Yellow Page Directory</a>
</div>
<?php endif;?>
<?php echo $savvy->render(null, 'Peoplefinder/SearchResults/Filters.tpl.php'); ?>
<div id="results" class="grid9"></div>