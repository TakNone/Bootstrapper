# inputBotInlineResult

**Description** : *An inline bot result*

**Layer** : 229

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
	id : '6TrleW8PXpbMdyj2',
	type : 'hiCPWcf9GKtrnTsI',
	title : 'FKmrxStEXuMNH8O3',
	description : 'ajFp12f4AGQPqzL5',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 17,
		mime_type : '25j8e3dk4wcluahy',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 73,
				h : 46,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'xtFHKVbY40CilgED',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 30,
					x : 882126.56640625,
					y : -158575.1201171875,
					zoom : 1722972.0478515625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -2030062.39453125,
				w : 33,
				h : 9,
				preload_prefix_size : 41,
				video_start_ts : -261055.5419921875,
				video_codec : 'a9V2hLOfxc5RCAQK',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 91,
				title : 'oYhBAs5cLjIJg28x',
				performer : 'XOtPr56i3mahHK7x',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'zXQdKZGNfpSvUE9t',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'jnQFKtM7Ne9HoTYs',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 80,
		mime_type : 'FRVP7qvU9CDWzS85',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 39,
				h : 85,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '8VgReP5vamwltEkL',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 88,
					x : -666887.9541015625,
					y : 1724692.8037109375,
					zoom : -534300.306640625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1033598.619140625,
				w : 62,
				h : 69,
				preload_prefix_size : 17,
				video_start_ts : -266045.4130859375,
				video_codec : 'NXc9ZiW1QCdBSvuK',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 83,
				title : 'fJgCrKG9YmD1OMH7',
				performer : 'Oo5xU8NnkzDvp7PJ',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'fWmYqOjsRzkM8XP7',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'A2wF9WOilTI05jcv',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'TkpE75DfnlHUAucJ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 29,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 46,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 66,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 49,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 54,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 100,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 38,
				language : 'O8u6w5jPr4YXFkha',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 5,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 62,
				user_id : -1413199065789542576,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 92,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 19,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 26,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 24,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 15,
				document_id : -2621418412197872781,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 41,
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
				date : 76,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 10,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 99,
				old_text : 'Al2sEzNYXwa4ICBt',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 87,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```