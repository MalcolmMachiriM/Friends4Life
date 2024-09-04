@extends('layouts.app')

@section('title', 'Car Insurance - Friends For Life')

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
<li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Friends For Life Intermediary Services | Your Trusted Insurance Broker." href="../index.html" class="home" ><span property="name">Friends For Life Intermediary Services | Your Trusted Insurance Broker</span></a><meta property="position" content="1"></span></li>
<li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">Business Indemnity Insurance</span><meta property="url" content="https://friends4life.co.za/business-indemnity-insurance/"><meta property="position" content="2"></span></li>
				</ul>
									<h2>
									Business Indemnity Insurance							</h2>
		</div>
	</div>
</section>
<!--Page Header End-->				<div data-elementor-type="wp-page" data-elementor-id="2728" class="elementor elementor-2728" data-elementor-post-type="page">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-60e42801 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="60e42801" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1ad951bd" data-id="1ad951bd" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-8eed679 elementor-widget elementor-widget-insur-sidebar" data-id="8eed679" data-element_type="widget" data-widget_type="insur-sidebar.default">
				<div class="elementor-widget-container">
			    <div class="make-a-claim__claim-box">
        <div class="menu-insur-details-sidebar-container"><ul id="menu-insur-details-sidebar" class="make-a-claim__claim-list list-unstyled ml-0">
		<li id="menu-item-1755" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2365"><a href="{{ route('car-insurance.index') }}" aria-current="page">Car Insurance<span class="icon-right-arrow1"></span></a></li>
			<li id="menu-item-2365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2365"><a href="{{ route('product-pet-insurance.index') }}">Pet Insurance<span class="icon-right-arrow1"></span></a></li>
			<li id="menu-item-2366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2366"><a href="{{ route('medical-insurance.index') }}">Medical Insurance<span class="icon-right-arrow1"></span></a></li>
			<li id="menu-item-2366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2366"><a href="{{ route('vehicle-tracker.index') }}">Vehicle Tracker<span class="icon-right-arrow1"></span></a></li>
			<li id="menu-item-2366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2366"><a href="{{ route('car-warranty.index') }}">Car Warranty<span class="icon-right-arrow1"></span></a></li>
			<li id="menu-item-2366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2366"><a href="{{ route('commercial-insurance.index') }}">Commercial Insurance<span class="icon-right-arrow1"></span></a></li>
			<li id="menu-item-2366" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-45 current_page_item menu-item-1755"><a href="{{ route('business-indemnity-insurance.index') }}">Business Indemnity Insurance<span class="icon-right-arrow1"></span></a></li>
			<li id="menu-item-2366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2366"><a href="{{ route('life-insurance.index') }}">Life Insurance<span class="icon-right-arrow1"></span></a></li>
			<li id="menu-item-2366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2366"><a href="{{ route('health-insurance.index') }}">Health Insurance<span class="icon-right-arrow1"></span></a></li>
</ul></div>    </div>
		</div>
				</div>
				<div class="elementor-element elementor-element-59df6af7 elementor-widget elementor-widget-insur-sidebar" data-id="59df6af7" data-element_type="widget" data-widget_type="insur-sidebar.default">
				<div class="elementor-widget-container">
			    <div class="insurance-details__download">
                <div class="row">
                                                </div>
    </div>
		</div>
				</div>
				<div class="elementor-element elementor-element-20236dac elementor-widget elementor-widget-insur-sidebar" data-id="20236dac" data-element_type="widget" data-widget_type="insur-sidebar.default">
				<div class="elementor-widget-container">
			    <div class="insurance-details__need-help">
                    <div class="insurance-details__need-help-bg" style="background-image: url(../../layerdrops.com/insurwp/wp-content/uploads/2023/03/insurance-details-need-help-bg.jpg)"></div>
                <div class="insurance-details__need-help-icon insur-icon-svg">
            <span aria-hidden="true" class="  insur-three-icon-call"></span>        </div>
                    <h2 class="insurance-details__need-help-title">
                Talk to our<br> insurance agent            </h2>
                <div class="insurance-details__need-help-contact">
            <a href="tel:+27105000069">+27 10 500 0069</a>
                            <p> Call to Our Experts</p>
                    </div>
    </div>
		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-f4af06" data-id="f4af06" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2aa8b5c7 insurance-details__img-1 elementor-widget elementor-widget-image" data-id="2aa8b5c7" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.23.0 - 05-08-2024 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>										<img fetchpriority="high" decoding="async" width="770" height="370" src="../wp-content/uploads/2024/08/Untitled-design-34.png" class="attachment-full size-full wp-image-2731" alt="https://friends4life.co.za/" srcset="https://friends4life.co.za/wp-content/uploads/2024/08/Untitled-design-34.png 770w, https://friends4life.co.za/wp-content/uploads/2024/08/Untitled-design-34-300x144.png 300w, https://friends4life.co.za/wp-content/uploads/2024/08/Untitled-design-34-768x369.png 768w, https://friends4life.co.za/wp-content/uploads/2024/08/Untitled-design-34-167x80.png 167w, https://friends4life.co.za/wp-content/uploads/2024/08/Untitled-design-34-570x274.png 570w" sizes="(max-width: 770px) 100vw, 770px" />													</div>
				</div>
				<div class="elementor-element elementor-element-3d785b6 elementor-widget elementor-widget-heading" data-id="3d785b6" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.23.0 - 05-08-2024 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">Protect Your Business with Indemnity Insurance</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-40921692 insurance-details__text-1 elementor-widget elementor-widget-heading" data-id="40921692" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default">As your insurance broker, Friends For Life Intermediary Services ensures that your business is protected against unforeseen liabilities. We assess your unique needs and compare policies from leading insurers to find the best coverage at a competitive rate. Our team helps you understand the intricacies of indemnity insurance, ensuring your business is safeguarded against potential claims. In the event of a claim, we are here to support you through the entire process, minimizing disruption and helping you recover smoothly.</p>		</div>
				</div>
				<div class="elementor-element elementor-element-63318e69 elementor-widget elementor-widget-heading" data-id="63318e69" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Coverage Options:</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-7fe761d9 elementor-widget elementor-widget-text-editor" data-id="7fe761d9" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.23.0 - 05-08-2024 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<ul><li><strong>Professional Indemnity Insurance:</strong> Covers legal costs and damages if your business is sued for providing negligent services or advice.</li><li><strong>Public Liability Insurance:</strong> Protects against claims made by third parties for injuries or damages occurring on your business premises.</li><li><strong>Product Liability Insurance:</strong> Covers claims related to defects in products manufactured, supplied, or sold by your business.</li><li><strong>Employer’s Liability Insurance:</strong> Required by law, this covers claims made by employees for work-related injuries or illnesses.</li></ul><h3><strong> Benefits of Choosing Us:</strong></h3><ul><li><strong>Tailored Coverage:</strong> We work with you to create a policy that fits your specific business risks and needs.</li><li><strong>Expert Advice:</strong> Our team explains your options, helping you make informed decisions about your insurance.</li><li><strong>Responsive Claims Support:</strong> We assist you in navigating the claims process efficiently and effectively, ensuring minimal disruption to your business.</li></ul><p> </p><h3><strong>Additional Features:</strong></h3><ul><li><strong>Business Interruption Cover:</strong> Provides financial support if your business operations are halted due to a covered event.</li><li><strong>Cyber Liability Insurance:</strong> Protects against data breaches and other cyber threats.</li><li><strong>Optional Add-ons:</strong> Customize your policy with additional coverages, like directors and officers liability or legal expense insurance.</li></ul><p> </p><h3><strong>How to Get Started:</strong></h3><ul><li><strong>Step 1:</strong> Request a Quote</li><li><strong>Step 2:</strong> Customize Your Policy</li><li><strong>Step 3:</strong> Operate Your Business with Confidence Knowing You&#8217;re Protected</li></ul>						</div>
				</div>
				<div class="elementor-element elementor-element-4ae42dfd elementor-widget elementor-widget-insur-icon-box" data-id="4ae42dfd" data-element_type="widget" data-widget_type="insur-icon-box.default">
				<div class="elementor-widget-container">
			    <ul class="insurance-details__points list-unstyled ml-0">
                                    <li>
                    <div class="insurance-details__points-left">
                        <div class="insurance-details__points-icon insur-icon-svg">
                            <span aria-hidden="true" class="  icon-easy-to-use"></span>                        </div>
                        <h3 class="insurance-details__points-title">
                            Fast &amp; Easy <br> Process                        </h3>
                    </div>
                    <div class="insurance-details__points-right">
                        <p>We prioritize your peace of mind with exceptional customer service and ongoing support.</p>
                    </div>
                </li>
                            <li>
                    <div class="insurance-details__points-left">
                        <div class="insurance-details__points-icon insur-icon-svg">
                            <span aria-hidden="true" class="   icon-contract"></span>                        </div>
                        <h3 class="insurance-details__points-title">
                            Quick Claim <br> Handle                        </h3>
                    </div>
                    <div class="insurance-details__points-right">
                        <p>Our experienced team provides clear, reliable guidance to help you make informed decisions.</p>
                    </div>
                </li>
                            <li>
                    <div class="insurance-details__points-left">
                        <div class="insurance-details__points-icon insur-icon-svg">
                            <span aria-hidden="true" class="   icon-fund"></span>                        </div>
                        <h3 class="insurance-details__points-title">
                            Save Your <br> Money                        </h3>
                    </div>
                    <div class="insurance-details__points-right">
                        <p>We find you the best coverage at competitive rates, maximizing your value and savings.</p>
                    </div>
                </li>
                        </ul>
		</div>
				</div>
				<div class="elementor-element elementor-element-144f7247 elementor-widget elementor-widget-insur-contact-form" data-id="144f7247" data-element_type="widget" data-widget_type="insur-contact-form.default">
				<div class="elementor-widget-container">
			            
<div class="wpcf7 no-js" id="wpcf7-f1734-p2728-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="https://friends4life.co.za/business-indemnity-insurance/#wpcf7-f1734-p2728-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="1734" />
<input type="hidden" name="_wpcf7_version" value="5.9.3" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1734-p2728-o1" />
<input type="hidden" name="_wpcf7_container_post" value="2728" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<div class="insurance-details__email-box">
	<div class="insurance-details__email-input-box">
		<p><span class="wpcf7-form-control-wrap" data-name="number"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your phone number" value="" type="text" name="number" /></span>
		</p>
	</div>
	<p><button type="submit" class="insurance-details__subscribe-btn thm-btn">Get a Phone
Call</button>
	</p>
</div><div class="wpcf7-response-output" aria-hidden="true"></div>
</form>
</div>
    		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6da2a57c elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="6da2a57c" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5eddeff0" data-id="5eddeff0" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ae7fab elementor-widget elementor-widget-insur-call-to-action" data-id="ae7fab" data-element_type="widget" data-widget_type="insur-call-to-action.default">
				<div class="elementor-widget-container">
			
    <!--Tracking Start-->
    <section class="tracking">
        <div class="container">
            <div class="tracking__inner">
                                    <div class="tracking-shape-1 float-bob-y">
                        <img decoding="async" src="../../layerdrops.com/insurwp/wp-content/uploads/2022/07/tracking-shape-1.png" alt="">
                    </div>
                                                    <div class="tracking-shape-2 float-bob-x">
                        <img decoding="async" src="../../layerdrops.com/insurwp/wp-content/uploads/2022/07/tracking-shape-2.png" alt="">
                    </div>
                                                    <div class="tracking-shape-3 float-bob-x">
                        <img decoding="async" src="../../layerdrops.com/insurwp/wp-content/uploads/2022/07/tracking-shape-3.png" alt="">
                    </div>
                                                    <div class="tracking-shape-4 float-bob-y">
                        <img decoding="async" src="../../layerdrops.com/insurwp/wp-content/uploads/2022/07/tracking-shape-4.png" alt="">
                    </div>
                                <div class="tracking__left">
                    <div class="tracking__icon insur-icon-svg">
                        <span aria-hidden="true" class="  icon-folder"></span>                    </div>
                    <div class="tracking__content">
                                                    <p class="tracking__sub-title">QUISQUE VEL ORTOR

</p>
                                                                            <h3 class="tracking__title">Start tracking your claims
</h3>
                                            </div>
                </div>
                                    <div class="tracking__btn-box">
                        <a   href="http://layerdrops.com/insurwp/contact/" class="thm-btn tracking__btn">Trak Your Claim</a>
                    </div>
                            </div>
        </div>
    </section>
    <!--Tracking End-->

		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				</div>
		



@endsection