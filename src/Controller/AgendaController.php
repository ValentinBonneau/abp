<?php

namespace App\Controller;
//sesquilinaire
use App\Entity\AbpShippingpoint;
use App\Entity\AbpStock;
use App\Entity\Client;
use App\Entity\Livraison;
use App\Entity\Personnel;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use mysql_xdevapi\Result;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use function Doctrine\ORM\QueryBuilder;

class AgendaController extends AbstractController
{
    #[Route('/agenda', name: 'app_agenda')]
    public function index(EntityManagerInterface $em,Request $request): Response
    {
        $livraison = new Livraison();

        $form = $this->createFormBuilder($livraison)
            ->add('date',DateTimeType::class, ['label' => "Date et Heure"])
            ->add('commercial', EntityType::class, [
                'class' => Personnel::class,
                'choice_label' => 'nom',
                'label' => 'Commercial(e)'
            ]  )
            ->add('responsable', EntityType::class, [
                'class' => Personnel::class,
                'choice_label' => 'nom',
                'label' => 'Commercial(e) en charge'
            ]  )
            ->add('contenue', EntityType::class, [
                'class' => AbpStock::class,
                'choice_label' => 'VIN',
                'label' => 'Contenue de la livraison (VIN)'
            ]  )
            ->add('client', EntityType::class, [
                'class' => Client::class,
                'choice_label' => 'nom',
                'label' => 'Client'
            ] )
            ->add('depart', EntityType::class, [
                'class' => AbpShippingpoint::class,
                'choice_label' => 'name',
                'label' => 'Depart'
            ] )
            ->add('arivee', EntityType::class, [
                'class' => AbpShippingpoint::class,
                'choice_label' => 'name',
                'label' => 'Arivée'
            ] )
            ->add('ajouter', SubmitType::class)
            ->getForm();

        //POST quand le form est executé
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->persist($livraison);
            $em->flush();
        }

        return $this->render('agenda/index.html.twig', [
            'controller_name' => 'AgendaController',
            'formulaire' => $form->createView(),
        ]);
    }

    #[Route('/agenda/feed/', name: 'feed_agenda')]
    public function feed(EntityManagerInterface $em, Request $request): Response
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $start = $request->query->get('start');
        $end = $request->query->get('end');


        $qb = $em->createQueryBuilder()->select('l')
            ->from('App:Livraison', 'l')
            ->where('l.date >= :debut')
            ->andWhere('l.date <= :fin')
            ->setParameter('debut', new \DateTimeImmutable($start))
            ->setParameter('fin', new \DateTimeImmutable($end));
        $query = $qb->getQuery();

        $rawResult = $query->getResult();

        $result = [];


        foreach ($rawResult as $livraison) {

            array_push($result, [
                "start" => $livraison->getDate()->format('Y-m-d\TH:i:s'),
                "end" => $livraison->getDate()->add(\DateInterval::createFromDateString('1 hours'))->format('Y-m-d\TH:i:s'),
                "title"=> $livraison->getClient()->getNom()
            ]);
        }

        return new Response($serializer->serialize($result, 'json'));
    }
}
