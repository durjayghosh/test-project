<?php

namespace App\Http\DataTable;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Auth;

class AgentDataTable  {

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function indexList($request){
        $queue = User::query();
        // dd(User::where('id', )->pluck('business_name')->count());
        $queue->whereNotIn('role', [1]);

        return DataTables::of($queue)   ->addIndexColumn()
            ->editColumn('created_at', function ($attributes) {
                return $attributes->created_at->format('Y-m-d');
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && !empty($request->search)) {
                    $query->where(function($q) use($request){
                        $q->orWhere('id', 'like', "{$request->get('search')['value']}");
                        $q->orWhere('name', 'like', "%{$request->get('search')['value']}%");
                        $q->orWhere('email', 'like', "%{$request->get('search')['value']}%");
                        $q->orWhere('phone', 'like', "%{$request->get('search')['value']}%");
                    });

                }
            })
            ->editColumn('status', function ($queue) {
				$status= $queue->status;
                return ($status == 1) ? '<span class="badge badge-xs badge-success">Active</span>' : '<span class="badge badge-xs badge-primary">Inactive</span>';
            })
            ->addColumn('action', function ($queue) {
				$parameter= $queue->id;
                return '
                <a href="' . route('admin.agent.edit', $parameter) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i></a>
                <a onclick="return confirm(\'Are you sure to delete customer?\')" href="' . route('admin.agent.delete', $parameter) . '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a>
                ';
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }
}
