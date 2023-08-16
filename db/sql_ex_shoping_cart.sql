-- 10. In ra số hóa đơn, trị giá các hóa đơn do nhân viên có tên “Nguyễn Văn B” 
-- lập trong ngày 10/10/2006.
SELECT *
FROM nhanvien NV JOIN hoadon HD ON NV.MaNV = HD.MaNV
WHERE NV.HoTen LIKE 'Nguyễn Văn B';

SELECT HD.SoHoaDon, HD.TriGia
FROM nhanvien NV JOIN hoadon HD ON NV.MaNV = HD.MaNV
WHERE NV.HoTen LIKE 'Nguyễn Văn B' and HD.NgayMuaHang like '2006-10%';

-- 13. Tìm các số hóa đơn mua cùng lúc 2 sản phẩm có mã số “BB01” và “BB02”, 
-- mỗi sản phẩm mua với số ượng từ 10 đến 20.
/**
FROM hoadon h
JOIN cthd c1 ON h.SoHoaDon = c1.SoHD
JOIN cthd c2 ON h.SoHoaDon = c2.SoHD
WHERE c1.MaSp = 'BB01' AND c2.MaSp = 'BB02';

SELECT h.SoHoaDon
FROM hoadon h
JOIN cthd c ON h.SoHoaDon = c.SoHD
WHERE c.MaSP = 'BB01'
  AND EXISTS (
    SELECT "afbbab"
    FROM cthd c2
    WHERE c2.SoHD = h.SoHoaDon AND c2.MaSP = 'BB02'
  );
**/
-- 15 In ra danh sách các sản phẩm (MASP,TENSP) không bán được.
select *
from sanpham sp 
where sp.MASP NOT IN (SELECT MaSP from cthd);

-- 18. Có bao nhiêu hóa đơn không phải của khách hàng đăng ký thành viên mua?

select count(*) as soluongdon
from hoadon hd
where hd.MaKH is null;

-- 35. Tìm khách hàng (MAKH, HOTEN) có số lần mua hàng nhiều nhất.
select hd.MaKH, count(hd.MaKH) as soluong
from hoadon hd
where hd.MaKH is not null
group by hd.MaKh
having soluong >=  all 
	(select count(hd1.MaKH) 
		from hoadon hd1 
        where hd1.MaKH is not null
        group by hd1.MaKh);
	
    
    
 -- 38 Mỗi nước sản xuất, tìm sản phẩm (MASP,TENSP) có giá bán cao nhất.
select *
from sanpham sp join 
	(select sp1.NuocSX, max(sp1.Gia) as max_gia
		from sanpham sp1
		group by sp1.NuocSX) as tb_temp
	on sp.Gia = tb_temp.max_gia and tb_temp.NuocSX = sp.NuocSX;
    
-- cach 2
SELECT NUOCSX,MASP, TENSP
FROM  SANPHAM A
WHERE GIA=(SELECT MAX(GIA)
   FROM  SANPHAM B
   WHERE A.NUOCSX=B.NUOCSX)
GROUP BY NUOCSX,MASP,TENSP;

-- 
select *, (select count(*) from hoadon hd where kh.MaKH = hd.MaKH ) as soluong
from khachhang kh;

    

    
     
 





