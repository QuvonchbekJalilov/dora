<x-layouts.admin>
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-Vertical card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Update Service</h6>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="card-body py-md-30">
                            <form action="{{ route('newService.update', ['newService' => $newService->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <!-- Title Fields -->
                                    <div class="col-md-6 mb-25">
                                        <label>Title (UZ):</label>
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_uz" value="{{ $newService->title_uz }}" placeholder="Title UZ">
                                    </div>
                                    <div class="col-md-6 mb-25">
                                        <label>Title (RU):</label>
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_ru" value="{{ $newService->title_ru }}" placeholder="Title RU">
                                    </div>
                                    <div class="col-md-6 mb-25">
                                        <label>Title (EN):</label>
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_en" value="{{ $newService->title_en }}" placeholder="Title EN">
                                    </div>
                                    <!-- Repeat for RU and EN title fields -->

                                    <!-- Description Fields -->
                                    <div class="card card-horizontal card-default card-md mb-4">
                                        <div class="card-header">
                                            <h6>Description (UZ)</h6>
                                        </div>
                                        <div class="card-body py-md-30">
                                            <div class="form-group formElement-editor mb-0">
                                                <textarea name="description_uz" id="description_uz" class="form-control-lg" placeholder="Type your message...">{{ $newService->description_uz }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-horizontal card-default card-md mb-4">
                                        <div class="card-header">
                                            <h6>Description (RU)</h6>
                                        </div>
                                        <div class="card-body py-md-30">
                                            <div class="form-group formElement-editor mb-0">
                                                <textarea name="description_ru" id="description_uz" class="form-control-lg" placeholder="Type your message...">{{ $newService->description_ru }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-horizontal card-default card-md mb-4">
                                        <div class="card-header">
                                            <h6>Description (EN)</h6>
                                        </div>
                                        <div class="card-body py-md-30">
                                            <div class="form-group formElement-editor mb-0">
                                                <textarea name="description_en" id="description_uz" class="form-control-lg" placeholder="Type your message...">{{ $newService->description_en }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Repeat for RU and EN description fields -->

                                    <!-- Price Field -->
                                    <div class="col-md-6 mb-25">
                                        <label>Price:</label>
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="price" value="{{ $newService->price }}" placeholder="Price">
                                    </div>

                                    <!-- Deadline Fields -->
                                    <div class="col-md-6 mb-25">
                                        <label>Deadline (UZ):</label>
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="deadline_uz" value="{{ $newService->deadline_uz }}" placeholder="Deadline UZ">
                                    </div>
                                    <div class="col-md-6 mb-25">
                                        <label>Deadline (RU):</label>
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="deadline_ru" value="{{ $newService->deadline_ru }}" placeholder="Deadline RU">
                                    </div>
                                    <div class="col-md-6 mb-25">
                                        <label>Deadline (EN):</label>
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="deadline_en" value="{{ $newService->deadline_en }}" placeholder="Deadline EN">
                                    </div>
                                    <!-- Repeat for RU and EN deadline fields -->

                                    <!-- Image Upload -->
                                    <div class="col-md-6 mb-25">
                                        <label>Image:</label>
                                        <img src="/storage/{{ $newService->image }}" alt="" style="width: 150px; height: 150px;">
                                    </div>
                                    <div class="dm-upload">
                                        <div class="dm-upload-avatar media-import dropzone-md-s">
                                            <p class="color-light mt-0 fs-14">Drop files here to upload</p>
                                        </div>
                                        <div class="avatar-up">
                                            <input type="file" name="image" class="upload-avatar-input">
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="col-md-6">
                                        <div class="layout-button mt-0">
                                            <a href="{{ route('newService.index') }}" class="btn btn-default btn-squared btn-light px-20">Cancel</a>
                                            <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ends: .card -->

                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
