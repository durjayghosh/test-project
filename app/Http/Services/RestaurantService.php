<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{User, Brand};
use Illuminate\Support\Str;
use App\Http\DataTable\RestaurantDataTable as DataTable;
use Auth;
use Mail;
use DB;

class RestaurantService {

    public function __construct(
        DataTable $datatable,
        User $User
    ) {
        $this->datatable= $datatable;
        $this->User= $User;

    }

    //users list
    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function insert($request){
        $fileName = "";
        if($request->file('profile_image')){
            $file = $request->file('profile_image') ;
			$fileName = time().$file->getClientOriginalName() ;
			$destinationPath = public_path().'/profile' ;
			$file->move($destinationPath,$fileName);
        }

        $result = $this->User->create([
            'business_name'=>$request->business_name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'phone'=>$request->phone,
            'role' => 2,
            'status' => $request->status,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'address' => $request->address,
            'created_by' => auth()->user()->id,
            'image' => $fileName,
            'gst_no' => $request->gst_no,
            'brand_id' => $request->brand_id,
            'store_code' => $request->store_code
        ]);

      return  $result;
    }

    public function update($request){
        // dd($request->all());
        $restaurant = $this->User->where('id', $request->id)->first();
        $restaurant->business_name = $request->business_name;
        $restaurant->email = $request->email ? $request->email : $restaurant->email;
        $restaurant->phone = $request->phone;
        $restaurant->address = $request->address;
        $restaurant->latitude = $request->latitude;
        $restaurant->longitude = $request->longitude;
        $restaurant->store_code = $request->store_code;
        $restaurant->gst_no = $request->gst_no;
        if($request->password) {
            $restaurant->password = bcrypt($request->password);
        }
        $restaurant->status = $request->status;
        if($request->file('image')){
            $file = $request->file('image') ;
			$fileName = time().$file->getClientOriginalName() ;
			$destinationPath = public_path().'/profile' ;
			$file->move($destinationPath,$fileName);

        }
        $restaurant->profile_image = $request->file('image') ? $fileName : $restaurant->image;
        if($restaurant->save()){
            return true;
        }
    }

    public function getOne($id){
        $result = $this->User->where('id', $id)->first();
        return $result;
    }

    public function deleteOne($id){
        $result = $this->User->where('id', $id)->delete();
        return $result;
    }

    public function getAll($request){

        $query = $this->User->get();
        return $query;
    }

    public function add(){
        $result['Brand'] = Brand::where('status', 1)->orderBy('brand', 'asc')->get();
        return $result;
    }

}
