<?php
/**
 * Created by PhpStorm.
 * User: huertix
 * Date: 9/24/16
 * Time: 8:00 PM
 */

namespace AppBundle\Tests\Command;

use AppBundle\Tests\Command\CommandTestCase;


 class HiCommandTest extends CommandTestCase
 {
     public function testDefaultDoesNotInstall()
     {
         $client = self::createClient();
         $output1 = $this->runCommand($client, "hi");
         $output2 = $this->runCommand($client, "hi kike");
         $output3 = $this->runCommand($client, "hi Carlos");

         $this->assertContains('Hallo', $output1, 'output does not contains hello');
         $this->assertContains('Que paso??', $output2, 'output does not contains hello');
         $this->assertContains('Knallkopf', $output3, 'output does not contains hello');
     }
 }