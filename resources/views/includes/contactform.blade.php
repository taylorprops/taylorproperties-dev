<!-- Contact -->
<div class="row">
  <div class="col-lg-12">
    {!! Form::open(['action' => ['ContactController@store'],'method' => 'POST','id'=>'contactForm', 'name'=>'sentMessage']) !!}
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          {{Form::text('name','',['id'=>'name', 'class'=>'form-control','placeholder'=>'Your Name *','required'=>'required','data-validation-required-message'=>'Please enter your name.'])}}
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group">
          {{Form::email('email','',['id'=>'email', 'class'=>'form-control','placeholder'=>'Your Email *','required'=>'required','data-validation-required-message'=>'Please enter your name.'])}}
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group">
          {{Form::tel('phone','',['id'=>'phone', 'class'=>'form-control','placeholder'=>'Your Phone *','required'=>'required','data-validation-required-message'=>'Please enter your phone number.'])}}
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          {{Form::textarea('body','',['id'=>'body', 'class'=>'form-control','placeholder'=>'Your Message *','required'=>'required','data-validation-required-message'=>'Please enter your message.','rows'=>'5'])}}
          <p class="help-block text-danger"></p>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12 text-center">
      <div id="success"></div>
      {{Form::submit('Send Message',['id'=>'sendMessageButton','class'=>'btn btn-primary btn-xl'])}}
    </div>
    {!! Form::close() !!}
  </div>
</div>
