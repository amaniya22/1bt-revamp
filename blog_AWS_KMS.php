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

    <section id="portfolio" class="nopadding-bottom">
      <div class="container">

        <div class="row">
          <!-- LEFT -->
          <div class="col-md-8 col-sm-8">

            <div class="careers-left">
              <h1 class="blog-post-title">AWS KMS</h1>
              <div>
             
              <p><em>The fully managed, highly available AWS Shared Key Management Infrastructure</em></p>
<p>An effective security strategy begins with stringent access control and the least privilege necessary for persons or systems accessing data [4]. Therefore, AWS requires that you manage your own access control policies and provide in-depth support in order to achieve the best possible data protection available.</p>
<p>&ldquo;Encryption&rdquo; is a critical component of a&nbsp;<span style="font-weight:700">defence-in-depth</span>&nbsp;strategy, which is a security approach with a series of defensive mechanisms designed. It can also further mitigate weaknesses in primary access control mechanisms.</p>
<p>There are multiple cryptography services offered by AWS.</p>
<ol>
<li>AWS Key Management Service (KMS)</li><br>
<li>AWS Certificate Manager</li><br>
<li>AWS Secrets Manager</li><br>
<li>AWS Cloud HSM</li>
</ol>
<p>Theoretically, all of the above services are working as Hardware Security Modules (HSMs). Out of these, Cloud HSM gives you the most control and you&rsquo;re basically responsible for managing it. All the other services are basically managed by AWS.</p>
<p>However, out of these services, I am only going to discuss the key features and trends relating to AWS KMS in this blog post. Most of the content is an extract of AWS documentation and AWS re:Invent conference videos. I&rsquo;m hoping this blog post will help you have a more concise picture of key points related to this topic.</p>

<h1>KMS Features</h1>
<ol>
<li><span style="font-weight:700">Managed service</span> that enables you to easily&nbsp;<span style="font-weight:700">create and control the keys used for cryptographic operations</span></li><br>
<li>A&nbsp;<span style="font-weight:700">shared</span> key management infrastructure with&nbsp;<span style="font-weight:700">FIPS 140&ndash;2 Level 2&nbsp;</span>compliance</li><br>
<li>Currently supports 50+ AWS services</li><br>
<li>A&nbsp;<span style="font-weight:700">regional service</span></li><br>
<li><span style="font-weight:700">Highly Available</span> (HA). Keys are kept as multiple copies&nbsp;<span style="font-weight:700">in a single region</span>&nbsp;to make sure of its durability and reliability</li><br>
<li>It integrates fully with&nbsp;<span style="font-weight:700">IAM</span> and&nbsp;<span style="font-weight:700">CloudTrail</span>&nbsp;for Permission Management and Auditing, respectively</li><br>
<li>Supports both&nbsp;<span style="font-weight:700">symmetric</span> and&nbsp;<span style="font-weight:700">asymmetric</span>&nbsp;key encryption. Until 2019, it only supported symmetric key encryption. But now it supports both key encryption aspects [3]. With the support of asymmetric key encryption, it widened the aspect of inter-operability by being able to connect to many other Key Management Infrastructures in the market [3].</li>
</ol>
<h1>KMS Supports Two Types of Keys</h1>
<ol>
<li>Customer Master Keys (CMK)</li><br>
<li>Data Encryption Keys</li>
</ol>
<p>By default, CMK can encrypt data up to 4KB.</p>
<p>If the data to be encrypted is more than 4KB, you will have to use (CMK + Data Encryption Key) combination, which is known as the&nbsp;<span style="font-weight:700">KMS Two Tier Architecture</span>.</p>
<h2>KMS Two Tier Architecture/Envelope Encryption</h2><br>
<p>In KMS Two Tier Architecture, you can encrypt your data using Data Key A. Then, in order to keep Data Key A safe, it will be encrypted using Data Key B. Now Data Key B is not safe and again it will be encrypted using Data Key C. You get the drift. This will go on till it reaches the point where the infrastructure itself needs to protect the last key, which is the Customer Master Key (CMK). This process of having multiple layers of encryption is referred to as&nbsp;<span style="font-weight:700">envelope encryption</span>.</p>
<h2>Customer Master Keys (CMK)</h2><br>
<p>CMK is a logical representation of a key. These keys can be generated by KMS or by being imported. CMKs are always protected by AWS KMS infrastructure and always resides within KMS HSM housing. Any external party communication takes place via API.</p>
<p>CMKs can encrypt or decrypt data up to 4KB in size. They are being created, managed and deleted entirely within KMS. They never leave the KMS region or KMS infrastructure unencrypted.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_KMS_fig1.jpg"></p>
<p>There are three types of CMK.</p>
<ol>
<li><span style="font-weight:700">Customer Managed CMK&nbsp;</span>&mdash; Keys used by AWS on a shared basis across many AWS accounts. You normally do not interact with this CMK.</li><br>
<li><span style="font-weight:700">AWS Managed CMK</span>&mdash; Used as the default CMK within most of the AWS services and named under the AWS service name (aws/&lt;service-name&gt;). You are not able to manage or change its configurations (Key Policies, Rotation).</li><br>
<li><span style="font-weight:700">AWS Owned CMK</span>&mdash; You are able to create your own CMK. You are allowed to rotate keys. Key policies can be defined and can be enabled/disabled. Customer Managed CMKs are region-specific and if it needs to be used in another region then you need to use a different CMK in the target region.</li>
</ol>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_KMS_fig2.jpg"></p>
<h2>KMS Encryption (Symmetric)</h2><br>
<p>As explained, until recently KMS encryption and decryption was supported through symmetric encryption (see Figure 3(a)).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_KMS_fig3a.jpg"></p>

<p>The Symmetric Encryption process can be explained in several steps (see Figure 3 (b)).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_KMS_fig3b.jpg"></p>

<p>This diagram explains how a plain text gets encrypted and how this key, which is used to encrypt the plain text, is again encrypted by KMS and stored along with the encrypted data.</p>
<p>Step 1: Create a Customer Managed Key (CMK) either by using the AWS console or via AWS CLI.</p>
<p>Step 2: Your application (which is running KMS SDK), or any other AWS service, requests for a Data Key (via an API call) in order to encrypt a plain text.</p>
<p>Step 3: KMS returns both the Data Key and the encrypted Data Key (encrypted by CMK).</p>
<p>Step 4 and 5: Your application or the AWS service will consume the Data Key in order to encrypt the plain text and generate the cipher text (encrypted data).</p>
<p>Step 6: The returned encrypted data key will be stored alongside the encrypted cipher text.</p>
<p>In order to keep all the keys safe, CMK should also be encrypted as the last key of the envelope encryption chain. However, AWS ensures that it is kept as is by confirming its security within its infrastructure.</p>
<p>When you want to decrypt the&nbsp;<em>Encrypted Data&nbsp;</em>(following symmetric data encryption rules), you have to send a request to KMS (via an API call) for CMK to decrypt the&nbsp;<em>Encrypted Data Key&nbsp;</em>and use the&nbsp;<em>Unencryted Data Key&nbsp;</em>to decrypt the&nbsp;<em>Encrypted Data.</em></p>
<p><span style="font-weight:700">In KMS symmetric encryption, for both encryption and decryption we need to make API calls to KMS. This is a significant feature in the KMS symmetric encryption mechanism.</span></p>



<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>P.Note: After this process, the Data Encryption Key (unencrypted) will be deleted. When you want to decrypt the data, we can request a Data Key from KMS. This is all done to enhance security in the system.</em></p>
</div>
                                        </div><br><br>



                                        <h2>CMK Key Policy</h2><br>
<p>Policies attached to IAM identities are called Identity-based Policies (IAM Policies). Policies attached to resources outside of IAM are called Resource-based Policies. In AWS KMS, you &ldquo;must&rdquo; attach resource-based policies to your CMKs. These are called&nbsp;<span style="font-weight:700">Key Policies</span>.</p>
<p>All CMKs have a Key Policy, and you must use it to control access to a CMK. IAM Policies are not sufficient to allow access to CMK, although you can use them in combination with a CMK Key Policy.</p>
<p>For example, even with Amazon S3 Full Access (an IAM Policy) for a given IAM user or an IAM role, this full access permission will be limited by the permission criteria defined within the CMK Key Policy.</p>
<p>By default, unless you specify IAM user or role restrictions, it enables the root user in the account to add IAM polices that reference the key (see Figure 4).&nbsp;<span style="font-weight:700">However, it is highly recommended that you change the default CMK policy to align with your organization&rsquo;s best practices for least privilege.</span></p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_KMS_fig4.jpg"></p>
<p>Don&rsquo;t forget to make sure to NOT include kms:* permissions in an IAM policy. This policy would grant the principal both administrative and usage permissions on all CMKs to which the principal has access. Similarly, including kms:* permissions for the principals within your key policy gives them both administrative and usage permissions on the CMK.</p>
<h2>CMK Key Rotation</h2><br>
<p>Cryptographic best practices discourage extensive reuse of encryption keys. When you enable automatic key rotation for a customer managed CMK, AWS KMS generates new cryptographic material for the CMK every year. AWS KMS also saves the CMK&rsquo;s older cryptographic material in perpetuity so it can be used to decrypt data that it encrypted. AWS KMS does not delete any rotated key material until you delete the CMK.</p>
<p>The key rotation changes only the&nbsp;<span style="font-weight:700">CMK&rsquo;s backing key</span>, which is the cryptographic material that is used in encryption operations (see Figure 5). Old backing keys are still kept within KMS for any decryption in the future.</p>
<p>The CMK is the same logical resource, regardless of whether or how many times its backing key changes. The properties of the CMK do not change, as shown in the following image.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_KMS_fig5.jpg"></p>


<p>AWS Managed CMK key rotation happens&nbsp;<span style="font-weight:700">every three years</span>&nbsp;by default and you cannot change it. Customer Managed CMK key rotation happens&nbsp;<span style="font-weight:700">every year</span>&nbsp;(if you enable it).</p>
<p>Automatic key rotation is not supported for imported keys, asymmetric keys, or keys generated in an AWS CloudHSM cluster using the AWS KMS custom key store feature. If you choose to import keys to AWS KMS or asymmetric keys or use a custom key store, you can manually rotate them by creating a new CMK and mapping an existing key alias from the old CMK to the new CMK.</p>
<p>If you choose to have AWS KMS automatically rotate keys, you don&rsquo;t have to re-encrypt your data. AWS KMS automatically keeps previous versions of keys to use for decryption of data encrypted under an old version of a key. All new encryption requests against a key in AWS KMS are encrypted under the newest version of the key.</p>
<p>If you manually rotate your imported or custom key store keys, you may have to re-encrypt your data depending on whether you decide to keep old versions of keys available.</p>
<h2>KMS Encryption (Asymmetric)</h2><br>
<p>Some of the key features are:</p>
<ol>
<li><span style="font-weight:700">Using key pairs (public and private keys)</span>: These will be leveraged for encryption/decryption and signing/verification purposes.</li>
<li><span style="font-weight:700">Encryption and decryption happens outside of KMS HMS</span>: Unlike in symmetric KMS encryption, where you have a single&nbsp;<em>data key</em>for encryption and decryption.</li>
<li><span style="font-weight:700">Maintains inter-operability</span>: Unlike in KMS symmetric key encryption, this is more inter-operable with other key management systems by not maintaining any proprietary meta-data along with its encryption/decryption operations. Each time when you do a KMS API call, you need to pass the&nbsp;<em>key id</em>along with your operations. This is not a requirement in symmetric API calls.</li>
</ol>
<p>Now, let&rsquo;s discuss the steps involved in a KMS asymmetric encryption (see Figure 6).</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_KMS_fig6.jpg"></p>


<p>Step 1: Request (via an API call) KMS to create a key pair (public and private).</p>
<p>Step 2: After creating the key pair, as the user, you can download the public key of the key pair and use it outside of KMS.</p>
<p>Step 3: You or a third party can use this public key for message encryption.</p>
<p>Step 4: This encrypted message can be sent to KMS (via an API call) if you require to decrypt the message.</p>
<p>Step 5: KMS decrypts the message with the help of the private key of the key pair.</p>
<h2>What is Cloud HSM?</h2><br>
<p>The Hardware Security Module (HSM) is a&nbsp;<span style="font-weight:700">dedicated</span>&nbsp;hardware security module under your exclusive control. That means you get dedicated access to HSM appliances. It is important to note that, only you have access to your keys and operations on the keys. HSMs are located in AWS data centers and are managed and monitored by AWS. They are&nbsp;<span style="font-weight:700">FIPS 140&ndash;2 Level 3</span>&nbsp;compliant and are handled inside your VPC, in isolation from the rest of the network. We will discuss more about CloudHSM capabilities in another blog post.</p>
<p>Until then happy encrypting with AWS!</p>



<div><h2>References</h2>
 
<ol>
<li>Rotating Customer Keys:&nbsp;<a href="https://docs.aws.amazon.com/kms/latest/developerguide/rotate-keys.html#rotate-keys-how-it-works">https://docs.aws.amazon.com/kms/latest/developerguide/rotate-keys.html#rotate-keys-how-it-works</a></li><br>
<li>AWS re:Invent 2019: Using AWS KMS for data protection, access control, and audit:&nbsp;<a href="https://www.youtube.com/watch?v=hxWvbNvj2lg">https://www.youtube.com/watch?v=hxWvbNvj2lg</a></li><br>
<li>Digital Signing with the new asymmetric keys feature:&nbsp;<a href="https://aws.amazon.com/blogs/security/digital-signing-asymmetric-keys-aws-kms/">https://aws.amazon.com/blogs/security/digital-signing-asymmetric-keys-aws-kms/</a></li>
</ol>
</div>

<div class="row">
<div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/chrishantha.jpeg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Crishantha Nanayakkara

                                                    </h2>
                                                    <small>Vice President - Technology
                                                    </small>
                                          </div></div>
         </div>

            </div>

                          </div>
              <!-- article content -->
                   
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