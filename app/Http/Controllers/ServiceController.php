<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\NewService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = NewService::paginate(10);
        $number = 1;
        return view('admin.services.index', compact('services', 'number'));
    }


    public function create()
    {
        return view('admin.services.create');
    }


    public function store(StoreServiceRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('service/' . time(), 'public');
        }

        $validated['image'] = $path;
        NewService::create($validated);

        return redirect()->route('newService.index');
    }


    public function show($id)
    {
        $service = NewService::find($id);
        return view('admin.services.show', compact('service'));
    }


    public function edit(NewService $newService)
    {
        // $service = NewService::find($id);
        return view('admin.services.edit')->with('newService', $newService);
    }


    public function update(Request $request, NewService $newService)
    {
        // dd($newService);
        if ($request->hasFile('image'))
        {
            if (isset($newService->image))
            {
                Storage::delete($newService->image);
            }

            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('post_photo', $name);
        }

        $newService->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'price' => $request->price,
            'deadline_uz' => $request->deadline_uz,
            'deadline_ru' => $request->deadline_ru,
            'deadline_en' => $request->deadline_en,
            'image' => $path?? $newService->image,
        ]);
        
        // $newService->save();
        
       
        return redirect()->route('newService.index')->with('newService', $newService->id);
    }


    public function destroy($id)
    {
        $service = NewService::find($id);

        if ($service) {
            Storage::delete($service->image);

            $service->delete();
        }

        return redirect()->route('newService.index');
    }
}
