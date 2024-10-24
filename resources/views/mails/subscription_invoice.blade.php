<html>

<body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
  <table style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px #0e408c;">
    <thead>
      <tr>
        <th style="text-align:left;"><img style="max-width: 150px;" src="https://carelite.app/assets/img/logo/Carelite-logo-small.png" alt="bachana tours"></th>
        <th style="text-align:right;font-weight:400;"> {{$subscription->created_at->format('dS M, Y')}} </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="height:35px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="border: solid 1px #ddd; padding:10px 20px;">
          <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Order status</span><b style="color:green;font-weight:normal;margin:0">Success</b></p>
          <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span> {{$subscription->id}}</p>
          <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span>  {{$subscription->amount}} EGP</p>
        </td>
      </tr>
      <tr>
        <td style="height:35px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="border: solid 1px #ddd; padding:10px 20px;">
           <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px"> Name </span>  {{$user->account_name?? '' }} </p>
           <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px"> Email</span> {{$user->email }}  </p>
           <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px"> Phone</span> {{$user->phone }}  </p>
           <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px"> Duration</span> {{$subscription->start_date}} to {{$subscription->end_date}} (365 Days) </p>
          </td>
      </tr>
 
      <tr>
        <td colspan="2" style="font-size:20px;padding:30px 15px 0 15px;">Items</td>
      </tr>
      <tr>
        <td colspan="2" style="padding:15px;">
          <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
            <span style="display:block;font-size:13px;font-weight:normal;"> {{ $user->customerPackage->package_name_en }}  </span> {{$subscription->amount}} EGP <b style="font-size:12px;font-weight:300;"> /person/Annual</b>
          </p>
             </td>
      </tr>
    </tbody>
    <tfooter>
      <tr>
        <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
          <strong style="display:block;margin:0 0 10px 0;">Regards</strong> CareLite <br> ...... <br><br>
          <b>Phone:</b> 03552-222011<br>
          <b>Email:</b> support@carelite.app
        </td>
      </tr>
    </tfooter>
  </table>
</body>

</html>