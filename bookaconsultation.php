<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
  <?php include 'include/header.php'; ?>
</head>


<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->

<body class="smoothscroll enable-animation">

  <!-- wrapper -->
  <div id="wrapper">
    <div id="header" class="sticky clearfix">
      <!-- TOP NAV -->
        <?php include 'include/nav.php'; ?>
      <!-- /Top Nav -->
    </div>

    <section id="consultation-form" class="black-section">
        <div class="container">
            <header class="text-center margin-bottom-60 section-title">
                <h1>BOOK A CONSULTATION CALL</h1>
            </header>
            <form action="php/bookconsultation.php" method="POST" class="consultation-form">
                <div class="col-lg-12 margin-bottom-40">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- Full Name -->
                        <div class="form-group">
                            <label for="fullName" class="form-label">Full Name *</label>
                            <input type="text" id="fullName" name="fullName" class="form-input" placeholder="Enter full name" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="Enter email" required>
                        </div>

                        <!-- Phone -->
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="form-input" placeholder="Enter phone number">
                        </div>

                        <!-- Company -->
                        <div class="form-group">
                            <label for="company" class="form-label">Company Name</label>
                            <input type="text" id="company" name="company" class="form-input" placeholder="Enter company name">
                        </div>

                        <!-- Country -->
                        <div class="form-group">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" id="country" name="country" class="form-input" placeholder="Enter country">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- Purpose -->
                        <div class="form-group">
                            <label for="purpose" class="form-label">Purpose / Demo Type *</label>
                            <select id="purpose" name="purpose" class="form-select" required onchange="toggleOtherPurpose()">
                                <option value="">-- Select an option --</option>
                                <option value="90-Day MVP">90-Day MVP</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <!-- Other Purpose -->
                        <div id="otherPurposeDiv" class="form-group hidden">
                            <label for="otherPurpose" class="form-label">Please specify</label>
                            <input type="text" id="otherPurpose" name="otherPurpose" class="form-input">
                        </div>

                        <!-- Preferred Date & Time -->
                        <div class="form-group">
                            <label for="datetime" class="form-label">Preferred Date & Time *</label>
                            <input type="datetime-local" id="datetime" name="datetime" class="form-input" required>
                        </div>

                        <!-- Notes -->
                        <div class="form-group">
                            <label for="notes" class="form-label">Additional Notes / Questions</label>
                            <textarea id="notes" name="notes" rows="4" class="form-textarea" placeholder="Let us know your requirement"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 form-consent-section">
                    <!-- Consent Checkbox -->
                    <div class="form-group checkbox-inline margin-bottom-20">
                        <input type="checkbox" id="consent" name="consent" class="form-checkbox" required>
                        <label for="consent" class="checkbox-label">I agree to be contacted regarding this demo</label>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit" class="form-submit-btn">Book a consultation call</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="footer" class="black-footer">
      <?php include 'include/footer.php'; ?>
    </footer>
    <!-- /FOOTER -->
    </div>
    <!-- /wrapper -->
    </div>
    </div>
    </div>
    <!-- /OVERLAY NAVIGATION -->


    </div>
    </div>
    <!-- /SIDE PANEL -->

    <!-- SCROLL TO TOP -->
    <a href="#" id="toTop"></a>

    <!-- JAVASCRIPT FILES -->
    <script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
    <script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

    <!-- REVOLUTION SLIDER -->
    <script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>

    <!-- SCRIPTS -->
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117187414-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-117187414-1');
    </script>

</body>

</html>