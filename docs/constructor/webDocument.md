# webDocument

**Description** : *Remote document*

**Layer** : 218

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
	access_hash : 5436065331034980110,
	size : 18,
	mime_type : 'A7LlTfJGOjMBsZ4v',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 54,
			h : 24,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'aAhEkjI0xuKrZT2P',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 20,
				x : -444299.453125,
				y : 1072798.4912109375,
				zoom : -1574429.9892578125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -2071487.96484375,
			w : 92,
			h : 100,
			preload_prefix_size : 62,
			video_start_ts : 1664408.6162109375,
			video_codec : 'YB5F6hpneCzVOIMf',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 45,
			title : '9WFBEVb4ix61Jtr0',
			performer : 'JRMjwSNlecI3Cdth',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'JZgaQOYLqjtWN8cK',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'nJGUvaAOMizxqsX4',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```