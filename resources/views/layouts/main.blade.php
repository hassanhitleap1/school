<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from swlabs.co/educef/html/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 20:40:02 GMT -->
<head>
    <title>Educef 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    @include('layouts.head')
  </head>
  <body class="home02">
    <header class="header-content">
      <div class="header-top hidden-sm hidden-xs" id="header-top">
        <div class="container">
          <nav class="navbar navbar-inverse header-top__top">
            <div class="navbar-header"><a class="navbar-brand logo__link" href="http://swlabs.co/"><img class="logo__image" src="{{asset('educef/assets/img/logo/Logo-header.png')}}" alt="Logo Educef"></a></div>
            <div class="nav navbar-nav navbar-left categories"><a class="dropdown-toggle categories__button"><i class="glyph-icon flaticon-signs-1 categories__icon"></i><span class="categories__text">categories</span></a>
              <div class="dropdown-catagories">
                    <ul class="dropdown-catagories__list ">
                      <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Business</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
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
            <div class="nav navbar-nav navbar-right nav-right nav-right--login">
              <button class="btn btn-default button-default nav-right__instructor" type="submit">Instructors</button>
              <div class="nav-right__notifications"><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-commerce-1 nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-bell nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a>
                <div class="nav-right__profile"><i class="glyph-icon flaticon-profile-2 nav-right__profile__icon"></i><span class="nav-right__profile__status"></span>
                  <div class="profile">
                    <div class="profile__avarta"><img class="profile__image" src="{{asset('educef/assets/img/30w.jpg')}}" alt=""></div><a class="profile__user-name" href="#">Alex Sander</a><a class="profile__course" href="#"><i class="glyph-icon flaticon-profile profile__icon"></i><span class="profile__text">My profile</span></a><a class="profile__course" href="#"><i class="glyph-icon flaticon-shield profile__icon"></i><span class="profile__text">My course</span></a><a class="btn btn-default button-default profile__btn" href="#">Log out</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="nav navbar-nav navbar-right nav-right--notlogin">
              <div class="nav-right__notifications"><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-shapes nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-commerce-1 nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a></div>
              <button class="btn btn-default button-default nav-right__become" type="submit">become an Instructor</button>
              <div class="nav-right__signin"><a class="nav-right__signin__link" href="#" data-toggle="modal" data-target="#modal-signin" data-modal-target="#sign-in">Sign in</a><span>|</span><a class="nav-right__signin__link" href="#" data-toggle="modal" data-target="#modal-signin" data-modal-target="#sign-up">sign up</a></div>
            </div>
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
                  <li class="menu-main__item "><a class="menu-main__link " href="#" id="course">course</a>
                    <div class="dropdown-catagories dropdown-catagories--menu">
                      <ul class="dropdown-catagories__list">
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="categories.html">course categories</a></li>
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="course-listing.html">course list</a></li>
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="course-grid.html">course grid</a></li>
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="course-single.html">course single</a></li>
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="course-detail.html">course details</a></li>
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="search-result.html">course search result</a></li>
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="instructor-details.html">instructor details</a></li>
                      </ul>
                    </div>
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
    <div class="modal fade signin-form" id="modal-signin" role="dialog">
      <div class="modal-dialog signin-form__dialog">
        <div class="signin-form__button-close hidden-lg hidden-md hidden-sm">
          <button class="close signin-form__button-close__btn" type="button" data-dismiss="modal">&times;</button>
        </div>
        <div class="signin-form__header"><a class="signin-form__header__logo" href="#"><img src="{{asset('educef/assets/img/logo/Logo-form.png')}}" alt=""></a>
          <p class="signin-form__sub">Universal access to the world’s best education.</p>
        </div>
        <div class="modal-content signin-form__content">
          <div class="modal-body signin-form__body">
            <ul class="signin-form__tabs">
              <li class="active signin-form__tabs__items"><a class="signin-form__tabs__link" data-toggle="tab" href="#sign-in">Sign In</a></li>
              <li class="signin-form__tabs__items"><a class="signin-form__tabs__link" data-toggle="tab" href="#sign-up">Sign Up</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="sign-in">
                <h3 class="signin-form__body__title">Log Into Your Account</h3>
                <p class="signin-form__body__sub">Your student account is your portal to all things Educef: your classroom, projects, forums, career resources, and more!</p>
                <form class="signin-form__form">
                  <div class="signin-form__form__inputs">
                    <input class="input-item" type="text" placeholder="Email">
                    <input class="input-item" type="password" placeholder="Password">
                  </div>
                  <button class="btn-green list-link__btn">Sign In</button><a class="signin-form__link" href="#">Forgot your password?</a>
                </form>
                <div class="group-btn-socials">
                  <p class="group-btn-socials__sub">or sign in with one of these services</p>
                  <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                  <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
                </div>
              </div>
              <div class="tab-pane fade" id="sign-up">
                <h3 class="signin-form__body__title">Log Into Your Account</h3>
                <p class="signin-form__body__sub">Your student account is your portal to all things Educef: your classroom, projects, forums, career resources, and more!</p>
                <form class="signin-form__form">
                  <div class="signin-form__form__inputs">
                    <input class="input-item" type="text" placeholder="User name">
                    <input class="input-item" type="email" placeholder="Email">
                    <input class="input-item" type="password" placeholder="Password">
                    <input class="input-item" type="password" placeholder="Confirm Password">
                  </div>
                  <button class="btn-green list-link__btn">Sign Up</button>
                </form>
                <div class="group-btn-socials">
                  <p class="group-btn-socials__sub">or sign up with one of these services</p>
                  <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                  <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="signin-form__footer"><a class="signin-form__footer__link" href="#">Having trouble logging in?</a></div>
      </div>
    </div>
    <section class="banner" id="hero">
      <div class="flex-video">
        <video id="video-banner" loop muted>
          <source src="https://player.vimeo.com/external/158148793.hd.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&amp;profile_id=119&amp;oauth2_token_id=57447761" type="video/mp4">
        </video>
      </div>
      <div class="container banner-container">
        <div class="banner-wrapper">
          <div class="banner-box">
            <h2 class="title-text">Design Sprint Foundations</h2>
            <p class="content-text">What do you want to learn today? What's your dream job? Discover the program that's right for you today.</p>
            <div class="btn-play-group">
              <button class="btn btn-green" type="button"><span>LEARN NOW</span></button>
              <button class="button-play-video flex-center" id="btn-play-banner" type="button"><span>PLAY VIDEO</span><span class="icon-play icon-custom flaticon-arrows-6"></span><span class="mask"></span></button>
            </div>
          </div>
          <div class="banner-wall"><img class="img-responsive" alt="macbook-wallpaper" src="{{asset('educef/assets/img/home-2/Macbook.png')}}"></div>
        </div>
      </div>
    </section>
    <section class="section-benefit" id="benefit">
      <div class="container">
            <div class="card-main-list">
              <div class="card-item">
                <div class="card-item__top"><img class="img-responsive" src="{{asset('educef/assets/img/home/icon-01.png')}}" alt="card-01"></div>
                <div class="card-item__body">
                  <h4 class="card-title">Suitable Course For Your Goal</h4>
                  <p class="card-text">These courses are designed exclusively for the rich and want to start a new life. A career that keeps pace with the high salary you deserve, we own the learning paths that are designed specifically for those with professional ambition to create.</p>
                </div>
              </div>
              <div class="card-item">
                <div class="card-item__top"><img class="img-responsive" src="{{asset('educef/assets/img/home/icon-02.png')}}" alt="card-02"></div>
                <div class="card-item__body">
                  <h4 class="card-title">Master The Most Competitive Skills</h4>
                  <p class="card-text">Quality assessment and skill verification are highly appreciated by industry experts and certified. Take the courses here, you will be learn with the world's most forward-thinking companies, Google, Facebook, AT&amp;amp;T, IBM, GitHub, and more..</p>
                </div>
              </div>
              <div class="card-item">
                <div class="card-item__top"><img class="img-responsive" src="{{asset('educef/assets/img/home/icon-03.png')}}" alt="card-03"></div>
                <div class="card-item__body">
                  <h4 class="card-title">The Best Instructor All Over The World</h4>
                  <p class="card-text">Our instructors are highly skilled in the field, many of whom are teaching at leading institutions around the world. Over one hundred thousand lecturers from 56 countries across the globe. Particularly experienced instructors in the field of hi-tech, data analysis...</p>
                </div>
              </div>
            </div>
      </div>
    </section>
    <div class="section-carousel-slide">
      <div class="container">
            <div class="carousel-slide">
              <div class="carousel-slide-item">
                <div class="carousel-holder-img"><a class="link" href="#"><img class="img-responsive" src="{{asset('educef/assets/img/home-2/08.png')}}" alt="slide-01"></a></div>
                <div class="carousel-info">
                  <div class="carousel-text-box">
                    <h4 class="title-text">In our get creative course</h4>
                    <p class="content-text">I really really like the fact that video are real authenic video. It makes it much more interesting. Learning almost becomes afterthough to the fact that you are watching cools video.</p>
                    <div class="name-wrapper"><span class="name-avatar"><img src="{{asset('educef/assets/img/home-2/14.png')}}" alt="avatar"></span><span><a class="name-text" href="#">Anthony Leath</a></span></div>
                  </div>
                </div>
              </div>
              <div class="carousel-slide-item">
                <div class="carousel-holder-img"><a class="link" href="#"><img class="img-responsive" src="{{asset('educef/assets/img/home-2/09.png')}}" alt="slide-02"></a></div>
                <div class="carousel-info">
                  <div class="carousel-text-box">
                    <h4 class="title-text">In our get creative course</h4>
                    <p class="content-text">I really really like the fact that video are real authenic video. It makes it much more interesting. Learning almost becomes afterthough to the fact that you are watching cools video.</p>
                    <div class="name-wrapper"><span class="name-avatar"><img src="{{asset('educef/assets/img/home-2/15.png')}}" alt="avatar"></span><span><a class="name-text" href="#">Anthony Leath</a></span></div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
    <div class="section-specializationsl">
      <div class="container">
        <div class="list-course__header">
          <h2 class="list-course__header__title wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.002s">top specializations</h2>
          <div class="list-course__view-more"><a class="list-course__header__btn"><span class="list-course__header__text">view more</span></a>
            <div class="list-course__header__icon list-course-icon-arrow-special"><span class="glyph-icon flaticon-arrows-3 list-course__header__icon-arrow"></span></div>
          </div>
        </div>
        <div class="card-slide">
          <div class="specializations card-slide-top">
                <div class="special courses__list ">
                  <div class="undefined courses__item">
                    <div class="courses__wapper">
                      <div class="col-equal courses__top">
                        <div class="courses__top__wapper"><img class="courses__top__image" src="{{asset('educef/assets/img/courses-image/0.jpg')}}" alt=""></div>
                        <div class="courses__top__bundle">bundle</div>
                        <div class="courses__top__bt-seller">best seller</div>
                        <div class="courses__hover">
                          <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                        </div>
                      </div>
                      <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-0.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                          <div class="courses__col-right">
                            <div class="rating-start" data-rating="5"></div>
                          </div>
                        </div>
                        <div class="courses__content__info">
                          <div class="courses__col-left">
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                          </div>
                          <div class="courses__col-right courses__content__price">$100</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="undefined courses__item">
                    <div class="courses__wapper">
                      <div class="col-equal courses__top">
                        <div class="courses__top__wapper"><img class="courses__top__image" src="{{asset('educef/assets/img/courses-image/1.jpg')}}" alt=""></div>
                        <div class="courses__top__bundle">bundle</div>
                        <div class="courses__top__bt-seller">best seller</div>
                        <div class="courses__hover">
                          <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                        </div>
                      </div>
                      <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-1.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                          <div class="courses__col-right">
                            <div class="rating-start" data-rating="5"></div>
                          </div>
                        </div>
                        <div class="courses__content__info">
                          <div class="courses__col-left">
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                          </div>
                          <div class="courses__col-right courses__content__price">$100</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="undefined courses__item">
                    <div class="courses__wapper">
                      <div class="col-equal courses__top">
                        <div class="courses__top__wapper"><img class="courses__top__image" src="{{asset('educef/assets/img/courses-image/2.jpg')}}" alt=""></div>
                        <div class="courses__top__bundle">bundle</div>
                        <div class="courses__top__bt-seller">best seller</div>
                        <div class="courses__hover">
                          <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                        </div>
                      </div>
                      <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-2.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                          <div class="courses__col-right">
                            <div class="rating-start" data-rating="5"></div>
                          </div>
                        </div>
                        <div class="courses__content__info">
                          <div class="courses__col-left">
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                          </div>
                          <div class="courses__col-right courses__content__price">$100</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="undefined courses__item">
                    <div class="courses__wapper">
                      <div class="col-equal courses__top">
                        <div class="courses__top__wapper"><img class="courses__top__image" src="{{asset('educef/assets/img/courses-image/3.jpg')}}" alt=""></div>
                        <div class="courses__top__bundle">bundle</div>
                        <div class="courses__top__bt-seller">best seller</div>
                        <div class="courses__hover">
                          <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                        </div>
                      </div>
                      <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-3.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                          <div class="courses__col-right">
                            <div class="rating-start" data-rating="5"></div>
                          </div>
                        </div>
                        <div class="courses__content__info">
                          <div class="courses__col-left">
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                          </div>
                          <div class="courses__col-right courses__content__price">$100</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="undefined courses__item">
                    <div class="courses__wapper">
                      <div class="col-equal courses__top">
                        <div class="courses__top__wapper"><img class="courses__top__image" src="{{asset('educef/assets/img/courses-image/4.jpg')}}" alt=""></div>
                        <div class="courses__top__bundle">bundle</div>
                        <div class="courses__top__bt-seller">best seller</div>
                        <div class="courses__hover">
                          <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                        </div>
                      </div>
                      <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-4.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                          <div class="courses__col-right">
                            <div class="rating-start" data-rating="5"></div>
                          </div>
                        </div>
                        <div class="courses__content__info">
                          <div class="courses__col-left">
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                          </div>
                          <div class="courses__col-right courses__content__price">$100</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="undefined courses__item">
                    <div class="courses__wapper">
                      <div class="col-equal courses__top">
                        <div class="courses__top__wapper"><img class="courses__top__image" src="{{asset('educef/assets/img/courses-image/5.jpg')}}" alt=""></div>
                        <div class="courses__top__bundle">bundle</div>
                        <div class="courses__top__bt-seller">best seller</div>
                        <div class="courses__hover">
                          <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                        </div>
                      </div>
                      <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-5.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                          <div class="courses__col-right">
                            <div class="rating-start" data-rating="5"></div>
                          </div>
                        </div>
                        <div class="courses__content__info">
                          <div class="courses__col-left">
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                          </div>
                          <div class="courses__col-right courses__content__price">$100</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-feature-course">
      <div class="container">
        <div class="header-section wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.002s">
          <h2 class="title-text">Feature Course</h2>
        </div>
        <div class="feature-wrapper">
          <div class="row feature-boss">
            <div class="feature-col col-xs-12 col-sm-6 col-md-3">
              <div class="card-feature"><img class="img-responsive" src="{{asset('educef/assets/img/home-2/10.png')}}" alt="card-feature-01">
                <div class="card-bg"></div>
                <div class="card-feature-overlay">
                  <p>SEO: Master Search Engine Optimization and SEO Link Building</p>
                  <div class="bundle-badge bundle-badge-big">BUNDLE</div>
                </div>
              </div>
            </div>
            <div class="feature-col-mid col-xs-12 col-md-6">
              <div class="card-feature"><img class="img-responsive" src="{{asset('educef/assets/img/home-2/11.png')}}" alt="card-feature-02">
                <div class="card-feature-overlay card-feature-overlay-mid">
                  <h3 class="title-text">SEO: Master Search Engine Optimization and SEO Link Building</h3>
                  <div class="bundle-badge bundle-badge-big">BUNDLE</div>
                </div>
              </div>
            </div>
            <div class="feature-col col-xs-12 col-sm-6 col-md-3">
              <div class="card-feature"><img class="img-responsive" src="{{asset('educef/assets/img/home-2/12.png')}}" alt="card-feature-03">
                <div class="card-bg"></div>
                <div class="card-feature-overlay">
                  <p>SEO: Master Search Engine Optimization and SEO Link Building</p>
                  <div class="bundle-badge bundle-badge-big">BUNDLE</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-slide">
          <div class="feature-course card-slide-bot">
                <div class="feature courses__list ">
                  <div class="undefined courses__item">
                    <div class="courses__wapper">
                      <div class="col-equal courses__top">
                        <div class="courses__top__wapper"><img class="courses__top__image" src="{{asset('educef/assets/img/courses-image/0.jpg')}}" alt=""></div>
                        <div class="courses__top__bundle">bundle</div>
                        <div class="courses__top__bt-seller">best seller</div>
                        <div class="courses__hover">
                          <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                        </div>
                      </div>
                      <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-0.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                          <div class="courses__col-right">
                            <div class="rating-start" data-rating="5"></div>
                          </div>
                        </div>
                        <div class="courses__content__info">
                          <div class="courses__col-left">
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                          </div>
                          <div class="courses__col-right courses__content__price">$100</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="undefined courses__item">
                    <div class="courses__wapper">
                      <div class="col-equal courses__top">
                        <div class="courses__top__wapper"><img class="courses__top__image" src="{{asset('educef/assets/img/courses-image/1.jpg')}}" alt=""></div>
                        <div class="courses__top__bundle">bundle</div>
                        <div class="courses__top__bt-seller">best seller</div>
                        <div class="courses__hover">
                          <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                        </div>
                      </div>
                      <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-1.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                          <div class="courses__col-right">
                            <div class="rating-start" data-rating="5"></div>
                          </div>
                        </div>
                        <div class="courses__content__info">
                          <div class="courses__col-left">
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                          </div>
                          <div class="courses__col-right courses__content__price">$100</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="undefined courses__item">
                    <div class="courses__wapper">
                      <div class="col-equal courses__top">
                        <div class="courses__top__wapper"><img class="courses__top__image" src="{{asset('educef/assets/img/courses-image/2.jpg')}}" alt=""></div>
                        <div class="courses__top__bundle">bundle</div>
                        <div class="courses__top__bt-seller">best seller</div>
                        <div class="courses__hover">
                          <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                        </div>
                      </div>
                      <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="{{asset('educef/assets/img/partner/partner-details-2.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                          <div class="courses__col-right">
                            <div class="rating-start" data-rating="5"></div>
                          </div>
                        </div>
                        <div class="courses__content__info">
                          <div class="courses__col-left">
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                          </div>
                          <div class="courses__col-right courses__content__price">$100</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="undefined courses__item">
                    <div class="courses__wapper">
                      <div class="col-equal courses__top">
                        <div class="courses__top__wapper"><img class="courses__top__image" src="{{asset('educef/assets/img/courses-image/3.jpg')}}" alt=""></div>
                        <div class="courses__top__bundle">bundle</div>
                        <div class="courses__top__bt-seller">best seller</div>
                        <div class="courses__hover">
                          <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                        </div>
                      </div>
                      <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-3.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                          <div class="courses__col-right">
                            <div class="rating-start" data-rating="5"></div>
                          </div>
                        </div>
                        <div class="courses__content__info">
                          <div class="courses__col-left">
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                          </div>
                          <div class="courses__col-right courses__content__price">$100</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="undefined courses__item">
                    <div class="courses__wapper">
                      <div class="col-equal courses__top">
                        <div class="courses__top__wapper"><img class="courses__top__image" src="{{asset('educef/assets/img/courses-image/4.jpg')}}" alt=""></div>
                        <div class="courses__top__bundle">bundle</div>
                        <div class="courses__top__bt-seller">best seller</div>
                        <div class="courses__hover">
                          <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                        </div>
                      </div>
                      <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-4.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                          <div class="courses__col-right">
                            <div class="rating-start" data-rating="5"></div>
                          </div>
                        </div>
                        <div class="courses__content__info">
                          <div class="courses__col-left">
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                          </div>
                          <div class="courses__col-right courses__content__price">$100</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="undefined courses__item">
                    <div class="courses__wapper">
                      <div class="col-equal courses__top">
                        <div class="courses__top__wapper"><img class="courses__top__image" src="{{asset('educef/assets/img/courses-image/5.jpg')}}" alt=""></div>
                        <div class="courses__top__bundle">bundle</div>
                        <div class="courses__top__bt-seller">best seller</div>
                        <div class="courses__hover">
                          <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                        </div>
                      </div>
                      <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-5.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                          <div class="courses__col-right">
                            <div class="rating-start" data-rating="5"></div>
                          </div>
                        </div>
                        <div class="courses__content__info">
                          <div class="courses__col-left">
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                          </div>
                          <div class="courses__col-right courses__content__price">$100</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
        <div class="button-wrapper">
          <button class="btn btn-green" type="button">VIEW ALL COURSE</button>
        </div>
      </div>
      <div class="section-subscribe">
        <div class="container">
          <div class="section-subscribe-wrapper">
            <div class="section-subscribe-wrapper-left">
              <h3 class="title-text">Subscribe Our Newsletter</h3>
              <p>For new awesome courses &#x26; special promotion campaign!</p>
            </div>
            <div class="section-subscribe-wrapper-right">
              <form>
                <input class="form-control" type="search" name="#" placeholder="Your email">
                <button class="btn button-default" type="submit">ENROLL NOW</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-our-feature">
      <div class="container">
        <div class="header-section wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.002s">
          <h2 class="title-text">Our Feature</h2>
        </div>
            <div class="card-lib">
              <div class="row">
                <div class="col-card col-xs-12 col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title title-text">Top quality</h4>
                      <p class="card-text content-text">Having a baby can be a nerve wracking experience for new parents – not the nine months of pregnancy.</p>
                    </div>
                  </div>
                </div>
                <div class="col-card col-xs-12 col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title title-text">Expert Instructors</h4>
                      <p class="card-text content-text">Having a baby can be a nerve wracking experience for new parents – not the nine months of pregnancy</p>
                    </div>
                  </div>
                </div>
                <div class="col-card col-xs-12 col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title title-text">Discussion</h4>
                      <p class="card-text content-text">Having a baby can be a nerve wracking experience for new parents – not the nine months of pregnancy.</p>
                    </div>
                  </div>
                </div>
                <div class="col-card col-xs-12 col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title title-text">Interactive</h4>
                      <p class="card-text content-text">Having a baby can be a nerve wracking experience for new parents – not the nine months of pregnancy.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
   @inc
    @include('layouts.js')

    <div class="positionfixed"></div>
  </body>

<!-- Mirrored from swlabs.co/educef/html/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 20:41:58 GMT -->
</html>