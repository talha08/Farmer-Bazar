<?php

class UserController extends \BaseController
{

    /**
     * show user registration form
     * @return mixed
     */
    public function create()
    {

        return View::make('main.signup')->with('title', 'Register');
    }


    /**
     * user registration validation
     * @return mixed
     */
    public function store()
    {
        $rules = [
            'contact' => 'required|unique:users',
            'name' => 'required',
            'district' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];

        $data = Input::all();

        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return Redirect::back()->withErrors($validation)->withInput(Input::except('password', 'password_confirmation'));
        } else {


            $user = new User();

            $user->contact = $data['contact'];
            $user->name = $data['name'];
            $user->district = $data['district'];
            $user->password = Hash::make($data['password']);

            if ($user->save()) {

                $role = Role::find(2);
                $user->attachRole($role);

                $user_info = new UserInfo();
                $user_info->user_id = $user->id;
                $user_info->fullname = null;
                $user_info->address = null;
                $user_info->email = null;
                //set a default avatar
                $user_info->icon_url = 'uploads/image/defaultAvatar.png';
                $user_info->avatar_url = 'uploads/image/defaultAvatar.png'; ;
                if($user_info->save()){
                    return Redirect::route('login')->with('success', "Log In Please.");
                }

                }

             else {
                return Redirect::back()->withInput()->withErrors($validation);
            }
        }
    }





    public function show()
    {
        $user = Auth::user()->userInfo;
        return View::make('user.show')->with('title','Profile')
                                        ->with('user',$user);
    }





    public function edit()
    {
        $profileInfo = UserInfo::where('user_id',Auth::user()->id)->with('User')->first();
        return View::make('user.edit')->with('title', 'Update Profile')
            ->with('profileInfo', $profileInfo);
    }





    public function update()
    {
        $rules = [
           // 'fullName' => 'required'
        ];

        $data = Input::all();

        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return Redirect::back()->withErrors($validation)
                ->withInput();
        } else {
            $userInfo = UserInfo::where('user_id', Auth::user()->id)
                ->update(array(
                    'fullname' => $data['fullname'],
                    'address' => $data['address'],
                    'email' => $data['email'],

                ));
            $user = User::where('id', Auth::user()->id)
                ->update(array(
                    'contact' => $data['contact'],
                    'name' => $data['name'],
                    'district' => $data['district'],
                ));

            if ($userInfo && $user) {
                return Redirect::route('user.show')->with('success', 'profile updated successfully');
            } else {
                return Redirect::back()->withInput()->withErrors($validation);
            }
        }
    }

    public function uploadAvatarForm()
    {
        return View::make('user.avatar')->with(['title' => 'Avatar']);
    }

    public function uploadAvatar()
    {
        //add two extra fields to userinfo table
        //icon path & avatar path

        $rules = array(
            'image' => 'required|image|max:5000'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::route('upload.avatar')
                ->withErrors($validator)// send back all errors to the login form
                ->withInput(); // send back the input (not the password) so that we can repopulate the form
        } else {

            if (Input::hasFile('image')) {
                $image = Input::file('image');

                //deleting previous file
                $prev_avatar_url = Auth::user()->userInfo->avatar_url;
                if ($prev_avatar_url != 'uploads/image/defaultAvatar.png') {
                    if (File::exists($prev_avatar_url)) {
                        File::delete($prev_avatar_url);
                    }
                    $prev_icon_url = Auth::user()->userInfo->icon_url;
                    if (File::exists($prev_icon_url)) {
                        File::delete($prev_icon_url);
                    }
                }

                $avatar_url = 'uploads/image/avatar/avatar-' . Auth::user()->id . '.jpg';
                $icon_url = 'uploads/image/icon/icon-' . Auth::user()->id . '.jpg';

                Image::make($image)->resize(200, 200)->save(public_path($avatar_url));
                Image::make($image)->resize(50, 50)->save(public_path($icon_url));

                $imageInfo = UserInfo::where('user_id', Auth::user()->id)
                    ->update(array(
                        'avatar_url' => $avatar_url,
                        'icon_url' => $icon_url
                    ));

                if ($imageInfo) {
                    return Redirect::route('user.show')->with('success', 'avatar updated successfully');
                } else {
                    return Redirect::back()->withInput()->withErrors($validator);
                }

            } else {

                return Redirect::route('upload.avatar')->with(['error' => 'image could not be uploaded']);
            }

        }

    }


}