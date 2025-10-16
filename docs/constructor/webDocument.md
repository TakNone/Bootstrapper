# webDocument

**Description** : *Remote document*

**Layer** : 216

```tl
webDocument#1c570ed1 url:string access_hash:long size:int mime_type:string attributes:Vector<DocumentAttribute> = WebDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Document URL |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| <mark>size</mark> | [`int`](type/int) | File size |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes for media types |

---

## Type

[WebDocument](type/WebDocument)

---

## Example

```php
$webDocument = $client->webDocument(
	url : 'https://docs.liveproto.dev',
	access_hash : 5574109299166240282,
	size : 41,
	mime_type : 'gVvSpkCd31NKosJR',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 62,
			h : 59,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'Or39Qo0Ix1CTJNhV',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 32,
				x : -1361248.5439453125,
				y : 1218025.265625,
				zoom : 1919836.5498046875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -660478.1728515625,
			w : 42,
			h : 59,
			preload_prefix_size : 10,
			video_start_ts : 616988.427734375,
			video_codec : 'WqC4bD1sfkaUndOM',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 53,
			title : 'fW0Hl8Sz4Y9UGVgo',
			performer : '6jxukhslLZO1429S',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'ro7EQm6GhHjsk4Pq',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'jrQCg085ctKiAGPT',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```