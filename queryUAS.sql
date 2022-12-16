CREATE VIEW detail_vendor_product AS
SELECT produk.Nama,produk.Deskripsi,produk.Berat,produk.Kategori,produk.name_vendor,namas.alamat,namas.no_telp
       FROM form_products produk 
    INNER JOIN vendor_namas namas ON namas.nama_vendor=produk.name_vendor