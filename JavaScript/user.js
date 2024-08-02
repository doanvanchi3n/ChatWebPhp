const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button");
// toggle ở đây là giúp thêm hoặc loại bỏ chức năng từ lớp css,
// có thì thêm không có thì bỏ
searchBtn.onclick =()=> {
    searchBar.classList.toggle("active"); // hiển thị thanh input 
    searchBar.focus(); // đưa con trỏ chuột trực tiếp vào input 
    searchBtn.classList.toggle("active");// thay đổi back logo_search

}