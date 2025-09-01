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
	id : 'kBntXapPizGIeoOq',
	type : 'dobEvwYxylWa2FGO',
	title : 'Wn1dmtw5XRuvFYr3',
	description : 'iwcEXMezsb1JjoS5',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 8629493423026365573,
		size : 30,
		mime_type : 'UsOb7nGLuMhcTCx3',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 10,
				h : 87,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'd8tQzjogXFMrWLRN',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1783435.580078125,
				w : 49,
				h : 82,
				preload_prefix_size : 61,
				video_start_ts : -32661.05078125,
				video_codec : 'LGskYCD5Xwe29HoW',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 74,
				title : 'sAgmVidZ8Iqnxp6P',
				performer : 'hQs47YlxZHPdCWTJ',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'SWlRVFPiZb6GqmCx',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'GxN15HjgwTZoub0i',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -723976979550589698,
		size : 60,
		mime_type : '0iNsYwvlc9x8ktM7',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 24,
				h : 10,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'PwLKjnqsFQ2pE9mk',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 851068.232421875,
				w : 87,
				h : 69,
				preload_prefix_size : 45,
				video_start_ts : 2024922.0771484375,
				video_codec : 'COMkQxJdq1cU6hug',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 72,
				title : 'rZS8w0VyqQPIz7mT',
				performer : 'gT6v5kC3nPLVAOhI',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'M9T7KfpPGySENwZ6',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'InBgJZ3HPObauN4R',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'G6u52X7qYgDJFNed',
		entities : array(
			$client->messageEntityUnknown(
				offset : 41,
				length : 1,
			),
			$client->messageEntityMention(
				offset : 64,
				length : 42,
			),
			$client->messageEntityHashtag(
				offset : 86,
				length : 19,
			),
			$client->messageEntityBotCommand(
				offset : 83,
				length : 28,
			),
			$client->messageEntityUrl(
				offset : 2,
				length : 28,
			),
			$client->messageEntityEmail(
				offset : 93,
				length : 38,
			),
			$client->messageEntityBold(
				offset : 30,
				length : 16,
			),
			$client->messageEntityItalic(
				offset : 75,
				length : 64,
			),
			$client->messageEntityCode(
				offset : 47,
				length : 46,
			),
			$client->messageEntityPre(
				offset : 12,
				length : 91,
				language : 'uAhSa05g6WmsRlYF',
			),
			$client->messageEntityTextUrl(
				offset : 49,
				length : 74,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 32,
				length : 28,
				user_id : -742755916716535218,
			),
			$client->inputMessageEntityMentionName(
				offset : 31,
				length : 15,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 84,
				length : 92,
			),
			$client->messageEntityCashtag(
				offset : 62,
				length : 66,
			),
			$client->messageEntityUnderline(
				offset : 46,
				length : 49,
			),
			$client->messageEntityStrike(
				offset : 95,
				length : 62,
			),
			$client->messageEntityBankCard(
				offset : 74,
				length : 1,
			),
			$client->messageEntitySpoiler(
				offset : 39,
				length : 31,
			),
			$client->messageEntityCustomEmoji(
				offset : 25,
				length : 11,
				document_id : -7461582008370432076,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 90,
				length : 89,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```