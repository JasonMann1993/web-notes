# 修改用户可以登录
1. vendor/jsthon/flarum-ext-simplified-chinese/locale/core.yml : 302
2. vendor/flarum/core/src/Core/Repository/UserRepository.php : 54
# 注册跳转
vendor/flarum/core/js/forum/dist/app.js:23252
```
return app.modal.show(new SignUpMo　dal());
window.location.href='https://www.outline.ink';
```
