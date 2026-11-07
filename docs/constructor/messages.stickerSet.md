# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 229

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
		installed_date : 92,
		id : 4584263107498016059,
		access_hash : -7916041754525045788,
		title : 'XTyRM40fLFs2jp8N',
		short_name : '9XORsqigzcnSp8Zy',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'yorQiT5ejdWmZAuI',
			),
			$client->photoSize(
				type : 'JOZ0GQihDNTr4X1W',
				w : 7,
				h : 57,
				size : 3,
			),
			$client->photoCachedSize(
				type : 'X1ThCdEYIRMDBWQq',
				w : 51,
				h : 73,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'MXmLrhN2jpuKgYQ3',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'x7Q6C1OjugpcD0qd',
				w : 10,
				h : 45,
				sizes : array(2),
			),
			$client->photoPathSize(
				type : 'Ey3zlb2ThLUVWM5u',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 78,
		thumb_version : 25,
		thumb_document_id : 5402448867008224132,
		count : 85,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'mGxV5hiAns3DYvwJ',
			documents : array(4039539089284676177),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 8806876290441256341,
			keyword : array('2Osk9IyMD07PVpXm'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -7118004232561197608,
		),
		$client->document(
			id : -7852834176364111695,
			access_hash : 7144063658485337161,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 29,
			mime_type : 'wVGsNoISd2vZgb1K',
			size : -117588068363337248,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '4ciZ0L8uPFTGw7E5',
				),
				$client->photoSize(
					type : '5z0Faew8yoEmjt7S',
					w : 3,
					h : 44,
					size : 33,
				),
				$client->photoCachedSize(
					type : 'h9dwjcuYpDMH0yga',
					w : 85,
					h : 10,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'dxIbtcl3SZJui7qy',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'o02Phfa45kT7DFuC',
					w : 44,
					h : 89,
					sizes : array(49),
				),
				$client->photoPathSize(
					type : 'B7qTV8oZDb96EW2m',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '8EHfsorXnMRNKS1T',
					w : 19,
					h : 3,
					size : 72,
					video_start_ts : 560386.375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -9122657436402101605,
					background_colors : array(47),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 3873936590990016785,
					background_colors : array(78),
				),
			),
			dc_id : 55,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 9,
					h : 45,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '3rB8MbqdhpGxSnzJ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 72,
						x : -583315.2939453125,
						y : -1394963.798828125,
						zoom : -187698.482421875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 279756.4892578125,
					w : 7,
					h : 32,
					preload_prefix_size : 91,
					video_start_ts : 894252.76171875,
					video_codec : 'H17LuOQCBxNJgV5i',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 39,
					title : '3dqN6IaSxvUtMVTb',
					performer : 'AgLPVkho5ilqUXxF',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'oG1xaRrQgNmlzyHF',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '7raLNwfkZ4lCTbiO',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```