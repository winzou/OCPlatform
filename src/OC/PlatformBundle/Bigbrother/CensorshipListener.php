<?php
// src/OC/PlatformBundle/Bigbrother/CensorshipListener.php

namespace OC\PlatformBundle\Bigbrother;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CensorshipListener implements EventSubscriberInterface
{
  protected $processor;
  protected $listUsers = array();

  public function __construct(CensorshipProcessor $processor, $listUsers)
  {
    $this->processor = $processor;
    $this->listUsers = $listUsers;
  }

  // La méthode de l'interface que l'on doit implémenter, à définir en static
  static public function getSubscribedEvents()
  {
    // On retourne un tableau « nom de l'évènement » => « méthode à exécuter »
    return array(
      'oc_platform.bigbrother.post_message' => array('processMessage' => 2),
      'autre.evenement'                     => 'autreMethode',
    );
  }

  public function processMessage(MessagePostEvent $event)
  {
    // ...
  }

  public function autreMethode()
  {
    // ...
  }
}