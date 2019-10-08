@extends('layouts.admin')

@section('content')

    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4> <i class="fa fa-table"></i> Portofolios</h4>
                </div>
            </div>
        </div>
    </header>

    <div class="content-wrapper animatedParent animateOnce">
        <div class="container-fluid">
            <section class="paper-card">
                <div class="row">
                    <div class="col-12">
                        @include('partials.admin._messages')
                        <table class="table cell-vertical-align-middle  table-responsive mb-4">
                            <tbody>
                            <tr class="no-b">
                                <td>
                                    <a href="{{route ('admin.portofolio.create')}}" class="btn btn-outline-primary btn-lg btn-block">
                                        <i class="fa fa-plus-circle"></i> Add
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table id="demoGrid" class="table table-striped table-bordered dt-responsive">
                            <thead>
                            <tr>
                                <th style="width: 10%;">Nama</th>
                                <th style="width: 40%;">Pendahuluan</th>
                                <th style="width: 30%;">Brief</th>
                                <th style="width: 10%;">Dibuat pada</th>
                                <th style="width: 10%;">Diubah pada</th>
                                <th style="width: 10%;">Tindakan</th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Apakah anda yakin ingin menghapus data ini?</h3>
                    <br />

                    <form role="form">
                        <input type="hidden" id="deleted-id" name="deleted-id"/>
                    </form>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> No
                        </button>
                        <button type="submit" class="btn btn-danger delete">
                            <span class='glyphicon glyphicon-trash'></span> Yes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('styles')
    <link href="{{ asset('css/datatables.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('scripts')
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $('#demoGrid').DataTable({
            processing: true,
            serverSide: true,
            pageLength: 25,
            ajax: '{!! route('datatables.portofolio') !!}',
            order: [ [0, 'asc'] ],
            columns: [
                { data: 'name', name: 'name', class: 'text-center'},
                { data: 'introduction', name: 'introduction'},
                { data: 'brief', name: 'brief'},
                { data: 'created_at', name: 'created_at', class: 'text-center', orderable: false, searchable: false,
                    render: function ( data, type, row ){
                        if ( type === 'display' || type === 'filter' ){
                            return moment(data).format('DD MMM YYYY');
                        }
                        return data;
                    }
                },
                { data: 'update_at', name: 'update_at', class: 'text-center', orderable: false, searchable: false,
                    render: function ( data, type, row ){
                        if ( type === 'display' || type === 'filter' ){
                            return moment(data).format('DD MMM YYYY');
                        }
                        return data;
                    }
                },
                { data: 'action', name: 'action', orderable: false, searchable: false, class: 'text-center'}
            ],
        });

        // Pop up delete modal
        $(document).on('click', '.delete-modal', function(){
            $('#deleteModal').modal({
                backdrop: 'static',
                keyboard: false
            });

            $('#deleted-id').val($(this).data('id'));
        });

        $('.modal-footer').on('click', '.delete', function() {
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.portofolio.destroy') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'id': $('#deleted-id').val()
                },
                success: function(data) {
                    if ((data.errors)){
                        setTimeout(function () {
                            toastr.error('Gagal menghapus data!!', 'Peringatan', {timeOut: 6000, positionClass: "toast-top-center"});
                        }, 500);
                    }
                    else{
                        window.location = '{{ route('admin.portofolio.index') }}';
                    }
                },
                error: function (data) {
                    alert("Error");
                }
            });
        });
    </script>
@endsection
