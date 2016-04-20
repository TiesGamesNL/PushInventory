<?php

namespace driesboy\main;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\Player;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\CommandExecutor;

class main extends PluginBase implements Listener{

	public function onEnable(){
		@mkdir($this->getDataFolder());
                $this->saveDefaultConfig();
                $this->reloadConfig();
		$this->touch = [];
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function PlayerItemHeld(PlayerItemHeldEvent $ev){
		$player = $ev->getPlayer();
        	if($item instanceof Item){
          		if($b->getID() == $this->getConfig()->get("slot1")){
          			$player->sendMessage($this->getConfig()->get("slot1-description"));
          		}
		 }
   	}
	public function onPlayerInteract(PlayerInteractEvent $event){
		$p = $event->getPlayer();
		$i = $event->getItem();
		if($b->getID() == $this->getConfig()->get("slot1")){
			if(!isset($this->touch[$n = $p->getName()])) $this->touch[$n] = 0;
				$c = microtime(true) - $this->touch[$n];
				if($c > 0){
					$p->sendMessage($this->getConfig()->get("slot1-description"));
				}else{
					$i->setCount($i->getCount() - 1);
					$player->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $player->getName(), $this->getConfig()->get("slot1-command")));
				}
			$this->touch[$n] = microtime(true) + 1;
			$event->setCancelled();
		}
	}
}
