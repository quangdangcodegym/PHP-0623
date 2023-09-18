### MMigration

##### Tạo file migration

php artisan make:migration taotableNsx --create=nhasanxuat
--> tên file: 2023-10-10-000000_tao_table_Nsx  
 (taotableNsx <=>tao_table_Nsx)
(DangVanQuang <=> dang_van_quang)
--> php artisan make:migration CreateTableProducts --create=products
hoặc
php artisan make:migration create_nhasanxuat_table

##### Cập nhật migration

php artisan make:migration suatableNsx --table=nhasansuat
--> tên file: 2023_09_13_113827_suatable_nsx.php

===> Nó sẽ viết thường + Chữ cái đầu Uppercase sẽ được hạ xuống + thêm dấu '\_'

--- Thêm khóa ngoại cho bảng products
php artisan make:migration EditTableProductAddForeign --table=products

```php
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // Xóa khóa ngoại category_id
        });
    }
```

--- Thêm một trường cho bảng categories
php artisan make:migration EditTableCategoryAddField --table=categories

###### Các lệnh thường sử dụng

$table->increments(‘id’); ➔ field id tăng tự động, unsigned integer
$table->id(); ➔ field id tang tự động, big Integer
$table->integer(‘soLuong’); ➔ field kểu integer , tên soLuong
$table->string(‘tenSP’, 100); ➔ field kiểu varchar, độ dài 100
$table->boolean(‘anHien’); ➔ field kiểu Boolean
$table->double(‘diemTB’, 8, 2); ➔ field kiểu số thực
$table->dateTime(‘thoiDiemMuaHang’); ➔ field kiểu ngày giờ
$table->charset = ‘utf8mb4’; ➔ Khai báo charset cho table
$table->collation = ‘utf8mb4_unicode_ci’; ➔ Khai báo collation cho table
$table->timestamps(); ➔ Tạo 2 field created_at và updated_at

###### Thực hiện chạy migration

---- Chạy tất cả các migration chưa chạy
php artisan migrate
Nếu thằng nào đã chạy rồi thì KHỎI chạy, chưa chạy thì được chạy

php artisan migrate:rollback
Rollback về migration gần nhất (chú ý field batch trong bảng migrations)

php artisan migrate:rollback --step=2
Roleback về step được chỉ định

php artisan migrate:reset sẽ rollback lại tất cả migration của ứng dụng.
php artisan migrate:refresh sẽ rollback lại toàn bộ migration và rồi chạy lệnh migrate.

### SSEEDER

- Để tạo seeder
  php artisan make:seeder NhaSanXuat

php artisan make:seeder Categories

- Để chạy seeder đã tạo, chạy lệnh sau trong folder project
  php artisan db:seed --class=NhaSanXuat
  php artisan db:seed --class=Categories

  #### Tạo controller

  php artisan make:controller UserController
  php artisan make:controller ProductController

### MModel

php artisan make:model Category

```php
//B1: Tạo bảng và migrate:
// Tạo bảng "posts"
Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    // Thêm các cột khác cho bài viết
    $table->timestamps();
});

// Tạo bảng "comments"
Schema::create('comments', function (Blueprint $table) {
    $table->id();
    $table->text('content');
    $table->unsignedBigInteger('post_id'); // Khóa ngoại đến bảng "posts"
    // Thêm các cột khác cho bình luận
    $table->timestamps();
});
// Định nghĩa các mô hình Eloquent: Tiếp theo, bạn cần định nghĩa các mô hình Eloquent cho các bảng này. Ví dụ:
// app/Models/Post.php
class Post extends Model {
    protected $fillable = ['title'];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}

// app/Models/Comment.php
class Comment extends Model {
    protected $fillable = ['content'];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}

// Sử dụng mối quan hệ "many-to-one": Bây giờ bạn có thể sử dụng mối quan hệ "many-to-one" trong ứng dụng của mình. Ví dụ:
// Lấy tất cả các bình luận cho một bài viết cụ thể
$post = Post::find(1);
$comments = $post->comments;

// Lấy bài viết mà một bình luận thuộc về
$comment = Comment::find(1);
$post = $comment->post;

```

### VValidation

###### Validation sử dụng formRequest

php artisan make:request RuleNhapSV
php artisan make:request ValidationProduct

```php
public function authorize(): bool
    {
        // nhớ cho true để không cần phải authorize
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'name' => ['required', 'regex:^[a-zA-Z]{8,20}$'],
            'description' => 'required|regex:^[a-zA-Z]{8,50}$',
            'category_id' => 'required|regex:^[0-9]+$',
            'price' => 'required|regex:^[0-9]+$',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên phải được nhập',
            'name.regex' => 'Tên chưa hợp lệ. Phải từ 8-20 chữ cái',
            'description.regex' => 'Thông tin mô tả chưa hợp lệ. Từ 8-50 chữ cái',
            'category_id.regex' => 'Danh mục phải là số',
            'price.regex' => 'Giá không hợp lệ',
        ];
    }
```

### RRouter

```php
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/create', [ProductController::class, 'save'])->name('save');

    Route::get('/{id}', [ProductController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}', [ProductController::class, 'update'])->name('update');

    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('destroy');
});

```

Route::prefix('products')->name('products.')->group(function () {
Route::get('/{id}', [ProductController::class, 'show'])->name('show');
}
sử dụng route này như thế nào
href="{{ route(???)}}"

<a href="{{ route('products.show', ['id' => 123]) }}">Xem sản phẩm có ID 123</a>

### LLogging ứng dụng

Cấu hình ở file config/log

```php

// chú ý dòng: 'default' => env('LOG_CHANNEL', 'stack'),        Thằng stack sẽ được lấy để chạy
'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single', 'product_history'],
            // 'channels' => ['single', 'post_history'],        // dùng stack thì có thể đưa vào nhiều channel
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],
        'post_history' => [
            'driver' => 'daily',
            'path' => storage_path('logs/post_history.log'),
            'level' => 'debug',
            'days' => 0,
            'permission' => 777,
        ],
        'product_history' => [
            'driver' => 'single',
            'path' => storage_path('logs/product_history.log'),
            'level' => 'debug',
            'replace_placeholders' => true,
        ],
]
/*
    Sử dụng:
    Ghi vào 1 channel cụ thể
    Log::channel('post_history')->info('Access product index page');

    Nếu import không được thì dùng NHỚ dòng: use Illuminate\Support\Facades\Log;
    Log vào chanel stack đã được đăng kí mặc định
*/
Log::info('Access product index page ' . rand(1, 100));
```

https://viblo.asia/p/exceptions-trong-laravel-lam-the-nao-de-catch-handle-va-tu-tao-mot-exception-de-xu-ly-van-de-cua-rieng-minh-bJzKmGnOl9N

https://james.codegym.vn/mod/page/view.php?id=13274
https://james.codegym.vn/mod/page/view.php?id=13273

#### AAuthentication
