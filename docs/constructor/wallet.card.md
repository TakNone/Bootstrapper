# wallet.card

**Layer** : 233

```tl
wallet.card#8ed043b1 flags:# stickers:flags.0?Vector<wallet.CardSticker> bg_nft_item:flags.1?wallet.NftItem address:string balance:long = wallet.Card;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **stickers** | [`flags.0?Vector<wallet.CardSticker>`](type/wallet.CardSticker) | NOTHING |
| **bg_nft_item** | [`flags.1?wallet.NftItem`](type/wallet.NftItem) | NOTHING |
| <mark>address</mark> | [`string`](type/string) | NOTHING |
| <mark>balance</mark> | [`long`](type/long) | NOTHING |

---

## Type

[wallet.Card](type/wallet.Card)

---

## Example

```php
$walletCard = $client->wallet->card(
	stickers : array(
		$client->wallet->cardSticker(
			coordinates : $client->mediaAreaCoordinates(
				x : -2009232.962890625,
				y : 930350.0654296875,
				w : -635522.431640625,
				h : -204721.0341796875,
				rotation : 1532374.9775390625,
				radius : 767283.4287109375,
			),
			nft : $client->wallet->nftItem(
				collection_address : 'NrOXqflu2vhGICaF',
				address : '1PaBnGX0YRVrJ5eo',
				owner_address : 'i3IP7JhYr2zUjQOv',
				index : 'l5SFcxqH0Y2er4ow',
				name : 'ChA0OPtru4xagBn5',
				description : 'Nkx7KfA4L2XDMOsE',
				image : $client->webDocument(
					url : 'https://docs.liveproto.dev',
					access_hash : -3019627219551084916,
					size : 24,
					mime_type : '9xiS8rp5AH3ewLWY',
					attributes : array(
						$client->documentAttributeImageSize(...),
						$client->documentAttributeAnimated(...),
						$client->documentAttributeSticker(...),
						$client->documentAttributeVideo(...),
						$client->documentAttributeAudio(...),
						$client->documentAttributeFilename(...),
						$client->documentAttributeHasStickers(...),
						$client->documentAttributeCustomEmoji(...),
					),
				),
				image_small : $client->webDocument(
					url : 'https://docs.liveproto.dev',
					access_hash : 8906991722223735096,
					size : 45,
					mime_type : 'X4xfc6g29jKJP7B1',
					attributes : array(
						$client->documentAttributeImageSize(...),
						$client->documentAttributeAnimated(...),
						$client->documentAttributeSticker(...),
						$client->documentAttributeVideo(...),
						$client->documentAttributeAudio(...),
						$client->documentAttributeFilename(...),
						$client->documentAttributeHasStickers(...),
						$client->documentAttributeCustomEmoji(...),
					),
				),
				content_url : $client->webDocument(
					url : 'https://docs.liveproto.dev',
					access_hash : -5876674401791481532,
					size : 88,
					mime_type : 'aszAiOenPjNH5Xc7',
					attributes : array(
						$client->documentAttributeImageSize(...),
						$client->documentAttributeAnimated(...),
						$client->documentAttributeSticker(...),
						$client->documentAttributeVideo(...),
						$client->documentAttributeAudio(...),
						$client->documentAttributeFilename(...),
						$client->documentAttributeHasStickers(...),
						$client->documentAttributeCustomEmoji(...),
					),
				),
				lottie : $client->webDocument(
					url : 'https://docs.liveproto.dev',
					access_hash : 2950689215283076663,
					size : 29,
					mime_type : 'V7Kb2UYRuEiJWpaN',
					attributes : array(
						$client->documentAttributeImageSize(...),
						$client->documentAttributeAnimated(...),
						$client->documentAttributeSticker(...),
						$client->documentAttributeVideo(...),
						$client->documentAttributeAudio(...),
						$client->documentAttributeFilename(...),
						$client->documentAttributeHasStickers(...),
						$client->documentAttributeCustomEmoji(...),
					),
				),
				attributes : array(
					$client->wallet->nftAttribute(
						trait_type : 'ua3gXh60qcz8dAYZ',
						value : 'GZNCrHXvMykUqwgP',
					),
				),
				extra : $client->dataJSON(
					data : 'tOrqL4Ck25csVFey',
				),
				gift : $client->starGift(
					limited : true,
					sold_out : true,
					birthday : true,
					require_premium : true,
					limited_per_user : true,
					peer_color_available : true,
					auction : true,
					id : -6793634557767886988,
					sticker : $client->documentEmpty(...),
					stars : 2626459944909826196,
					availability_remains : 3,
					availability_total : 79,
					availability_resale : -2466404448364641817,
					convert_stars : -1783388573412396609,
					first_sale_date : 26,
					last_sale_date : 27,
					upgrade_stars : 2991018608706525542,
					resell_min_stars : -5656831718427529499,
					title : 'bhKp6koAX71Hsidu',
					released_by : $client->peerUser(...),
					per_user_total : 1,
					per_user_remains : 55,
					locked_until_date : 0,
					auction_slug : 'YnBw87lEtjhdZmXC',
					gifts_per_round : 25,
					auction_start_date : 62,
					upgrade_variants : 17,
					background : $client->starGiftBackground(...),
				),
			),
		),
	),
	bg_nft_item : $client->wallet->nftItem(
		collection_address : 'dly2uSkG1OWJFpEP',
		address : 'XZUdGbt2orfnxJwl',
		owner_address : 'doTHC7fLgO6vG48Q',
		index : 'UgFEnBT9mdPoCVRb',
		name : '56t3emHiA1xZwucy',
		description : 'eJ5p421afF0hYtK7',
		image : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -1853129550858543886,
			size : 17,
			mime_type : 'uaBKp69H3GYJwgtv',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 33,
					h : 50,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'OkKDJrBFGAgMQe10',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1437654.685546875,
					w : 76,
					h : 61,
					preload_prefix_size : 77,
					video_start_ts : 1839277.3623046875,
					video_codec : 'oRyCLGvBPrmNbtxE',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 85,
					title : 'gaAdcfDG2Z80lsXR',
					performer : 'rolz4fROgL7wbyY1',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'fRI5q6mPnMvNpGlT',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'pis0GEMyBOuX8oRr',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		image_small : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -6098289166484062662,
			size : 67,
			mime_type : '2IUYDSFbvZHdzNfg',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 98,
					h : 90,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Euo4pYhdywcgl9zj',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -145941.2861328125,
					w : 38,
					h : 3,
					preload_prefix_size : 34,
					video_start_ts : -2067459.130859375,
					video_codec : 'JWspTn8U6R1ASD5B',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 59,
					title : 'i6J92rO8oKdNclAq',
					performer : '6TeqVgRNIYiafjSK',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'WB0twPN9fdxAFap1',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'kDRgeIvf9W36Oyct',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content_url : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 6038732672331902458,
			size : 40,
			mime_type : '9m6QoAJiSd8h4Ncv',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 39,
					h : 41,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'T86q2QY7CzrJPXlu',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1430182.2744140625,
					w : 18,
					h : 29,
					preload_prefix_size : 22,
					video_start_ts : -1790279.59765625,
					video_codec : 'rsaYIElvRJ7cxdXk',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 30,
					title : 'Ucx1lQYuRBw2Nkho',
					performer : 'pCBvzHuZnjx0lqiF',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'UK1OfLFlwk9nsHNi',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'sYCgRjpWXNah1itG',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		lottie : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 7955705944301950719,
			size : 97,
			mime_type : 'YFKDQrneWV6pX50G',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 98,
					h : 100,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '6qoY4dEpNSfBRrMc',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 445043.8916015625,
					w : 100,
					h : 45,
					preload_prefix_size : 71,
					video_start_ts : 1502994.2744140625,
					video_codec : 'cu58KxSTszb6hlY7',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 36,
					title : 'WrJ29mIH0LfD7eGt',
					performer : 'v4pKz3dwsO56HSuW',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'OidtZN4SRxK8GEPr',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'cL8UOQiK6pqf2rwT',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		attributes : array(
			$client->wallet->nftAttribute(
				trait_type : 'VnQBuIS1pUDmkXya',
				value : '3FJAZTbq42yPsa0f',
			),
		),
		extra : $client->dataJSON(
			data : '69AHKlTueR852Ork',
		),
		gift : $client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			require_premium : true,
			limited_per_user : true,
			peer_color_available : true,
			auction : true,
			id : -8652487277828112149,
			sticker : $client->documentEmpty(
				id : -249161421392441905,
			),
			stars : 5538287117083244246,
			availability_remains : 93,
			availability_total : 12,
			availability_resale : 3590471263655975517,
			convert_stars : -4924679943501757727,
			first_sale_date : 80,
			last_sale_date : 13,
			upgrade_stars : -1871679080936575020,
			resell_min_stars : -4679136929928361115,
			title : '0LnZtMRPvWFNKX1h',
			released_by : $client->peerUser(
				user_id : -6197254690493047205,
			),
			per_user_total : 37,
			per_user_remains : 97,
			locked_until_date : 71,
			auction_slug : 'h8gtaDLmAuyxFnUE',
			gifts_per_round : 9,
			auction_start_date : 27,
			upgrade_variants : 0,
			background : $client->starGiftBackground(
				center_color : 89,
				edge_color : 11,
				text_color : 63,
			),
		),
	),
	address : 'vqysHfVho3OtQDeR',
	balance : -616966984219652647,
);
```