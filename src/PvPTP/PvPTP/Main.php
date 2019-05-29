<?php
namespace PVPTP\PVPTP\Main;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\level\Position;
class Main extends PluginBase implements Listener{
    public function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents(($this), $this);
        $this->getLogger()->info("PVPTP Enabled By jhampt");
    }
    public function onDisable(): void{
        $this->getLogger()->info("PVPTP Disabled By jhampt");
    }
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
        if($cmd->getname() == "pvp"){
        if($sender instanceof Player){
        $level = $this->getServer()->getConfig()->get(getLevelByName);
        $x = $this->getConfig()->get("x");
        $y = $this->getConfig()->get("y");
        $z = $this->getConfig()->get("z");
        $pos = new Position($x, $y, $z, $level);
        $sender->teleport($pos);
        $sender->sendMessage->$this->getConfig()->get("PvPTeleportMessage");
        }
        return true;
    }
}
