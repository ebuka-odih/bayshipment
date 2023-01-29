@extends('admin.layout.app')
@section('content')

<main id="main-container">

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Add Shipment</h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Create Shipment</h3>
            </div>
            <div class="block-content">
                <!-- Form Inline - Default Style -->
                <form action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                    <div class="block-header block-header-default">
                        <h3 class="block-title text-center text-primary">Sender Information</h3>
                    </div>

                    <div class="row mb-3">
                       <div class="col-6">
                           <label class="" for="example-if-email">Sender Name</label>
                           <input type="text" class="form-control" id="example-if-email" name="example-if-email">
                       </div>
                       <div class="col-6">
                           <label class="" for="example-if-password">Sender Email</label>
                           <input type="email" class="form-control" id="example-if-password" name="example-if-password" >
                       </div>
                   </div>
                    <div class="row mb-3">
                       <div class="col-6">
                           <label class="" for="example-if-email">Sender Phone</label>
                           <input type="text" class="form-control" id="example-if-email" name="example-if-email" >
                       </div>
                       <div class="col-6">
                           <label class="" for="example-if-password">Sender Address</label>
                           <input type="text" class="form-control" id="example-if-password" name="example-if-password" >
                       </div>
                   </div>
                    <div class="block-header block-header-default">
                        <h3 class="block-title text-center text-primary">Receiver Information</h3>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="" for="example-if-email">Receiver Name</label>
                            <input type="text" class="form-control" id="example-if-email" name="example-if-email" >
                        </div>
                        <div class="col-6">
                            <label class="" for="example-if-password">Receiver Email</label>
                            <input type="text" class="form-control" id="example-if-password" name="example-if-password" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="" for="example-if-email">Receiver Phone</label>
                            <input type="text" class="form-control" id="example-if-email" name="example-if-email" >
                        </div>
                        <div class="col-6">
                            <label class="" for="example-if-password">Receiver Address</label>
                            <input type="text" class="form-control" id="example-if-password" name="example-if-password" >
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="block-header block-header-default">
                        <h3 class="block-title text-center text-primary">Shipment Information</h3>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <!-- END Form Inline - Default Style -->
                <br>
            </div>

        </div>
        <!-- END Elements -->
    </div>
    <!-- END Page Content -->
</main>

@endsection
