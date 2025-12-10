<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Admin Dashboard — Oversky</title>

<style>
/* =======================
   LAYOUT DASAR
======================= */
body { margin:0; font-family: Inter, Arial, sans-serif; background:#f5f5f5; color:#222; }

/* =======================
   NAVBAR
======================= */
header {
  background:#111; color:#fff;
  padding:14px 18px;
  display:flex; justify-content:space-between; align-items:fixed;
}
.toggle-btn {
  background:#333; color:#fff; border:none;
  padding:7px 12px; border-radius:6px; cursor:pointer;
  font-size:18px;
}
.logout-btn {
  background:#e74c3c; color:#fff; border:none;
  padding:8px 14px; border-radius:6px; cursor:pointer;
}

/* =======================
   SIDEBAR (VERSI AWAL YG BISA COLLAPSE)
======================= */
        .sidebar {
            width: 240px;
            background: #181818;
            color: white;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
            transition: width 0.3s ease;
            overflow: hidden;
        }

        .sidebar h3 {
            margin-left: 20px;
            font-size: 18px;
            transition: opacity 0.2s;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            font-size: 15px;
            transition: 0.2s;
        }

        .sidebar a:hover {
            background: #333;
        }

        .icon {
            width: 18px;
            min-width: 18px;
        filter:brightness(0) invert(1);
        }

/* COLLAPSE MODE */
.sidebar.collapsed { width:70px; }
.sidebar.collapsed h3,
.sidebar.collapsed a span {
  opacity:0;
  pointer-events:none;
  transition:opacity .2s;
}

/* =======================
   CONTENT
======================= */
.content {
  margin-left:260px;
  padding:20px;
  transition:margin-left .28s ease;
}
.content.shifted { margin-left:90px; }

/* =======================
   CARDS + GRID
======================= */
.card {
  background:#fff;
  padding:18px;
  border-radius:8px;
  margin-bottom:18px;
  box-shadow:0 1px 3px rgba(0,0,0,.06);
}

.product-grid, .promo-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(180px,1fr));
  gap:18px;
  margin-top:12px;
}
.product-card, .promo-card {
  background:#fff; border:1px solid #eee;
  border-radius:8px; padding:12px; text-align:center;
}
.product-card img, .promo-card img {
  width:100%; height:160px; object-fit:cover; border-radius:6px;
}

.product-name, .promo-name { font-weight:600; margin-top:8px; font-size:14px; }

.product-actions { display:flex; gap:8px; justify-content:center; margin-top:10px; }
.btn-edit { background:#3498db; color:#fff; border:none; padding:6px 10px; border-radius:6px; cursor:pointer; }
.btn-delete{ background:#e74c3c; color:#fff; border:none; padding:6px 10px; border-radius:6px; cursor:pointer; }

.stock-box { margin-top:8px; font-weight:700; }
.stock-control{ display:flex; gap:8px; justify-content:center; margin-top:8px; }
.stock-btn{ background:#2ecc71; color:#fff; border:none; padding:6px 10px; border-radius:6px; cursor:pointer; }
.stock-btn.minus{ background:#e67e22; }

/* =======================
   ORDER TABLE
======================= */
.table{
  width:100%; border-collapse:collapse; margin-top:12px;
}
.table th, .table td{
  padding:10px 8px; border-bottom:1px solid #eee;
  text-align:left; font-size:14px;
}
.table th{ background:#fafafa; font-weight:600; }

.tag { padding:4px 8px; border-radius:6px; font-size:13px; color:#fff; }
.tag.pending{ background:#f39c12; }
.tag.process{ background:#3498db; }
.tag.shipped{ background:#8e44ad; }
.tag.done{ background:#27ae60; }

/* =======================
   MODAL
======================= */
.modal-backdrop{
  position:fixed; inset:0;
  background:rgba(0,0,0,.5);
  display:none; align-items:center; justify-content:center;
  z-index:999;
}
.modal{
  background:#fff;
  width:90%; max-width:760px;
  border-radius:8px; padding:18px;
  max-height:85vh; overflow:auto;
}
.line { display:flex; justify-content:space-between; margin-bottom:10px; }
.small { font-size:13px; color:#555; }

</style>
</head>
<body>

<!-- =======================
     NAVBAR (FINAL)
======================= -->
<header>
  <div style="display:flex;gap:10px;align-items:center;">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <h2 style="margin:0;">Admin Dashboard</h2>
  </div>
  <button class="logout-btn" onclick="logout()">Logout</button>
</header>

<!-- =======================
     SIDEBAR (VERSI AWAL)
======================= -->
<div class="sidebar" id="sidebar">
  <h3>Navigasi</h3>

  <a href="#dashboard">
    <img class="icon" src="https://api.iconify.design/lucide-home.svg"><span>Dashboard</span>
  </a>

  <a href="#produk">
    <img class="icon" src="https://api.iconify.design/lucide-box.svg"><span>Manajemen Produk</span>
  </a>

  <a href="#order-mgmt">
    <img class="icon" src="https://api.iconify.design/lucide-clipboard-list.svg"><span>Manajemen Order</span>
  </a>

  <a href="#harga">
    <img class="icon" src="https://api.iconify.design/lucide-badge-percent.svg"><span>Harga & Promo</span>
  </a>

  <a href="#laporan">
    <img class="icon" src="https://api.iconify.design/lucide-chart-line.svg"><span>Laporan</span>
  </a>

  <a href="#user">
    <img class="icon" src="https://api.iconify.design/lucide-users.svg"><span>User Management</span>
  </a>

  <a href="#logistik">
    <img class="icon" src="https://api.iconify.design/lucide-truck.svg"><span>Integrasi Logistik</span>
  </a>
</div>

<!-- =======================
     CONTENT
======================= -->
<div class="content" id="content">

  <!-- DASHBOARD -->
  <div class="card" id="dashboard">
    <h3>Selamat datang, Admin!</h3>
    <p class="small">Gunakan menu untuk mengelola produk, promo, dan pesanan.</p>
  </div>

  <!-- PRODUK -->
  <div id="produk" class="card">
    <h3>Manajemen Produk</h3>
    <div id="productGrid" class="product-grid"></div>
  </div>

  <!-- ORDER -->
  <div id="order-mgmt" class="card">
    <h3>Manajemen Order</h3>

    <div class="controls">
      <input type="search" id="searchOrder" placeholder="Cari order..." />
      <select id="filterStatus">
        <option value="">Semua status</option>
        <option value="pending">Pending</option>
        <option value="processing">Processing</option>
        <option value="shipped">Shipped</option>
        <option value="done">Done</option>
        <option value="cancelled">Cancelled</option>
      </select>
      <button onclick="loadOrders()">Refresh</button>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th><th>Customer</th><th>Items</th>
          <th>Total</th><th>Tanggal</th><th>Status</th><th>Aksi</th>
        </tr>
      </thead>
      <tbody id="ordersBody"></tbody>
    </table>
  </div>

  <!-- PROMO -->
  <div id="harga" class="card">
    <h3>Harga & Promo</h3>
    <button class="btn-edit" onclick="openPromoModal()">+ Tambah Promo</button>
    <div id="promoGrid" class="promo-grid"></div>
  </div>

<!-- LAPORAN -->
<div id="laporan" class="card">
  <h3>Laporan Penjualan</h3>

  <div class="controls" style="margin-bottom:10px;">
    <select id="reportRange">
      <option value="7">7 Hari Terakhir</option>
      <option value="30">30 Hari Terakhir</option>
      <option value="90">3 Bulan Terakhir</option>
      <option value="365">1 Tahun Terakhir</option>
    </select>
    <button onclick="loadReport()">Tampilkan</button>
  </div>

  <div id="reportSummary" style="margin-bottom:15px; font-size:14px;">
    <b>Total Transaksi:</b> <span id="reportTotalTransaksi">0</span><br>
    <b>Total Pendapatan:</b> Rp <span id="reportTotalPendapatan">0</span>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th>ID Order</th>
        <th>Tanggal</th>
        <th>Customer</th>
        <th>Total</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody id="reportTableBody"></tbody>
  </table>
</div>

  <!-- HALAMAN LAIN -->
  <div id="user" class="card"><h3>User Management</h3></div>
  <div id="logistik" class="card"><h3>Integrasi Logistik</h3></div>

</div>

<!-- =======================
     MODAL PROMO
======================= -->
<div id="promoModal" class="modal-backdrop">
  <div class="modal">
    <h3 id="modalTitle">Tambah Promo</h3>
    <form id="promoForm">
      <input type="hidden" id="promoId">
      <label>Nama Promo</label>
      <input type="text" id="promoName" required>
      <label>Harga Promo</label>
      <input type="number" id="promoPrice" required>
      <label>Upload Gambar</label>
      <input type="file" id="promoImage">
      <button type="submit" class="btn-edit">Simpan</button>
      <button type="button" class="btn-delete" onclick="closePromoModal()">Batal</button>
    </form>
  </div>
</div>

<!-- =======================
     MODAL ORDER DETAIL
======================= -->
<div id="orderModal" class="modal-backdrop">
  <div class="modal">
    <h3>Detail Pesanan <span id="orderModalId"></span></h3>
    <div id="orderDetailContent"></div>

    <select id="orderStatusSelect">
      <option value="pending">Pending</option>
      <option value="processing">Processing</option>
      <option value="shipped">Shipped</option>
      <option value="done">Done</option>
      <option value="cancelled">Cancelled</option>
    </select>

    <button id="saveOrderStatusBtn" class="btn-edit">Simpan Status</button>
    <button id="deleteOrderBtn" class="btn-delete">Hapus Order</button>
    <button onclick="closeOrderModal()" class="btn-secondary">Tutup</button>
  </div>
</div>

<script>
/* ======================= NAVIGATION ======================= */
function toggleSidebar() {
  document.getElementById("sidebar").classList.toggle("collapsed");
  document.getElementById("content").classList.toggle("shifted");
}
function logout(){ window.location.href="../login.html"; }

/* ======================= PRODUK ======================= */
loadProducts();
function loadProducts(){
  fetch("get_products.php")
    .then(r=>r.json())
    .then(data=>{
      let g=document.getElementById("productGrid");
      g.innerHTML="";
      data.forEach(p=>{
        g.innerHTML+=`
        <div class="product-card">
          <img src="../assets/img/${p.image}">
          <div class="product-name">${p.name}</div>
          <div class="product-actions">
            <button class="btn-edit" onclick="editProduct(${p.id})">Edit</button>
            <button class="btn-delete" onclick="deleteProduct(${p.id})">Hapus</button>
          </div>
          <div class="stock-box">Stok: <span id="stok${p.id}">${p.stock}</span></div>
          <div class="stock-control">
            <button class="stock-btn minus" onclick="updateStock(${p.id},-1)">-</button>
            <button class="stock-btn" onclick="updateStock(${p.id},1)">+</button>
          </div>
        </div>`;
      });
    });
}

function editProduct(id) {
  alert("Edit produk ID: " + id);

  // Jika ingin buka modal edit, bisa ditambahkan
  // openProductModal(id);
}

function deleteProduct(id) {
  if (!confirm("Yakin ingin menghapus produk ini?")) return;

  let fd = new FormData();
  fd.append("id", id);

  fetch("delete_product.php", { method: "POST", body: fd })
    .then(r => r.text())
    .then(res => {
      alert(res);
      loadProducts(); // refresh grid
    });
}

function updateStock(id, amount){
  let el=document.getElementById("stok"+id);
  let newStock=Math.max(0, parseInt(el.innerHTML)+amount);
  el.innerHTML=newStock;

  let fd=new FormData();
  fd.append("id",id);
  fd.append("stock",newStock);
  fetch("update_stock.php",{method:"POST", body:fd});
}

/* ======================= ORDER ======================= */
loadOrders();
let currentOrders=[];

function loadOrders(){
  fetch("get_orders.php")
    .then(r=>r.json())
    .then(data=>{
      currentOrders=data;
      renderOrdersTable(data);
    });
}

function renderOrdersTable(data){
  let b=document.getElementById("ordersBody");
  b.innerHTML="";
  data.forEach(o=>{
    b.innerHTML+=`
    <tr>
      <td>#${o.id}</td>
      <td>${o.customer_name}</td>
      <td>${o.items_summary}</td>
      <td>Rp ${o.total}</td>
      <td>${o.created_at}</td>
      <td>${o.status}</td>
      <td>
        <button class="btn-edit" onclick="openOrderModal(${o.id})">Detail</button>
        <button class="btn-delete" onclick="deleteOrderConfirm(${o.id})">Hapus</button>
      </td>
    </tr>`;
  });
}

/* ======================= ORDER MODAL ======================= */
function openOrderModal(id){
  let order=currentOrders.find(o=>o.id==id);
  if(!order) return;

  document.getElementById("orderModalId").innerHTML="#"+id;
  document.getElementById("orderDetailContent").innerHTML=`
    <div class="line"><b>Nama</b><span>${order.customer_name}</span></div>
    <div class="line"><b>Email</b><span>${order.email}</span></div>
    <div class="line"><b>Alamat</b><span>${order.address}</span></div>
    <div class="line"><b>Tanggal</b><span>${order.created_at}</span></div>
    <div class="line"><b>Total</b><span>Rp ${order.total}</span></div>
  `;

  document.getElementById("orderStatusSelect").value=order.status;
  document.getElementById("saveOrderStatusBtn").onclick=()=>updateOrderStatus(id);
  document.getElementById("deleteOrderBtn").onclick=()=>deleteOrderConfirm(id);

  document.getElementById("orderModal").style.display="flex";
}
function closeOrderModal(){ document.getElementById("orderModal").style.display="none"; }

function updateOrderStatus(id){
  let status=document.getElementById("orderStatusSelect").value;
  let fd=new FormData();
  fd.append("id",id);
  fd.append("status",status);

  fetch("update_order_status.php",{method:"POST", body:fd})
    .then(r=>r.text()).then(t=>{ alert(t); closeOrderModal(); loadOrders(); });
}

function deleteOrderConfirm(id){
  if(!confirm("Yakin hapus order ini?")) return;
  let fd=new FormData();
  fd.append("id",id);

  fetch("delete_order.php",{method:"POST", body:fd})
    .then(r=>r.text()).then(t=>{ alert(t); closeOrderModal(); loadOrders(); });
}

/* ======================= PROMO ======================= */
loadPromos();
function loadPromos(){
  fetch("get_promo.php")
    .then(r=>r.json())
    .then(data=>{
      let g=document.getElementById("promoGrid");
      g.innerHTML="";
      data.forEach(pr=>{
        g.innerHTML+=`
        <div class="promo-card">
          <img src="../assets/img/${pr.image}">
          <div class="promo-name">${pr.name}</div>
          <div class="promo-price">Rp ${pr.price}</div>
          <div class="product-actions">
            <button class="btn-edit" onclick='openPromoModal(${JSON.stringify(pr)})'>Edit</button>
            <button class="btn-delete" onclick="deletePromo(${pr.id})">Hapus</button>
          </div>
        </div>`;
      });
    });
}

function openPromoModal(data=null){
  document.getElementById("promoModal").style.display="flex";

  if(data){
    document.getElementById("modalTitle").innerHTML="Edit Promo";
    document.getElementById("promoId").value=data.id;
    document.getElementById("promoName").value=data.name;
    document.getElementById("promoPrice").value=data.price;
  } else {
    document.getElementById("modalTitle").innerHTML="Tambah Promo";
    document.getElementById("promoForm").reset();
    document.getElementById("promoId").value="";
  }
}
function closePromoModal(){ document.getElementById("promoModal").style.display="none"; }

document.getElementById("promoForm").onsubmit=function(e){
  e.preventDefault();

  let fd=new FormData();
  fd.append("id",document.getElementById("promoId").value);
  fd.append("name",document.getElementById("promoName").value);
  fd.append("price",document.getElementById("promoPrice").value);

  let file=document.getElementById("promoImage").files[0];
  if(file) fd.append("image",file);

  fetch("save_promo.php",{method:"POST", body:fd})
    .then(r=>r.text()).then(t=>{
      alert(t);
      closePromoModal();
      loadPromos();
    });
};

function deletePromo(id){
  if(!confirm("Hapus promo ini?")) return;
  let fd=new FormData();
  fd.append("id",id);

  fetch("delete_promo.php",{method:"POST", body:fd})
    .then(r=>r.text()).then(t=>{
      alert(t);
      loadPromos();
    });
}

/* ======================= LAPORAN ======================= */

function loadReport() {
  let range = document.getElementById("reportRange").value;

  fetch("get_report.php?range=" + range)
    .then(r => r.json())
    .then(data => {
      // summary
      document.getElementById("reportTotalTransaksi").innerHTML = data.total_transaksi;
      document.getElementById("reportTotalPendapatan").innerHTML = data.total_pendapatan;

      // table
      let body = document.getElementById("reportTableBody");
      body.innerHTML = "";

      data.items.forEach(rp => {
        body.innerHTML += `
        <tr>
          <td>#${rp.id}</td>
          <td>${rp.created_at}</td>
          <td>${rp.customer_name}</td>
          <td>Rp ${rp.total}</td>
          <td>${rp.status}</td>
        </tr>`;
      });
    });
}
// load default laporan saat halaman dibuka
loadReport();

</script>

</body>
</html>
