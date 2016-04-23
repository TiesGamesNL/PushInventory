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
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function PlayerItemHeld(PlayerItemHeldEvent $ev){
		$player = $ev->getPlayer();
		$item = $ev->getItem();
        	if($item instanceof Item){
          		if($item->getID() === $this->getConfig()->get("slot1")){
          			$player->sendPopup($this->getConfig()->get("slot1-Tip"));
          			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$player->getInventory()->clearAll();	
          			}
          		}
          		if($item->getID() === $this->getConfig()->get("slot2")){
          			$player->sendPopup($this->getConfig()->get("slot2-Tip"));
          			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$player->getInventory()->clearAll();	
          			}
          		}
          		if($item->getID() === $this->getConfig()->get("slot3")){
          			$player->sendPopup($this->getConfig()->get("slot3-Tip"));
          			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$player->getInventory()->clearAll();	
          			}
          		}
          		if($item->getID() === $this->getConfig()->get("slot4")){
          			$player->sendPopup($this->getConfig()->get("slot4-Tip"));
          			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$player->getInventory()->clearAll();	
          			}
          		}
          		if($item->getID() === $this->getConfig()->get("slot5")){
          			$player->sendPopup($this->getConfig()->get("slot5-Tip"));
          			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$player->getInventory()->clearAll();	
          			}
          		}
		 }
   	}
	public function onPlayerInteract(PlayerInteractEvent $event){
		$p = $event->getPlayer();
		$i = $event->getItem();
		if($i->getID() === $this->getConfig()->get("slot1")){
					$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot1-command")));
		}
		if($i->getID() === $this->getConfig()->get("slot2")){
					$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot2-command")));
		}
		if($i->getID() === $this->getConfig()->get("slot3")){
					$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot3-command")));
		}
		if($i->getID() === $this->getConfig()->get("slot4")){
					$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot4-command")));
		}
		if($i->getID() === $this->getConfig()->get("slot5")){
					$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot5-command")));
		}
	}
}
