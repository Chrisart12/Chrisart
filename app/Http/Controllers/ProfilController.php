<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfilUpdateRequest;

use App\Repositories\ProfilRepository;

use Illuminate\Http\Request;

class ProfilController extends Controller
{

    protected $profilRepository;

    public function __construct(ProfilRepository $profilRepository)
    {
        $this->profilRepository = $profilRepository;
    }

    // public function store(ProfilCreateRequest $request)
    // {
    //     $user = $this->profilRepository->store($request->all());

    //     return redirect('user')->withOk("L'utilisateur " . $user->name . " a été créé.");
    // }

    public function show($id)
    {
        $user = $this->profilRepository->getById($id);

        return view('showProfil',  compact('user'));
    }

    public function edit($id)
    {
        $user = $this->profilRepository->getById($id);

        return view('editProfil',  compact('user'));
    }

    public function update(ProfilUpdateRequest $request, $id)
    {
        $this->profilRepository->update($id, $request->all());
        
        $user = $this->profilRepository->getById($id);

        return view('showProfil',  compact('user'));
    }

    public function destroy($id)
    {
        $this->profilRepository->destroy($id);

        // return back();
        // return Redirect::route("deleteProfil");
        return view("deleteProfil");
    }

    public function store(Request $request)
    {
        

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

         
    }
    



}