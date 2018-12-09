## 工作分配

**張家鳴**
```sh
* 商品分類管理
* 商品管理
* 檔案儲存
```

**周惟中**
```sh
會員管理
訂單管理
優惠券管理
```

**胡容華**
```sh
協助功能開發
介面美化
訂閱功能
API Route
Web Route
發送郵件
```


## Clone後，開始共同開發之前

按照步驟執行指令：

**還原 vendor**
```sh
composer install
```

**還原 node_modules**
```sh
npm install
```

**還原.env**
```sh
cp .env.example .env
php artisan key:generate
```

**修改.env**
```
DB_DATABASE=*你的資料庫名稱（自行建立）*
DB_USERNAME=*使用者帳號*
DB_PASSWORD=*使用者密碼*
```

**重建資料庫**
```sh
php artisan migrate --seed
```

**產生JTW KEY**
```sh
php artisan jwt:secret
```

**接上storage**
```sh
php artisan storage:link

ps: 如果cmd回傳連結已存在時,請到public/底下刪除storage
```

開始程式饗宴
