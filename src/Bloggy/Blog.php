<?php
namespace Bloggy;

use Bloggy\HttpMessaging\Request;
use Bloggy\Routing\Router;

class Blog
{
    public function handleRequest(Request $request)
    {
        $router = new Router();
        $actionConfiguration = $router->getActionConfiguration($request);
        try {
            $response  = call_user_func_array(
                    $actionConfiguration->getController(),
                    $actionConfiguration->getArguments()
            );
        }
        catch(ResourceNotFoundException $e) {

        }
        catch(NonRespondingDatabaseException $e) {
            return new Response();
        }
        return $response;
    }
}
