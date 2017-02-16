<section>
<div class="about-content">
	<p>
	Send me an email at <b><a href="">harsimran1994@gmail.com</a></b>
	</p>
	<p>
	<b>OR</b> fill in the contact form below to send me a query instead.
	</p>
	<br/>
	<form action="validation/send" method="POST">
	<h2>About You</h2>
	<p>
	Your Name
	<span class="required">*</span>
	<br/>
	<input id="name" name="name" size="40" aria-invalid="false" placeholder="harsimran singh" type="text"></input>
	</p>
	<br/>
	<p>
	Email address
	<span class="required">*</span>
	<br/>
	<input id="email" name="email" size="40" aria-invalid="false" placeholder="example@gmail.com" type="text"></input>
	</p>
	<br/>
	<p>
	Message
	<span class="required">*</span>
	<br/>
	<textarea id="message" name="message" style="width:100%;" rows="8" aria-invalid="false"></textarea>
	</p>
	<br/>
	<input type="submit" value="SEND">
	</form>
</div>
</section>
<script>
$(".nav").find(".active").removeClass("active");
$("#contact").parent().addClass("active");
</script>