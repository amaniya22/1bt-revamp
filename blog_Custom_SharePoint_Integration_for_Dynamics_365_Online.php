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
              <h1 class="blog-post-title">Custom SharePoint Integration for Dynamics 365 Online</h1><br>
              <div>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/sharepoint-crm-logo.jpg"></p>
              <h2>Microsoft SharePoint and Dynamics 365 Integration&nbsp;</h2><br>
<p><span style="font-weight:700">Microsoft SharePoint</span> is a document management and collaboration tool that helps in maintaining storage space [1].&nbsp;</p>
<p>It can also be further integrated with <span style="font-weight:700">Microsoft Dynamics 365 (D365) </span>to give you extended document management and collaboration capabilities attached to it.&nbsp;</p>
<p>With this integration, D365 customer data can easily be sourced from SharePoint and customer data documents can be automatically attached to the customer record [2].&nbsp;</p>
<p>In addition to this, <span style="font-weight:700">this integration</span> comes with many more advantages as well [3].</p>
<ol>
<li>Added performance</li>
<li>Improved security</li>
<li>Easy access</li>
<li>Out of the box customizations</li>
<li>Inter-entity linking</li>
</ol>

<h2>SharePoint Integration Customization</h2><br>
<p>Out of the Box SharePoint refers to the core components of MS SharePoint. When integrating with D365, it is good enough to use the <strong>Out of the Box </strong>(<span style="font-weight:700">OOB) SharePoint - Dynamics CRM Integration</span> as the core functionality [4].&nbsp;</p>
<p>However, sometimes you may need to extend this to meet certain clients&rsquo; expectations.<br /></p>
<h2>Using SharePoint Client Object Model (CSOM) for Customizations</h2><br>
<p>To develop this kind of third party solution or customization, the<span style="font-weight:700"> SharePoint Client Object Model (CSOM)</span>&nbsp;can be used [5].<br /><br />There are two methods to develop this kind of solution for D365 Online. <br /></p>
<ol>
<li>Use the SharePoint <em>Microsoft.SharePoint.Client.dll</em> and <em>Microsoft.SharePoint.Client.Runtime.dll</em> and use the standard methods [6].&nbsp;<br>

<p>Please refer this <a href="https://docs.microsoft.com/en-us/previous-versions/office/developer/sharepoint-2010/ee537013(v%3Doffice.14)">link</a> for more details.<br><br>However, in Dynamics 365 Online, there is a limitation that only one <em>dll</em> can be resisted and it won't allow a user to register other<em> dlls</em> for referencing.</p>
<p>In this case, you need to merge your custom solution <em>dll</em> with <em>Microsoft.SharePoint.Client.dll</em> and <em>Microsoft.SharePoint.Client.Runtime.dll</em> using a dll merging technique [7].</p></li>
<li>Create a &ldquo;custom solution&rdquo; by calling the SharePoint REST API with web requests.<br><br>
<p>The following is a sample code for creating a folder in the SharePoint document library using REST API. Similarly, you can create, delete, update records in SharePoint as well.</p>
</li>
</ol>

<br>

<pre>
<ol>
<li style="font-size:12px; line-height:14px;">
public class SharePointService<br>
{<br>
&nbsp;private string _username;<br>
&nbsp;private string _password;<br>
&nbsp;private string _siteUrl;<br>
&nbsp;private SpoAuthUtility _spo;<br>
&nbsp;public SharePointService(string username, string password)<br>
&nbsp;{<br>
_username = username;<br>
_password = password;<br>
&nbsp;}<br>
&nbsp;/// &lt;summary&gt;<br>
&nbsp;/// For creating folder in SharePoint<br>
&nbsp;/// &lt;/summary&gt;<br>
&nbsp;/// &lt;param name="siteUrl"&gt;The site URL.&lt;/param&gt;<br>
&nbsp;/// &lt;param name="relativePath"&gt;The relative path.&lt;/param&gt;<br>
&nbsp;public string CreateFolder(string siteUrl, string relativePath)<br>
&nbsp;{<br>
if (siteUrl != _siteUrl)<br>
{<br>
_siteUrl = siteUrl;<br>
Uri spSite = new Uri(siteUrl);<br>
_spo = SpoAuthUtility.Create(spSite, _username, WebUtility.HtmlEncode(_password), false);<br>
}<br>
string odataQuery = "_api/web/folders";<br>
byte[] content = ASCIIEncoding.ASCII.GetBytes(@"{ '__metadata': { 'type': 'SP.Folder' }, 'ServerRelativeUrl': '" + relativePath + "'}");<br>
string digest = _spo.GetRequestDigest();<br>
Uri url = new Uri(String.Format("{0}/{1}", _spo.SiteUrl.ToString().TrimEnd('/'), odataQuery));<br>
var webRequest = (HttpWebRequest)HttpWebRequest.Create(url);<br>
.Headers.Add("X-RequestDigest", digest);<br>
// Send a json odata request to SPO rest services to fetch all list items for the list.<br>
<bte[] result = HttpHelper.SendODataJsonRequest(<br>
,<br>
"POST", // reading data from SP through the rest api usually uses the GET verb&nbsp;<br>
content,<br>
webRequest,<br>
_spo // pass in the helper object that allows us to make authenticated calls to SPO rest services<br>
);<br>
string response = Encoding.UTF8.GetString(result, 0, result.Length);<br>
return response;<br>
&nbsp;}<br>
}<br>
</li>
</ol></pre>

<p>There are certain helper classes which are needed in order to execute the above sample methods. These can be found here.
</p>

<br>

<div><h2>References</h2><br>
 
<ol>
<li>Microsoft SharePoint : <a href="https://docs.microsoft.com/en-us/sharepoint/"  target="_blank">www.docs.microsoft.com/en-us/sharepoint</a></li><br>
<li>How Dynamics 365 and Office 365 work together: <a href="https://www.sherweb.com/blog/dynamics-365/dynamics-365-office-365-work-together/"  target="_blank">https://www.sherweb.com/blog/dynamics-365/dynamics-365-office-365-work-together/</a></li><br>
<li>Benefits of integrating SharePoint with Microsoft Dynamics CRM: <a href="https://opencirrus.org/benefits-integrating-sharepoint-microsoft-dynamics-crm/"  target="_blank">https://opencirrus.org/benefits-integrating-sharepoint-microsoft-dynamics-crm/</a></li><br>
<li>Setup Customer Engagement Apps to use SharePoint online: <a href="https://community.dynamics.com/crm/b/magnetismsolutionscrmblog/archive/2017/12/19/setting-up-server-based-sharepoint-integration-for-dynamics-365-online"  target="_blank">www.community.dynamics.com/crm/b/magnetismsolutionscrmblog/archive<br>/2017/12/19/setting-up-server-based-sharepoint-integration-for-dynamics-365-online</a></li><br>
<li>Get Started using the client object model with external data in SharePoint: <a href="https://docs.microsoft.com/en-us/sharepoint/dev/general-development/get-started-using-the-client-object-model-with-external-data-in-sharepoint"  target="_blank">www.docs.microsoft.com/en-us/sharepoint/dev/general-development/get-started-using-the-client-object-model-with-external-data-in-sharepoint</a></li><br>
<li><a href="https://docs.microsoft.com/en-us/previous-versions/office/developer/sharepoint-2010/ee537013(v%3Doffice.14)"  target="_blank">www.docs.microsoft.com/en-us/previous-versions/office/developer/sharepoint-2010/ee537013(v%3doffice.14)</a></li><br>
<li><a href="http://www.manuelmeyer.net/2016/01/net-power-tip-10-merging-assemblies/"  target="_blank">www.manuelmeyer.net/2016/01/net-power-tip-10-merging-assemblies/</a></li><br>
<li><a href="https://drive.google.com/file/d/1SSepbcz77k57vWNP8cAT2Lzj5_gMqRNi/view?usp=sharing"  target="_blank">www.drive.google.com/file/d/1SSepbcz77k57vWNP8cAT2Lzj5_gMqRNi/view?usp=sharing</a></li>
</ol>
<p><br /><br /></p>
</div>

<div class="row">
<div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/thusitha-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Thusitha Dissanayake

                                                    </h2>
                                                    <small>Technical Lead
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