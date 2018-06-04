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

## 文件夹结构简介

| 文件夹名称 | 简介 |
| --- | --- |
| app | 应用程序的业务逻辑代码存放文件夹 |
| app/Console | 存放自定义Artisan命令文件 |
| app/Http/controllers | 存放控制器文件 |
| app/Http/Middleware | 存放「中间件」文件 |
| bootstrap | 框架启动与自动加载设置相关的文件 |
| composer.json | 应用依赖的扩展包 |
| composer.lock | 扩展包列表，确保这个应用的副本使用相同版本的扩展包 |
| config | 应用程序的配置文件 |
| database | 数据库操作相关文件（数据库迁移和数据填充）|
| node_modules | 存放 NPM 依赖模块 |
| package.json | 应用所需的 NPM 包配置文件 |
| phpunit.xml | 测试工具 PHPUnit 的配置文件 |
| public | 前端控制器和资源相关文件（图片、JavaScript、CSS） |
| readme.md | 项目介绍说明文件 |
| resources | 应用资源 |
| resources/assets | 未编译的应用资源文件（图片、JavaScript、CSS） |
| resources/lang | 多语言文件 |
| resources/views | 视图文件 |
| routes/api.php | 用于定义 API 类型的路由 |
| routes/channels.php | 事件转播注册信息 |
| routes/console.php | 用于定义 Artisan 命令 |
| routes/web.php | 用于定义 Web 类型的路由（重点，大部分情况下本书会用到） |
| server.php | 使用 PHP 内置服务器时的 URL 重写（类似于 Apache 的 "mod_rewrite" ） |
| storage | 编译后的视图、基于会话、文件缓存和其它框架生成的文件 |
| storage/app | 目录可用于存储应用程序使用的任何文件 |
| storage/framework | 目录被用于保存框架生成的文件及缓存 |
| storage/logs | 应用程序的日志文件 |
| tests | 应用测试相关文件 |
| vendor | Composer 依赖模块 |
| webpack.mix.js | Laravel 的前端工作流配置文件 |
| yarn.lock | Yarn 依赖版本锁定文件 |
| .gitignore | 被 Git 所忽略的文件 |
| .env | 环境变量配置文件 |

## 更新日志

请查阅 [更新日志](./CHANGELOG.md)