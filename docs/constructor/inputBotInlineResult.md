# inputBotInlineResult

**Description** : *An inline bot result*

**Layer** : 227

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
	id : 'cVrLXwTC3BtkGQU2',
	type : '8EthlBmDnSka1WKL',
	title : 'Is5TBRthEOlC3Vjr',
	description : 'TdcRuIgYNbt3A7Pj',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 27,
		mime_type : 'weiQX8kdnsEy5JRO',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 96,
				h : 53,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'sHz6UqGtrbpOZTQy',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 34,
					x : 1239654.2841796875,
					y : 113873.951171875,
					zoom : -1501461.3486328125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -570233.626953125,
				w : 34,
				h : 48,
				preload_prefix_size : 4,
				video_start_ts : 1314837.0048828125,
				video_codec : 'xDYqMnyweWdrAb43',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 40,
				title : 'WSOJid9F23VLkIQs',
				performer : 'Afo0DbLmP1zgIpUi',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'jpZyXGHu7LvlOks2',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'uL0ZmXBznrSEvxVs',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 95,
		mime_type : '7bV912NLwx0ZSWcG',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 92,
				h : 37,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'BUemEVflsQFqyoTN',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 53,
					x : 1640691.8544921875,
					y : 1761739.41015625,
					zoom : 1592987.328125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 999541.6787109375,
				w : 78,
				h : 25,
				preload_prefix_size : 27,
				video_start_ts : -263782.3896484375,
				video_codec : 'AVjhH7Xn4C5dEkrv',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 6,
				title : 'L1jf9hsiGOguxVSm',
				performer : '45cxE0XHBQT8R6Z2',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '4mHysjro9FGziYKu',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'SCQ8HBD73MAz451c',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'bRqdFzYxwAnht2Xo',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 22,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 7,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 47,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 21,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 5,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 85,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 100,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 31,
				language : 'hXo9bUWVZKCvwPsG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 90,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 85,
				user_id : 464190054502138104,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 90,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 18,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 63,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 29,
				document_id : -6481505896755539411,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 36,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 36,
				date : 0,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 34,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 70,
				old_text : 'oFkCnQgXeqt4lhZP',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 54,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```