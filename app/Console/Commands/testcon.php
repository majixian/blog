<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class testcon extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testcon{option}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command used to test console';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $this->comment('this is a console test');
        $option = $this->argument('option');
        $this->comment($option);
    }
}
