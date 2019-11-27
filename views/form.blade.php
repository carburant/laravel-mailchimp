<div class="modal fade" id="mailchimp-form-modal" tabindex="-1" role="dialog" aria-labelledby="MailchimpModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form class="mailchimp-form" method="post" action="{{ route('mailchimp.subscribe') }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ trans('mailchimp::mailchimp.title') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="mailchimp-email">{{ trans('mailchimp::mailchimp.fields.email') }}</label>
                        <input type="email" class="form-control field-email" id="mailchimp-email" name="email"
                               aria-describedby="emailHelp" placeholder="">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input field-terms" id="mailchimp-terms"
                                   name="terms">
                            <label class="custom-control-label"
                                   for="mailchimp-terms">{{ trans('mailchimp::mailchimp.fields.terms') }}</label>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">{{ trans('mailchimp::mailchimp.submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="mailchimp-confirm-modal" tabindex="-1" role="dialog" aria-labelledby="MailchimpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('mailchimp::mailchimp.title') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="m-0">{{ trans('mailchimp::mailchimp.confirm') }}</p>
            </div>
        </div>
    </div>
</div>

@section('mailchimp.script')
    <script>
      $(function () {
        $('.mailchimp-form').on('submit', function (event) {
          event.preventDefault()
          var data = new FormData(event.currentTarget)
          $.ajax({
            url: event.currentTarget.action,
            type: event.currentTarget.method,
            data: data,
            processData: false,
            contentType: false
          }).done(function () {
            $('#mailchimp-form-modal').modal('hide');
            $('#mailchimp-confirm-modal').modal('show');
          }).fail(function (error) {
            $('input', event.currentTarget)
              .removeClass('is-invalid');
            if (error.responseJSON && error.responseJSON.errors) {
              var errors = error.responseJSON.errors
              for (var name in errors) {
                $('.field-' + name, event.currentTarget)
                  .addClass('is-invalid');
              }
            }
          })
        })
      })
    </script>
@endsection