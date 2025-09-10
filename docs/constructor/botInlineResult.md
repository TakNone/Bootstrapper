# botInlineResult

**Description** : *Generic result*

**Layer** : 214

```tl
botInlineResult#11965f3a flags:# id:string type:string title:flags.1?string description:flags.2?string url:flags.3?string thumb:flags.4?WebDocument content:flags.5?WebDocument send_message:BotInlineMessage = BotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 'xVbulosUw0BqQT3O',
	type : 'lGB7EvQpYX6fWAOq',
	title : 'gnmqvcApZ8HdKW30',
	description : 'BeXuP2FG80kA3Z6M',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5548358082590398461,
		size : 46,
		mime_type : '6GXIDFSso84jk1QK',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 84,
				h : 33,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ALrHmOZdeIhuC6SE',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1364163.0078125,
				w : 99,
				h : 48,
				preload_prefix_size : 79,
				video_start_ts : 1835983.7578125,
				video_codec : '1QLspOqf8zMwV6YE',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 33,
				title : 'ABNeQK32OSYwioyq',
				performer : '3V7banXpMg92tJl4',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '6t7aPkxy83zOIsT9',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'yjIkrqowbFHmu94G',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 7744930342885763708,
		size : 47,
		mime_type : 'gu2kCwIrpPX8Netf',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 73,
				h : 92,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'aPfJHtpKzgDUE8Ww',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -492079.9931640625,
				w : 54,
				h : 36,
				preload_prefix_size : 9,
				video_start_ts : 409382.9072265625,
				video_codec : 'F25PHsfGqlErkRix',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 49,
				title : 'vAgEq7tK41fBx2Xw',
				performer : 'ETZSaV80Qd4UX2cJ',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'ARp2mf0FE7OVoyK1',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'eQHPNbwKXlfcx5dg',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'CV574uM8z0xlGY9B',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 55,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 19,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 59,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 49,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 11,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 15,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 48,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 63,
				language : 'KVPn3fLDYBmybMEu',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 99,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 53,
				user_id : 1028207718660177016,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 74,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 85,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 40,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 96,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 15,
				document_id : 8342153298346762346,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 9,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```