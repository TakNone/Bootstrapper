# webDocument

**Description** : *Remote document*

**Layer** : 227

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
	access_hash : -7912756899107090493,
	size : 27,
	mime_type : 'mYrCdTuhZbq0e7M9',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 34,
			h : 37,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'tURYXMFGzeWwyAhN',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 73,
				x : -1724152.576171875,
				y : -254759.91015625,
				zoom : 216236.828125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 725074.8369140625,
			w : 54,
			h : 65,
			preload_prefix_size : 24,
			video_start_ts : 1151493.7841796875,
			video_codec : '3w0TXMURLDdr7Kkb',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 65,
			title : 'LfYAMdUiqmQJ2Bch',
			performer : 'JugSrvsZl1tVhCYq',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'osub6faieJltUNPT',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'lgxzOHrBnFmtUsR2',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```