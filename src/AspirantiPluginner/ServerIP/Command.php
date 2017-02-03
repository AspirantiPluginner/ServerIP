
<?php
namespace AspirantiPluginner\ServerIP;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Command extends PluginBase implements Listener {

    public function onEnable() {
   
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) : bool {
        if ($sender instanceof Player) {
                switch (array_shift($args)) {
                    case "server":
                     $ip = trim(file_get_contents("http://ip-api.com/line/?fields=query"));
                     $sender->sendMessage(".$ip.");
                        break;
                }
            }
        }
        return true;
    }
