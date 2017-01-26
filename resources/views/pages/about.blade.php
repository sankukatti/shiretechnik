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

					<p class="block text justify">
						Shiretechnik is headquartered in Bangalore with wide support network offices, and a strong network of channel partners.
					</p>				

				</div>
			</div>
			<hr/>

			<div class="row">
				<div class="col-sm-3" data-toggle="modal" data-target="#shankar">
					<img class="team-image" src="images/about/shankar.jpg"/>
					<p class="bold blue" >
						Shankar S - Lead Thermal & CFD
					</p>
				</div>	
				<div class="col-sm-3" data-toggle="modal" data-target="#sandeep">
					<img class="team-image" src="images/about/sandeep.jpeg"/>
					<p class="bold blue" >
						Sandeep Nandi - Lead Thermal &amp; Mechanical
					</p>
				</div>
				<div class="col-sm-3" data-toggle="modal" data-target="#debasis">
					<img class="team-image" src="images/about/dummy.jpg"/>
					<p class="bold blue">
						Debasis - Lead HVAC design
					</p>
				</div>
				<div class="col-sm-3" data-toggle="modal" data-target="#moumita">
					<img class="team-image" src="images/about/moumita.jpg"/>
					<p class="bold blue">
						Moumita- Design Consultant
					</p>
				</div>			
			</div>
			<!-- <div class="row">
				<div class="col-sm-12">
					<p class="sub-title-text bold blue">
						Team
					</p>
				</div>

				<div class="col-sm-3">
					<img class="team-image" src="images/about/shankar.jpg"/>
				</div>
				<div class="col-sm-9">
					<p class="bold blue">
						Shankar S - Lead Thermal & CFD
					</p>
					<p class="block justify">
						Shankar has seventeen years of professional experience on hardware product engineering and program management worked with the leading development teams in private sectors. He holds a Master’s degree in thermal engineering from Indian Institute of Technology (IIT), Chennai and two Bachelor degrees in mechanical engineering from Institute of Engineers, Kolkata and in mathematics from Madras University. He was in core development team for developing Thermal products FloTHERM , FloTHERM PACK. He keeps proven track records of managing complex functional hardware projects, and delivered the world-class products in Telecom, Defence, Aerospace and Consumer Applications. He received several honours &amp; awards in his professional career and notably winner of prestigious annual award for &amp; Values Personification &amp; in Leadership category from Aricent for the successful project management in the year 2013. He has deep expertise in CFD simulation tools with a special focus on electronics cooling analysis, and also authored the papers on thermal modelling in CFD environments in IEEE conferences. 
					</p>

					<p class="block justify">
						Certified Reliability Professional with Outstanding Grade from Centre for Reliability (CFR) – STQC Directorate, Ministry of Communication and Information Technology, Government of India. He has sound technical knowledge in Reliability Engineering. 
					</p>	
				</div>

				<div class="col-sm-3">
					<img class="team-image" src="images/about/sandeep.jpeg"/>
				</div>
				<div class="col-sm-9">
					<p class="bold blue">
						Sandeep Nandi - Lead Thermal &amp; Mechanical
					</p>

					<p class="block justify">
						Sandeep has more than twelve years of professional experience in on Software development CAE, domain and hardware product engineering in private sectors. He was part of FloTherm development team also worked for Dassault Systems, ESI etc. He holds a Master’s and and Bachelor’s degrees in Mechanical Engineering from Indian Institute of Technology (IIT), Kharagpur. He has deep expertise in CFD simulation tools. He is a founder Director of Sandebtech Pvt Ltd. His Samba moves are really eye catching, also participated in Hong Kong International samba compaction.
					</p>
					<p class="block justify">
						Track Record - Dassault Systems, ESI, Flomerics India Pvt Ltd sportskeeda.com, policymantra.com.
					</p>
				</div>

				<div class="col-sm-12">
					
				</div>

				<div class="col-sm-3">
					<img class="team-image" src="images/about/debsis.jpg"/>
				</div>
				<div class="col-sm-9">
					<p class="bold blue">
						Debasis - Lead HVAC design
					</p>

					<p class="block justify">
						Debasis has eleven years of professional experience on Software development, hardware product engineering, Sales and Business development activities in private sectors. He was also a part of core development team for developing software thermal CFD products like FloTHERM, FloTHERM PACK. He keeps proven track records of executing complex functional hardware projects, and delivered the world-class products in telecom, Defence, Aerospace and Consumer Applications domain.
					</p>
				</div>
			</div> -->
		</div>
	</section>


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
						Sandeep has more than twelve years of professional experience in on Software development CAE, domain and hardware product engineering in private sectors. He was part of FloTherm development team also worked for Dassault Systems, ESI etc. He holds a Master’s and and Bachelor’s degrees in Mechanical Engineering from Indian Institute of Technology (IIT), Kharagpur. He has deep expertise in CFD simulation tools. He is a founder Director of Sandebtech Pvt Ltd. His Samba moves are really eye catching, also participated in Hong Kong International samba compaction.
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
						Debasis has eleven years of professional experience on Software development, hardware product engineering, Sales and Business development activities in private sectors. He was also a part of core development team for developing software thermal CFD products like FloTHERM, FloTHERM PACK. He keeps proven track records of executing complex functional hardware projects, and delivered the world-class products in telecom, Defence, Aerospace and Consumer Applications domain.
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
						Moumita has eight years of professional experience on product development in automotive and petroleum industry. She holds a Master’s degrees in Chemical Engineering from Indian Institute of Technology (IIT), Chennai. She has deep expertise in CFD simulation tools, worked in thermal modeling of electro-chemical energy storage devices, computational fluid flow and heat analysis in Evaporator & Distillation Columns using COMSOL software.
					</p>
					<p class="block justify">
						Other area of works are 
						Heat Transfer Analysis of Heat Ex-changers,
						Optimization of natural and forced convection in storage tanks,
						MATLAB and Simulink modelling of battery and Solar PV modules,
						and She is fond of writing, design arts work, her few write up can be explored at <a href="http://www.pinkjooz.com/index.php/author/mou_nandi/">pinkjooz </a>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>
@endsection