@extends('layouts.main')

@section('content')
<div class="courseListing">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 column-left">
                          <div class="column-left__item">
                            <h1 class="column-left__title">Categories</h1>
                            <div class="select list-selector"><a class="column-left__button-drop" href="#list-catagories" data-toggle="collapse" id="btn-list-catagories"><span class="column-left__button-drop__text" id="select-text">Categories</span><span class="glyph-icon flaticon-arrows-2 column-left__icon"></span></a>
                              <div class="list-catagories list-catagories" id="list-catagories">
                                            <ul class="list-catagories__list">
                                              <li class="list-catagories__item"><a class="list-catagories__link active">all</a>
                                              </li>
                                              <li class="list-catagories__item"><a class="list-catagories__link ">Art and humanlities</a>
                                              </li>
                                              <li class="list-catagories__item"><a class="list-catagories__link ">business</a>
                                              </li>
                                              <li class="list-catagories__item"><a class="list-catagories__link ">computer science</a>
                                              </li>
                                              <li class="list-catagories__item"><a class="list-catagories__link ">data science</a>
                                              </li>
                                              <li class="list-catagories__item"><a class="list-catagories__link ">information technology</a>
                                              </li>
                                            </ul><a class="column-left__link" href="#">see more</a>
                              </div>
                            </div>
                          </div>
                          <div class="column-left__item">
                            <h1 class="column-left__title">topics</h1>
                            <div class="select list-selector"><a class="column-left__button-drop" href="#topics" data-toggle="collapse" id="btn-topics"><span class="column-left__button-drop__text">topics</span><span class="glyph-icon flaticon-arrows-2 column-left__icon"></span></a>
                              <div class="list-catagories topics" id="topics">
                                            <ul class="select__list">
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="topics-Courses" value="Courses" name="topics">
                                                  <label for="topics-Courses">Courses</label>
                                                </div><span class="select__number">125</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="topics-Design" value="Design" name="topics">
                                                  <label for="topics-Design">Design</label>
                                                </div><span class="select__number">246</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="topics-learning" value="learning" name="topics">
                                                  <label for="topics-learning">learning</label>
                                                </div><span class="select__number">21</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="topics-Level" value="Level" name="topics">
                                                  <label for="topics-Level">Level</label>
                                                </div><span class="select__number">234</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="topics-photoshop" value="photoshop" name="topics">
                                                  <label for="topics-photoshop">photoshop</label>
                                                </div><span class="select__number">48</span>
                                              </li>
                                            </ul><a class="column-left__link" href="#">see more</a>
                              </div>
                            </div>
                          </div>
                          <div class="column-left__item">
                            <h1 class="column-left__title">skill level</h1>
                            <div class="select list-selector"><a class="column-left__button-drop" href="#skill-level" data-toggle="collapse" id="btn-skill-level"><span class="column-left__button-drop__text">skill level</span><span class="glyph-icon flaticon-arrows-2 column-left__icon"></span></a>
                              <div class="list-catagories skill-level" id="skill-level">
                                            <ul class="select__list">
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="skill-level-advanced" value="advanced" name="skill-level">
                                                  <label for="skill-level-advanced">advanced</label>
                                                </div><span class="select__number">125</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="skill-level-Appropriate for all" value="Appropriate for all" name="skill-level">
                                                  <label for="skill-level-Appropriate for all">Appropriate for all</label>
                                                </div><span class="select__number">246</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="skill-level-beginner" value="beginner" name="skill-level">
                                                  <label for="skill-level-beginner">beginner</label>
                                                </div><span class="select__number">21</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="skill-level-intermediate" value="intermediate" name="skill-level">
                                                  <label for="skill-level-intermediate">intermediate</label>
                                                </div><span class="select__number">234</span>
                                              </li>
                                            </ul><a class="column-left__link" href="#">see more</a>
                              </div>
                            </div>
                          </div>
                          <div class="column-left__item">
                            <h1 class="column-left__title">duration</h1>
                            <div class="select list-selector"><a class="column-left__button-drop" href="#duration" data-toggle="collapse" id="btn-duration"><span class="column-left__button-drop__text">duration</span><span class="glyph-icon flaticon-arrows-2 column-left__icon"></span></a>
                              <div class="list-catagories duration" id="duration">
                                            <ul class="select__list">
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="duration-0-2 Hours" value="0-2 Hours" name="duration">
                                                  <label for="duration-0-2 Hours">0-2 Hours</label>
                                                </div><span class="select__number">125</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="duration-3-6 Hours" value="3-6 Hours" name="duration">
                                                  <label for="duration-3-6 Hours">3-6 Hours</label>
                                                </div><span class="select__number">246</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="duration-7-16 Hours" value="7-16 Hours" name="duration">
                                                  <label for="duration-7-16 Hours">7-16 Hours</label>
                                                </div><span class="select__number">246</span>
                                              </li>
                                            </ul><a class="column-left__link" href="#">see more</a>
                              </div>
                            </div>
                          </div>
                          <div class="column-left__item">
                            <h1 class="column-left__title">courses laguages</h1>
                            <div class="select list-selector"><a class="column-left__button-drop" href="#courses-languages" data-toggle="collapse" id="btn-courses-languages"><span class="column-left__button-drop__text">courses laguages</span><span class="glyph-icon flaticon-arrows-2 column-left__icon"></span></a>
                              <div class="list-catagories courses-languages" id="courses-languages">
                                            <ul class="select__list">
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="courses-languages-chinese" value="chinese" name="courses-languages">
                                                  <label for="courses-languages-chinese">chinese</label>
                                                </div><span class="select__number">125</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="courses-languages-English" value="English" name="courses-languages">
                                                  <label for="courses-languages-English">English</label>
                                                </div><span class="select__number">246</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="courses-languages-Japanese" value="Japanese" name="courses-languages">
                                                  <label for="courses-languages-Japanese">Japanese</label>
                                                </div><span class="select__number">21</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="courses-languages-russian" value="russian" name="courses-languages">
                                                  <label for="courses-languages-russian">russian</label>
                                                </div><span class="select__number">234</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="courses-languages-Spanish" value="Spanish" name="courses-languages">
                                                  <label for="courses-languages-Spanish">Spanish</label>
                                                </div><span class="select__number">234</span>
                                              </li>
                                            </ul><a class="column-left__link" href="#">see more</a>
                              </div>
                            </div>
                          </div>
                          <div class="column-left__item">
                            <h1 class="column-left__title">Subtitle Languages</h1>
                            <div class="select list-selector"><a class="column-left__button-drop" href="#subtitle-languages" data-toggle="collapse" id="btn-subtitle-languages"><span class="column-left__button-drop__text">Subtitle Languages</span><span class="glyph-icon flaticon-arrows-2 column-left__icon"></span></a>
                              <div class="list-catagories subtitle-languages" id="subtitle-languages">
                                            <ul class="select__list">
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="subtitle-languages-chinese" value="chinese" name="subtitle-languages">
                                                  <label for="subtitle-languages-chinese">chinese</label>
                                                </div><span class="select__number">125</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="subtitle-languages-English" value="English" name="subtitle-languages">
                                                  <label for="subtitle-languages-English">English</label>
                                                </div><span class="select__number">246</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="subtitle-languages-Japanese" value="Japanese" name="subtitle-languages">
                                                  <label for="subtitle-languages-Japanese">Japanese</label>
                                                </div><span class="select__number">21</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="subtitle-languages-russian" value="russian" name="subtitle-languages">
                                                  <label for="subtitle-languages-russian">russian</label>
                                                </div><span class="select__number">234</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="subtitle-languages-Spanish" value="Spanish" name="subtitle-languages">
                                                  <label for="subtitle-languages-Spanish">Spanish</label>
                                                </div><span class="select__number">234</span>
                                              </li>
                                            </ul><a class="column-left__link" href="#">see more</a>
                              </div>
                            </div>
                          </div>
                          <div class="column-left__item">
                            <h1 class="column-left__title">collaboration</h1>
                            <div class="select list-selector"><a class="column-left__button-drop" href="#collaboration" data-toggle="collapse" id="btn-collaboration"><span class="column-left__button-drop__text">collaboration</span><span class="glyph-icon flaticon-arrows-2 column-left__icon"></span></a>
                              <div class="list-catagories collaboration" id="collaboration">
                                            <ul class="select__list">
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="collaboration-teamwork" value="teamwork" name="collaboration">
                                                  <label for="collaboration-teamwork">teamwork</label>
                                                </div><span class="select__number">125</span>
                                              </li>
                                              <li class="select__item">
                                                <div class="ckeckbox">
                                                  <input class="select__checkmark" type="checkbox" id="collaboration-sharePoint" value="sharePoint" name="collaboration">
                                                  <label for="collaboration-sharePoint">sharePoint</label>
                                                </div><span class="select__number">246</span>
                                              </li>
                                            </ul><a class="column-left__link" href="#">see more</a>
                              </div>
                            </div>
                          </div>
            </div>
            <div class="col-lg-9 col-md-9 column-right">
              <div class="header-filter">
                <div class="header-filter__title">active filters</div>
                <div class="header-filter__result">Result:<span class="header-filter__number">980 matches</span></div>
              </div>
              <div class="tags">
                <div class="tags__item"><span class="btn-outline">default</span></div>
                <div class="tags__item"><i class="glyph-icon flaticon-circle tags__icon"></i><span class="tags__text">default</span></div>
                <div class="tags__item"><i class="glyph-icon flaticon-circle tags__icon"></i><span class="tags__text">default</span></div>
                <div class="tags__item"><i class="glyph-icon flaticon-circle tags__icon"></i><span class="tags__text">default</span></div>
              </div>
              <div class="tabs">
                <ul class="tabs__list">
                  <li class="tabs__item"><a class="tabs__link active" href="#">All</a></li>
                  <li class="tabs__item"><a class="tabs__link" href="#">Paid</a></li>
                  <li class="tabs__item"><a class="tabs__link" href="#">Sale</a></li>
                  <li class="tabs__item"><a class="tabs__link" href="#">Free</a></li>
                  <li class="tabs__item"><a class="tabs__link" href="#">Bundle</a></li>
                  <li class="tabs__item"><a class="tabs__link" href="#">Course</a></li>
                </ul>
                <div class="sort-right">
                  <div class="sort-by"><span class="sort-by__text">Sort by:</span>
                    <div class="dropdown sort-by__button">
                      <div class="btn-dropdown" data-toggle="dropdown"><span class="select-sort btn-dropdown__text">None</span><span class="glyph-icon flaticon-arrows-2 btn-dropdown__icon"></span></div>
                      <div class="list-sort dropdown-menu">
                                    <ul class="list-sort__list">
                                      <li class="list-sort__item"><a class="list-sort__link ">name</a>
                                      </li>
                                      <li class="list-sort__item"><a class="list-sort__link ">date up</a>
                                      </li>
                                      <li class="list-sort__item"><a class="list-sort__link ">newest</a>
                                      </li>
                                    </ul>
                      </div>
                    </div>
                  </div>
                  <div class="view-gird"><span class="glyph-icon flaticon-signs-1 view-gird__icon" id="view-course-list"></span><span class="glyph-icon flaticon-shapes-2 view-gird__icon" id="view-course-gird"></span></div>
                </div>
              </div>
              <div class="courses-by-gird">
                            <div class="row courses__list ">
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/0.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-0.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
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
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/1.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Design effective advertising pointers</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-1.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/2.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Complete graphic design: Photomagic</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-2.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/3.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
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
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/4.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Design effective advertising pointers</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-4.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/5.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Complete graphic design: Photomagic</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-5.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/6.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-6.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
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
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/7.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Design effective advertising pointers</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-7.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/8.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Complete graphic design: Photomagic</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-8.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/9.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-9.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
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
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/10.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Design effective advertising pointers</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-10.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/11.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Complete graphic design: Photomagic</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-11.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/12.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-12.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
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
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/13.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Design effective advertising pointers</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-13.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/14.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Complete graphic design: Photomagic</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-14.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/15.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-15.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
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
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/16.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Design effective advertising pointers</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-16.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/17.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Complete graphic design: Photomagic</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-17.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </div>
              <div class="courses-by-list">
                            <div class="row courses__list ">
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/0.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-0.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
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
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/1.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Design effective advertising pointers</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-1.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/2.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Complete graphic design: Photomagic</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-2.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/3.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
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
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/4.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Design effective advertising pointers</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-4.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/5.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Complete graphic design: Photomagic</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-5.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/6.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-6.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
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
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/7.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Design effective advertising pointers</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-7.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/8.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Complete graphic design: Photomagic</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-8.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/9.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-9.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
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
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/10.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Design effective advertising pointers</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-10.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/11.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Complete graphic design: Photomagic</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-11.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/12.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-12.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
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
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/13.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Design effective advertising pointers</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-13.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/14.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Complete graphic design: Photomagic</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-14.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/15.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-15.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
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
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/16.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Design effective advertising pointers</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-16.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 courses__item">
                                <div class="courses__wapper">
                                  <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="assets/img/courses-image/17.jpg" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                      <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                  </div>
                                  <div class="col-equal courses__content"><a class="courses__content__title" href="#">Complete graphic design: Photomagic</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-17.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>
                                      <div class="courses__col-right">
                                        <div class="rating-start" data-rating="5"></div>
                                      </div>
                                    </div>
                                    <div class="courses__content__info">
                                      <div class="courses__col-left">
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                        <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                      </div>
                                      <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </div>
              <div class="pagination-wrapper">
                            <nav aria-label="Page navigation example">
                              <ul class="pagination pagination__list">
                                <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">prev</a></li>
                                <li class="page-item pagination__item"><a class="page-link pagination__link active" href="#">1</a></li>
                                <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">2</a></li>
                                <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">3</a></li>
                                <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">...</a></li>
                                <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">next</a></li>
                              </ul>
                            </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection