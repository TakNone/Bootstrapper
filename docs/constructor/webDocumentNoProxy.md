# webDocumentNoProxy

**Description** : *Remote document that can be downloaded without proxying through telegram*

**Layer** : 227

```tl
webDocumentNoProxy#f9c8bcc6 url:string size:int mime_type:string attributes:Vector<DocumentAttribute> = WebDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Document URL |
| <mark>size</mark> | [`int`](type/int) | File size |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes for media types |

---

## Type

[WebDocument](type/WebDocument)

---

## Example

```php
$webDocument = $client->webDocumentNoProxy(
	url : 'https://docs.liveproto.dev',
	size : 25,
	mime_type : 'f0EZ8hCkBJAtV3KP',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 20,
			h : 59,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'NEi078pF9vaCKqGZ',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 68,
				x : -1703327.439453125,
				y : 915005.3671875,
				zoom : 653475.3896484375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 649871.4755859375,
			w : 49,
			h : 59,
			preload_prefix_size : 15,
			video_start_ts : -1419824.21484375,
			video_codec : '0tcKERynOQ7jYAWH',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 24,
			title : '8kpR0rdYSZyBtJCa',
			performer : 'mvklstY3j1Ug0HQf',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'GIE5pcbj0UveLWYS',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'qIyDCaZX0NAOB5Ve',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```