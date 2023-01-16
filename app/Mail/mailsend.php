<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;

class mailsend extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->user = $user;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Order Receipt',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        $order_latest = Order::orderby('order_id','desc')->select('*')->pluck('reservation_id')->first();
        $orders = Order::with(['menus','reservations'])->where('reservation_id', $order_latest)->get();  
        return new Content(
            view: 'print_receipt'
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
    public function build()
    {
        $order_latest = Order::orderby('order_id','desc')->select('*')->pluck('reservation_id')->first();
        $orders = Order::with(['menus','reservations'])->where('reservation_id', $order_latest)->get();  
        return $this->from('admin@ichiraku.com')
                    ->view('print_receipt', compact('orders'));
                    // ->with(['user' => $this->user]);
    }
}
