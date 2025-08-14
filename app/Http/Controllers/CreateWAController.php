<?php

namespace App\Http\Controllers;

use hisorange\BrowserDetect\Parser as Browser;
use App\Models\WhatsAppMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateWAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $noWA = '62'.$request->noWA;
        $teks = $request->teks;

        if (Browser::isDesktop()) {
            if ($teks){
                return redirect()->to(url('https://web.whatsapp.com/send?phone='.$noWA.'&text='.$teks ));
            }
            return redirect()->to(url('https://web.whatsapp.com/send?phone='.$noWA ));
        } else {
            if ($teks){
                return redirect()->to(url('https://api.whatsapp.com/send?phone='.$noWA.'&text='.$teks ));
            }
            return redirect()->to(url('https://web.whatsapp.com/send?phone='.$noWA ));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        function generate_password($len = 24){
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $urlacak = substr( str_shuffle( $chars ), 0, $len );
            return $urlacak;
           }

        //For Wa Link
        $noWA = '62'.$request->noWA;
        $teks = $request->teks;
        $urlacak =generate_password();
        
        //Cek URL udah ada atau belum
        $dataurl = WhatsAppMe::where('Weburl','http://whatsappme.test/'.$request->url)->count();
        if ($dataurl > 0) {
            return back()->with('error', 'Mohon maaf Url ini sudah digunakan.');
        };

            $data = $request->all();
            $data['noWA'] = $request->noWA;
            // $data['email'] = $request->email;
            $data['urlacak'] = $urlacak;

            $data['Weburl'] = 'http://whatsappme.test/'.$request->url;

            //pakai teks atau tidak
            if ($request->teks) {
                $data['WA_WEBurl'] = 'https://web.whatsapp.com/send?phone='.$noWA.'&text='.$teks; 
                $data['WA_APIurl'] = 'https://api.whatsapp.com/send?phone='.$noWA.'&text='.$teks;
                $data['teks'] = $request->teks;      
            } else {
                $data['WA_WEBurl'] = 'https://web.whatsapp.com/send?phone='.$noWA; 
                $data['WA_APIurl'] = 'https://api.whatsapp.com/send?phone='.$noWA;
            }

            WhatsAppMe::create($data);
            
            return redirect('/YourLink/'.$urlacak);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($urlacak)
    {
        // return $urlacak;
        $cek = WhatsAppMe::where('urlacak', $urlacak)->count();
        $myWA = WhatsAppMe::where('urlacak', $urlacak)->get();

        if ($cek > 0){
            return view('success',compact('myWA'));
            // return $myWA;
        }
        return redirect()->to(url('/'));
    }

    public function link($code)
    {
        $link = WhatsAppMe::where('Weburl', 'http://whatsappme.test/'.$code)->first();

        if (Browser::isDesktop()) {
            if ($link){
                return redirect()->to(url($link->WA_WEBurl));
            }
            return redirect()->to(url('/'));
        } else {
            if ($link){
                return redirect()->to(url($link->WA_APIurl));
            }
            return redirect()->to(url('/'));
        }
         
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
