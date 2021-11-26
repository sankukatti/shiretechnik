@extends('layouts.app')

@section('title', 'About us')

@section('content')
	<section class="about-us-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="title-text bold blue title-spacing">
						About Us
					</p>

					<p class="block text justify">
						Shiretechnik is an engineering design analysis firm uniquely positioned to provide clients with superior results. Our experienced personnel, abundant resources, and state-of-the-art engineering analysis tools, labs and equipment with focus on clients' demands help us to achieve a unique place in the dynamic market that exists today.
					</p>


					<p class="block text justify">
						Since its Inception, Shiretechnik has established a reputation with excellent services to its customers, providing high-quality and cost-effective solutions. Each member of the team is customer-driven and brings a combination of design, analysis and test skills to resolve the issues faced by our customers. Most of our team members have 10 or more years of experience in solving thermal CFD problems in product development or research environment.
					</p>

					<p class="title-text bold blue title-spacing">

					</p>

				</div>
			</div>


			<p class="title-text bold blue title-spacing">
				Team
			</p>

			<hr/>

			<p class="block text justify">
				Shiretechnik is headquartered in Bangalore with wide support network offices, and a strong network of channel partners.
			</p>

			<div class="row">
				<div class="col-sm-4" data-toggle="modal" data-target="#shankar">
					<img class="team-image" src="images/about/shankar.jpg"/>
					<p class="bold blue team-member-name" >
						Shankar S - Head of Engineering
					</p>
				</div>
				<div class="col-sm-4" data-toggle="modal" data-target="#sandeep">
					<img class="team-image" src="images/about/sandeep.png"/>
					<p class="bold blue team-member-name" >
						Sandeep Nandi - Head of Thermal &amp; Mechanical
					</p>
				</div>
				<div class="col-sm-4" data-toggle="modal" data-target="#debasis">
					<img class="team-image" src="images/about/debasis.png"/>
					<p class="bold blue team-member-name">
						Debasis - Head of Operations
					</p>
				</div>
				<div class="col-sm-4" data-toggle="modal" data-target="#archan_c">
					<img class="team-image" src="images/about/archan_chaterjee.png"/>
					<p class="bold blue team-member-name">
						Archan Chaterjee - Head Sales
					</p>
				</div>
				<div class="col-sm-4" data-toggle="modal" data-target="#milind_k">
					<img class="team-image" src="images/about/milindKothe.jpeg"/>
					<p class="bold blue team-member-name" >
						Milind Kothe - Application Engineer
					</p>
				</div>

				<div class="col-sm-4" data-toggle="modal" data-target="#psyrus_p">
					<img class="team-image" src="images/about/psyrus_p.jpeg"/>
					<p class="bold blue team-member-name" >
						Psyrus Panda - Sales and Support Engineer
					</p>
				</div>

				<div class="col-sm-4" data-toggle="modal" data-target="#pradeep_k">
					<img class="team-image" src="images/about/pradeep_k.jpeg"/>
					<p class="bold blue team-member-name" >
						Pradeep Kunta - Service Engineer
					</p>
				</div>

			</div>

			<div class="row">
				<div class="col-sm-12">
					<p class="title-text bold blue title-spacing block">
						Advisory Board Member
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" data-toggle="modal" data-target="#sarang_shidore">
					<img class="team-image" src="images/about/shidore.jpg"/>
					<p class="bold blue" >
						Sarang Shidore
					</p>
				</div>
			</div>
		</div>
	</section>

	<div id="sarang_shidore" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Sarang Shidore - Advisory Board Member </h4>
				</div>
				<div class="modal-body">
					<p class="block justify">
						Sarang Shidore is an expert in semiconductor thermal phenomena and corporate strategy and product planning. He received his Bachelor's degree from the Indian Institute of Technology, Madras, and his Master's degree from the University of Texas, Austin.
					</p>
					<p class="block justify">
						Since 1995, he worked at Flomerics Inc., at Austin, TX, in various roles in engineering and product management with a special focus on package-level thermal modeling and analysis, a field in which he authored several papers and articles, and also developed two international standards as Vice-Chair of the JC15 committee of JEDEC, the international standards body for the semiconductor industry.
					</p>
					<p class="block justify">
						At Flomerics, he had worldwide product responsibilities - from roadmaps to rollout. He Conceptualized and created two web-based software products in semiconductor thermal analysis catering to several Fortune 500 companies such as Texas Instruments, Intel, ST Microelectronics, etc. The product made a quantum leap in Flomerics' offerings to the semiconductor industry. He was also key in establishing the Flomerics Development Centre in Bangalore.
					</p>
					<p class="block justify">
						In addition, he worked for Mentor Graphics as Product Marketing Manager and for several years as a consultant for various organizations. He is currently a visiting scholar at the Lyndon B. Johnson School of Public Affairs at the University of Texas at Austin, focused on energy and climate policy and engaged in consulting in strategy and scenario planning.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

	<div id="shankar" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Shankar S - Head of Thermal & CFD</h4>
				</div>
				<div class="modal-body">
					<p class="block justify">
						Shankar has seventeen years of professional experience on hardware product engineering and program management worked with the leading development teams in private sectors. He holds a Master’s degree in thermal engineering from Indian Institute of Technology (IIT), Chennai and two Bachelor degrees in mechanical engineering from Institute of Engineers, Kolkata and in mathematics from Madras University. He was in core development team for developing Thermal products FloTHERM, FloTHERM PACK. He keeps proven track records of managing complex functional hardware projects, and delivered the world-class products in Telecom, Defence, Aerospace and Consumer Applications. He received several honours &amp; awards in his professional career and notably winner of prestigious annual award for "Values Personification" in Leadership category from Aricent for the successful project management in the year 2013. He has deep expertise in CFD simulation tools with a special focus on electronics cooling analysis,and also authored the papers on thermal modelling in CFD environments in <a href="http://ieeexplore.ieee.org/document/4147290/">IEEE conferences.</a>
					</p>

					<p class="block justify">
						Certified Reliability Professional with Outstanding Grade from Centre for Reliability (CFR) – STQC Directorate, Ministry of Communication and Information Technology, Government of India. He has sound technical knowledge in Reliability Engineering.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

	<div id="sandeep" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Sandeep Nandi - Head of Thermal &amp; Mechanical</h4>
				</div>
				<div class="modal-body">
					<p class="block justify">
						Sandeep has more than twelve years of professional experience in CAE Software development domain and hardware product engineering in private sectors. He was the part of FloTHERM development team and also has worked for Dassault Systems, ESI etc. He holds Master’s and Bachelor’s degrees in Mechanical Engineering from Indian Institute of Technology (IIT), Kharagpur. He has deep expertise in CFD simulation tools. He is also co-founder of  SANDEBTech Pvt.Ltd.
					</p>
					<p class="block justify">
						Track Record - Dassault Systems, ESI, Flomerics India Pvt Ltd sportskeeda.com, policymantra.com.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

	<div id="debasis" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Debasis - Head of Operations</h4>
				</div>
				<div class="modal-body">
					<p class="block justify">
						Debasis has eleven years of professional experience in Software development, hardware product engineering, Sales and Business development activities in private sectors. He was a part of core development team for developing thermal CFD products like FloTHERM, FloTHERM PACK. He has proven track records of executing complex functional hardware projects and delivered the world-class products in Telecom, Defence, Aerospace and Consumer Applications domain.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

	<div id="moumita" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Moumita- Design Consultant</h4>
				</div>
				<div class="modal-body">
					<p class="block justify">
						Moumita has eight years of professional experience in product development in automotive and petroleum industry. She holds a Master’s degree in Chemical Engineering from Indian Institute of Technology (IIT), Chennai. She has deep expertise in CFD simulation tools, worked in thermal modeling of electrochemical energy storage devices, computational fluid flow and heat analysis in Evaporator & Distillation Columns using COMSOL software. Her other areas of expertise are - Heat Transfer Analysis of Heat Exchangers, Optimization of natural and forced convection in storage tanks, MATLAB and Simulink modeling of battery and Solar PV modules.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

	<div id="milind_k" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Milind Kothe - Application Engineer</h4>
				</div>
				<div class="modal-body">
					<p class="block justify">
						Milind is Mechanical engineer and GATE qualified; his focus areas are parametric modeling and CFD analysis in turbomachinery domain.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

	<div id="archan_c" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Archan Chaterjee - Head Sales</h4>
				</div>
				<div class="modal-body">
					<p class="block justify">
						 Archan, having more than 15 years experience in the field of engineering sales and marketing. He has International marketing and business development experience. Expertise in new product promotions, sales, business strategy making.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>
@endsection
