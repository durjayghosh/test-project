<?php

namespace App\Http\DataTable;

use Illuminate\Http\Request;
use App\Models\{Page, PageSetting, PageSection};
use Yajra\DataTables\Facades\DataTables;

class PageDataTable  {

    public function __construct(Page $Page) {
        $this->Page = $Page;
    }

    public function indexList($request){
        $queue = Page::query();

        return DataTables::of($queue)   ->addIndexColumn()
            ->editColumn('created_at', function ($attributes) {
                return $attributes->created_at->format('Y-m-d');
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && !empty($request->search)) {
                    $query->where('id', 'like', "{$request->get('search')['value']}");
                    $query->orWhere('page', 'like', "%{$request->get('search')['value']}%");
                }
            })
            // ->editColumn('status', function ($queue) {
			// 	$status= $queue->status;
            //     return ($status == 1) ? '<span class="badge badge-xs badge-success">Active</span>' : '<span class="badge badge-xs badge-primary">Inactive</span>';
            // })
            ->addColumn('action', function ($queue) {
				$parameter= $queue->id;

                return ' <a href="javascript:void(0);" class="addMetaTag" data-id="'.$parameter.'" title="SEO Meta Tags" data-original-title="Close"><i class="fa fa-plus color-danger mr-4"></i></a>
                <a href="' . route('admin.page.pageSection', $parameter) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i></a>
                ';
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

    public function pageSectionList($request, $id){
        $queue = PageSection::query();
        $queue->where('page_id', $id);
        return DataTables::of($queue)   ->addIndexColumn()

            ->editColumn('created_at', function ($attributes) {
                return $attributes->created_at->format('Y-m-d');
            })
            ->filter(function ($query) use ($request, $id) {
                if ($request->has('search') && !empty($request->search)) {
                    // $query->where('id', 'like', "{$request->get('search')['value']}");
                    $query->Where('section', 'like', "%{$request->get('search')['value']}%");
                }
            })
            // ->editColumn('status', function ($queue) {
			// 	$status= $queue->status;
            //     return ($status == 1) ? '<span class="badge badge-xs badge-success">Active</span>' : '<span class="badge badge-xs badge-primary">Inactive</span>';
            // })
            ->addColumn('action', function ($queue) {
				$parameter= $queue->id;
                //<a onclick="return confirm(\'Are you sure to delete customer?\')" href="' . route('admin.role.delete', $parameter) . '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a>
                return '<a href="' . route('admin.page.edit', $parameter) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i></a>
                ';
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }
}
