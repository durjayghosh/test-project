<?php

namespace App\Http\DataTable;

use Illuminate\Http\Request;
use App\Models\{Product};
use Yajra\DataTables\Facades\DataTables;

class ProductDataTable
{

    public function __construct(Product $Product)
    {
        $this->Product = $Product;
    }

    public function indexList($request)
    {
        $queue = Product::query();

        return DataTables::of($queue)->addIndexColumn()
            ->editColumn('created_at', function ($attributes) {
                return $attributes->created_at->format('Y-m-d');
            })
            ->editColumn('category_id', function ($attributes) {
                return $attributes->categories->category_name;
                // return $attributes->created_at->format('Y-m-d');
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && !empty($request->search)) {
                    $query->where('id', 'like', "{$request->get('search')['value']}");
                    $query->orWhere('product_name', 'like', "%{$request->get('search')['value']}%");
                }
            })
            ->addColumn('action', function ($queue) {
                $parameter = $queue->id;
                return '
                <a class="m-1" href="' . route('admin.product.addon', $parameter) . '" data-toggle="tooltip" data-placement="top" title="How does its work" data-original-title="Close"><i class="fa fa-plus color-danger"></i></a>
                <a class="m-1" href="' . route('admin.product.edit', $parameter) . '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-danger"></i></a>
                <a class="m-1" onclick="return confirm(\'Are you sure to delete product?\')" href="' . route('admin.product.delete', $parameter) . '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a>
                ';
            })
            ->editColumn('image', function ($queue) {
                $image = isset($queue->images->gallery) ? $queue->images->gallery : 'image/no-image.jpg';
                return '<img src="' . asset($image) . '" alt="" width="80">';
            })
            ->rawColumns(['action', 'status', 'image'])
            ->make(true);
    }
}