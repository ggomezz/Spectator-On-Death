<?php
namespace spec;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\event\player\PlayerDeathEvent;

class Main extends PluginBase implements Listener{

   public function onEnable(){
         $this->getServer()->getPluginManager()->registerEvents($this,$this);
       }
        public function onDeath(PlayerDeathEvent $death){
            $player = $death->getEntity();
                 $player->setGamemode(3);
    }
  }