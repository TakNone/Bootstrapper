# tonConnectManifest

**Layer** : 233

```tl
tonConnectManifest#12229264 flags:# url:string name:string icon:flags.0?WebDocument = TonConnectManifest;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>url</mark> | [`string`](type/string) | NOTHING |
| <mark>name</mark> | [`string`](type/string) | NOTHING |
| **icon** | [`flags.0?WebDocument`](type/WebDocument) | NOTHING |

---

## Type

[TonConnectManifest](type/TonConnectManifest)

---

## Example

```php
$tonConnectManifest = $client->tonConnectManifest(
	url : 'https://docs.liveproto.dev',
	name : 'wWF7j1uEQkcl2mLB',
	icon : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5577239824046855009,
		size : 62,
		mime_type : 'hQS7XM98lTE36qga',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 93,
				h : 3,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'rZna8CvyqFJGWdRD',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 93,
					x : 1355630.072265625,
					y : 1460552.572265625,
					zoom : 1820563.3779296875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1586626.443359375,
				w : 88,
				h : 10,
				preload_prefix_size : 31,
				video_start_ts : 997465.34765625,
				video_codec : '79jCWdELKfkHVxXR',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 36,
				title : 'erabFYpQVIyWfZCO',
				performer : 'LoWHikEOQPxAcnel',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'vYSeLkCp6sdf13Ol',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'TAmMLDe1NxY39t2z',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
);
```