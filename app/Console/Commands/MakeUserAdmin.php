<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:makeUserAdmin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rende un utente amministratore';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $email = $this->ask("Inserisci l'email dell'utente che vuoi rendere amministratore");
        $user = User::where('email', $email)->first();

        if(!$user) {
            $this->error("Utente non trovato");
            return;
        }

        $user->is_admin = true;
        $user->save();
        $this->info("L'utente {$user->name} è ora un amministratore");
    }
}
