<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Send welcome email to user
     */
    public function sendWelcomeEmail(Request $request)
    {
        // Validasi email jika diperlukan
        $request->validate([
            'email' => 'required|email'
        ]);

        $recipientEmail = $request->email; // Mengambil email dari input form

        try {
            Mail::to($recipientEmail)->send(new WelcomeEmail());
            
            return redirect()->back()->with('success', 'Email berhasil dikirim!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengirim email: ' . $e->getMessage());
        }
    }

    /**
     * Alternative: method dengan parameter langsung
     */
    public function sendWelcomeEmailToUser($email)
    {
        Mail::to($email)->send(new WelcomeEmail());
        
        return redirect()->back()->with('success', 'Email berhasil dikirim ke ' . $email);
    }
}