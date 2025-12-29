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
	access_hash : 2872416895145398235,
	size : 7,
	mime_type : '9n3VihwKITeajqoU',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 53,
			h : 7,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'nJ6Mi02CwXQvfLYg',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 4,
				x : -15413.77734375,
				y : 1972076.658203125,
				zoom : 481909.1220703125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -827848.9306640625,
			w : 47,
			h : 96,
			preload_prefix_size : 15,
			video_start_ts : -1431387.6796875,
			video_codec : '2oJBiqzZHW7x8TIu',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 43,
			title : 'AcfTgVBUvyrRdlte',
			performer : 'iPNJrYnCKwp0MdeG',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'pJZm6WdenFD1hfIX',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'Tykun6sEorpD2mcZ',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```