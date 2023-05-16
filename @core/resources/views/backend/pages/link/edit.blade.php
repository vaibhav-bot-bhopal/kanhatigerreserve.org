@extends('backend.admin-master')

@section('site-title')
    {{ __('Important Documents Page') }}
@endsection

@push('css')
    <style>
        .website-url {
            display: none
        }
    </style>
@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- form start -->
                <form action="{{ route('admin.link.update', $links->id) }}" method="POST" enctype="multipart/form-data"
                    class="form-horizontal">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="margin-top-40"></div>
                            <x-error-msg />
                            <x-flash-msg />
                        </div>
                        <!-- column -->
                        <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                            <!-- Horizontal Form -->
                            <div class="card card-info mt-5 mb-5">
                                <div class="card-header bg-dark text-white">
                                    <h3 class="card-title mb-0">EDIT IMPORTANT DOCUMENT</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pb-3">
                                    <div class="form-group">
                                        <label for="inputTitle" class="col-form-label">{{ __('Title') }}</label>

                                        <input type="title" class="form-control" id="title" name="title"
                                            value="{{ $links->title }}" placeholder="{{ __('Enter Title') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Select Categories</label>
                                        <select name="categories[]" id="category"
                                            class="form-control {{ $errors->any() && $errors->first('categories') ? 'is-invalid' : '' }}">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- @if ($links->original_filename)
                                        <div class="file-group">
                                            <div class="form-group">
                                                <label>Choose File</label>
                                                <input type="file" class="form-control-file col-12 pl-0" name="file">
                                            </div>
                                        </div>
                                    @endif --}}

                                    {{-- <div class="file-group">
                                        <div class="form-group">
                                            <label hidden>Old File</label>
                                            <input type="file" class="form-control-file col-12 pl-0" id="oldfile"
                                                name="oldfile" value="{{ $links->original_filename }}">
                                        </div>
                                    </div> --}}

                                    @if ($links->url)
                                        <div class="form-group url mb-0">
                                            <label for="url">Do you have a Website URL?</label>
                                            <input id="url" type="checkbox" name="url" value="1" />
                                        </div>
                                    @endif

                                    <div class="form-group website-url">
                                        <label for="inputUrl" class="col-form-label">{{ __('Normal URL') }}</label>

                                        <input type="url" class="form-control" id="customurl" name="customurl"
                                            value="{{ $links->url }}" placeholder="{{ __('https://www.example.com') }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer bg-dark">
                                    <button type="submit" class="btn btn-success float-left"><i
                                            class="nav-icon fas fa-upload" style="margin-right: 8px;"></i>UPDATE</button>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col -->
                    </div>
                    <!-- /.row -->
                </form>
                <!-- /.form end-->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $("#url").prop('checked', true);

            if ($('#url').is(':checked') == true) {
                $(".website-url").toggle(this.checked);
                $(".file-group").toggle(this.unchecked);
            }
        });

        $(function() {
            $("#url").on("click", function() {
                $(".website-url").toggle(this.checked);
                $(".file-group").toggle(this.unchecked);
            });
        });
    </script>
@endpush
