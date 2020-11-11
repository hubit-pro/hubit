<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\CreateuserRequest;
use App\Http\Requests\User\UpdateuserRequest;
use App\User;
use Auth;
use Str;

class UserController extends Controller
{
     private $user;

    public function __construct(User $user)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->user = $user;
    }
   
    public function index()
    {
        $data['users'] = $this->user->latest()->get();
        return view('backend.user.index', $data);
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(CreateUserRequest $request)
    {
        $data = $request->all();
        $user = $this->getModel();
        $user->fill($request->all());
        $user->slug = str::slug($request->fullName).time();
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect(route('admin.user.index'))->with('success', 'Added Successfully');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data['user'] = $this->user->where('slug', $slug)->latest()->first();

        return view('backend.user.edit', $data);
    }

    public function update(UpdateUserRequest $request, $slug)
    {
        $data = $request->all();
        $user = $this->user->where('slug', $slug)->first();
        $user->fill($request->all());
        $user->slug = str::slug($request->fullName).time();
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect(route('admin.user.index'))->with('success', 'Updated Successfully');
    }


    public function changeStatus(Request $request)
    {
        $news = $this->user->findOrFail($request->news_id);
        $news->status = $request->status;
        $news->save();
        $data['success'] =  "Status Changed Successfully";
        return $data;
    }

    public function destroy($id)
    {
        $user = $this->user->findOrFail($id);
        if (!$user) {
            return 'Record not found';
        }
        $user->delete();

        return "#user".$id;
    }

    protected function getModel()
    {
        return new User();
    }
}
