@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Shipment</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Shipment [{{ $shipment->shipment_number }}] Detail</h3>
                </div>
                <div class="block-content">
                    <h3> Sender Info</h3>
                    <table class="table" >
                        <tr>
                            <th>Sender Name:</th>
                            <td>{{ $shipment->sender_name }}</td>
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
                    <table class="table" >
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
                    <table class="table" >
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
                            <th>Receiver Address:</th>
                            <td>{{ $shipment->rec_address }}</td>
                        </tr>
                    </table>

                </div>

            </div>
            <!-- END Elements -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
