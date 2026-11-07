# wallet.nftItem

**Layer** : 233

```tl
wallet.nftItem#173dfaf3 flags:# collection_address:flags.0?string address:string owner_address:string index:string name:flags.1?string description:flags.2?string image:flags.3?WebDocument image_small:flags.4?WebDocument content_url:flags.5?WebDocument lottie:flags.6?WebDocument attributes:flags.7?Vector<wallet.NftAttribute> extra:flags.8?DataJSON gift:flags.9?StarGift = wallet.NftItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **collection_address** | [`flags.0?string`](type/string) | NOTHING |
| <mark>address</mark> | [`string`](type/string) | NOTHING |
| <mark>owner_address</mark> | [`string`](type/string) | NOTHING |
| <mark>index</mark> | [`string`](type/string) | NOTHING |
| **name** | [`flags.1?string`](type/string) | NOTHING |
| **description** | [`flags.2?string`](type/string) | NOTHING |
| **image** | [`flags.3?WebDocument`](type/WebDocument) | NOTHING |
| **image_small** | [`flags.4?WebDocument`](type/WebDocument) | NOTHING |
| **content_url** | [`flags.5?WebDocument`](type/WebDocument) | NOTHING |
| **lottie** | [`flags.6?WebDocument`](type/WebDocument) | NOTHING |
| **attributes** | [`flags.7?Vector<wallet.NftAttribute>`](type/wallet.NftAttribute) | NOTHING |
| **extra** | [`flags.8?DataJSON`](type/DataJSON) | NOTHING |
| **gift** | [`flags.9?StarGift`](type/StarGift) | NOTHING |

---

## Type

[wallet.NftItem](type/wallet.NftItem)

---

## Example

```php
$walletNftItem = $client->wallet->nftItem(
	collection_address : 'VRz7WATsQkdI4Hon',
	address : '5a0vHo3idDELzxBh',
	owner_address : 'JskdPnmTOtRexYvy',
	index : 'zV8yG6tfYvhDBOUJ',
	name : 'Eg36RvOQJCb7ks8c',
	description : 'zIfVgESM2auotQY4',
	image : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -5242522279573602376,
		size : 8,
		mime_type : '7x3lApB6GIUHKTm4',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 32,
				h : 47,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'K3ehNvmitJfbuVsP',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 9,
					x : 14759.79296875,
					y : -193578.263671875,
					zoom : 1801497.49609375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1097305.6328125,
				w : 82,
				h : 39,
				preload_prefix_size : 12,
				video_start_ts : -1275972.5537109375,
				video_codec : 'Yu27LxJfaqQvg1PT',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 97,
				title : 'thYob2LnmvFPlyzr',
				performer : 'F8JIvgQK9tZCBh2b',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'W14Y0jc2OyRdXogp',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'YS8bzc53srh0R7dy',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	image_small : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -7861379065679741651,
		size : 36,
		mime_type : 'XIpF1zPvc8qDsmJx',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 95,
				h : 57,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '69QWA17kbNehmgp0',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 26,
					x : -205482.5234375,
					y : -129969.283203125,
					zoom : 611296.705078125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 288035.7470703125,
				w : 70,
				h : 96,
				preload_prefix_size : 12,
				video_start_ts : -100159.2001953125,
				video_codec : 'ubasCBTJ1cj86w5f',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 58,
				title : 'WC9fZr5k6nozQG8g',
				performer : 'BGflbxHKsPOAIwUS',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'QsSJ89EyqlnB2gMc',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'zCr9doBkPLHDUl1V',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content_url : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -3684891838520591869,
		size : 14,
		mime_type : 'mkZfOJBAndtxLYMG',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 60,
				h : 22,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'uxVrLpHBe5ESXfdG',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 40,
					x : 592185.8193359375,
					y : 571298.1865234375,
					zoom : 1652671.3994140625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -148599.66015625,
				w : 34,
				h : 90,
				preload_prefix_size : 32,
				video_start_ts : 198083.03515625,
				video_codec : 'xYImN7Uab9gh5qA4',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 25,
				title : '9rRNHAoaO0mIjB4c',
				performer : 'V0D5O14GQ9yxwAbk',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'r2eUis8WVAy1RKLu',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'CMeS4Zhz1PvY2xaR',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	lottie : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 4196685890499037530,
		size : 60,
		mime_type : 'XrU4Iw0xavNC5JmM',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 7,
				h : 23,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'M9aWG6j7vyLrF1UR',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 71,
					x : -1886820.29296875,
					y : 1759618.970703125,
					zoom : 135798.4716796875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 143257.6708984375,
				w : 47,
				h : 80,
				preload_prefix_size : 18,
				video_start_ts : 1492863.16015625,
				video_codec : 'md4wvt2QjTSCfzAK',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 36,
				title : 'wXmucyFhAONYLtS7',
				performer : '1SVx6u54TLvejkMW',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'MwBSUVj3lCFH2QA4',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'TeVmdC12xngUXILO',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	attributes : array(
		$client->wallet->nftAttribute(
			trait_type : 'QMl27kxiJyPsf1GU',
			value : 'zT1FNrvOY6hEUcy8',
		),
	),
	extra : $client->dataJSON(
		data : 'uGsTrhd48yR6cota',
	),
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 4357184326975684056,
		sticker : $client->documentEmpty(
			id : -7183333935737090381,
		),
		stars : -2864208298187973447,
		availability_remains : 12,
		availability_total : 29,
		availability_resale : -5116601850551998471,
		convert_stars : 139203789952315870,
		first_sale_date : 42,
		last_sale_date : 1,
		upgrade_stars : -5214556155919332202,
		resell_min_stars : 7480762652938302211,
		title : 'jyXPV2cDTm3hSq95',
		released_by : $client->peerUser(
			user_id : 5684044548304643878,
		),
		per_user_total : 30,
		per_user_remains : 15,
		locked_until_date : 8,
		auction_slug : 'A2PUXrKShzk47EGD',
		gifts_per_round : 76,
		auction_start_date : 73,
		upgrade_variants : 90,
		background : $client->starGiftBackground(
			center_color : 71,
			edge_color : 89,
			text_color : 76,
		),
	),
);
```