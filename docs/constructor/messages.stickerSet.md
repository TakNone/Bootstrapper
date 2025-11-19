# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 218

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
		installed_date : 23,
		id : 7318746476682055685,
		access_hash : -6920842014727009917,
		title : '5vmNZkWSElCyzcsa',
		short_name : 'XgAljdCy5kM26pWx',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'BXg7sHPyIOFYbGlq',
			),
			$client->photoSize(
				type : 'jd6QZ8L02sb3XGBY',
				w : 10,
				h : 47,
				size : 74,
			),
			$client->photoCachedSize(
				type : 'HRnev1JtjwcDNg8r',
				w : 81,
				h : 100,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '4Oyatguvs7F1xNmA',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'XcBhRp6qNvEuag7G',
				w : 9,
				h : 94,
				sizes : array(80),
			),
			$client->photoPathSize(
				type : 'RmAX0gqfvSp4ZkVH',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 20,
		thumb_version : 63,
		thumb_document_id : 4190336973499919661,
		count : 37,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'bQlgv1EFWkzapYU4',
			documents : array(-7465934577572312408),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 6926824574741714790,
			keyword : array('7nyoP5jXcvw9YTFA'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 8611187668034725066,
		),
		$client->document(
			id : -452553792285127882,
			access_hash : -7591668208142010546,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 58,
			mime_type : 'gVndX7Ny4zC8Kijr',
			size : 217613683833830138,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '8HxKLprFqy7TjmzU',
				),
				$client->photoSize(
					type : 'LWJMv9Bfyc5ri3da',
					w : 30,
					h : 47,
					size : 89,
				),
				$client->photoCachedSize(
					type : 'VjhiMXxcIDpYG2Nv',
					w : 83,
					h : 46,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '4IuOUJk0rG6ZlEXe',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'XiwHNgABz8Z0536u',
					w : 62,
					h : 93,
					sizes : array(3),
				),
				$client->photoPathSize(
					type : 'fWAHVTFphmKesjy9',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'zyRL4ZmobGVUKMJI',
					w : 21,
					h : 63,
					size : 53,
					video_start_ts : 763744.27734375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -4669803505380399013,
					background_colors : array(49),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -7126040148579323627,
					background_colors : array(9),
				),
			),
			dc_id : 5,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 83,
					h : 39,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'JIxDdN6jPgmK9lCM',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 7,
						x : 1262668.294921875,
						y : -1911723.1357421875,
						zoom : 658355.1533203125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1215128.0888671875,
					w : 90,
					h : 82,
					preload_prefix_size : 85,
					video_start_ts : -38471.2626953125,
					video_codec : 'QdKwqhbGOYUjDHo3',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 47,
					title : 'Kl5hmd1zu3yNcOnE',
					performer : 'u57xZqUrLQdNEhFv',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'oWHFS2L3atyRZ8x6',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '2GbtL54gYuqXC8rW',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```