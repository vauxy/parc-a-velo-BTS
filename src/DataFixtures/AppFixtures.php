<?php

namespace App\DataFixtures;

use App\Entity\Entre;
use App\Entity\Eleve;
use App\Entity\Sortie;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Date;

class AppFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder =$passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        // Création d'un utilisateur Admin
        $admin = new User();
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setEmail('admin@stjodijon.com');
        $admin->setPassword(
            $this->passwordEncoder->encodePassword(
                $admin,
                'Admin123'
            )
        );
        $manager->persist($admin);
        $manager->flush();

        // Création de plusieurs eleves
        $eleveUn = new Eleve();
        $eleveUn->setNom('Eleve');
        $eleveUn->setPrenom('1');
        $eleveUn->setClasse('BTSN2');
        $eleveUn->setImage('image.png');
        $eleveUn->setCodeBarre( '1');
        $eleveUn->setCodeRFID('1');
        $manager->persist($eleveUn);
        $manager->flush();

        $eleveDeux = new Eleve();
        $eleveDeux->setNom('Eleve ');
        $eleveDeux->setPrenom('2');
        $eleveDeux->setClasse('BTSSN');
        $eleveDeux->setImage('image.png');
        $eleveDeux->setCodeBarre( '2');
        $eleveDeux->setCodeRFID('2');
        $manager->persist($eleveDeux);
        $manager->flush();

        $eleveTrois = new Eleve();
        $eleveTrois->setNom('Eleve ');
        $eleveTrois->setPrenom('3');
        $eleveTrois->setClasse('BTSSN');
        $eleveTrois->setImage('image.png');
        $eleveTrois->setCodeBarre( '3');
        $eleveTrois->setCodeRFID('3');
        $manager->persist($eleveTrois);
        $manager->flush();

        $eleveQuatre = new Eleve();
        $eleveQuatre->setNom('Eleve ');
        $eleveQuatre->setPrenom('4');
        $eleveQuatre->setClasse('BTSSN');
        $eleveQuatre->setImage('image.png');
        $eleveQuatre->setCodeBarre( '4');
        $eleveQuatre->setCodeRFID('4');
        $manager->persist($eleveQuatre);
        $manager->flush();

        $eleveCinq = new Eleve();
        $eleveCinq->setNom('Eleve ');
        $eleveCinq->setPrenom('5');
        $eleveCinq->setClasse('BTSSN');
        $eleveCinq->setImage('image.png');
        $eleveCinq->setCodeBarre( '5');
        $eleveCinq->setCodeRFID('5');
        $manager->persist($eleveCinq);
        $manager->flush();

        $eleveSix = new Eleve();
        $eleveSix->setNom('Eleve ');
        $eleveSix->setPrenom('6');
        $eleveSix->setClasse('BTSSN');
        $eleveSix->setImage('image.png');
        $eleveSix->setCodeBarre( '6');
        $eleveSix->setCodeRFID('6');
        $manager->persist($eleveSix);
        $manager->flush();

        $eleveSept = new Eleve();
        $eleveSept->setNom('Eleve   ');
        $eleveSept->setPrenom('7');
        $eleveSept->setClasse('BTSSN');
        $eleveSept->setImage('image.png');
        $eleveSept->setCodeBarre( '7');
        $eleveSept->setCodeRFID('7');
        $manager->persist($eleveSept);
        $manager->flush();

        $eleveHuit = new Eleve();
        $eleveHuit->setNom('Eleve ');
        $eleveHuit->setPrenom('8');
        $eleveHuit->setClasse('BTSSN');
        $eleveHuit->setImage('image.png');
        $eleveHuit->setCodeBarre( '8');
        $eleveHuit->setCodeRFID('8');
        $manager->persist($eleveHuit);
        $manager->flush();

        $eleveNeuf = new Eleve();
        $eleveNeuf->setNom('Eleve ');
        $eleveNeuf->setPrenom('9');
        $eleveNeuf->setClasse('BTSSN');
        $eleveNeuf->setImage('image.png');
        $eleveNeuf->setCodeBarre( '9');
        $eleveNeuf->setCodeRFID('9');
        $manager->persist($eleveNeuf);
        $manager->flush();

        $eleveDix = new Eleve();
        $eleveDix->setNom('Eleve ');
        $eleveDix->setPrenom('10');
        $eleveDix->setClasse('BTSSN');
        $eleveDix->setImage('image.png');
        $eleveDix->setCodeBarre( '10');
        $eleveDix->setCodeRFID('10');
        $manager->persist($eleveDix);
        $manager->flush();

        $eleveOnze = new Eleve();
        $eleveOnze->setNom('Eleve ');
        $eleveOnze->setPrenom('11');
        $eleveOnze->setClasse('BTSSN');
        $eleveOnze->setImage('image.png');
        $eleveOnze->setCodeBarre( '11');
        $eleveOnze->setCodeRFID('11');
        $manager->persist($eleveOnze);
        $manager->flush();

        $eleveDouze = new Eleve();
        $eleveDouze->setNom('Eleve ');
        $eleveDouze->setPrenom('12');
        $eleveDouze->setClasse('BTSSN');
        $eleveDouze->setImage('image.png');
        $eleveDouze->setCodeBarre( '12');
        $eleveDouze->setCodeRFID('12');
        $manager->persist($eleveDouze);
        $manager->flush();

        $eleveTreize = new Eleve();
        $eleveTreize->setNom('Eleve ');
        $eleveTreize->setPrenom('13');
        $eleveTreize->setClasse('BTSSN');
        $eleveTreize->setImage('image.png');
        $eleveTreize->setCodeBarre( '13');
        $eleveTreize->setCodeRFID('13');
        $manager->persist($eleveTreize);
        $manager->flush();

        $eleveQuatorze = new Eleve();
        $eleveQuatorze->setNom('Eleve ');
        $eleveQuatorze->setPrenom('14');
        $eleveQuatorze->setClasse('BTSSN');
        $eleveQuatorze->setImage('image.png');
        $eleveQuatorze->setCodeBarre( '14');
        $eleveQuatorze->setCodeRFID('14');
        $manager->persist($eleveQuatorze);
        $manager->flush();

        $eleveQuinze = new Eleve();
        $eleveQuinze->setNom('Eleve ');
        $eleveQuinze->setPrenom('15');
        $eleveQuinze->setClasse('Terminal');
        $eleveQuinze->setImage('image.png');
        $eleveQuinze->setCodeBarre( '15');
        $eleveQuinze->setCodeRFID('15');
        $manager->persist($eleveQuinze);
        $manager->flush();

        // Création de mes entrés
        $entre = new Entre();
        $entre->setDate(new \DateTime('01/11/2020'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveUn);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('01/11/2020'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveDeux);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('01/11/2020'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveTrois);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('01/11/2020'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveQuatre);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('01/11/2020'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveCinq);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('01/11/2020'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveSix);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('01/11/2020'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveSept);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('01/11/2020'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveHuit);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('01/11/2020'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveNeuf);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('01/01/2021'));
        $entre->setVelo(false);
        $entre->setRefus(false);
        $entre->setEleve($eleveDix);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('11/03/2021'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveOnze);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('01/11/1997'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveDouze);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('02/26/2021'));
        $entre->setVelo(false);
        $entre->setRefus(false);
        $entre->setEleve($eleveTreize);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('05/03/2021'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveQuatorze);
        $manager->persist($entre);
        $manager->flush();

        // Création de mes sortie
        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveQuinze);
        $sortie->setRefus(false);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveUn);
        $sortie->setRefus(false);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveDeux);
        $sortie->setRefus(false);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveTrois);
        $sortie->setRefus(false);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveQuatre);
        $sortie->setRefus(false);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveCinq);
        $sortie->setRefus(false);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveSix);
        $sortie->setRefus(false);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveSept);
        $sortie->setRefus(false);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveHuit);
        $sortie->setRefus(true);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();


        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveNeuf);
        $sortie->setRefus(true);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveDix);
        $sortie->setRefus(true);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveOnze);
        $sortie->setRefus(true);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveDouze);
        $sortie->setRefus(true);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveTreize);
        $sortie->setRefus(true);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveQuatorze);
        $sortie->setRefus(true);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveQuinze);
        $sortie->setRefus(true);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveUn);
        $sortie->setRefus(true);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

    }


}
