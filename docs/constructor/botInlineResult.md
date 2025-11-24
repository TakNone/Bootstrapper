# botInlineResult

**Description** : *Generic result*

**Layer** : 218

```tl
botInlineResult#11965f3a flags:# id:string type:string title:flags.1?string description:flags.2?string url:flags.3?string thumb:flags.4?WebDocument content:flags.5?WebDocument send_message:BotInlineMessage = BotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`string`](type/string) | Result ID |
| <mark>type</mark> | [`string`](type/string) | Result type (see bot API docs) |
| **title** | [`flags.1?string`](type/string) | Result title |
| **description** | [`flags.2?string`](type/string) | Result description |
| **url** | [`flags.3?string`](type/string) | URL of article or webpage |
| **thumb** | [`flags.4?WebDocument`](type/WebDocument) | Thumbnail for the result |
| **content** | [`flags.5?WebDocument`](type/WebDocument) | Content of the result |
| <mark>send_message</mark> | [`BotInlineMessage`](type/BotInlineMessage) | Message to send |

---

## Type

[BotInlineResult](type/BotInlineResult)

---

## Example

```php
$botInlineResult = $client->botInlineResult(
	id : 'ig0AhaeE6TPpOLnl',
	type : 'Lvrz70t8hl3IZAoa',
	title : 'Ui95VpKO0ECQT8Rf',
	description : '1lrhcE84VI75UqaM',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -4806296633636353898,
		size : 63,
		mime_type : 'Qaxb4lYGtVM2vLZ8',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 43,
				h : 84,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '3licV0pCoaGsLj1e',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 84,
					x : -185904.8935546875,
					y : -286768.2822265625,
					zoom : -1432563,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1998941.1787109375,
				w : 78,
				h : 47,
				preload_prefix_size : 16,
				video_start_ts : 1671062.4619140625,
				video_codec : 'MoVcZfKhDC7BSaxt',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 38,
				title : 'oleDZaK51pHv7jXn',
				performer : 'ofVsn0qie7gzwXhu',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'IbA5VlGj1BxTRkvq',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'RpXtC7TUhfYcm5Q4',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -636654908952448556,
		size : 73,
		mime_type : '5pNakQn39OewKAqU',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 23,
				h : 50,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'fJVEbZ5xAI3lMYyC',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 18,
					x : 897203.2978515625,
					y : 618298.962890625,
					zoom : -1431514.5888671875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -927389.7197265625,
				w : 44,
				h : 81,
				preload_prefix_size : 20,
				video_start_ts : 338167.2763671875,
				video_codec : 'cXJa0KbvAz5IgZW3',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 73,
				title : 'Q0LHTifdhw8GJ69E',
				performer : 'jbDW7TKfpVtG9wLn',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'jH0FBMOIGPiXRZpJ',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'E8eiAf1su5PSUtX4',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'u7U2maFiIAnB9sk0',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 40,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 52,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 84,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 36,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 65,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 94,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 89,
				language : 'G5JYLhsycgEVqjuv',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 92,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : -1103161844271997672,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 90,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 9,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 8,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 15,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 38,
				document_id : 3415732237723823845,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 34,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```