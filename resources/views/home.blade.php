@extends('layouts.main')

@section('content')
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
                    @foreach($coures as $coure)
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
                            <div class="col-equal courses__content"><a class="courses__content__title" href="#">{{$coure->name}}</a>
                              <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-1.png')}}" alt=""></span><span class="courses__content__author-name">T . {{$coure->teacher->name}}</span></a>
                                <div class="courses__col-right">
                                  <div class="rating-start" data-rating="5"></div>
                                </div>
                              </div>
                              <div class="courses__content__info">
                                <div class="courses__col-left">
                                  <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">{{$coure->likes->count()}}</span></div>
                                  <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                </div>
                                <div class="courses__col-right courses__content__price">$100</div>
                              </div>
                            </div>
                          </div>
                      </div>
                    @endforeach
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
@endsection
