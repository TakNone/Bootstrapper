# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 225

```tl
stickerSetFullCovered#40d13c0e set:StickerSet packs:Vector<StickerPack> keywords:Vector<StickerKeyword> documents:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emoji information about every sticker in the stickerset |
| <mark>keywords</mark> | [`Vector<StickerKeyword>`](type/StickerKeyword) | Keywords for some or every sticker in the stickerset |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetFullCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 80,
		id : 4899718089124925544,
		access_hash : 4433040158861802330,
		title : '016UiHB53keK2Zq9',
		short_name : 'YFrwGz2jEKnCN1iD',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'J2X4m6aYcnOUNZ7o',
			),
			$client->photoSize(
				type : 'mdzFMrcXDGj42yU3',
				w : 62,
				h : 79,
				size : 50,
			),
			$client->photoCachedSize(
				type : 'UNdeMJTbj6zXvcpr',
				w : 84,
				h : 31,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'ieLwHyTJQ41kWn38',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'EtpqYTUMmBWRzI52',
				w : 42,
				h : 54,
				sizes : array(10),
			),
			$client->photoPathSize(
				type : '0hYaLgr1ptBjzVwJ',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 45,
		thumb_version : 1,
		thumb_document_id : 7885168727046264100,
		count : 22,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'isjo4TBQlmJ7WvbA',
			documents : array(-5229151802851279710),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -7488801011605421611,
			keyword : array('5kyJNbnh1IRQWqSf'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -1758278061273522591,
		),
		$client->document(
			id : 8550937242242615417,
			access_hash : 3833489470727330432,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 22,
			mime_type : 'wjv9NbyaZLAunz5Y',
			size : -2614447339935975078,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'rf8uFwtBv3cRjNSA',
				),
				$client->photoSize(
					type : 'wb8I2XnG96WTkgUL',
					w : 27,
					h : 16,
					size : 61,
				),
				$client->photoCachedSize(
					type : 'M9gDvW6w5AUOujXS',
					w : 91,
					h : 23,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'VmI390wzgbNQxM1j',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'sh2cGQwC8XbVToj6',
					w : 81,
					h : 8,
					sizes : array(68),
				),
				$client->photoPathSize(
					type : 'lmuTLgS1HJcOnYU3',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'LpNM0S2AWluIOBa7',
					w : 90,
					h : 25,
					size : 70,
					video_start_ts : 1560361.6103515625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1097949425011027275,
					background_colors : array(28),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6783822954810837187,
					background_colors : array(45),
				),
			),
			dc_id : 83,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 55,
					h : 97,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'UXVsTj9umDJ2Lp6y',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 36,
						x : -651868.6865234375,
						y : -527769.875,
						zoom : 482200.5859375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -30245.44921875,
					w : 6,
					h : 25,
					preload_prefix_size : 21,
					video_start_ts : 1164235.486328125,
					video_codec : '2ygFVwLOjQDqPYfI',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 66,
					title : 'bEqh6D9FCcIxO1aJ',
					performer : 'qf01J8IuUzXg7yHe',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'hS8PgOa5ZK7AD6Wr',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'QhWVj2NpKaBXkfZY',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```