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
	size : 79,
	mime_type : 'snpUBmEx8C23itw9',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 80,
			h : 34,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'MEUuYSjcKa6ZNVO5',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 45,
				x : -1760976.3857421875,
				y : -918291.763671875,
				zoom : 1259766.4091796875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 2031267.85546875,
			w : 33,
			h : 39,
			preload_prefix_size : 43,
			video_start_ts : -1058618.0712890625,
			video_codec : 'RWNgzPKcVlECeIYM',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 67,
			title : 'ATUCz3idr92mDg0R',
			performer : 'E4AeGoqFCt5WOkNU',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'IW9L4ihPepBZkN6J',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'uUeBTs0SQRWfx4mw',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```