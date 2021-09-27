<?php

namespace App\Console\Commands;

use App\Models\Investor;
use App\Models\investor\Investment;
use Illuminate\Console\Command;

class InvestmentBalance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'investments:balance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {

        $investor = Investor::with(['user'])->get();
        // return $activeinv;
        foreach($investor as $inv){
            $activeinv = Investment::with(['investor', 'coin'])->where(['status'=>'active'])->where('revenue', '!=', null)->where('investor_id', $inv->id)->get();
            $inves = Investor::find($inv->id);
            $balance = 0;
            foreach($activeinv as $act){
                $balance += $act->revenue;
            }
            $inves->balance = $balance;
            $inves->update();
        }
        return 0;
    }
}
