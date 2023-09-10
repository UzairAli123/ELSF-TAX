@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div id="home">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" style="height: 100vh;" src="{{asset('img/carousel_1.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Eastern Legal and financial solutions</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Tax Solutions by Experts</h1>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height: 100vh;" src="{{asset('img/carousel_2.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Eastern Legel and financial solutions</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Corporate Sector Compliance</h1>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height: 100vh;" src="{{asset('img/carousel_3.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Eastern Legel and financial solutions</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Audit and Assurance Experts</h1>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height: 100vh;" src="{{asset('img/carousel_6.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Eastern Legel and financial solutions</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Top Experts of Legal Affairs</h1>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height: 100vh;" src="{{asset('img/carousel_4.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Eastern Legel and financial solutions</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Audit and Assurance Experts </h1>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height: 100vh;" src="{{asset('img/carousel_5.jpeg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Eastern Legel and financial solutions</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Advance Accounting </h1>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Happy Clients</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">7619</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">Projects Done</h5>
                        <h1 class="mb-0" data-toggle="counter-up">4321</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-award text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Win Awards</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">6</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts Start -->

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="about">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                    <h1 class="mb-0">The Best Tax & Law Solutions With 8 Years of Experience</h1>
                </div>
                <p class="mb-4"> Eastern Financial Solutions & Eastern Legal Solutions is a sister wing to East&East°inc founded by M.Ashar Khayam ( Chartered Management Accountant). Rendering full range of quality professional services while abiding by strict ethical & moral principles. The team of EFS&co Chartered Management Accountants and Advocates enjoys diversified experience in the fields of Audit, Taxation, Internal/External Financial and Cost Accounts Management and related Legal advisory services and endeavors to render best quality services at an affordable cost.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <a class="d-flex align-items-center justify-content-center rounded" href="https://api.whatsapp.com/send?phone=923400860323">
                        <img src="{{asset('img/whatsapp-icon.png')}}" alt="" style="width: 60px; height: 60px;">
                    </a>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <a class="text-primary mb-0" href="https://api.whatsapp.com/send?phone=923400860323">+92 340 0860323</a>
                        <a class="text-primary mb-0 ms-4" href="https://api.whatsapp.com/send?phone=92515146720 ">+92 51 5146720</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('img/featured_img.jpg')}}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Our Tax Services</h5>
            <h1 class="mb-0">Maximize Your Tax Benefits with Our Expertise</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Comprehensive Tax Solutions</h4>
                        <p class="mb-0">Our tax experts provide industry-leading solutions tailored to your needs.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Award-Winning Service</h4>
                        <p class="mb-0">Trust our award-winning team to handle your tax matters with excellence.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{asset('img/featured_img.jpg')}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Expert Tax Professionals</h4>
                        <p class="mb-0">Our professional staff ensures accurate and efficient tax services.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p class="mb-0">We offer round-the-clock support to address your tax queries and concerns.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features end -->

<!-- Service Start -->
<div id="services" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <h1 class="mb-0">Corporate, Tax And Legal Solutions</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column">
                    <div class="text-center">
                        <img class="" src="{{asset('img/accrideted.png')}}" style="width: 150px; height:132px"></i>
                    </div>
                    <h4 class="mb-3">Accredited Registration and Certifications</h4>
                    <ul class="list-inline text-start">
                        <li class="list-inline-item">• Intellectual Property Organization</li>
                        <li class="list-inline-item">• Pakistan Engineering Council</li>
                        <li class="list-inline-item">• Pakistan Software Export Board Chamber Registration</li>
                        <li class="list-inline-item">• ISO 9001</li>
                        <li class="list-inline-item">• Chamber of Commerce Reg </li>
                        <li class="list-inline-item">• Import/ Export License (PSW) </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column">
                    <div class="text-center">
                        <img class="" src="{{asset('img/secp-logo.png')}}" style="width: 150px; height:132px"></i>
                    </div>
                    <h4 class="mb-3">Corporate Compliance</h4>
                    <ul class="list-inline text-start">
                        <li class="list-inline-item">• Company Name Reservation</li>
                        <li class="list-inline-item">• Incorporation of a Company</li>
                        <li class="list-inline-item">• Memorandum of Association</li>
                        <li class="list-inline-item">• Articles of Association</li>
                        <li class="list-inline-item">• Winding up of Company</li>
                        <li class="list-inline-item">• Shares Transfer/Change of Directors</li>
                        <li class="list-inline-item">• Changes in MOA</li>
                        <li class="list-inline-item">• Alteration in Paid up Capital</li>
                        <li class="list-inline-item">• Alteration in Authorize Capital</li>
                        <li class="list-inline-item">• Change in Company Address</li>
                        <li class="list-inline-item">• Conversion Pvt to SMC-Pvt Ltd.</li>
                        <li class="list-inline-item">• Conversion of SMC to Pvt Ltd.</li>
                        <li class="list-inline-item">• Conversion of Public to Pvt Ltd.</li>
                        <li class="list-inline-item">• Independent Fairness Opinions</li>
                        <li class="list-inline-item">• Conversion of Pvt to Public Ltd.</li>
                        <li class="list-inline-item">• Annual Returns of SECP.</li>
                        <li class="list-inline-item">• Filling of mandatory Forms in SECP</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column">
                    <div class="text-center">
                        <img class="" src="{{asset('img/fbr-logo.png')}}" style="width: 150px; height:132px"></i>
                    </div>
                    <h4 class="mb-3">Taxation Services</h4>
                    <ul class="list-inline text-start">
                        <li class="list-inline-item">• Typical mandates from our tax clients include</li>
                        <li class="list-inline-item">• Corporate/ Company Taxation</li>
                        <li class="list-inline-item">• Personal Taxation</li>
                        <li class="list-inline-item">• Income Tax</li>
                        <li class="list-inline-item">• Sales Tax</li>
                        <li class="list-inline-item">• Corporate tax planning</li>
                        <li class="list-inline-item">• Tax audits and tax return preparation and filing (Income Tax and Service Tax)</li>
                        <li class="list-inline-item">• Transfer pricing studies and recommendations</li>
                        <li class="list-inline-item">• Tax representation with tax department and appellate tribunals</li>
                        <li class="list-inline-item">• Correspondence to Tax Notices/ Tax Audit Notices</li>
                        <li class="list-inline-item">• Structuring of tax efficient ESOPs, investments, succession planning</li>
                        <li class="list-inline-item">• Merger/De-merger tax review</li>
                        <li class="list-inline-item">• Foreign investment legal compliances and regulatory approval</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column">
                    <div class="text-center">
                        <img class="" src="{{asset('img/audit.png')}}" style="width: 150px; height:132px"></i>
                    </div>
                    <h4 class="mb-3">Audit and Assurance Services</h4>
                    <ul class="list-inline text-start">
                        <li class="list-inline-item">• Statutory Audit</li>
                        <li class="list-inline-item">• Internal Audit</li>
                        <li class="list-inline-item">• Assets Assurance</li>
                        <li class="list-inline-item">• Forensic Audits</li>
                        <li class="list-inline-item">• Project Audits</li>
                        <li class="list-inline-item">• IT Audits</li>
                        <li class="list-inline-item">• Cost Audits</li>
                        <li class="list-inline-item">• Review Engagements</li>
                        <li class="list-inline-item">• Well qualified staff at all levels</li>
                        <li class="list-inline-item">• Partners, managers and audit seniors qualified in FCA, CPA, CISA, CFA, MBA and IFRS certifications</li>
                        <li class="list-inline-item">• Structured implementation of peer review of work paper documentation and adherence to Auditing Standards</li>
                        <li class="list-inline-item">• Experience in IAS 34 and Sarbanes-Oxley compliance</li>
                        <li class="list-inline-item">• Variety of experience with multinational corporations, public sector banks, foreign subsidiaries, joint ventures, SPVs, multilateral organizations, investments funds and HNIs</li>
                        <li class="list-inline-item">• Expertise in USGAAP/IFRS conversion, forensic audits, credit monitoring, JV compliance reviews, information systems audit, process risk reviews and corporate governance implementation</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column">
                    <div class="text-center">
                        <img class="" src="{{asset('img/management.png')}}" style="width: 150px; height:132px"></i>
                    </div>
                    <h4 class="mb-3">Management Consulting</h4>
                    <ul class="list-inline text-start">
                        <li class="list-inline-item">• Management audit</li>
                        <li class="list-inline-item">• Preparation of Dashboards for senior management review</li>
                        <li class="list-inline-item">• Developing business case for strategic initiatives</li>
                        <li class="list-inline-item">• Business process evaluation and identification of Key Risk Factors</li>
                        <li class="list-inline-item">• Executive Leasing & Recruitment</li>
                        <li class="list-inline-item">• HR Audits</li>
                        <li class="list-inline-item">• Trainings and Capacity Buildings Sessions</li>
                        <li class="list-inline-item">• Assistance in preparation of 100-day plans and 13-week cash flows during new business acquisitions</li>
                        <li class="list-inline-item">• Implementation of end-to-end Accounting and Financial Reporting Systems, including for large public sector undertakings</li>
                        <li class="list-inline-item">• Partners, managers and audit seniors qualified in FCA, CPA, CISA, CFA, MBA and IFRS certifications</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column">
                    <div class="text-center">
                        <img class="" src="{{asset('img/ipo-logo.png')}}" style="width: 150px; height:132px"></i>
                    </div>
                    <h4 class="mb-3">Corporate Advisory Services</h4>
                    <ul class="list-inline text-start">
                        <li class="list-inline-item">• Enterprise Risk Management</li>
                        <li class="list-inline-item">• Business Startup</li>
                        <li class="list-inline-item">• Privatization</li>
                        <li class="list-inline-item">• Investment Management</li>
                        <li class="list-inline-item">• Financial Modelling</li>
                        <li class="list-inline-item">• Feasibility Studies</li>
                        <li class="list-inline-item">• Due Diligence</li>
                        <li class="list-inline-item">• Secretarial & Corporate Compliance</li>
                        <li class="list-inline-item">• ERP Implementation</li>
                        <li class="list-inline-item">• Buy-side and sell-side due diligence reviews, including assistance with purchase price negotiations and working capital adjustments</li>
                        <li class="list-inline-item">• Promoter/Owner shareholding restructuring</li>
                        <li class="list-inline-item">• Purchase price allocations, preparation of split/consolidated financials</li>
                        <li class="list-inline-item">• Valuation analysis and related financial modelling, and evaluation of strategic review plans</li>
                        <li class="list-inline-item">• Independent Fairness Opinions</li>
                        <li class="list-inline-item">• Oversight of Government mandated disinvestment schemes</li>
                        <li class="list-inline-item">• Treasury support services</li>
                        <li class="list-inline-item">• Financial restructuring advisory</li>
                        <li class="list-inline-item">• IPO and FPO advisory</li>
                        <li class="list-inline-item">• Trade Mark & Copy Right </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column">
                    <div class="text-center">
                        <img class="" src="{{asset('img/accounting.png')}}" style="width: 150px; height:132px"></i>
                    </div>
                    <h4 class="mb-3">Accounting and Book Keeping Services</h4>
                    <ul class="list-inline text-start">
                        <li class="list-inline-item">• Place accounting and book keeping staff on-site at client locations for data processing and accounting</li>
                        <li class="list-inline-item">• Carry out ongoing accounting tasks or one-time reconstruction of data/ event driven special situations accounting for client</li>
                        <li class="list-inline-item">• Remotely perform accounting and book keeping functions on behalf of client and provide information to auditors</li>
                        <li class="list-inline-item">• Remote and on-site payroll processing services</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column">
                    <div class="text-center">
                        <img class="" src="{{asset('img/legel_services.png')}}" style="width: 150px; height:132px"></i>
                    </div>
                    <h4 class="mb-3">Legal Services</h4>
                    <ul class="list-inline text-start">
                        <li class="list-inline-item">• Legal Notices </li>
                        <li class="list-inline-item">• Contract & Agreement Drafting</li>
                        <li class="list-inline-item">• Affidavits and Power of Attorney</li>
                        <li class="list-inline-item">• Succession Certificates</li>
                        <li class="list-inline-item">• Notarizations and Attestations </li>
                        <li class="list-inline-item">• Translation of Legal Official Document</li>
                        <li class="list-inline-item">• Inheritance & Succession </li>
                        <li class="list-inline-item">• Debt Collection Services in Pakistan </li>
                        <li class="list-inline-item">• Cyber Crime Laws </li>
                        <li class="list-inline-item">• Banking and Services Laws </li>
                        <li class="list-inline-item">• Civil/Criminal/Labour and Family Suits</li>
                        <li class="list-inline-item">• Child Custody and Guardianship Certificate </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
            <h1 class="mb-0">What Our Clients Say About Our Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            <div class="testimonial-item bg-light my-4" style="height: 400px">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{asset('img/clinet_1.jpg')}}" style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">HAMZA KHALID</h4>
                        <small class="text-uppercase">Tourism Company Owner</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    I’m Owner of Ramblers.Pk a leading Tourism Company and EFS has been fantastic for my business. Patient, knowledgeable, and always willing to take the time to respond to my questions and provide extra support. Thank you!
                </div>
            </div>
            <div class="testimonial-item bg-light my-4" style="height: 400px;">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{asset('img/clinet_2.jpg')}}" style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Kashif Nazir</h4>
                        <small class="text-uppercase">Owner of KN Laptops</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    I view Eastern Financial Solutions as so much more than expert tax accountants and consultants, I consider them partners in my evolution as a business owner. Knowing I have EFS in my corner allows me to focus on the things I do best, as it is clear that they excel in what they do best. Thanks for being a part of my journey!
                </div>
            </div>
            <div class="testimonial-item bg-light my-4" style="height: 400px">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                </div>
            </div>
            <div class="testimonial-item bg-light my-4" style="height: 400px">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" id="core_team" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
            <h1 class="mb-0">Professional Stuffs Ready to Help You</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/women_avatar.png" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Arooj Ahmed Mamoon</h4>
                        <p class="text-uppercase m-0">Chairman East & East Inc. Group of Companies</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/farrukh_bhatti.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Raja Farrakh Arif Bhatti</h4>
                        <p class="text-uppercase m-0">Member Punjab Bar Counsel (ASC)</p>
                        <p class="text-uppercase m-0">Managing Director Legal Affairs</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/women_avatar.png" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Zaiba Hameed (AHC) </h4>
                        <p class="text-uppercase m-0">Deputy Director Legal Affairs</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="team-item bg-light rounded overflow-hidden" style="height: 78%;">
                    <div class="team-img position-relative overflow-hidden" style="height: 72%;">
                        <img class="img-fluid w-100" src="img/shahid_langrial.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Shahid Mehmood Langrial (AHC)</h4>
                        <p class="text-uppercase m-0">Chairman Legal Affairs</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="">
                <div class="team-item bg-light rounded overflow-hidden" style="height: 78%;">
                    <div class="team-img position-relative overflow-hidden" style="height: 72%;">
                        <img class="img-fluid w-100" src="img/man_avatar.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Dr. Fayyaz Saad (AHC) </h4>
                        <p class="text-uppercase m-0">Chief Advisor to Corporate Sector for Tax Litigations</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="">
                <div class="team-item bg-light rounded overflow-hidden" style="height: 78%;">
                    <div class="team-img position-relative overflow-hidden" style="height: 72%;">
                        <img class="img-fluid w-100" src="img/man_avatar.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Syed Ali Tayyab Kazmi (AHC)</h4>
                        <p class="text-uppercase m-0">Associate Member</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="margin-top: -84px;">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden" style="height: 72%;">
                        <img class="img-fluid w-100" src="img/man_avatar.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">M. Ashar Khayam (ACMA)</h4>
                        <p class="text-uppercase m-0">Chief Financial Officer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="margin-top: -84px;">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden" style="height: 72%;">
                        <img class="img-fluid w-100" src="img/man_avatar.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Tayyab Shafique (CMA)</h4>
                        <p class="text-uppercase m-0">Chief Co-ordinator</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="margin-top: -84px;">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden" style="height: 72%;">
                        <img class="img-fluid w-100" src="img/man_avatar.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Ch Mansoor Akhtar</h4>
                        <p class="text-uppercase m-0">ACMA</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="margin-top: 42px;">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden" style="height: 72%;">
                        <img class="img-fluid w-100" src="img/man_avatar.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Naqeeb Sangalee</h4>
                        <p class="text-uppercase m-0">ACMA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Contact Start -->
<div id="contact_us" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
            <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <a class="d-flex align-items-center justify-content-center rounded" href="https://api.whatsapp.com/send?phone=923400860323">
                        <img src="{{asset('img/whatsapp-icon.png')}}" alt="" style="width: 60px; height: 60px;">
                    </a>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <a class="text-primary mb-0" href="https://api.whatsapp.com/send?phone=923400860323">+92 340 0860323</a>
                        <a class="text-primary mb-0 ms-4" href="https://api.whatsapp.com/send?phone=92515146720 ">+92 51 5146720</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Email to get free quote</h5>
                        <p class="text-primary mb-0">info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Visit our office</h5>
                        <p class="text-primary mb-0">Kachehri, Near Jinnah Park, Rawalpinid, Pakistan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                <img src="img/vendor-1.jpg" alt="">
                <img src="img/vendor-2.jpg" alt="">
                <img src="img/vendor-3.jpg" alt="">
                <img src="img/vendor-4.jpg" alt="">
                <img src="img/vendor-5.jpg" alt="">
                <img src="img/vendor-6.jpg" alt="">
                <img src="img/vendor-7.jpg" alt="">
                <img src="img/vendor-8.jpg" alt="">
                <img src="img/vendor-9.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
@endsection