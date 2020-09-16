<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
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
        //
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param Request $request
     * @param Throwable $exception
     * @return Response
     *
     * @throws Throwable
     */
    public function render($request, Throwable $exception): Response
    {
        // Call parent.
        $response = parent::render($request, $exception);

        // Get status code.
        $status_code = $response->status();

        // Render inertia page if we're in production.
        if (app()->environment('production') && in_array($status_code, [500, 503, 404, 403]))
        {
            return Inertia::render('Error', ['status' => $status_code])
                ->toResponse($request)
                ->setStatusCode($status_code);
        }

        // Return response.
        return $response;
    }

}
