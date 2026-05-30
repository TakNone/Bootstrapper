# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 225

```tl
messages.stickerSet#6e153f16 set:StickerSet packs:Vector<StickerPack> keywords:Vector<StickerKeyword> documents:Vector<Document> = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | The stickerset |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emoji info for stickers |
| <mark>keywords</mark> | [`Vector<StickerKeyword>`](type/StickerKeyword) | Keywords for some or every sticker in the stickerset |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Stickers in stickerset |

---

## Type

[messages.StickerSet](type/messages.StickerSet)

---

## Example

```php
$messagesStickerSet = $client->messages->stickerSet(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 35,
		id : 6987392314115991235,
		access_hash : -6983147278822393475,
		title : 'vLRXji6aODNgPQwc',
		short_name : 'etATE7ux0VowQaH8',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'Hlf6YvkJTZXVFx1t',
			),
			$client->photoSize(
				type : 'TBmHvRf4OyDt85UE',
				w : 16,
				h : 37,
				size : 23,
			),
			$client->photoCachedSize(
				type : 'Lm9Pa82S0uOBdZvX',
				w : 96,
				h : 38,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'cjnmCYDUvrqXiJta',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : '3SvojCiZVJQyqlYt',
				w : 70,
				h : 35,
				sizes : array(64),
			),
			$client->photoPathSize(
				type : 'ZzweQ3GP1VDc5dB2',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 10,
		thumb_version : 32,
		thumb_document_id : 8864394235391199217,
		count : 94,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'zlWsiD81dCZwtLxr',
			documents : array(-5440570898627141677),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 1627991478056454966,
			keyword : array('Cc0aHz8vYxupJ6sr'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 5321472030510130958,
		),
		$client->document(
			id : 8106776424776065503,
			access_hash : -2896301412647641851,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 91,
			mime_type : 'FoduniBEwe7Sxrsa',
			size : -1562844791673636398,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'CkiNFlSzcYIMpvhj',
				),
				$client->photoSize(
					type : '6wXP90ubd27qAlUG',
					w : 1,
					h : 76,
					size : 56,
				),
				$client->photoCachedSize(
					type : '2oKgHp5fzTCeAF6q',
					w : 61,
					h : 43,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'n5q2XhC8HKSLMg6v',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'TbZDfh4NwBVoOFmE',
					w : 18,
					h : 46,
					sizes : array(84),
				),
				$client->photoPathSize(
					type : 'CYGBhFcUX3Po2RS8',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'VxfMDCJRmvcb74tT',
					w : 6,
					h : 61,
					size : 90,
					video_start_ts : 1217585.09765625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2397600982401304517,
					background_colors : array(45),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 5149958402011710639,
					background_colors : array(55),
				),
			),
			dc_id : 36,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 66,
					h : 71,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'CgjzLAHsXmkpDtZY',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 50,
						x : -1619270.802734375,
						y : 1742992.8740234375,
						zoom : 814472.896484375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1770229.494140625,
					w : 57,
					h : 95,
					preload_prefix_size : 95,
					video_start_ts : 1468253.12109375,
					video_codec : 'OQyp7XZFBv6dcwNH',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 28,
					title : 't8VMwGqJdCl7BEXn',
					performer : 'W8nyec7VkX5UaRE2',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'y0HBAwYiCEz8Neb1',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Fck51E0mQ8tXdZJj',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```