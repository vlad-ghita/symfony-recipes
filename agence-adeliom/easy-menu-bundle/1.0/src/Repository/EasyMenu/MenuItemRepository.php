<?php

declare(strict_types=1);

namespace App\Repository\EasyMenu;

use Adeliom\EasyMenuBundle\Repository\MenuItemRepository as BaseMenuItemRepository;
use App\Entity\EasyMenu\MenuItem;
use Doctrine\ORM\EntityManager;

/**
 * @method MenuItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method MenuItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method array<MenuItem> findAll()
 * @method array<MenuItem> findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MenuItemRepository extends BaseMenuItemRepository
{
    public function __construct(EntityManager $entityManager)
    {
        parent::__construct($entityManager, $entityManager->getClassMetadata(MenuItem::class));
    }
}
