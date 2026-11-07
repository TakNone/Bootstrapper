# walletTransaction

**Layer** : 233

```tl
walletTransaction#952dc143 flags:# incoming:flags.0?true gasless:flags.1?true failed:flags.2?true key_change:flags.5?true comment_encrypted:flags.6?true id:string amount:long fee:long date:int peer:WalletTransactionPeer comment:flags.3?string tx_hash:flags.4?string nft:flags.7?wallet.NftItem = WalletTransaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **incoming** | [`flags.0?true`](type/true) | NOTHING |
| **gasless** | [`flags.1?true`](type/true) | NOTHING |
| **failed** | [`flags.2?true`](type/true) | NOTHING |
| **key_change** | [`flags.5?true`](type/true) | NOTHING |
| **comment_encrypted** | [`flags.6?true`](type/true) | NOTHING |
| <mark>id</mark> | [`string`](type/string) | NOTHING |
| <mark>amount</mark> | [`long`](type/long) | NOTHING |
| <mark>fee</mark> | [`long`](type/long) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |
| <mark>peer</mark> | [`WalletTransactionPeer`](type/WalletTransactionPeer) | NOTHING |
| **comment** | [`flags.3?string`](type/string) | NOTHING |
| **tx_hash** | [`flags.4?string`](type/string) | NOTHING |
| **nft** | [`flags.7?wallet.NftItem`](type/wallet.NftItem) | NOTHING |

---

## Type

[WalletTransaction](type/WalletTransaction)

---

## Example

```php
$walletTransaction = $client->walletTransaction(
	incoming : true,
	gasless : true,
	failed : true,
	key_change : true,
	comment_encrypted : true,
	id : 'AXHpmNuzwsMGLrJR',
	amount : 4320345135223729851,
	fee : -1463361587902798120,
	date : 73,
	peer : $client->walletTransactionPeerUser(
		user_id : -7145429994136594207,
		address : 'uVqlPUm5h0tkYnAZ',
		domain : 'DJhxo0ncb1CrsvE9',
	),
	comment : 'QPemJGaEXlr2pjLS',
	tx_hash : 'JpSBsDOyzrZl3CWg',
	nft : $client->wallet->nftItem(
		collection_address : 'N0EpvFTL7PbwlAzW',
		address : 'hkx3zpgBq4J8ULRu',
		owner_address : 'yiV5NJYsvn9bTxr6',
		index : 'G3lTtYrukOnJ1dq6',
		name : '6cGvBm3MiYHwlRA9',
		description : 'ijF6x10zolYfWn9B',
		image : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 3799678416272647738,
			size : 100,
			mime_type : 'kaPuN8etfI7UK2Wy',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 19,
					h : 18,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'HXpQhUqEd4cWOtuk',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -632609.01953125,
					w : 58,
					h : 25,
					preload_prefix_size : 53,
					video_start_ts : -1165234.103515625,
					video_codec : '2rWtdoQBvZJCfKFU',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 98,
					title : 'u8xgL6MIy7Xo4UHP',
					performer : 'ZK4Mb9DAGy5OpTPr',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Xx3zIRg2n710Ki8v',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'D7ba56kIgJUXC0Mf',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		image_small : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 1578475765438407309,
			size : 75,
			mime_type : '2wI1bWeypran7HNC',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 36,
					h : 98,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'v4FcbHTdM0R7tgax',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 492083.02734375,
					w : 45,
					h : 72,
					preload_prefix_size : 88,
					video_start_ts : -1544444.6328125,
					video_codec : 'WHiJYmfXaZOUx1qp',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 5,
					title : 'k5wtiEGheQ9sOZLo',
					performer : 'yoOTKSl35hi7Lwnu',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'iwg4up6IK8SVC0tx',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'v03T5jzwyd8EXMZA',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content_url : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -6565828303276400326,
			size : 48,
			mime_type : '4qXvZrFkRmaHtzSB',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 1,
					h : 64,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Fxdcn83iJNkpXf2I',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1734636.3994140625,
					w : 1,
					h : 27,
					preload_prefix_size : 69,
					video_start_ts : -126555.2900390625,
					video_codec : 'gQkuoG9SOtRBsr4K',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 62,
					title : 'PfJMqZ5m9p0trlT6',
					performer : 'i7ZbnGWuMyrXHpLS',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'WFROYjohIX5T2KMa',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'v62ZedBmjc1MFLXu',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		lottie : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 890136676149898467,
			size : 8,
			mime_type : 'cbNn54d7jWG3Yaqw',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 70,
					h : 71,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'qbCcI0zyrMv1gjQV',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1762903.8310546875,
					w : 65,
					h : 84,
					preload_prefix_size : 56,
					video_start_ts : -796571.0888671875,
					video_codec : 'CiznFBmclUeOpKTD',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 43,
					title : 'mTrO9825WRQFZDXo',
					performer : 'BRrNlSM9ciEYwqQp',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'a6PDh5jGpgzwqTX4',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '7fFl9stUEyLAQeIu',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		attributes : array(
			$client->wallet->nftAttribute(
				trait_type : '0bmnAlZswUEgVazC',
				value : 'EdR9VuIZ3mOhpb5A',
			),
		),
		extra : $client->dataJSON(
			data : 'kmnNZH7Vr5JdR2E6',
		),
		gift : $client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			require_premium : true,
			limited_per_user : true,
			peer_color_available : true,
			auction : true,
			id : 558296981129076425,
			sticker : $client->documentEmpty(
				id : 4233233818853026722,
			),
			stars : -1455429179883522774,
			availability_remains : 75,
			availability_total : 88,
			availability_resale : -1540135518915496204,
			convert_stars : -5884650597972927229,
			first_sale_date : 74,
			last_sale_date : 82,
			upgrade_stars : -692286873518634581,
			resell_min_stars : -3844601204741026050,
			title : 'eY4Xq6pW2HuVtaGm',
			released_by : $client->peerUser(
				user_id : 5031874170067710102,
			),
			per_user_total : 7,
			per_user_remains : 51,
			locked_until_date : 12,
			auction_slug : 'VkRSHfx98POGl3jB',
			gifts_per_round : 48,
			auction_start_date : 58,
			upgrade_variants : 36,
			background : $client->starGiftBackground(
				center_color : 53,
				edge_color : 87,
				text_color : 62,
			),
		),
	),
);
```