# wallet.nftItems

**Layer** : 233

```tl
wallet.nftItems#794d486f flags:# items:Vector<wallet.NftItem> next_offset:flags.0?string = wallet.NftItems;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>items</mark> | [`Vector<wallet.NftItem>`](type/wallet.NftItem) | NOTHING |
| **next_offset** | [`flags.0?string`](type/string) | NOTHING |

---

## Type

[wallet.NftItems](type/wallet.NftItems)

---

## Example

```php
$walletNftItems = $client->wallet->nftItems(
	items : array(
		$client->wallet->nftItem(
			collection_address : '0futikcLFVx4YGMo',
			address : 'j0dDSlPRstvWiBUg',
			owner_address : 'zaAfny95sMvdN6TY',
			index : 'ZtMwNsxXrVp68ORy',
			name : '03WX9RHGAF187CD4',
			description : '5BHrvxtaLXwchSuq',
			image : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -853979202068711058,
				size : 7,
				mime_type : 'IJogmsaYkviA9fqd',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 50,
						h : 90,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'Oe8j9vELRKWH07db',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 767744.7294921875,
						w : 8,
						h : 49,
						preload_prefix_size : 9,
						video_start_ts : -2057941.380859375,
						video_codec : 'Kgf7RUmPir13vCOD',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 85,
						title : 'ZuMG1aCTDdLbIf7g',
						performer : 'OJgZsuD6l8EeFjSv',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : '0qCcZw3Kt9P6a2Sf',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : '3C5DSJtu1w2EOxgi',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			image_small : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -1898955467718758870,
				size : 83,
				mime_type : 'WAqd65yaxj8VHYPb',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 18,
						h : 22,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'FLZ5KsT6u9f2tSRX',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1388436.2021484375,
						w : 27,
						h : 25,
						preload_prefix_size : 2,
						video_start_ts : 1942514.138671875,
						video_codec : '6LsZid1l3TFrbDWA',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 18,
						title : 'ZnrP9gpJBXbyQSx0',
						performer : '38tELUr7iKGgjmse',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'eKYf9nJcD7dsPwOW',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'm6S91xHQJP7srOjv',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content_url : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -6869447995156403656,
				size : 22,
				mime_type : 'N2rtPRi8esaKjhAq',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 58,
						h : 63,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '9DfHp1joGbW7gc3q',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1262863.9033203125,
						w : 18,
						h : 26,
						preload_prefix_size : 18,
						video_start_ts : -823521.244140625,
						video_codec : 'cLG6To4OJNKsnE5u',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 22,
						title : 'TgNKlGLUZIpM05OY',
						performer : 'bion3pqT2cZAVlw9',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'NdEXA9Lb7K0l4zfv',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'eq0jYFh3crSVykTn',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			lottie : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 8812187609208184606,
				size : 98,
				mime_type : 'wgi0J3UdPCIT4h2H',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 57,
						h : 65,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '052ou6iD7PCVh9yE',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1092749.6220703125,
						w : 3,
						h : 20,
						preload_prefix_size : 82,
						video_start_ts : 107653.9365234375,
						video_codec : 'ASIwseDEBRkFalVt',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 23,
						title : '1zJCEy2AHcbiUDRB',
						performer : '9ynx3bWXVQPrSp0j',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'YuIhafJ7WGeow52j',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'sWInh4V5Gl0A8dOB',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			attributes : array(
				$client->wallet->nftAttribute(
					trait_type : 'cSwWUqYdCBmfQGvp',
					value : 'T7HRYFNeUQqVPaof',
				),
			),
			extra : $client->dataJSON(
				data : 'c7OTFu2qgjA6kydU',
			),
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				require_premium : true,
				limited_per_user : true,
				peer_color_available : true,
				auction : true,
				id : -828687118110255255,
				sticker : $client->documentEmpty(
					id : 1131112061523418492,
				),
				stars : 7056500063977574236,
				availability_remains : 31,
				availability_total : 18,
				availability_resale : 1497621644228857415,
				convert_stars : -6395154119159562987,
				first_sale_date : 41,
				last_sale_date : 9,
				upgrade_stars : -4990399672701545917,
				resell_min_stars : -7064698886838090563,
				title : 'u7kfN8yzBeUtdYJ9',
				released_by : $client->peerUser(
					user_id : -4717268582709454329,
				),
				per_user_total : 35,
				per_user_remains : 62,
				locked_until_date : 63,
				auction_slug : 'p09IgWFbaimPc8ZX',
				gifts_per_round : 37,
				auction_start_date : 89,
				upgrade_variants : 64,
				background : $client->starGiftBackground(
					center_color : 85,
					edge_color : 93,
					text_color : 91,
				),
			),
		),
	),
	next_offset : 'OC7GnLYQE4UqDTp1',
);
```