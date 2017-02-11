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
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase {

    /** @var string $ip Property dove metteremo l'ip da usare in seguito nel comando */
    public $ip;

    public function onEnable() {
        
        $this->getServer()->getLogger()->info(TextFormat::GRAY . "->" . TextFormat::YELLOW . " IP: " . TextFormat::BLUE . $this->ip = trim(file_get_contents("http://ip-api.com/line/?fields=query")) . TextFormat::YELLOW . " Porta: " . TextFormat::BLUE . $this->getServer()->getPort() . TextFormat::GRAY . " <-");
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
    
    		if($cmd->getName() == "serverip" && $sender->hasPermission("serverip.serverip")) {
			if(!empty($args[0])) {
			if($args[0] == "server") {
                     $ip = trim(file_get_contents("http://ip-api.com/line/?fields=query"));
                     $sender->sendMessage(TextFormat::GRAY . "->" . TextFormat::YELLOW . " IP: " . TextFormat::BLUE . $ip . TextFormat::YELLOW . " Porta: " . TextFormat::BLUE . $this->getServer()->getPort() . TextFormat::GRAY . " <-");
                        }
                      }
                    }
                  }
                }
