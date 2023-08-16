delimiter //
create procedure spInsertSanPham(
	IN MASP char(4),
    IN TenSP varchar(40),
    IN DVT varchar(20),
    IN NuocSX varchar(40),
    IN GIA decimal(12,0),
    OUT MESSAGE varchar(255)
)
BEGIN 
	SET MESSAGE = "";
	INSERT INTO `sanpham` (`MaSP`, `TenSP`, `DVT`, `NuocSX`, `Gia`) VALUES (MASP, TenSP, DVT, NuocSX, GIA);
    
    SET MESSAGE = "THEM THANH CONG";

END; //

set @MESSAGE = '0';
call spInsertSanPham('TV11', 'Tap 5000 trang', 'chuc', 'Singapore', 5000, @MESSAGE);
select @MESSAGE;

-- d1: 2023-10-20 -> year(d1) . '-' . month(d1)
-- dung concat:  2023-10

delimiter //
create procedure spLayThongTinHoaDon(
	IN P_TEN_NHANVIEN VARCHAR(255),
    IN P_NGAY_LAP_HOA_DON DATE
)
BEGIN
	SELECT *
	FROM nhanvien NV JOIN hoadon HD ON NV.MaNV = HD.MaNV
	WHERE NV.HoTen LIKE P_TEN_NHANVIEN AND HD.NgayMuaHang like concat(year(P_NGAY_LAP_HOA_DON), '-', month(P_NGAY_LAP_HOA_DON), '%');
END; //


CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `php_c0623`@`%` 
    SQL SECURITY DEFINER
VIEW `vHoaDon` AS
    SELECT 
        `hd`.`SoHoaDon` AS `SoHoaDon`,
        `hd`.`NgayMuaHang` AS `NgayMuaHang`,
        `hd`.`TriGia` AS `TriGia`
    FROM
        `hoadon` `hd`