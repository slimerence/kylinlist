<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/13
 * Time: 12:52
 */

namespace App\Http\Controllers\Backend;

use App\Mail\MessageReceived;
use App\User;
use App\Model\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function index(){
        $user = Auth::user();
        $this->data_view['menu']='in';
        $this->data_view['users'] = User::orderby('id','asc')->get();
        $this->data_view['messages'] = Message::where('to_id',$user->id)->orderby('id','desc')->get();
        $this->data_view['data_table'] = true;
        //dd(count(Message::orderby('id','asc')->get()));
        return view('backend.message.list',$this->data_view);
    }

    public function add(){
        $this->data_view['users'] = User::orderby('id','asc')->get();
        $this->data_view['messages'] = Message::orderby('id','asc')->get();

        return view(_get_backend_path('message.add'),$this->data_view);
    }

    public function sent(){
        $user = Auth::user();
        $this->data_view['menu']='out';
        $this->data_view['users'] = User::orderby('id','asc')->get();
        $this->data_view['messages'] = Message::where('from_id',$user->id)->orderby('id','desc')->get();
        //dd(count(Message::orderby('id','asc')->get()));
        return view(_get_backend_path('message.index'),$this->data_view);
    }

    public function save(Request $request){

        $data = $request->get('message');
        $data['status'] = 'unread';
        $message = Message::create($data);
        if(true){
            $to = User::where('id',$message->to_id)->first();
            Mail::to($to->email)
                ->send(new MessageReceived($message));
        }
        return redirect('backend/messages');
        //dd($message);

    }

    public function delete($id){
        $info = Message::find($id);
        if($info){
            $info->status = 'read';
            $info->delete();
        }
        return redirect('backend/messages');
    }

    public function view($id){
        $info = Message::find($id);
        if($info){
            $info->status = 'read';
            $info->save();
        }
        $this->data_view['info']= $info;
        return view(_get_backend_path('message.detail'),$this->data_view);
    }

    public function reply(Request $request){
        $data = $request->all();
        $message = Message::find($data['message_id']);
        if($message){
            $this->data_view['info'] = $message;
            return view(_get_backend_path('message.reply'),$this->data_view);
        }else{
            return redirect('/backend/messages');
        }
    }
}
