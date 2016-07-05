<?php
namespace driesboy;
//base
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\event\player\PlayerRespawnEvent;
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
        		if($player->getLevel()->getName() === $this->getConfig()->get("workingworlds")){
          		if($item->getID() === $this->getConfig()->get("slot1")){
          			$player->sendPopup($this->getConfig()->get("slot1-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot2")){
          			$player->sendPopup($this->getConfig()->get("slot2-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot3")){
          			$player->sendPopup($this->getConfig()->get("slot3-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot4")){
          			$player->sendPopup($this->getConfig()->get("slot4-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot5")){
          			$player->sendPopup($this->getConfig()->get("slot5-Tip"));
          		}
			if($item->getID() === $this->getConfig()->get("slot6")){
          			$player->sendPopup($this->getConfig()->get("slot6-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot7")){
          			$player->sendPopup($this->getConfig()->get("slot7-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot8")){
          			$player->sendPopup($this->getConfig()->get("slot8-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot9")){
          			$player->sendPopup($this->getConfig()->get("slot9-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot10")){
          			$player->sendPopup($this->getConfig()->get("slot10-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot11")){
          			$player->sendPopup($this->getConfig()->get("slot11-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot12")){
          			$player->sendPopup($this->getConfig()->get("slot12-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot13")){
          			$player->sendPopup($this->getConfig()->get("slot13-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot14")){
          			$player->sendPopup($this->getConfig()->get("slot14-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot15")){
          			$player->sendPopup($this->getConfig()->get("slot15-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot16")){
          			$player->sendPopup($this->getConfig()->get("slot16-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot17")){
          			$player->sendPopup($this->getConfig()->get("slot17-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot18")){
          			$player->sendPopup($this->getConfig()->get("slot18-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot19")){
          			$player->sendPopup($this->getConfig()->get("slot19-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot20")){
          			$player->sendPopup($this->getConfig()->get("slot20-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot21")){
          			$player->sendPopup($this->getConfig()->get("slot21-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot22")){
          			$player->sendPopup($this->getConfig()->get("slot22-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot23")){
          			$player->sendPopup($this->getConfig()->get("slot23-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot24")){
          			$player->sendPopup($this->getConfig()->get("slot24-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot25")){
          			$player->sendPopup($this->getConfig()->get("slot25-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot26")){
          			$player->sendPopup($this->getConfig()->get("slot26-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot27")){
          			$player->sendPopup($this->getConfig()->get("slot27-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot28")){
          			$player->sendPopup($this->getConfig()->get("slot28-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot29")){
          			$player->sendPopup($this->getConfig()->get("slot29-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot30")){
          			$player->sendPopup($this->getConfig()->get("slot30-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot31")){
          			$player->sendPopup($this->getConfig()->get("slot31-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot32")){
          			$player->sendPopup($this->getConfig()->get("slot32-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot33")){
          			$player->sendPopup($this->getConfig()->get("slot33-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot34")){
          			$player->sendPopup($this->getConfig()->get("slot34-Tip"));
          		}
          		if($item->getID() === $this->getConfig()->get("slot35")){
          			$player->sendPopup($this->getConfig()->get("slot35-Tip"));
          		}
          		
		 }
        	 }
   	}
	public function onPlayerInteract(PlayerInteractEvent $event){
		$p = $event->getPlayer();
		$i = $event->getItem();
		if($p->getLevel()->getName() === $this->getConfig()->get("workingworlds")){
		if($i->getID() === $this->getConfig()->get("slot1")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot1-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
		}
		if($i->getID() === $this->getConfig()->get("slot2")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot2-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
		}
		if($i->getID() === $this->getConfig()->get("slot3")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot3-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
		}
		if($i->getID() === $this->getConfig()->get("slot4")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot4-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
		}
		if($i->getID() === $this->getConfig()->get("slot5")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot5-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
		}
		if($i->getID() === $this->getConfig()->get("slot6")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot7")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot8")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot9")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot10")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot11")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot12")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot13")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot14")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot15")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot16")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot17")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot18")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot19")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot20")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot21")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot22")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot23")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot24")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot25")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot26")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot27")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot28")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot29")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot30")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot31")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot32")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot33")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot34")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		if($i->getID() === $this->getConfig()->get("slot35")){
			$p->getServer()->dispatchCommand(new ConsoleCommandSender(), str_ireplace("{PLAYER}", $p->getName(), $this->getConfig()->get("slot6-command")));
			if($this->getConfig()->get("ClearItemsAfterUse") === true){
          				$p->getInventory()->clearAll();	
          			}
          			
		}
		
		}
		}
	}
	public function onJoin(PlayerJoinEvent $event){
		if($this->getConfig()->get("GiveItemsOnJoin") === true){
			$p = $event->getPlayer();
			$p->getInventory()->setItem(1, Item::get($this->getConfig()->get("slot1"),0,1));
			$p->getInventory()->setHotbarSlotIndex(1,1);
			$p->getInventory()->setItem(2, Item::get($this->getConfig()->get("slot2"),0,1));
			$p->getInventory()->setHotbarSlotIndex(2,2);
			$p->getInventory()->setItem(3, Item::get($this->getConfig()->get("slot3"),0,1));
			$p->getInventory()->setHotbarSlotIndex(3,3);
			$p->getInventory()->setItem(4, Item::get($this->getConfig()->get("slot4"),0,1));
			$p->getInventory()->setHotbarSlotIndex(4,4);
			$p->getInventory()->setItem(5, Item::get($this->getConfig()->get("slot5"),0,1));
			$p->getInventory()->setHotbarSlotIndex(5,5);
			$p->getInventory()->setItem(6, Item::get($this->getConfig()->get("slot6"),0,1));
			$p->getInventory()->setHotbarSlotIndex(6,6);
			$p->getInventory()->setItem(7, Item::get($this->getConfig()->get("slot7"),0,1));
			$p->getInventory()->setHotbarSlotIndex(7,7);
			$p->getInventory()->setItem(8, Item::get($this->getConfig()->get("slot8"),0,1));
			$p->getInventory()->setHotbarSlotIndex(8,8);
			$p->getInventory()->setItem(9, Item::get($this->getConfig()->get("slot9"),0,1));
			$p->getInventory()->setItem(10, Item::get($this->getConfig()->get("slot10"),0,1));
			$p->getInventory()->setItem(11, Item::get($this->getConfig()->get("slot11"),0,1));
			$p->getInventory()->setItem(12, Item::get($this->getConfig()->get("slot12"),0,1));
			$p->getInventory()->setItem(13, Item::get($this->getConfig()->get("slot13"),0,1));
			$p->getInventory()->setItem(14, Item::get($this->getConfig()->get("slot14"),0,1));
			$p->getInventory()->setItem(15, Item::get($this->getConfig()->get("slot15"),0,1));
			$p->getInventory()->setItem(16, Item::get($this->getConfig()->get("slot16"),0,1));
			$p->getInventory()->setItem(17, Item::get($this->getConfig()->get("slot17"),0,1));
			$p->getInventory()->setItem(18, Item::get($this->getConfig()->get("slot18"),0,1));
			$p->getInventory()->setItem(19, Item::get($this->getConfig()->get("slot19"),0,1));
			$p->getInventory()->setItem(20, Item::get($this->getConfig()->get("slot20"),0,1));
			$p->getInventory()->setItem(21, Item::get($this->getConfig()->get("slot21"),0,1));
			$p->getInventory()->setItem(22, Item::get($this->getConfig()->get("slot22"),0,1));
			$p->getInventory()->setItem(23, Item::get($this->getConfig()->get("slot23"),0,1));
			$p->getInventory()->setItem(24, Item::get($this->getConfig()->get("slot24"),0,1));
			$p->getInventory()->setItem(25, Item::get($this->getConfig()->get("slot25"),0,1));
			$p->getInventory()->setItem(26, Item::get($this->getConfig()->get("slot26"),0,1));
			$p->getInventory()->setItem(27, Item::get($this->getConfig()->get("slot27"),0,1));
			$p->getInventory()->setItem(28, Item::get($this->getConfig()->get("slot28"),0,1));
			$p->getInventory()->setItem(29, Item::get($this->getConfig()->get("slot29"),0,1));
			$p->getInventory()->setItem(30, Item::get($this->getConfig()->get("slot30"),0,1));
			$p->getInventory()->setItem(31, Item::get($this->getConfig()->get("slot31"),0,1));
			$p->getInventory()->setItem(32, Item::get($this->getConfig()->get("slot32"),0,1));
			$p->getInventory()->setItem(33, Item::get($this->getConfig()->get("slot33"),0,1));
			$p->getInventory()->setItem(34, Item::get($this->getConfig()->get("slot34"),0,1));
			$p->getInventory()->setItem(35, Item::get($this->getConfig()->get("slot35"),0,1));
		}
	}
	public function onRespawn(PlayerRespawnEvent $event){
		$p = $event->getPlayer();
		if($this->getConfig()->get("GiveItemsOnRespawn") === true){
			$p->getInventory()->setItem(1, Item::get($this->getConfig()->get("slot1"),0,1));
			$p->getInventory()->setHotbarSlotIndex(1,1);
			$p->getInventory()->setItem(2, Item::get($this->getConfig()->get("slot2"),0,1));
			$p->getInventory()->setHotbarSlotIndex(2,2);
			$p->getInventory()->setItem(3, Item::get($this->getConfig()->get("slot3"),0,1));
			$p->getInventory()->setHotbarSlotIndex(3,3);
			$p->getInventory()->setItem(4, Item::get($this->getConfig()->get("slot4"),0,1));
			$p->getInventory()->setHotbarSlotIndex(4,4);
			$p->getInventory()->setItem(5, Item::get($this->getConfig()->get("slot5"),0,1));
			$p->getInventory()->setHotbarSlotIndex(5,5);
			$p->getInventory()->setItem(6, Item::get($this->getConfig()->get("slot6"),0,1));
			$p->getInventory()->setHotbarSlotIndex(6,6);
			$p->getInventory()->setItem(7, Item::get($this->getConfig()->get("slot7"),0,1));
			$p->getInventory()->setHotbarSlotIndex(7,7);
			$p->getInventory()->setItem(8, Item::get($this->getConfig()->get("slot8"),0,1));
			$p->getInventory()->setHotbarSlotIndex(8,8);
			$p->getInventory()->setItem(9, Item::get($this->getConfig()->get("slot9"),0,1));
			$p->getInventory()->setItem(10, Item::get($this->getConfig()->get("slot10"),0,1));
			$p->getInventory()->setItem(11, Item::get($this->getConfig()->get("slot11"),0,1));
			$p->getInventory()->setItem(12, Item::get($this->getConfig()->get("slot12"),0,1));
			$p->getInventory()->setItem(13, Item::get($this->getConfig()->get("slot13"),0,1));
			$p->getInventory()->setItem(14, Item::get($this->getConfig()->get("slot14"),0,1));
			$p->getInventory()->setItem(15, Item::get($this->getConfig()->get("slot15"),0,1));
			$p->getInventory()->setItem(16, Item::get($this->getConfig()->get("slot16"),0,1));
			$p->getInventory()->setItem(17, Item::get($this->getConfig()->get("slot17"),0,1));
			$p->getInventory()->setItem(18, Item::get($this->getConfig()->get("slot18"),0,1));
			$p->getInventory()->setItem(19, Item::get($this->getConfig()->get("slot19"),0,1));
			$p->getInventory()->setItem(20, Item::get($this->getConfig()->get("slot20"),0,1));
			$p->getInventory()->setItem(21, Item::get($this->getConfig()->get("slot21"),0,1));
			$p->getInventory()->setItem(22, Item::get($this->getConfig()->get("slot22"),0,1));
			$p->getInventory()->setItem(23, Item::get($this->getConfig()->get("slot23"),0,1));
			$p->getInventory()->setItem(24, Item::get($this->getConfig()->get("slot24"),0,1));
			$p->getInventory()->setItem(25, Item::get($this->getConfig()->get("slot25"),0,1));
			$p->getInventory()->setItem(26, Item::get($this->getConfig()->get("slot26"),0,1));
			$p->getInventory()->setItem(27, Item::get($this->getConfig()->get("slot27"),0,1));
			$p->getInventory()->setItem(28, Item::get($this->getConfig()->get("slot28"),0,1));
			$p->getInventory()->setItem(29, Item::get($this->getConfig()->get("slot29"),0,1));
			$p->getInventory()->setItem(30, Item::get($this->getConfig()->get("slot30"),0,1));
			$p->getInventory()->setItem(31, Item::get($this->getConfig()->get("slot31"),0,1));
			$p->getInventory()->setItem(32, Item::get($this->getConfig()->get("slot32"),0,1));
			$p->getInventory()->setItem(33, Item::get($this->getConfig()->get("slot33"),0,1));
			$p->getInventory()->setItem(34, Item::get($this->getConfig()->get("slot34"),0,1));
			$p->getInventory()->setItem(35, Item::get($this->getConfig()->get("slot35"),0,1));
		}
	}
	 public function onWorldChange(EntityLevelChangeEvent $event){
    	$entity = $event->getEntity();
    	if($entity instanceof Player){
    		$origin = $event->getOrigin();
    		if($origin === $this->getConfig()->get("workingworlds")){
    			$entity->getInventory()->clearAll();	
    		}
    		$target = $event->getTarget();
    		if($target === $this->getConfig()->get("workingworlds")){
    			$p->getInventory()->setItem(1, Item::get($this->getConfig()->get("slot1"),0,1));
			$p->getInventory()->setHotbarSlotIndex(1,1);
			$p->getInventory()->setItem(2, Item::get($this->getConfig()->get("slot2"),0,1));
			$p->getInventory()->setHotbarSlotIndex(2,2);
			$p->getInventory()->setItem(3, Item::get($this->getConfig()->get("slot3"),0,1));
			$p->getInventory()->setHotbarSlotIndex(3,3);
			$p->getInventory()->setItem(4, Item::get($this->getConfig()->get("slot4"),0,1));
			$p->getInventory()->setHotbarSlotIndex(4,4);
			$p->getInventory()->setItem(5, Item::get($this->getConfig()->get("slot5"),0,1));
			$p->getInventory()->setHotbarSlotIndex(5,5);
			$p->getInventory()->setItem(6, Item::get($this->getConfig()->get("slot6"),0,1));
			$p->getInventory()->setHotbarSlotIndex(6,6);
			$p->getInventory()->setItem(7, Item::get($this->getConfig()->get("slot7"),0,1));
			$p->getInventory()->setHotbarSlotIndex(7,7);
			$p->getInventory()->setItem(8, Item::get($this->getConfig()->get("slot8"),0,1));
			$p->getInventory()->setHotbarSlotIndex(8,8);
			$p->getInventory()->setItem(9, Item::get($this->getConfig()->get("slot9"),0,1));
			$p->getInventory()->setItem(10, Item::get($this->getConfig()->get("slot10"),0,1));
			$p->getInventory()->setItem(11, Item::get($this->getConfig()->get("slot11"),0,1));
			$p->getInventory()->setItem(12, Item::get($this->getConfig()->get("slot12"),0,1));
			$p->getInventory()->setItem(13, Item::get($this->getConfig()->get("slot13"),0,1));
			$p->getInventory()->setItem(14, Item::get($this->getConfig()->get("slot14"),0,1));
			$p->getInventory()->setItem(15, Item::get($this->getConfig()->get("slot15"),0,1));
			$p->getInventory()->setItem(16, Item::get($this->getConfig()->get("slot16"),0,1));
			$p->getInventory()->setItem(17, Item::get($this->getConfig()->get("slot17"),0,1));
			$p->getInventory()->setItem(18, Item::get($this->getConfig()->get("slot18"),0,1));
			$p->getInventory()->setItem(19, Item::get($this->getConfig()->get("slot19"),0,1));
			$p->getInventory()->setItem(20, Item::get($this->getConfig()->get("slot20"),0,1));
			$p->getInventory()->setItem(21, Item::get($this->getConfig()->get("slot21"),0,1));
			$p->getInventory()->setItem(22, Item::get($this->getConfig()->get("slot22"),0,1));
			$p->getInventory()->setItem(23, Item::get($this->getConfig()->get("slot23"),0,1));
			$p->getInventory()->setItem(24, Item::get($this->getConfig()->get("slot24"),0,1));
			$p->getInventory()->setItem(25, Item::get($this->getConfig()->get("slot25"),0,1));
			$p->getInventory()->setItem(26, Item::get($this->getConfig()->get("slot26"),0,1));
			$p->getInventory()->setItem(27, Item::get($this->getConfig()->get("slot27"),0,1));
			$p->getInventory()->setItem(28, Item::get($this->getConfig()->get("slot28"),0,1));
			$p->getInventory()->setItem(29, Item::get($this->getConfig()->get("slot29"),0,1));
			$p->getInventory()->setItem(30, Item::get($this->getConfig()->get("slot30"),0,1));
			$p->getInventory()->setItem(31, Item::get($this->getConfig()->get("slot31"),0,1));
			$p->getInventory()->setItem(32, Item::get($this->getConfig()->get("slot32"),0,1));
			$p->getInventory()->setItem(33, Item::get($this->getConfig()->get("slot33"),0,1));
			$p->getInventory()->setItem(34, Item::get($this->getConfig()->get("slot34"),0,1));
			$p->getInventory()->setItem(35, Item::get($this->getConfig()->get("slot35"),0,1));
    		}
    	}
    }
}
