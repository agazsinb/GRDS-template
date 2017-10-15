<!doctype html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>GRDS - Results</title>
	<script>
		$(document).ready(function() {
		    // Configure/customize these variables.
		    var showChar = 150;  // How many characters are shown by default
		    var ellipsestext = "...";
		    var moretext = "<button>Read More</button>";
		    var lesstext = "<button>Read Less</button>";
		    

		    $('.more').each(function() {
		        var content = $(this).html();
		 
		        if(content.length > showChar) {
		 
		            var c = content.substr(0, showChar);
		            var h = content.substr(showChar, content.length - showChar);
		 
		            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
		 
		            $(this).html(html);
		        }
		 
		    });
		 
		    $(".morelink").click(function(){
		        if($(this).hasClass("less")) {
		            $(this).removeClass("less");
		            $(this).html(moretext);
		        } else {
		            $(this).addClass("less");
		            $(this).html(lesstext);
		        }
		        $(this).parent().prev().toggle();
		        $(this).prev().toggle();
		        return false;
		    });
		});
	</script>
</head>
<body class="body-results">
	<a href="index2.html" class="back-button">Back</a>
	<h1>Search Results</h1>
	<!-- [number] refers to the number of results that are queried on [keyword]
get post method here
	-->
	<h3>[number] results on [keyword]</h3>

	<div class="top-button">
		<button class="top-button">Sort</button>
		<button class="top-button">Filter</button>
	</div>

	<!-- template for one result  search for "1099" EXAMPLE 1-->
	<div class="result-box"  >
		<h2>1099 - Asset and money management</h2>
		
		<p class="more">Records relating to the payment or receipt of money and the financial management of the agency’s assets.
						Includes records, which document the agency’s financial and bank transactions, as well as the management of trusts.
						Records may include, but are not limited to:
 accounting – cash books, ledgers, journals, bank statements, reconciliations, receipt and revenue records, requisition/purchase orders
 annual and periodic financial statements including:
o certified financial statements prepared for abolished agencies in accordance with s.47 and s.48 of the Financial and Performance Management Standard 2009
o certified financial statements prepared for newly formed agencies in accordance with s.44 of the Financial and Performance Management Standard 2009.
 asset/equity management – approvals, asset identification, depreciation, evaluation, losses and write-offs, revaluations, transfers, valuations and verifications
 banking activities – banking accounts, investment and dividend statements, deposit/withdrawal records, electronic funds transfer (EFT) and international money transfers (IMT) transaction records
 contingent assets and liabilities – quarterly reports
 credit card usage, including special purpose facilities such as fuel cards and purchase cards – credit card applications, arrangements (e.g. credit limits, payment terms, benefits, security, etc.) and statements
 debts, overpayments and material losses – includes debt recovery and write-offs
 donations – approvals, notifications, terms & conditions
 fundraising – winning raffle tickets
 non-cash business benefits received by agency staff (e.g. frequent flyer points) – applications and statements
 payment records – includes invoices, cheques and special payments such as ex gratia payments, extra-contractual payments, out of court settlements, court ordered damages and payments requiring Governor-in-Council approval
 user fee setting – approvals, schedule of fees
 receipt of royalty payments
 trust management
 rewards, e.g. reporting vandalism committed on or to agency property.
						
						Main division : FINANCIAL MANAGEMENT
						Sub-division : Accounting
						</p>
	</div>
<!--   SEARCHING FOR  "ANNUAL REPORT" EXAMPLE 5-->
	<div class="result-box">
		<h2>Asset Management</h2>
		<p class="more" >Acquiring, supplying, maintaining, repairing and disposing of moveable assets.
		Moveable assets may include, but are not limited to: vehicles, machinery, plant, equipment, appliances, implements, tools, furniture, furnishings, clothing, chemicals, hardware (including IT), kitchen/cleaning items, medical supplies, stationery and software.
		Excludes the management of buildings, structures and land and the management of moveable assets, required for the delivery of core functions, which have specific retention requirements (e.g. firearms).
		See COMMON ACTIVITIES – Compensation for records relating to compensation/insurance claims for injuries and/or damage/loss of assets.
		See FINANCIAL MANAGEMENT – Accounting for the financial management of moveable assets.
		See PROPERTY MANAGEMENT for the management of buildings, structures or land.
		See WORK HEALTH AND SAFETY – Accidents and Incidents for records relating to work health and safety accidents and incidents that involve agency assets.</p>

		<h2>1042 - Reports – significant</h2>
		<p class="more" >Significant reports may include, but are not limited to:
			 strategic level reports relating to the agency’s core functions and performance
			 those with whole-of-government implications.
			Includes whole-of-government reporting performed by agencies that have an overview of other agency’s compliance with legislation.
			Also includes both published and unpublished reports.
			Records may include, but are not limited to:
			 annual reports.

			Main division : COMMON ACTIVITIES
					Sub-division : Reporting</p>
	
	</div>
	<div class="result-box"  >
		<h2>1147 - Agency publications – significant</h2>
		<p class="more" >Master copies of all significant agency publications.
			Includes final version of agency annual report.
			Significant publications may include those that:
			 define the functions of government relating to the government’s jurisdiction and power
			 have whole of government implications
			 generate/involve substantial community or public interest, debate or controversy
			 have social, economic, environmental, cultural, scientific, research or technical significance to the broader community
			 mark major anniversaries or opening of new landmark structures and/or buildings.
		Main division : INFORMATION MANAGEMENT
		Sub-division : Publication
		</p>
		
	</div>
	<div class="result-box"  >
		<h2>1272 - DRAFTS, WORKING NOTES AND CALCULATIONS </h2>
		<p class="more" >Examples (Records) may include, but are not limited to:
			 drafts, audio recordings and shorthand notes used to prepare other documents
			 drafts which do not proceed and of which no final version is created
			 calculations, statistics or figures
			 personal meeting minutes where a formal record exists
			 editing of spelling and grammar where there are no other significant changes
			 background research
			 unused reference material
			 spreadsheets or word processing documents that have been incorporated into another document.

	<div class="result-box">
		<h2>Collection Management</h2>
		<p class="more" >Acquiring, organising and processing the collection of a library and/or information centre, museum, art gallery, theatre etc. Includes those collections that support agency functions and which are not their core business, e.g. school libraries. Also includes the selection, ordering, accessioning, acquisition, cataloguing, index, evaluation of collection material, and preserving of collection material and use of the collection.
								Excludes agencies where collection management is a core function. 
								See ASSET MANAGEMENT for records relating to the acquisition, maintenance and disposal of hardware, internet services, software and telecommunications equipment.
								See COMMON ACTIVITIES: 
								 
								•	Policy
								•	Planning
								•	Procedures
								•	Risk Management
								 
								See EXTERNAL RELATIONS:
								•	Donations for records relating to gifts, benefits and bequests
								•	Exhibitions for records relating to exhibitions
								•	Program and Event Management for records relating to programs and events presented or hosted by a cultural institution or library.
								See INFORMATION MANAGEMENT – Copyright Administration for records relating to copyright.
								See PROPERTY MANAGEMENT for records relating to library, museum, art gallery, theatre, etc. buildings.
								See WORKFORCE MANAGEMENT for records relating to employing staff.
								See TRANSITORY AND SHORT TERM:
								•	Collections-Control and Management for records relating to the control and management of general collections
								•	Moveable Assets Controls and Stocktakes for records relating to collection stocktakes
								•	Reference and Lending Services for records relating to services provided by staff
								•	Space Management records relating to the assessment and management of storage space.</p>

			Excludes:
			 drafts providing evidence of processes and/or significantly more information than final versions (e.g. drafts of policy development; legislation; contracts/agreements)
			 working papers/records of a project officer or investigative officer where they are the substantive record of the project or investigation
			 papers in an unofficial filing system, where a full record has not been maintained in a recordkeeping system
			 drafts required as evidence of decisions, reasons, actions or formal approvals
			 research conducted or commissioned by the agency to support its functions
			 records documenting the drafting process of an agency’s publications (including annual reports).
					Main division : TRANSITORY AND SHORT TERM
					Sub-division : DRAFTS, WORKING NOTES AND CALCULATIONS
		</p>
		
	</div>
	
	<!-- EXAMPLE 3 SEARCH FOR "Environmental Authority" -->
	<div class="empty">
		<p> NO RESULTS</p>
	</div>
</body>
<html>