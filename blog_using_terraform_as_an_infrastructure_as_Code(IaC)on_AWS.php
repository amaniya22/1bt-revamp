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
  <!--
			OVERLAY NAVIGATION
			Outside of #wrapper

			CSS HEADER REQUIRED:
			<link href="assets/css/header-0.css" rel="stylesheet" type="text/css" />
		-->
  <!-- wrapper -->
  <div id="wrapper">

    <!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
    <div id="header" class="sticky clearfix">

      <!-- TOP NAV -->
       <?php include 'include/nav.php'; ?>
      <!-- /Top Nav -->
    </div>

    <section id="portfolio" class="nopadding-bottom black-section">
      <div class="container">

        <div class="row">
          <!-- LEFT -->
          <div class="col-md-8 col-sm-8">

            <div class="careers-left">
              <h1 class="blog-post-title">Using Terraform as an Infrastructure as Code (IaC) on AWS

              </h1>

              <!-- article content -->
              <div class="margin-bottom-80">

                <h2>What is IaC?</h2>

                <p>DevOps is the combination of cultural philosophies, practices, and tools that increase an
                  organization’s ability to deliver applications and services at high velocity; evolving and improving
                  products at a faster pace than organizations using traditional software development and
                  infrastructure management processes [1]. It is a software development method, which can bring
                  software development and operational activities together.
                </p>
                <p>The Infrastructure as Code (IaC) is a type of “IT infrastructure provisioning process” where systems
                  are automatically built, managed and provisioned through code execution rather than scripting or a
                  manual process. If your infrastructure is treated as code, you can easily manage your infrastructure
                  just as your application code.
                </p>

                <h2>What is Terraform?</h2>

                <p><a href="https://aws.amazon.com/cloudformation/" target="_blank">AWS CloudFormation</a> and <a href="https://www.terraform.io/"
                    target="_blank">Terraform</a> are leaders in IaC, which greatly eases the process of provisioning
                  IT resources in the AWS cloud. Among these two, Amazon was the first cloud vendor to offer IaC
                  through CloudFormation, which was launched in 2011. Though AWS CloudFormation is a popular hit in
                  IaC, there was a need to have a cloud independent IaC platform. Terraform has basically fulfilled
                  this task by allowing users to define infrastructure for a variety of cloud vendors (AWS, Azure,
                  Google Cloud, DigitalOcean, etc). It is an open source tool with the features of a simple declarative
                  programming language with the ability to deploy and manage cloud infrastructure using CLI commands.
                </p>
                <h2>Using Terraform on AWS - An Example</h2>
                <p>The below examples illustrate how we can leverage Terraform to execute the following tasks in AWS.
                </p>
                <div>
                  <ul class="list-unstyled list-icons">
                    <li><i class="fa fa-angle-double-right"></i>Creating an AWS IAM role using <em>Terraform</em></li>
                    <li> <i class="fa fa-angle-double-right"></i>Creating an IAM policy using <em>Terraform</em></li>
                    <li><i class="fa fa-angle-double-right"></i> Attaching the policy to the role using <em>Terraform</em></li>
                    <li><i class="fa fa-angle-double-right"></i> Creating the IAM instance profile using <em>Terraform</em></li>
                    <li><i class="fa fa-angle-double-right"></i> Assigning the IAM role to an EC2 instance on the fly
                      using <em>Terraform</em></li>
                  </ul>
                </div>

                <h2>1. Creating an AWS IAM role using Terraform:</h2>

                <p>This is where the <a href="https://www.terraform.io/docs/providers/aws/r/iam_role.html" target="_blank">IAM
                    role </a>creation will be done. This assume_role_policy parameter is a must to be
                  given within the resource block. There are other optional parameters as well, such as name, path,
                  description, etc. </p>
                <p>The Terraform script:</p>

                <pre>resource "aws_iam_role" "ec2_s3_access_role" {
                  name           	= "s3-role"
                  assume_role_policy = "${file("assumerolepolicy.json")}"
                }</pre>

                <p>The resource block above constructs a resource of the stated<strong> TYPE</strong> (i.e. the initial
                  parameter
                  “aws_iam_role”) and <strong>NAME</strong> (i.e. the second parameter “ec2_s3_access_role”). The
                  integration of the
                  type and name must be distinctive. Within the block (the { }) is the configuration for the resource.
                </p>
                <p>A <a href="https://www.terraform.io/docs/configuration/resources.html" target="_blank">resource</a>
                  component in Terraform, constructs a resource, of the given <strong>TYPE</strong> (first parameter)
                  and<strong> NAME</strong> (second parameter) when defining a resource. As an example, let’s consider
                  the below script: </p>
                <pre>resource "aws_iam_instance_profile" "test_profile" {                             
                  name  = "test_profile"                        
                  roles = ["${aws_iam_role.ec2_s3_access_role.name}"]
                  }</pre>

                <p>In the above block, aws_iam_instance_profile is the <strong>TYPE</strong> and test_profile is the
                  <strong>NAME</strong>. The
                  combination of the type and name must be unique. </p>
                <p>The <a href="https://www.terraform.io/docs/providers/aws/r/iam_role.html#assume_role_policy" target="_blank">assume_role_policy</a>
                  parameter in the above resource block allows an entity permission to assume
                  the role. <br><br>The assume role policy:</p>

                <pre> {
                "Version": "2012-10-17",
                "Statement": [
                  {
                  "Action": "sts:AssumeRole",
                  "Principal": {
                    "Service": "ec2.amazonaws.com"
                  },
                  "Effect": "Allow",
                  "Sid": ""
                  }
                ]
               }</pre>

                <h2>2. Creating an AWS IAM policy using Terraform:</h2>

                <p><a href="https://www.terraform.io/docs/providers/aws/r/iam_policy.html" target="_blank">This</a> is
                  where we need to define the required policy (i.e. permissions) according to the necessity.
                  For example, allowing the IAM role to access all the S3 buckets within the region. Providing the
                  policy is a required parameter. Apart from this, there are other parameters as well, such as arn,
                  path, id, etc. <br><br>
                  The Terraform script:</p>

                <pre> resource "aws_iam_policy" "policy" {
                name    	= "test-policy"
                description = "A test policy"
                policy  	= "${file("policys3bucket.json")}"
              }</pre>

                <p>The policy parameter in the above block requires an IAM policy in a <strong>JSON</strong> format.
                  What the following
                  policy does is that it allows the IAM role to access all the S3 buckets and perform any action (i.e.
                  list buckets, put objects, delete objects, etc.) on those buckets. <br><br> The IAM policy: </p>

                <pre> {
                "Version": "2012-10-17",
                "Statement": [
                    {
                        "Effect": "Allow",
                        "Action": "s3:*",
                        "Resource": "*"
                    }
                ]
              }</pre>
                <h2>3. Attaching the policy to the role using Terraform:</h2>

                <p> This is where we’ll be attaching the policy, which we wrote above, to the role we created in the
                  first step.
                  <br><br>
                  The Terraform script:</p>

                <pre>  resource "aws_iam_policy_attachment" "test-attach" {
                name   	= "test-attachment"
                roles  	= ["${aws_iam_role.ec2_s3_access_role.name}"]
                policy_arn = "${aws_iam_policy.policy.arn}"
              }</pre>

                <p>The <a href="https://www.terraform.io/docs/providers/aws/r/iam_policy_attachment.html" target="_blank">aws_iam_policy_attachment</a>
                  in the above resource block is used to attach a Managed IAM Policy to
                  user(s), role(s), and/or group(s). But in our case, it was a role. The value for the <em><strong>roles</strong></em>
                  parameter
                  has been accessed from the resource block, which we created in step 1. <br><br>
                  Value of the role = ${aws_iam_role.ec2_s3_access_role.name}</p>

                <h2>Explanation:</h2>
                <div>
                  <ul class="list-unstyled list-icons">
                    <li>
                      <i class="fa fa-angle-double-right"></i>aws_iam_role is the type of the resource block which we
                      created in step 1.</li>

                    <li>
                      <i class="fa fa-angle-double-right"></i>ec2_s3_access_role is the name of the variable which we
                      defined.</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>name is a property of that resource block.</li>
                  </ul>
                </div>

                <p> The same thing applies to the value for <em><strong>policy_arn</strong></em>.</p>
                <h2>4. Creating the IAM instance profile using Terraform:</h2>

                <p>This is the resource that must be used to tag the IAM role to the EC2 instance. When we are creating
                  the resource block for an <a href="https://www.terraform.io/docs/providers/aws/r/instance.html"
                    target="_blank">EC2 instance</a>, in order for us to assign the role to that instance, it
                  expects the <a href="https://www.terraform.io/docs/providers/aws/r/iam_instance_profile.html" target="_blank">aws_iam_instance_profile</a>
                  to be given as a parameter. <br><br>
                  The Terraform script:</p>

                <pre> resource "aws_iam_instance_profile" "test_profile" {
                name  = "test_profile"
                roles = ["${aws_iam_role.ec2_s3_access_role.name}"]
              }</pre>

                <p> The value for the roles parameter has been accessed from the resource block, which we created in
                  step 1.
                </p>

                <h2> 5. Assigning the IAM role, to an EC2 instance on the fly using Terraform:</h2>

                <p> Here we will be creating a basic free tier <a href="https://www.terraform.io/docs/providers/aws/r/instance.html"
                    target="_blank">EC2 instance</a> and attaching the IAM instance profile,
                  which we created above in the step 4. <br><br>
                  The Terraform script:</p>

                <pre> resource "aws_instance" "my-test-instance" {
                ami         	= "${lookup(var.AmiLinux, var.region)}"
                instance_type   = "t2.micro"
                iam_instance_profile = "${aws_iam_instance_profile.test_profile.name}"
              
                tags {
                Name = "test-instance"
                }
              }
              </pre>
                <p>The <em><strong>tags</strong></em> parameter is defined to identify and differentiate the EC2
                  instance from the others. It
                  simply represents a mapping. The value of <em><strong>ami</strong></em> is being retrieved from the
                  predefined variables, which
                  are defined on a different Terraform script as shown below: </p>
                <pre>variable "region" {
                  default = "us-east-1"
                }
                variable "AmiLinux" {
                  type = "map"
                  default = {
                  us-east-1 = "ami-b73b63a0" # Virginia
                  }
                  description = "have only added one region"
                }</pre>

                <p>The following commands should be executed from the terminal, in its respective order, within the
                  directory where the scripts are being saved.
                </p>
                <div>
                  <ul class="list-unstyled list-icons">
                    <li>
                      <i class="fa fa-angle-double-right"></i>Initialize a new or an existing Terraform configuration
                      terraform init</li>
                    <li><i class="fa fa-angle-double-right"></i>Generate and show an execution plan from the resources
                      we’re trying to provision
                      terraform plan</li>
                    <li><i class="fa fa-angle-double-right"></i>Validate the Terraform files
                      terraform validate</li>
                    <li><i class="fa fa-angle-double-right"></i>Build or change the infrastructure
                      terraform apply</li>
                    <li>The complete list of commands are available <a href="https://www.terraform.io/docs/commands/index.html"
                        target="_blank"><strong>here.</strong></a><strong></strong></li>
                  </ul>
                </div>
                <h2>Resources</h2>

                <p>The complete source code is available here for grabs:<br>
                  <a href="https://github.com/Kulasangar/terraform-demo" target="_blank">www.github.com/Kulasangar/terraform-demo</a></p>

                <h2>References</h2>
                <p><strong>DevOps Model defined</strong> - <a href="https://aws.amazon.com/devops/what-is-devops/"
                    target="_blank">www.aws.amazon.com/devops/what-is-devops</a><br>
                  <strong>Terraform official website</strong> -<a href="https://www.terraform.io/" target="_blank">www.terraform.io</a></p>


              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="/assets/images/K_Gawri.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Kulasangar Gowrisangar

                </h2>
                <small>Senior Software Engineer
                </small>
              </div>
            </div>
          </div>

           <!-- RIGHT -->
           <div class="col-md-4 col-sm-4">

              <!-- side navigation -->
              <?php include 'include/blog-sidebar.php'; ?>
  
              </div>
            </div>
        </div>

      </div>


      <!-- RELATED -->

    </section>

   
    <!-- FOOTER -->
    <footer id="footer">
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