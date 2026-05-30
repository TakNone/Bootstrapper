# webDocument

**Description** : *Remote document*

**Layer** : 225

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
	access_hash : 8591282186243226094,
	size : 81,
	mime_type : 'RYcN05JMplomPakn',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 18,
			h : 73,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'uPWv48ls6IAF0tV7',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 66,
				x : 1019238.5703125,
				y : -1252678.943359375,
				zoom : 1031025.92578125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -80347.583984375,
			w : 76,
			h : 8,
			preload_prefix_size : 72,
			video_start_ts : 644082.9609375,
			video_codec : 'ZyJjNBshSAwrvexM',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 79,
			title : 'IKEaSiebhVCnvmQk',
			performer : 'ol9EG2JRqig4sPBv',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'n5sp1kXZDe2QzPSt',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'Pj8E4rAKgtiyYXHJ',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```