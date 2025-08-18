# webDocument

**Description** : *Remote document*

**Layer** : 211

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
	access_hash : -6054362271004335100,
	size : 81,
	mime_type : 'v3YyeazqFhUQLIGk',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 29,
			h : 65,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'NyzMxZQuoajp0kGI',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 3,
				x : 1492615.283203125,
				y : 1999256.4990234375,
				zoom : 526433.5986328125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -610484.8623046875,
			w : 70,
			h : 85,
			preload_prefix_size : 63,
			video_start_ts : -1716115.8623046875,
			video_codec : 'Jta6702oy9Q1mUKS',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 49,
			title : 'xYH3WgJMcjqsenFR',
			performer : 'iY2ZRu8MknlPVXsv',
			waveform : 'o??ILiveProtoŃZ?',
		),
		$client->documentAttributeFilename(
			file_name : 'nCNEJPSqkaYtBeZ9',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'JD5VOSt7TkzGZjML',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```