<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>{{ __('Export :attribute',['attribute'=>__('Subscription Trasnactions')]) }}</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 5rem;
        }
        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>{{ __('Transactoin ID') }}</th>
                        <th>{{ __('Customer') }}</th>
                    
                          <th>{{__('package') }}</th>
                          <th>{{__('type') }}</th>
                          <th>{{__('payment method') }}</th>
                          <th>{{__('payment transaction id') }}</th>
                          <th>{{__('status') }}</th>
                          <th>{{__('start_date') }}</th>
                          <th>{{__('end_date') }}</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subscription_transaction as $transaction)
                        <tr>
                            <td scope="row">{{ $transaction->id }}</td>
                            <td scope="row">{{   \App\Models\CustomerList::where('id', $transaction->customer_list_id)->first()->account_name ?? ' '}}</td>
                           <td scope="row">{{  $transaction->customer->customerPackage->package_name_en ?? " " }}</td>
                           <td scope="row">{{  $transaction->customer->customerType->type_name_en ?? " "}}</td>
                           <td scope="row">{{  $transaction->payment_method}}</td>
                           <td scope="row">{{  $transaction->payment_transaction_id}}</td>
                           <td scope="row">{{  $transaction->status}}</td>
                           <td scope="row">{{  $transaction->start_date}}</td>
                           <td scope="row">{{  $transaction->end_date}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!-- /.container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
<!-- Holder.js for placeholder images -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
</body>
</html>