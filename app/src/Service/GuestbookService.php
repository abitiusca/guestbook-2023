<?php

namespace App\Service;

use App\Repository\GuestbookRepository;
use Symfony\Component\Security\Core\Security;

class GuestbookService
{
    private GuestbookRepository $guestbookRepository;
    private Security $security;

    public function __construct(GuestbookRepository $guestbookRepository, Security $security)
    {
        $this->guestbookRepository = $guestbookRepository;
        $this->security = $security;
    }
    public function getGuestbook(): array
    {
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $guestbooks = $this->guestbookRepository->findAllApproved();
        } else {
            $guestbooks = $this->guestbookRepository->findAllNotDeleted();
        }
        return $guestbooks;
    }

}