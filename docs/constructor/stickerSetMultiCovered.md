# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 211

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
		installed_date : 81,
		id : 1104952038355437748,
		access_hash : -5900859271279283663,
		title : '7kRUyLO6s90rXoK3',
		short_name : 'bQaCAozywnR0614f',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'iQe8VhwB7anfbysE',
			),
			$client->photoSize(
				type : 'YXrRiE67coh2dvN8',
				w : 84,
				h : 73,
				size : 99,
			),
			$client->photoCachedSize(
				type : '0XZWg5KF6UBk8wED',
				w : 19,
				h : 33,
				bytes : 'q??LiveProto9cA',
			),
			$client->photoStrippedSize(
				type : 'oiHJcSsmKPT4ek8C',
				bytes : '??$?PLiveProto4#?7?',
			),
			$client->photoSizeProgressive(
				type : 'z90lv1dmc3fwPgyu',
				w : 44,
				h : 94,
				sizes : array(17),
			),
			$client->photoPathSize(
				type : 'bITph1c3UHlDtamS',
				bytes : '??? ?LiveProtoJ??',
			),
		),
		thumb_dc_id : 26,
		thumb_version : 19,
		thumb_document_id : -2961135180724184429,
		count : 80,
		hash : 94,
	),
	covers : array(
		$client->documentEmpty(
			id : 5952197350128248508,
		),
		$client->document(
			id : -5985013740815079842,
			access_hash : -4736871722547309732,
			file_reference : 'ip?7LiveProto????
',
			date : 24,
			mime_type : 'SexhGRjPNXwuvbH6',
			size : -3175774222601391586,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'DAJzkUxS5ih8a0LT',
				),
				$client->photoSize(
					type : 'lwTkR2iPzpYBbQO4',
					w : 65,
					h : 2,
					size : 50,
				),
				$client->photoCachedSize(
					type : 'ZXvlaBVMG0AD59WL',
					w : 9,
					h : 35,
					bytes : '/?/?<LiveProto????',
				),
				$client->photoStrippedSize(
					type : '02iIU9zm73BdsJbH',
					bytes : 'q]?LiveProto!?^oV',
				),
				$client->photoSizeProgressive(
					type : '2JKguhEp48xyWdMQ',
					w : 3,
					h : 23,
					sizes : array(1),
				),
				$client->photoPathSize(
					type : '1ta29PvUjXp0VWDB',
					bytes : '+6Ģ?LiveProto???',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '9X4oUjJ3LYCKHfnB',
					w : 76,
					h : 97,
					size : 31,
					video_start_ts : 1978144.5537109375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2007262316980165268,
					background_colors : array(10),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -5797545428683095338,
					background_colors : array(67),
				),
			),
			dc_id : 74,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 72,
					h : 100,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'HVGTfPRxBoU10Na2',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1224983.181640625,
					w : 71,
					h : 21,
					preload_prefix_size : 12,
					video_start_ts : -1512203.4931640625,
					video_codec : '0EWoLBcgAndbzJ7R',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 40,
					title : '4ADy0QutJPoq1nNl',
					performer : 'hy1IJ6e75KE392tO',
					waveform : '>?ʧLiveProto$.?',
				),
				$client->documentAttributeFilename(
					file_name : 'wqARUjrtCXNF2h5y',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'aAmTxwOBJSouvl6I',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```