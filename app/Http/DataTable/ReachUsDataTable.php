<?php

namespace App\Http\DataTable;

use Illuminate\Http\Request;
use App\Models\ReachUs;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ReachUsDataTable  {

    public function __construct(ReachUs $ReachUs) {
        $this->ReachUs = $ReachUs;
    }

    public function indexList($request){
        $queue = ReachUs::query();

        return DataTables::of($queue)   ->addIndexColumn()
            ->editColumn('created_at', function ($attributes) {
                return $attributes->created_at->format('Y-m-d');
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && !empty($request->search)) {
                    $query->where('id', 'like', "{$request->get('search')['value']}");
                    $query->orWhere('full_name', 'like', "%{$request->get('search')['value']}%");
                    $query->orWhere('mobile_number', 'like', "%{$request->get('search')['value']}%");
                    $query->orWhere('email', 'like', "%{$request->get('search')['value']}%");
                    $query->orWhere('ip_address', 'like', "%{$request->get('search')['value']}%");
                    $query->orWhere('coupon_code', 'like', "%{$request->get('search')['value']}%");
                }
            })

            ->editColumn('purpose_of_enquery', function ($queue) {
                return Str::limit($queue->purpose_of_enquery, 50, '....');
				// $status= $queue->status;
                // return ($status == 1) ? '<span class="badge badge-xs badge-success">Active</span>' : '<span class="badge badge-xs badge-primary">Inactive</span>';
            })
            ->editColumn('mobile_number', function ($queue) {
                return "+$queue->dial_code $queue->mobile_number";
				// $status= $queue->status;
                // return ($status == 1) ? '<span class="badge badge-xs badge-success">Active</span>' : '<span class="badge badge-xs badge-primary">Inactive</span>';
            })
            ->addColumn('action', function ($queue) {
				$parameter= $queue->id;
                return '
                <a href="javascript:void(0);" class="mr-4 details" data-id="'.$parameter.'"  data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="fa fa-eye color-muted"></i></a>
                <a onclick="return confirm(\'Are you sure to delete request?\')" href="' . route('admin.reachUs.delete', $parameter) . '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a>
                ';
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }
}
