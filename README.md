# CodeIgniter-Login

**1. Extrak Framework CI**

**2. Import database ci-login.sql**

**3. application/config/autoload.php**
  <br>Awal Baris 92 :
  <br>`$autoload['helper'] = array('');`
  <br>Edit :
  <br>`$autoload['helper'] = array('url');`

  <br>Awal Baris 61 :
  <br>`  $autoload['libraries'] = array('');`
  <br>Edit :
  <br>`  $autoload['libraries'] = array('database','session');`

**4. application/config/database.php ubah baris 78-81**
  <br>`'hostname' => 'localhost',`
  <br>`'username' => 'root',`
  <br>`'password' => '',`
  <br>`'database' => 'ci-login',`

  **5. Tambahkan/Edit beberapa file berikut**
  - application/controllers/C_login.php -> Mengecek login
  - application/controllers/C_admin.php -> Melakukan kondisi admin setelah login
  - application/models/M_login.php -> Melakukan hubungan controller dengan database
  - application/view/v_login.php -> Tampilan login
  - application/view/v_admin.php -> Tampilan setelah login admin


  **6. application/config/routes.php ubah baris 52**
  <br>`$route['default_controller'] = 'C_login';` -> agar index nya langsung ke C_login

  **7. Buka dengan Link berikut**
  <br>`localhost/ci-login/index.php`
