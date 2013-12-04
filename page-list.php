<?php get_header(); ?>
<div class="container">
  	<div id="page-main-body-wrapper" class="clearfix">
  		<div class="row-fluid">
  			<div class="container">
    		<div id="centered-four-holder">
    			<div id="sign-up-text"><h2>Sign up to our Mailing List!</h2></div>
    			<div id="sign-up">
		<form class="jotform-form" action="https://secure.jotform.us/submit.php" method="post" name="form_30436353195150" id="30436353195150" accept-charset="utf-8">
					<input type="hidden" name="formID" value="30436353195150" />
					<div class="form-all">
						<ul class="form-section">
							<li>
								<div id="cid_1" class="form-input">
									<input autocapitalize="off" autocorrect="off" type="text" id="input_1" name="q1_email" size="40" style="width:auto;" />
								</div>
							</li>
							      <li class="form-line" id="id_3">
        <center><label class="form-label-left" id="label_3" for="input_3">
          Enter the message as it's shown<span class="form-required">*</span>
        </label></center>
        <div id="cid_3" class="form-input">
          <script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
          <div id="recaptcha_input_3">
          </div>
          <script type="text/javascript">
          var rc_script_tag = document.createElement('script'),
  rc_init_func = function()
  {
    Recaptcha.create("6Ld9UAgAAAAAAMon8zjt30tEZiGQZ4IIuWXLt1ky", "recaptcha_input_3", {
      theme: "clean",
      callback: function()
      {
        $("recaptcha_response_field").addClassName("validate[required]");
        JotForm.validator()
      }
    });
  }
rc_script_tag.src = "http://www.google.com/recaptcha/api/js/recaptcha_ajax.js";
rc_script_tag.type = 'text/javascript';
rc_script_tag.onload = function()
{
  rc_init_func.call();
};
rc_script_tag.onreadystatechange = function()
{
  if (rc_script_tag.readyState == 'loaded' || rc_script_tag.readyState == 'complete')
  {
    rc_init_func.call();
  }
};
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(rc_script_tag);
          </script>
        </div>
      </li>
							<li class="form-line" id="id_2">
								<div id="cid_2" class="form-input-wide">
									<div style="margin:0 auto 0 auto" class="form-buttons-wrapper">
										<button id="input_2" type="submit" class="btn btn-large btn-primary">
											Sign Up
										</button>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<input type="hidden" id="simple_spc" name="simple_spc" value="30436353195150" />
					<script type="text/javascript">
						document.getElementById("si" + "mple" + "_spc").value = "30436353195150-30436353195150";
					</script>
				</form>
  		</div>
    		</div>
  			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>