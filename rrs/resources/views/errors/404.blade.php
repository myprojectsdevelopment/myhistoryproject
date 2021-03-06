@extends('baselayout.common_page_base')
@section ('content')
<div class="content">
      <div class="content__padded">
        <div class="thankyou__page exception_page">
          <div>
            <h3 class="thankyou_title">Page not found</h3>
            <h5 class="page_title title_404">Sorry,<br>We are sorry but the page you are looking does not exist.</h5>
          </div>
          <div class="block__icons_cover error">
            <i class="icons_404">&nbsp;</i>
          </div>
          <div class="btn_home">
            <a href="/" class="btn btn-block btn__regular long">Return to Home</a>
            <a href="{{ URL::previous() }}" class="btn btn-block btn__regular long">Go to Previous Page</a>
          </div>
          <br>
        </div>
      </div>
@stop