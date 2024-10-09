<?php

namespace App\Http\DataTable;

use Illuminate\Http\Request;
use App\Models\BookAnAppointment;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class BookAnAppointmentDataTable  {

    public function __construct(BookAnAppointment $BookAnAppointment) {
        $this->BookAnAppointment = $BookAnAppointment;
    }

    public function indexList($request){
        $queue = BookAnAppointment::query();

        return DataTables::of($queue)   ->addIndexColumn()
            ->editColumn('created_at', function ($attributes) {
                return $attributes->created_at->format('Y-m-d');
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && !empty($request->search)) {
                    $query->where('id', 'like', "{$request->get('search')['value']}");
                    $query->orWhere('full_name', 'like', "%{$request->get('search')['value']}%");
                    $query->orWhere('mobile_number', 'like', "%{$request->get('search')['value']}%");

                }
            })
            ->editColumn('mobile_number', function ($attributes){
                return  '+'.$attributes->dial_code.' '.$attributes->mobile_number;
            })

            ->addColumn('action', function ($queue) {
				$parameter= $queue->id;
                // <a href="javascript:void(0);" class="mr-4 details" data-id="'.$parameter.'"  data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="fa fa-eye color-muted"></i></a>
                return '

                <a onclick="return confirm(\'Are you sure to delete request?\')" href="' . route('admin.BookAnAppointment.delete', $parameter) . '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a>
                ';
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }
}
