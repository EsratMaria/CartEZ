<?php

namespace App\Http\Controllers;

use App\Complain;
use App\Complain_mail_box;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ComplainController extends Controller
{
    public function index()
    {
        $data=Complain::all();
        $mail_box=Complain_mail_box::all();
        return view('complains.complain',compact('data'));
    }

    public function create()
    {
        $com=Complain::all();
        return view('complains.create',compact('com'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data= Complain::findOrfail($id);
        return view('complains.mail_box',compact('data'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit_reply($id)
    {
        $data= Complain_mail_box::findOrfail($id);
        return view('complains.edit',compact('data'));

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $com= Complain::findOrFail($id);
        $com->delete();
        Session::flash('deleted_complain','The Complain has been deleted');
        return redirect('/complains');
    }
    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function reply_destroy($id)
    {
        $com= Complain_mail_box::findOrFail($id);
        $com->delete();
        Session::flash('deleted_reply','The Reply has been deleted');
        return redirect('/complains');
    }
    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reply(Request $request, $id)
    {
        $this->validate($request,[

            'reply'=>'required'
        ]);
        $complain_id=Complain::findOrFail($id);
        $user=$complain_id->user->email;
        $admin= auth::user()->name;
        $box =new Complain_mail_box;
        $box['complain_id'] = $id;
        $box['from'] = $admin;
        $box['to'] = $user;
        $box['mail_text'] = $request->get('reply');
        $box->save();
        Session::flash('created_reply','The Reply has been posted');
        return redirect('/complains');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tran= Complain::findOrFail($id);
        if($request->get('complain_status')) {
            $tran['complain_status'] = $request->get('complain_status');
        }
        $tran->save();
        Session::flash('updated_complain','The Complain has been updated');
        return redirect('/complains');
    }
    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_reply(Request $request, $id)
    {
        $this->validate($request,[
            'mail_text'=>'required'
        ]);
        $com= Complain_mail_box::findOrFail($id);
        $com['mail_text']=$request->get('mail_text');
        $com->save();
        Session::flash('updated_reply','The Reply has been updated');
        return redirect('/complains');
    }
}
