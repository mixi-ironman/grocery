<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SliderService;
use App\Services\CategoryService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    private $sliderService;

    public function __construct(SliderService $sliderService)
    {
        $this->sliderService = $sliderService;
    }
    
    public function index()
    {
        $sliders = $this->sliderService->getAllSlider();

        return view('admin.slider.index',['sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $this->sliderService->store($request);
        return redirect()->route('products.create')->with('success', 'Created Slider Successfully!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $slider = $this->sliderService->getSliderById($id);
        // dd($product);
        return view('admin.slider.edit',[
            'title'=>'Edit Slider',
            // 'category_parent' => $category_parent,
            'slider' => $slider,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $this->sliderService->update($request,$id);
          return redirect()->route('sliders.index')->with('success', 'Update Product Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
