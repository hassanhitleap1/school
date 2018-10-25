@extends('layouts.main')
@section('content')
<div class="row">
   <div class="sc-contact-page">
      <div class="container">
         <div class="contact-page__wrapper">
            <div class="cotact-page__box">
               <div class="row">
                  <div class="col-md-10">
                     <div class="contact-page__box__left">
                        <div class="contact-header-l">
                           <div class="instructor-info__wapper">
                                <img class="partner-header__image" src="{{asset('/educef/assets/img/instructor-details/intructordetails.png')}}"/>
                           </div>
                        </div>
                        <div class="contact-form-l">
                           <form class="contact-form" action="#">
                              <div class="contact-form__group-name">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label class="sr-only" for="name"></label>
                                          <input class="form-control" type="text" value="{{\Auth::user()->name}}" id="name" name="name">
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label class="sr-only" for="phone"></label>
                                          <input class="form-control" type="text" placeholder="Phone Number" id="phone" name="phone">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="contact-form__group-contact">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label class="sr-only" for="email"></label>
                                          <input class="form-control" type="email" value="{{\Auth::user()->email}}" id="email">
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label class="sr-only" for="image"></label>
                                          <i class="glyph-icon flaticon-file nav-right__item__icon"></i>
                                          <input class="form-control" type="file" placeholder="upload new image " id="image">
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button class="btn button-normal-02 contact-form__button" type="submit">Upadte</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection