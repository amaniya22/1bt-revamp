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
              <h1 class="blog-post-title">Identity and Access Management (IAM) in Microservices using Keycloak
              </h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <p class="dropcap">
                  <p>Securing an enterprise application is a key aspect of modern enterprise application development.
                    There are plenty of mechanisms to secure such applications, especially in distributed environments.
                    Identity and Access Management (IAM) system is one of those very popular security components in a
                    modern day distributed application. Concepts such as Identity Federation, Single Sign On (SSO) and
                    Identity Provisioning are some of those key concepts, which are coupled with IAM systems. </p>

                  <h2>What is Keycloak?</h2>
                  <p>
                    Keycloak is a popular “open source” IAM solutions in the market, which is aimed at securing modern
                    enterprise applications and services. It makes it easy to secure applications and services with
                    little to no code [1].
                    <br><br>An IAM solution means, it can provide authentication to your applications as well as helps
                    to manage the users and their access levels / roles / permissions. Furthermore, it has other
                    built-in features like User Federation, Single Sign On (SSO), Centralized Identity Management,
                    Standard Protocols, Client Adapters, Identity brokering and high performance.

                  </p>
                  <h2>How Keycloak Works</h2>
                  <p>
                    Keycloak is completely a separate server that runs in a different place or a different port. Our
                    applications are configured to be secured by this independent server. Keycloak uses open protocol
                    standards like Open ID Connect or SAML 2.0, especially in Identity Federation and SSO scenarios.
                    <br><br>
                    In our browser, when we try to access applications, it redirects the browser from the
                    application to the Keycloak authentication server where they enter their credentials. This is
                    important because users are completely isolated from applications and applications never see user
                    credentials. Instead, applications are given an identity token or assertion that is
                    cryptographically signed. These tokens can identify information such as user name, address, email,
                    and other profile data. They can also hold permission data so that applications can make
                    authorization decisions. It can also be used to make secure invocations on REST-based services [1].
                    <br><br>
                    If the user credentials provided are correct, the Keycloak Identity Server generates a
                    token and gives it back to the application. If the token is valid, the user is able to continue
                    with the rest of the tasks. When it comes to the context of Microservices architecture, the role of
                    Keycloak is unimaginable with its facility of SSO.

                  </p>

                  <h2>Keycloak in a Microservices Environment</h2>
                  <p>One of Auxenta’s key Telco clients uses Keycloak as its IAM solution for one of their
                    Microservices environments. There are around 40 Microservices, which are federated through a
                    centralized Keycloak environment.
                    <br><br>
                    The following diagram shows the message flow in this system:
                  </p>
                  <div style="text-align: center;"><img src="./assets/images/keycloak-img1.jpg"></div>
                  <br>
                  <h2>Steps</h2><br>
                  <div>
                    <ul class="list-unstyled list-icons">
                      <li><i class="fa fa-angle-double-right"></i>The user requests the front-end application (an
                        Angular application).</li>
                      <li><i class="fa fa-angle-double-right"></i>The front-end application is redirected to the
                        Keycloak server for authentication.</li>
                      <ul>
                        <li> <i class="fa fa-angle-double-right"></i>If the authentication is successful, the Angular
                          application content will be
                          published or bootstrapped and will be sent back to the user. In the meantime, the user will
                          be provided a JSON Web token (JWT)
                          the Micro services back-end.</li>
                        <li><i class="fa fa-angle-double-right"></i>If the authentication is unsuccessful, the user
                          will be redirected to the Keycloak
                          server’s login page for reauthentication</li>
                      </ul>
                      <li><i class="fa fa-angle-double-right"></i>With the provided JWT, the front-end application will
                        make a service (REST) request to
                      <li> <i class="fa fa-angle-double-right"></i>When a Microservice is accessed with a REST request,
                        it will pass the token that’s in the request header to the Keycloak server. </li>
                      <li> <i class="fa fa-angle-double-right"></i>The Keycloak server will notify the Microservice if
                        the token is valid or not</li>
                      <li><i class="fa fa-angle-double-right"></i>If the token is valid, the Microservice will serve
                        that request accordingly</li>
                      <li><i class="fa fa-angle-double-right"></i> If the token is invalid, the Microservice will not
                        serve the request and will respond with a corresponding error response</li>
                    </ul>
                  </div>
                  <p>This is how a typical JWT, generated by the Keycloak server, looks like. We will notice that
                    this JWT contains all the information about the application user and its Keycloak
                    configurations.
                  </p>
                  <div style="text-align: center;"> <img src="./assets/images/keycloak-img2.jpg"></div>

                  <div class="clear"></div><br>
                  <h2>The decrypted form is:</h2><br>
                  <pre>
                        {
                          "jti": "e994fc9e-e96e-49ac-ab71-7a2a917674df",
                          "exp": 1533104336,  // Wed Aug 01 2018 11:48:56 GMT+0530 (India Standard Time)
                          "nbf": 0,
                          "iat": 1533104036,  // Wed Aug 01 2018 11:43:56 GMT+0530 (India Standard Time)
                          "iss": "http://localhost:8080/auth/realms/Aplos",
                          "aud": "aplos-frontend",
                          "sub": "8562a2ac-ca92-4741-812a-3557d12da057",
                          "typ": "Bearer",
                          "azp": "aplos-frontend",
                          "nonce": "0ffec321-b829-45e5-83cf-9ab205fc8103",
                          "auth_time": 1533097554,  // Wed Aug 01 2018 09:55:54 GMT+0530 (India Standard Time)
                          "session_state": "2b70a773-42f9-4ebb-b8f6-135150f1486a",
                          "acr": "0",
                          "allowed-origins": [
                            "http://localhost:4000"
                          ],
                          "realm_access": {
                            "roles": [
                              "offline_access",
                              "uma_authorization"
                            ]
                          },
                          "resource_access": {
                            "account": {
                              "roles": [
                                "manage-account",
                                "manage-account-links",
                                "view-profile"
                              ]
                            }
                          },
                          "scope": "openid profile email",
                          "email_verified": false,
                          "name": "FSM MHD",
                          "preferred_username": "fsm",
                          "given_name": "FSM",
                          "family_name": "MHD",
                          "email": "fsm@aplos.com"
                        }
                        </pre>
                  <h2>The Demo – Keycloak with Microservices</h2>
                  <p>
                    Follow the steps given below in order to develop a simple Angular Spring Boot Microservice, which
                    can be authenticated by a Keycloak server.
                  </p>

                  <div>
                    <ul class="list-unstyled list-icons">
                      <li><i class="fa fa-angle-double-right"></i><span style="font-weight:600;">1.0 Setting up the
                          Keycloak Server
                          (Keycloak-4.1.0.Final)</span></li>
                      <li><i class="fa fa-angle-double-right"></i>
                        <span style="font-weight:600;">1.1 <a href="https://www.keycloak.org/downloads.html">Download
                            the latest stable Keycloak server</a></span></li>
                      standalone.sh (Linux/Mac) or standalone.bat (Windows)<br>
                      In the bin directory, <br>
                      This will start the server and it will be running on port</li>
                      <li><i class="fa fa-angle-double-right"></i> <span style="font-weight:600;">1.3 If the server is
                          started successfully, visit <a href="http://localhost:8080/auth/">localhost:8080/auth</a>.</span>
                        If you are doing this for the
                        first time, in the browser it will ask you to register as a master user of the Keycloak server.
                        If not, you will be directly redirected to the welcome page.
                      </li>
                      <li><i class="fa fa-angle-double-right"></i> <span style="font-weight:600;">1.4 Creating a Custom
                        </span><br>
                        <p>What is a Realm?<br>
                          A realm secures and manages security meta data for a set of users, applications, and
                          registered OAuth clients. Users can be created confined to a specific realm within the
                          Administration
                          console. Roles can be defined at the realm level. You can also set up user role mappings to
                          assign
                          these permissions to specific users. [1]
                          <br><br>
                          Create a new realm by hovering over the "Master" realm and then click on the "Add
                          realm" button. Provide a name for it and create the realm. Once this is done, you will be
                          directed
                          to a page to configure the realm. Let’s Name it “Test-Realm”.
                          <div style="text-align: center;"> <img src="./assets/images/keycloak-img3.jpg"></div>
                        </p>
                        <p>In this page, we can configure the Realm Settings. For the moment, let’s keep it as is.</p>
                        <p>On the left side bar, we can set up clients, roles, users, etc.</p>
                        <p>We will be using this single client to serve the request of both front-end and back-end
                          requests. If we want, we can have separate clients for each.</p>
                      </li>
                      <li><i class="fa fa-angle-double-right"></i> <span style="font-weight:600;">1.5 Creating a Client</span><br>
                        Clients are entities that can request authentication of a user. Clients come in two forms. The
                        first type of client is an application that wants to participate in Single-Sign-On (SSO). These
                        clients just want Keycloak to provide security for them. The other type of client is one that
                        is requesting an access token so that it can invoke other services on behalf of the
                        authenticated user. [1]
                        <br><br>
                        Our front- end application will ask Keycloak to generate the token and the back-end application
                        will grant access to the resources if and only if the token is valid.<br><br>
                        <p>Let’s name it “test-client” and keep another configuration as default. We will be navigated
                          to the following page.<br><br>
                          In the client settings page, we will configure only: <br>
                          Valid Redirect URIs as http://localhost:4200/*<br>
                          Web Origins as http://localhost:4200<br>
                          Other settings will remain as default.
                        </p>
                        <div style="text-align: center;"> <img src="./assets/images/keycloak-img4.jpg"></div>

                        <p>Now we’ve configured a client successfully.</p>
                      </li>
                      <li><i class="fa fa-angle-double-right"></i> <span style="font-weight:600;">1.6 Configuring Roles
                        </span><br>
                        By clicking on Roles in the left menu bar we can set up roles in our system. Once you visit the
                        page, existing roles will be loaded. There are always two existing roles “offline_access” and
                        “uma_authorization”. Let’s keep this as is and create our own roles.<br><br>
                        Create two roles “admin” and “user”.
                        <div style="text-align: center;"> <img src="./assets/images/keycloak-img5.jpg"></div>
                      </li><br>
                      <li><i class="fa fa-angle-double-right"></i> <span style="font-weight:600;">1.7 Configuring Users</span>
                        <div style="text-align: center;"> <img src="./assets/images/keycloak-img6.jpg"></div>
                        <p>Once a user has been created, we will be directed to the settings page relevant to the user.
                          <br>
                          Here we can configure the credentials as well as the role settings. <br>
                          In the role mapping tab, we will assign both user and admin roles to the admin user, and only
                          the user role for a normal_user.<br>
                        </p>
                        <p>Now everything has been set up in Keycloak.</p>
                        <ul class="list-unstyled list-icons">
                          <li><i class="fa fa-angle-double-right"></i>We have started the Keycloak server</li>
                          <li><i class="fa fa-angle-double-right"></i>Set up a Realm</li>
                          <li><i class="fa fa-angle-double-right"></i>Set up a client for the Realm</li>
                          <li><i class="fa fa-angle-double-right"></i>Set up roles</li>
                          <li><i class="fa fa-angle-double-right"></i>Set up users and credential as well as the roles
                            for the users</li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <h2>2.0 Setting up the Angular Front-end</h2><br>
                    <ul class="list-unstyled list-icons">
                      <li><i class="fa fa-angle-double-right"></i><span style="font-weight:600;">2.1 Software
                          Installation</span>
                        <p> Install node, npm and Angular CLI in order` to generate the Angular CLI project. <br>
                          To begin with, let’s focus on creating the application.<br>
                          We will be using the following versions:<br>
                          <pre> Angular CLI: 1.7.4
 Node: 8.11.1</pre>
                          Run the following command to generate the project:<br>
                          ng new test-angular
                        </p>
                      </li>
                    </ul>
                  </div>

                  <ul class="list-unstyled list-icons">
                    <li><i class="fa fa-angle-double-right"></i><span style="font-weight:600;">2.2 Provide a Keycloak
                        Adaptor</span>
                      <p>
                        <h2>What are Client Adapters?</h2>
                        Keycloak client adapters are libraries that make it very easy to secure applications and
                        services with Keycloak. We call these ‘adapters’ rather than libraries as they provide a tight
                        integration to the underlying platform and framework. This makes adapters easy to use and
                        require less boilerplate code than what is typically required by a library. [1]<br><br>
                        Now include the following line in the index.html file:
                      </p>
                      <pre> <-script src="//localhost:8080/auth/js/keycloak.js"><-/script></pre>
                      This will download the adapter file from running Keycloak server at the start of the application.<br><br>
                    </li>
                    <li><i class="fa fa-angle-double-right"></i><span style="font-weight:600;">2.3 Include the Keycloak
                        Service File</span>
                      The Folder Structure will be as follows:<br><br>
                      <div style="text-align: center;"> <img src="./assets/images/keycloak-img7.jpg"></div>
                    </li><br>

                    <li><i class="fa fa-angle-double-right"></i><span style="font-weight:600;">2.4 Add the
                        KeycloakService.ts file</span><br>
                      The KeycloakService.ts file does the following:<br><br>
                      - Handles the process of authorizing the user<br>
                      - Connects to the KeyCloak server to get the token and user information and stores it in the
                      application to use wherever needed.<br><br>
                      We will have the init() method in the file which will get the Keycloak server information from
                      the environment file and complete the login. In the event of a successful login, it will fetch a
                      JWT as well.<br><br>
                      Whenever a new http request is made, the getToken() method will be accessed and if you are logged
                      in, it will obtain a token from the Keycloak server.<br><br>
                      <pre>static init(): Promise< - any - > {
                          const keycloakAuth: any = Keycloak({
                              url: environment.KEYCLOAK_URL,
                              realm: environment.KEYCLOAK_REALM,
                              clientId: environment.KEYCLOAK_CLIENTID
                          });
                  
                          KeycloakService.auth.loggedIn = false;
                  
                          return new Promise((resolve, reject) => {
                              keycloakAuth
                                  .init({ onLoad: 'login-required' })
                                  .success(() => {
                                      KeycloakService.auth.loggedIn = true;
                                      KeycloakService.auth.authz = keycloakAuth;
                                      KeycloakService.auth.logoutUrl =
                                          keycloakAuth.authServerUrl +
                                          '/realms/' +
                                          environment.KEYCLOAK_REALM +
                                          '/protocol/openid-connect/logout?redirect_uri=' +
                                          document.baseURI;
                  
                                      KeycloakService.auth.authz.loadUserProfile().success(data => {
                                          this.user = new User();
                                          this.user.username = data.username;
                                          this.user.firstName = data.firstName;
                                          this.user.lastName = data.lastName;
                                          this.user.email = data.email;
                   
                                          resolve();
                                      });
                                  })
                                  .error(() => {
                                      reject();
                                  });
                          });
                      }
                  }
                   </pre>
                    </li>
                    <p>We will store the Keycloak server details in the environment file, to connect to the server and
                      fetch information. We need to also provide the following information in the environment file:</p>
                    <pre>export const environment = {
                    production: false,
                    KEYCLOAK_URL: 'http://localhost:8080/auth',
                    KEYCLOAK_REALM: 'test-realm',
                    KEYCLOAK_CLIENTID: 'test-client',
                    BACKEND_URL: 'http://localhost:8000/api/'
                  };
                  </pre>
                    <p>Note that our backend root url is also provided here itself.<br><br>
                      When the Keycloak.init() method is invoked, we can fetch the user details and the getToken()
                      method is invoked. Then it will update the token with the time period given in the configuration.<br><br>
                      When the logout() method is invoked, we set the Keycloak authentication to null and will be
                      redirected to the login page of the respective Keycloak Realm.<br><br>
                      When the hasRole(string array) is invoked, it will return a Boolean value by checking whether the
                      logged in user has the role or not.
                    </p>

                    <li><i class="fa fa-angle-double-right"></i><span style="font-weight:600;">2.5 Adding an http
                        Interceptor Service (KeycloakHttp.ts)</span><br>
                      <p>This will extend the standard Angular Http service. Its purpose is to include the
                        authorization token of a logged-in user to every single Http request automatically. That means
                        every request made with the Http service will get the "Bearer" authorization header
                        automatically.</p>
                      <pre>@Injectable()
                      export class KeycloakHttp extends Http {
                          constructor(_backend: ConnectionBackend, _defaultOptions: RequestOptions, private _keycloakService: KeycloakService) {
                              super(_backend, _defaultOptions);
                          }
                      
                          request(url: string | Request, options?: RequestOptionsArgs): Observable<-Response-> {
                              const tokenPromise: Promise<-string-> = this._keycloakService.getToken();
                              const tokenObservable: Observable<-string-> = Observable.fromPromise(tokenPromise);
                      
                              if (typeof url === 'string') {
                                  return tokenObservable
                                      .map(token => {
                                          const authOptions = new RequestOptions({
                                              headers: new Headers({
                                                  Authorization: 'Bearer ' + token
                                              })
                                          });
                                          return new RequestOptions().merge(options).merge(authOptions);
                                      })
                                      .concatMap(opts => super.request(url, opts));
                              } else if (url instanceof Request) {
                                  return tokenObservable
                                      .map(token => {
                                          url.headers.set('Authorization', 'Bearer ' + token);
                                          return url;
                                      })
                                      .concatMap(request => super.request(request));
                              }
                          }
                      }
                      
                      export function keycloakHttpFactory(backend: XHRBackend, defaultOptions: RequestOptions, keycloakService: KeycloakService) {
                          return new KeycloakHttp(backend, defaultOptions, keycloakService);
                      }
                      
                      export const KEYCLOAK_HTTP_PROVIDER = {
                          provide: Http,
                          useFactory: keycloakHttpFactory,
                          deps: [XHRBackend, RequestOptions, KeycloakService]
                      };
                      
                      </pre>
                    </li>
                    <li><i class="fa fa-angle-double-right"></i><span style="font-weight:600;">2.6 A REST service which
                        has methods to do back-end calls. Let’s name it RestService.ts. This contains the REST service
                        methods.</span><br>

                      <p>This consists of the following methods: getAllStaff(), getAllStudents(), getStudentById(id)
                        and getStaffById(id)<br><br>
                        Let’s assume that the staff resources can be accessed only by the admin users.
                      </p>
                    </li>
                    <li><i class="fa fa-angle-double-right"></i><span style="font-weight:600;">2.7 Change the main.ts
                        file to bootstrap our application module only if the authentication credentials are correct.</span><br>

                      <pre>KeycloakService.init()
                  .then(() => {
                    if (KeycloakService.auth.loggedIn) {
                      platformBrowserDynamic().bootstrapModule(AppModule);
                    } else {
                      KeycloakService.init();
                    }
                  })
                  .catch((e: string) => {
                    console.log('Error Logging : ' + e);
                  });
                  </pre>
                      <p>Now we will call the init() method of the Keycloak service class and if the app has been
                        successfully logged in to, we will bootstrap our app to load in the browser, and if not
                        Keycloak will automatically redirect the browser to the default login page of the Keycloak
                        server.
                        <br><br>
                        Everything is now set in the Angular end.
                      </p>
                      <ul class="list-unstyled list-icons">
                        <li><i class="fa fa-angle-double-right"></i>Club House Dolphin Menu PDF Edited
                        </span></li>
                        <li><i class="fa fa-angle-double-right"></i>Written a Keycloak service class to handle the authentication request</span></li>
                        <li><i class="fa fa-angle-double-right"></i>Written a http interceptor which intercepts with all http requests and attach tokens</span></li>
                        <li><i class="fa fa-angle-double-right"></i>Written a REST service to access the resources</span></li>
                        <li><i class="fa fa-angle-double-right"></i>Arranged a view in app.component,html</span></li>
                      </ul>
                    </li><br>
                  </ul>
                  <div> <h2>3.0 Setting up the Spring Boot Back-end </h2><br>
                    <ul>
                      <li><i class="fa fa-angle-double-right"></i><span style="font-weight:600;">3.1 Create a Spring Boot Java Maven project in start.spring.io with the dependencies Web, Security and Keycloak</span><br>
                        <div style="text-align: center;"> <img src="./assets/images/keycloak-img8.jpg"></div>
                      </li><br>
                      <li><i class="fa fa-angle-double-right"></i><span style="font-weight:600;">3.2 Write a simple REST Controller</span><br>
                       
                        <pre>@RestController
                        @RequestMapping("/api")
                        public class MyTestRestController {
                        
                            static Map<Integer, String> staffMap = new HashMap<>();
                            static Map<Integer, String> studMap = new HashMap<>();
                        
                            @RequestMapping(value = "staff/getAll", method = RequestMethod.GET)
                            public List<String> getAllStaff() {
                                return new ArrayList<String>(staffMap.values());
                            }
                        
                            @RequestMapping(value = "stud/getAll", method = RequestMethod.GET)
                            public List<String> getAllStud() {
                                return new ArrayList<String>(studMap.values());
                            }
                        
                            @RequestMapping(value = "staff/getStaffById", method = RequestMethod.GET)
                            public String getStaffById(@RequestParam("staffId") Integer staffId) {
                                return staffMap.get(staffId);
                            }
                        
                            @RequestMapping(value = "stud/getStudById", method = RequestMethod.GET)
                            public String getStudById(@RequestParam("studId") Integer studId) {
                                return studMap.get(studId);
                            }
                        
                            @PostConstruct
                            public void init() {
                                staffMap.put(1,"Staff 1");
                                staffMap.put(2,"Staff 2");
                                staffMap.put(3,"Staff 3");
                                staffMap.put(4,"Staff 4");
                                staffMap.put(5,"Staff 5");
                                studMap.put(1,"Stud 1");
                                studMap.put(2,"Stud 2");
                                studMap.put(3,"Stud 3");
                                studMap.put(4,"Stud 4");
                                studMap.put(5,"Stud 5");
                        
                        
                            }
                        }
                        </pre>
                        <p>This class has the @PostConstruct method to initialize a data set of students and staff</p>
                      </li>
                      <li><i class="fa fa-angle-double-right"></i><span style="font-weight:600;">3.3 Configuring security protocol</span><br>
                      
                        <p>Here we have added both spring security and Keycloak as dependencies so our Keycloak security configurations will work on top of the spring security. Let’s add the following class to configure the security:</p>
                    <pre>@Configuration
                      @EnableWebSecurity
                      @ComponentScan(basePackageClasses = KeycloakSecurityComponents.class)
                      class SecurityConfig extends KeycloakWebSecurityConfigurerAdapter {
                      
                          @Autowired
                          public void configureGlobal(
                                  AuthenticationManagerBuilder auth) throws Exception {
                      
                              KeycloakAuthenticationProvider keycloakAuthenticationProvider
                                      = keycloakAuthenticationProvider();
                              keycloakAuthenticationProvider.setGrantedAuthoritiesMapper(
                                      new SimpleAuthorityMapper());
                              auth.authenticationProvider(keycloakAuthenticationProvider);
                          }
                      
                          @Bean
                          public KeycloakSpringBootConfigResolver KeycloakConfigResolver() {
                              return new KeycloakSpringBootConfigResolver();
                          }
                      
                          @Bean
                          @Override
                          protected SessionAuthenticationStrategy sessionAuthenticationStrategy() {
                              return new RegisterSessionAuthenticationStrategy(
                                      new SessionRegistryImpl());
                          }
                      
                          @Override
                          protected void configure(HttpSecurity http) throws Exception {
                              super.configure(http);
                      
                              http.authorizeRequests()
                                      .antMatchers("/api/staff/*")
                                      .hasRole("admin")
                                      .anyRequest()
                                      .permitAll();
                      
                              http.authorizeRequests()
                                      .antMatchers("/api/student/*")
                                      .hasRole("user")
                                      .anyRequest()
                                      .permitAll();
                      
                          }
                      }
                      </pre>
                    <p>Here we have extended the Keycloak Web Security ConfigurerAdapter and have overridden several methods to provide our own configuration. So if a particular user is requesting staff resources, then that user should be an admin. In addition, for student resource requests, the accessing user should have the user role.</p></li>
                                          
                    <li><i class="fa fa-angle-double-right"></i><span style="font-weight:600;">3.4 Create application.yml file in the resources folder to configure our application to look for the Keycloak server and fetch information. Our application will run on port 8001 as the Keycloak server is running on port 8080.</span>
                    <pre>server:
                      port : 8001
                    
                    keycloak:
                      realm : Test-Realm
                      auth-server-url : http://localhost:8080/auth
                      ssl-required : external
                      resource : test-client
                      cors : true
                    </pre>
                    <p>In addition to the server port settings, we have to configure the Keycloak server properties as well in order to fetch information from the Keycloak server.
<br><br>
                      Now staff/ resources can be accessed only by the admin role users and the user should have the user role to access the student/ resources.
                      </p>
                  </li>
                      
                  
                  </ul>
                    </div>
                    <h2>Everything is ready in the  Spring Boot back-end.</h2>
                      1) Created a  Spring Boot app with the mentioned dependencies<br>
                      2) Written a  REST controller class to handle the http REST req<br>
                      3) Written a  Security configuration to apply our security constraints <br>
                      4) Created  application.yml to provide Keycloak info and setup server port<br>
                      The  example explained above can be downloaded from the links given under the  Resources section (see below).<br>
                      Happy  Keycloaking</p>
                    <h2>Resources:</h2>
                      Both Angular and Spring  boot projects can be downloaded from the following github locations.<br>
                      Front-end : <a href="https://github.com/Faseem/Keycloak-test-FE">https://github.com/Faseem/Keycloak-test-FE</a><br>
                      Back-end : <a href="https://github.com/Faseem/Keycloak-test">https://github.com/Faseem/Keycloak-test</a></p>
                    <h2>References:</h2>
                  <p>1. Keycloak official website: <a href="https://www.keycloak.org/">https://www.keycloak.org/</a></p>  

                 
              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="/assets/images/faseem-thumb.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Mohammed Faseem

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