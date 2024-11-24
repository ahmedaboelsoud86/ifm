@extends('front.pages_template')
@section('title')
    Messages
@endsection
@section('content')
<section class="map-back"><img src="{{ asset('assets/images/slider/img1.jpg') }}" alt="">
    <div class="container">
      <h1 class="title">  Front of house</h1>
      <ul class="maplink">
        <li><a href="index.html">home</a></li>
        <li><a href="services.html">Services & solutions </a></li>
        <li>  Front of house</li>
      </ul>
    </div>
  </section>
  <section class="minservices">
    <div class="container">
      <h2 class="title text-center">Front of house</h2>
      <p class="text-center mt-3">Whether you’re considering outsourcing your services for the first time, or you’ve been doing<br> it for years, our breadth and depth of services and expertise mean that we’re here to help. <br>We can support with increasing efficiencies, reduce costs, driving sustainability<br> and improving performance for your organisation.</p>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item"> <a class="nav-link active show" id="item-1-tab" data-toggle="tab" href="#item-1" role="tab" aria-controls="item-1" aria-selected="true">Case studies</a></li>
        <li class="nav-item"><a class="nav-link" id="item-2-tab" data-toggle="tab" href="#item-2" role="tab" aria-controls="item-2" aria-selected="false">   Video </a></li>
        <li class="nav-item"><a class="nav-link" id="item-3-tab" data-toggle="tab" href="#item-3" role="tab" aria-controls="item-3" aria-selected="false">   Get in touch</a></li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active " id="item-1" role="tabpanel" aria-labelledby="item-1-tab">
          <div class="awards towaward">
            <h3 class="title text-center mt-5">A trusted presence for organisations</h3>
            <div class="row">
              <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/a-1.png') }}" alt=""></a></div>
              <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/a-2.png') }}" alt=""></a></div>
              <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/a-3.png') }}" alt=""></a></div>
              <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/a-4.png') }}" alt=""></a></div>
              <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/a-5.png') }}" alt=""></a></div>
              <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/a-6.png ') }}" alt=""></a></div>
              <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/a-7.png') }}" alt=""></a></div>
            </div>
          </div>
          <div class="news townews">
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
                    <h3 class="title">The Contracting Group honored 4 security employees working in Tatweer</h3>
                  </div></a></div>
              <div class="col-sm-4 item"> <a class="inner" href="news-inner.html">
                  <div class="photo"><img src="{{ asset('assets/images/n-1.jpg') }}" alt=""></div>
                  <div class="textcontent"><span class="tag">2023-12-04</span>
                    <h3 class="title">The Contracting Group honored 4 security employees working in Tatweer</h3>
                  </div></a></div>
            </div>
          </div>
          <div class="faqs p-0">
            <h2 class="title text-center">Awards & accreditations</h2>
            <p class="text-center mt-3"> Our work in security has been recognised across industries.</p>
            <div class="accordion mt-5" id="accordionExample">
              <div class="option">
                <div class="click-title" id="headingOne"><a class="d-block position-relative collapsible-link" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Awards</a></div>
                <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <p class="text">   Integrated facilities was established to manage, operate, and maintain government facilities, companies, and private and public establishments. It began in 1976 with more than 45 years of experience, not only providing cleaning and environmental care services, but also including all utility services to achieve the partners’ goals through a trained team under the management and supervision of experts applying proven methodologies and the latest innovative technologies. To provide the best comprehensive solutions and services</p>
                </div>
              </div>
              <div class="option">
                <div class="click-title" id="headingTwo"><a class="d-block position-relative collapsible-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">  Accreditations </a></div>
                <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <p class="text">   Integrated facilities was established to manage, operate, and maintain government facilities, companies, and private and public establishments. It began in 1976 with more than 45 years of experience, not only providing cleaning and environmental care services, but also including all utility services to achieve the partners’ goals through a trained team under the management and supervision of experts applying proven methodologies and the latest innovative technologies. To provide the best comprehensive solutions and services</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="item-2" role="tabpanel" aria-labelledby="item-2-tab">
          <h2 class="title mt-5 text-center">Intelligence. Technology. People.</h2>
          <div class="v-item vpop" data-type="youtube" data-id="6xcG6ttMDVY" data-autoplay="true">
            <div class="inner">
              <div class="photo"><img src="{{ asset('assets/images/slider/img1.jpg') }}" alt="" title=""><i class="icon-play">
                  <svg width="15" height="21" viewBox="0 0 23 29" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.835352 0.998526C0.479041 1.20118 0.258911 1.57953 0.258911 1.98921V26.9983C0.258911 27.6277 0.769257 28.1379 1.3985 28.1379C2.02774 28.1379 2.53809 27.6277 2.53809 26.9983V3.99394L19.4103 14.0381L7.00319 22.0317C6.47423 22.3727 6.32152 23.0779 6.66245 23.6069C7.00356 24.136 7.70859 24.2887 8.23774 23.9476L22.191 14.9576C22.5227 14.7439 22.7202 14.3739 22.7132 13.9794C22.7061 13.5849 22.4957 13.2221 22.1567 13.0203L1.9814 1.00992C1.62889 0.800427 1.19166 0.795869 0.835352 0.998526Z" fill="#fff"></path>
                  </svg></i></div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="item-3" role="tabpanel" aria-labelledby="item-3-tab">
          <div class="teams bgwight">
            <h2 class="title text-center">Meet our experienced <br>team people</h2>
            <div class="row">
              <div class="col-sm-3 item">
                <div class="inner">
                  <div class="photo"><img src="{{ asset('assets/images/dec11.jpg') }}" alt="">
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
                        </svg></a><a class="icon-linkedin" href="#" target="_blank" title="linkedin">
                        <svg viewBox="-21 -35 682.66669 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
                          <path d="m77.613281-.667969c-46.929687 0-77.613281 30.816407-77.613281 71.320313 0 39.609375 29.769531 71.304687 75.8125 71.304687h.890625c47.847656 0 77.625-31.695312 77.625-71.304687-.894531-40.503906-29.777344-71.320313-76.714844-71.320313zm0 0"></path>
                          <path d="m8.109375 198.3125h137.195313v412.757812h-137.195313zm0 0"></path>
                          <path d="m482.054688 188.625c-74.011719 0-123.640626 69.546875-123.640626 69.546875v-59.859375h-137.199218v412.757812h137.191406v-230.5c0-12.339843.894531-24.660156 4.519531-33.484374 9.917969-24.640626 32.488281-50.167969 70.390625-50.167969 49.644532 0 69.5 37.851562 69.5 93.339843v220.8125h137.183594v-236.667968c0-126.78125-67.6875-185.777344-157.945312-185.777344zm0 0"></path>
                        </svg></a></nav>
                  </div>
                  <h3 class="title">mohamed asmail</h3>
                  <p>front end developer</p>
                </div>
              </div>
              <div class="col-sm-3 item">
                <div class="inner">
                  <div class="photo"><img src="{{ asset('assets/images/dec11.jpg') }}" alt="">
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
                        </svg></a><a class="icon-linkedin" href="#" target="_blank" title="linkedin">
                        <svg viewBox="-21 -35 682.66669 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
                          <path d="m77.613281-.667969c-46.929687 0-77.613281 30.816407-77.613281 71.320313 0 39.609375 29.769531 71.304687 75.8125 71.304687h.890625c47.847656 0 77.625-31.695312 77.625-71.304687-.894531-40.503906-29.777344-71.320313-76.714844-71.320313zm0 0"></path>
                          <path d="m8.109375 198.3125h137.195313v412.757812h-137.195313zm0 0"></path>
                          <path d="m482.054688 188.625c-74.011719 0-123.640626 69.546875-123.640626 69.546875v-59.859375h-137.199218v412.757812h137.191406v-230.5c0-12.339843.894531-24.660156 4.519531-33.484374 9.917969-24.640626 32.488281-50.167969 70.390625-50.167969 49.644532 0 69.5 37.851562 69.5 93.339843v220.8125h137.183594v-236.667968c0-126.78125-67.6875-185.777344-157.945312-185.777344zm0 0"></path>
                        </svg></a></nav>
                  </div>
                  <h3 class="title">mohamed asmail</h3>
                  <p>front end developer </p>
                </div>
              </div>
              <div class="col-sm-3 item">
                <div class="inner">
                  <div class="photo"><img src="{{ asset('assets/images/dec11.jpg') }}" alt="">
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
                        </svg></a><a class="icon-linkedin" href="#" target="_blank" title="linkedin">
                        <svg viewBox="-21 -35 682.66669 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
                          <path d="m77.613281-.667969c-46.929687 0-77.613281 30.816407-77.613281 71.320313 0 39.609375 29.769531 71.304687 75.8125 71.304687h.890625c47.847656 0 77.625-31.695312 77.625-71.304687-.894531-40.503906-29.777344-71.320313-76.714844-71.320313zm0 0"></path>
                          <path d="m8.109375 198.3125h137.195313v412.757812h-137.195313zm0 0"></path>
                          <path d="m482.054688 188.625c-74.011719 0-123.640626 69.546875-123.640626 69.546875v-59.859375h-137.199218v412.757812h137.191406v-230.5c0-12.339843.894531-24.660156 4.519531-33.484374 9.917969-24.640626 32.488281-50.167969 70.390625-50.167969 49.644532 0 69.5 37.851562 69.5 93.339843v220.8125h137.183594v-236.667968c0-126.78125-67.6875-185.777344-157.945312-185.777344zm0 0"></path>
                        </svg></a></nav>
                  </div>
                  <h3 class="title">mohamed asmail</h3>
                  <p>front end developer</p>
                </div>
              </div>
              <div class="col-sm-3 item">
                <div class="inner">
                  <div class="photo"><img src="{{ asset('assets/images/dec11.jpg') }}" alt="">
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
                        </svg></a><a class="icon-linkedin" href="#" target="_blank" title="linkedin">
                        <svg viewBox="-21 -35 682.66669 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
                          <path d="m77.613281-.667969c-46.929687 0-77.613281 30.816407-77.613281 71.320313 0 39.609375 29.769531 71.304687 75.8125 71.304687h.890625c47.847656 0 77.625-31.695312 77.625-71.304687-.894531-40.503906-29.777344-71.320313-76.714844-71.320313zm0 0"></path>
                          <path d="m8.109375 198.3125h137.195313v412.757812h-137.195313zm0 0"></path>
                          <path d="m482.054688 188.625c-74.011719 0-123.640626 69.546875-123.640626 69.546875v-59.859375h-137.199218v412.757812h137.191406v-230.5c0-12.339843.894531-24.660156 4.519531-33.484374 9.917969-24.640626 32.488281-50.167969 70.390625-50.167969 49.644532 0 69.5 37.851562 69.5 93.339843v220.8125h137.183594v-236.667968c0-126.78125-67.6875-185.777344-157.945312-185.777344zm0 0"></path>
                        </svg></a></nav>
                  </div>
                  <h3 class="title">mohamed asmail</h3>
                  <p>front end developer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="contactus helpform">
            <h5 class="title text-center">Get in touch</h5>
            <p class="text-center"> Protect your people, assets and estates with security personnel you can trust. <br>Fill out the form and we’ll be in touch.</p>
            <div class="item margcenter">
              <form action="#" method="">
                <div class="row">
                  <div class="col-sm-4 field">
                    <select class="form-control">
                      <option value="">Select Title</option>
                      <option value="">Mr</option>
                    </select>
                  </div>
                  <div class="col-sm-4 field">
                    <input class="form-control" type="text" name="" placeholder="First name" onfocus="this.placeholder=''" onblur="this.placeholder='First name'">
                  </div>
                  <div class="col-sm-4 field">
                    <input class="form-control" type="text" name="" placeholder="Last name" onfocus="this.placeholder=''" onblur="this.placeholder='Last name'">
                  </div>
                  <div class="col-sm-6 field">
                    <input class="form-control" type="text" name="" placeholder="Email" onfocus="this.placeholder=''" onblur="this.placeholder='Email'">
                  </div>
                  <div class="col-sm-6 field">
                    <input class="form-control" type="text" name="" placeholder="Phone Number" onfocus="this.placeholder=''" onblur="this.placeholder='Phone Number'">
                  </div>
                  <div class="col-sm-6 field">
                    <input class="form-control" type="text" name="" placeholder="Company name" onfocus="this.placeholder=''" onblur="this.placeholder='Company name'">
                  </div>
                  <div class="col-sm-6 field">
                    <select class="form-control">
                      <option value="">Company Size</option>
                      <option value="">1-500       </option>
                    </select>
                  </div>
                  <div class="col-sm-12 field">
                    <select class="form-control" id="type">
                      <option value="l_letter">Please tell us what you’re enquiring about?</option>
                      <option value="enquiry">I have a general enquiry             </option>
                      <option value="takamul">I am interested in receiving services from Takamul AlOula  </option>
                    </select>
                  </div>
                  <div id="row_dim">
                    <div class="col-sm-12 field">
                      <textarea class="form-control" type="text" name="" placeholder="Please provide any other relevant information" onfocus="this.placeholder=''" onblur="this.placeholder='Please provide any other relevant information'"></textarea>
                    </div>
                  </div>
                  <div id="row_dim2">
                    <div class="col-sm-12 field">
                      <select class="form-control">
                        <option value="">Select Sector</option>
                        <option value="">Distribution & Logistics            </option>
                        <option value="">Financial Services</option>
                      </select>
                    </div>
                    <div class="col-sm-12 field">
                      <select class="form-control">
                        <option value="">Select Service</option>
                        <option value="">Care & Custody          </option>
                        <option value="">Cleaning Services</option>
                      </select>
                    </div>
                    <div class="col-sm-12 field">
                      <textarea class="form-control" type="text" name="" placeholder="Please provide any other relevant information" onfocus="this.placeholder=''" onblur="this.placeholder='Please provide any other relevant information'"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12 field">
                    <label class="che-box">
                      <input type="checkbox" name="colorCheckbox" value="box-2"><span class="label-text"> I agree to receive marketing communications from Takamul AlOula Facility Management . I understand that I can unsubscribe at any time. </span>
                    </label>
                    <label class="che-box mt-4">
                      <input type="checkbox" name="colorCheckbox" value="box-2"><span class="label-text"> I have read and agree to Takamul   <a href="privacy-policy.html">  Privacy Policy</a> and for Takamul AlOula Facility Management to process my data in accordance with their</span>
                    </label>
                  </div>
                  <div class="col-sm-12 field">
                    <button class="bottom" type="submit">  <span>Submit</span> </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="video-popup-overlay">
    <div id="video-popup-close">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.40039 2.40039L21.6004 21.6004" stroke="#000" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
        <path d="M21.6016 2.40039L2.40156 21.6004" stroke="#000" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
      </svg>
    </div>
    <div id="video-popup-container">
      <div class="w-100">
        <div id="video-popup-iframe-container">
          <iframe id="video-popup-iframe" src="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/js/video.js') }}"></script>
@endsection
