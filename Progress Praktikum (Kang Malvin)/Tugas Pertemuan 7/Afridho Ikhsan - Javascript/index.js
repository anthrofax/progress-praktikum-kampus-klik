// Coba 1
const nama = "Afridho Ikhsan";
const umur = 19;

console.log(nama, umur);
console.error("Error: Gagal melakukan fetch data dari server");
console.info("Infor: Mencoba untuk menghubungi ke server");

// Coba 2
for (let i = 0; i < 10; i++) {
  document.write("Data " + (i + 1) + "<br>");
}

// Coba 3
const mahasiswa = [
  "Aditya Daffa Syahputra",
  "Afridho Ikhsan",
  "Alfia Meilani",
  "Ikhwan Pratama Hidayat",
  "Gudang Gunawan",
];

document.write("<br>" + "Data Mahasiswa Kelas 4A" + "<br>");

for (let i = 0; i < mahasiswa.length; i++) {
  document.write(`Absen ${i + 1}: ` + mahasiswa[i] + "<br>");
}

// Coba 4
// HTML SELECTION (SELEKSI HTML)
// MEMILIH HTML

// TAG, CLASS, ID
const btn = document.querySelector(".button-saya");

btn.addEventListener('click', function() {
    alert(`Halo ${nama}!`)
})