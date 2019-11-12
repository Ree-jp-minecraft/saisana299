<?php

namespace Ree\saisana;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;

class main extends PluginBase implements Listener
{

    public function onEnable()
    {
        $this->getLogger()->info("このプラグインはsaisana299氏をあがめるものです");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        if ($command == "saisana299")
        {
            $num = mt_rand(1,5);
            switch ($num)
            {
                case 1:
                    Server::getInstance()->broadcastMessage("<".$sender->getName()."> さwいwさwなw");
                    break;
                case 2:
                    Server::getInstance()->broadcastMessage("<".$sender->getName()."> さいさな");
                    break;
                case 3:
                    Server::getInstance()->broadcastMessage("<".$sender->getName()."> くさいさな");
                    break;
                case 4:
                    Server::getInstance()->broadcastMessage("<".$sender->getName()."> ささささいさな");
                    break;
                case 5:
                    Server::getInstance()->broadcastMessage("<".$sender->getName()."> さないな");
                    break;
            }
            return true;
        }
        return true;
    }
}