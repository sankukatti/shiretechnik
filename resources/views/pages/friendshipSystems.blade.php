@extends('layouts.app')

@section('title', 'Partner')

@section('content')
	<section class="partner">
		<div class="container ">
			<div class="row">
				<div class="col-sm-12">
					<p class="title-text block bold blue title-spacing capitalize">
                    FRIENDSHIP SYSTEMS
                    </p>
                </div>
            </div>
            
            <div class="flex-container">
                <div class="flex-child" >
                    <a href="https://www.friendship-systems.com" target="_blank" class="imgCenter">
                        <img src="/images/partners/FS.png">
                    </a>
                </div>
                <div class="flex-child">
                    <a href="https://www.caeses.com" target="_blank">
					    <img class="image" src="/images/partners/caeses.png">
                    </a>
                </div>
                
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <p class="block text justify">
                        FRIENDSHIP SYSTEMS is a leader in CFD-driven shape optimization of complex free-form geometries. Our flagship product CAESES is an integration and automation platform that includes simulation-ready variable CAD, optimization algorithms, and post-processing. Customers use CAESES together with their CFD tool to design and develop better products, faster, and at lower cost. Typical areas of interest include turbomachines, ducts and manifolds, engine components, aerodynamic bodies, ship hulls, amongst others.
                    </p>
				</div>
            </div>
            
		</div>
	</section>
@endsection
<style type="text/css">
	.footer-section {
		position: fixed;
		width: 100%;
		bottom: 0;
	}
    .partner .flex-container {
        align-items: center;
    }
</style>