<?php

namespace App\Jobs;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminChangePasswordMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AdminChangePasswordJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $email, $name;
    public function __construct($email, $name)
    {
        $this->name = $name;
        $this->email = $email;
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)
            ->send(new AdminChangePasswordMail($this->name));
            
    }
}
