# webDocument

**Description** : *Remote document*

**Layer** : 214

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
	access_hash : 544457797001253390,
	size : 72,
	mime_type : '3XvaKgoV94tTmpcr',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 17,
			h : 77,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : '9uT0xtXq6eF3ZVN1',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 66,
				x : -742541.1865234375,
				y : -636396.06640625,
				zoom : -1222839.029296875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1806374.7763671875,
			w : 46,
			h : 94,
			preload_prefix_size : 0,
			video_start_ts : -54386.458984375,
			video_codec : 'c59blRKG6epO1ydz',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 64,
			title : '0n9lsUFMNGfXiYvd',
			performer : 'CXmK5JWPcYA1TOV2',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'lmHow2hyiRprkjPE',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'x0tjhKQifHVquBdZ',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```