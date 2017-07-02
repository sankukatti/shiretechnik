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
				Leadership
			</p>

			<hr/>

			<p class="block text justify">
				Shiretechnik is headquartered in Bangalore with wide support network offices, and a strong network of channel partners.
			</p>

			<div class="row">
				<div class="col-sm-3" data-toggle="modal" data-target="#shankar">
					<img class="team-image" src="images/about/shankar.jpeg"/>
					<p class="bold blue" >
						Shankar S - Director Engineering
					</p>
				</div>	
				<div class="col-sm-3" data-toggle="modal" data-target="#sandeep">
					<img class="team-image" src="images/about/sandeep.jpg"/>
					<p class="bold blue" >
						Sandeep Nandi - Lead Thermal &amp; Mechanical
					</p>
				</div>
				<div class="col-sm-3" data-toggle="modal" data-target="#debasis">
					<img class="team-image" src="images/about/dummy.jpg"/>
					<p class="bold blue">
						Debasis - Director Operations
					</p>
				</div>
				<div class="col-sm-3" data-toggle="modal" data-target="#moumita">
					<img class="team-image" src="images/about/moumita.jpg"/>
					<p class="bold blue">
						Moumita- Design Consultant
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
				<div class="col-sm-3" data-toggle="modal" data-target="#subrata">
					<img class="team-image" src="images/about/subrata.jpg"/>
					<p class="bold blue" >
						Subrata Patra
					</p>
				</div>	
			</div>
		</div>
	</section>

	<div id="subrata" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Subrata Patra - Advisory Board Member </h4>
				</div>
				<div class="modal-body">
					<p class="block justify">
						Former space scientist, Subrata is an experienced leader of organization units delivering strong top-line and bottom-line growth through innovation, quality execution, and premier customer service. He has served 17 years in progressive roles in technology industry, including global product portfolio leadership, country management, best known methods influencing thermal industry's design practices. Subrata has expertise across thermal engineering and EMI/EMC leadership in marquee organizations like ISRO, Intel, Parker Hannifin. He has also served hundreds of customers in a wide variety of settings, including flagship and global accounts, across 10+ markets. Subrata is an alumnus of UC Berkeley Haas School of Business, IIT Delhi, and Jadavpur University.
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
					<h4 class="modal-title">Shankar S - Lead Thermal & CFD</h4>
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
					<h4 class="modal-title">Sandeep Nandi - Lead Thermal &amp; Mechanical</h4>
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
					<h4 class="modal-title">Debasis - Lead HVAC design</h4>
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
@endsection