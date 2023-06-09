<!DOCTYPE html>
<html>

  <head>
    <title>زهرة المدائن  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('assets/imgs/logo.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  </head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-dark-custum ">
    <a class="navbar-brand " href="{{url('/')}}">
      <img class="navbar-brand-img" src="{{asset('assets/imgs/logo.png')}}" alt="زهرة المدائن ">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">الصفحة الرئيسية </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#"
            onclick="$('html, body').animate({scrollTop: $('#article').offset().top}, 'slow');">اعمالنا</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"
            onclick="$('html, body').animate({scrollTop: $('#aboutUs').offset().top}, 'slow');">من نحن</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/policy')}}">سياسية الخصوصية</a>
        </li>
      </ul>
    </div>
  </nav>
  <section class="backNav"></section>
  
  <div class="hidden-nav" style="display: none;">
    
  </div>
  <h1>سياسة الخصوصية</h1>
  <section class="contactUs" style="margin-top: 100px;">
    <div class="container">
      <div class="row contactUs-row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
          <div class="contactUs-txt">
            <h4 style="color: #dbae89">اتصل بنا</h4>
            <span>
              امتلك وحدتك الآن في العاصمة الإدارية الجديدة
            </span>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="">
            <a href="tel:+{{$configration->phone}}"><button type="button" class="btn intro-btn-order" style="background-color: #dbae89;color: black">اطلب الآن</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="article" class="articles">
    <div class="articles-hdr">
     
      <span class="articles-hdr-text">
        سياسة الخصوصية
      </span>
    </div>
    <div class="container">
      <div class="row articles-row card-deck">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-col">
          <div class="card" style="padding: 30px;">
            {{-- <img src="{{asset($article->image)}}" class="card-img-top" alt="{{$article->title}}"
              style="width: 40%;height:250px;"> --}}
            <div class="card-body" style="padding: 1rem 0px;">
              <h5 class="card-title text-right"><b></b></h5>
              <h2>صفحة سياسة الخصوصية</h2>
              <p class="card-text">
                في موقع نيو كابيتال ندرك أن خصوصية معلوماتك الشخصية هامة لك ولنا.
                فيما يلي معلومات حول أنواع المعلومات الشخصية التي نتلقاها ونقوم بجمعها عند زيارات (اسم المدونة)، وكيف نقوم بحماية معلوماتك الشخصية.
              </p>
              <h2>ملفات السجل</h2>
                
                كما هو الحال مع معظم مواقع الويب المختلفة، نقوم بجمع واستخدام البيانات الموجودة في ملفات السجل.
                تشمل المعلومات الموجودة في ملفات السجل عنوان بروتوكول الإنترنت (IP) الخاص بك، ومزود خدمة الإنترنت (ISP)، والمتصفح الذي استخدمته لزيارة موقعنا، والوقت الذي قمت فيه بالزيارة، والصفحات التي قمت بزيارتها عبر موقعنا.
              <h2>ملفات تعريف الارتباط</h2>  
                
                نحن نستخدم ملفات تعريف الارتباط لنمنحك أفضل تجربة أستخدام ممكنة على موقع بسيط، لمزيد من المعلومات حول ملفات تعريف الارتباط ، تفضل بزيارة: http://www.allaboutcookies.org/.
              <h2>ملفات تعريف الارتباط الأساسية</h2>
                
                تعد ملفات تعريف الارتباط الأساسية ضرورية لك للتنقل والتنقل في جميع أنحاء الموقع، ولا تخزن أي معلومات يمكن استخدامها لأغراض الدعاية، بدون ملفات تعريف الارتباط الأساسية، لن يعمل موقعنا بشكل صحيح.
              <h2>ملفات تعريف الارتباط المخصصة</h2>  
                
                تخزن ملفات تعريف الارتباط هذه المعلومات ، مثل تفضيلاتك الشخصية ، وتستخدمها لتخصيص تجربة فريدة لك.
                قد يشمل ذلك عرض نافذة منبثقة مرة واحدة فقط في زيارتك ، أو حفظ تفضيلات اللغة الخاصة بك ، أو السماح لك بتسجيل الدخول تلقائيًا إلى بعض ميزاتنا.
                <h2>ملفات تعريف الارتباط في Analytics</h2>  
                
                تلتقط ملفات تعريف الارتباط من Analytics بيانات مجهولة المصدر حتى نتمكن من رؤية الاتجاهات وتحسين تجربة موقعنا على الويب.
                هذه تتيح لنا اختبار تصميمات مختلفة ، وتساعدنا على تحديد الكسر إذا كان جزء من موقعنا لا يعمل.
                <h2>ملفات تعريف الارتباط للإعلانات</h2>  
                
                قد يستخدم بعض المعلنين من الجهات الخارجية ملفات تعريف الارتباط أو إشارات الويب عند الإعلان على موقعنا.
                <br>
                سيقوم هؤلاء بإرسال معلومات إلى هؤلاء المعلنين (مثل Google من خلال برنامج Google AdSense) بما في ذلك عنوان IP الخاص بك ، ومزود خدمة الإنترنت ، والمتصفح الذي استخدمته لزيارة موقعنا ، وفي بعض الحالات معلومات حول ما إذا كنت قد قمت بتثبيت Flash.
                <br>
                •	يستخدم موردو الجهات الخارجية، بمن فيهم Google، ملفات تعريف ارتباط لعرض الإعلانات بناءً على زيارات المستخدم السابقة لموقعنا الإلكتروني أو لمواقع أخرى على الويب.
                <br>
                •	ستتمكّن Google وشركاؤها، باستخدام ملفات تعريف الارتباط للإعلانات، من عرض الإعلانات للمستخدمين لديك استنادًا إلى زياراتهم لموقعنا و/أو مواقع أخرى عبر الإنترنت.
                <br>
                •	يمكن للمستخدمين تعطيل استخدام الإعلانات المخصصة عن طريق الانتقال إلى إعدادات الإعلانات.
                <br>
                إذا لم يتم اختيار تعطيل عرض إعلانات الأطراف الثالثة، فقد يتم استخدام ملفات تعريف ارتباط موردي أو شبكات إعلانات الأطراف الثالثة الأخرى أيضًا لعرض الإعلانات في موقعنا.
                <br>
                يستخدم هذا بشكل عام لأغراض الاستهداف الجغرافي على سبيل المثال (عرض الإعلانات SEO في مصر لشخص ما في مصر) أو عرض إعلانات معينة بناءً على مواقع محددة تمت زيارتها (مثل عرض إعلانات العقارات لشخص يرتاد مواقع العقارات).
                <br>
                من خلال الاستمرار في استخدام موقعنا ، فإنك توافق على وضع ملفات تعريف الارتباط على جهازك، يمكنك اختيار تعطيل أو إيقاف تشغيل ملفات تعريف الارتباط أو ملفات تعريف ارتباط الطرف الثالث بشكل انتقائي في إعدادات المتصفح الخاص بك. ومع ذلك ، يمكن أن يؤثر هذا على كيفية تفاعلك مع موقعنا وكذلك مع مواقع الويب الأخرى.
                <br>
                اذا كان لديك اى سؤال او كان هنا اى مشكلة فى سياسة أستخدام البيانات الخاصة بنا الرجاء المراسلة ع من خلال صفحة الأتصال بنا.
                
              </p>             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer" id="aboutUs" style="background-color: #464158;">
    <div class="container" >
      <div class="row footer-row">
        <div class="col-sm-12">
          <div class="footer-r">
            <img class="footer-img" src="{{asset('assets/imgs/logo.png')}}">
            <h4 style="text-align: center; font-weight: bold;margin-top: 15px;">
              زهرة المدائن  
             
            <p class="paragraph-footer" style="color: #c09b7f">
              <span style="font-weight: bold;">
              </span>
              <br><br>
              {{$configration->description}}
              @if($configration->address!=null)
              <br><br>
              مقرات الشركة:{{$configration->address}}
              @endif
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <footer class="footer-sm"  style="background-color: #232030;">
    <div class="container">
      <div class="row">
        <div class="col-5">
          <div class="footer-sm-r">
            @if($configration->facebook!=null)
            <a href="{{$configration->facebook}}" target="_blank">
              <img class="footer-icon" src="{{asset('assets/imgs/facebookIcon.png')}}">
            </a>
            @endif
            @if($configration->instagram!=null)
            <a href="{{$configration->instagram}}" target="_blank">
              <img class="footer-icon" src="{{asset('assets/imgs/instagram.png')}}">
            </a>
            @endif
            @if($configration->whatsapp!=null)
            <a href="https://api.whatsapp.com/send?phone=+{{$configration->whatsapp}}" target="_blank">
              <img class="footer-icon" src="{{asset('assets/imgs/whatsappIcon.png')}}">
            </a>
            @endif
          </div>
        </div>
        <div class="col-7">
          <span class="footer-sm-l">
            جميع الحقوق محفوظة
            <a href="https://www.facebook.com/AxesDigitalAgency" target="_blank">
              <img style="margin-right: 10px;" width="40px" src="{{asset('assets/imgs/logo1.png')}}" alt="">
            </a>
          </span>
        </div>
      </div>
    </div>
    <button type="button" id="callPhone" class="btn floatingBtn call">
      <i class="fas fa-phone-alt"></i>
    </button>
    <a href="https://api.whatsapp.com/send?phone=+{{$configration->whatsapp}}" target="_blank">
      <button type="button" class="btn floatingBtn whatspp">
        <i class="fab fa-whatsapp"></i>
      </button>
    </a>
  </footer>
  <script src="{{asset('assets/js/jquery.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/script.js')}}"></script>
  <script>
    $("#callPhone").click(function () {
      window.location.href = "tel:+{{$configration->phone}}";
    });
  </script>
</body>

</html>