# ServerHelper

#### 一个并不全能的PocketMine-MP插件

---

作者：AMDISYES  

QQ：3480656548  

###### 倒卖本插件死全家 wusheng233禁止使用
---
### 目前实现的功能

- [x] `/sh` 服务器帮助
- [x] `/shm` 管理命令
  - `/shm reload` 重载插件配置文件
  - `/shm version` 插件版本
- [x] `/bread` 给面包
- [x] 玩家进出服的人数提示
---
### 经过测试可用的版本

- [x] 0.12
- [x] 0.14

### 可能可用的版本

- 0.10
- 0.11
- 0.13
- 0.15 
---
### 配置文件

```
---
#玩家进出服提示(ON/OFF)
OnlineTip: "ON"
#给面包功能(ON/OFF)
GiveBread: "ON"
#给面包的个数
BreadNum: 16
#服务器帮助(ON/OFF)
ServerHelp: "ON"
#服务器帮助第一页
PlayerMessP1: |-
  §a==服务器帮助(1/5)==
  §a待修改
#服务器帮助第二页
PlayerMessP2: |-
  §a==服务器帮助(2/5)==
  §a待修改
#服务器帮助第三页
PlayerMessP3: |-
  §a==服务器帮助(3/5)==
  §a待修改
#服务器帮助第四页
PlayerMessP4: |-
  §a==服务器帮助(4/5)==
  §a待修改
#服务器帮助第五页
PlayerMessP5: |-
  §a==服务器帮助(5/5)==
  §a待修改
...
```

