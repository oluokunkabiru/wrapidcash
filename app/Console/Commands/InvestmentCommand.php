<?php

namespace App\Console\Commands;

use App\Models\investor\Investment;
use Illuminate\Console\Command;

class InvestmentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'investments:create';

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
        $activeinv = Investment::with(['investor', 'coin'])->where('status', 'active')->get();
        foreach($activeinv as $inv){
            $startTime = strtotime($inv->invest_date );
            $today =  time(); //date('Y-m-d');
            $endTime = strtotime($inv->end_date);
            $revenue = $inv->revenue;
            // $coin->price * appSettings()->investment_charges;$inv->quantity *
            if($today < $endTime){
                $invm = Investment::with(['investor', 'coin'])->find($inv->id);
                $revenue = 0;
                // 86400
                for ( $i = $startTime; $i <= $today; $i += 60) {
                    $revenue += $invm->quantity * appSettings()->investment_percentage;
                    }
                $invm->revenue = $revenue;
                $invm->update();
            }

        }
        // return 0;
        return $this->info("Good morning");
    }
}
