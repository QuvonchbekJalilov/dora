<x-layouts.admin>
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-Vertical card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Create Service</h6>
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
                            <form action="{{ route('newService.store')}}" Method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-25">
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_uz" placeholder="Title UZ">
                                    </div>
                                    <div class="col-md-6 mb-25">
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_ru" placeholder="Title RU">
                                    </div>
                                    <div class="col-md-6 mb-25">
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_en" placeholder="Title EN">
                                    </div>
                                    <div class="card card-horizontal card-default card-md mb-4">
                                        <div class="card-header">
                                            <h6>Description UZ</h6>
                                        </div>
                                        <div class="card-body py-md-30">
                                            <div class="form-group formElement-editor mb-0">
                                                <textarea name="description_uz" id="mail-reply-message2" class="form-control-lg" placeholder="Type your message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-horizontal card-default card-md mb-4">
                                        <div class="card-header">
                                            <h6>Description RU</h6>
                                        </div>
                                        <div class="card-body py-md-30">
                                            <div class="form-group formElement-editor mb-0">
                                                <textarea name="description_ru" id="mail-reply-message2" class="form-control-lg" placeholder="Type your message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-horizontal card-default card-md mb-4">
                                        <div class="card-header">
                                            <h6>Description EN</h6>
                                        </div>
                                        <div class="card-body py-md-30">
                                            <div class="form-group formElement-editor mb-0">
                                                <textarea name="description_en" id="mail-reply-message2" class="form-control-lg" placeholder="Type your message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-25">
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="price" placeholder="Price">
                                    </div>
                                    <div class="col-md-6 mb-25">
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="deadline_uz" name="deadline_uz" placeholder="Deadline UZ">
                                    </div>
                                    <div class="col-md-6 mb-25">
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="deadline_ru" name="deadline_ru" placeholder="Deadline RU">
                                    </div>
                                    <div class="col-md-6 mb-25">
                                        <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="deadline_en" name="deadline_en" placeholder="Deadline EN">
                                    </div>
                                    <div class="dm-upload">
                                        <div class="dm-upload-avatar media-import dropzone-md-s">
                                            <p class="color-light mt-0 fs-14">Drop files here to upload</p>
                                        </div>
                                        <div class="avatar-up">
                                            <input type="file" name="image" class="upload-avatar-input">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="layout-button mt-0">
                                            <a href="{{ route('newService.index')}}" class="btn btn-default btn-squared btn-light px-20 ">cancel</a>
                                            <button type="submit" class="btn btn-primary btn-default btn-squared px-30">save</button>
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