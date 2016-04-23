<?php

namespace driesboy;
//base
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
//config
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
//items
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerItemHeldEvent;
//commands
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\CommandExecutor;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		@mkdir($this->getDataFolder());
                $this->saveDefaultConfig();
                $this->reloadConfig();
		$this->touch = [];
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function PlayerItemHeld(PlayerItemHeldEvent $ev){
		$player = $ev->getPlayer();
		$item = $ev->getItem();
        	if($item instanceof Item){
          		if($item->getID() === $this->getConfig()->get("slot1")){
          			$player->sendPopup($this->getConfig()->get("slot1-description"));
          		}
		 }
   	}
	public function onPlayerInteract(PlayerInteractEvent $event){
		$p = $event->getPlayer();
		$i = $event->getItem();
		if($i->getID() === $this->getConfig()->get("slot1")){
			if(!isset($this->touch[$n = $p->getName()])) $this->touch[$n] = 0;
				$c = microtime(true) - $this->touch[$n];
				if($c > 0){
					$p->sendMessage($this->getConfig()->get("slot1-description"));
					$player->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot1-command")));
				}else{
					$i->setCount($i->getCount() - 1);
				}
			$this->touch[$n] = microtime(true) + 1;
			$event->setCancelled();
		}
	}
}
