<x-layouts.admin>
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Service Table</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin-2')}}"><i class="uil uil-estate"></i>Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-30">
                    <div class="support-ticket-system support-ticket-system--search">

                        <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                                    <h4 class="text-capitalize fw-500 breadcrumb-title">Services</h4>
                                </div>
                            </div>
                            <div class="action-btn">
                                <a href="{{ route('newService.create') }}" class="btn btn-primary">
                                    Create Service
                                    <i class="las la-angle-down"></i>
                                </a>
                            </div>
                        </div>


                        <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <span class="userDatatable-title">ID</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Title UZ</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Title RU</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Title EN</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Description UZ</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Description RU</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Description En</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Price</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">image</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Deadline UZ</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Deadline RU</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Deadline EN</span>
                                            </th>
                                            <th class="actions">
                                                <span class="userDatatable-title">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $service)
                                        <tr>
                                            <td>#0{{ $number++ }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            <h6>{{ $service->title_uz}}</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content--subject">
                                                    {{$service->title_ru}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content--subject">
                                                    {{$service->title_en }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content--priority">
                                                    {{$service->description_uz }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content--priority">
                                                    {{$service->description_ru }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content--priority">
                                                    {{$service->description_en }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content--priority">
                                                    {{$service->price }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content--priority">
                                                    <img src="/storage/{{ $service->image }}" width="50" height="50" alt="">

                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content--priority">
                                                    {{$service->deadline_uz }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content--priority">
                                                    {{$service->deadline_ru }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content--priority">
                                                    {{$service->deadline_en }}
                                                </div>
                                            </td>

                                            <td>
                                                <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                    <li>
                                                        <a href="{{ route('newService.show', $service->id) }}" class="view">
                                                            <i class="uil uil-setting"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('newService.edit', $service->id) }}" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form method="post" action="{{ route('newService.destroy', ['newService' => $service->id])}}" onsubmit="return confirm('Are you sure you wish to delete?');">
                                                            @method("DELETE")
                                                            @csrf
                                                            <button type="submit" class="remove"> <!-- Add the btn class and btn-sm class -->
                                                                <i class="uil uil-trash-alt"></i> <!-- Icon -->
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end pt-30">

                                <nav class="dm-page ">
                                    <ul class="dm-pagination d-flex">
                                        {{ $services->links()}}
                                    
                                    </ul>
                                </nav>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <footer class="footer-wrapper">
        <div class="footer-wrapper__inside">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            <p><span>© 2023</span><a href="#">Sovware</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-menu text-end">
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Team</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- ends: .Footer Menu -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </main>
    <div id="overlayer">
        <div class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </div>
    </div>
</x-layouts.admin>