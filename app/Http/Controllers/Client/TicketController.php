<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\product\Product;
use App\models\website\Setting;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{
    public function FormTicket(Request $request){
        $id = $request->id;
        $data['product'] = Product::findOrFail($id);
        $view1 = view('layouts.product.ticketcar', $data)->render();
        return response()->json([
            'html1' => $view1,
        ]);
    }
    public function SentMail(Request $request){
        $myMail = Setting::first();
        if (isset($request->idticket)) {
            $id = $request->idticket;
            $data['product'] = Product::findOrFail($id);
        }
        $data['dataMail'] = [
            'mymail' => $myMail->email,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'mess' => $request->mess,
            'date' => $request->date
        ];
        \Mail::send('layouts.product.formMail',$data,function($message) use ($data){
            $message->to($data['dataMail']['mymail'])->from($data['dataMail']['email'],$data['dataMail']['name'])->subject('BOOKING TICKET '.date('d-m-Y',strtotime(now())));
        });
        return redirect()->back()->with('successMail','Sent mail successfully');
    }
}
