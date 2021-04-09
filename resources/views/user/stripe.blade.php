@extends('user.layouts.index')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<section id="team" class="section-background bg-success">
  <div class="container">
    <h1>Striper</h1>
       <div class="row">
          <div class="col-md-6 col-sm-6">            
            <div class="panel panel-default credit-card-box">
              <div class="panel-heading display-table" >
                  <div class="row display-tr" >
                      <h3 class="panel-title display-td" >Payment Details</h3>                      
                  </div>                    
              </div>
              <div class="panel-body">

                  @if (Session::has('success'))
                      <div class="alert alert-success text-center">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                          <p>{{ Session::get('success') }}</p>
                      </div>
                  @endif

                  <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                                                   data-cc-on-file="false"
                                                  data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                  id="payment-form">
                      @csrf

                      <div class="form-row">
                        <div class="form-group"> <!-- Added -->

                            <label for="card-element">
                            Credit or debit card
                            </label>

                            <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display Element errors. -->
                            <div id="card-errors" role="alert"></div>

                        </div> <!-- Added -->
                    </div>

                      <div class="row">
                          <div class="col-xs-12">
                              <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>
                          </div>
                      </div>
                        
                  </form>
              </div>
          </div> 
          </div>            
      </div>
      </div>
       </div>
  </div>
</section>
<style>
  .bg-success{
    background: rgb(168, 130, 130);
  }
</style>
<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
  
<script type="text/javascript">
$(function() {

    var $form         = $(".require-validation");
    var stripe = Stripe($form.data('stripe-publishable-key'));
    var elements = stripe.elements();
    var cardElement = elements.create('card'); 
    // var cardNumber = elements.create('cardNumber');
    // cardNumber.mount('#cardNumber') 
    // var cardExpiry = elements.create('cardExpiry');
    // cardExpiry.mount('#cardExpiry')
    // var cardCvc  = elements.create('cardCvc');
    // cardCvc.mount('#cardCvc')  
    cardElement.mount('#card-element');
    $('.btn-block').click(function(e){
        e.preventDefault();
        createToken();     
    });  

    function createToken() {
        stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            $form.append("<input type='hidden' name='stripeToken' value='" + result.token.id + "'/>");
            $form.get(0).submit();
        }
    });
};
  
});
</script>
@endsection