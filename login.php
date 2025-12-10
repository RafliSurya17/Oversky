<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Oversky - Login</title>

<style>
  *, *::before, *::after { box-sizing: border-box; }
  body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background-color: #000;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .sign-in-section {
    background: rgba(255 255 255 / 0.1);
    backdrop-filter: blur(10px);
    border-radius: 16px;
    padding: 2rem;
    max-width: 400px;
    width: 90%;
    box-shadow: 0 8px 24px rgba(255 255 255 / 0.1);
  }

  h3 {
    text-align: center;
    margin-bottom: 1rem;
    font-size: 1.8rem;
  }

  .form-group { margin-bottom: 1rem; }

  label { font-weight: 600; }

  input {
    width: 100%;
    padding: 0.75rem 1rem;
    border-radius: 12px;
    border: none;
    background: rgba(255 255 255 / 0.07);
    color: white;
  }

  .btn-submit {
    width: 100%;
    padding: 0.85rem;
    background: white;
    color: black;
    font-weight: 700;
    border-radius: 12px;
    cursor: pointer;
  }

  .btn-submit:hover { background: #ddd; }

  .back-to-home {
    display: block;
    margin-top: 1rem;
    text-align: center;
    color: white;
  }
</style>
</head>

<body>

<section class="sign-in-section">
  <h3>Sign in to Oversky</h3>

  <form id="login-form">
    <div class="form-group">
      <label>Email</label>
      <input type="email" id="login-email" required />
    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" id="login-password" required />
    </div>

    <button type="submit" class="btn-submit">Login</button>
  </form>

  <a href="index.html" class="back-to-home">Back to Home</a>
</section>

<!-- Supabase CDN -->
<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js"></script>

<script>
// 🟦 INISIALISASI SUPABASE
const supabaseUrl = "https://YOUR_PROJECT_URL.supabase.co";
const supabaseKey = "YOUR_ANON_KEY";
const supabaseClient = supabase.createClient(supabaseUrl, supabaseKey);

// 🟦 LOGIN FUNCTION
document.getElementById("login-form").addEventListener("submit", async (event) => {
  event.preventDefault();

  const email = document.getElementById("login-email").value;
  const password = document.getElementById("login-password").value;

  // 🔍 Cek user di tabel Supabase (misal tabel `users`)
  const { data, error } = await supabaseClient
    .from("users")
    .select("*")
    .eq("email", email)
    .eq("password", password)
    .single();

  if (error || !data) {
    alert("Email atau password salah!");
    return;
  }

  // Jika admin
  if (data.role === "admin") {
    alert("Login Admin Berhasil!");
    window.location.href = "admin/admin.php";
  } 

  // Jika user biasa
  else {
    alert("Login Berhasil!");
    window.location.href = "Menu.html";
  }
});
</script>

</body>
</html>
