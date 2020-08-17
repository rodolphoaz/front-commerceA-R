@extends('admin.layouts.app' , ['title' => 'Itens Adicionais'])
@section('content')
    @include('admin.pages.partials.header',
    [
        'title' => 'Listagem dos Adicionais',
        'description' => 'Exibindo listagem de adicionais'
    ])

<div class="container mt-3">
    <div class="card shadow">
        <div class="card-header border-0">  
               <div class="row align-items-center">
                   <div class="col-8">
                       <h3 class="mb-0">{{ __('Listagem de Adicionais') }}</h3>
                   </div>
                   <div class="col-4 text-right">
                       {{-- <a href="{{ route('itens-adicionais.create') }}" class="btn btn-sm btn-primary">{{ __('Novo item adicional') }}</a> --}}
                   </div>
               </div>
           </div>

        <div class="card-body">
            <table class="table table-bordered table-striped dataTable"></table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
$(document).ready(function () {
    $('.dataTable').dataTable({
        'ajax': '{{ route("itens-adicionais.data-table") }}',
        columns: [
            {   data: null,
                render: function (index, row, data) {
                    return '<input type="checkbox" class="chk-del" data-uuid="'+data.id+'">';
                },
                width: 3
            },
            { data: "user_id", title: "Usuario ID" },
            { data: "description", title:"Descricao"},
            { data: "item_type_id" , title: ' ID Tipo Item' },               
            { data: null, title: "Opções", render: function (index, row, data) {
                return '<a class="btn btn-sm btn-warning" href="{{ route('itens-adicionais.edit') }}/'+data.id+'"><span class="fa fa-edit"></span></a>';
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
            url: '{{ route("itens-adicionais.delete") }}',
            data: {uuids: $arr},
            success: function () {
                $('.dataTable').DataTable().ajax.reload();
            }
        });
    }

})
</script>
@endpush
