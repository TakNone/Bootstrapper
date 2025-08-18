# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 211

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
		installed_date : 0,
		id : -4304107465292418102,
		access_hash : -2195296200572403124,
		title : 'cexODorV0JlKwYpL',
		short_name : 'z5PmHGZjayxUeMc8',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'dr1v9wWZxM62maIu',
			),
			$client->photoSize(
				type : 'qbj8zEw3xdJg6YCT',
				w : 39,
				h : 15,
				size : 100,
			),
			$client->photoCachedSize(
				type : '4CuVYvFHAjWGTD1S',
				w : 32,
				h : 39,
				bytes : '??)/?LiveProtoX?I$',
			),
			$client->photoStrippedSize(
				type : 'zIuQ7cFs3ZPHRrwV',
				bytes : '?T??`LiveProto?V???',
			),
			$client->photoSizeProgressive(
				type : '7S4Pdoy9QqG8kJrb',
				w : 62,
				h : 12,
				sizes : array(79),
			),
			$client->photoPathSize(
				type : '9KRDylEQsoh0iMLj',
				bytes : '1S??ILiveProto؊?Y?',
			),
		),
		thumb_dc_id : 70,
		thumb_version : 40,
		thumb_document_id : 4679351120243308883,
		count : 87,
		hash : 66,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'LgvIq26Sf8juel4d',
			documents : array(4782834565117582652),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 3553509329615024113,
			keyword : array('hBSiF4LZsCRtO89z'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -1239712253262168102,
		),
		$client->document(
			id : 2274533028047765484,
			access_hash : 1700280695783576381,
			file_reference : '?Z3LiveProto??Tӗ',
			date : 9,
			mime_type : 'WqE62bLgyVzt1nsl',
			size : -3688012666327430244,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'pLk1mTEvHFWg36fy',
				),
				$client->photoSize(
					type : 'APQ8Hic43dx1lZat',
					w : 87,
					h : 0,
					size : 27,
				),
				$client->photoCachedSize(
					type : 'g5bSTLr6lhB0FG9s',
					w : 21,
					h : 18,
					bytes : '???LiveProto"????',
				),
				$client->photoStrippedSize(
					type : 'rmt0Sh4XdbsEZzg3',
					bytes : '??o?LiveProto??*?',
				),
				$client->photoSizeProgressive(
					type : 'nrMREcmlstJN9ped',
					w : 0,
					h : 46,
					sizes : array(38),
				),
				$client->photoPathSize(
					type : 'SO3j9zGN7e2bXuTd',
					bytes : '??M?LiveProto????L',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'JI2KrTA1LveylUXj',
					w : 36,
					h : 5,
					size : 47,
					video_start_ts : 173292.7109375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8499657903082945193,
					background_colors : array(14),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 7929049053238560295,
					background_colors : array(27),
				),
			),
			dc_id : 38,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 61,
					h : 89,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'LYRHhQCqE2XyrW6J',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1863822.2861328125,
					w : 66,
					h : 45,
					preload_prefix_size : 39,
					video_start_ts : 1230122.00390625,
					video_codec : 'tyNzq3rXCYmbUDFl',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 33,
					title : 'jRy8xmFusY6c3GXw',
					performer : 'nkW7GRTmeEN8pP4O',
					waveform : 'G}??+LiveProto????',
				),
				$client->documentAttributeFilename(
					file_name : 'TD1YqMZgGuCndQSU',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '1hGUWBmQ46NCFAzr',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```