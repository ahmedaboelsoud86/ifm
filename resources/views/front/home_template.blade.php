<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Lorem PugJs">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta name="keywords" content="">
    <title>Integrated Facility </title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/home-rtl.css') }}"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&amp;amp;display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/grt-youtube-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="logo"><a href="{{ route('home')}}" title="Takamul AlOula Facility Management "> <img class="logowight" src="{{ asset('assets/images/logo.png') }}" alt="Takamul AlOula Facility Management " title="Takamul AlOula Facility Management " loading="lazy"><img class="logodork" src="{{ asset('assets/images/logodork.png') }}" alt="Takamul AlOula Facility Management " title="Takamul AlOula Facility Management " loading="lazy"></a></div>
        <div class="burger" id="burger"><span class="burger-line"></span><span class="burger-line"></span><span class="burger-line"></span></div><span class="overlay"></span>
        <nav class="navbar" id="navbar"><span class="cancel">
            <svg width="10" height="10" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z" fill="#fff"></path>
            </svg></span>
          <ul class="menu" id="menu">
            <li class="menu-item activelink"><a class="menu-link" href="index.html">@lang('home')</a></li>
            <li class="menu-item"><a class="menu-link" href="aboutus.html">@lang('about_us')</a></li>
            <li class="menu-item"><a class="menu-link" href="services.html"> @lang('services_solutions')</a></li>
            <li class="menu-item"><a class="menu-link" href="clients.html"> @lang('clients')</a></li>
            <li class="menu-item"><a class="menu-link" href="news.html"> @lang('news')</a></li>
            <li class="menu-item"><a class="menu-link" href="contactus.html">@lang('contact_us')</a></li>
          </ul>
        </nav>
        <div class="icon"><span class="searchicon">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.32241 19.3897C-1.10733 14.9599 -1.10724 7.75196 3.32241 3.32213C7.75224 -1.1077 14.9601 -1.1077 19.3898 3.32213C23.1479 7.08024 23.7171 12.6695 21.0988 17.0341C21.0988 17.0341 20.9108 17.3496 21.1648 17.6035C22.6138 19.0524 26.9613 23.4 26.9613 23.4C28.1151 24.5537 28.3897 26.1669 27.3666 27.1902L27.1904 27.3662C26.1673 28.3895 24.554 28.115 23.4003 26.9612C23.4003 26.9612 19.062 22.6228 17.6159 21.1768C17.3497 20.9107 17.0343 21.0987 17.0343 21.0987C12.6698 23.7169 7.08052 23.1478 3.32241 19.3897ZM17.2923 17.2921C20.5655 14.0189 20.5654 8.69311 17.2922 5.41992C14.019 2.14682 8.69322 2.14673 5.42011 5.41992C2.14692 8.69302 2.14692 14.0189 5.42011 17.2921C8.69331 20.5651 14.019 20.5651 17.2923 17.2921Z" fill="#686868"></path>
              <path d="M16.5678 10.6819C16.7202 10.6819 16.875 10.6519 17.0243 10.5889C17.6206 10.3365 17.8996 9.64845 17.6472 9.05204C16.061 5.3034 11.7208 3.54423 7.97225 5.13049C7.37594 5.38287 7.09695 6.07092 7.34933 6.66732C7.6018 7.26373 8.28967 7.54254 8.88626 7.29025C11.4438 6.20802 14.4053 7.40832 15.4874 9.96586C15.6767 10.4132 16.1109 10.6819 16.5678 10.6819Z" fill="#686868"></path>
              <linearGradient id="paint0_linear_1_316" x1="14.0001" y1="-0.000244141" x2="14.0001" y2="27.9998" gradientUnits="userSpaceOnUse">
                <stop stop-color="#686868"></stop>
                <stop offset="1" stop-color="#686868"></stop>
              </linearGradient>
              <linearGradient id="paint1_linear_1_316" x1="12.4983" y1="4.54688" x2="12.4983" y2="10.6819" gradientUnits="userSpaceOnUse">
                <stop stop-color="#686868"></stop>
                <stop offset="1" stop-color="#686868"></stop>
              </linearGradient>
            </svg></span><a class="language" href="ar/index.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
              <g clip-path="url(#clip0_1776_184)">
                <path d="M17.2808 13.767C17.2808 10.077 17.2808 6.387 17.2808 2.697C17.2934 2.01924 17.0464 1.3623 16.5902 0.860842C16.1341 0.359384 15.5034 0.0513927 14.8275 0L2.55 0C1.88164 0.0248964 1.2474 0.301548 0.774477 0.774477C0.301548 1.2474 0.0248964 1.88164 0 2.55L0 14.8425C0.0417369 15.3265 0.214141 15.79 0.498803 16.1837C0.783465 16.5773 1.16969 16.8863 1.61625 17.0775C2.33025 17.391 3.1245 17.2553 3.8805 17.2853C3.8805 18.1665 3.8805 19.0478 3.8805 19.929C3.88279 20.121 3.9479 20.3069 4.06587 20.4583C4.18385 20.6097 4.34819 20.7183 4.53375 20.7675C4.8045 20.8372 5.08275 20.7578 5.34825 20.7023C6.43524 20.4474 7.43982 19.921 8.268 19.1723C8.85064 18.6352 9.32982 17.9959 9.68175 17.286C11.3565 17.2822 13.0305 17.286 14.7067 17.2822C15.7703 17.274 16.773 16.545 17.1225 15.543C17.3408 14.9738 17.2695 14.3588 17.2808 13.767ZM11.2373 13.9365C10.8988 14.1255 10.342 14.22 9.567 14.22C8.99559 14.2248 8.42624 14.1508 7.875 14.0003C7.37909 13.866 6.91052 13.6459 6.4905 13.35C6.08267 13.0546 5.75543 12.6616 5.53875 12.207C5.29892 11.697 5.18032 11.1384 5.19225 10.575C5.19225 9.416 5.7325 8.3645 6.813 7.4205C6.271 7.038 5.89175 6.692 5.67525 6.3825C5.45395 6.06316 5.33948 5.68193 5.34825 5.2935C5.35607 4.76479 5.50803 4.24823 5.78775 3.7995C5.98631 3.45852 6.26223 3.16899 6.59325 2.95425C6.8945 2.75935 7.24545 2.65522 7.60425 2.65425C8.39175 2.65425 9.09175 3.0645 9.70425 3.885L9.5475 4.08975C9.07279 3.87254 8.55602 3.76268 8.034 3.768C7.56209 3.75981 7.09541 3.86773 6.675 4.08225C6.2815 4.29075 6.08475 4.5025 6.08475 4.7175C6.0856 4.93549 6.15428 5.14781 6.28125 5.325C6.46443 5.56657 6.68316 5.77899 6.93 5.955C7.419 6.305 7.76425 6.48 7.96575 6.48C8.07625 6.48 8.25525 6.42125 8.50275 6.30375C9.41425 5.87175 10.2933 5.4955 11.1398 5.175L11.1885 5.20425L10.8135 6.48375C9.397 7.03825 8.2925 7.552 7.5 8.025C7.04049 8.29367 6.63383 8.6439 6.3 9.0585C6.003 9.4395 5.85475 9.8145 5.85525 10.1835C5.85525 11.004 6.267 11.6698 7.0905 12.1808C7.914 12.6918 8.989 12.9473 10.3155 12.9473C11.1543 12.9571 11.991 12.8621 12.8063 12.6645L12.8745 12.84C12.3525 13.2398 11.8056 13.606 11.2373 13.9365Z" fill="white"></path>
                <path d="M21.9898 0H22.1158C22.6033 0.0345 22.9963 0.513 22.9146 0.9975C22.8823 1.32825 22.6206 1.55475 22.3993 1.7715C23.6134 1.82601 24.7987 2.15867 25.8639 2.74384C26.929 3.32901 27.8455 4.15103 28.5426 5.1465C29.4855 6.48675 29.9877 8.08732 29.9796 9.726C29.9796 10.2855 29.3623 10.7265 28.8351 10.5315C28.6537 10.4714 28.4963 10.3546 28.3861 10.1984C28.276 10.0422 28.2188 9.85483 28.2231 9.66375C28.2129 8.09627 27.6079 6.59113 26.5305 5.45266C25.453 4.31419 23.9834 3.62734 22.4188 3.531C22.5906 3.71175 22.7998 3.8775 22.8748 4.125C22.9387 4.3145 22.9363 4.52004 22.8682 4.70804C22.8001 4.89604 22.6702 5.05538 22.4998 5.16C22.3277 5.26104 22.1267 5.3016 21.9288 5.27524C21.7309 5.24887 21.5475 5.15709 21.4078 5.0145C20.8236 4.428 20.2363 3.8445 19.6536 3.25725C19.4948 3.09098 19.4068 2.86952 19.4082 2.63961C19.4096 2.4097 19.5003 2.18933 19.6611 2.025C20.2461 1.4375 20.8321 0.85125 21.4191 0.26625C21.5732 0.114647 21.7747 0.0206399 21.9898 0Z" fill="white"></path>
                <path d="M29.1047 13.3778C28.6398 12.9661 28.0434 12.7335 27.4225 12.7216C26.989 12.7141 26.5547 12.7216 26.1212 12.7216C26.1212 11.8403 26.1212 10.9598 26.1212 10.0786C26.1196 9.90105 26.0641 9.72817 25.9622 9.58277C25.8604 9.43736 25.7168 9.32625 25.5505 9.26409C25.288 9.15984 25.0022 9.23034 24.7367 9.28434C23.3975 9.58036 22.1847 10.2885 21.2687 11.3093C20.893 11.7381 20.5741 12.2135 20.32 12.7238C19.894 12.7238 19.4695 12.7238 19.045 12.7238C19.045 13.3868 19.045 14.0498 19.045 14.7128C19.0274 15.8461 18.573 16.9288 17.7765 17.7351C16.98 18.5414 15.9029 19.009 14.77 19.0403C14.0882 19.0478 13.4057 19.0403 12.7232 19.0441C12.7232 21.5656 12.7232 24.0871 12.7232 26.6086C12.7285 27.1621 12.6752 27.7336 12.8815 28.2653C13.0641 28.7569 13.3876 29.1836 13.8116 29.4922C14.2355 29.8008 14.7411 29.9774 15.265 30.0001H27.4577C28.0671 29.9757 28.6496 29.7427 29.1077 29.3401C29.6266 28.8775 29.9475 28.2329 30.004 27.5401V15.2603C29.9884 14.9022 29.9008 14.5509 29.7463 14.2274C29.5918 13.9039 29.3736 13.615 29.1047 13.3778ZM25.351 25.6358C24.9077 25.9238 24.2612 25.7018 24.0715 25.2136C23.8742 24.8108 23.6672 24.4141 23.4715 24.0091C22.0675 23.9963 20.6635 24.0091 19.2595 24.0038C19.0397 24.4321 18.8305 24.8663 18.61 25.2946C18.5379 25.4325 18.4304 25.5487 18.2985 25.6313C18.1667 25.7139 18.0152 25.76 17.8597 25.7647C17.7042 25.7694 17.5502 25.7327 17.4136 25.6582C17.2769 25.5838 17.1626 25.4743 17.0822 25.3411C17.003 25.2068 16.96 25.0542 16.9575 24.8982C16.955 24.7423 16.9931 24.5884 17.068 24.4516C18.234 22.1211 19.3992 19.7906 20.5637 17.4601C20.6586 17.2609 20.8245 17.1042 21.0289 17.021C21.2333 16.9377 21.4614 16.9339 21.6685 17.0101C21.7812 17.0534 21.8842 17.1187 21.9714 17.2023C22.0586 17.2859 22.1282 17.386 22.1762 17.4968C23.3427 19.8273 24.5075 22.1576 25.6705 24.4876C25.7684 24.6847 25.79 24.911 25.731 25.123C25.672 25.335 25.5366 25.5177 25.351 25.6358Z" fill="white"></path>
                <path d="M0.354 19.5817C0.492813 19.4768 0.659891 19.4158 0.83368 19.4067C1.00747 19.3976 1.17999 19.4408 1.329 19.5307C1.46611 19.6137 1.57845 19.7319 1.6543 19.873C1.73016 20.0142 1.76674 20.1731 1.76025 20.3332C1.77528 21.8977 2.38245 23.3985 3.45954 24.5333C4.53662 25.6682 6.00364 26.3528 7.56525 26.4495C7.4055 26.2807 7.212 26.1307 7.125 25.9087C7.04831 25.721 7.0389 25.5126 7.09839 25.3188C7.15787 25.125 7.28258 24.9577 7.45135 24.8454C7.62012 24.733 7.82256 24.6826 8.02431 24.7025C8.22607 24.7224 8.41472 24.8115 8.55825 24.9547C9.1185 25.5097 9.67125 26.0722 10.2323 26.6257C10.6485 26.952 10.6973 27.63 10.296 27.987C9.7185 28.5645 9.14325 29.1435 8.56425 29.718C8.45133 29.8315 8.3098 29.9124 8.15465 29.952C7.9995 29.9916 7.83652 29.9885 7.683 29.943C7.46643 29.8783 7.28317 29.7326 7.1714 29.5361C7.05963 29.3397 7.02796 29.1077 7.083 28.8885C7.14525 28.6005 7.383 28.4122 7.58175 28.2135C5.60338 28.12 3.73074 27.293 2.32902 25.8938C0.927293 24.4946 0.0969811 22.6234 0 20.6452L0 20.1885C0.034448 19.9478 0.16146 19.7301 0.354 19.5817Z" fill="white"></path>
                <path d="M20.1367 22.2456C20.5432 21.4291 20.9512 20.6126 21.3607 19.7961C21.768 20.6129 22.1782 21.4289 22.5847 22.2456H20.1367Z" fill="white"></path>
              </g>
              <clipPath id="clip0_1776_184">
                <rect width="30" height="30" fill="white"></rect>
              </clipPath>
            </svg>Ar</a></div>
        <div class="showboxsearch">
          <form class="formsearch" action="#" method="">
            <input class="form-control" type="text" placeholder="What you are looking for......">
            <button class="bottom" type="submit">
              <svg viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.32241 19.3897C-1.10733 14.9599 -1.10724 7.75196 3.32241 3.32213C7.75224 -1.1077 14.9601 -1.1077 19.3898 3.32213C23.1479 7.08024 23.7171 12.6695 21.0988 17.0341C21.0988 17.0341 20.9108 17.3496 21.1648 17.6035C22.6138 19.0524 26.9613 23.4 26.9613 23.4C28.1151 24.5537 28.3897 26.1669 27.3666 27.1902L27.1904 27.3662C26.1673 28.3895 24.554 28.115 23.4003 26.9612C23.4003 26.9612 19.062 22.6228 17.6159 21.1768C17.3497 20.9107 17.0343 21.0987 17.0343 21.0987C12.6698 23.7169 7.08052 23.1478 3.32241 19.3897ZM17.2923 17.2921C20.5655 14.0189 20.5654 8.69311 17.2922 5.41992C14.019 2.14682 8.69322 2.14673 5.42011 5.41992C2.14692 8.69302 2.14692 14.0189 5.42011 17.2921C8.69331 20.5651 14.019 20.5651 17.2923 17.2921Z" fill="#8E8E8E"></path>
                <path d="M16.5678 10.6819C16.7202 10.6819 16.875 10.6519 17.0243 10.5889C17.6206 10.3365 17.8996 9.64845 17.6472 9.05204C16.061 5.3034 11.7208 3.54423 7.97225 5.13049C7.37594 5.38287 7.09695 6.07092 7.34933 6.66732C7.6018 7.26373 8.28967 7.54254 8.88626 7.29025C11.4438 6.20802 14.4053 7.40832 15.4874 9.96586C15.6767 10.4132 16.1109 10.6819 16.5678 10.6819Z" fill="#8E8E8E"></path>
                <clipPath id="clip0_1_322">
                  <rect width="28" height="28" fill="white" transform="matrix(-1 0 0 1 28 0)"></rect>
                </clipPath>
              </svg>
            </button>
          </form>
        </div>
      </div>
    </header><!--End Header-->
    <div class="slider">
      <div class="iconssocial">
        <p>@lang('Follow_us_on')</p>
        <nav class="social"><a class="icon-facebook" href="#" target="_blank" title="Facebook">
            <svg id="Bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
              <path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"></path>
            </svg></a><a class="icon-twitter" href="#" target="_blank" title="Twitter">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
              <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                <path d="M 0.219 2.882 l 34.748 46.461 L 0 87.118 h 7.87 l 30.614 -33.073 l 24.735 33.073 H 90 L 53.297 38.043 L 85.844 2.882 h -7.87 L 49.781 33.341 L 27.001 2.882 H 0.219 z M 11.793 8.679 h 12.303 L 78.425 81.32 H 66.122 L 11.793 8.679 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #000; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "></path>
              </g>
            </svg></a><a class="icon-instagram" href="#" target="_blank" title="Instagram">
            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.4805 0H5.51913C2.47588 0 0 2.476 0 5.51924V14.4806C0 17.524 2.47588 19.9999 5.51913 19.9999H14.4805C17.524 19.9999 19.9999 17.5239 19.9999 14.4806V5.51924C20 2.476 17.524 0 14.4805 0ZM18.2255 14.4806C18.2255 16.5455 16.5455 18.2254 14.4806 18.2254H5.51913C3.45433 18.2255 1.77449 16.5455 1.77449 14.4806V5.51924C1.77449 3.45445 3.45433 1.77449 5.51913 1.77449H14.4805C16.5454 1.77449 18.2254 3.45445 18.2254 5.51924V14.4806H18.2255Z"></path>
              <path d="M10.0001 4.84668C7.15848 4.84668 4.84668 7.15848 4.84668 10.0001C4.84668 12.8417 7.15848 15.1534 10.0001 15.1534C12.8418 15.1534 15.1536 12.8417 15.1536 10.0001C15.1536 7.15848 12.8418 4.84668 10.0001 4.84668ZM10.0001 13.3788C8.13705 13.3788 6.62117 11.8631 6.62117 10C6.62117 8.13681 8.13693 6.62105 10.0001 6.62105C11.8634 6.62105 13.3791 8.13681 13.3791 10C13.3791 11.8631 11.8632 13.3788 10.0001 13.3788Z"></path>
              <path d="M15.3696 3.3418C15.0278 3.3418 14.6919 3.48021 14.4505 3.72272C14.2078 3.96405 14.0684 4.30002 14.0684 4.64309C14.0684 4.98509 14.208 5.32094 14.4505 5.56345C14.6918 5.80478 15.0278 5.94438 15.3696 5.94438C15.7127 5.94438 16.0475 5.80478 16.29 5.56345C16.5325 5.32094 16.6709 4.98497 16.6709 4.64309C16.6709 4.30002 16.5325 3.96405 16.29 3.72272C16.0487 3.48021 15.7127 3.3418 15.3696 3.3418Z"></path>
            </svg></a><a class="icon-youtube" href="#" target="_blank" title="youtube">
            <svg id="Layer_1" enable-background="new 0 0 511.982 511.982" height="512" viewBox="0 0 511.982 511.982" width="512" xmlns="http://www.w3.org/2000/svg">
              <path d="m341.885 238.36-130-74c-6.188-3.524-13.787-3.488-19.946.091-6.158 3.581-9.947 10.167-9.947 17.29v148c0 7.123 3.789 13.709 9.947 17.29 6.159 3.58 13.757 3.616 19.946.091l130-74c13.396-7.478 13.392-27.287 0-34.762zm-119.894 56.984v-79.205l69.571 39.603zm282.306-145.855c-6.503-45.918-43.306-81.146-89.5-85.668-36.489-3.572-93.661-7.83-158.806-7.83s-122.316 4.258-158.806 7.83c-46.194 4.521-82.997 39.75-89.5 85.667-10.247 72.73-10.247 140.276 0 213.005 6.503 45.918 43.306 81.146 89.5 85.668 36.489 3.572 93.661 7.83 158.806 7.83s122.316-4.258 158.806-7.83c46.194-4.521 82.997-39.75 89.5-85.667 10.247-72.73 10.247-140.276 0-213.005zm-39.606 207.397c-3.906 27.584-26.025 48.747-53.791 51.465-35.604 3.486-91.379 7.641-154.909 7.641s-119.306-4.154-154.909-7.641c-27.766-2.718-49.885-23.881-53.791-51.466-4.844-34.203-7.3-68.148-7.3-100.894s2.456-66.69 7.3-100.895c3.906-27.584 26.025-48.747 53.791-51.465 35.604-3.486 91.379-7.641 154.909-7.641s119.306 4.154 154.909 7.641c27.766 2.718 49.885 23.881 53.791 51.466 9.722 69.018 9.722 132.771 0 201.789z"></path>
            </svg></a><a class="icon-linkedin" href="#" target="_blank" title="linkedin">
            <svg viewBox="-21 -35 682.66669 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
              <path d="m77.613281-.667969c-46.929687 0-77.613281 30.816407-77.613281 71.320313 0 39.609375 29.769531 71.304687 75.8125 71.304687h.890625c47.847656 0 77.625-31.695312 77.625-71.304687-.894531-40.503906-29.777344-71.320313-76.714844-71.320313zm0 0"></path>
              <path d="m8.109375 198.3125h137.195313v412.757812h-137.195313zm0 0"></path>
              <path d="m482.054688 188.625c-74.011719 0-123.640626 69.546875-123.640626 69.546875v-59.859375h-137.199218v412.757812h137.191406v-230.5c0-12.339843.894531-24.660156 4.519531-33.484374 9.917969-24.640626 32.488281-50.167969 70.390625-50.167969 49.644532 0 69.5 37.851562 69.5 93.339843v220.8125h137.183594v-236.667968c0-126.78125-67.6875-185.777344-157.945312-185.777344zm0 0"></path>
            </svg></a><a class="icon-whatsapp" href="#" target="_blank" title="whatsapp">
            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6319 3.34007C14.8778 1.58386 12.5449 0.616264 10.0596 0.615234C4.93836 0.615234 0.770424 4.78306 0.768364 9.90566C0.767677 11.5432 1.19546 13.1417 2.00856 14.5507L0.69043 19.3652L5.61585 18.0732C6.97301 18.8135 8.50091 19.2036 10.0558 19.2041H10.0597C15.1804 19.2041 19.3488 15.0359 19.3507 9.9131C19.3517 7.43042 18.3862 5.09617 16.6319 3.34007ZM10.0596 17.635H10.0564C8.67074 17.6344 7.31175 17.262 6.12592 16.5586L5.84405 16.3911L2.92123 17.1579L3.70137 14.3082L3.51769 14.016C2.74464 12.7865 2.33643 11.3654 2.33712 9.90623C2.33872 5.64846 5.80308 2.18445 10.0627 2.18445C12.1254 2.18513 14.0643 2.98943 15.5223 4.44912C16.9803 5.90881 17.7828 7.84904 17.7821 9.91253C17.7802 14.1706 14.3161 17.635 10.0596 17.635ZM14.2955 11.8513C14.0634 11.735 12.922 11.1736 12.7091 11.096C12.4965 11.0185 12.3415 10.9799 12.1869 11.2122C12.0321 11.4445 11.5873 11.9675 11.4518 12.1224C11.3163 12.2773 11.181 12.2968 10.9488 12.1805C10.7166 12.0644 9.96861 11.8191 9.08181 11.0282C8.39173 10.4126 7.92584 9.6524 7.79034 9.42009C7.65508 9.18754 7.7892 9.07402 7.8922 8.9463C8.14351 8.63422 8.39516 8.30704 8.47253 8.1522C8.55 7.99724 8.51121 7.86163 8.45307 7.74547C8.39516 7.62932 7.93088 6.48662 7.73747 6.02165C7.54887 5.56915 7.35764 5.63026 7.21505 5.62317C7.07978 5.61642 6.92494 5.61504 6.7701 5.61504C6.61538 5.61504 6.36384 5.67306 6.15098 5.90561C5.93823 6.13804 5.33856 6.6996 5.33856 7.84229C5.33856 8.98498 6.17043 10.0889 6.28648 10.2438C6.40252 10.3988 7.92355 12.7437 10.2523 13.7492C10.8062 13.9886 11.2386 14.1313 11.5758 14.2383C12.132 14.415 12.6379 14.39 13.038 14.3303C13.4841 14.2636 14.4114 13.7686 14.6051 13.2264C14.7985 12.6841 14.7985 12.2193 14.7403 12.1224C14.6824 12.0256 14.5276 11.9675 14.2955 11.8513Z"></path>
            </svg></a></nav>
      </div><!--End iconssocial-->
      <div class="carousel slide carousel-fade" id="carouselExampleFade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">        <img src="{{ asset('assets/images/slider/img1.jpg') }}" alt="">
            <div class="container cen-text">
              <div>
                <p class="text">  -Here you will find all the services you need</p>
                <h2 class="title">Twelve years of providing  <br> distinguished public utility services</h2><a class="bottom" href="contactus.html"><span>Let’s Talk</span></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">        <img src="{{ asset('assets/images/slider/img2.jpg') }}" alt="">
            <div class="container cen-text">
              <div>
                <p class="text">  -Four Decades of Excellence in Integrated Facility Sustainability</p>
                <h2 class="title">Twelve years of providing  <br> distinguished public utility services</h2><a class="bottom" href="contactus.html"><span>Let’s Talk</span></a>
              </div>
            </div>
          </div>
        </div><a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.8 490.8" style="enable-background:new 0 0 490.8 490.8;" xml:space="preserve">
            <path d="M135.685,3.128c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82 l227.115,227.136L120.581,472.461c-4.237,4.093-4.354,10.845-0.262,15.083c4.093,4.237,10.845,4.354,15.083,0.262 c0.089-0.086,0.176-0.173,0.262-0.262l234.667-234.667c4.164-4.165,4.164-10.917,0-15.083L135.685,3.128z"> </path>
            <path d="M128.133,490.68c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571l227.136-227.115 L120.581,18.232c-4.171-4.171-4.171-10.933,0-15.104c4.171-4.171,10.933-4.171,15.104,0l234.667,234.667 c4.164,4.165,4.164,10.917,0,15.083L135.685,487.544C133.685,489.551,130.967,490.68,128.133,490.68z"></path>
          </svg></a><a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.8 490.8" style="enable-background:new 0 0 490.8 490.8;" xml:space="preserve">
            <path d="M135.685,3.128c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82 l227.115,227.136L120.581,472.461c-4.237,4.093-4.354,10.845-0.262,15.083c4.093,4.237,10.845,4.354,15.083,0.262 c0.089-0.086,0.176-0.173,0.262-0.262l234.667-234.667c4.164-4.165,4.164-10.917,0-15.083L135.685,3.128z"> </path>
            <path d="M128.133,490.68c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571l227.136-227.115 L120.581,18.232c-4.171-4.171-4.171-10.933,0-15.104c4.171-4.171,10.933-4.171,15.104,0l234.667,234.667 c4.164,4.165,4.164,10.917,0,15.083L135.685,487.544C133.685,489.551,130.967,490.68,128.133,490.68z">  </path>
          </svg></a>
      </div>
    </div><!--End Slider-->
    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 item">
            <div class="tp-about">
              <div class="tp-about-3"><img src="{{ asset('assets/images/shape-2-2.jpg') }}" alt=""></div>
              <div class="tp-about-4"><img src="{{ asset('assets/images/shape-2-3.jpg') }}" alt=""></div>
              <div class="tp-about-2-thumb-text">
                <div class="num">
                  <h3 class="timer" data-to="12" data-speed="1500"> </h3><span>+</span>
                </div>
                <p>Years of experience</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 item">
            <div class="w-100"><span class="tag">About company</span>
              <h1 class="title">Twelve Years Of Providing</h1>
              <p>   Integrated Facilities was established to effectively manage, operate, and maintain government, corporate, and public facilities. With a foundation dating back to 1976, we bring nearly 50 years of experience in delivering comprehensive facility management solutions. Our trained team, guided by industry experts, employs proven methodologies and the latest innovative technologies to optimize operations, enhance sustainability, and drive efficiency. We are dedicated to providing tailored solutions that align with our partners’ strategic goals and contribute to their overall success.</p><a class="bottom" href="aboutus.html"><span>Read more</span></a>
            </div>
          </div>
        </div>
      </div>
    </section><!--End minabout-->
    <section class="minservices">
      <div class="container"><span class="tag text-center mb-2">Check out our services</span>
        <h2 class="title text-center">Integrated Facility </h2>
        <div class="slider-services">
          <div class="latesitem">
            <div class="photo">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 284.999 284.999" xml:space="preserve">
                <path d="M111.959,76.307c-2.351-2.041-5.856-2.041-8.207,0l-74.163,63.995c-1.379,1.188-2.171,2.932-2.171,4.756v92.508 c0,3.47,2.814,6.284,6.284,6.284h148.319c3.47,0,6.29-2.814,6.29-6.284v-92.508c0-1.824-0.798-3.568-2.177-4.756L111.959,76.307z M107.853,89.369l67.879,58.571v31.054H39.985V147.94L107.853,89.369z M65.479,215.108v-22.983c0-3.476,2.809-6.284,6.29-6.284 h22.965c3.476,0,6.284,2.809,6.284,6.284v22.983c0,3.47-2.809,6.283-6.284,6.283H71.77 C68.288,221.392,65.479,218.578,65.479,215.108z M114.699,215.108v-22.983c0-3.476,2.808-6.284,6.284-6.284h22.964 c3.482,0,6.284,2.809,6.284,6.284v22.983c0,3.47-2.802,6.283-6.284,6.283h-22.964 C117.507,221.392,114.699,218.578,114.699,215.108z"> </path>
                <path d="M114.007,43.422c-3.538-3.031-8.771-3.031-12.296,0L3.284,128.05c-3.952,3.389-4.397,9.352-1.008,13.291 c1.868,2.177,4.509,3.29,7.162,3.29c2.171,0,4.366-0.754,6.136-2.282l92.278-79.346l92.297,79.346 c3.952,3.408,9.902,2.957,13.291-1.008c3.396-3.939,2.951-9.902-1.002-13.291L114.007,43.422z"> </path>
                <path d="M71.77,172.16h22.965c3.476,0,6.284-2.82,6.284-6.29v-22.983c0-3.47-2.809-6.283-6.284-6.283H71.77 c-3.481,0-6.29,2.813-6.29,6.283v22.983C65.479,169.34,68.288,172.16,71.77,172.16z"> </path>
                <path d="M120.983,172.16h22.964c3.482,0,6.284-2.82,6.284-6.29v-22.983c0-3.47-2.802-6.283-6.284-6.283h-22.964 c-3.477,0-6.284,2.813-6.284,6.283v22.983C114.699,169.34,117.507,172.16,120.983,172.16z"> </path>
                <path d="M282.081,83.79l-30.442-36.546c-4.774-5.74-14.534-5.74-19.31,0L201.875,83.79c-4.446,5.325-3.724,13.255,1.614,17.701 c5.332,4.447,13.261,3.724,17.701-1.607l8.227-9.878v141.27c0,6.939,5.621,12.574,12.561,12.574c6.946,0,12.58-5.635,12.58-12.574 V90.006l8.221,9.878c2.486,2.987,6.055,4.521,9.666,4.521c2.827,0,5.685-0.958,8.041-2.913 C285.811,97.045,286.528,89.115,282.081,83.79z"></path>
              </svg>
            </div>
            <h3 class="title">Integrated facilities management services</h3>
            <p>Comprehensive management of all services, including management, operation, maintenance, cleaning, security, guarding and protection</p><a class="more" href="services-inner.html">Read More </a>
          </div>
          <div class="latesitem">
            <div class="photo">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 502.697 502.697" xml:space="preserve">
                <path d="M439.109,0H111.341C81.983,0,57.953,24.008,57.953,53.388v327.768 c0,7.42,1.553,14.496,4.314,20.924l-42.559,42.343l0.216,0.237c-13.007,13.439-13.007,34.815,0.259,47.995 c13.18,13.309,34.621,13.352,48.081,0.345l0.173,0.237l58.996-58.694h311.655c29.336,0,53.409-24.008,53.409-53.409V53.388 C492.496,24.008,468.445,0,439.109,0z M54.286,480.058c-5.867,5.867-15.445,5.889-21.42-0.065c-5.889-5.889-5.91-15.531,0-21.42 c5.91-5.867,15.488-5.91,21.398-0.022C60.175,464.484,60.175,474.083,54.286,480.058z M444.394,387.627H174.586l93.639-93.143 l94.027-0.28l25.734-96.141l-10.225-10.246l-51.015,51.123l-49.936-49.872l51.058-51.101l-10.203-10.268l-96.055,25.82 l-0.324,91.417l-0.518-0.582L102.432,362.109V99.01h341.983L444.394,387.627L444.394,387.627z"></path>
              </svg>
            </div>
            <h3 class="title">Operation and maintenance services</h3>
            <p> We operate and maintain facilities, including electricity, energy, electronic supplies, medical devices, facility management, and floor maintenance</p><a class="more" href="services-inner.html">Read More </a>
          </div>
          <div class="latesitem">
            <div class="photo">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 470 470" xml:space="preserve">
                <path d="M164,287.167c-90.43,0-164,73.57-164,164v15h328v-15C328,360.737,254.43,287.167,164,287.167z M210.09,325.336v110.831 H107.929V329.477c17.068-7.896,36.062-12.311,56.071-12.311C180.187,317.167,195.713,320.053,210.09,325.336z M77.929,348.55 v87.617H30.834C34.755,401.118,52.255,370.119,77.929,348.55z M240.09,436.167v-95.241c31.079,21.517,52.666,55.819,57.076,95.241 H240.09z"> </path>
                <path d="M51.333,229.226c12.368,0,23.585-5.018,31.728-13.122c17.572,25.963,47.296,43.062,80.939,43.062 s63.367-17.099,80.939-43.062c8.142,8.104,19.359,13.122,31.728,13.122c24.813,0,45-20.187,45-45v-26.56h-0.049 C319.575,72.493,249.656,3.833,164,3.833S8.425,72.493,6.382,157.667H6.333v26.56C6.333,209.039,26.521,229.226,51.333,229.226z M164,229.167c-37.312,0-67.667-30.355-67.667-67.667S126.688,93.833,164,93.833s67.667,30.355,67.667,67.667 S201.312,229.167,164,229.167z M291.667,184.226c0,8.271-6.729,15-15,15c-8.271,0-15-6.729-15-15v-48.287h27.428 c1.685,8.261,2.572,16.809,2.572,25.561V184.226z M164,33.833c50.493,0,94.231,29.467,114.928,72.106h-34.653 C226.625,80.515,197.226,63.833,164,63.833s-62.625,16.682-80.276,42.106H49.072C69.769,63.3,113.507,33.833,164,33.833z M38.906,135.939h27.428v48.287c0,8.271-6.729,15-15,15c-8.271,0-15-6.729-15-15V161.5C36.333,152.749,37.22,144.2,38.906,135.939z "> </path>
                <path d="M470,348.873h-19.558l-7.721-163.784h-76.208l-7.721,163.784h-19.558v30h50.383v87.294h30v-87.294H470V348.873z M395.132,215.089h18.97l6.306,133.784h-31.583L395.132,215.089z"></path>
              </svg>
            </div>
            <h3 class="title">Basic facilities management services</h3>
            <p>  We work proficiently in projects, construction, infrastructure, building maintenance and supervision</p><a class="more" href="services-inner.html">Read More </a>
          </div>
          <div class="latesitem">
            <div class="photo">
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path fill-rule="nonzero" d="M13.619 21c-.085 0-.141-.057-.127-.127V3.127c0-.056.042-.113.113-.113h2.785A4.61 4.61 0 0 1 21 7.624v8.766A4.61 4.61 0 0 1 16.39 21H13.62zm3.422-9.926c-1.004 0-1.824.82-1.824 1.824s.82 1.824 1.824 1.824 1.824-.82 1.824-1.824-.82-1.824-1.824-1.824zM5.8 8.4c0-.933.763-1.696 1.696-1.696.934 0 1.697.763 1.697 1.696 0 .934-.763 1.697-1.697 1.697A1.702 1.702 0 0 1 5.8 8.401zM11.54 3c.085 0 .142.057.128.127V20.86c0 .07-.057.127-.128.127H7.61A4.61 4.61 0 0 1 3 16.376V7.61A4.61 4.61 0 0 1 7.61 3h3.93zm-1.315 16.544V4.442H7.61c-.849 0-1.64.34-2.235.933a3.088 3.088 0 0 0-.933 2.235v8.766c0 .849.34 1.64.933 2.234a3.088 3.088 0 0 0 2.235.934h2.615z"></path>
              </svg>
            </div>
            <h3 class="title">BLight facilities management services</h3>
            <p>  Comprehensive management of all services, including management, operation, maintenance, cleaning, security, guarding and protection</p><a class="more" href="services-inner.html">Read More </a>
          </div>
          <div class="latesitem">
            <div class="photo">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 502.697 502.697" xml:space="preserve">
                <path d="M439.109,0H111.341C81.983,0,57.953,24.008,57.953,53.388v327.768 c0,7.42,1.553,14.496,4.314,20.924l-42.559,42.343l0.216,0.237c-13.007,13.439-13.007,34.815,0.259,47.995 c13.18,13.309,34.621,13.352,48.081,0.345l0.173,0.237l58.996-58.694h311.655c29.336,0,53.409-24.008,53.409-53.409V53.388 C492.496,24.008,468.445,0,439.109,0z M54.286,480.058c-5.867,5.867-15.445,5.889-21.42-0.065c-5.889-5.889-5.91-15.531,0-21.42 c5.91-5.867,15.488-5.91,21.398-0.022C60.175,464.484,60.175,474.083,54.286,480.058z M444.394,387.627H174.586l93.639-93.143 l94.027-0.28l25.734-96.141l-10.225-10.246l-51.015,51.123l-49.936-49.872l51.058-51.101l-10.203-10.268l-96.055,25.82 l-0.324,91.417l-0.518-0.582L102.432,362.109V99.01h341.983L444.394,387.627L444.394,387.627z"></path>
              </svg>
            </div>
            <h3 class="title">Operation and maintenance services</h3>
            <p> We operate and maintain facilities, including electricity, energy, electronic supplies, medical devices, facility management, and floor maintenance</p><a class="more" href="services-inner.html">Read More </a>
          </div>
        </div>
      </div>
    </section><!--End minservices-->
    <section class="numbers">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 item">
            <div class="flex">
              <h3 class="timer" data-to="152" data-speed="15000"></h3><span>+    </span>
            </div>
            <h4 class="title">Completed projects</h4>
          </div>
          <div class="col-sm-4 item">
            <div class="flex">
              <h3 class="timer" data-to="43" data-speed="15000"></h3><span>+  </span>
            </div>
            <h4 class="title"> Company partners</h4>
          </div>
          <div class="col-sm-4 item">
            <div class="flex">
              <h3 class="timer" data-to="5000" data-speed="15000"> </h3><span>+  </span>
            </div>
            <h4 class="title">Company employees</h4>
          </div>
        </div>
      </div>
    </section><!--End numbers-->
    <section class="news">
      <div class="container"><span class="tag text-center mb-2">Our news</span>
        <h2 class="title text-center"> Latest news & articles <br> from the blog</h2>
        <div class="row">
          <div class="col-sm-4 item"> <a class="inner" href="news-inner.html">
              <div class="photo"><img src="{{ asset('assets/images/n-1.jpg') }}" alt=""></div>
              <div class="textcontent"><span class="tag">2023-12-04</span>
                <h3 class="title">The Contracting Group honored 4 security employees working in Tatweer</h3>
              </div></a></div>
          <div class="col-sm-4 item"> <a class="inner" href="news-inner.html">
              <div class="photo"><img src="{{ asset('assets/images/n-2.jpg') }}" alt=""></div>
              <div class="textcontent"><span class="tag">2023-12-04</span>
                <h3 class="title">TCongratulations to its employee Hussein Ali Marhoon, from Almoayyed Landscapes, on achieving a number of achievements</h3>
              </div></a></div>
          <div class="col-sm-4 item"> <a class="inner" href="news-inner.html">
              <div class="photo"><img src="{{ asset('assets/images/shape-2-3.jpg') }}" alt=""></div>
              <div class="textcontent"><span class="tag">2023-12-04</span>
                <h3 class="title">The company won the Distinguished Services Award in the Kingdom of Saudi Arabia</h3>
              </div></a></div>
        </div>
        <div class="text-center mt-5"><a class="bottom" href="news.html"><span>Read more</span></a></div>
      </div>
    </section><!--End minnews-->
    <section class="provide">
      <div class="item">
        <div class="photo"><img src="{{ asset('assets/images/p-1.jpg') }}" alt=""></div>
        <div class="content">
          <h2 class="title"> Do you need services or have questions?</h2><a class="bottom" href="contactus.html"><span> contact us</span></a>
        </div>
      </div>
      <div class="item">
        <div class="img"><img src="{{ asset('assets/images/p-2.jpg') }}" alt=""></div>
        <div class="innertext">
          <div>
            <h3 class="title">We are distinguished by local leadership in project implementation strategy</h3>
            <div class="itemvad"> <a class="bla-2 cd-single-point" href="https://youtu.be/W0eotRB4pBQ?si=gF9CnV8IRBbFGAVJ"> <i class="innerbc">
                  <svg width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.835352 0.998526C0.479041 1.20118 0.258911 1.57953 0.258911 1.98921V26.9983C0.258911 27.6277 0.769257 28.1379 1.3985 28.1379C2.02774 28.1379 2.53809 27.6277 2.53809 26.9983V3.99394L19.4103 14.0381L7.00319 22.0317C6.47423 22.3727 6.32152 23.0779 6.66245 23.6069C7.00356 24.136 7.70859 24.2887 8.23774 23.9476L22.191 14.9576C22.5227 14.7439 22.7202 14.3739 22.7132 13.9794C22.7061 13.5849 22.4957 13.2221 22.1567 13.0203L1.9814 1.00992C1.62889 0.800427 1.19166 0.795869 0.835352 0.998526Z" fill="#fff"></path>
                  </svg></i></a></div>
          </div>
        </div>
      </div>
    </section><!--End provide-->
    <section class="clients">
      <div class="container"><span class="tag text-center mb-2">Clients</span>
        <h2 class="title text-center">  Our latest clients</h2>
        <div class="row">
          <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/logo1.png') }}" alt=""></a></div>
          <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/logo2.png') }}" alt=""></a></div>
          <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/logo3.png') }}" alt=""></a></div>
          <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/logo4.png') }}" alt=""></a></div>
          <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/logo5.png') }}" alt=""></a></div>
          <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/logo6.png') }}" alt=""></a></div>
          <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/logo7.png') }}" alt=""></a></div>
          <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/logo8.png') }}" alt=""></a></div>
        </div>
      </div>
    </section><!-- End clients--><!--End minclients-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 item">
            <div class="logo"><img src="{{ asset('assets/images/logo.png') }}" alt="Takamul AlOula Facility Management " title="Takamul AlOula Facility Management " loading="lazy"></div>
            <p class="text"> Integrated facilities was established to manage, operate, and maintain government facilities, companies, and private and public establishments. It began in 1976 with more than 45 years of experience, not only providing cleaning and environmental care services</p>
          </div>
          <div class="col-sm-3 item">
            <h6 class="title">Quick links</h6>
            <nav class="navmenu"> <a href="index.html">home</a><a href="aboutus.html"> About Us</a><a href="services.html">Services  </a><a href="clients.html">  clients</a><a href="news.html">   news     </a><a href="privacy-policy.html">  Privacy Policy       </a><a href="contactus.html">contact us</a></nav>
          </div>
          <div class="col-md-3 item">
            <h6 class="title">Contact Info</h6>
            <div class="media">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.36087 3.47738C4.88771 1.26762 7.30751 0 9.99935 0C12.6912 0 15.111 1.26762 16.6378 3.47738C18.1572 5.67598 18.508 8.45945 17.5781 10.9186C17.3294 11.5902 16.9341 12.2427 16.4059 12.8541L10.5317 19.7538C10.3989 19.91 10.2042 20 9.99935 20C9.79447 20 9.59982 19.91 9.46697 19.7538L3.59447 12.8559C3.06392 12.241 2.66908 11.5893 2.42244 10.9231C1.49072 8.45945 1.84154 5.67598 3.36087 3.47738ZM3.73197 10.4333C3.92216 10.9473 4.23267 11.4555 4.65435 11.9443C4.65552 11.9454 4.65669 11.9466 4.65763 11.948L9.99935 18.2221L15.3443 11.9441C15.7658 11.4557 16.0763 10.9476 16.2684 10.4287C17.0374 8.39488 16.7455 6.09348 15.4875 4.27273C14.2255 2.44617 12.225 1.39859 9.99935 1.39859C7.77372 1.39859 5.77349 2.44613 4.51146 4.27273C3.25318 6.09348 2.96111 8.39488 3.73197 10.4333Z"></path>
                <path d="M10.0003 4.14917C12.1595 4.14917 13.9164 5.90581 13.9164 8.06526C13.9164 10.2247 12.1598 11.9814 10.0003 11.9814C7.84085 11.9814 6.08421 10.2247 6.08421 8.06526C6.08421 5.90604 7.84108 4.14917 10.0003 4.14917ZM10.0003 10.5827C11.3884 10.5827 12.5178 9.45335 12.5178 8.06522C12.5178 6.6771 11.3884 5.54772 10.0003 5.54772C8.61218 5.54772 7.4828 6.6771 7.4828 8.06522C7.4828 9.45335 8.61218 10.5827 10.0003 10.5827Z"></path>
              </svg>
              <div class="contant">
                <p> 8497 Al Urubah Rd, As Sulimaniyah, 3351, Riyadh 12245</p>
              </div>
            </div>
            <div class="media">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.6662 0C12.4822 0 12.3329 0.149336 12.3329 0.33332C12.3329 0.517304 12.4822 0.666639 12.6662 0.666639C16.3422 0.666639 19.3329 3.6573 19.3329 7.33331C19.3329 7.51729 19.4822 7.66663 19.6662 7.66663C19.8505 7.66663 19.9995 7.51729 19.9995 7.33331C19.9995 3.28968 16.7099 0 12.6662 0Z"></path>
                <path d="M12.6662 2C12.4822 2 12.3329 2.14934 12.3329 2.33332C12.3329 2.5173 12.4822 2.66664 12.6662 2.66664C15.2395 2.66664 17.3329 4.75996 17.3329 7.33331C17.3329 7.51729 17.4822 7.66663 17.6662 7.66663C17.8505 7.66663 17.9995 7.51729 17.9995 7.33331C17.9995 4.39269 15.6072 2 12.6662 2Z"></path>
                <path d="M12.6662 4.00006C12.4822 4.00006 12.3329 4.1494 12.3329 4.33338C12.3329 4.51736 12.4822 4.6667 12.6662 4.6667C14.1366 4.6667 15.3329 5.86303 15.3329 7.33337C15.3329 7.51736 15.4822 7.66669 15.6662 7.66669C15.8505 7.66669 15.9995 7.51736 15.9995 7.33337C15.9995 5.49541 14.5042 4.00006 12.6662 4.00006Z"></path>
                <path d="M18.0376 12.5084C17.1306 12.3891 16.2363 12.1664 15.3796 11.8474C14.55 11.5364 13.6073 11.737 12.9759 12.3601L11.9223 13.4114C9.71293 12.1087 7.86727 10.2667 6.56161 8.06174L7.61594 7.00975C8.23926 6.38077 8.44059 5.43909 8.12895 4.61144C7.8093 3.75613 7.58629 2.86378 7.46629 1.95543C7.30661 0.829412 6.33161 -0.00425806 5.19196 7.78705e-05H2.27564C2.20763 7.78705e-05 2.13962 0.00339818 2.07232 0.00941379C1.46662 0.0641012 0.918297 0.351093 0.528611 0.817108C0.138963 1.28343 -0.0457242 1.87343 0.00962724 2.48375C0.332634 5.51975 1.38263 8.47873 3.04431 11.0387C4.55298 13.4081 6.60532 15.4564 8.97695 16.9604C11.5323 18.6144 14.4833 19.6621 17.5176 19.9911C17.5863 19.9971 17.6553 20 17.7246 20C17.7266 20 17.7286 20 17.7309 20C18.9869 19.9947 20.0042 18.9707 19.9992 17.7184V14.812C20.0256 13.6597 19.1842 12.6697 18.0376 12.5084ZM19.3326 14.8C19.3326 14.8027 19.3326 14.8057 19.3326 14.8084V17.72C19.3359 18.6061 18.6163 19.33 17.7286 19.3337C17.6766 19.3317 17.6266 19.3317 17.5826 19.3277C14.658 19.0104 11.8073 17.9984 9.33629 16.399C7.0443 14.9454 5.06298 12.968 3.60497 10.678C1.99861 8.20342 0.984625 5.34542 0.672946 2.41843C0.634275 1.99109 0.764626 1.57445 1.04029 1.24476C1.31595 0.915076 1.70361 0.712108 2.13228 0.673436C2.17994 0.6691 2.22763 0.666756 2.2756 0.666756H5.19493C5.20028 0.666756 5.20559 0.666756 5.21095 0.666756C6.00962 0.666756 6.69395 1.25843 6.80559 2.04574C6.93192 3.00074 7.16692 3.94273 7.50457 4.84573C7.72493 5.43104 7.58258 6.09639 7.14356 6.5394L5.90891 7.77139C5.80223 7.87772 5.78024 8.04174 5.85458 8.17241C7.26723 10.6524 9.32758 12.7084 11.8119 14.1181C11.9426 14.1924 12.1059 14.1697 12.2119 14.0641L13.4452 12.8334C13.8909 12.3938 14.5585 12.2521 15.1459 12.4721C16.0499 12.8088 16.9935 13.0438 17.9472 13.1691C18.7572 13.2831 19.3529 13.9841 19.3326 14.8Z"></path>
                <path d="M5.00004 1.33331H2.27571C2.2477 1.33331 2.22004 1.33464 2.19239 1.3373C1.85274 1.36796 1.64504 1.56062 1.55172 1.6723C1.47672 1.76195 1.3054 2.00663 1.3354 2.34265C1.46141 3.52499 1.68938 4.6753 2.01372 5.76198C2.05704 5.90631 2.18938 5.99998 2.33305 5.99998C2.36473 5.99998 2.39672 5.99565 2.42871 5.986C2.60504 5.93334 2.70539 5.74768 2.6527 5.57135C2.34004 4.52401 2.12004 3.41401 1.99903 2.27769C1.99137 2.19304 2.04637 2.12003 2.06336 2.09937C2.09071 2.06671 2.15168 2.01038 2.27571 2.00003H4.99937C4.99973 2.00003 4.99972 2.00003 4.99972 2.00003C5.18371 2.00003 5.33304 1.85105 5.33304 1.66702C5.33336 1.48296 5.18402 1.33331 5.00004 1.33331Z"></path>
                <path d="M18.333 14.6667C18.149 14.6667 17.9997 14.816 17.9997 15L17.9994 17.7196C17.9997 17.7946 17.971 17.8653 17.9187 17.918C17.8663 17.9706 17.797 17.9996 17.731 18L17.7004 17.9993C16.5614 17.8756 15.4607 17.6563 14.429 17.3473C14.2534 17.2943 14.0671 17.3946 14.014 17.571C13.961 17.7473 14.0614 17.933 14.2377 17.986C15.3081 18.3066 16.449 18.534 17.6344 18.6627C17.6617 18.6653 17.7174 18.6666 17.7254 18.6666C17.9777 18.6656 18.2144 18.5666 18.3921 18.3877C18.5697 18.2083 18.6671 17.9703 18.6661 17.7183L18.6664 15C18.6664 14.816 18.517 14.6667 18.333 14.6667Z"></path>
              </svg>
              <div class="contant"><a href="#">+966 92001629</a></div>
            </div>
            <div class="media">
              <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.3333 3.33331H1.66667C0.746667 3.3344 0.00108333 4.07998 0 4.99998V15C0.00108333 15.92 0.746667 16.6656 1.66667 16.6666H18.3333C19.2533 16.6656 19.9989 15.92 20 15V4.99998C19.9989 4.07998 19.2533 3.3344 18.3333 3.33331ZM19.3333 15C19.3333 15.5523 18.8856 16 18.3333 16H1.66667C1.11437 16 0.666667 15.5523 0.666667 15V4.99998C0.666667 4.44769 1.11437 3.99998 1.66667 3.99998H18.3333C18.8856 3.99998 19.3333 4.44769 19.3333 4.99998V15Z"></path>
                <path d="M18.6191 4.82834C18.5242 4.67059 18.3195 4.61955 18.1617 4.71434L10.8574 9.09667C10.33 9.41434 9.67016 9.41434 9.14274 9.09667L1.83841 4.71434C1.67891 4.62238 1.47508 4.67713 1.38312 4.83659C1.29349 4.992 1.34295 5.1905 1.49508 5.28567L8.80008 9.66834C9.53849 10.1123 10.4617 10.1123 11.2001 9.66834L18.5051 5.28567C18.6628 5.19084 18.7139 4.98613 18.6191 4.82834Z"></path>
                <path d="M1.66671 6C1.48262 6 1.33337 6.14925 1.33337 6.33333V15C1.33337 15.1841 1.48262 15.3333 1.66671 15.3333C1.85079 15.3333 2.00004 15.1841 2.00004 15V6.33333C2.00004 6.14925 1.85079 6 1.66671 6Z"></path>
                <path d="M18.3333 6C18.1492 6 18 6.14925 18 6.33333V15C18 15.1841 18.1492 15.3333 18.3333 15.3333C18.5174 15.3333 18.6667 15.1841 18.6667 15V6.33333C18.6667 6.14925 18.5174 6 18.3333 6Z"></path>
              </svg>
              <div class="contant"><a href="mailto:info@ifm.com.sa"> info@ifm.com.sa</a></div>
            </div>
            <nav class="social"><a class="icon-facebook" href="#" target="_blank" title="Facebook">
                <svg id="Bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                  <path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"></path>
                </svg></a><a class="icon-twitter" href="#" target="_blank" title="Twitter">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
                  <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                    <path d="M 0.219 2.882 l 34.748 46.461 L 0 87.118 h 7.87 l 30.614 -33.073 l 24.735 33.073 H 90 L 53.297 38.043 L 85.844 2.882 h -7.87 L 49.781 33.341 L 27.001 2.882 H 0.219 z M 11.793 8.679 h 12.303 L 78.425 81.32 H 66.122 L 11.793 8.679 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #000; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "></path>
                  </g>
                </svg></a><a class="icon-instagram" href="#" target="_blank" title="Instagram">
                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.4805 0H5.51913C2.47588 0 0 2.476 0 5.51924V14.4806C0 17.524 2.47588 19.9999 5.51913 19.9999H14.4805C17.524 19.9999 19.9999 17.5239 19.9999 14.4806V5.51924C20 2.476 17.524 0 14.4805 0ZM18.2255 14.4806C18.2255 16.5455 16.5455 18.2254 14.4806 18.2254H5.51913C3.45433 18.2255 1.77449 16.5455 1.77449 14.4806V5.51924C1.77449 3.45445 3.45433 1.77449 5.51913 1.77449H14.4805C16.5454 1.77449 18.2254 3.45445 18.2254 5.51924V14.4806H18.2255Z"></path>
                  <path d="M10.0001 4.84668C7.15848 4.84668 4.84668 7.15848 4.84668 10.0001C4.84668 12.8417 7.15848 15.1534 10.0001 15.1534C12.8418 15.1534 15.1536 12.8417 15.1536 10.0001C15.1536 7.15848 12.8418 4.84668 10.0001 4.84668ZM10.0001 13.3788C8.13705 13.3788 6.62117 11.8631 6.62117 10C6.62117 8.13681 8.13693 6.62105 10.0001 6.62105C11.8634 6.62105 13.3791 8.13681 13.3791 10C13.3791 11.8631 11.8632 13.3788 10.0001 13.3788Z"></path>
                  <path d="M15.3696 3.3418C15.0278 3.3418 14.6919 3.48021 14.4505 3.72272C14.2078 3.96405 14.0684 4.30002 14.0684 4.64309C14.0684 4.98509 14.208 5.32094 14.4505 5.56345C14.6918 5.80478 15.0278 5.94438 15.3696 5.94438C15.7127 5.94438 16.0475 5.80478 16.29 5.56345C16.5325 5.32094 16.6709 4.98497 16.6709 4.64309C16.6709 4.30002 16.5325 3.96405 16.29 3.72272C16.0487 3.48021 15.7127 3.3418 15.3696 3.3418Z"></path>
                </svg></a><a class="icon-youtube" href="#" target="_blank" title="youtube">
                <svg id="Layer_1" enable-background="new 0 0 511.982 511.982" height="512" viewBox="0 0 511.982 511.982" width="512" xmlns="http://www.w3.org/2000/svg">
                  <path d="m341.885 238.36-130-74c-6.188-3.524-13.787-3.488-19.946.091-6.158 3.581-9.947 10.167-9.947 17.29v148c0 7.123 3.789 13.709 9.947 17.29 6.159 3.58 13.757 3.616 19.946.091l130-74c13.396-7.478 13.392-27.287 0-34.762zm-119.894 56.984v-79.205l69.571 39.603zm282.306-145.855c-6.503-45.918-43.306-81.146-89.5-85.668-36.489-3.572-93.661-7.83-158.806-7.83s-122.316 4.258-158.806 7.83c-46.194 4.521-82.997 39.75-89.5 85.667-10.247 72.73-10.247 140.276 0 213.005 6.503 45.918 43.306 81.146 89.5 85.668 36.489 3.572 93.661 7.83 158.806 7.83s122.316-4.258 158.806-7.83c46.194-4.521 82.997-39.75 89.5-85.667 10.247-72.73 10.247-140.276 0-213.005zm-39.606 207.397c-3.906 27.584-26.025 48.747-53.791 51.465-35.604 3.486-91.379 7.641-154.909 7.641s-119.306-4.154-154.909-7.641c-27.766-2.718-49.885-23.881-53.791-51.466-4.844-34.203-7.3-68.148-7.3-100.894s2.456-66.69 7.3-100.895c3.906-27.584 26.025-48.747 53.791-51.465 35.604-3.486 91.379-7.641 154.909-7.641s119.306 4.154 154.909 7.641c27.766 2.718 49.885 23.881 53.791 51.466 9.722 69.018 9.722 132.771 0 201.789z"></path>
                </svg></a><a class="icon-linkedin" href="#" target="_blank" title="linkedin">
                <svg viewBox="-21 -35 682.66669 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
                  <path d="m77.613281-.667969c-46.929687 0-77.613281 30.816407-77.613281 71.320313 0 39.609375 29.769531 71.304687 75.8125 71.304687h.890625c47.847656 0 77.625-31.695312 77.625-71.304687-.894531-40.503906-29.777344-71.320313-76.714844-71.320313zm0 0"></path>
                  <path d="m8.109375 198.3125h137.195313v412.757812h-137.195313zm0 0"></path>
                  <path d="m482.054688 188.625c-74.011719 0-123.640626 69.546875-123.640626 69.546875v-59.859375h-137.199218v412.757812h137.191406v-230.5c0-12.339843.894531-24.660156 4.519531-33.484374 9.917969-24.640626 32.488281-50.167969 70.390625-50.167969 49.644532 0 69.5 37.851562 69.5 93.339843v220.8125h137.183594v-236.667968c0-126.78125-67.6875-185.777344-157.945312-185.777344zm0 0"></path>
                </svg></a><a class="icon-whatsapp" href="#" target="_blank" title="whatsapp">
                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6319 3.34007C14.8778 1.58386 12.5449 0.616264 10.0596 0.615234C4.93836 0.615234 0.770424 4.78306 0.768364 9.90566C0.767677 11.5432 1.19546 13.1417 2.00856 14.5507L0.69043 19.3652L5.61585 18.0732C6.97301 18.8135 8.50091 19.2036 10.0558 19.2041H10.0597C15.1804 19.2041 19.3488 15.0359 19.3507 9.9131C19.3517 7.43042 18.3862 5.09617 16.6319 3.34007ZM10.0596 17.635H10.0564C8.67074 17.6344 7.31175 17.262 6.12592 16.5586L5.84405 16.3911L2.92123 17.1579L3.70137 14.3082L3.51769 14.016C2.74464 12.7865 2.33643 11.3654 2.33712 9.90623C2.33872 5.64846 5.80308 2.18445 10.0627 2.18445C12.1254 2.18513 14.0643 2.98943 15.5223 4.44912C16.9803 5.90881 17.7828 7.84904 17.7821 9.91253C17.7802 14.1706 14.3161 17.635 10.0596 17.635ZM14.2955 11.8513C14.0634 11.735 12.922 11.1736 12.7091 11.096C12.4965 11.0185 12.3415 10.9799 12.1869 11.2122C12.0321 11.4445 11.5873 11.9675 11.4518 12.1224C11.3163 12.2773 11.181 12.2968 10.9488 12.1805C10.7166 12.0644 9.96861 11.8191 9.08181 11.0282C8.39173 10.4126 7.92584 9.6524 7.79034 9.42009C7.65508 9.18754 7.7892 9.07402 7.8922 8.9463C8.14351 8.63422 8.39516 8.30704 8.47253 8.1522C8.55 7.99724 8.51121 7.86163 8.45307 7.74547C8.39516 7.62932 7.93088 6.48662 7.73747 6.02165C7.54887 5.56915 7.35764 5.63026 7.21505 5.62317C7.07978 5.61642 6.92494 5.61504 6.7701 5.61504C6.61538 5.61504 6.36384 5.67306 6.15098 5.90561C5.93823 6.13804 5.33856 6.6996 5.33856 7.84229C5.33856 8.98498 6.17043 10.0889 6.28648 10.2438C6.40252 10.3988 7.92355 12.7437 10.2523 13.7492C10.8062 13.9886 11.2386 14.1313 11.5758 14.2383C12.132 14.415 12.6379 14.39 13.038 14.3303C13.4841 14.2636 14.4114 13.7686 14.6051 13.2264C14.7985 12.6841 14.7985 12.2193 14.7403 12.1224C14.6824 12.0256 14.5276 11.9675 14.2955 11.8513Z"></path>
                </svg></a></nav>
          </div>
          <!--div.col-sm-6.item
          h6.title Follow newsletter
          form(action="#" method="post" class="newsletter")
           input(type="text" class="form-control" placeholder="Your Email Address" value="")
           button(class="bottom" type="submit") <span>Subscribe</span>
          -->
        </div>
        <div class="copyright">
          <p>All Rights Reserved © 2024.  Takamul AlOula Facility Management </p>
        </div>
      </div><a class="bottom scrollToTop" href="#"> <span>TOP</span></a>
    </footer><!--End Footer-->
  </body>
</html>
