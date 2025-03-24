<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use Symfony\Component\HttpFoundation\Response;

class StartSession
{
    protected $session;

    public function __construct(SessionManager $session)
    {
        $this->session = $session;
    }

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Bắt đầu session nếu chưa có
        $this->session->start();

        // Chia sẻ session với view (nếu cần)
        view()->share('session', $this->session);

        return $next($request);
    }
}
