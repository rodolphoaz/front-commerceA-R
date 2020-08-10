@extends('admin.layouts.app', ['title' => 'Tipo de Adicionais' ])
@section('content')
    @include('admin.pages.partials.header',
        [
            'title' => 'Listagem do Tipos de adicionais',
            'description' => 'Exibindo todos os tipos de adicionais cadastrados!'
        ])

    <div class="container mt-3">
        <div class="card shadow">
        <div class="card-header border-0">  
               <div class="row align-items-center">
                   <div class="col-8">
                       <h3 class="mb-0">{{ __('Listagem do Tipo de Adicionais') }}</h3>
                   </div>
                   <div class="col-4 text-right">
                       <a href="{{ route('item-type.create') }}" class="btn btn-sm btn-primary">{{ __('Novo tipo de adicional') }}</a>
                   </div>
               </div>
           </div>
        <div class="card-body">
            <table class="table table-bordered table-striped dataTable"></table>
        </div>
    </div>
@endsection
@push('scripts')
<script type="text/javascript">
$(document).ready(function () {
    $('.dataTable').dataTable({
        'ajax': '{{ route("item-type.data-table") }}',
        columns: [
            {   data: null,
                render: function (index, row, data) {
                    return '<input type="checkbox" class="chk-del" data-uuid="'+data.id+'">';
                },
                width: 3
            },
            { data: "description", title: "Descricao" },
            { data: "price", title:"Preco"},                
            {data: null, title: "Opções", render: function (index, row, data) {
                return '<a class="btn btn-sm btn-warning" href="{{ route('item-type.edit') }}/'+data.id+'"><span class="fa fa-edit"></span></a>';
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
            url: '{{ route("item-type.delete") }}',
            data: {uuids: $arr},
            success: function () {
                $('.dataTable').DataTable().ajax.reload();
            }
        });
    }

})
</script>
@endpush
