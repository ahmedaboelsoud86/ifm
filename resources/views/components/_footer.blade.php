<footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 item">
            <div class="logo"><img src="{{ asset('assets/images/logo.png') }}" alt="Takamul AlOula Facility Management " title="Takamul AlOula Facility Management " loading="lazy"></div>
            <p class="text">
                {{ Str::words(aboutus()?->description , 70, ' ...')  }}
            </p>
          </div>
          <div class="col-sm-3 item">
            <h6 class="title">@lang('site.quick_links')</h6>
            <nav class="navmenu"> <a href="{{ route('home') }}">@lang('site.home')</a><a href="{{ route('aboutus') }}">@lang('site.aboutus')</a><a href="{{ route('services') }}">@lang('site.services_solutions')  </a><a href="{{ route('clients') }}">@lang('site.clients') </a><a href="{{ route('news') }}">  @lang('site.news')      </a><a href="{{ route('privacy_policy') }}"> @lang('site.privacy_policy')</a><a href="{{ route('contact_us')}}">@lang('site.contact_us')</a></nav>
          </div>
          <div class="col-md-3 item">
            <h6 class="title">@lang('site.contact_info')</h6>
            <div class="media">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.36087 3.47738C4.88771 1.26762 7.30751 0 9.99935 0C12.6912 0 15.111 1.26762 16.6378 3.47738C18.1572 5.67598 18.508 8.45945 17.5781 10.9186C17.3294 11.5902 16.9341 12.2427 16.4059 12.8541L10.5317 19.7538C10.3989 19.91 10.2042 20 9.99935 20C9.79447 20 9.59982 19.91 9.46697 19.7538L3.59447 12.8559C3.06392 12.241 2.66908 11.5893 2.42244 10.9231C1.49072 8.45945 1.84154 5.67598 3.36087 3.47738ZM3.73197 10.4333C3.92216 10.9473 4.23267 11.4555 4.65435 11.9443C4.65552 11.9454 4.65669 11.9466 4.65763 11.948L9.99935 18.2221L15.3443 11.9441C15.7658 11.4557 16.0763 10.9476 16.2684 10.4287C17.0374 8.39488 16.7455 6.09348 15.4875 4.27273C14.2255 2.44617 12.225 1.39859 9.99935 1.39859C7.77372 1.39859 5.77349 2.44613 4.51146 4.27273C3.25318 6.09348 2.96111 8.39488 3.73197 10.4333Z"></path>
                <path d="M10.0003 4.14917C12.1595 4.14917 13.9164 5.90581 13.9164 8.06526C13.9164 10.2247 12.1598 11.9814 10.0003 11.9814C7.84085 11.9814 6.08421 10.2247 6.08421 8.06526C6.08421 5.90604 7.84108 4.14917 10.0003 4.14917ZM10.0003 10.5827C11.3884 10.5827 12.5178 9.45335 12.5178 8.06522C12.5178 6.6771 11.3884 5.54772 10.0003 5.54772C8.61218 5.54772 7.4828 6.6771 7.4828 8.06522C7.4828 9.45335 8.61218 10.5827 10.0003 10.5827Z"></path>
              </svg>
              <div class="contant">
                <p>
                 @if(isset(contactinfo()->adress))
                  {{ json_decode(contactinfo()->adress ,true)['adress_'.app()->getLocale()] }}
                 @endif
                </p>
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
              <div class="contant"><a href="#"> {{ contactinfo()?->phone }}</a></div>
            </div>
            <div class="media">
              <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.3333 3.33331H1.66667C0.746667 3.3344 0.00108333 4.07998 0 4.99998V15C0.00108333 15.92 0.746667 16.6656 1.66667 16.6666H18.3333C19.2533 16.6656 19.9989 15.92 20 15V4.99998C19.9989 4.07998 19.2533 3.3344 18.3333 3.33331ZM19.3333 15C19.3333 15.5523 18.8856 16 18.3333 16H1.66667C1.11437 16 0.666667 15.5523 0.666667 15V4.99998C0.666667 4.44769 1.11437 3.99998 1.66667 3.99998H18.3333C18.8856 3.99998 19.3333 4.44769 19.3333 4.99998V15Z"></path>
                <path d="M18.6191 4.82834C18.5242 4.67059 18.3195 4.61955 18.1617 4.71434L10.8574 9.09667C10.33 9.41434 9.67016 9.41434 9.14274 9.09667L1.83841 4.71434C1.67891 4.62238 1.47508 4.67713 1.38312 4.83659C1.29349 4.992 1.34295 5.1905 1.49508 5.28567L8.80008 9.66834C9.53849 10.1123 10.4617 10.1123 11.2001 9.66834L18.5051 5.28567C18.6628 5.19084 18.7139 4.98613 18.6191 4.82834Z"></path>
                <path d="M1.66671 6C1.48262 6 1.33337 6.14925 1.33337 6.33333V15C1.33337 15.1841 1.48262 15.3333 1.66671 15.3333C1.85079 15.3333 2.00004 15.1841 2.00004 15V6.33333C2.00004 6.14925 1.85079 6 1.66671 6Z"></path>
                <path d="M18.3333 6C18.1492 6 18 6.14925 18 6.33333V15C18 15.1841 18.1492 15.3333 18.3333 15.3333C18.5174 15.3333 18.6667 15.1841 18.6667 15V6.33333C18.6667 6.14925 18.5174 6 18.3333 6Z"></path>
              </svg>
              <div class="contant"><a href="{{ contactinfo()?->email }}"> {{ contactinfo()?->email }}</a></div>
            </div>
            <nav class="social"><a class="icon-facebook" href="{{ contactinfo()?->facebok }}" target="_blank" title="Facebook">
                <svg id="Bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                  <path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"></path>
                </svg></a><a class="icon-twitter" href="{{ contactinfo()?->twitter }}" target="_blank" title="Twitter">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
                  <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                    <path d="M 0.219 2.882 l 34.748 46.461 L 0 87.118 h 7.87 l 30.614 -33.073 l 24.735 33.073 H 90 L 53.297 38.043 L 85.844 2.882 h -7.87 L 49.781 33.341 L 27.001 2.882 H 0.219 z M 11.793 8.679 h 12.303 L 78.425 81.32 H 66.122 L 11.793 8.679 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #000; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "></path>
                  </g>
                </svg></a><a class="icon-instagram" href="{{ contactinfo()?->instagram }}" target="_blank" title="Instagram">
                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.4805 0H5.51913C2.47588 0 0 2.476 0 5.51924V14.4806C0 17.524 2.47588 19.9999 5.51913 19.9999H14.4805C17.524 19.9999 19.9999 17.5239 19.9999 14.4806V5.51924C20 2.476 17.524 0 14.4805 0ZM18.2255 14.4806C18.2255 16.5455 16.5455 18.2254 14.4806 18.2254H5.51913C3.45433 18.2255 1.77449 16.5455 1.77449 14.4806V5.51924C1.77449 3.45445 3.45433 1.77449 5.51913 1.77449H14.4805C16.5454 1.77449 18.2254 3.45445 18.2254 5.51924V14.4806H18.2255Z"></path>
                  <path d="M10.0001 4.84668C7.15848 4.84668 4.84668 7.15848 4.84668 10.0001C4.84668 12.8417 7.15848 15.1534 10.0001 15.1534C12.8418 15.1534 15.1536 12.8417 15.1536 10.0001C15.1536 7.15848 12.8418 4.84668 10.0001 4.84668ZM10.0001 13.3788C8.13705 13.3788 6.62117 11.8631 6.62117 10C6.62117 8.13681 8.13693 6.62105 10.0001 6.62105C11.8634 6.62105 13.3791 8.13681 13.3791 10C13.3791 11.8631 11.8632 13.3788 10.0001 13.3788Z"></path>
                  <path d="M15.3696 3.3418C15.0278 3.3418 14.6919 3.48021 14.4505 3.72272C14.2078 3.96405 14.0684 4.30002 14.0684 4.64309C14.0684 4.98509 14.208 5.32094 14.4505 5.56345C14.6918 5.80478 15.0278 5.94438 15.3696 5.94438C15.7127 5.94438 16.0475 5.80478 16.29 5.56345C16.5325 5.32094 16.6709 4.98497 16.6709 4.64309C16.6709 4.30002 16.5325 3.96405 16.29 3.72272C16.0487 3.48021 15.7127 3.3418 15.3696 3.3418Z"></path>
                </svg></a><a class="icon-youtube" href="{{ contactinfo()?->youtube }}" target="_blank" title="youtube">
                <svg id="Layer_1" enable-background="new 0 0 511.982 511.982" height="512" viewBox="0 0 511.982 511.982" width="512" xmlns="http://www.w3.org/2000/svg">
                  <path d="m341.885 238.36-130-74c-6.188-3.524-13.787-3.488-19.946.091-6.158 3.581-9.947 10.167-9.947 17.29v148c0 7.123 3.789 13.709 9.947 17.29 6.159 3.58 13.757 3.616 19.946.091l130-74c13.396-7.478 13.392-27.287 0-34.762zm-119.894 56.984v-79.205l69.571 39.603zm282.306-145.855c-6.503-45.918-43.306-81.146-89.5-85.668-36.489-3.572-93.661-7.83-158.806-7.83s-122.316 4.258-158.806 7.83c-46.194 4.521-82.997 39.75-89.5 85.667-10.247 72.73-10.247 140.276 0 213.005 6.503 45.918 43.306 81.146 89.5 85.668 36.489 3.572 93.661 7.83 158.806 7.83s122.316-4.258 158.806-7.83c46.194-4.521 82.997-39.75 89.5-85.667 10.247-72.73 10.247-140.276 0-213.005zm-39.606 207.397c-3.906 27.584-26.025 48.747-53.791 51.465-35.604 3.486-91.379 7.641-154.909 7.641s-119.306-4.154-154.909-7.641c-27.766-2.718-49.885-23.881-53.791-51.466-4.844-34.203-7.3-68.148-7.3-100.894s2.456-66.69 7.3-100.895c3.906-27.584 26.025-48.747 53.791-51.465 35.604-3.486 91.379-7.641 154.909-7.641s119.306 4.154 154.909 7.641c27.766 2.718 49.885 23.881 53.791 51.466 9.722 69.018 9.722 132.771 0 201.789z"></path>
                </svg></a><a class="icon-linkedin" href="{{ contactinfo()?->linkedin }}" target="_blank" title="linkedin">
                <svg viewBox="-21 -35 682.66669 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
                  <path d="m77.613281-.667969c-46.929687 0-77.613281 30.816407-77.613281 71.320313 0 39.609375 29.769531 71.304687 75.8125 71.304687h.890625c47.847656 0 77.625-31.695312 77.625-71.304687-.894531-40.503906-29.777344-71.320313-76.714844-71.320313zm0 0"></path>
                  <path d="m8.109375 198.3125h137.195313v412.757812h-137.195313zm0 0"></path>
                  <path d="m482.054688 188.625c-74.011719 0-123.640626 69.546875-123.640626 69.546875v-59.859375h-137.199218v412.757812h137.191406v-230.5c0-12.339843.894531-24.660156 4.519531-33.484374 9.917969-24.640626 32.488281-50.167969 70.390625-50.167969 49.644532 0 69.5 37.851562 69.5 93.339843v220.8125h137.183594v-236.667968c0-126.78125-67.6875-185.777344-157.945312-185.777344zm0 0"></path>
                </svg></a><a class="icon-whatsapp" href="{{ contactinfo()?->whatsapp }}" target="_blank" title="whatsapp">
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
          <p>@lang('site.copy_right') </p>
        </div>
      </div><a class="bottom scrollToTop" href="#"> <span>TOP</span></a>
    </footer><!--End Footer-->