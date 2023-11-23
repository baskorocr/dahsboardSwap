@extends("admin.app")

@section("content")

<div class="page-breadcrumb">
            
                <div class="row align-items-center">
                    <div class="col-6">
                        <h1 class="mb-0 fw-bold">Status</h1> 
                    </div>
                </div>
</div>
<div class="container">


<div class="row ">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card " style="height: 500px">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">Machine</h4>
                                        <h5 class="card-subtitle">Status Of Machine</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dl">
                                            <select class="form-select shadow-none">
                                                <option value="0" selected>Monthly</option>
                                                <option value="1">Daily</option>
                                                <option value="2">Weekly</option>
                                                <option value="3">Yearly</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover align-middle text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">ID Machine</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Error</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a
                                                                class="btn btn-circle d-flex btn-info text-white">EA</a>
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Single Use</td>
                                                <td>John Doe</td>
                                                
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
            



@endsection