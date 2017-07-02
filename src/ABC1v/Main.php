<?php
namespace ABC1v;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

public function onEnable(){
 $this->getServer()->getLogger()->info("plugin ABC1v has been enable");
 $this->getLogger()->info("hello youtube");
  }
  public function onDisable(){
   $this->getServer()->getLogger()->info(plugin ABC1v has been disable);
    }
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
     switch ($cmd->getName()){
      case '1':
       $player = $sender->getPlayer();
       $player->setGamemode(1);
        break;
        }
       }
      }
