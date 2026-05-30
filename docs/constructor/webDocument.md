# webDocument

**Description** : *Remote document*

**Layer** : 222

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
	access_hash : 1989994407281976777,
	size : 78,
	mime_type : 'sv2VzDRot6LOAQby',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 30,
			h : 53,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'ABySX7Rtpd8W602I',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 29,
				x : 374386.9697265625,
				y : 314355.9912109375,
				zoom : 443169.2314453125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 643241.55078125,
			w : 95,
			h : 22,
			preload_prefix_size : 56,
			video_start_ts : -1686969.791015625,
			video_codec : 'VasJ2WHwIXeGh0my',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 87,
			title : '8ALnK0gGIsvOFTHD',
			performer : 'ifvl2kgZErKTbBXy',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'sHqd01mlEn8eW67v',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'YENt6I5vuPc8jJRL',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```