## 项目描述

使用 Laravel 开发一个类似新浪微博的网站。其功能包括：

* 用户的注册登录
* 用户个人信息的更改
* 使用管理员权限删除用户
* 发布微博
* 关注用户
* 查看关注用户的微博动态

## 开发环境部署

1. 克隆源代码

```bash
git clone git@github.com:liujianzero/sample.git
```

2. 安装扩展包依赖

```bash
composer install
```

3. 生成配置文件
   
```bash
cp .env.example .env
```

4. 数据库迁移

```bash
php artisan migrate --seed
```

5. 使用 Heroku 部署一个 Laravel 应用到生产环境上

6. 至此完成安装

## 开发注意

新建分支进行编写代码
```bash
git checkout master 
```

```bash
git checkout -b XXX
```

更改的代码进行提交，并切回到主分支上进行合并
```bash
git add -A
```

```bash
git commit -m "提交内容"
```

```bash
git checkout master
```

```bash
git merge XXX
```

将代码推送到 GitHub 和 Heroku 上

```bash
git push
```

```bash
git push heroku master
```



## 更新日志

请查阅 [更新日志](./CHANGELOG.md)