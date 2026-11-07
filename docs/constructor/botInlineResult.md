# botInlineResult

**Description** : *Generic result*

**Layer** : 233

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
	id : '9YRSg1Gjc6eks5nt',
	type : 'KARceknFosE0uHmd',
	title : 'lQ2WzqnkJcZebArT',
	description : '7IU2e6xpd8WKSh1n',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -1503599544613084044,
		size : 10,
		mime_type : 'vhFPnX8dei4BGYaI',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 39,
				h : 94,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'QhYciLu3aMHCyvIb',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 36,
					x : 449433.345703125,
					y : -175104.708984375,
					zoom : -318245.6904296875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1566149.6796875,
				w : 76,
				h : 73,
				preload_prefix_size : 86,
				video_start_ts : 202291.6005859375,
				video_codec : '4OKBvU3bNQMtcVF0',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 25,
				title : '96X2YudlMRZfEID3',
				performer : 'PvEAfuwLlmk6FjZo',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'FcgEkIJzSjXralH7',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'P2DJG3RCBXu0mqAa',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 1865948725633591524,
		size : 16,
		mime_type : '6Ywj0TuQO3tbFMVN',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 7,
				h : 32,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '4XSdf5ahl8uWLEKT',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 71,
					x : -350536.841796875,
					y : 884186.4970703125,
					zoom : -1061729.4033203125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1073942.75390625,
				w : 31,
				h : 72,
				preload_prefix_size : 38,
				video_start_ts : 445773.498046875,
				video_codec : '1Q4lJoYnv7sCLzVu',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 2,
				title : 'XhipsJFrxMteYc8l',
				performer : '7NMf4taKTcFbzBwx',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '5ZiTm9X71VlNhbvo',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'f25SrBmvYAt3UnzR',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : '7gTe8yJZ2QjDsdOn',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 86,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 34,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 3,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 20,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 13,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 76,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 61,
				language : 'FaP0ju5tfEKm9srb',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 16,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 37,
				user_id : -4816091101206372337,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 61,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 31,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 44,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 63,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 32,
				document_id : -1114966409785978242,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 32,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 29,
				date : 12,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 42,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 64,
				old_text : 'vuh7OLq0MQg4DXP5',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 89,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 61,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```