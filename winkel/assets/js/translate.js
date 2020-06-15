var dict = {
	"home": {
		"en": "Home",
		"id": "Beranda"
	},
	"shop": {
		"en": "Catalog",
		"id": "Katalog"
	},
	"welcome": {
		"en": "Welcome To",
		"id": "Selamat Datang"
	},
	"clothes_shop": {
		"en": "Clothes Shop",
		"id": "Toko Baju"
	},
	"new_arrival": {
		"en": "New Arrival",
		"id": "Produk Terbaru"
	},
	"all": {
		"en": "All",
		"id": "Semua"
	},
	"woman": {
		"en": "Woman",
		"id": "Wanita"
	},
	"man": {
		"en": "Man",
		"id": "Pria"
	},
	"kids": {
		"en": "Kids",
		"id": "Anak-anak"
	},
	"add_to_cart": {
		"en": "Add to cart",
		"id": "Tambah ke keranjang"
	},
	"category": {
		"en": "Categories",
		"id": "Kategori"
	},
	"woman_wear": {
		"en": "Woman Wear",
		"id": "Pakaian Wanita"
	},
	"man_wear": {
		"en": "Man Wear",
		"id": "Pakaian Pria"
	},
	"childrens": {
		"en": "Childrens",
		"id": "Pakaian Anak-anak"
	},
	"filter_by_size": {
		"en": "Filter by size",
		"id": "Filter menurut ukuran"
	},
	"quantity": {
		"en": "Quantity",
		"id": "Jumlah"
	},
	"select_size": {
		"en": "Select Size",
		"id": "Pilih Ukuran"
	},
	"list_product_in_cart": {
		"en": "List Product in Cart",
		"id": "Daftar Barang di Keranjang"
	},
	"checkout": {
		"en": "Checkout",
		"id": "Pembayaran"
	},
	"about": {
		"en": "About",
		"id": "Tentang"
	},
	"contact": {
		"en": "Contact",
		"id": "Kontak"
	},
	"idr": {
		"en": "IDR",
		"id": "Rp. "
	},
	"privacy_policy": {
		"en": "Privacy Policy",
		"id": "Kebijakan Privasi"
	}
};

var lang = $.cookie('lang') == undefined ? 'id' : $.cookie('lang');
var translator = $('body').translate({lang: lang, t: dict});

function changeLang(lang) {
	if (lang == undefined) {
		return;
	}
	$.cookie('lang', lang, {expires: 30});
	translator.lang(lang);
}
