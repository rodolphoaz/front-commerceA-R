@extends('admin.layouts.app', ['title' => 'Lista de Caricatura'])

@section('content')

    @include('admin.pages.caricatura.partials.header', [
        'title' => __('Criar ') . ' '. 'Lista de Caricatura',
        'description' => __('This is your profile page. You can see the progress you\'ve 
        made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-7'
    ])

    <div class="container mt-4 text-center">
        <div class="panel-body">
            <table class="table table-bordered table-striped dataTable"></table>
        </div>
    </div>
@endsection


@push('scripts')
<script type="text/javascript">
$(document).ready(function () {
    $('.dataTable').dataTable({
        'ajax': '{{ route("caricatura.data_table") }}',
        columns: [
            {   data: null,
                render: function (index, row, data) {
                    return '<input type="checkbox" class="chk-del" data-uuid="'+data.uuid+'">';
                },
                width: 3
            },
            { data: "name", title: "Nome" },
            { data: null, title: "Nota Fiscal", render: function (index, row, data){
                
                if (data.document_file == ""){
                    return "Nao possui cadastro de Nota fiscal" ;
                }else {
                    return '<a href="/patrimony/download/'+data.document_file+'" class="btn btn-primary btn-sm" >Download Nota Fiscal</a>';
                }
            } },
            { data: null , title:"Imagens", render: function (index, row, data){
               
                if (data.photos.length == 0 ){ 
                    console.log(data.photos)
                    return "Nao possui cadastro de Imagem";
                }else{
                    return '<a href="/patrimony/image/'+data.uuid+'" target="_blank" class="btn btn-warning btn-sm">Visualizar Imagens</a>';
                }
            }},
            {data: null, title: "Opções", render: function (index, row, data) {
                return '<a class="btn btn-xs btn-warning" href="{{ route('caricatura.edit') }}/'+data.uuid+'"><span class="fa fa-edit"></span></a>';
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
            url: '{{ route("caricatura.edit") }}',
            data: {uuids: $arr},
            success: function () {
                $('.dataTable').DataTable().ajax.reload();
            }
        });
    }

})
</script>
@endpush
