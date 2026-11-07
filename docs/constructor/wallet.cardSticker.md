# wallet.cardSticker

**Layer** : 233

```tl
wallet.cardSticker#f3010cba coordinates:MediaAreaCoordinates nft:wallet.NftItem = wallet.CardSticker;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | NOTHING |
| <mark>nft</mark> | [`wallet.NftItem`](type/wallet.NftItem) | NOTHING |

---

## Type

[wallet.CardSticker](type/wallet.CardSticker)

---

## Example

```php
$walletCardSticker = $client->wallet->cardSticker(
	coordinates : $client->mediaAreaCoordinates(
		x : -1758648.322265625,
		y : -1034188.671875,
		w : -782093.9091796875,
		h : -1934923.2197265625,
		rotation : 1678403.1953125,
		radius : -377095.60546875,
	),
	nft : $client->wallet->nftItem(
		collection_address : 'KTdQLj1YRoeHXZiu',
		address : 'vrmpd8w4ePLgWtU7',
		owner_address : 'SUay63RDCzkdb2rV',
		index : 'Xuq8Zi5ApGjb2HCo',
		name : 'wqtVFKHhnym1IDb0',
		description : 'sLJAYuyzGDfmNtKp',
		image : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -8087930071721170556,
			size : 72,
			mime_type : 'ePy3QrxA1EJg9RVz',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 96,
					h : 52,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'nyTm5ZxH63OdNqPi',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1082934.3310546875,
					w : 90,
					h : 39,
					preload_prefix_size : 15,
					video_start_ts : 1241760.283203125,
					video_codec : 'rQCFuVlIOD1doY0e',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 5,
					title : 'n3tvTpQosCE21guV',
					performer : 'NifYhJt3szxAnq9w',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '6yHKRicDdo1SEIak',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'e2QZUjJdvIOFlT0m',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		image_small : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -4779612434321630767,
			size : 33,
			mime_type : 'cBsQF3X04HAlimhM',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 91,
					h : 45,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'TImqXsgVL4PeiEnH',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 69693.9423828125,
					w : 10,
					h : 68,
					preload_prefix_size : 40,
					video_start_ts : -1624335.658203125,
					video_codec : 'q1oOKSA45FuMJPlp',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 71,
					title : 'YgXZVwzkn39oE6GF',
					performer : '40jlypCkr7SY8d1A',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'wSC43UOPVveFLMT7',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'b9SFZPkTl4jDiYLu',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content_url : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -5114932049917996416,
			size : 22,
			mime_type : 'bPoNrgLhtAicOkJz',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 70,
					h : 81,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'awdrugRycVmQhJZK',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1017095.7978515625,
					w : 46,
					h : 9,
					preload_prefix_size : 18,
					video_start_ts : -1605253.3623046875,
					video_codec : 'fTiPJCQYWsXGEcL1',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 30,
					title : 'FheVvRn5NQtK8od7',
					performer : '1KuXWw7TVsCbf5nB',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'i26LzYnkOJq8HpCF',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'AD0bgyiU8koERcnr',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		lottie : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -2975029783554652712,
			size : 23,
			mime_type : 'T8x2ftaYNUg3HKmq',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 14,
					h : 61,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '83Xw2S0Jzdua6nMH',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 90205.6923828125,
					w : 23,
					h : 44,
					preload_prefix_size : 86,
					video_start_ts : -1493443.736328125,
					video_codec : 'dijwB6CW0J2kqHs8',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 72,
					title : 'NgADT6t9MZacbYVe',
					performer : 'fEtRyh62eWTQXZ3p',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '89uQYe6yNiCvBwEz',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'DiPbNTxH8QwFY0j6',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		attributes : array(
			$client->wallet->nftAttribute(
				trait_type : 'jBp26kexM0cWQo41',
				value : '7uBWRcMHZple3ok0',
			),
		),
		extra : $client->dataJSON(
			data : '4P6mjWXl1KrycwhA',
		),
		gift : $client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			require_premium : true,
			limited_per_user : true,
			peer_color_available : true,
			auction : true,
			id : 2235825950045661053,
			sticker : $client->documentEmpty(
				id : -4356788038565319780,
			),
			stars : 8328103420659611540,
			availability_remains : 32,
			availability_total : 16,
			availability_resale : 7081713506537008783,
			convert_stars : -7747201472976956731,
			first_sale_date : 6,
			last_sale_date : 23,
			upgrade_stars : 5911940336627373550,
			resell_min_stars : -4992208441665577454,
			title : 'fiqNg0Y5QXxmsuyV',
			released_by : $client->peerUser(
				user_id : 8514135740363831621,
			),
			per_user_total : 82,
			per_user_remains : 55,
			locked_until_date : 66,
			auction_slug : 'Guap8A2Icidr79VU',
			gifts_per_round : 50,
			auction_start_date : 99,
			upgrade_variants : 68,
			background : $client->starGiftBackground(
				center_color : 24,
				edge_color : 52,
				text_color : 66,
			),
		),
	),
);
```