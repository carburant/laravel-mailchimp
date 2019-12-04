<div class="modal fade" id="mailchimp-form-modal" tabindex="-1" role="dialog" aria-labelledby="MailchimpModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form class="mailchimp-form" method="post" action="{{ route('mailchimp.subscribe') }}">
                {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ trans('mailchimp::mailchimp.title') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="mailchimp-email">{{ trans('mailchimp::mailchimp.fields.email') }}</label>
                        <input type="email" class="form-control field-email" id="mailchimp-email" name="email" aria-describedby="emailHelp" placeholder="">
                        <div class="error-feedback d-none text-danger"></div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input field-terms" id="mailchimp-terms" name="terms">
                            <label class="custom-control-label" for="mailchimp-terms">{{ trans('mailchimp::mailchimp.fields.terms') }}</label>
                        </div>
                        <div class="error-feedback d-none text-danger"></div>
                    </div>
                    {{--
                    <!-- Bootstrap 3 -->
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input field-terms" id="mailchimp-terms" name="terms">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">{{ trans('mailchimp::mailchimp.fields.terms') }}</span>
                        </label>
                        <div class="error-feedback d-none text-danger"></div>
                    </div>
                    --}}
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
    @include('mailchimp::js')
@endsection