@extends('templates/dashboard')

@section('title-tab')
| {{__('pages/moa/index.title')}}
@endsection

@section('title')
{{__('pages/moa/index.title')}}
@endsection

@section('subTitle')
{{__('pages/moa/index.subTitle')}}
@endsection

@push('style')

@endpush

@section('content')
<section> 
    @if (in_array(Auth::user()->role, array('Fakultas', 'Pascasarjana', 'PSDKU', 'LPPM')))
        <div class="row mb-3">
            <div class="col-12">
                @component('components.buttons.add')
                    @slot('href')
                        /moa/create
                    @endslot
                @endcomponent
            </div>
        </div>              
    @endif   

    @component('components.tables.mou_moa_ia')
        @slot('thead_nomor')
            {{__('components/table.nomor')}}
        @endslot
        @slot('thead_nomor_mou_moa_ia')
            {{__('components/table.nomor_moa_pengusul')}}
        @endslot    
        @slot('thead_pengusul')
            {{__('components/table.pengusul')}}
        @endslot
        @slot('thead_tanggal_mulai')
            {{__('components/table.tanggal_mulai')}}
        @endslot
        @slot('thead_tanggal_berakhir')
            {{__('components/table.tanggal_berakhir')}}            
        @endslot
        @slot('thead_dibuat_oleh')
            {{__('components/table.dibuat_oleh')}}            
        @endslot
        @slot('thead_aksi')
            {{__('components/table.aksi')}}            
        @endslot

        @slot('tbody_nomor_mou_moa_ia') 
            nomor_moa_pengusul
        @endslot
        
        @slot('link')
            moa/
        @endslot
    @endcomponent
</section>

@endsection

@push('script')

@endpush
