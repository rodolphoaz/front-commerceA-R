@extends('admin.layouts.app', ['title' => 'Lista de Caricatura'])

@section('content')

    @include('admin.pages.partials.header', [
        'title' =>'Lista de caricaturas',
        'description' => 'Exibindo todos os tipos de caricaturas cadastradas',
    ])

    <div class="container mt-3">
        <h1 class="text-center">Listagem de Caricaturas</h1>
        <div class="panel-body">
            <table class="table table-bordered table-striped dataTable"></table>
        </div>
    </div>
@endsection


@push('scripts')
<script type="text/javascript">
$(document).ready(function () {
    $('.dataTable').dataTable({
        'ajax': '{{ route("caricature.data-table") }}',
        columns: [
            {   data: null,
                render: function (index, row, data) {
                    return '<input type="checkbox" class="chk-del" data-uuid="'+data.id+'">';
                },
                width: 3
            },
            { data: "sort", title: "Tipo" },
            { data: "template", title: "Modelo"},
            {data: null, title: "Opções", render: function (index, row, data) {
                return '<a class="btn btn-sm btn-warning" href="{{ route('caricature.edit') }}/'+data.id+'"><span class="fa fa-edit"></span></a>';
            }}
        ]
    });
});

$(".btn-dele0wp").click(function () {
    $arr = [];
    $(".chk-del:checked").each(function () {
        $arr.push($(this).attr('data-uuid'));
        
    })

    if(confirm('Deseja deletar o(s) registro(s)?')){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url: '{{ route("caricature.delete") }}',
            data: {uuids: $arr},
            success: function () {
                $('.dataTable').DataTable().ajax.reload();
            }
        });
    }

})
</script>
@endpush
