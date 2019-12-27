<?php

namespace Ree\saisana;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerChatEvent;
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
                    Server::getInstance()->broadcastMessage("<".$sender->getName()."> さwいwさwなwww");
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
                case 6:
                    Server::getInstance()->broadcastMessage("<".$sender->getName()."> さいサリンりん");
                    break;
            }
            return true;
        }
        return true;
    }

    public function onChat(PlayerChatEvent $ev)
    {
        $mes = $ev->getMessage();
        $p = $ev->getPlayer();
        switch ($mes)
        {
            case "さwいwさwなw":
            case "さwいwさwなwww":
            case "さいさな":
            case "くさいさな":
            case "ささささいさな":
            case "さないな":
            case "おのれさいさな":
                if ($p instanceof Player)
                {
                    $vec3 = $p->getLevel()->getSafeSpawn();
                    $p->teleport($vec3);
                    Server::getInstance()->broadcastMessage($p->getName()."はsaisana299にやられた");
                    $p->setFood($p->getMaxFood());
                    $p->setHealth($p->getMaxHealth());
                }
                break;
        }
    }
}
