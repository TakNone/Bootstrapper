# webDocument

**Description** : *Remote document*

**Layer** : 229

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
	access_hash : -3767825288892699334,
	size : 83,
	mime_type : 'MJ25T68ya7ixrIXA',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 92,
			h : 63,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'aLgTyBvt3biRUSWq',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 71,
				x : -337651.1201171875,
				y : -25058.419921875,
				zoom : -405787.7666015625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -926112.021484375,
			w : 23,
			h : 28,
			preload_prefix_size : 43,
			video_start_ts : 834101.837890625,
			video_codec : 'VrWpRqcTeogjnufb',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 88,
			title : 'VZew8cXlS2qkxtfN',
			performer : 'lH78Uwg1QLYsCXRi',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'wZGVX9xEWRC43fa6',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : '4wTeOW2f1hvyLtSE',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```