# webDocumentNoProxy

**Description** : *Remote document that can be downloaded without proxying through telegram*

**Layer** : 216

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
	size : 86,
	mime_type : 'kbIy8JAtSleXKMOZ',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 54,
			h : 66,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'IlThWLoEZ3vDi4bO',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 41,
				x : 437511.6884765625,
				y : 556532.8603515625,
				zoom : -1405900.3310546875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -223108.4453125,
			w : 11,
			h : 46,
			preload_prefix_size : 0,
			video_start_ts : -15245.884765625,
			video_codec : 'DLm85tJid4YKszyR',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 44,
			title : 'D2ZqJOA1L0598IbR',
			performer : 'Fl6LqVATt8aJmO2H',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '9L8yrFqHpsjiMXzb',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'dk1XvTfYS8GoyqVA',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```