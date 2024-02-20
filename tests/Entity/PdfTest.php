<?php

namespace App\Tests\Entity;

use App\Entity\Pdf;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class PdfTest extends TestCase
{
    public function testGetterAndSetter()
    {
        // Création d'une instance de l'entité Pdf
        $pdf = new Pdf();

        $userId = new User();

        // Utilisation des setters
        $pdf->setFilename('Test.pdf');
        $pdf->setName('Test');
        $pdf->setCreatedAt();
        $pdf->setUserId($userId);

        // Vérification des getters
        $this->assertEquals('Test.pdf', $pdf->getFilename());
        $this->assertEquals('Test', $pdf->getName());
        $this->assertEquals($userId, $pdf->getUserId());
    }
}
