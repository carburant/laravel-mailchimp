<?php

namespace Carburant\Mailchimp\Controllers;

use App\Http\Controllers\Controller;
use DrewM\MailChimp\MailChimp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MailchimpController extends Controller
{
    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'terms' => 'required'
        ], [
            'email.required' => trans('mailchimp::mailchimp.validators.email.required'),
            'email.email' => trans('mailchimp::mailchimp.validators.email.email'),
            'terms.required' => trans('mailchimp::mailchimp.validators.terms.required')
        ]);

        /**
         * @var $mailchimp MailChimp;
         */
        $mailchimp = app()->get('Mailchimp');

        //
        $currentLocale = substr(App::getLocale(), 0, 2);

        $result = $mailchimp->post(sprintf('lists/%s/members', config('mailchimp.list_id')), [
            'email_address' => strtolower($request->email),
            // https://mailchimp.com/en/help/view-and-edit-contact-languages/
            'language' => strtolower($currentLocale),
            'status' => 'subscribed',
            'merge_fields' => [
                'MMERGE5' => strtoupper($currentLocale)
            ]
        ]);

        $status = $result['status'] ?? -1;

        switch($status) {
            case 'subscribed':
                return response()
                    ->json(true);
                break;
            case 400:
                // Already subscribed
                break;
                //
            default:
                break;
        }

        return response()
            ->json(false);
    }
}
