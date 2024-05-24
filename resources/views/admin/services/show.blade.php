<x-layouts.admin>
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-Vertical card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Service Details</h6>
                        </div>
                        <div class="card-body py-md-30">
                            <div class="row">
                                <!-- Title Fields -->
                                <div class="col-md-6 mb-25">
                                    <h5>Title (UZ): {{ $service->title_uz }}</h5>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <h5>Title (RU): {{ $service->title_ru }}</h5>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <h5>Title (EN): {{ $service->title_en }}</h5>
                                </div>

                                <!-- Image -->
                                <div class="col-md-6 mb-25">
                                    <img src="/storage/{{ $service->image }}" alt="Service Image" style="width: 200px; height: 200px;">
                                </div>

                                <!-- Description Fields -->
                                <div class="col-md-12 mb-25">
                                    <h5>Description (UZ):</h5>
                                    <p>{{ $service->description_uz }}</p>
                                </div>
                                <div class="col-md-12 mb-25">
                                    <h5>Description (RU):</h5>
                                    <p>{{ $service->description_ru }}</p>
                                </div>
                                <div class="col-md-12 mb-25">
                                    <h5>Description (EN):</h5>
                                    <p>{{ $service->description_en }}</p>
                                </div>

                                <!-- Price Field -->
                                <div class="col-md-6 mb-25">
                                    <h5>Price: {{ $service->price }}</h5>
                                </div>

                                <!-- Deadline Fields -->
                                <div class="col-md-6 mb-25">
                                    <h5>Deadline (UZ): {{ $service->deadline_uz }}</h5>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <h5>Deadline (RU): {{ $service->deadline_ru }}</h5>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <h5>Deadline (EN): {{ $service->deadline_en }}</h5>
                                </div>

                                <!-- Created At -->
                                <div class="col-md-6 mb-25">
                                    <h5>Created At: {{ $service->created_at }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ends: .card -->
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
