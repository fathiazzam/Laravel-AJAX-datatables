@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Datatable
          <a href="{{ route('toto.create') }}" class="btn btn-success pull-right modal-show" style="margin-top: -8px;" title="Create User"><i class="icon-plus"></i> Create</a>
      </h3>
    </div>
    <div class="panel-body">
          <table id="datatable" class="table table-hover" style="width:100%">
            
              <thead>
                  <tr>
                    <th>No</th>
                    <th>CMGUnmaskedID</th>
                    <th>CMGUnmaskedName</th>
                    <th>ClientTier</th>
                    <th>GCPStream</th>
                    <th>GCPBusiness</th>
                    <th>CMGGlobalBU</th>
                    <th>CMGSegmentName</th>
                    <th>GlobalControlPoint</th>
                    <th>GCPGeography</th>
                    <th>GlobalRelationshipManagerName</th>
                    <th>REVENUE_FY14</th>
                    <th>REVENUE_FY15</th>
                    <th>Deposits_EOP_FY14</th>
                    <th>Deposits_EOP_FY15x</th>
                    <th>RWAFY15</th>
                    <th>RWAFY14</th>
                    <th>REV_RWA_FY14</th>
                    <th>REV_RWA_FY15</th>
                    <th>NPAT_AllocEq_FY14</th>
                    <th>NPAT_AllocEq_FY15X</th>
                    <th>Company_Avg_Activity_FY14</th>
                    <th>Company_Avg_Activity_FY15</th>
                    <th>ROE_FY14</th>
                    <th>ROE_FY15</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  
              </tbody>
              <tfoot>
                  <tr>
                    <th>No</th>
                    <th>CMGUnmaskedID</th>
                    <th>CMGUnmaskedName</th>
                    <th>ClientTier</th>
                    <th>GCPStream</th>
                    <th>GCPBusiness</th>
                    <th>CMGGlobalBU</th>
                    <th>CMGSegmentName</th>
                    <th>GlobalControlPoint</th>
                    <th>GCPGeography</th>
                    <th>GlobalRelationshipManagerName</th>
                    <th>REVENUE_FY14</th>
                    <th>REVENUE_FY15</th>
                    <th>Deposits_EOP_FY14</th>
                    <th>Deposits_EOP_FY15x</th>
                    <th>RWAFY15</th>
                    <th>RWAFY14</th>
                    <th>REV_RWA_FY14</th>
                    <th>REV_RWA_FY15</th>
                    <th>NPAT_AllocEq_FY14</th>
                    <th>NPAT_AllocEq_FY15X</th>
                    <th>Company_Avg_Activity_FY14</th>
                    <th>Company_Avg_Activity_FY15</th>
                    <th>ROE_FY14</th>
                    <th>ROE_FY15</th>
                      <th></th>
                  </tr>
              </tfoot>
          </table>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.toto') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'CMGUnmaskedID', name: 'CMGUnmaskedID'},
                {data: 'CMGUnmaskedName', name: 'CMGUnmaskedName'},
                {data: 'ClientTier', name: 'ClientTier'},
                {data: 'GCPStream', name: 'GCPStream'},
                {data: 'GCPBusiness', name: 'GCPBusiness'},
                {data: 'CMGGlobalBU', name: 'CMGGlobalBU'},
                {data: 'CMGSegmentName', name: 'CMGSegmentName'},
                {data: 'GlobalControlPoint', name: 'GlobalControlPoint'},
                {data: 'GCPGeography', name: 'GCPGeography'},
                {data: 'GlobalRelationshipManagerName', name: 'GlobalRelationshipManagerName'},
                {data: 'REVENUE_FY14', name: 'REVENUE_FY14'},
                {data: 'REVENUE_FY15', name: 'REVENUE_FY15'},
                {data: 'Deposits_EOP_FY14', name: 'Deposits_EOP_FY14'},
                {data: 'Deposits_EOP_FY15x', name: 'Deposits_EOP_FY15x'},
                {data: 'RWAFY15', name: 'RWAFY15'},
                {data: 'RWAFY14', name: 'RWAFY14'},
                {data: 'REV_RWA_FY14', name: 'REV_RWA_FY14'},
                {data: 'REV_RWA_FY15', name: 'REV_RWA_FY15'},
                {data: 'NPAT_AllocEq_FY14', name: 'NPAT_AllocEq_FY14'},
                {data: 'NPAT_AllocEq_FY15X', name: 'NPAT_AllocEq_FY15X'},
                {data: 'Company_Avg_Activity_FY14', name: 'Company_Avg_Activity_FY14'},
                {data: 'Company_Avg_Activity_FY15', name: 'Company_Avg_Activity_FY15'},
                {data: 'ROE_FY14', name: 'ROE_FY14'},
                {data: 'ROE_FY15', name: 'ROE_FY15'},
                {data: 'action', name: 'action'}
            ]
        });
    </script>
@endpush

