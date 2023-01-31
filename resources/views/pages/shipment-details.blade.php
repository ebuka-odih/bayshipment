@extends('pages.layout.app')
@section('content')

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<br><br>
<div class="container">
    <h3> Sender Info</h3>
    <table class="table table-striped" >
        <tr>
            <th>Sender Name:</th>
            <td>{{ optional($shipment)->sender_name }}</td>
        </tr>
        <tr>
            <th>Sender Email:</th>
            <td>{{ $shipment->sender_email }}</td>
        </tr>
        <tr>
            <th>Sender Phone:</th>
            <td>{{ $shipment->sender_phone }}</td>
        </tr>
        <tr>
            <th>Sender Address:</th>
            <td>{{ $shipment->sender_address }}</td>
        </tr>
    </table>
    <br>
    <h3> Receiver Info</h3>
    <table class="table table-striped" >
        <tr>
            <th>Receiver Name:</th>
            <td>{{ $shipment->rec_name }}</td>
        </tr>
        <tr>
            <th>Receiver Email:</th>
            <td>{{ $shipment->rec_email }}</td>
        </tr>
        <tr>
            <th>Receiver Phone:</th>
            <td>{{ $shipment->rec_phone }}</td>
        </tr>
        <tr>
            <th>Receiver Address:</th>
            <td>{{ $shipment->rec_address }}</td>
        </tr>
    </table>
    <h3> Shipment Info</h3>
    <table class="table table-striped" >
        <tr>
            <th>Shipment Type:</th>
            <td>{{ $shipment->type }}</td>
        </tr>
        <tr>
            <th>Courier:</th>
            <td>{{ $shipment->courier }}</td>
        </tr>
        <tr>
            <th>Shipment Mode:</th>
            <td>{{ $shipment->mode }}</td>
        </tr>
        <tr>
            <th>Quantity:</th>
            <td>{{ $shipment->quantity }}</td>
        </tr>
        <tr>
            <th>Total Freight:</th>
            <td>{{ $shipment->total_freight }}</td>
        </tr>
        <tr>
            <th>Carrier No:</th>
            <td>{{ $shipment->carrier_no }}</td>
        </tr>
        <tr>
            <th>Origin:</th>
            <td>{{ $shipment->origin }}</td>
        </tr>
        <tr>
            <th>Pickup Date:</th>
            <td>{{ $shipment->pickup_date }}</td>
        </tr>
        <tr>
            <th>Expected Delivery Date:</th>
            <td>{{ $shipment->expected_date }}</td>
        </tr>
        <tr>
            <th>Weight:</th>
            <td>{{ $shipment->weight }}</td>
        </tr>
        <tr>
            <th>Package:</th>
            <td>{{ $shipment->package }}</td>
        </tr>
        <tr>
            <th>Product:</th>
            <td>{{ $shipment->product }}</td>
        </tr>
        <tr>
            <th>Payment Mode:</th>
            <td>{{ $shipment->payment_mode }}</td>
        </tr>
        <tr>
            <th>Carrier:</th>
            <td>{{ $shipment->carrier }}</td>
        </tr>
        <tr>
            <th>Departure Time:</th>
            <td>{{ $shipment->departure_time }}</td>
        </tr>
        <tr>
            <th>Destination:</th>
            <td>{{ $shipment->destination }}</td>
        </tr>
        <tr>
            <th>Pickup Date:</th>
            <td>{{ $shipment->pickup_time }}</td>
        </tr>
        <tr>
            <th>Comment:</th>
            <td>{{ $shipment->comment }}</td>
        </tr>
    </table>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

@endsection
