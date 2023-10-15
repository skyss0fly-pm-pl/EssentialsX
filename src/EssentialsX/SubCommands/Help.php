<?php
namespace skyss0fly\EssentialsX;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

final class Help extends PluginBase {

public function execute(CommandSender $sender, Array $args, String $string): bool {
switch->Command()->getName("Help"):
  $sender->sendMessage("Help");
  
}

}
