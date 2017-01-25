<?php

/*
 *
 *
 * ServerIP plugin for PocketMine & forks
 *
 * @Authors: AspirantiPluginner
 * @Github: https://github.com/AspirantiPluginner/ServerIP
 *
 *
 */

namespace AspirantiPluginner\ServerIP;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginManager;
use pocketmine\plugin\Plugin;
use pocketmine\utils\config;
use pocketmine\level\Level;

class Main extends PluginBase {

    public function onEnable(){
        $this->getLogger()->info(TextFormat::GREEN ."ServerIP Enabled!");
    }

    public function onDisable(){
        $this->getLogger()->info(TextFormat::RED ."ServerIP Disabled");
    }
}
