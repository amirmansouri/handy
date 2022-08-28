<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();

        return view ('service.index')->with('service', $services);

    }


    public function create()
    {



            $provider_name = User::all();
            return view('service.create')->with('provider_name', $provider_name);

    }


    public function store(Request $request)
    {
        $input = $request->all();
        Service::create($input);
        return redirect('service-liste')->with('flash_message', 'Service Addedd!');
    }



    public function show($id)
    {
        $service = Service::find($id);
        return view('service.show')->with('service', $service);
    }


    public function edit($id)
    {
        $service = Service::find($id);
        return view('service.edit')->with('service', $service);
    }


    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $input = $request->all();
        $service->update($input);
        return redirect('service-liste')->with('flash_message', 'Service Updated!');
    }


    public function destroy($id)
    {
        Service::destroy($id);
        return redirect('service-liste')->with('flash_message', 'Service deleted!');
    }
}
