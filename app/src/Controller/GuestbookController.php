<?php

namespace App\Controller;

use App\Entity\Guestbook;
use App\Form\GuestbookType;
use App\Repository\GuestbookRepository;
use App\Service\GuestbookService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/guestbook')]
class GuestbookController extends AbstractController
{

    #[Route('/', name: 'app_guestbook_index', methods: ['GET'])]
    public function index(GuestbookService $guestbookService): Response
    {
        return $this->render('guestbook/index.html.twig', [
            'guestbooks' => $guestbookService->getGuestbook(),
        ]);
    }

    #[Route('/new', name: 'app_guestbook_new', methods: ['GET', 'POST'])]
    /**
     * @IsGranted("ROLE_USER")
     */
    public function new(Request $request, GuestbookRepository $guestbookRepository): Response
    {
        $guestbook = new Guestbook();
        $form = $this->createForm(GuestbookType::class, $guestbook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $guestbookRepository->save($guestbook, $this->getUser(), true);
            return $this->redirectToRoute('index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('guestbook/new.html.twig', [
            'guestbook' => $guestbook,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_guestbook_edit', methods: ['GET', 'POST'])]
    /**
     * @IsGranted("ROLE_ADMIN")
     */
    public function edit(Request $request, GuestbookRepository $guestbookRepository, Guestbook $guestbook): Response
    {
        $form = $this->createForm(GuestbookType::class, $guestbook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $guestbookRepository->save($guestbook, $this->getUser(), true);

            return $this->redirectToRoute('app_guestbook_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('guestbook/edit.html.twig', [
            'guestbook' => $guestbook,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_guestbook_delete', methods: ['GET'])]
    /**
     * @IsGranted("ROLE_ADMIN")
     */
    public function delete(GuestbookRepository $guestbookRepository, Guestbook $guestbook): Response
    {
        $result = $guestbookRepository->remove($guestbook, true);
        return $this->redirectToRoute('app_guestbook_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/{active}/approve', name: 'app_guestbook_approve', methods: ['GET'])]
    /**
     * @IsGranted("ROLE_ADMIN")
     */
    public function approve(GuestbookRepository $guestbookRepository, Guestbook $guestbook,  bool $active): Response
    {
        $result = $guestbookRepository->approve($guestbook, $active, true);
        return $this->redirectToRoute('app_guestbook_index', [], Response::HTTP_SEE_OTHER);
    }
}
