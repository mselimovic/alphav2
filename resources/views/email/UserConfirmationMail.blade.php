<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            background-color: #121212;
            font-family: 'Open Sans', sans-serif;
            color: #ffffff;
        }
        a:hover {
            text-decoration: underline !important;
        }
        .email-container {
            max-width: 670px;
            margin: 0 auto;
            background-color: #1e1e1e;
            border-radius: 3px;
            text-align: center;
            box-shadow: 0 6px 18px 0 rgba(0,0,0,.06);
            overflow: hidden;
        }
        .email-header {
            padding: 20px;
        }
        .email-header img {
            max-width: 150px;
        }
        .email-body {
            padding: 0 35px;
        }
        .divider {
            display: inline-block;
            margin: 29px 0 26px;
            border-bottom: 1px solid #cecece;
            width: 100px;
        }
        .email-footer {
            padding: 20px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.7);
        }
        .contact-info {
            margin-top: 1rem;
            font-family: "Lucida Grande", Tahoma;
            font-size: 12px;
            color: #ffffff;
            letter-spacing: 2px;
            border-left: 2px solid #d3d8d7;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#121212">
        <tr>
            <td align="center">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="email-container">
                                <div class="email-header">
                                    <img src="{{ asset('img/logo-alpha-04.png') }}" alt="Alpha Car Detail Logo">
                                </div>
                                <div class="email-body">
                                    <h1 style="color:#ffffff; font-weight:500; font-size:32px;">{{ __('common.dear_user', ['name' => $formData['full_name']]) }}</h1>
                                    <span class="divider"></span>
                                    <p style="color:#ffffff; font-size:15px; line-height:24px;">{{ __('common.thank_you_submission') }}</p>
                                    <p style="color:#ffffff; font-size:15px; line-height:24px;">{{ __('common.team_reviewing') }}</p>
                                    <div class="contact-info">
                                        <p>Alpha Car Detail</p>
                                        <p>+49 1575 7838320</p>
                                        <p><a href="https://www.alphacardetail.com/" style="color:#ffffff; text-decoration:none;" target="_blank">www.alphacardetail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="center">
                            <p style="font-size:14px; color:rgba(255, 255, 255, 0.7);">© <strong>www.alphacardetail.com</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
