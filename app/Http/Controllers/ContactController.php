<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:2000',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'subject.required' => 'Subjek wajib diisi.',
            'message.required' => 'Pesan wajib diisi.',
        ]);

        // Jika mau kirim email sungguhan, uncomment baris di bawah
        // dan konfigurasikan MAIL_* di file .env kamu
        //
        // Mail::send('emails.contact', $validated, function($mail) use ($validated) {
        //     $mail->to('your@email.com')
        //          ->subject('Pesan Portfolio: ' . $validated['subject'])
        //          ->replyTo($validated['email'], $validated['name']);
        // });

        return back()
            ->with('success', 'Pesan berhasil dikirim! Saya akan membalas secepatnya 🚀')
            ->withInput(['name' => '', 'email' => '', 'subject' => '', 'message' => '']);
    }
}