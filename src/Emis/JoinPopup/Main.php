<?php

namespace Emis\JoinPopup;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $event)
    {
        $name = $event->getPlayer()->getName();
        $this->getServer()->broadcastPopup(TextFormat::BLACK . "[" . TextFormat::GREEN . "+" . TextFormat::BLACK . "]" . TextFormat::YELLOW . $name);
    }

    public function onQuit(PlayerQuitEvent $event){
        $name = $event->getPlayer()->getName();
        $this->getServer()->broadcastPopup(TextFormat::BLACK . "[" . TextFormat::RED . "-" . TextFormat::BLACK . "]" . TextFormat::YELLOW . $name);
    }
}