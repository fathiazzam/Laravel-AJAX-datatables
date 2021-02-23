{!! Form::model($model, [
    'route' => $model->exists ? ['toto.update', $model->id] : 'toto.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">CMGUnmaskedID</label>
        {!! Form::text('CMGUnmaskedID', null, ['class' => 'form-control', 'id' => 'CMGUnmaskedID']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">CMGUnmaskedName</label>
        {!! Form::text('CMGUnmaskedName', null, ['class' => 'form-control', 'id' => 'CMGUnmaskedName']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">ClientTier</label>
        {!! Form::text('ClientTier', null, ['class' => 'form-control', 'id' => 'ClientTier']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">GCPStream</label>
        {!! Form::text('GCPStream', null, ['class' => 'form-control', 'id' => 'GCPStream']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">GCPBusiness</label>
        {!! Form::text('GCPBusiness', null, ['class' => 'form-control', 'id' => 'GCPBusiness']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">CMGGlobalBU</label>
        {!! Form::text('CMGGlobalBU', null, ['class' => 'form-control', 'id' => 'CMGGlobalBU']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">CMGSegmentName</label>
        {!! Form::text('CMGSegmentName', null, ['class' => 'form-control', 'id' => 'CMGSegmentName']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">GlobalControlPoint</label>
        {!! Form::text('GlobalControlPoint', null, ['class' => 'form-control', 'id' => 'GlobalControlPoint']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">GCPGeography</label>
        {!! Form::text('GCPGeography', null, ['class' => 'form-control', 'id' => 'GCPGeography']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">GlobalRelationshipManagerName</label>
        {!! Form::text('GlobalRelationshipManagerName', null, ['class' => 'form-control', 'id' => 'GlobalRelationshipManagerName']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">REVENUE_FY14</label>
        {!! Form::text('REVENUE_FY14', null, ['class' => 'form-control', 'id' => 'REVENUE_FY14']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">REVENUE_FY15</label>
        {!! Form::text('REVENUE_FY15', null, ['class' => 'form-control', 'id' => 'REVENUE_FY15']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">Deposits_EOP_FY14</label>
        {!! Form::text('Deposits_EOP_FY14', null, ['class' => 'form-control', 'id' => 'Deposits_EOP_FY14']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Deposits_EOP_FY15x</label>
        {!! Form::text('Deposits_EOP_FY15x', null, ['class' => 'form-control', 'id' => 'Deposits_EOP_FY15x']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">TotalLimits_EOP_FY14</label>
        {!! Form::text('TotalLimits_EOP_FY14', null, ['class' => 'form-control', 'id' => 'TotalLimits_EOP_FY14']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">TotalLimits_EOP_FY15</label>
        {!! Form::text('TotalLimits_EOP_FY15', null, ['class' => 'form-control', 'id' => 'TotalLimits_EOP_FY15']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">TotalLimits_EOP_FY15x</label>
        {!! Form::text('TotalLimits_EOP_FY15x', null, ['class' => 'form-control', 'id' => 'TotalLimits_EOP_FY15x']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">RWAFY15</label>
        {!! Form::text('RWAFY15', null, ['class' => 'form-control', 'id' => 'RWAFY15']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">RWAFY14</label>
        {!! Form::text('RWAFY14', null, ['class' => 'form-control', 'id' => 'RWAFY14']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">REV_RWA_FY14</label>
        {!! Form::text('REV_RWA_FY14', null, ['class' => 'form-control', 'id' => 'REV_RWA_FY14']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">REV_RWA_FY15</label>
        {!! Form::text('REV_RWA_FY15', null, ['class' => 'form-control', 'id' => 'REV_RWA_FY15']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">NPAT_AllocEq_FY14</label>
        {!! Form::text('NPAT_AllocEq_FY14', null, ['class' => 'form-control', 'id' => 'NPAT_AllocEq_FY14']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">NPAT_AllocEq_FY15X</label>
        {!! Form::text('NPAT_AllocEq_FY15X', null, ['class' => 'form-control', 'id' => 'NPAT_AllocEq_FY15X']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Company_Avg_Activity_FY14</label>
        {!! Form::text('Company_Avg_Activity_FY14', null, ['class' => 'form-control', 'id' => 'Company_Avg_Activity_FY14']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">Company_Avg_Activity_FY15</label>
        {!! Form::text('Company_Avg_Activity_FY15', null, ['class' => 'form-control', 'id' => 'Company_Avg_Activity_FY15']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">ROE_FY14</label>
        {!! Form::text('ROE_FY14', null, ['class' => 'form-control', 'id' => 'ROE_FY14']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">ROE_FY15</label>
        {!! Form::text('ROE_FY15', null, ['class' => 'form-control', 'id' => 'ROE_FY15']) !!}
    </div>
   

{!! Form::close() !!}
