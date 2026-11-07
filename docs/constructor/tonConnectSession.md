# tonConnectSession

**Layer** : 233

```tl
tonConnectSession#126556c6 flags:# pending:flags.0?true closing:flags.1?true closed:flags.2?true id:long dapp_client_id:string client_id:flags.3?string nonce:bytes manifest:flags.4?TonConnectManifest manifest_error:flags.5?int date:int = TonConnectSession;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **pending** | [`flags.0?true`](type/true) | NOTHING |
| **closing** | [`flags.1?true`](type/true) | NOTHING |
| **closed** | [`flags.2?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | NOTHING |
| <mark>dapp_client_id</mark> | [`string`](type/string) | NOTHING |
| **client_id** | [`flags.3?string`](type/string) | NOTHING |
| <mark>nonce</mark> | [`bytes`](type/bytes) | NOTHING |
| **manifest** | [`flags.4?TonConnectManifest`](type/TonConnectManifest) | NOTHING |
| **manifest_error** | [`flags.5?int`](type/int) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |

---

## Type

[TonConnectSession](type/TonConnectSession)

---

## Example

```php
$tonConnectSession = $client->tonConnectSession(
	pending : true,
	closing : true,
	closed : true,
	id : 9211787706151325305,
	dapp_client_id : 'lghEW8CVRNIxeu41',
	client_id : 'qUuY8GSyEWc6kBrs',
	nonce : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	manifest : $client->tonConnectManifest(
		url : 'https://docs.liveproto.dev',
		name : 'XA7qBGT5PFhxDuZd',
		icon : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 1841257527343878081,
			size : 35,
			mime_type : 'Y2N1cEXl5RneKWTd',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 88,
					h : 43,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'J9n8P5vOCacXUHuI',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1128049.169921875,
					w : 16,
					h : 87,
					preload_prefix_size : 94,
					video_start_ts : 855373.9453125,
					video_codec : '046LWIzkGSbnhJOl',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 77,
					title : 'HkYTWiJKAqo1bU5y',
					performer : 'Ytdvew8EUF4h23yQ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'FWOcDr13t5lTJ7Nh',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Q0qflueUOn4mDAcK',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	manifest_error : 27,
	date : 93,
);
```