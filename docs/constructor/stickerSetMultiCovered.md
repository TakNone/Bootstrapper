# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 227

```tl
stickerSetMultiCovered#3407e51b set:StickerSet covers:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>covers</mark> | [`Vector<Document>`](type/Document) | Preview stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetMultiCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 100,
		id : 806902955672049539,
		access_hash : -8888586897974142538,
		title : 'HoIcMBWLtkypV5FO',
		short_name : 'Y1SaVT0CLj6hmFpt',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'mFxMByj0RiqKUtOk',
			),
			$client->photoSize(
				type : 'bTc4Y8A3IFP02WHL',
				w : 24,
				h : 57,
				size : 2,
			),
			$client->photoCachedSize(
				type : 'gK0pCfeFmBbJHc4j',
				w : 8,
				h : 72,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '0ymPSso94O7WexD6',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'M04yX5qLSZIF2hcp',
				w : 50,
				h : 63,
				sizes : array(77),
			),
			$client->photoPathSize(
				type : 'd5AyafiK1etuOckE',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 56,
		thumb_version : 11,
		thumb_document_id : 1251440017167094259,
		count : 57,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : 5271107810524017860,
		),
		$client->document(
			id : -333469176458385548,
			access_hash : 648109847462187592,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 0,
			mime_type : '2LhzC7bl48sSfx5T',
			size : 6147041145223577982,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '1CNuHmPGF4y507UX',
				),
				$client->photoSize(
					type : '27le1QBSj6V30dmc',
					w : 75,
					h : 36,
					size : 50,
				),
				$client->photoCachedSize(
					type : 'U7oTZRdEaViOYheH',
					w : 76,
					h : 15,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'kHrf0cXeAD38UGvw',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '1GkZudApztYHEmnl',
					w : 15,
					h : 25,
					sizes : array(72),
				),
				$client->photoPathSize(
					type : 'qDRkZVvWhUNJxf0e',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Duos3tznYl2WZkpf',
					w : 0,
					h : 52,
					size : 27,
					video_start_ts : 1505480.3505859375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2587130812515641585,
					background_colors : array(99),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -4876279297158404024,
					background_colors : array(35),
				),
			),
			dc_id : 21,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 20,
					h : 88,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'V0RQl2GKZpmPYUDN',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 66,
						x : 1891983.9521484375,
						y : -833028.736328125,
						zoom : 770426.591796875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1247647.5927734375,
					w : 41,
					h : 37,
					preload_prefix_size : 85,
					video_start_ts : -275536.40625,
					video_codec : 'JCp3eszUWgDShvTu',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 62,
					title : 'lCcGuKYhSo2Z054i',
					performer : 'dtMneGO2oEPpvubJ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 's1flj0bC6cUEt3ue',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'PKGnkjdRf1sZ3e4O',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```