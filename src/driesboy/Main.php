<?php

namespace driesboy;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\item\Item;
// Utils
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
// Events
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\event\player\PlayerRespawnEvent;
// Command
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\CommandExecutor;

class Main extends PluginBase implements Listener{
	
	protected $slots = [];

	public function onEnable(){
		@mkdir($this->getDataFolder());
                $this->saveDefaultConfig();
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		
		// Load slots
		$slots = $this->getConfig()->get('slots');
		/*foreach($slots as $item => $pref){
			
		}*/
		$this->slots = $slots;
		
		$this->getLogger()->info("Enabled");
	}
	
	/**
	 * @param PlayerItemHeldEvent $ev
	 * @priority HIGHEST
	 * @ignoreCancelled true
	 */
	public function PlayerItemHeld(PlayerItemHeldEvent $ev){
		$player = $ev->getPlayer();
		$item = $ev->getItem();
        	if(($r = $this->isSlotItem($item))){
        		if($r['tip'] != "") $player->sendTip($r['tip']);
        		if($r['popup'] != "") $player->sendPopup($r['popup']);
        	}
   	}
   	
   	/**
   	 * @param PlayerInteractEvent $event
   	 * @priority HIGHEST
   	 * @ignoreCancelled true
   	 */
	public function onPlayerInteract(PlayerInteractEvent $event){
		$player = $event->getPlayer();
		$item = $event->getItem();
		if(($r = $this->isSlotItem($item))){
			foreach($f['commands'] as $command){
				// TODO: Variable replace with real values
				$command = str_replace(["{PLAYER}"], [$player->getName()], $command);
				
				$this->getServer()->dispatchCommand(new ConsoleCommandSender(), $command);
			}
			if($this->getConfigValue("remove-item-on-use") == true){
				# TODO: No time for this xD
			}
		}
	}
	
	/**
	 * @param PlayerJoinEvent $event
	 * @priority HIGHEST
	 */
	public function onJoin(PlayerJoinEvent $event){
		if($this->getConfigValue("GiveItemsOnJoin") === true){
			$this->giveItems($event->getPlayer());
		}
	}
	
	/**
	 * @param PlayerRespawnEvent $event
	 * @priority HIGHEST
	 */
	public function onRespawn(PlayerRespawnEvent $event){
		if($this->getConfigValue("GiveItemsOnRespawn") === true){
			$this->giveItems($event->getPlayer())
		}
	}
	
	/**
	 * Gives player a slot items
	 * 
	 * @param Player $player
	 */
	public function giveItems(Player $player){
		$i = 0; // Index
		foreach($this->slots as $item => $prefs){
			$itemData = explode(':', $item);
			$itemData[1] = isset($itemData[1]) ? $itemData[1] : 0;
		
			$player->getInventory()->setItem($i, Item::get($itemData[0], $itemData[1], 1));
			$i++;
		}
	}
	
	/**
	 * Returns value from config file. This function is shortcut for Config::get($key)
	 * 
	 * @param string $key
	 * @return mixed
	 */
	public function getConfigValue($key){
		$r = $this->getConfig()->get($key);
		
		if($r == 'true' or $r == 'false'){
			return (bool) $r; 
		}
		
		return $r;
	}
	
	/**
	 * @param Item $item
	 * @return bool|array
	 */
	public function isSlotItem(Item $item){
		foreach($this->slots as $slot => $prefs){
			$itemData = explode(':', $slot);
			if($item->getId() == $itemData[0] and $item->getDamage() == $itemData[1]){
				return $prefs;
			}
		}
		return false;
	}
	
}
