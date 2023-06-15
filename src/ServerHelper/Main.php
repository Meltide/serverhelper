<?php

namespace ServerHelper;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\utils\Config;
use pocketmine\utils\Utils;

class Main extends PluginBase implements Listener{
  public function onEnable(){
    $this->saveDefaultConfig();
	@mkdir($this->getDataFolder(),0777,true);
	$this->config=new Config($this->getDataFolder()."config.yml",Config::YAML,array("OnlineTip"=>"ON","PlayerMess"=>"§a==服务器帮助(1/1)==\n§a待修改","OPMess"=>"§a==OP帮助(1/1)==\n§a待修改"));
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getLogger()->info(TextFormat::GREEN."✔ServerHelper成功启用 作者: AMDISYES");
    $this->getLogger()->info(TextFormat::RED."倒卖插件死全家 wusheng233禁止使用");
  }
  public function onDisable(){
    $this->getLogger()->info(TextFormat::RED."✘ServerHelper已关闭");
  }
  public function onJoin(PlayerJoinEvent $event){
    $tip = $this->getConfig()->get("OnlineTip");
    if($tip == "ON"){
      $online = count($this->getServer()->getOnlinePlayers());
      $this->getServer()->broadcastMessage("§6当前服务器人数: $online");
    }
    else{}
  }
  public function onQuit(PlayerQuitEvent $event){
    $tip = $this->getConfig()->get("OnlineTip");
    if($tip == "ON"){
      $online = count($this->getServer()->getOnlinePlayers());
      $this->getServer()->broadcastMessage("§6当前服务器人数: $online");
    }
    else{}
  }
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    $playerm = $this->getConfig()->get("PlayerMess");
    $opm = $this->getConfig()->get("OPMess");
    if($cmd->getName() == "sh"){
      $sender->sendMessage($playerm);
    }
    if($cmd->getName() == "opsh"){
      $sender->sendMessage($opm);
    }
    return true;
  }
}
?>
