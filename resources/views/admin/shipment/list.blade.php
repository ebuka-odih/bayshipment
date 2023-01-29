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
                    <h3 class="block-title">All Shipment</h3>
                </div>
                <div class="block-content">
                    <table class="table table-vcenter">
                        <thead>
                        <tr class="table-dark">
                            <th class="text-center" style="width: 200px;">Date</th>
                            <th>Shipment Code</th>
                            <th class="fw-semibold" style="width: 15%;">Sender</th>
                            <th class="fw-semibold text-center " style="width: 100px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shipment as $item)
                        <tr>
                            <th class="text-center" scope="row">{{ date('Y-M-d', strtotime($item->created_at)) }}</th>
                            <td class="fw-semibold">
                                <a href="">{{ $item->shipmentCode() }}</a>
                            </td>
                            <td class="fw-semibold">
                                <strong>{{ $item->sender_name }}</strong>
                            </td>
                            <td class="text-center fw-semibold">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- END Elements -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection