<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\OnlineDiet;
use App\Models\Cinsiyet;
use SEO;


class MessageController extends Controller
{
	public function getAllMessage(Request $request)
	{
		SEO::setTitle('Tüm Mesajlar');
		$message = Message::orderby('id','DESC')->paginate(10);
		return view('back.message.all-message',compact('message','request'));

	}
	public function getAllOnlineDiet(Request $request)
	{
		SEO::setTitle('Tüm Talepler');
		$cinsiyet=Cinsiyet::all();
		$message = OnlineDiet::orderby('id','DESC')->paginate(10);
		return view('back.message.all-talep',compact('message','request','cinsiyet'));

	}


	public function getDeleteMessage(Request $request)
	{
		$message = Message::find($request->id);
		$message->delete();
		return redirect()->route('getAllMessage')->with('success','Başarıyla Silindi');
	}
	public function getMessageDetail(Request $request)
	{
		$message = Message::find($request->id);
		return view('back.message.message-detail',compact('message'));
	}

	public function getDeleteTalep(Request $request)
	{
		$message = OnlineDiet::find($request->id);
		$message->delete();
		return redirect()->route('getAllOnlineDiet')->with('success','Başarıyla Silindi');
	}




}