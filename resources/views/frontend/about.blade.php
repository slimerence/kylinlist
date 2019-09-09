@extends(_get_frontend_layout_path('temp'))

@section('content')
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg" style="background: url('assets/images/banners/banner2.jpg') center center;">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">About Us</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--section-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="text-justify">
                <h1 class="mb-4 text-center">关于麒麟榜</h1>
                <p class="leading-normal">麒麟榜是一个创新的B2B平台，我们联合澳洲每个领域的优质供应商，用最精准的中文把产品和服务全面展示给中国市场，并提供信用验证和中文客服沟通。</p>
                <p class="leading-normal mb-0">“麒，仁兽也，麋身牛尾一角；麐（麟），牝麒也。”我们用麒麟之名实质是取“麒麟含仁怀义”之意。麒麟榜以“含仁怀义”之理念把澳洲每一个行业最优秀的供应商，用中国的文化和文字语言展现在中国的采购商面前 。
                </p>
                <p class="leading-normal">我们创立麒麟榜的初衷，在于我们意识到中国市场上的澳洲品牌良莠不齐，且很多澳洲优质的企业产品和服务并没有得到如实的宣传。
                </p>
                <p class="leading-normal">不同于其他平台，我们奉行“实事求是、严格流程、精心挑选、诚信服务”的原则，确保每个供应商在质量和服务检验上统一标准，在榜上排名位置完全按照自然搜索排名结果原则。即便是在广告位置陈列公司也必须经过所有资格验证。我们的目的一是使得麒麟榜成为一个独立公正的第三方平台，为中国采购商提供甄选并联络澳洲供应商的绝佳平台；二是为澳洲的企业提供一个面向中国市场的公平展示平台，并把营销和沟通成本降至最低。
                </p>

            </div>
        </div>
    </section>
    <!--/section-->

    <!--section-->
    <section class="sptb">
        <div class="container">
            <div class="text-justify">
                <h2 class="mb-4 text-center">麒麟服务</h2>
                <p class="leading-normal text-center">麒麟榜当前提供的服务有两类：澳洲产品和澳洲服务业供应商的线上搜索，以及包括翻译和行程安排在内的澳洲供应商线下会面活动安排。</p>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card widgets-cards">
                            <div class="card-body d-flex">
                                <div class="widgets-cards-icons">
                                    <div class="wrp icon-circle bg-success">
                                        <i class="fa fa-search icons"></i>
                                    </div>
                                </div>
                                <div class="widgets-cards-data">
                                    <div class="wrp text-wrapper">
                                        <p>Products</p>
                                        <p class="text-muted mt-1 line-height-15 mb-0">
                                            包括工业机械和原材料和消费品等多个领域超过100个行业的x万类商品。您可以通过搜索（链接至主页搜索框）找到澳洲各个行业最优秀的产品和其供应商详细信息，也可以通过产品范畴（通过链接至产品范畴页面）来找寻您的目标产品。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card widgets-cards">
                            <div class="card-body d-flex">
                                <div class="widgets-cards-icons">
                                    <div class="wrp icon-circle bg-success">
                                        <i class="fa fa-search icons"></i>
                                    </div>
                                </div>
                                <div class="widgets-cards-data">
                                    <div class="wrp text-wrapper">
                                        <p>Service industry</p>
                                        <p class="text-muted mt-1 line-height-15 mb-0">
                                            澳大利亚是旅游和文化教育产业全球最领先的国家之一。我们向您集中展示澳大利亚最富盛名的旅游景点和<a href="">旅游服务提供商</a>。在教育领域，我们会将各个州教育部登记备注的院校逐一详细展示，以提供您权威的信息。您可以通过搜索来找寻您的<a href="">目标服务业</a>。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card widgets-cards">
                            <div class="card-body d-flex">
                                <div class="widgets-cards-icons">
                                    <div class="wrp icon-circle bg-success">
                                        <i class="fa fa-search icons"></i>
                                    </div>
                                </div>
                                <div class="widgets-cards-data">
                                    <div class="wrp text-wrapper">
                                        <p>供应商联系</p>
                                        <p class="text-muted mt-1 line-height-15 mb-0">
                                            您寻找到目标产品和服务后就可以开始建立与供应商的联系。我们提供的供应商联系方式分成两层。第一层是通过人工智能来实现的，您需要咨询的问题绝大多数都已经通过实时更新的答案来答复您；如果您的问题直接进入到实质性的采购合同或者合作细节，我们会迅速建立和供应商的直接沟通渠道，让您和生产商或服务提供商之间的交流变得透明，把沟通成本降至最低。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card widgets-cards">
                            <div class="card-body d-flex">
                                <div class="widgets-cards-icons">
                                    <div class="wrp icon-circle bg-success">
                                        <i class="fa fa-search icons"></i>
                                    </div>
                                </div>
                                <div class="widgets-cards-data">
                                    <div class="wrp text-wrapper">
                                        <p>线下供应商会面安排</p>
                                        <div class="text-muted mt-1 line-height-15 mb-0">
                                            这是一个让人欣喜的阶段，麒麟会依照您的需求和供应商协商，确定你们在澳洲会议考察细项，或者邀请澳洲供应商来中国洽谈事宜安排。服务包括：<br/>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <ul>
                                                        <li>会议主题设定</li>
                                                        <li>项目考察路线制定和实施</li>
                                                        <li>行程安排</li>
                                                        <li>协助安排车马食宿</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <ul>
                                                        <li>口译和文件中英文翻译服务</li>
                                                        <li>商业律师支持</li>
                                                        <li>银行信用服务支持</li>
                                                        <li>澳洲进出口咨询</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/section-->

    <!--How to work-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1>选择麒麟的理由</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-pink-transparent icon-bg icon-service text-pink">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">权威的澳洲供应商信息
                                    </h4>
                                    <p class="text-muted mb-0">麒麟属于独立第三方平台，对所有上线的澳洲供应商均采取严格、平等的审核，不但确保所有公司、产品的信息最精准的，也是最具权威性的。中国采购商可以不必再为验证供应商企业的合法性、合规性和产品的检验、检疫进行额外的时间和人力物力投入。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-purple-transparent icon-bg icon-service text-purple">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">全面的澳洲供应商信息</h4>
                                    <p class="text-muted mb-0">麒麟提出“全面”的概念不在于囊括所有的澳洲企业，而在于澳洲每个领域中最优秀的企业我们逐一检验，不漏过一个。因此您所需要采购的所有澳洲产品在麒麟都可以找到最可靠、最值得信赖的供应商。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-sm-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-warning-transparent icon-bg icon-service text-warning">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">精准的中文澳洲供应商信息</h4>
                                    <p class="text-muted mb-0">麒麟属于澳洲本土组织，聚集了精通中英文的工作人员、法律人士和市场研究人士，凭借对澳洲企业的了解和对产品及服务的深度判断研究为您所要采购的目标产品和未来即将发生商业关系的供应商提供最精准的信息校验和中文翻译。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="">
                            <div class="service-card text-center">
                                <div class="bg-pink-transparent icon-bg icon-service text-pink">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">便捷经济的澳洲供应商联系和沟通</h4>
                                    <p class="text-muted mb-0">麒麟的设立旨在为减少中国采购方与澳洲供应商之间的沟通成本。中国采购方可以直接通过平台找到合适的产品和供应商，并通过我们的智能客服直接和供应商打破语言壁垒进行无障碍沟通，轻松获取合作机会。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/How to work-->

    <!--post section-->
    <section>
        <div class="cover-image sptb bg-background-color" data-image-src="../assets/images/banners/banner4.jpg">
            <div class="content-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="mb-2">Are you ready for the posting you ads on this Site?</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="mt-5">
                            <a href="ad-posts.html" class="btn btn-pink btn-pill">Free Post Ad</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/post section-->
    <section class="sptb">
        <div class="container">
            <div class="text-justify">
                <h1 class="mb-4 text-center">我们如何确保挑选出高质量的澳大利亚供应商</h1>
                <p class="leading-normal">澳洲麒麟榜深知你们信任澳洲原产地的原材料、产品和服务。为了确保你们对我们的信任能够永久持续下去，也为了能够把更优秀的供应商推荐给更广泛的中国采购商，所以我们始终以最严格的标准在要求我们自己和澳洲的供应商。我们能够理解，寻找选择最好的供应商是你们管理产品质量和降低您产品次品率最重要的环节之一。</p>
                <p class="leading-normal mb-0">选择澳洲每个领域最优秀的供应商是我们肩负的重任。作为澳洲最具权威的独立第三方优质供应商验证和推荐平台，我们的立足之本就在于制定高标准的供应商审核流程，并严格按照这个流程去验证和执行。我们不仅认真听取每个供应商对自己的介绍，更重要的是我们也对每一个高等级的供应商进行实地考察验证，以确保每个按照严格的甄选程序进而推荐给您的公司是绝对可靠的。</p>

            </div>
            <div class="tab_wrapper second_tab bg-white border-none">
                <ul class="tab_list">
                    <li class="">道德和法律法规</li>
                    <li>ABN/ACN</li>
                    <li>出口和其他资质</li>
                </ul>

                <div class="content_wrapper">
                    <div class="tab_content active">
                        <p>除道德规范之外，我们仍旧要求我们的供应商严格遵守澳洲的所有法律法规，不仅如此，我们同样要求他们遵守目标出口国家，比如中国的法律。如果我们的供应商未能确保法规，并遵从您本地的法律就可能会给您和您的业务带来严重的法律后果。</p>
                    </div>

                    <div class="tab_content">
                       <p>在澳大利亚使用的所有商业名称都会在 ASIC 注册，任何一家澳洲本地供应商必须最基本的持有在澳洲政府注册的ACN和 ABN，作为最基本的要求，我们必须查验任何一家公司是否持有这些法律文档，并且他们的营业执照是否在有效期以内。</p>
                    </div>
                    <div class="tab_content">
                        <p>如果您从澳洲进口各类商品或服务，我们首要工作是检查供应商是否有有效的出口许可证。澳大利亚各个行业包括农产、矿产、工业、消费品、环境、生物医药、环保等各尤其是金融、食品制造、矿业都有特定的资质，所以我们通过对供应商工审核和信用检查来验证供应商各种合法性。</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--section-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>我们如何确保挑选出高质量的澳大利亚供应商</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="row ">
                <div class="col-md-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-success mb-3">
                                    <i class="fa fa-bullhorn text-white"></i>
                                </div>
                                <h3>Provide Free Ads</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-primary mb-3">
                                    <i class="fa fa-heart  text-white"></i>
                                </div>
                                <h3>Best Ad Ratings</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-pink mb-3">
                                    <i class="fa fa-bookmark  text-white"></i>
                                </div>
                                <h3>Provide Post Features</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 features">
                    <div class="card mb-lg-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-warning mb-3">
                                    <i class="fa fa-line-chart   text-white"></i>
                                </div>
                                <h3>See  your Ad Progress</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 features">
                    <div class="card mb-lg-0 mb-md-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-danger mb-3">
                                    <i class="fa fa-handshake-o   text-white"></i>
                                </div>
                                <h3>User Friendly</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 features">
                    <div class="card mb-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-info mb-3">
                                    <i class="fa fa-phone  text-white"></i>
                                </div>
                                <h3>24/7 Support</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/section-->

    <!--Statistics-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="statistics-info text-dark">
                <div class="row text-center">

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-status mb-6 mb-lg-0">
                            <div class="counter-icon">
                                <i class="si si-people"></i>
                            </div>
                            <h5>Clients</h5>
                            <h2 class="counter mb-0">2569</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-status mb-6 mb-lg-0">
                            <div class="counter-icon">
                                <i class="si si-rocket"></i>
                            </div>
                            <h5>Total Sales</h5>
                            <h2 class="counter mb-0">1765</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-status mb-6 mb-sm-0">
                            <div class="counter-icon">
                                <i class="si si-docs"></i>
                            </div>
                            <h5>Total Projects</h5>
                            <h2 class="counter mb-0">846</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-status">
                            <div class="counter-icon">
                                <i class="si si-emotsmile"></i>
                            </div>
                            <h5>Happy Customers</h5>
                            <h2 class="counter mb-0">7253</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Statistics-->


    @include('frontend.sections.news_letter')
@endsection
