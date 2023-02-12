<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $w;
    private $h;
    private $fileName;
    private $path;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($filePath, $w, $h)
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $w = $this->w;
        $h = $this->h;
        $scrPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;
        $destWatermarkPath = storage_path() . '/app/public/' . $this->path . '/'. $this->fileName;


        $croppedImage = Image::load($scrPath)
            ->crop(Manipulations::CROP_CENTER, $w, $h)
            ->watermark(base_path('public/media/presto-it-logo.png'))
            ->watermarkOpacity(50)
            ->watermarkPosition(Manipulations::POSITION_CENTER)
            ->watermarkHeight(50, Manipulations::UNIT_PERCENT)
            ->watermarkWidth(100, Manipulations::UNIT_PERCENT)
            ->save($destPath);
        

        $watermarkImage = Image::load($scrPath)
        ->watermark(base_path('public/media/presto-it-logo.png'))
        ->watermarkOpacity(50)
        ->watermarkPosition(Manipulations::POSITION_CENTER)
        ->watermarkHeight(50, Manipulations::UNIT_PERCENT)
        ->watermarkWidth(100, Manipulations::UNIT_PERCENT)
        ->save($destWatermarkPath);
    }
}
