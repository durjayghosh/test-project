<?php

namespace App\Http\DataTable;

use Illuminate\Http\Request;
use App\Models\{Review};
use Yajra\DataTables\Facades\DataTables;
use DB;

class ReviewDataTable
{

    public function __construct(Review $Review)
    {
        $this->Review = $Review;
    }

    public function indexList($request)
    {
        $queue = Review::query();

        return DataTables::of($queue)->addIndexColumn()
            ->editColumn('created_at', function ($attributes) {
                return $attributes->created_at->format('Y-m-d');
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && !empty($request->search)) {
                    $query->where('id', 'like', "{$request->get('search')['value']}");
                    $query->orWhere('name', 'like', "%{$request->get('search')['value']}%");
                    // $query->orWhere('email', 'like', "%{$request->get('search')['value']}%");
                }
            })
            ->editColumn('status', function ($queue) {
                $status = $queue->status;
                return ($status == 1) ? '<span class="tex">Active</span>' : '<span class="badge badge-xs badge-primary">Inactive</span>';
            })

            ->editColumn('home_page', function ($queue) {
                $home_page = $queue->home_page;
                return ($home_page == 1) ? '<span class="text">Yes</span>' : '<span class="text">No</span>';
            })
            // ->editColumn('product_id', function ($queue) {

            //     $product_id = $queue->product_id;

            //     $product = DB::table('products')->where('id', $product_id)->first()->product_name ?? '';

            //     return $product;
            // })
            ->editColumn('product_id', function ($queue) {

                $product_id = $queue->product_id;

                $product = DB::table('product_categories')->where('id', $product_id)->first()->category_name ?? '';

                return $product;

            })

            ->addColumn('action', function ($queue) {
                $parameter = $queue->id;
                return '<a onclick="return confirm(\'Are you sure to delete customer?\')" href="' . route('admin.review.delete', $parameter) . '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a>
                <a href="' . route('admin.review.edit', $parameter) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i></a>
                ';
            })
            ->rawColumns(['action', 'status', 'home_page'])
            ->make(true);
    }

}