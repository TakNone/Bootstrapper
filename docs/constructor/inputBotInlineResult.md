# inputBotInlineResult

**Description** : *An inline bot result*

**Layer** : 233

```tl
inputBotInlineResult#88bf9319 flags:# id:string type:string title:flags.1?string description:flags.2?string url:flags.3?string thumb:flags.4?InputWebDocument content:flags.5?InputWebDocument send_message:InputBotInlineMessage = InputBotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`string`](type/string) | ID of result |
| <mark>type</mark> | [`string`](type/string) | Result type (see bot API docs) |
| **title** | [`flags.1?string`](type/string) | Result title |
| **description** | [`flags.2?string`](type/string) | Result description |
| **url** | [`flags.3?string`](type/string) | URL of result |
| **thumb** | [`flags.4?InputWebDocument`](type/InputWebDocument) | Thumbnail for result |
| **content** | [`flags.5?InputWebDocument`](type/InputWebDocument) | Result contents |
| <mark>send_message</mark> | [`InputBotInlineMessage`](type/InputBotInlineMessage) | Message to send when the result is selected |

---

## Type

[InputBotInlineResult](type/InputBotInlineResult)

---

## Example

```php
$inputBotInlineResult = $client->inputBotInlineResult(
	id : 'Zq1HLJlMRueTOmAc',
	type : 'jnJlARBiazcHI7FD',
	title : 'ZYDgXKbjB7aQrUmV',
	description : 'tBLG4luvb7CKOqgV',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 69,
		mime_type : 'yWiTMtLj40Ifb8nl',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 44,
				h : 23,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '8aKogLyURZf60QkE',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 31,
					x : 1317908.185546875,
					y : 1479080.1689453125,
					zoom : 1490300.9228515625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 834118.0693359375,
				w : 96,
				h : 21,
				preload_prefix_size : 74,
				video_start_ts : -2065285.8544921875,
				video_codec : 'T1PCiemuosIjV9Or',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 65,
				title : 'QYFtzJfeR0UpLBM4',
				performer : '5Tesz2cQub3XFhU0',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'g7wdPKNs5h4mTD3U',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'c2yfNRi4tPeIMkmu',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 83,
		mime_type : 'vF2EtpzYAJrNeikI',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 37,
				h : 44,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'fvqr5XO30blRaypP',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 74,
					x : -1040954.4501953125,
					y : 858499.677734375,
					zoom : 1758479.7421875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1073385.318359375,
				w : 88,
				h : 71,
				preload_prefix_size : 27,
				video_start_ts : 747516.5400390625,
				video_codec : 'JALSr2dHlecYp37D',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 62,
				title : '8M4Iok25LfbyEiDO',
				performer : 'xS7LdB6DGvWQf3N9',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'vfnxq0m6kCapNhwG',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'Fb7YhIONcRia80tC',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'M6NgI0leAqkOUmD7',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 10,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 78,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 53,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 18,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 53,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 88,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 3,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 74,
				language : 'Lwi3WodhxzkHMKse',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 91,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 51,
				user_id : 7591356756286592675,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 37,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 50,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 41,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 87,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 3,
				document_id : 1802974253256553624,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 21,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 99,
				date : 33,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 86,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 48,
				old_text : '9MlKIwbm1Dyze8cv',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 45,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 39,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```