<?php

namespace App\Http\Controllers;
use Session;
use App\Mail\contactMessage;
use Mail;
use Illuminate\Http\Request;


class ContactController extends Controller {




    public function index(Request $request) {
        $runner = $request->all();
        $info = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo accusamus deserunt ex praesentium tempore aut fugiat, consequuntur vero consequatur inventore deleniti quidem ad tenetur aliquam molestiae, repellat ducimus voluptatibus quos.
        Beatae fuga, architecto adipisci dolore culpa sed repellendus aliquid veniam eveniet illo animi, dolor temporibus rem. Dolorem itaque deleniti modi ex qui omnis quod enim, dicta debitis autem nobis officiis?
        Ea natus porro beatae possimus ratione a soluta cupiditate molestiae reprehenderit? Aspernatur quod eveniet perspiciatis veniam at aliquid sapiente nesciunt aperiam nam, dolore saepe consectetur, rem animi! Voluptatem, explicabo magnam.
        Dolor cumque ex nihil, ut hic nobis aliquid dolorem. Amet consectetur fugit quos eos, vel maiores aperiam delectus enim magnam error rerum ab ipsa in, unde officia, nobis odit commodi';
        // if form submitted

        return view('contact/index', ['runner' => $runner]);
    }

    public function send(Request $request) {
        $this->validate($request, [
            'message' => 'min:10',
            'subject' => 'min:3',
            'name' => 'min:3',
            'email' => 'required|email']);
        // we CANNOT pass a variable called 'message', as it's reserved keyword, so lets use other name
        
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'enquiry' => $request->message
        );

        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->from($data['email']);
            $message->to('ljasiurski@gmail.com');
            $message->subject($data['subject']);
        });

        // $request->session()->flash('success', "We received your email, thank you!");
        // Session::flash('status', 'Your email was sent!');

        // Session::flash('failure', )

        // Mail::send('emails.contactMessage', ['name' => $name], function ($message, $runner) {
        //     $message->from($runner['email'], $runner['name']);
        //     $message->to('ljasiurski@gmail.com');
        //     $message->subject($request->subject);
        // });
    }
}
