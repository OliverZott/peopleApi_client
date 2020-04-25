<?php

namespace AppBundle\Controller;

use Google_Client;
use Google_Service_Books;
use Google_Service_PeopleService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        //var_dump(phpinfo());
        //var_dump($this->get('kernel')->getProjectDir());die;



        /*
        require __DIR__ . '/vendor/autoload.php';
        require_once 'google-api-php-client/autoload.php';

        // checks php context (php cli / php module)

        if (php_sapi_name() != 'cli') {
            throw new Exception('This application must be run on the command line.');
        }
        */


        /**
         * Google Books Example (NOT WORKING?!)
         */
        /*
        $client = new Google_Client();
        $client->setApplicationName("Client_Library_Examples");
        $client->setDeveloperKey("YOUR_APP_KEY");

        $service = new Google_Service_Books($client);
        $optParams = array('filter' => 'free-ebooks');
        $results = $service->volumes->listVolumes('', $optParams);
        //$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

        foreach ($results->getItems() as $item) {
            echo $item['volumeInfo']['title'], "<br /> \n";
        }
        */

        /**
         * Returns an authorized API client.
         * @return Google_Client the authorized client object
         */

        /*
        function getClient()
        {

            define('STDIN',fopen("php://stdin","r"));

            $client = new Google_Client();
            $client->setApplicationName('People API PHP Quickstart');
            $client->setScopes(Google_Service_PeopleService::CONTACTS_READONLY);
            $client->setAuthConfig('/home/olli/PhpstormProjects/peopleApi_client/credentials.json');
            $client->setAccessType('offline');
            $client->setPrompt('select_account consent');

            // Load previously authorized token from a file, if it exists.
            // The file token.json stores the user's access and refresh tokens, and is
            // created automatically when the authorization flow completes for the first
            // time.
            $tokenPath = 'token.json';
            if (file_exists($tokenPath)) {
                $accessToken = json_decode(file_get_contents($tokenPath), true);
                $client->setAccessToken($accessToken);
            }

            // If there is no previous token or it's expired.
            if ($client->isAccessTokenExpired()) {
                // Refresh the token if possible, else fetch a new one.
                if ($client->getRefreshToken()) {
                    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                } else {
                    // Request authorization from the user.
                    $authUrl = $client->createAuthUrl();
                    printf("Open the following link in your browser:\n%s\n", $authUrl);
                    print 'Enter verification code: ';
                    $authCode = trim(fgets(STDIN));

                    // Exchange authorization code for an access token.
                    $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
                    $client->setAccessToken($accessToken);

                    // Check to see if there was an error.
                    if (array_key_exists('error', $accessToken)) {
                        throw new Exception(join(', ', $accessToken));
                    }
                }
                // Save the token to a file.
                if (!file_exists(dirname($tokenPath))) {
                    mkdir(dirname($tokenPath), 0700, true);
                }
                file_put_contents($tokenPath, json_encode($client->getAccessToken()));
            }
            return $client;
        }


// Get the API client and construct the service object.
        $client = getClient();
        $service = new Google_Service_PeopleService($client);

// Print the names for up to 10 connections.
        $optParams = array(
            'pageSize' => 10,
            'personFields' => 'names,emailAddresses',
        );
        $results = $service->people_connections->listPeopleConnections('people/me', $optParams);

        if (count($results->getConnections()) == 0) {
            print "No connections found.\n";
        } else {
            print "People:\n";
            foreach ($results->getConnections() as $person) {
                if (count($person->getNames()) == 0) {
                    print "No names found for this connection\n";
                } else {
                    $names = $person->getNames();
                    $name = $names[0];
                    printf("%s\n", $name->getDisplayName());
                }
            }
        }
    //*/
        


        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
