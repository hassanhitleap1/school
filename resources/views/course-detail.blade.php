@extends('layouts.main')

@section('content')
<div class="sc-course-detail-page">
    <div class="banner-course-detail">
      <div class="banner-top">
        <div class="container">
          <div class="banner-top__text">
            <h2 class="title-text">{{$course->name}}</h2>
            <button class="btn button-default" type="button">buy Now</button>
          </div>
          <div class="banner-top__video">
            <video class="video" id="video" loop muted poster="{{asset('educef/assets/img/courses-image/2.jpg')}}" width="830" height="488">
              <source src="https://player.vimeo.com/external/158148793.hd.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&amp;profile_id=119&amp;oauth2_token_id=57447761" type="video/mp4">
            </video>
            <button class="btn btn-play btn--cirlcle-bg-white"><span class="flaticon-arrows-6 icon-custom icon-video-banner"></span></button>
          </div>
        </div>
      </div>
      <div class="banner-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <div class="banner-bottom__text-group">
                <div class="banner-bottom__text-group__item">
                  <h4 class="title-text">{{$course->name}}</h4>
                  <p class="content-text">{{$course->description}}</p>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="banner-bottom__table">
                <div class="banner-bottom__table__cell">
                  <h4 class="text-main text-white-bold hd">TIME</h4>
                  <p class="text-main text-white-bold hd-sub">3-month term program</p>
                  <p class="text-main text-white-content">Study 10 hrs/week and complete in 3 mo.</p>
                </div>
                <div class="banner-bottom__table__cell">
                  <h4 class="text-main text-white-bold hd">Course taacher</h4>
                  <p class="text-main text-white-bold hd-sub">{{$course->teacher->name}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  @endsection