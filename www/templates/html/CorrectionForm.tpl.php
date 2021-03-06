<div class="commentProblem noprint">
    <h3>Have a correction?</h3>
    <p>If you'd like to correct your own entry, contact your UNL departmental HR liaison.<br />
    For corrections to another person's contact information, use the form below.<br /><br /></p>
    <form class="wdn_feedback_comments2" method="post" action="http://www1.unl.edu/comments/">
        <input type="hidden" name="page_address" value="" />
        <label for="name">Name:</label><input type="text" name="name" id="name" value="" />
        <label for="email">Email:</label><input type="text" name="email" id="email" value="" /><br />
        <textarea name="comment" id="comment" rows="" cols=""></textarea>
        <input type="submit" value="Submit" />
    </form>
</div>
<?php if (isset($context->options['uid'])) : ?>
<script type="text/javascript">
WDN.jQuery("document").ready(function(){

	var location = window.location.href;

	if (WDN.jQuery(".permalink").size()) {
		location = WDN.jQuery(".permalink").attr("href");
	}

	WDN.jQuery('input[name="page_address"]').val(location);

	if (WDN.idm.user.mail != null) {
		WDN.jQuery('.commentProblem input[name="email"]').val(WDN.idm.user.mail[0]);
	}
	if (WDN.idm.user.uid != null) {
		WDN.jQuery('.commentProblem input[name="name"]').val(WDN.idm.user.uid);
	}
	correctionHTML = 
		'<a href="http://www1.unl.edu/comments/" class="dir_correctionRequest pf_record noprint">Have a correction?</a>';
	WDN.jQuery(".vcardInfo").append(correctionHTML);
});
</script>
<?php endif; ?>