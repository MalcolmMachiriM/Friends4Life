@extends('layouts.app')

@section('title', 'About - Friends For Life')

@section('content')


<div class="mobile-nav__wrapper">
	<div class="mobile-nav__overlay mobile-nav__toggler"></div>
	<!-- /.mobile-nav__overlay -->
	<div class="mobile-nav__content">
		<span class="mobile-nav__close mobile-nav__toggler"></span>

		<div class="logo-box">
			<a href="../index.html">
				<img decoding="async" width="140" height="27" src="../../layerdrops.com/insurwp/wp-content/uploads/2022/07/logo-light.png" id="mobile-thm-logo" alt="Friends For Life Intermediary Services | Your Trusted Insurance Broker">
			</a>
		</div>
		<!-- /.logo-box -->
		<div class="mobile-nav__container"></div>
		<!-- /.mobile-nav__container -->
					<ul class="mobile-nav__contact list-unstyled ml-0">
									<li>
						<i class="fa fa-envelope"></i>
						<a href="info%40friends4life.co.html">info@friends4life.co.za</a>
					</li>
													<li>
						<i class="fa fa-phone-alt"></i>
						<a href="tel:010-500-0069">010 500 0069</a>
					</li>
										</ul><!-- /.mobile-nav__contact -->
			<div class="mobile-nav__top">
				<div class="mobile-nav__social">
											<a target=_blank class="icon-svg" href="https://twitter.com/friends4life_za">
							<svg aria-hidden="true" class="  e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>						</a>
											<a target=_blank class="icon-svg" href="https://www.facebook.com/Friends4LifeBrokers">
							<svg aria-hidden="true" class="  e-font-icon-svg e-fab-facebook-square" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>						</a>
											<a target=_blank class="icon-svg" href="https://www.instagram.com/friends4life_za/">
							<svg aria-hidden="true" class="  e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>						</a>
									</div><!-- /.mobile-nav__social -->
			</div><!-- /.mobile-nav__top -->
	</div>
	<!-- /.mobile-nav__content -->
</div>



	<div class="search-popup">
		<div class="search-popup__overlay search-toggler"></div>
		<!-- /.search-popup__overlay -->
		<div class="search-popup__content">
			<form action="https://friends4life.co.za/">
				<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
				<input type="text" id="search" name="s" placeholder="Search Here..." />
				<button type="submit" aria-label="search submit" class="thm-btn">
					<i class="icon-magnifying-glass"></i>
				</button>
			</form>
		</div>
		<!-- /.search-popup__content -->
	</div>




	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

		</div>
				</div>
					</div>
		</div>
					</div>
		</header>
				</div>
		                        <!-- end of the loop -->

            
        
		
					<!--Page Header Start-->
<section class="page-header">
	<div class="page-header-bg"></div>
			<div class="page-header-shape-1"><img src="../../layerdrops.com/insurwp/wp-content/uploads/2022/07/page-header-shape-1.png" alt="shape"></div>
		<div class="container">
		<div class="page-header__inner">
										<ul class="thm-breadcrumb list-unstyled ml-0" typeof="BreadcrumbList" vocab="https://schema.org/">
					<!-- Breadcrumb NavXT 7.3.0 -->
<li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Friends For Life Intermediary Services | Your Trusted Insurance Broker." href="{{ route('about.index')}}" class="home" ><span property="name">Friends For Life Intermediary Services | Your Trusted Insurance Broker</span></a><meta property="position" content="1"></span></li>
<li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">About Us</span><meta property="url" content="https://friends4life.co.za/about/"><meta property="position" content="2"></span></li>
				</ul>
									<h2>
									About us							</h2>
		</div>
	</div>
</section>
<!--Page Header End-->				<div data-elementor-type="wp-page" data-elementor-id="41" class="elementor elementor-41" data-elementor-post-type="page">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-1e812d9 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="1e812d9" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b7755d" data-id="3b7755d" data-element_type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-dd72e78 elementor-section-full_width elementor-section-height-default elementor-section-height-default bg-light" data-id="dd72e78" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-843e717" data-id="843e717" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ba22306 elementor-widget elementor-widget-text-editor" data-id="ba22306" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.23.0 - 05-08-2024 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<p style="text-align: justify; margin-left:10%; margin-right:10%; margin-top: 2%;">At Friends For Life Intermediary Services, we offer a comprehensive range of insurance products designed to meet diverse needs. Our services include Car Insurance, providing comprehensive coverage to keep you and your vehicle protected; Medical Insurance, ensuring access to quality healthcare with peace of mind; Pet Insurance, so you can afford the best care for your furry friends; Home Insurance, safeguarding your home and belongings from unexpected events; Health Insurance, supporting your well-being and financial stability; Life Insurance, offering security for your loved ones and financial protection for the future; Business Indemnity Insurance, protecting your business against various risks; Vehicle Tracker solutions, helping you keep track of your vehicle’s location and safety; Commercial Insurance, providing tailored solutions for businesses of all sizes; and Car Warranty, extending protection beyond the manufacturer’s warranty. Our goal is to deliver personalized solutions that ensure you receive the right coverage at competitive rates, all while providing exceptional support throughout the insurance process. Intermediary Services, we pride ourselves on our:</p>						</div>
				</div>
				<div class="elementor-element elementor-element-1b1b4a8 elementor-widget elementor-widget-insur-about" data-id="1b1b4a8" data-element_type="widget" data-widget_type="insur-about.default">
				<div class="elementor-widget-container">
				<!--About Four Start-->
	<section class="about-four">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="about-four__left">
						<div class="about-four__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
															<div class="about-four__img">
									<img decoding="async" src="../wp-content/uploads/2024/08/Untitled-design-20.png" alt="https://friends4life.co.za/">
								</div>
																						<div class="about-four__img-two">
									<img decoding="async" src="../wp-content/uploads/2024/04/car-warranty.png" alt="">
								</div>
													</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="about-four__right">
													<div class="section-title text-left">
																									<h2 class="section-title__title">Our Story

</h2>
															</div>
																			<p class="about-four__text-1">Founded with a commitment to excellence and client satisfaction, Friends For Life Intermediary Services has grown into a leading insurance brokerage with a reputation for integrity and reliability. Our team of experienced professionals brings a wealth of knowledge to the table, ensuring that every client receives personalized attention and expert guidance.</p>
												
						<div class="about-four__founder">
															<div class="about-four__founder-img">
									<img decoding="async" src="../../layerdrops.com/insurwp/wp-content/uploads/2022/07/about-four-founder-img.jpg" alt="">
								</div>
														<div class="about-four__founder-content">
																							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--About Four End-->
		</div>
				</div>
				<div class="elementor-element elementor-element-4073c7c elementor-widget elementor-widget-insur-about" data-id="4073c7c" data-element_type="widget" data-widget_type="insur-about.default">
				<div class="elementor-widget-container">
				<!--About Four Start-->
	<section class="about-four">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="about-four__left">
						<div class="about-four__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
															<div class="about-four__img">
									<img decoding="async" src="../wp-content/uploads/2024/04/About-2.jpg" alt="">
								</div>
																						<div class="about-four__img-two">
									<img decoding="async" src="../wp-content/uploads/2024/04/About-1.jpg" alt="">
								</div>
													</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="about-four__right">
													<div class="section-title text-left">
																	<div class="section-sub-title-box">
										<p class="section-sub-title">ABOUT COMPANY

</p>
																					<div class="section-title-shape-1">
												<img decoding="async" src="../wp-content/uploads/2024/04/section-title-shape-1-1.png" alt="">
											</div>
																															<div class="section-title-shape-2">
												<img decoding="async" src="../wp-content/uploads/2024/04/section-title-shape-2-1.png" alt="">
											</div>
																			</div>
																									<h2 class="section-title__title">Welcome to Friends For Life Intermediary Services!

</h2>
															</div>
																			<p class="about-four__text-1">Your Trusted Insurance Broker</p>
																			<p class="about-four__text-2">At Friends For Life Intermediary Services, we are dedicated to providing you with expert advice and top-notch insurance solutions tailored to your unique needs. As a trusted insurance broker based in South Africa, our mission is to help individuals and businesses find the right insurance coverage to protect what matters most.






</p>
						
						<div class="about-four__founder">
															<div class="about-four__founder-img">
									<img decoding="async" src="../../layerdrops.com/insurwp/wp-content/uploads/2022/07/about-four-founder-img.jpg" alt="">
								</div>
														<div class="about-four__founder-content">
																							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--About Four End-->
		</div>
				</div>
				<div class="elementor-element elementor-element-53168ee elementor-widget elementor-widget-spacer" data-id="53168ee" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.23.0 - 05-08-2024 */
.elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.e-con{--container-widget-width:100%}.e-con-inner>.elementor-widget-spacer,.e-con>.elementor-widget-spacer{width:var(--container-widget-width,var(--spacer-size));--align-self:var(--container-widget-align-self,initial);--flex-shrink:0}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,.e-con>.elementor-widget-spacer>.elementor-widget-container{height:100%;width:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer{height:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner{height:var(--container-widget-height,var(--spacer-size))}.e-con-inner>.elementor-widget-spacer.elementor-widget-empty,.e-con>.elementor-widget-spacer.elementor-widget-empty{position:relative;min-height:22px;min-width:22px}.e-con-inner>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon,.e-con>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon{position:absolute;top:0;bottom:0;left:0;right:0;margin:auto;padding:0;width:22px;height:22px}</style>		<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-e475edd elementor-widget elementor-widget-spacer" data-id="e475edd" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
					</div>
	
		<div class="elementor-element elementor-element-18a020d e-flex e-con-boxed e-con e-parent" data-id="18a020d" data-element_type="container" >
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-ef2254e e-con-full e-flex e-con e-child" data-id="ef2254e" data-element_type="container">
				<div class="elementor-element elementor-element-f1d3357 elementor-widget elementor-widget-text-editor" data-id="f1d3357" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container text-center" style="text-align: justify; margin-top: 2%;">
							<p><span style="text-decoration: underline;">Our Values</span></p><p><span style="text-decoration: underline;">We believe in:</span></p><p> </p><p>Integrity: Honesty and transparency are the foundation of our relationships with clients.</p><p><br />Commitment: We are dedicated to providing exceptional service and support.</p><p><br />Innovation: We continuously seek new and better ways to meet our clients&#8217; needs.</p>						</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-a1b982a e-con-full e-flex e-con e-child" data-id="a1b982a" data-element_type="container">
				<div class="elementor-element elementor-element-9d5cf1a elementor-widget elementor-widget-text-editor" data-id="9d5cf1a" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container text-center " style="text-align: justify; margin-top: 2%;">
							<p><span style="text-decoration: underline;">Why Choose Us?</span></p><p><span style="text-decoration: underline;">At Friends For Life Intermediary Services, we pride ourselves on our:</span></p><p> </p><p>Expertise: Our team is highly knowledgeable and experienced in the insurance industry.</p><p><br />Customer-Centric Approach: We focus on understanding your needs and offering solutions that work for you.</p><p><br />Competitive Pricing: We negotiate with leading insurers to secure the best rates and coverage for our clients.</p><p><br />Support: From selecting the right policy to handling claims, we are with you every step of the way.</p>						</div>
				</div>
				</div>
					</div>
				</div>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-101b5a55 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="101b5a55" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1d06d79f" data-id="1d06d79f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2ec936b elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="2ec936b" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.23.0 - 05-08-2024 */
.elementor-widget-divider{--divider-border-style:none;--divider-border-width:1px;--divider-color:#0c0d0e;--divider-icon-size:20px;--divider-element-spacing:10px;--divider-pattern-height:24px;--divider-pattern-size:20px;--divider-pattern-url:none;--divider-pattern-repeat:repeat-x}.elementor-widget-divider .elementor-divider{display:flex}.elementor-widget-divider .elementor-divider__text{font-size:15px;line-height:1;max-width:95%}.elementor-widget-divider .elementor-divider__element{margin:0 var(--divider-element-spacing);flex-shrink:0}.elementor-widget-divider .elementor-icon{font-size:var(--divider-icon-size)}.elementor-widget-divider .elementor-divider-separator{display:flex;margin:0;direction:ltr}.elementor-widget-divider--view-line_icon .elementor-divider-separator,.elementor-widget-divider--view-line_text .elementor-divider-separator{align-items:center}.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,.elementor-widget-divider--view-line_text .elementor-divider-separator:after,.elementor-widget-divider--view-line_text .elementor-divider-separator:before{display:block;content:"";border-block-end:0;flex-grow:1;border-block-start:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-left .elementor-divider-separator:before{content:none}.elementor-widget-divider--element-align-left .elementor-divider__element{margin-left:0}.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-right .elementor-divider-separator:after{content:none}.elementor-widget-divider--element-align-right .elementor-divider__element{margin-right:0}.elementor-widget-divider--element-align-start .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-start .elementor-divider-separator:before{content:none}.elementor-widget-divider--element-align-start .elementor-divider__element{margin-inline-start:0}.elementor-widget-divider--element-align-end .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-end .elementor-divider-separator:after{content:none}.elementor-widget-divider--element-align-end .elementor-divider__element{margin-inline-end:0}.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator{border-block-start:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--separator-type-pattern{--divider-border-style:none}.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator{width:100%;min-height:var(--divider-pattern-height);-webkit-mask-size:var(--divider-pattern-size) 100%;mask-size:var(--divider-pattern-size) 100%;-webkit-mask-repeat:var(--divider-pattern-repeat);mask-repeat:var(--divider-pattern-repeat);background-color:var(--divider-color);-webkit-mask-image:var(--divider-pattern-url);mask-image:var(--divider-pattern-url)}.elementor-widget-divider--no-spacing{--divider-pattern-size:auto}.elementor-widget-divider--bg-round{--divider-pattern-repeat:round}.rtl .elementor-widget-divider .elementor-divider__text{direction:rtl}.e-con-inner>.elementor-widget-divider,.e-con>.elementor-widget-divider{width:var(--container-widget-width,100%);--flex-grow:var(--container-widget-flex-grow)}</style>		<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				</section>
				<div class="elementor-element elementor-element-4a1ce672 elementor-widget elementor-widget-insur-funfact" data-id="4a1ce672" data-element_type="widget" data-widget_type="insur-funfact.default">
				<div class="elementor-widget-container">
				<!--Counter One Start-->
	<Section class="counter-one">
					<div class="counter-one-shape-1 float-bob-y">
				<img decoding="async" src="../../layerdrops.com/insurwp/wp-content/uploads/2022/07/counter-one-shape-1.png" alt="">
			</div>
							<div class="counter-one-shape-2 float-bob-y">
				<img decoding="async" src="../../layerdrops.com/insurwp/wp-content/uploads/2022/07/counter-one-shape-2.png" alt="">
			</div>
				<div class="container">
			<div class="row">
															<!--Counter One Single Start-->
						<div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
							<div class="counter-one__single">
								<div class="counter-one__top">
									<div class="counter-one__icon insur-icon-svg">
										<span aria-hidden="true" class="  icon-insurance-1"></span>									</div>
									<div class="counter-one__count-box">
										<div class="counter-one__count-box-inner">
											<h3 class="odometer" data-count="10">00</h3>
											<span class="counter-one__plus">k+</span>
										</div>
									</div>
								</div>
								<p class="counter-one__text">Brokered Insurance</p>
							</div>
						</div>
						<!--Counter One Single End-->
											<!--Counter One Single Start-->
						<div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
							<div class="counter-one__single">
								<div class="counter-one__top">
									<div class="counter-one__icon insur-icon-svg">
										<span aria-hidden="true" class="   icon-group"></span>									</div>
									<div class="counter-one__count-box">
										<div class="counter-one__count-box-inner">
											<h3 class="odometer" data-count="89">00</h3>
											<span class="counter-one__plus">+</span>
										</div>
									</div>
								</div>
								<p class="counter-one__text">Professional team</p>
							</div>
						</div>
						<!--Counter One Single End-->
											<!--Counter One Single Start-->
						<div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
							<div class="counter-one__single">
								<div class="counter-one__top">
									<div class="counter-one__icon insur-icon-svg">
										<span aria-hidden="true" class="   icon-insurance-2"></span>									</div>
									<div class="counter-one__count-box">
										<div class="counter-one__count-box-inner">
											<h3 class="odometer" data-count="1000">00</h3>
											<span class="counter-one__plus">+</span>
										</div>
									</div>
								</div>
								<p class="counter-one__text">Commercial Policies</p>
							</div>
						</div>
						<!--Counter One Single End-->
											<!--Counter One Single Start-->
						<div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
							<div class="counter-one__single">
								<div class="counter-one__top">
									<div class="counter-one__icon insur-icon-svg">
										<span aria-hidden="true" class="   icon-success"></span>									</div>
									<div class="counter-one__count-box">
										<div class="counter-one__count-box-inner">
											<h3 class="odometer" data-count="87">00</h3>
											<span class="counter-one__plus">%</span>
										</div>
									</div>
								</div>
								<p class="counter-one__text">Our success rate</p>
							</div>
						</div>
						<!--Counter One Single End-->
												</div>
		</div>
	</Section>
	<!--Counter One End-->
		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				</div>
		

@endsection