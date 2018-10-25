<header class="header-content">
    <div class="header-top hidden-sm hidden-xs" id="header-top">
      <div class="container">
        <nav class="navbar navbar-inverse header-top__top">
          <div class="navbar-header"><a class="navbar-brand logo__link" href="http://swlabs.co/"><img class="logo__image" src="{{asset('educef/assets/img/logo/Logo-header.png')}}" alt="Logo Educef"></a></div>
          <div class="nav navbar-nav navbar-left categories"><a class="dropdown-toggle categories__button"><i class="glyph-icon flaticon-signs-1 categories__icon"></i><span class="categories__text">subject</span></a>
            <div class="dropdown-catagories">
                  <ul class="dropdown-catagories__list ">
                    <?php  $categories= \App\Model\Category::all();  ?>
                    @foreach($categories as $category)
                      <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">{{$category->name_en}}</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                      <div class="cate-sub">
                        <ul class="cate-sub__list">
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Finance</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Industry</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Management</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Media</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Sales</a></li>
                        </ul>
                      </div>
                    </li>
                    @endforeach

                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Design</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                      <div class="cate-sub">
                        <ul class="cate-sub__list">
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Design Thinking</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Fashion</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Development</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                      <div class="cate-sub">
                        <ul class="cate-sub__list">
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Databases</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Mobie Apps</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Heath &amp; Fitness</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                      <div class="cate-sub">
                        <ul class="cate-sub__list">
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Dance</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Fitness</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">IT &amp; Software</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                      <div class="cate-sub">
                        <ul class="cate-sub__list">
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">AI &amp; Big Data</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Hardware</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Language</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                      <div class="cate-sub">
                        <ul class="cate-sub__list">
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Chinese</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">English</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">French</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Lifestyle</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                      <div class="cate-sub">
                        <ul class="cate-sub__list">
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Art &amp; Crafts</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Gaming</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Office Productivity</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                      <div class="cate-sub">
                        <ul class="cate-sub__list">
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Apple</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Google</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Oracle</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
            </div>
          </div>
          <form class="navbar-form navbar-left form-search">
            <div class="form-search__input-group">
              <input class="form-control form-search__input" type="text" placeholder="Search your course...">
              <div class="form-search__btn-group">
                <button class="btn form-search__button" type="submit"><i class="glyph-icon flaticon-search form-search__icon"></i></button>
              </div>
            </div>
          </form>
          @auth
          <div class="nav navbar-nav navbar-right nav-right nav-right--login">
              <button class="btn btn-default button-default nav-right__instructor" type="submit">Instructors</button>
              <div class="nav-right__notifications"><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-commerce-1 nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-bell nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a>
                <div class="nav-right__profile"><i class="glyph-icon flaticon-profile-2 nav-right__profile__icon"></i><span class="nav-right__profile__status"></span>
                  <div class="profile">
                    <div class="profile__avarta"><img class="profile__image" src="{{asset('educef/assets/img/30w.jpg')}}" alt=""></div>
                    <a class="profile__user-name" href="#">{{\Auth::user()->name}}</a><a class="profile__course" href="#"><i class="glyph-icon flaticon-profile profile__icon"></i><span class="profile__text">My profile</span></a><a class="profile__course" href="#"><i class="glyph-icon flaticon-shield profile__icon"></i><span class="profile__text">My course</span></a>
                    <a class="btn btn-default button-default profile__btn"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                  </div>
                </div>
              </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          @else   
          <div class="nav navbar-nav navbar-right nav-right--notlogin">
              <div class="nav-right__notifications"><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-shapes nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-commerce-1 nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a></div>
              <button class="btn btn-default button-default nav-right__become" type="submit">become an Instructor</button>
              <div class="nav-right__signin"><a class="nav-right__signin__link" href="#" data-toggle="modal" data-target="#modal-signin" data-modal-target="#sign-in">Sign in</a><span>|</span><a class="nav-right__signin__link" href="#" data-toggle="modal" data-target="#modal-signin" data-modal-target="#sign-up">sign up</a></div>
            </div>
          @endauth
          
          
        </nav>
      </div>
    </div>
    <div class="bottom-header hidden-sm hidden-xs" id="scrollspy" data-spy="affix" data-offset-top="112">
      <div class="container">
        <div class="logo--menu"><a class="logo__link" href="http://swlabs.co/"><img class="logo__image" src="{{asset('educef/assets/img/logo/Logo-header.png')}}" alt="Logo Educef"></a></div>
        <nav class="menu-main">
              <ul class="nav navbar-nav menu-main__list ">
                <li class="menu-main__item active"><a class="menu-main__link " href="#" id="home">home</a>
                  <div class="dropdown-catagories dropdown-catagories--menu">
                    <ul class="dropdown-catagories__list">
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="index.html">home 1</a></li>
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="index-2.html">home 2</a></li>
                    </ul>
                  </div>
                </li>
                <li class="menu-main__item ">
                  <a class="menu-main__link " href="{{url('/course')}}" id="course">course</a>
                </li>
                <li class="menu-main__item "><a class="menu-main__link " href="#" id="bundle">bundle</a>
                  <div class="dropdown-catagories dropdown-catagories--menu">
                    <ul class="dropdown-catagories__list">
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="course-bundle.html">course bundle</a></li>
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="bundle-details.html">course bundle details</a></li>
                    </ul>
                  </div>
                </li>
                <li class="menu-main__item "><a class="menu-main__link " href="#" id="partner">partner</a>
                  <div class="dropdown-catagories dropdown-catagories--menu">
                    <ul class="dropdown-catagories__list">
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="partner-listing.html">partner list</a></li>
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="partner-details.html">partner details</a></li>
                    </ul>
                  </div>
                </li>
                <li class="menu-main__item "><a class="menu-main__link " href="#" id="blog">blog</a>
                  <div class="dropdown-catagories dropdown-catagories--menu">
                    <ul class="dropdown-catagories__list">
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="blog-grid.html">blog grid</a></li>
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="blog-details-sidebar.html">blog details with sidebar</a></li>
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="blog-details.html">blog details</a></li>
                    </ul>
                  </div>
                </li>
                <li class="menu-main__item "><a class="menu-main__link " href="#" id="pages">pages</a>
                  <div class="dropdown-catagories dropdown-catagories--menu">
                    <ul class="dropdown-catagories__list">
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="pricing-table.html">pricing table</a></li>
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="contact.html">contact</a></li>
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="coming-soon.html">coming soon</a></li>
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="404.html">404 page</a></li>
                    </ul>
                  </div>
                </li>
                <li class="menu-main__item "><a class="menu-main__link " href="#" id="elements">elements</a>
                  <div class="dropdown-catagories dropdown-catagories--menu">
                    <ul class="dropdown-catagories__list">
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link" href="#">sub level 1</a><span class="glyph-icon flaticon-arrows-3 menu-main__icon"></span>
                        <div class="cate-sub">
                          <ul class="cate-sub__list">
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">sub level 1.1</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">sub level 1.2</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="dropdown-catagories__item "><a class="dropdown-catagories__link" href="#">sub level 2</a><span class="glyph-icon flaticon-arrows-3 menu-main__icon"></span>
                        <div class="cate-sub">
                          <ul class="cate-sub__list">
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">sub level 2.1</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">sub level 2.2</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
        </nav>
      </div>
    </div>
    <div class="header__mobile hidden-lg hidden-md">
      <div class="header-top">
        <div class="container">
          <div class="nav-right--notlogin nav-right--notlogin--mobile pull-right">
            <div class="nav-right__notifications"><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-shapes nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-commerce-1 nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a></div>
            <button class="form-search__button--mobile" type="submit" data-toggle="collapse" data-target="#form-search-mobile"><i class="glyph-icon flaticon-search form-search__icon"></i></button>
            <button class="button-default nav-right__become" type="submit">become an Instructor</button>
            <div class="nav-right__signin"><a class="nav-right__signin__link" href="#" data-toggle="modal" data-target="#modal-signin" data-modal-target="#sign-in">Sign in</a><span>|</span><a class="nav-right__signin__link" href="#" data-toggle="modal" data-target="#modal-signin" data-modal-target="#sign-up">sign up</a></div>
          </div>
          <form class="navbar-form form-search--mobile" id="form-search-mobile">
            <div class="container">
              <div class="form-search__input-group">
                <input class="form-control form-search__input" type="text" placeholder="Search your course...">
                <div class="form-search__btn-group">
                  <button class="btn form-search__button" type="submit"><i class="glyph-icon flaticon-search form-search__icon"></i></button>
                </div>
              </div>
              <button class="dropdown-toggle form-search__button form-search__button--close" type="submit" data-toggle="collapse" data-target="#form-search-mobile"><i class="glyph-icon flaticon-access-denied form-search__icon"></i></button>
            </div>
          </form>
        </div>
      </div>
      <nav class="navbar" id="header-mobile" data-spy="affix" data-offset-top="75">
        <div class="container">
          <div class="categories--mobile pull-left"><a class="dropdown-toggle categories--mobile__buttonsm" id="menu-categories" data-toggle="collapse" data-target="#dropdown-categories"><i class="glyph-icon flaticon-signs-1 categories--mobile__icon"></i></a></div>
          <button class="navbar-toggle nav-icon pull-right collapsed visible-sm visible-xs" id="menu-hamberger" data-toggle="collapse" data-target="#menu-main"><span class="bar"></span></button>
          <div class="logo--mobile text-center"><a class="logo__link" href="http://swlabs.co/"><img class="logo__image" src="{{asset('educef/assets/img/logo/Logo-header.png')}}" alt="Logo Educef"></a></div>
        </div>
        <div class="menu-mobile">
              <ul class="menu-mobile__list ">
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">home</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="index.html">home 1</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="index-2.html">home 2</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">course</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="categories.html">course categories</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-listing.html">course list</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-grid.html">course grid</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-single.html">course single</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-detail.html">course details</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="search-result.html">course search result</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="instructor-details.html">instructor details</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">bundle</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-bundle.html">course bundle</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="bundle-details.html">course bundle details</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">partner</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="partner-listing.html">partner list</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="partner-details.html">partner details</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">blog</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="blog-grid.html">blog grid</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="blog-details-sidebar.html">blog details with sidebar</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="blog-details.html">blog details</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">pages</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="pricing-table.html">pricing table</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="contact.html">contact</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="coming-soon.html">coming soon</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="404.html">404 page</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">elements</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-submenu"><a class="dropdown-mobile__link" href="#">sub level 1</a><span class="glyph-icon flaticon-arrows-3 menu-mobile__icon"></span>
                      <ul class="dropdown-menu dropdown-mobile">
                        <li class="dropdown-mobile__item"><a class="dropdown-mobile__link" href="#">sub level 1.1</a></li>
                        <li class="dropdown-mobile__item"><a class="dropdown-mobile__link" href="#">sub level 1.2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-mobile__link" href="#">sub level 2</a><span class="glyph-icon flaticon-arrows-3 menu-mobile__icon"></span>
                      <ul class="dropdown-menu dropdown-mobile">
                        <li class="dropdown-mobile__item"><a class="dropdown-mobile__link" href="#">sub level 2.1</a></li>
                        <li class="dropdown-mobile__item"><a class="dropdown-mobile__link" href="#">sub level 2.2</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
        </div>
        <div class="menu-mobile-dropdown menu-mobile--categories">
              <ul class="menu-mobile__list ">
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Business</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Finance</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Industry</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Management</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Media</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Sales</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Design</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Design Thinking</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Fashion</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Development</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Databases</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Mobie Apps</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Heath &amp; Fitness</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Dance</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Fitness</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">IT &amp; Software</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">AI &amp; Big Data</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Hardware</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Language</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Chinese</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">English</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">French</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Lifestyle</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Art &amp; Crafts</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Gaming</a></li>
                  </ul>
                </li>
                <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Office Productivity</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                  <ul class="dropdown-menu dropdown-mobile">
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Apple</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Google</a></li>
                    <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Oracle</a></li>
                  </ul>
                </li>
              </ul>
        </div>
      </nav>
    </div>
    <div class="button-default btn-ontop" id="on-top"><span class="glyph-icon flaticon-arrows-5"></span></div>
  </header>