<?php

namespace App\Http\Controllers;

use App\Mail\contactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {




    public function index(Request $request) {
        $runner = $request->all();
        $info = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo accusamus deserunt ex praesentium tempore aut fugiat, consequuntur vero consequatur inventore deleniti quidem ad tenetur aliquam molestiae, repellat ducimus voluptatibus quos.
        Beatae fuga, architecto adipisci dolore culpa sed repellendus aliquid veniam eveniet illo animi, dolor temporibus rem. Dolorem itaque deleniti modi ex qui omnis quod enim, dicta debitis autem nobis officiis?
        Ea natus porro beatae possimus ratione a soluta cupiditate molestiae reprehenderit? Aspernatur quod eveniet perspiciatis veniam at aliquid sapiente nesciunt aperiam nam, dolore saepe consectetur, rem animi! Voluptatem, explicabo magnam.
        Dolor cumque ex nihil, ut hic nobis aliquid dolorem. Amet consectetur fugit quos eos, vel maiores aperiam delectus enim magnam error rerum ab ipsa in, unde officia, nobis odit commodi';
        // if form submitted
        if(!empty($runner)) {
            return redirect()->action('ContactController@send', ['runner' => $runner]);
        }
        // else show contact form
        return view('contact/index', ['runner' => $runner]);
    }

    public function send(Request $request) {
        $name = $request->name;
        $runner = $request->all();
        Mail::to('jasiurski@gmail.com')->send(new contactMessage($request));
        // Mail::send('emails.contactMessage', ['name' => $name], function ($message, $runner) {
        //     $message->from($runner['email'], $runner['name']);
        //     $message->to('ljasiurski@gmail.com');
        //     $message->subject($request->subject);
        // });
    }
}
