<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toto extends Model
{
    protected $fillable = [
        'CMGUnmaskedID', 'CMGUnmaskedName', 'ClientTier','GCPStream','GCPBusiness',
        'CMGGlobalBU','CMGSegmentName','GlobalControlPoint','GCPGeography',
        'GlobalRelationshipManagerName','REVENUE_FY14','REVENUE_FY15',
        'Deposits_EOP_FY14','Deposits_EOP_FY15x','TotalLimits_EOP_FY14',
        'TotalLimits_EOP_FY15','TotalLimits_EOP_FY15x','RWAFY15','RWAFY14',
        'REV_RWA_FY14','REV_RWA_FY15','NPAT_AllocEq_FY14','NPAT_AllocEq_FY15X',
        'Company_Avg_Activity_FY14','Company_Avg_Activity_FY15','ROE_FY14','ROE_FY15',


    ];
}

