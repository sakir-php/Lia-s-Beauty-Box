<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Models\Service;
use App\Models\ServiceCategory;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id','DESC')->get();
        return view('backend.service.index', compact('services'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serviceCategories = ServiceCategory::all();
        return view('backend.service.create', compact('serviceCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_name'  => 'required|string|unique:services,name',
            'price'         => 'required',
            'category'   => 'required|exists:service_categories,id',
            'image'         => 'nullable|image',
        ]);
        $service = new Service();
        $service->name = $request->service_name;
        $service->slug = Str::slug($request->service_name, '-');
        $service->price = $request->price;
        $service->category_id = $request->category;
        $service->description = $request->description;
        if ($request->file('image')) {
            $service->image = file_uploader('uploads/service-image/', $request->image, Carbon::now()->format('Y-m-d H-i-s-a') .'-'. Str::slug($request->service_name, '-'));
        }
        $service->save();
        toastr()->success('Successfully Saved!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        if(request()->ajax()){
            return $service;
        }
        return view('backend.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $serviceCategories = ServiceCategory::all();
        return view('backend.service.edit', compact('service', 'serviceCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'service_name'  => 'required|string|unique:services,name,'.$service->id,
            'price'         => 'required|numeric',
            'category'   => 'required|exists:service_categories,id',
            'image'         => 'nullable|image',
        ]);

        $service->name = $request->service_name;
        $service->slug = Str::slug($request->service_name, '-');
        $service->price = $request->price;
        $service->category_id = $request->category;
        $service->description = $request->description;
        if ($request->file('image')) {
            $service->image = file_uploader('uploads/service-image/', $request->image, Carbon::now()->format('Y-m-d H-i-s-a') .'-'. Str::slug($request->service_name, '-'));
        }
        $service->save();

        toastr()->success('Successfully Updated!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if($service->appointments()->count() > 0 || $service->invoiceItems()->count() > 0){
            return [
                'type' => 'worning',
                'message' => 'This item is not deletable. Because the service associate with appointments or invoice items',
            ];
        }
        $service->delete();
        return [
            'type' => 'success',
            'message' => 'Successfully destroy',
        ];
    }
}
