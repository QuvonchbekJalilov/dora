<?php

namespace App\Exceptions;

use App\Models\Post;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\DesignService;
use App\SeoService;
use App\MarketingService;
use App\SiteService;
use Throwable;

class Handler extends ExceptionHandler
{
    
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            $siteservices = SiteService::all();
            $designservices = DesignService::all();
            $seoservices = SeoService::all();
            return response()->view('front.404', compact('siteservices','designservices','seoservices'), 404);
        }
    
        return parent::render($request, $exception);
    }
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    
    
}
