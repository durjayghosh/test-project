<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{Page, PageSection, PageSetting};
use Illuminate\Support\Str;
use App\Http\DataTable\PageDataTable as DataTable;
use Auth;
use Mail;
use DB;

class PageService
{
    public function __construct(
        DataTable $datatable,
        Page $Page
    )
    {
        $this->datatable = $datatable;
        $this->Page = $Page;

    }

    //users list
    public function indexList(Request $request)
    {
        return $this->datatable->indexList($request);
    }

    public function pageSectionList($request, $id)
    {
        return $this->datatable->pageSectionList($request, $id);
    }


    public function insert($request)
    {
        $fileName = '';
        $result = $this->Page->create([
            'role' => $request->role,
            'status' => $request->status
        ]);

        if (isset($request->menu_id)) {
            $dataArray = [];
            foreach ($request->menu_id as $menu) {
                $data = [];
                $data['menu_id'] = $menu;
                $data['role_id'] = $result->id;
                $dataArray[] = $data;
            }
            MenuPermission::insert($dataArray);
        }
        return $result;
    }

    public function deleteOne($id)
    {
        $result = $this->Role->where('id', $id)->delete();
        MenuPermission::where('role_id', $id)->delete();
        return $result;
    }

    public function editOne($id)
    {
        $PageSection = PageSection::where('id', $id)->with('sectionList')->first();
        // dd($PageSection);
        return $result['PageSection'] = $PageSection;
    }

    public function update($request)
    {
        if (isset($request->page_seting_id)) {
            $PageSetting = PageSetting::where('id', $request->page_seting_id)->first();
        } else {
            $PageSetting = new PageSetting();
        }
		
		$PageSetting->heading_title = $request->heading_title;
        $PageSetting->heading = $request->heading;
        $PageSetting->section_id = $request->section_id;
        $PageSetting->product_id = $request->product_id;
        $PageSetting->link = $request->link;
        $PageSetting->description = $request->description;
        $PageSetting->other_description = $request->other_description;
        $PageSetting->sub_heading = $request->sub_heading;
        $PageSetting->youtube = $request->youtube;
        $PageSetting->instagram = $request->instagram;
        $PageSetting->twitter = $request->twitter;
        $PageSetting->facebook = $request->facebook;
        $PageSetting->location = $request->location;
        $PageSetting->phone = $request->phone;
        $PageSetting->title_image = $request->title_image;
        $PageSetting->email = $request->email;
        $PageSetting->address = $request->address;
		
		if($request->textone != ''){
			$PageSetting->textone = $request->textone;
		}
		if($request->texttwo != ''){
			$PageSetting->texttwo = $request->texttwo;
		}
		if($request->textthree != ''){
			$PageSetting->textthree = $request->textthree;
		}
		if($request->textfour != ''){
			$PageSetting->textfour = $request->textfour; 
		}
		if($request->headingone != ''){
			$PageSetting->headingone = $request->headingone;
		}
		if($request->headingtwo != ''){
			$PageSetting->headingtwo = $request->headingtwo;
		}
        if($request->headingthree != ''){
			$PageSetting->headingthree = $request->headingthree;
		}
        if($request->headingfour != ''){
			$PageSetting->headingfour = $request->headingfour;
		}
        

        if ($request->file('image')) {
            $file = $request->file('image');
            $fileName = time() . $file->getClientOriginalName();
           // $destinationPath = storage_path() . '/app/public/cms';
			$destinationPath = public_path('storage/cms');
            $file->move($destinationPath, $fileName);
            $PageSetting->image = $request->file('image') ? 'storage/cms/' . $fileName : null;
        }
		
		if ($request->file('imageone')) {
            $file = $request->file('imageone');
            $fileName = time() . $file->getClientOriginalName();
           // $destinationPath = storage_path() . '/app/public/cms';
			$destinationPath = public_path('storage/cms');
            $file->move($destinationPath, $fileName);
            $PageSetting->imageone = $request->file('imageone') ? 'storage/cms/' . $fileName : null;
        }
		
		
		if ($request->file('imagetwo')) {
            $file = $request->file('imagetwo');
            $fileName = time() . $file->getClientOriginalName();
           // $destinationPath = storage_path() . '/app/public/cms';
			$destinationPath = public_path('storage/cms');
            $file->move($destinationPath, $fileName);
            $PageSetting->imagetwo = $request->file('imagetwo') ? 'storage/cms/' . $fileName : null;
        }
		
		if ($request->file('imagethree')) {
            $file = $request->file('imagethree');
            $fileName = time() . $file->getClientOriginalName();
           // $destinationPath = storage_path() . '/app/public/cms';
			$destinationPath = public_path('storage/cms');
            $file->move($destinationPath, $fileName);
            $PageSetting->imagethree = $request->file('imagethree') ? 'storage/cms/' . $fileName : null;
        }
		
		if ($request->file('imagefour')) {
            $file = $request->file('imagefour');
            $fileName = time() . $file->getClientOriginalName();
           // $destinationPath = storage_path() . '/app/public/cms';
			$destinationPath = public_path('storage/cms');
            $file->move($destinationPath, $fileName);
            $PageSetting->imagefour = $request->file('imagefour') ? 'storage/cms/' . $fileName : null;
        }

        if ($PageSetting->save()) {
            return true;
        }
    }

    public function updateSlider($request)
    {
        if ($request->page_seting_id) {
            PageSetting::whereNotIn('id', $request->page_seting_id)->where('section_id', $request->section_id)->delete();
        }

        if (count($request->heading) > 0) {
            foreach ($request->heading as $key => $sliders) {
                if ($sliders) {
                    if (isset($request->page_seting_id[$key])) {
                        $PageSetting = PageSetting::where('id', $request->page_seting_id[$key])->first();
                    } else {
                        $PageSetting = new PageSetting();
                    }
                    $PageSetting->heading = $request->heading[$key];
                    $PageSetting->section_id = $request->section_id;
                    $PageSetting->link = $request->link[$key];
                    $PageSetting->description = $request->title[$key];
                    $PageSetting->title_image = $request->title_image[$key];

                    if (isset($request->file('image')[$key])) {
                        $file = $request->file('image')[$key];
                        $fileName = time() . $file->getClientOriginalName();
                        //$destinationPath = storage_path() . '/app/public/cms/slider';
						$destinationPath = public_path('storage/cms/slider');
                        $file->move($destinationPath, $fileName);
                        $PageSetting->image = $request->file('image') ? 'storage/cms/slider/' . $fileName : null;
                    }
                    $PageSetting->save();
                }
            }
        }
        return true;
    }

    public function metaTagGet($request, $id)
    {
        return $page = Page::where('id', $id)->first();
    }

    public function metaTagPost($request, $id)
    {
        $page = Page::where('id', $id)->first();
        $page->title = $request->title;
        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->meta_keyword = $request->meta_keyword;
        $page->save();
        return 1;
    }


}
// title mis match 