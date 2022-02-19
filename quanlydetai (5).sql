-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2020 lúc 03:15 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlydetai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `TenHienThi` varchar(100) NOT NULL,
  `TenDangNhap` varchar(100) DEFAULT NULL,
  `MatKhau` varchar(200) DEFAULT NULL,
  `PhanQuyen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ID`, `TenHienThi`, `TenDangNhap`, `MatKhau`, `PhanQuyen`) VALUES
(1, 'Admin', 'admin', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 1),
(2, 'Trương việt Hòa', 'truongviethoa', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(13, 'Phạm Hoàng Nam', 'phamnam', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(19, 'Nguyễn Tâm Trí', 'tamtri', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(28, 'Đặng Minh Quí', 'minhqui', '827ccb0eea8a706c4c34a16891f84e7b', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangiaosanpham`
--

CREATE TABLE `bangiaosanpham` (
  `ID` int(11) NOT NULL,
  `MaDeTai` varchar(20) DEFAULT NULL,
  `NgayGiao` datetime DEFAULT NULL,
  `NgayDangKyKetQua` datetime DEFAULT NULL,
  `TenDonViNhan` varchar(500) DEFAULT NULL,
  `DaiDienDonVi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `ID` int(11) NOT NULL,
  `TenDanhMuc` varchar(100) DEFAULT NULL,
  `Loai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`ID`, `TenDanhMuc`, `Loai`) VALUES
(4, 'Khoa học tự nhiên', 1),
(5, 'Khoa học xã hội', 1),
(13, 'GS.TSs', 2),
(15, 'Thạc sĩ', 2),
(18, 'Khoa học nông nghiệp', 1),
(22, 'Giám đốc', 3),
(28, 'Tổng giám đốc', 3),
(40, 'Phó giám đốc', 3),
(101, 'khoa hoc xyz1234', 1),
(114, 'khoa hoc 1232345678', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachdetaiduan`
--

CREATE TABLE `danhsachdetaiduan` (
  `MaDeTaiDuAn` varchar(20) NOT NULL,
  `Loai` int(11) DEFAULT NULL,
  `LinhVuc` int(11) DEFAULT NULL,
  `TenDeTaiDuAn` varchar(1000) DEFAULT NULL,
  `ThoiGianThucHienTu` datetime DEFAULT NULL,
  `ThoiGianThucHienTuSo` int(11) DEFAULT NULL,
  `ThoiGianThucHienDen` datetime DEFAULT NULL,
  `ThoiGianThucHienDenSo` int(11) DEFAULT NULL,
  `TongKinhPhi` int(11) DEFAULT NULL,
  `TuNganSach` int(11) DEFAULT NULL,
  `NguonVonKhac` int(11) DEFAULT NULL,
  `ThuocChuongTrinh` varchar(1000) DEFAULT NULL,
  `ChuNhiemDeTai` varchar(30) DEFAULT NULL,
  `HocHamHocVi` int(11) DEFAULT NULL,
  `DienThoaiCoQuan` varchar(20) DEFAULT NULL,
  `DienThoaiNhaRieng` varchar(20) DEFAULT NULL,
  `DienThoaiDiDong` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `TenDonViChuTri` varchar(500) DEFAULT NULL,
  `DiaChiDonVi` varchar(200) DEFAULT NULL,
  `DienThoaiDonVi` varchar(20) DEFAULT NULL,
  `FaxDonvi` varchar(20) DEFAULT NULL,
  `LoaiHoSo` int(11) DEFAULT NULL,
  `NguoiQuanLy` int(11) DEFAULT NULL,
  `NgayKhoiTaoDeTai` datetime DEFAULT NULL,
  `ThoiGianBanHanhDanhMuc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhsachdetaiduan`
--

INSERT INTO `danhsachdetaiduan` (`MaDeTaiDuAn`, `Loai`, `LinhVuc`, `TenDeTaiDuAn`, `ThoiGianThucHienTu`, `ThoiGianThucHienTuSo`, `ThoiGianThucHienDen`, `ThoiGianThucHienDenSo`, `TongKinhPhi`, `TuNganSach`, `NguonVonKhac`, `ThuocChuongTrinh`, `ChuNhiemDeTai`, `HocHamHocVi`, `DienThoaiCoQuan`, `DienThoaiNhaRieng`, `DienThoaiDiDong`, `Email`, `TenDonViChuTri`, `DiaChiDonVi`, `DienThoaiDonVi`, `FaxDonvi`, `LoaiHoSo`, `NguoiQuanLy`, `NgayKhoiTaoDeTai`, `ThoiGianBanHanhDanhMuc`) VALUES
('02112020', 1, 4, 'adqwe123456789', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, 123456, 1234567, 1234567, '123456', '1234567', 13, '1234567', '123456', '123456', 't@gmail.com', 'ưedrfg', 'dfghjk', '12345', '12345', 1, 19, '2020-11-02 01:03:11', NULL),
('021120201', 1, 4, 'Quí bede', '2020-11-21 01:23:00', 1, '2020-11-22 01:23:00', 1, 123456, 1234567, 1234567, '123456', '1234567', 13, '1234567', '123456', '123456', 't@gmail.com', 'ưedrfg', 'dfghjk', '12345', '', 1, 28, '2020-11-02 01:23:11', NULL),
('021120202', 1, 4, 'Nghiên cứu phát triển tường lửa ứng dụng web đảm bảo an toàn thông tin cho các Cổng/Trang thông tin điện tử của các cơ quan Nhà nước tỉnh Bình Dương', '2020-12-25 08:55:00', 1, '2020-11-14 08:55:00', 1, 1000000, 4, 4, '4', 'edrfhj', 13, '1234567', '1234567', '1234567', 'truongviethoa19@gmail.com', 'q1', '123-AB  Hà nội', '123457', '121', 1, 13, '2020-11-02 03:09:29', NULL),
('041120201', 1, 4, 'ádfgk12345', '2020-11-17 01:51:00', 1, '2020-11-11 01:51:00', 1, 1000000, 500000, 500000, '5', 'edrfhj', 13, '1234567', '12345678', '1234567', 'dfgh@gmail.com', '1', '123-AB  Hà nội', '1234571234567', '234567', 1, 1, '2020-11-04 01:51:36', NULL),
('041120202', 1, 4, 'khoa học', '2020-11-18 01:53:00', 1, '2020-11-21 01:53:00', 1, 1000000, 500000, 500000, '1', 'edrfhj', 15, '1234567', '12345678', '1234567', 'truongviethoa19@gmail.com', 'q1', '123-AB  Hà nội', '12345712345675555555', '121', 1, 2, '2020-11-04 01:53:40', NULL),
('08112020', 2, 4, 'Chuyên đề 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, '2020-11-08 02:19:32', NULL),
('09112020', 1, 5, 'Chuyên đè 1234', '2020-11-27 00:54:00', 1, '2020-11-17 00:54:00', 1, 1000000, 500000, 5, '1', '4', 15, '1234567801234567890', '1234567', '1234567', 'truongviethoa19@gmail.com', '2wsefg', '123-AB  Hà nội', '123457', '121', 1, 1, '2020-11-09 00:54:23', NULL),
('16122020', 1, 4, 'ABCXYZ', '2020-12-12 10:15:00', 1, '2021-01-01 10:15:00', 1, 1000000, 500000, 500000, '4', 'edrfhj', 13, '4', '1234567', '1234567', 'truongviethoa30071999@gmail.com', '2wsefg', '1312', '123457', '121', 2, 13, '2020-12-16 10:12:57', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `file`
--

CREATE TABLE `file` (
  `ID` int(11) NOT NULL,
  `MaDeTaiDuAn` varchar(20) DEFAULT NULL,
  `FileThuyetMinh` varchar(100) DEFAULT NULL,
  `GhiChuFileThuyetMinh` varchar(1000) DEFAULT NULL,
  `NgayNhanThuyetMinh` datetime DEFAULT NULL,
  `FileCuaBuoc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghichu`
--

CREATE TABLE `ghichu` (
  `ID` int(11) NOT NULL,
  `MaDeTai` varchar(20) DEFAULT NULL,
  `NgayGhiChu` datetime DEFAULT NULL,
  `NoiDung` mediumtext DEFAULT NULL,
  `Lan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giahandetai`
--

CREATE TABLE `giahandetai` (
  `ID` int(11) NOT NULL,
  `MaDeTai` varchar(20) DEFAULT NULL,
  `SoCongVanGiaHan` varchar(100) DEFAULT NULL,
  `NgayGiaHan` datetime DEFAULT NULL,
  `GiaHanToiNgay` datetime DEFAULT NULL,
  `SoQuyetDinhDongYGiaHan` varchar(20) DEFAULT NULL,
  `NgayQuyetDinhDongYGiaHan` datetime DEFAULT NULL,
  `NoiDungGiaHan` mediumtext DEFAULT NULL,
  `Lan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoidongkhoahoc`
--

CREATE TABLE `hoidongkhoahoc` (
  `ID` int(11) NOT NULL,
  `HoTen` varchar(30) DEFAULT NULL,
  `GioiTinh` int(11) DEFAULT NULL,
  `HocHamHocVi` int(11) DEFAULT NULL,
  `ChucVu` int(11) DEFAULT NULL,
  `LinhVuc` int(11) DEFAULT NULL,
  `NoiCongTac` varchar(200) DEFAULT NULL,
  `DiaChi` varchar(200) DEFAULT NULL,
  `DienThoai` varchar(15) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoidongkhoahoc`
--

INSERT INTO `hoidongkhoahoc` (`ID`, `HoTen`, `GioiTinh`, `HocHamHocVi`, `ChucVu`, `LinhVuc`, `NoiCongTac`, `DiaChi`, `DienThoai`, `Email`) VALUES
(1, 'Nguyễn Văn A', 1, 13, 22, 4, 'Hà Nội', '123-AB  Hà nội', '123467890', 'truongviethoa19@gmail.com'),
(2, 'Lê Thị B', 2, 15, 22, 5, 'Hà Nội', '123-AB  Hà nội', '123456789', 'truongviethoa190999@gmail.com'),
(3, 'Lê Thị c', 2, 13, 22, 4, 'Hà Nội', '123-AB  Hà nội', '0122324567', 'truongviethoa19@gmail.com'),
(4, 'Nguyễn Văn D', 1, 13, 22, 4, 'Hà Nội', '123-AB  Hà nội', '0122324567', 'truongviethoa190999@gmail.com'),
(7, 'chu văn A', 1, 15, 28, 5, 'qưerty', 'qưert', '12345678', '123456@g');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hophoidong`
--

CREATE TABLE `hophoidong` (
  `MaDeTai` varchar(20) NOT NULL,
  `NgayHopHoiDong` datetime DEFAULT NULL,
  `KetQua` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hophoidong`
--

INSERT INTO `hophoidong` (`MaDeTai`, `NgayHopHoiDong`, `KetQua`) VALUES
('02112020', '2020-10-15 01:14:00', 1),
('021120201', '2020-11-07 01:24:00', 2),
('021120202', '2020-11-13 08:56:00', 1),
('041120201', '2020-11-18 01:52:00', 1),
('041120202', '2020-11-25 01:54:00', 1),
('09112020', '2020-11-19 00:55:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hophoidongnghiemthu`
--

CREATE TABLE `hophoidongnghiemthu` (
  `MaDeTai` varchar(20) NOT NULL,
  `NgayHopHoiDong` datetime DEFAULT NULL,
  `ThoiGianNhanBCTKNT` datetime DEFAULT NULL,
  `TongDiem` varchar(10) DEFAULT NULL,
  `XepLoai` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoptochuyengia`
--

CREATE TABLE `hoptochuyengia` (
  `MaDeTai` varchar(20) NOT NULL,
  `NgayHop` datetime DEFAULT NULL,
  `NgayNhanBCTKTCG` datetime DEFAULT NULL,
  `NoiDung` varchar(2000) DEFAULT NULL,
  `KetQua` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kiemtratiendo`
--

CREATE TABLE `kiemtratiendo` (
  `ID` int(11) NOT NULL,
  `MaDeTai` varchar(20) DEFAULT NULL,
  `GiaiDoan` int(11) DEFAULT NULL,
  `SoBienBanKiemTra` varchar(20) DEFAULT NULL,
  `NgayKiemTra` datetime DEFAULT NULL,
  `NoiDungKiemTra` varchar(1000) DEFAULT NULL,
  `KetQuaKiemTra` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kiemtratiendokinhphi`
--

CREATE TABLE `kiemtratiendokinhphi` (
  `ID` int(11) NOT NULL,
  `MaDeTai` varchar(20) DEFAULT NULL,
  `GiaiDoan` int(11) DEFAULT NULL,
  `SoBienBanQuyetToanKinhPhi` varchar(20) DEFAULT NULL,
  `NgayQuyetToan` datetime DEFAULT NULL,
  `NoiDungQuyetToan` varchar(1000) DEFAULT NULL,
  `KinhPhiQuyetToan` int(11) DEFAULT NULL,
  `KinhPhiThucChuyen` int(11) DEFAULT NULL,
  `NgayChuyenKinhPhi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pheduyetdetai`
--

CREATE TABLE `pheduyetdetai` (
  `MaDeTai` varchar(20) NOT NULL,
  `SoQuyetDinh` varchar(10) DEFAULT NULL,
  `NgayQD` datetime DEFAULT NULL,
  `SoToTrinh` varchar(10) DEFAULT NULL,
  `NgayTrinh` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `pheduyetdetai`
--

INSERT INTO `pheduyetdetai` (`MaDeTai`, `SoQuyetDinh`, `NgayQD`, `SoToTrinh`, `NgayTrinh`) VALUES
('02112020', '12', '2020-11-08 01:55:00', '21', '2020-12-24 01:55:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `RoleName` varchar(100) NOT NULL,
  `Description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`ID`, `RoleName`, `Description`) VALUES
(1, 'Admin', 'Quản trị hệ thống'),
(2, 'User', 'Quản lý dự án');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thamdinhkinhphi`
--

CREATE TABLE `thamdinhkinhphi` (
  `MaDeTai` varchar(20) NOT NULL,
  `NgayThamDinh` date DEFAULT NULL,
  `SoQuyetDinh` varchar(100) DEFAULT NULL,
  `NgayQuyetDinh` date DEFAULT NULL,
  `TongKinhPhiDuocDuyet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thamdinhkinhphi`
--

INSERT INTO `thamdinhkinhphi` (`MaDeTai`, `NgayThamDinh`, `SoQuyetDinh`, `NgayQuyetDinh`, `TongKinhPhiDuocDuyet`) VALUES
('02112020', '2020-11-13', '1234', '2020-11-28', 123456),
('021120202', '2020-11-13', '111', '2020-11-26', 121),
('041120202', '2020-11-20', NULL, '2020-11-27', 134567),
('09112020', '2020-11-20', '12345', '2020-11-28', 1234789);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhlaphoidong`
--

CREATE TABLE `thanhlaphoidong` (
  `MaDeTaiDuAn` varchar(20) NOT NULL,
  `DanhSachHoiDong` varchar(200) DEFAULT NULL,
  `SoQuyetDinh` varchar(100) DEFAULT NULL,
  `NgayQuyetDinh` datetime DEFAULT NULL,
  `QuyetDinhCua` int(11) DEFAULT NULL,
  `SoQuyetDinhThanhLap` varchar(20) DEFAULT NULL,
  `NgayQuyetDinhThanhLap` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhlaphoidong`
--

INSERT INTO `thanhlaphoidong` (`MaDeTaiDuAn`, `DanhSachHoiDong`, `SoQuyetDinh`, `NgayQuyetDinh`, `QuyetDinhCua`, `SoQuyetDinhThanhLap`, `NgayQuyetDinhThanhLap`) VALUES
('02112020', 'chutich2,phochutich1,phanbien,uyvien,thuky', '12', '2020-11-02 01:04:00', NULL, '21', '2020-11-02 01:04:00'),
('021120201', 'chutich4,phochutich,phanbien,uyvien,thuky', '12', '2020-11-05 01:24:00', NULL, '21', '2020-11-28 01:24:00'),
('021120202', 'chutich1,phochutich1,phanbien,uyvien,thuky', '12345', '2020-11-25 08:55:00', NULL, '123456', '2020-11-19 08:55:00'),
('041120201', 'chutich1,phochutich,phanbien,uyvien,thuky', '12345', '2020-11-27 01:52:00', NULL, '123456', '2020-11-28 01:52:00'),
('041120202', 'chutich3,phochutich,phanbien,uyvien,thuky', '12345', '2020-11-27 06:54:00', NULL, '123456', '2020-11-25 01:54:00'),
('09112020', 'chutich1,phochutich,phanbien,uyvien,thuky', '12345', '2020-11-26 00:55:00', NULL, '123456', '2020-11-07 00:55:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhlaphoidongnghiemthu`
--

CREATE TABLE `thanhlaphoidongnghiemthu` (
  `MaDeTaiDuAn` varchar(20) NOT NULL,
  `DanhSachHoiDong` varchar(200) DEFAULT NULL,
  `SoQuyetDinh` varchar(100) DEFAULT NULL,
  `NgayQuyetDinh` datetime DEFAULT NULL,
  `QuyetDinhCua` int(11) DEFAULT NULL,
  `SoQuyetDinhThanhLap` varchar(20) DEFAULT NULL,
  `NgayQuyetDinhThanhLap` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theodoihopdong`
--

CREATE TABLE `theodoihopdong` (
  `MaDeTai` varchar(20) NOT NULL,
  `SoHopDong` varchar(20) DEFAULT NULL,
  `NgayHopDong` datetime DEFAULT NULL,
  `NoiDung` varchar(1000) DEFAULT NULL,
  `ThucHienTu` datetime DEFAULT NULL,
  `ThucHienDen` datetime DEFAULT NULL,
  `GiaiDoanThucHien` varchar(2000) DEFAULT NULL,
  `PhuLucHopDong` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userroles`
--

CREATE TABLE `userroles` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `RolesID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `bangiaosanpham`
--
ALTER TABLE `bangiaosanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaDeTai` (`MaDeTai`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `danhsachdetaiduan`
--
ALTER TABLE `danhsachdetaiduan`
  ADD PRIMARY KEY (`MaDeTaiDuAn`),
  ADD KEY `Loai` (`Loai`),
  ADD KEY `LinhVuc` (`LinhVuc`),
  ADD KEY `NguoiQuanLy` (`NguoiQuanLy`);

--
-- Chỉ mục cho bảng `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaDeTaiDuAn` (`MaDeTaiDuAn`);

--
-- Chỉ mục cho bảng `ghichu`
--
ALTER TABLE `ghichu`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaDeTai` (`MaDeTai`);

--
-- Chỉ mục cho bảng `giahandetai`
--
ALTER TABLE `giahandetai`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaDeTai` (`MaDeTai`);

--
-- Chỉ mục cho bảng `hoidongkhoahoc`
--
ALTER TABLE `hoidongkhoahoc`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ChucVu` (`ChucVu`),
  ADD KEY `HocHamHocVi` (`HocHamHocVi`),
  ADD KEY `LinhVuc` (`LinhVuc`);

--
-- Chỉ mục cho bảng `hophoidong`
--
ALTER TABLE `hophoidong`
  ADD PRIMARY KEY (`MaDeTai`);

--
-- Chỉ mục cho bảng `hophoidongnghiemthu`
--
ALTER TABLE `hophoidongnghiemthu`
  ADD PRIMARY KEY (`MaDeTai`);

--
-- Chỉ mục cho bảng `hoptochuyengia`
--
ALTER TABLE `hoptochuyengia`
  ADD PRIMARY KEY (`MaDeTai`);

--
-- Chỉ mục cho bảng `kiemtratiendo`
--
ALTER TABLE `kiemtratiendo`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `kiemtratiendokinhphi`
--
ALTER TABLE `kiemtratiendokinhphi`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaDeTai` (`MaDeTai`);

--
-- Chỉ mục cho bảng `pheduyetdetai`
--
ALTER TABLE `pheduyetdetai`
  ADD PRIMARY KEY (`MaDeTai`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `thamdinhkinhphi`
--
ALTER TABLE `thamdinhkinhphi`
  ADD PRIMARY KEY (`MaDeTai`);

--
-- Chỉ mục cho bảng `thanhlaphoidong`
--
ALTER TABLE `thanhlaphoidong`
  ADD PRIMARY KEY (`MaDeTaiDuAn`);

--
-- Chỉ mục cho bảng `thanhlaphoidongnghiemthu`
--
ALTER TABLE `thanhlaphoidongnghiemthu`
  ADD PRIMARY KEY (`MaDeTaiDuAn`);

--
-- Chỉ mục cho bảng `theodoihopdong`
--
ALTER TABLE `theodoihopdong`
  ADD PRIMARY KEY (`MaDeTai`);

--
-- Chỉ mục cho bảng `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RolesID` (`RolesID`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `bangiaosanpham`
--
ALTER TABLE `bangiaosanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT cho bảng `file`
--
ALTER TABLE `file`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ghichu`
--
ALTER TABLE `ghichu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giahandetai`
--
ALTER TABLE `giahandetai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoidongkhoahoc`
--
ALTER TABLE `hoidongkhoahoc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `kiemtratiendo`
--
ALTER TABLE `kiemtratiendo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `kiemtratiendokinhphi`
--
ALTER TABLE `kiemtratiendokinhphi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `userroles`
--
ALTER TABLE `userroles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bangiaosanpham`
--
ALTER TABLE `bangiaosanpham`
  ADD CONSTRAINT `bangiaosanpham_ibfk_1` FOREIGN KEY (`MaDeTai`) REFERENCES `danhsachdetaiduan` (`MaDeTaiDuAn`);

--
-- Các ràng buộc cho bảng `danhsachdetaiduan`
--
ALTER TABLE `danhsachdetaiduan`
  ADD CONSTRAINT `danhsachdetaiduan_ibfk_3` FOREIGN KEY (`LinhVuc`) REFERENCES `danhmuc` (`ID`),
  ADD CONSTRAINT `danhsachdetaiduan_ibfk_4` FOREIGN KEY (`NguoiQuanLy`) REFERENCES `admin` (`ID`);

--
-- Các ràng buộc cho bảng `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`MaDeTaiDuAn`) REFERENCES `danhsachdetaiduan` (`MaDeTaiDuAn`);

--
-- Các ràng buộc cho bảng `ghichu`
--
ALTER TABLE `ghichu`
  ADD CONSTRAINT `ghichu_ibfk_1` FOREIGN KEY (`MaDeTai`) REFERENCES `danhsachdetaiduan` (`MaDeTaiDuAn`);

--
-- Các ràng buộc cho bảng `giahandetai`
--
ALTER TABLE `giahandetai`
  ADD CONSTRAINT `giahandetai_ibfk_1` FOREIGN KEY (`MaDeTai`) REFERENCES `danhsachdetaiduan` (`MaDeTaiDuAn`);

--
-- Các ràng buộc cho bảng `hoidongkhoahoc`
--
ALTER TABLE `hoidongkhoahoc`
  ADD CONSTRAINT `hoidongkhoahoc_ibfk_1` FOREIGN KEY (`ChucVu`) REFERENCES `danhmuc` (`ID`),
  ADD CONSTRAINT `hoidongkhoahoc_ibfk_2` FOREIGN KEY (`HocHamHocVi`) REFERENCES `danhmuc` (`ID`),
  ADD CONSTRAINT `hoidongkhoahoc_ibfk_3` FOREIGN KEY (`LinhVuc`) REFERENCES `danhmuc` (`ID`);

--
-- Các ràng buộc cho bảng `hophoidong`
--
ALTER TABLE `hophoidong`
  ADD CONSTRAINT `hophoidong_ibfk_1` FOREIGN KEY (`MaDeTai`) REFERENCES `danhsachdetaiduan` (`MaDeTaiDuAn`);

--
-- Các ràng buộc cho bảng `hophoidongnghiemthu`
--
ALTER TABLE `hophoidongnghiemthu`
  ADD CONSTRAINT `hophoidongnghiemthu_ibfk_1` FOREIGN KEY (`MaDeTai`) REFERENCES `danhsachdetaiduan` (`MaDeTaiDuAn`);

--
-- Các ràng buộc cho bảng `hoptochuyengia`
--
ALTER TABLE `hoptochuyengia`
  ADD CONSTRAINT `hoptochuyengia_ibfk_1` FOREIGN KEY (`MaDeTai`) REFERENCES `danhsachdetaiduan` (`MaDeTaiDuAn`);

--
-- Các ràng buộc cho bảng `kiemtratiendokinhphi`
--
ALTER TABLE `kiemtratiendokinhphi`
  ADD CONSTRAINT `kiemtratiendokinhphi_ibfk_1` FOREIGN KEY (`MaDeTai`) REFERENCES `danhsachdetaiduan` (`MaDeTaiDuAn`);

--
-- Các ràng buộc cho bảng `pheduyetdetai`
--
ALTER TABLE `pheduyetdetai`
  ADD CONSTRAINT `pheduyetdetai_ibfk_1` FOREIGN KEY (`MaDeTai`) REFERENCES `danhsachdetaiduan` (`MaDeTaiDuAn`);

--
-- Các ràng buộc cho bảng `thamdinhkinhphi`
--
ALTER TABLE `thamdinhkinhphi`
  ADD CONSTRAINT `thamdinhkinhphi_ibfk_1` FOREIGN KEY (`MaDeTai`) REFERENCES `danhsachdetaiduan` (`MaDeTaiDuAn`);

--
-- Các ràng buộc cho bảng `thanhlaphoidongnghiemthu`
--
ALTER TABLE `thanhlaphoidongnghiemthu`
  ADD CONSTRAINT `thanhlaphoidongnghiemthu_ibfk_1` FOREIGN KEY (`MaDeTaiDuAn`) REFERENCES `danhsachdetaiduan` (`MaDeTaiDuAn`);

--
-- Các ràng buộc cho bảng `theodoihopdong`
--
ALTER TABLE `theodoihopdong`
  ADD CONSTRAINT `theodoihopdong_ibfk_1` FOREIGN KEY (`MaDeTai`) REFERENCES `danhsachdetaiduan` (`MaDeTaiDuAn`);

--
-- Các ràng buộc cho bảng `userroles`
--
ALTER TABLE `userroles`
  ADD CONSTRAINT `userroles_ibfk_1` FOREIGN KEY (`RolesID`) REFERENCES `roles` (`ID`),
  ADD CONSTRAINT `userroles_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `admin` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
