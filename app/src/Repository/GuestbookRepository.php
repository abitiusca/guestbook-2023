<?php

namespace App\Repository;

use App\Entity\Guestbook;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Guestbook>
 *
 * @method Guestbook|null find($id, $lockMode = null, $lockVersion = null)
 * @method Guestbook|null findOneBy(array $criteria, array $orderBy = null)
 * @method Guestbook[]    findAll()
 * @method Guestbook[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GuestbookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Guestbook::class);
    }

    public function save(Guestbook $entity, $user, bool $flush = false): void
    {
        $createdAt = new \DateTimeImmutable('now');
        $updatedAt = new \DateTime('now');
        $entity->setUserId($user->getId())
            ->setUser($user)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt)
            ->setIsActive(false)
            ->setIsDeleted(false);
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Guestbook $entity, bool $flush = false): void
    {
        $entity->setIsDeleted(true);
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function approve(Guestbook $entity, bool $active, bool $flush = false): void
    {
        $entity->setIsActive($active);
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Guestbook[] Returns an array of Guestbook objects
     */
    public function findAllNotDeleted(): array
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.isDeleted = :val')
            ->setParameter('val', false)
            ->orderBy('g.createdAt', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Guestbook[] Returns an array of Guestbook objects
     */
    public function findAllApproved(): array
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.isActive = :val')
            ->setParameter('val', true)
            ->orderBy('g.createdAt', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }
}
