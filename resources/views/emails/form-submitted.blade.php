<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>{{ __('lang.title') }}</title>
        <style></style>
    </head>
    <body>
        
<table border="0" style="background-color: #E68992; color: white;" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
    <tr>
        <td align="center" valign="top">
            <table border="0" cellpadding="20" cellspacing="0" width="600" id="emailContainer">
                <tr>
                    <td align="center" valign="top">
                        <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailHeader">
                            <tr>
                                <td align="center" style="font-size: 64px;" valign="top">
                                    Poppy's Balloons 
                                    <br>
                                </td>
                                <td align="center" style="font-size: 32px;" valign="top">
                                    {{ "$firstName $lastName has sent you a message" }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <hr>
                <tr>
                    <td align="center" valign="top">
                        <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailBody">
                            <tr>
                                <td align="center" style="font-size: 32px;" valign="top">
                                    {{$title}}: 
                                </td>
                                <td align="center" style="font-size: 18px;" valign="top">
                                    {{ $content }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailFooter">
                            <tr>
                                <td style="font-size: 32px;" align="center" valign="top">
                                    Their email is: {{ $emailFrom }} 
                                </td>
                                <br>
                                <td style="font-size: 32px;" align="center" valign="top">
                                    Their phone number is: 
                                    <br>
                                    <a href="tel:{{ $phone }}">{{ $phone }}</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
    </body>
</html>



    </body>
</html>
