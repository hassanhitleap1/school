@extends('layouts.main')

@section('content')
<div class="courseListing">
        <div class="container">
        <form action="{{url('course')}}" method="GET">
          <div class="row">
              <div class="col-lg-3 col-md-3 column-left">
                  <div class="column-left__item">
                    <h1 class="column-left__title">levels</h1>
                    <div class="select list-selector"><a class="column-left__button-drop" href="#topics" data-toggle="collapse" id="btn-topics"><span class="column-left__button-drop__text">levels</span><span class="glyph-icon flaticon-arrows-2 column-left__icon"></span></a>
                      <div class="list-catagories topics" id="levels">
                          <ul class="select__list">
                              @foreach($levels as $level)
                                 <li class="select__item">
                                    <div class="ckeckbox">
                                      <input class="select__checkmark" type="checkbox" id="level_{{$level->id}}" value="{{$level->id}}" name="levels[]" <?=(isset($_GET['levels']) and in_array($level->id,$_GET['levels'] ))?'checked':'false'?>>
                                       <label for="level_{{$level->id}}">Courses</label>
                                        </div><span class="select__number">{{$level->courses->count()}}</span>
                                  </li>
                               @endforeach
                            </ul><a class="column-left__link" href="#">see more</a>
                      </div>
                    </div>
                  </div>
                    <div class="column-left__item">
                      <h1 class="column-left__title">materials </h1>
                      <div class="select list-selector"><a class="column-left__button-drop" href="#topics" data-toggle="collapse" id="btn-topics"><span class="column-left__button-drop__text">materials</span><span class="glyph-icon flaticon-arrows-2 column-left__icon"></span></a>
                      <div class="list-catagories topics" id="levels">
                          <ul class="select__list">
                                    @foreach($materials as $material)
                                      <li class="select__item">
                                        <div class="ckeckbox">
                                          <input class="select__checkmark" type="checkbox" id="material_{{$material->id}}" value="{{$material->id}}" name="materials[]" <?= (isset($_GET['materials']) and in_array($material->id, $_GET['materials'])) ? 'checked' : 'false' ?>>
                                          <label for="material_{{$material->id}}">Courses</label>
                                        </div><span class="select__number">{{$material->courses->count()}}</span>
                                      </li>
                                    @endforeach
                                    </ul><a class="column-left__link" href="#">see more</a>
                      </div>
                    </div>
              </div>
          </div>
            <div class="col-lg-9 col-md-9 column-right">
              <button class="sort-right btn button-normal-02 contact-form__button float-left" type="submit">search</button>
              <div class="tabs">
                <ul class="tabs__list">
                  <li class="tabs__item"><a class="tabs__link active" href="{{url('/course?name')}}"></a></li>
                </ul>
               
              </div>
              <div class="courses-by-gird">
                            <div class="row courses__list ">
                              @foreach ($coures as $course)
                                <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                  <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                      <div class="courses__top__wapper"><img class="courses__top__image" src="{{$course->cover_path}}" alt=""></div>
                                      <div class="courses__top__bundle">bundle</div>
                                      <div class="courses__top__bt-seller">best seller</div>
                                      <div class="courses__hover">
                                        <div class="courses__hover-content">
                                          <span class="courses__hover-content__item">
                                            <span class="glyph-icon flaticon-shapes courses__hover-content__icon course_likes" id="{{$course->id}}">
                                              </span></span><span class="courses__hover-content__item">
                                                <span class="glyph-icon flaticon-interface courses__hover-content__icon">
                                                  </span>
                                                </span>
                                              </div>
                                      </div>
                                    </div>
                                    <div class="col-equal courses__content">
                                      <a class="courses__content__title" href="{{url('/course/'.$course->id)}}">{{$course->name}}</a>
                                      <div class="courses__content__author"><a class="courses__col-left" href="{{url('/course/'.$course->id)}}">
                                        <span class="courses__content__avatar">
                                          <img class="courses__content__image" src="{{asset('educef/assets/img/partner/partner-details-0.png')}}" alt="">
                                        </span><span class="courses__content__author-name">{{$course->teacher->name}}</span></a>
                                        <div class="courses__col-right">
                                          <div class="rating-start" data-rating="5"></div>
                                        </div>
                                      </div>
                                      <div class="courses__content__info">
                                        <div class="courses__col-left">
                                          <div class="col-left__item">
                                            <span class="courses__content__icon">
                                              <span class="glyph-icon flaticon-shapes icon-custom">
                                                </span>
                                              </span>
                                              <span class="courses__content__number">{{$course->likes->count()}}</span>
                                            </div>
                                          <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">${{$course->price}}</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              @endforeach
                            </div>
              </div>
            
              </form>
              <div class="pagination-wrapper">
                            <nav aria-label="Page navigation example">
                              {{-- <ul class="pagination pagination__list">
                                <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">prev</a></li>
                                <li class="page-item pagination__item"><a class="page-link pagination__link active" href="#">1</a></li>
                                <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">2</a></li>
                                <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">3</a></li>
                                <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">...</a></li>
                                <li class="page-item pagination__item"><a class="page-link pagination__link " href="#">next</a></li>
                              </ul> --}}
                              {{$coures->links()}}
                            </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection