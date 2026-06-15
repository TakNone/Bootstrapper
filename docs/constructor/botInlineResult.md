# botInlineResult

**Description** : *Generic result*

**Layer** : 227

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
	id : 'IMVqmA0dByKX7HGt',
	type : 'VK3LjuhExlwQ8zUR',
	title : 'wuIpOitvDr73LGKZ',
	description : '2G3Bne17WaZ0YQVb',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -5448435678526085917,
		size : 91,
		mime_type : 'gjDywumFkL5cTO72',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 71,
				h : 23,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'yZqz1SdgOh6Vt9Lv',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 41,
					x : -174219.4697265625,
					y : -2093574.919921875,
					zoom : 580590.390625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1133534.2783203125,
				w : 10,
				h : 33,
				preload_prefix_size : 38,
				video_start_ts : 1100385.5947265625,
				video_codec : 'MbY3Zst1XL0B2DCR',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 9,
				title : 'qS7ebmBVo8ragAY3',
				performer : 'lrcyEg8nIvZPX2mw',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'cqldV0OTE5kKg9W8',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '8YxM6N9So1jIBdiy',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -6129180090431648201,
		size : 53,
		mime_type : 'dx3wJroNPfQ29OUv',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 46,
				h : 87,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'bsrq61NtIcmPRyDY',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 31,
					x : -610745.849609375,
					y : 756981.5166015625,
					zoom : 864122.4111328125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 2021106.84765625,
				w : 27,
				h : 95,
				preload_prefix_size : 71,
				video_start_ts : 247181.39453125,
				video_codec : 'zk1xvp6qm7VIMCHE',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 0,
				title : 'obde7YWq62pJ0QzV',
				performer : 'smH9liTS0Leo4Af3',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'OlQsp05fxBcoF7Zg',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '8PtEbS1L6Nw9Rmn4',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'htCNLzBJ8WZPjGic',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 100,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 8,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 80,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 69,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 90,
				language : 'rXvI9AybHCkYSB1F',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 26,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : -8442485068504088409,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 96,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 11,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 5,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 27,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 89,
				document_id : -2207792027431078646,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 20,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 62,
				date : 83,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 40,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 90,
				old_text : '7bEtBGyvFYNRiZ9c',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 80,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```