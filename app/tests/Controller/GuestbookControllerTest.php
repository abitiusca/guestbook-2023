<?php

namespace App\Tests\Controller;

use App\Controller\GuestbookController;
use App\Entity\Guestbook;
use App\Repository\GuestbookRepository;
use App\Service\GuestbookService;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;

class GuestbookControllerTest extends TestCase
{

    public function testIndexWithService(): void
    {
        $service = $this->createMock(GuestbookService::class);
        $service->method('getGuestbook')->willReturn(array());

        $controller = new GuestbookController();
        $this->expectError();
        $controller->index($service);
    }

    public function testNew(): void
    {
        $request = $this->createMock(Request::class);
        $guestbookRepository = $this->createMock(GuestbookRepository::class);

        $controller = new GuestbookController();
        $this->expectError();
        $controller->new($request, $guestbookRepository);
    }

    public function testEdit(): void
    {
        $request = $this->createMock(Request::class);
        $guestbook = $this->createMock(Guestbook::class);
        $guestbookRepository = $this->createMock(GuestbookRepository::class);

        $controller = new GuestbookController();
        $this->expectError();
        $controller->edit($request, $guestbookRepository, $guestbook);
    }

    public function testDelete(): void
    {
        $guestbook = $this->createMock(Guestbook::class);
        $guestbookRepository = $this->createMock(GuestbookRepository::class);

        $controller = new GuestbookController();
        $this->expectError();
        $controller->delete($guestbookRepository, $guestbook);
    }

    public function testApprove(): void
    {
        $guestbook = $this->createMock(Guestbook::class);
        $guestbookRepository = $this->createMock(GuestbookRepository::class);

        $controller = new GuestbookController();
        $this->expectError();
        $controller->approve($guestbookRepository, $guestbook, 1);
    }
}
