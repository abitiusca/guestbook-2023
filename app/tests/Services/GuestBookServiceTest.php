<?php

namespace App\Tests\Services;

use App\Repository\GuestbookRepository;
use App\Service\GuestbookService;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Security;

class GuestBookServiceTest extends TestCase
{
    public function testGetGuestbookForAdmin(): void
    {
        $guestbookRepository = $this->createMock(GuestbookRepository::class);
        $security = $this->createMock(Security::class);
        $security->expects($this::once())->method('isGranted')->with($this->equalTo('ROLE_ADMIN'))
            ->willReturn(true);
        $service = new GuestbookService($guestbookRepository, $security);
        $this->assertEquals(true, is_array($service->getGuestbook()));
    }

    public function testGetGuestbookForSimpleUser(): void
    {
        $guestbookRepository = $this->createMock(GuestbookRepository::class);
        $security = $this->createMock(Security::class);
        $security->expects($this::once())->method('isGranted')->with($this->equalTo('ROLE_ADMIN'))
            ->willReturn(false);
        $service = new GuestbookService($guestbookRepository, $security);
        $this->assertEquals(true, is_array($service->getGuestbook()));
    }

}