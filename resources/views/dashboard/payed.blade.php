@extends('dashboard_layouts.app')


@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">MANAGE MEMBERS</h1>
    
</div>

   
    
<!-- DATA TABLE -->     
  
<div class="table-responsive">

<table   class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead class="table-dark">
<tr>
<th>#</th>
<th>FULLNAME</th>
<th>Email</th>
<th>Phone number</th>
<th>Amount</th>
<th>Status</th>
<th>Time</th>

</tr>
</thead>


<tbody class="table table-striped table-hover ">

  <?php $i=1;  ?>
@if(count($payeds)>0)
    
   @foreach ($payeds as $payed)
   <tr>
    <td><?php echo $i++ ?></td>
    <td>{{$payed->buyer_name}}</td>
    <td>{{$payed->buyer_email}}</td>
    <td>{{$payed->buyer_phone}}</td>
    <td>{{$payed->amount}}</td>
     <td>
         
<?php
$endpointUrl = "https://api.zeno.africa/order-status";

// Order ID that you want to check the status for
$order_id = "66d5e374ccaab";

// Data to be sent in the POST request
$postData = [
    'check_status' => 1,
    'order_id' => $payed->order_id,
    'api_key' => 'zp75686',
    'secret_key' => null,
];

// Initialize cURL
$ch = curl_init($endpointUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
curl_setopt($ch, CURLOPT_POST, true); // Send as POST request
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData)); // Add POST fields

// Execute the request and get the response
$response = curl_exec($ch);


// Check for cURL errors

if (curl_errno($ch)) {
    echo json_encode([
        "status" => "error",
        "message" => 'cURL error: ' . curl_error($ch)
    ]);
} else {
    // Decode the JSON response
    $responseData = json_decode($response, true);

    // Format the response to match the desired structure
    if ($responseData['status'] === 'success') {
        /* echo json_encode([

            "status" => "success",
            "order_id" => $responseData['order_id'],
            "message" => $responseData['message'],
            "payment_status" => $responseData['payment_status']
        ]); */
        echo $responseData['payment_status'];

    } else {
        echo json_encode([
            "status" => "error",
            "message" => $responseData['message']
        ]);
    }
}

// Close cURL session
curl_close($ch);
?>





     </td>
      <td>{{$payed->created_at}}</td>
   
    </tr> 
   @endforeach
@else 

  
  @endif



</tbody>
</table>
</div>   


@endsection


