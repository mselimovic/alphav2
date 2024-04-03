@extends('layouts.guest')
<header class="mt-5 bg-request">
    <div class="p-5 text-center bg-body-tertiary">
        <h1 class="pt-5 text-uppercase text-light">{{ __('common.request') }}</h1>
    </div>
</header>
    <div class="bg-white container mb-5">
        <div class="alert alert-info mt-2" role="alert">
            <h4 class="alert-heading">{{__('common.requests_alert_heading')}}</h4>
            <p>{{__('common.requests_alert_content')}}</p>
            <hr>
            <p class="mb-0">{{__('common.requests_alert_faq_text')}}<a href="{{ route('pages.faq') }}" class="alert-link px-1">FAQ</a>{{__('common.requests_alert_faq_text2')}}</p>
          </div>
        <div class="col-12 row gx-0">
            <div class="col-md-12 col-12">
                <form>
                    <div>
                        <div class="col-12 d-flex row">
                            <div class="col-md-6">
                                <label for="full_name">@lang('common.full_name')</label>
                                <input type="text" class="form-control" id="full_name" placeholder="@lang('common.full_name')">
                            </div>
                            <div class="col-md-6 pt-md-0 pt-3">
                                <label for="email">@lang('common.email')</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="@lang('common.email')">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label for="company_name">@lang('common.company_name')</label>
                                <input type="text" class="form-control" id="company_name"
                                    placeholder="@lang('common.company_name')">
                            </div>
                            <div class="col-md-6 pt-3">
                                <label for="subject">@lang('common.subject')</label>
                                <input type="text" class="form-control" id="subject"
                                    placeholder="@lang('common.subject')">
                            </div>
                            <div class="pt-3">
                                <label for="message">@lang('common.message')</label>
                                <textarea type="text" class="form-control" id="message" rows="5" placeholder="@lang('common.message')"> </textarea>
                            </div>
                        </div>
                        <div class="form-check py-2 ">
                            <input class="form-check-input" type="checkbox" value="1" id="gdpr_rules"
                                name="gdpr_rules">
                            <label class="form-check-label" for="gdpr_rules">
                                @lang('common.gdpr_rules') <a href="{{ route('pages.privacy') }}">Datenschutzerklärung</a>
                            </label>
                            @error('gdpr_rules')
                                <span class="text-danger"
                                    style="position:relative; bottom: -1px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="py-3">
                            <button type="submit" class="btn btn-primary" id="sendButton"
                                disabled>@lang('common.send')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('custom-scripts')
        <script>
            function toggleSendButton() {
                var gdprCheckbox = document.getElementById('gdpr_rules');
                var sendButton = document.getElementById('sendButton');

                if (gdprCheckbox.checked) {
                    sendButton.removeAttribute('disabled');
                } else {
                    sendButton.setAttribute('disabled', 'disabled');
                }
            }
            var gdprCheckbox = document.getElementById('gdpr_rules');
            gdprCheckbox.addEventListener('change', toggleSendButton);
            toggleSendButton();
        </script>
    @endpush

