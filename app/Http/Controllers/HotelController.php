<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\ImagesHotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::latest()->paginate(6);
        return view('index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nom'=>'required|max:255',
            'description1'=>'required|max:255',
            'description2'=>'required',
            'caracteristique'=>'required',
            'lieu'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png,gif,svg',
        ]);
        $image = $request->file('image');
        $destinationPath = 'imageProfil/';
        $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
        $image->move($destinationPath,$profileImage);
        $validateData['image'] = $profileImage;
        $hotels = Hotel::create($validateData);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel= Hotel::find($id);
        //récupère tous les images de l'hotel associé via foreign key
        $images= $hotel->images()->get();
        return view('hotels.hotel', [
            "hotel"=>$hotel,
            "images"=>$images
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
