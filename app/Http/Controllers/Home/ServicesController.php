<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Image;

class ServicesController extends Controller
{
    public function AllServices(){
        $services = Services::latest()->get();
        return view('admin.services.all_services', compact('services'));
    }//End Method

    public function AddServices(){
        return view('admin.services.add_services');
    }//End Method

    public function StoreServices(Request $request){
        $request->validate([
            'service_name' => 'required',
            'services_title' => 'required',
            'services_description' => 'required',
            'services_details' => 'required',
            'services_images' => 'required',
        ],[
            'service_name.required' =>'Services Name is Required',
            'services_title.required' =>'Services Title is Required',
            'services_description.required' =>'Services Title is Required',
            'services_details.required' =>'Services Title is Required',
        ]);
        $image =$request->file('services_images');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

        Image::make($image)->resize(430,324)->save('upload/services/'.$name_gen);

        $save_url = 'upload/services/'.$name_gen;

        Services::insert([
            'service_name' => $request->service_name,
            'services_title' => $request->services_title,
            'services_description' => $request->services_description,
            'services_details' => $request->services_details,
            'services_images' => $save_url,
        ]);

        $notification = array(
            'message' =>'Services Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.services')->with($notification);
    }//End Method

    public function EditServices($id){
        $services = Services::findOrFail($id);
        return view('admin.services.services_edit', compact('services'));
    }//End Method

    public function UpdateServices(Request $request){
        $service_id = $request->id;
        if($request->file('services_images')){
            $image =$request->file('services_images');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(1020,519)->save('upload/services/'.$name_gen);

            $save_url = 'upload/services/'.$name_gen;

            Services::findOrFail($service_id)->update([
                'service_name' => $request->service_name,
                'services_title' => $request->services_title,
                'services_description' => $request->services_description,
                'services_details' => $request->services_details,
                'services_images' => $save_url,
            ]);

            $notification = array(
                'message' =>'Service Updated with Image Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.services')->with($notification);
        }else{
            Services::findOrFail($service_id)->update([
                'service_name' => $request->service_name,
                'services_title' => $request->services_title,
                'services_description' => $request->services_description,
                'services_details' => $request->services_details,
            ]);

            $notification = array(
                'message' =>'Service Updated without Image Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.services')->with($notification);
        }//endelse
    }//End Method

    public function DeleteServices($id){
        $serv = Services::findOrFail($id);
        $img = $serv->services_images;
        unlink($img);

        Services::findOrFail($id)->delete();
        $notification = array(
            'message' =>'Service Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.services')->with($notification);
    }//End Method

    public function ServicesDetails($id){
        $services = Services::findOrFail($id);
        return view('frontend.service_details', compact('services'));
    }//End Method

    public function HomeServices(){

        $services = Services::latest()->get();
        return view('frontend.services',compact('services'));

     }// End Method
}
