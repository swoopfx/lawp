<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\JsonModel;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function exportAction()
    {
        $pwd = getcwd();
        // echo $pwd;
        chdir("bin");
        $out = shell_exec('./export.sh > /dev/null 2>/dev/null &');
        // $out = shell_exec('./export.sh');
        // var_dump($out);
        chdir($pwd);
        // echo getcwd();
        $jsonModel = new ViewModel();
        return $jsonModel;
    }

    public function repopulateAction()
    {
        $pwd = getcwd();
        // echo $pwd;
        chdir("bin");
        shell_exec('./populate.sh > /dev/null 2>/dev/null &');
        chdir($pwd);
        // echo getcwd();
        $jsonModel = new ViewModel();
        return $jsonModel;
    }

    public function listfilesAction()
    {

        $pwd = getcwd();
        // echo $pwd;
        chdir("bin");
        // shell_exec('./export.sh &> /dev/null &');

        $files = [];
        foreach (glob(getcwd() . "/*.csv") as $key => $filename) {
            // do something with $filename
            $files[$key]["base"] =  basename($filename);
            $files[$key]["real"] = realpath($filename);
        }
        $jsonModel = new ViewModel(
            ["files" => $files]
        );
        return $jsonModel;
    }

    public function downloadAction()
    {

        $filepath = $this->params()->fromQuery("file");
        if (isset($filepath)) {

            // Get parameter and decode URL-encoded string 
            // $filepath = urldecode($_REQUEST["file"]);

            // Test whether the file name contains illegal characters 

            // if (preg_match('/^[^.][-a-z0-9_.]+[a-z]$/i', $filepath)) {

                // var_dump(file_exists($filepath));
                // Process download 
                if (file_exists($filepath)) {
                    // var_dump($filepath);
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/csv');
                    header('Content-Disposition: attachment; filename="'
                        . basename($filepath) . '"');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($filepath));

                    // Flush system output buffer 
                    flush();
                    readfile($filepath);
                    die();
                } else {
                    http_response_code(404);
                    die();
                }
            // } else {
            //     die("Download cannot be processed");
            // }
        }
    }
}
