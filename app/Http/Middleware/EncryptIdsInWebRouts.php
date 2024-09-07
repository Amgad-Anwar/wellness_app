<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EncryptIdsInWebRouts
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Decrypt model IDs in the incoming request
      
        $decryptedParameters = $request->route()->parameters();
       
       

        // Check if $decryptedParameters is an array before processing
        if (is_array($decryptedParameters)) {
            foreach ($decryptedParameters as $key => $value) {
                if (Str::startsWith($value, 'eyJpd') ) {
                    $decryptedParameters[$key] = decrypt($value);
                   // dd( $decryptedParameters);
                   $request->route()->setParameter($key,  $decryptedParameters[$key]);
                 
                }
            }
           // $request->route()->parameters($decryptedParameters);
          //  dd(   $request->route()->parameters() ); 
        }

        $response = $next($request);

        // Encrypt model IDs in the outgoing response
        // if ($response->getStatusCode() === 200) {

        //     $pattern = '/href="([^"]+)"/';
        //     $htmlContent = $response->getContent();

        //     $htmlContent = preg_replace_callback($pattern, function ($matches) {
        //         $href = $matches[1]; // Extract the href value

        //         // Check if the href contains a numeric ID
        //         if (preg_match('/\/(\d+)$/', $href, $idMatches)) {
        //             $id = $idMatches[1];

        //             // Encrypt the ID (you may need to adjust this based on your encryption logic)
        //             $encryptedId = encrypt($id);

        //             // Replace the original href with the encrypted ID
        //             return 'href="' . preg_replace('/\/(\d+)$/', '/' . $encryptedId, $href) . '"';
        //         }

        //         // Return the original href if no numeric ID is found
        //         return 'href="' . $href . '"';
        //     }, $htmlContent);

        //     //dd(   $htmlContent  ) ;
        //     $response->setContent($htmlContent);



        //     // $content = json_decode($response->getContent(), true);

        //     // // Check if $content is an array before processing

        //     // if (is_array($content)) {
        //     //     array_walk_recursive($content, function (&$item, $key) {
        //     //         if (is_numeric($item)) {
        //     //             $item = encrypt($item);
        //     //         }
        //     //     });

        //     //     $response->setContent(json_encode($content));
        //     // }
        // }

        return $response;
    }
}
