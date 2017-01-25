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

class Main extends PluginBase {

    /** @var string $ip Property dove metteremo l'ip da usare in seguito nel comando */
    public $ip;

    public function onEnable() {
        //posso contemporaneamente salvare l'ip nella property e scriverlo sulla console
        $this->getServer()->getLogger()->info("L'IP del server è " . TextFormat::AQUA . $this->ip = trim(file_get_contents("http://ip-api.com/line/?fields=query")));
    }
}