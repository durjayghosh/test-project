<?php

namespace App\Http\DataTable;

use Illuminate\Http\Request;
use App\Models\{OurTeam};
use Yajra\DataTables\Facades\DataTables;

class OurTeamDataTable  {

    public function __construct(OurTeam $OurTeam) {
        $this->OurTeam = $OurTeam;
    }

    public function indexList($request){
        $queue = OurTeam::query();

        return DataTables::of($queue)   ->addIndexColumn()
            ->editColumn('created_at', function ($attributes) {
                return $attributes->created_at->format('Y-m-d');
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && !empty($request->search)) {
                    $query->where('id', 'like', "{$request->get('search')['value']}");
                    $query->orWhere('designation', 'like', "%{$request->get('search')['value']}%");
                    $query->orWhere('full_name', 'like', "%{$request->get('search')['value']}%");
                }
            })
            // ->editColumn('status', function ($queue) {
			// 	$status= $queue->status;
            //     return ($status == 1) ? '<span class="badge badge-xs badge-success">Active</span>' : '<span class="badge badge-xs badge-primary">Inactive</span>';
            // })
            ->addColumn('action', function ($queue) {
				$parameter= $queue->id;
                return '
                <a onclick="return confirm(\'Are you sure to delete customer?\')" href="' . route('admin.ourteam.delete', $parameter) . '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a>
                <a href="' . route('admin.ourteam.edit', $parameter) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i></a>
                ';
            })
            ->editColumn('image', function ($queue) {
				$image= $queue->image;
                return '<img src="'.asset($image).'" alt="'.$queue->full_name.'" width="100" height="100">';
            })
            ->editColumn('location', function ($queue) {
                return ucwords($queue->location);
            })
            ->rawColumns(['action', 'status', 'image'])
            ->make(true);
    }
}
