<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>{{ $title }}</title>
</head>
<body style="margin: 0 !important; padding: 0; !important background-color: #ffffff;" bgcolor="#ffffff">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td align="center" valign="top" width="100%" bgcolor="#102040" style="background: #102040; background-size: cover; padding: 50px 15px;" class="mobile-padding">
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
        <tr>
          <td data-slot-container align="center" valign="top" style="padding: 0; font-family: Open Sans, Helvetica, Arial, sans-serif;">
            <div data-slot="text">
              <h1 style="font-size: 40px; color: #ffffff; margin-top: 0px; margin-bottom: 5px">{{ $joke }}</h1>
            </div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
