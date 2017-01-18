<?php  
	mysql_connect("vpc-***-mysql.db.internal.aws.***.***:3306", "*****", "*****") or die("couldnot connect"); //hiding the real server address, db aministrator and password information
	mysql_select_db("UGST") or die("couldnot find db!"); 
	$output='';

	//data searching

	if(isset($_POST['search']) and isset($_POST['collegeq']) and $_POST['type']=="all"){
		$searchq = $_POST['search'];
		echo("SEARCH1--------------------->".$searchq);
		$searchq= preg_replace("#[^0-9a-z]#i","",$searchq);
		echo("SEARCH2--------------------->".$searchq);
		
		
		
	    $collegeq= $_POST['collegeq'];
		if($collegeq == "All"){		
			$sql= "SELECT * FROM researchopps_tbl where keywords like '%".$searchq."%';";
			echo ("\nquery------------------->".$sql);
			$query = mysql_query($sql) or die ("couldnot search");
			
		}else{
			$sql= "SELECT * FROM researchopps_tbl where keywords like '%".$searchq."%' and college = '".$collegeq."';";
			$query = mysql_query($sql) or die ("couldnot search");
			echo ("\nquery------------------->".$query);
			}
		
		
		
		$count = mysql_num_rows($query);
		if($count == 0){
			$output = 'No search result';
		}else{
			while($row= mysql_fetch_array($query)){
				$ProjectTitle= $row['project_title'];
				$ProjectTitle=$row['faculty_name'];
				$ProjectDesc=$row['project_description'];
				$College=$row['college'];
				$ContactEmail=$row['faculty_name'];
				$RequiredSkills=$row['required_skills'];
				$WebURL=$row['web_url'];
				$Keywords=$row['keywords'];
				

				$output .='<div style="border:2px; background-color: #feb255">
								<ul style="list-style-type: none;">
									<li>ProjectTitle   :'.$ProjectTitle.'</li>
									<li> ProjectDesc   : '.$ProjectDesc.'</li>
									<li> College       : '.$College.'</li>
									<li> ContactEmail  : '.$ContactEmail.'</li>
									<li> RequiredSkills: '.$RequiredSkills.'</li>
									<li> WebURL        : '.$WebURL.'</li>
									<li> Keywords      : '.$ProjectTitle.'</li>	
							</div><br />';
			}
		}
	}elseif(isset($_POST['search']) and isset($_POST['collegeq']) and $_POST['type']=="any"){
		$searchq = $_POST['search'];
		echo("SEARCH3--------------------->".$searchq);
		$searchq= preg_replace("#[^0-9a-z]#i","",$searchq);
		echo("SEARCH4--------------------->".$searchq);
		
	    $collegeq= $_POST['collegeq'];
		echo("College--------------------->".$collegeq);
		if($collegeq == "All"){	
			$sql="SELECT * FROM researchopps_tbl where keywords like '%".$searchq."%';";	
			echo ("\nquery------------------->".$sql);	
			$query = mysql_query($sql) or die ("couldnot search");
			
		}else{
			$sql="SELECT * FROM researchopps_tbl where keywords like '%".$searchq."%' or college = '".$collegeq."';";
			echo ("\nquery------------------->".$sql);
			$query = mysql_query($sql) or die ("couldnot search");
			
			}
		
		
		
		$count = mysql_num_rows($query);
		echo("Count------------------->".$count);
		if($count == 0){
			$output = 'No search result';
		}else{
			while($row= mysql_fetch_array($query)){
				$ProjectTitle= $row['project_title'];
				$ProjectTitle=$row['faculty_name'];
				$ProjectDesc=$row['project_description'];
				$College=$row['college'];
				$ContactEmail=$row['faculty_name'];
				$RequiredSkills=$row['required_skills'];
				$WebURL=$row['web_url'];
				$Keywords=$row['keywords'];
				

				$output .='<div style="border:2px; background-color: #feb255">
								<ul style="list-style-type: none;">
									<li>ProjectTitle   :'.$ProjectTitle.'</li>
									<li> ProjectDesc   : '.$ProjectDesc.'</li>
									<li> College       : '.$College.'</li>
									<li> ContactEmail  : '.$ContactEmail.'</li>
									<li> RequiredSkills: '.$RequiredSkills.'</li>
									<li> WebURL        : '.$WebURL.'</li>
									<li> Keywords      : '.$ProjectTitle.'</li>	
							</div><br />';
			}
		}
		
		
		}
?>


<!--<body>
	<form action = "searchnew.php" method="post">
		<input type="text" name="search" placeholder="Search for numbers..." onkeydown="searchq();" />
		<input type="submit" value="Search" />
	</form>


	<?php //print ($output);?>
</body>-->




<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie6 " lang="en-US"><![endif]-->

<!--[if IE 7]><html class="ie7 " lang="en-US"><![endif]-->

<!--[if IE 8]><html class="ie8 " lang="en-US"><![endif]-->

<!--[if gt IE 8]><!-->
<html class=" " lang="en-US">
<!--<![endif]-->
  <head>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon /" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="Maryland Center for Undergraduate Research Office of Undergraduate Studies - University of Maryland" />
	<meta name="keywords" content=""/>
	<meta name="Description" content=" " />
    
    <!--[if IE]><link rel="shortcut icon" type=image/x-icon href="images/favicon_ie.ico" /><![endif]-->

	<!--[if !IE]><link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico" /><![endif]-->

	<link rel="apple-touch-icon-precomposed" sizes="114×114" href="images/apple-touch-icon-114×114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72×72" href="images/apple-touch-icon-72×72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/touch-icon-iphone-precomposed.png">
  
  
  
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maryland Center for Undergraduate Research | University of Maryland</title>
   
    <link rel="stylesheet" href="css/foundation.css" />
    
    <link rel="stylesheet" href="css/normalize.css"/>
   
    <script src="js/vendor/modernizr.js"></script>
    
<style>


@media only screen (min-width:480px) {

#bbtable{
		width:300px;
	overflow-x: scroll
		 word-wrap: break-word;
	}
	#bb2table{
		width:300px;
	overflow-x: scroll
		 word-wrap: break-word;
	}

}
@media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}
		
		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space:normal;
		}
		
		
		
	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 320px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 495px; 
		}
	}

</style>	
	
    
  </head>
  <body>
	<div class="row" > <!-- UMD Header -->
		<div class="large-12 columns">
<div class="contain-to-grid fixed">
		<script src="//s3.amazonaws.com/umdheader.umd.edu/app/js/main.min.js"></script>
		<script> umdHeader.init({ news: false }); </script>
</div>
		</div>
     </div> <!-- /UMD Header -->   
   	<div class="row" > <!--container row -->
	<div class="large-12 columns"> <!-- container cols-->
	<div class="container"> <!-- container -->
    	<div class="row" style="background-color:6ca4ba;"><!-- MCUR Banner Row-->
      	<div class="large-12 columns"><a href="http://www.ugresearch.umd.edu"><img src="images/mcurlogo1200wide.jpg" alt="Maryland Center for Undergraduate Rresearch at the University of Maryland" ></a>
      	</div>
        </div><!-- /MCUR Banner Row-->
    
<div class="row"> <!--menu row -->

<!--#include file="includes/menu-columns.html" -->
		
</div>  <!-- /menu row -->
    
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel" style="background-color:#FFF; margin:0px; padding:0px;"> <!-- Content Panel -->
	       
	        
           
	 	<div class="row">
          <div class="large-12columns" style="padding:1.0em;">
            <div class="callout panel" style="margin:5px 5px 5px 5px;">
              <h1 align="center" style="font-size:1.50em;">Maryland Student Researchers Program</h1>      
              

    

      <h3 style="font-size:1.25em;" align="left" >Maryland Student Researchers Program</strong> and Database</h3>
      <p align="left" >The Maryland Student Researchers program is 
      a database of on-campus research opportunities for undergraduates. It is designed to help
       undergraduates find research opportunities and to help faculty members find research assistants. 
       The projects typically call for students to work four to ten hours a week (may be unpaid or paid) 
       under the direction of a faculty mentor on that faculty member&rsquo;s own research. Students learn skills 
       and gain valuable experience that will enhance their graduate school and job qualifications. In addition,
        students work closely with faculty members outside the classroom, allowing them to develop professional
         relationships with faculty and to make significant contributions to faculty research.</p>
      <p>To search for fall or spring semester MSR  opportunities mentored by a professor or other professional
       University  researcher, use the <a href="#search">search box below</a>. Fall and spring 
       semester opportunities  are updated each August (prior to fall semester) and January (prior to spring  semester).
        However, new opportunities may be posted at any time.</p>
      <p><a href="https://login.umd.edu/cas/login?service=http://ugresearch.umd.edu/researchopportunities/index.php" 
      class="blackonwhitebold">For Faculty: Submit a Maryland Student Researchers Opportunity</a></p>
      <p>
       We recommend that you review carefully the  advice provided below as you begin searching for MSR opportunities,
        and before  you contact faculty to apply for a posted opportunity:</p>
      <ol>
        <li>
          <h4 style="font-size:1.00em;"><a href="#eligibility">Eligibility guidelines</a>.</h4>
        </li>
        <li>
          <h4 style="font-size:1.00em;"><a href="#opportunities">How  do I get started searching and
           applying for MSR opportunities?</a></h4>
        </li>
        <li>
          <h4 style="font-size:1.00em;"><a href="#questions">Questions to ask professors when you contact them.</a></h4>
        </li>
        <li>
          <h4  style="font-size:1.00em;"><a href="#tips">Tips on getting the  most out of an MSR opportunity.</a></h4>
        </li>
      </ol>
    

    
      <h4 style="font-size:1.00em;"><strong>1. Eligibility Guidelines</strong></h4>
      <p>We  recommended that students interested in participating in MSR-listed research  opportunities have the following characteristics: </p>
      </br>
      <ul type="disc">
        <li>
          <p>be in good academic standing </p>
        </li>
      </ul>
      <p><em>Students in good academic standing have a cumulative GPA of  2.0. Students below that level are in academic probation. Because students in  academic probation for consecutive semesters may be subject to academic  dismissal from the University, we <strong><u>strongly</u></strong> recommend that students in academic probation NOT seek or commit time to  undergraduate research activities until they have restored themselves to good  academic standing at a minimum. </em></p>
      <ul type="disc">
        <li>
          <p>have a minimum GPA of 2.5 </p>
        </li>
      </ul>
      <p><em>While all students can benefit from a research experience,  we strongly recommend prioritizing coursework. If you are struggling or  underperforming in one or more areas academically it is in your best interests  to focus on strengthening your performance in your classes before committing  substantial time to an MSR-listed research project.</em></p>
      <ul type="disc">
        <li>
          <p>have completed at least 15 credits at College Park</p>
        </li>
      </ul>
      <p><em>Adjusting to your new life and studies at the University of  Maryland can take time. If you are a first semester freshman, we recommend that  you make settling in well your priority. If you get off to a strong start in  your coursework, and develop good time-management skills at the college-level,  you will be much better prepared to take on an MSR research experience  successfully.</em></p>
      <ul type="disc">
        <li>
          <p>are willing to work as a research assistant for at       least one semester </p>
        </li>
      </ul>
      <p><em>MSR  research mentors invest substantial time and effort to train undergraduates to be effective contributors  to their research projects. That investment  will pay off best for both parties&#8212;for you and for your mentor&#8212;if you are prepared to commit yourself for at  least one full semester of participation in  a research project. Consider carefully whether you are able and willing to undertake this commitment before accepting  a research opportunity.</em></p>
      <p>
        <em>[<a href="#top" title="Return to Top" target="_top">Return  to top</a>]</em></p>
      <h4 style="font-size:1.00em;">2. <strong>How do I get started  searching and applying for MSR opportunities?</strong>      </h4>
      <ol>
        <li>
          <p>Search the  Maryland Student Researchers Database to identify research projects of interest  to you. Be sure to use a variety of keywords to generate the largest number of  possible projects. Also, look in fields outside of, but related to your own to  increase your chances of finding a good fit. For example if you are a biology  major, look for projects in kinesiology, or if you are studying Chinese, look  for projects about East Asian history, politics, or society.</p>
        </li>
        <li>
          <p>Once you have  found a project that interests you, read our advice on &ldquo;Questions  Undergraduates Should Ask Research Mentors before Starting&rdquo; as well as &ldquo;How to  Get the Most out of Your Research Experience.&rdquo; Being well-informed, and having  realistic hopes and expectations, will help you to have a rewarding undergraduate  research experience.</p>
        </li>
        <li>
          <p>E-mail the  researcher whose project you wish to join. Introduce yourself and explain why  you want to join the project. Attach copies of a cover letter, resume, and  unofficial transcript to the e-mail. Your application will <u>ALWAYS</u> be  more effective if you provide specific, sincere reasons for contacting a  researcher about their project. For example:<br />
          </p>
        </li>
      </ol>
      <hr />
      <p>
        Dear Professor Blank,</p>
      <p>
        My name is Sara and I am a junior with a double major in  Cell Biology and Molecular Genetics and Journalism.   I saw your project on DNA Tumor Virology and  am very interested in joining, as I am considering going to graduate school to  study Virology. I have completed the courses listed as prerequisites for your  project. If you still have places available in your lab, I would love to be  involved in your work. Please find my cover letter, resume, and unofficial  transcript attached.<br />
        I look forward to hearing from you.</p>
      <p>
        Sincerely,<br />
        Sara Jane Smith
        </p>
      <hr />
      <p>
        4. The UMD Career Center has effective resources to help  you prepare a good, concise cover letter and resume – you can find these here:<br />
        Cover letters: <a href="http://www.careercenter.umd.edu/page.cfm?page_id=54">http://www.careercenter.umd.edu/page.cfm?page_id=54</a> <br />
        Resumes: <a href="http://www.careercenter.umd.edu/page.cfm?page_id=43">http://www.careercenter.umd.edu/page.cfm?page_id=43</a> </p>
      <p>
        5.  You and your  research mentor should come to a clear, explicit agreement concerning the  number of hours you will work and your daily and weekly schedules. You should  also have a clear understanding of how you and your research mentor will  communicate&#8212;how often and in what form (personal meetings, email updates,  reports,). We recommend that you come to an agreement with the faculty member  regarding hours (4-6 hours/week) and expectations.  Please speak to your faculty supervisor  before starting your assistantship to ensure that you understand what will be  expected of you.</p>
      <p><em>[<a href="#top" title="Return to Top" target="_top">Return  to top</a>]</em></p>
<h4 style="font-size:1.00em;">3. <strong>Questions to ask professors when you contact them</strong>:</h4>
<p>As a Maryland Student Researcher,  you are responsible for fulfilling the duties agreed upon with your mentor. The  following is a list of questions that it would be helpful for you to discuss  with your mentor before beginning your research assistantship. </p>
<ol>
  <li>
    <p>How many hours will I be        expected to work per week?</p>
  </li>
  <li>
    <p>What will my schedule be        (e.g., Monday, Wednesday, Friday 12-2pm)?</p>
  </li>
  <li>
    <p>What will my responsibilities        be?</p>
  </li>
  <li>
    <p>Who will be my direct        supervisor and how much supervision will I receive?</p>
  </li>
  <li>
    <p>Where will I perform my responsibilities?</p>
  </li>
  <li>
    <p>What if I get sick or have too        much school work one week? How can I make up the hours? Who should I        contact if I am not coming to work?</p>
  </li>
  <li>
    <p>What are my start date and end        date? Will I be responsible for working during exam week? &nbsp;Will I be        required to work during breaks such as spring break?</p>
    <p>We suggest printing out these  questions before you speak with a potential faculty mentor. These questions are  based on suggestions from prior Maryland Student Researchers.</p>
  </li>
</ol>
<p><em>[<a href="#top" title="Return to Top" target="_top">Return  to top</a>]</em></p>
<p>4.<a id="tips">Tips on getting the  most out of an MSR opportunity</a></strong>:
As a Maryland Student Researcher,  you have an opportunity to gain invaluable research skills and experiences.  &nbsp;MCUR aims for you to be introduced to the research process and to learn  more about a field that interests you. &nbsp;An added benefit is that you will  have a chance to build a relationship with a faculty member outside of the  classroom. &nbsp;<br />
  The following are some tips on how  to get the most out of your research experience: </p>
<ol>
  <li>
    <p>Keep in mind you are working on       a small piece of a larger project. Ask your faculty mentor to explain the       larger picture of the project.&nbsp; Ask graduate students about their       roles in the project. &nbsp;Ask how this project relates to other current       research in the field. Beyond what you learn about your particular field       of interest, being involved in research as an undergraduate gives you the       opportunity to learn about the climate and process of research more       generally.</p>
  </li>

  <li>
    <p>It is important to be assertive       and direct when communicating with your faculty mentor. If you are unclear       about directions for a particular task, ask for clarification. &nbsp;Ask       your mentor to set up a regular meeting time with you. &nbsp;The frequency       of these meetings will vary between projects, but we recommend meeting at       least every other week. &nbsp;These meetings may be short, but the purpose       of them is to give you an opportunity to ask questions and to give your       mentor an opportunity to give feedback and guidance. &nbsp;Let your       faculty mentor know if you are interested in sitting in on research group       meetings.</p>
  </li>
  <li>
    <p>You are likely to be most       satisfied with your Maryland Student Researcher experience if you make a       sincere and enthusiastic commitment to your project. &nbsp;Remember your       mentor has planned on having your help with his or her project throughout       the semester. Do your best to complete the tasks you are asked to do.       &nbsp;Remember that while some tasks may seem insignificant, careful       attention to minor tasks is crucial to any project&rsquo;s success. &nbsp;Make       sure your mentor knows you appreciate the time he or she spends with you.</p>
  </li>
  <li>
    <p>Think about how you will manage       your time at the beginning of the semester. &nbsp;It is sometimes       difficult to strike a balance between your coursework, your research       experience, and the rest of your life. Think carefully about your other       responsibilities for the semester before committing to weekly hours with       your faculty mentor. &nbsp;You and your faculty mentor will benefit the       most from your work as a research assistant if you set and keep regular       working hours. &nbsp;If special circumstances do arise, notify your mentor       as soon as possible.</p>
  </li>
</ol>
  <p><a id="search">Search for Fall or Spring Semester <u>Professor-mentored</u> MSR Opportunities Using Keywords:</a></p>
      <p>Search Tip: You can search by college (e.g., BSOS, CMNS, AGNR, etc.) or by academic fields (biology, art history, economics, etc.) 
           or by topics (e.g., Africa, women&rsquo;s health, civil war, etc.). To increase your chances of finding projects that are a good fit for your interests,      conduct multiple searches using a variety of keywords. Be aware that great projects for you might be listed by researchers in colleges or majors other      than your own.</p>
      <p>
        Search <a href="researchopportunities/get_researchopps_alldata.php">all research opportunities</a> </p>
      <p>
       <form method=post action='searchnew.php'>

<div id='box' style='border-style: solid;border-width: 2px;padding:5px;width:100%;'>
<input type="text" name="search" placeholder="Keyword">
<!--<input style='width:50%; padding:5px;' type=text name=search_text ><input style='padding:5px;margin-left:10px;width:90px;'type=submit value=Search>-->
<input type="submit" value="Search" />

           Campus College:&nbsp; <select  style="width:80px;" name="collegeq">
                    <option>All</option>
					<option>AGNR</option>
                    <option>ARCH</option>
                    <option>ARHU</option>
                    <option>BSOS</option>
                    <option>BMGT</option>
                    <option>CMNS</option>
                    <option>EDUC</option>
                    <option>ENGR</option>
                    <option>SPHL</option>
                    <option>INFM</option>
                    <option>JOUR</option>
                    <option>PUAF</option>
                    <option>UGST</option>
                 </select>
			
				 <br><br />
				Filter Criteria:&nbsp;
				 <input style="width:20px; margin-left: 20px;" type="radio" name="type" value="any" checked>By Keyword or College&nbsp;&nbsp;
                 <input type="radio"  style="width:20px; margin-left: 20px;" name="type" value="all" >By Keyword and College<br /><br />
</div>
</form>
      </p><br/>

<?php print ($output);?>      
<p><em>[<a href="#top" title="Return to Top" target="_top">Return  to top</a>]</em></p>
<br/>
<p>Have a great semester! If you have any questions during the semester, feel free to  contact the Maryland Center for Undergraduate Research at <a href="mailto:ugresearch@umd.edu">ugresearch@umd.edu</a></p>

</div>
</div>
</div>
   

          
        
         
       <div class="row" style="margin:5px 0px 5px 0px; background-color:#6ca4ba; color:#FFF;"> <!-- Footer Row -->
       <div class="row" style="margin:5px 15px 5px 15px; color:#FFF;">
          <div class="large-6 medium-6 columns">
          
              <div style="color:#FFF;" align="center"><img src="images/ugresearch-ugst-brand500wide.png" alt="Maryland Center for Undergrauate Research at the Uniersity of Maryland" vspace="10px"></div>
          
          </div>
          
          <div class="large-6 medium-6 columns">
            
              <p style="color:#FFF;">Maryland Center for Undergraduate Research<br>
                Phone: 301-314-6786&nbsp;&nbsp;|&nbsp;&nbsp;Email: <a href="mailto:ugresearch@umd.edu" style="color:#FFF">ugresearch@umd.edu</a><br>
2100D McKeldin Library, University of Maryland<br>
College Park, MD   20742</p>
          
          </div>
          
        </div>
        
      </div ><!-- /Footer Row -->
  </div><!-- /Content Panel -->
        
      
      </div>
    </div>
       
       

        
                
        
         

      
    </div>
  
  
  </div>
      </div>
    </div>  

</div> <!-- /panel -->   
</div><!--/container -->
</div><!--/container col -->
</div><!--/container row -->

<script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
  </script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/foundation.js"></script>
<script>
      $(document).foundation();

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
  </body>
</html>
