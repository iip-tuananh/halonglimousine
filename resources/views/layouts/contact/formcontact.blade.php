<form action="{{route('postcontact')}}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
   @csrf

   <div class="input-filled"><span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ tên" /></span></div>
   <div class="input-filled"></i><span class="wpcf7-form-control-wrap your-phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Điện thoại" /></span></div>
   <div class="input-filled"></i><span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" /></span></div>
   <div class="input-filled"></i><span class="wpcf7-form-control-wrap your-message"><input type="text" name="mess" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Yêu cầu tư vấn" /></span></div>
   <div class="input-filled"><button type="submit" class="wpcf7-submit btn btn-secondary btn-block btn-animate"><span>GỬI ĐI</span></button></div>
   <div class="wpcf7-response-output" aria-hidden="true"></div>
</form>