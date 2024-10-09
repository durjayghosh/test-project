<?php

namespace App\Http\DataTable;

use Illuminate\Http\Request;
use App\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class RoleDataTable  {

    public function __construct(Role $Role) {
        $this->Role = $Role;
    }

    public function indexList($request){
        $queue = Role::query();

        return DataTables::of($queue)   ->addIndexColumn()
            ->editColumn('created_at', function ($attributes) {
                return $attributes->created_at->format('Y-m-d');
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && !empty($request->search)) {
                    $query->where('id', 'like', "{$request->get('search')['value']}");
                    $query->orWhere('role', 'like', "%{$request->get('search')['value']}%");
                }
            })
            ->editColumn('status', function ($queue) {
				$status= $queue->status;
                return ($status == 1) ? '<span class="badge badge-xs badge-success">Active</span>' : '<span class="badge badge-xs badge-primary">Inactive</span>';
            })
            ->addColumn('action', function ($queue) {
				$parameter= $queue->id;
                return '
                <a href="' . route('admin.role.edit', $parameter) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i></a>
                <a onclick="return confirm(\'Are you sure to delete customer?\')" href="' . route('admin.role.delete', $parameter) . '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a>
                ';
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }
}
