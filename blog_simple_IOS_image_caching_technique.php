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
              <h1 class="blog-post-title">Simple IOS Image Caching Technique
                <span style="font-size: 25px; font-weight: 300;line-height: 24px;color: black">(Without Using Any Libraries)</span>
              </h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <p class="dropcap">
                  <p>Loading a large number of images asynchronously in a scrollable view like&nbsp;
                    <em>UITableView or UICollectionView&nbsp;</em>can be a common task. However, keeping the app responsive in
                    terms of scrolling while images are being downloaded can be a bit of a challenge. In worst cases, we
                    have also experienced app crashes. In light of this scenario, the issue is that the images in these cells
                    are downloading on the UI thread one at a time and they aren&rsquo;t being cached at all. Hence, the
                    app malfunctions. Therefore, most developers seek the support of third-party libraries such as&nbsp;
                    <em>Alamofire, Kingfisher</em>&nbsp;and&nbsp;
                    <em>SDWebImage</em>&nbsp;to avoid eventual troubles of background image loading and the hassle of cache management.</p>

                  <p>
                    The focus of this article is to provide an insight on how to download an image from a URL, send it through a memory cache
                    so it can be displayed on image view without the involvement of a library. The trick behind this is to
                    use the same code that is used to ‘save’ for retrieval in order to display it instantly. </p>
                  <p>There are two approaches to achieve this. One of which is the use of an extension and the other is the
                    use of a subclass of UIImageView. In this article, the major focus will be the use of extensions.</p>
                </p> To begin with, we need to create an NSObject class that will allow us to define static methods that will
                in turn allow us to cache the images.</p>

                <pre>
                 static func setImageViewImage(forImageView:  UIImageView, withImageUrl: String){<br>
                                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  (forImageView).imageFromServerURL(urlString: withImageUrl)
                               <br> &nbsp;}
                 </pre> If the user intended to cache the image in a UITableView or UICollectionView, the below method can be used.

                <p>
                  <pre>static func setTableCellImageViewImage(cell:  UITableViewCell, imageUrlString: Any,tableViewName:UITableView? = nil, indexpath:IndexPath? = nil){
                  
                  <br>&nbsp;if  let imagePathString = imageUrlString as? String{
                  <br>(cell.(imageView).imageFromServerURL(urlString:  imagePathString, tableView: tableViewName, indexpath: indexpath)
                 <br> }
                  }</pre>
                </p>
                <p>By calling these static methods wherever we intended to cache images, we could accomplish the desired objective.
                  Once these methods are declared, we need to define the NSCache object reference in global scope for the
                  object class we created, as below.</p>
                <p>
                  <pre>let imageCache = NSCache<AnyObject, AnyObject>()</pre>
                </p>
                <p>Thereafter, we need to declare the extension that will be used as to achieve our objective. Thus, other than
                  the URL, we can have the other parameters as optional.</p>
                <p>
                  <pre>extension UIImageView {<br>

                     public func imageFromServerURL(urlString: String,tableView:UITableView? = nil,indexpath:IndexPath? = nil) {
                    <br>
                    <span style="color: gray"><i>//the code goes here </i></span> 
                    <br>
                    }
                  </pre>
                </p>
                <p>The data will be downloaded using the&nbsp;
                  <em>URLSessionDataTask</em>&nbsp;class. Hence, the&nbsp;&ldquo;urlString&rdquo; parameter will serve as the
                  table view data source. The&nbsp;
                  <em>cache</em>&nbsp;variable will be a reference to the cache dictionary that the app will use to request cached
                  images -if they exist-before downloading them. Therefore, the final code snippet would appear as below.</p>

                <p>
                  <pre>
                    extension UIImageView  {<br>
                    public func imageFromServerURL(urlString:  String,tableView:UITableView? = nil,indexpath:IndexPath?  = nil) {<br>
                    var imageURLString : String?<br>
                           imageURLString = urlString
                          <br>
                          if let url = URL(string: urlString) {<br>
                          
                             image = nil
                            
                            <br>
                             if let imageFromCache = imageCache.object(forKey: urlString as AnyObject) as? UIImage {<br>
                              
                               self.image =  imageFromCache
                              
                               return
                             }<br>
                            <br>
                             URLSession.shared.dataTask(with:  url, completionHandler: { (data, response, error) in<br>
                            
                               if error != nil{<br>
                                 print(error as Any)<br>
                                
                          
                                 return<br>
                               }
                              <br>
                               DispatchQueue.main.async(execute:  {
                                <br>
                                 if  let imgaeToCache = UIImage(data: data!){
                                  <br>
                                   if imageURLString == urlString {<br>
                                     self.image = imgaeToCache
                                    <br>
                                   }<br>
                                  <br>
                                    imageCache.setObject(imgaeToCache, forKey: urlString as  AnyObject<br>
                                 }<br>
                               })<br>
                             }) .resume()
                          }<br>
                        }<br>
                    
                      }</pre>


                </p>
                <p>The cache object is a collection, like a container, very similar to a NSDictionaryinstance. Here it is used
                  as a collection of UIImage objects, where the key is the row index, which helps to keep track of the right
                  cache image corresponding to each table cell. Therefore, you need to first check whether there is a cached
                  copy of the current image. If a copy already exists, then you have to load it in the cell image view. Assuming
                  the image is downloaded successfully, the code will switch back to the main thread in order to load it
                  to the image view. This is important since all UI tasks should be performed in the main queue and not in
                  a background thread.
                </p>
              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="/assets/images/danutha-thumb.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Danutha Fernando

                </h2>
                <small>Software Engineer
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