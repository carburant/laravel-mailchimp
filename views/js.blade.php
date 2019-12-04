<script>
    $(function () {
        function removeErrors(event, reset) {
            var $inputs = $('input', event.currentTarget);
            $inputs.removeClass('is-invalid');
            $parents = $('input', event.currentTarget).parents('.form-group');
            $parents.removeClass('has-danger');
            $parents.find('.error-feedback').removeClass('d-block');
            if(reset) {
                $inputs.not('[type="hidden"]').prop('checked', false).val("");
            }
        }
        $('.js-mailchimp-form').on('submit', function (event) {
            event.preventDefault()
            var data = new FormData(event.currentTarget);
            $.ajax({
                url: event.currentTarget.action,
                type: event.currentTarget.method,
                data: data,
                processData: false,
                contentType: false
            }).done(function () {
                $('#mailchimp-form-modal').modal('hide');
                $('#mailchimp-confirm-modal').modal('show');
                removeErrors(event, true);
            }).fail(function (error) {
                removeErrors(event);
                if (error.responseJSON) {
                    var errors = error.responseJSON.errors || error.responseJSON;
                    for (var name in errors) {
                        var $field = $('.field-' + name, event.currentTarget);
                        var $parent = $field.parents('.form-group');
                        $parent.find('.error-feedback').addClass('d-block').html(errors[name]);
                        $parent.addClass('has-danger');
                        $field.addClass('is-invalid');
                    }
                }
            });
        });
    });
</script>