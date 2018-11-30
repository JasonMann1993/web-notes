## 更新要点
- 每月初始化流量
- 更新流量使用
- 更新env文件(v1,v2)
- 开启队列
- 开启定时任务
- 修改 env defaultTraffic = 167772160000
- database.php
## 更新用户流量
删除tmp ssr
添加白名单
```
sudo scp /Users/mj/company/knowledge/python/db_transfer.py outline01@13.78.17.157:/tmp
# 登录服务器
mv /tmp/db_transfer.py /root
pip install PyMySQL
 ```

## v2版本数据库更新内容
- company_internet_address 表与 v1 版本不共用（添加后缀v2）
- order 表与 v1 版本不共用（添加后缀v2）
- versions 表与 v1 版本不共用 （添加v2后缀）
### 更新代码

- service 使用同一张表 OVER
    - v1 版本要添加  company_internet_address_id,closed_at
    - v2 版本要加   company_code,country_service,overseas_id,reg_date,closing_date
    
- user_invitation_code 使用同一张表 OVER
    - v1 版本添加expired_at
    
- user_order 使用同一张表 OVER
    - v1 版本添加 closed_at,user_invitation_id
    - v2 版本添加  service_time,reg_date,info,level
