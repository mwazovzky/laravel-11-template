<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Uuid;

class TestJob implements ShouldQueue
{
    use Queueable;

    private string $uuid = '';

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $this->uuid = Uuid::uuid4()->toString();

        Log::info('TestJob::__construct', [
            'id' => $this->uuid,
        ]);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::info('TestJob::handle', [
            'id' => $this->uuid,
        ]);
    }
}
