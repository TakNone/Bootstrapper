# botInlineResult

**Description** : *Generic result*

**Layer** : 222

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
	id : 'FqRjHIsfW7nN9VDG',
	type : 'Dj2LIFxvq4QcSNBs',
	title : 'APc8OKCtYJqvLBwN',
	description : 'JuMDhNoPCfQcZUde',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5097055783040764499,
		size : 72,
		mime_type : 'duEGDX3QPjh0CLU5',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 91,
				h : 62,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'mLsqwdj5V84Npgv2',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 4,
					x : 95393.71484375,
					y : 1418587.2216796875,
					zoom : 1958494.009765625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1657804.091796875,
				w : 95,
				h : 43,
				preload_prefix_size : 36,
				video_start_ts : -583516.0068359375,
				video_codec : 'pv9MokDsKH7eYamq',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 67,
				title : 'E6JbLwWK4eY7CZDR',
				performer : '3Qc7qZJzMtHRU1Fu',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '7GSmBWheRa8Nngut',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'puDdVqbjKe9iahX0',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -313001879256629278,
		size : 24,
		mime_type : '6NnAu3skMeWRoZLw',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 15,
				h : 98,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ZeCS0A9EYsorwJtu',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 78,
					x : 2038236.5517578125,
					y : -182845.0380859375,
					zoom : 696462.4130859375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -198994.7919921875,
				w : 3,
				h : 45,
				preload_prefix_size : 49,
				video_start_ts : 570239.08203125,
				video_codec : 'EdCrxGzyVgwY7A0o',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 57,
				title : '8sEVt5qCfx4FeMN0',
				performer : 'x4Q58twRjLohrn1H',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'EhzD9jMI2dFJ7vSQ',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'yq8RSwD1cZgPTpen',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'J072dtNvWjagAZzR',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 10,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 34,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 48,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 90,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 17,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 96,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 63,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 15,
				language : '4qroFJk8PAelTzug',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 58,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 90,
				user_id : 8340751160861724311,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 72,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 53,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 8,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 86,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 69,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 6,
				document_id : 7146972708476263461,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 62,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```