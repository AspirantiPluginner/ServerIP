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

class Main extends PluginBase {

    public $ip;

    public function onEnable()
    {
        $ip = file_get_contents("http://ip-api.com/line/?fields=query");
        $porta = $this->getServer()->getPort();

        $this->getServer()->getLogger()->info("L'ip del server è: " . $ip);
        $this->getServer()->getLogger()->info("La porta del server è: " . $porta);

    }
}