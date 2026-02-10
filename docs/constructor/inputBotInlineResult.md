# inputBotInlineResult

**Description** : *An inline bot result*

**Layer** : 222

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
	id : '2bSRkwf4ic7NDtQj',
	type : 'cP2qC7deTQiNAFuw',
	title : 'kfpZ3YsiQKlSCFPV',
	description : 'jKGfJzNc0HB9elgR',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 54,
		mime_type : '83OGS4mwNHLDE7nW',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 44,
				h : 58,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'Ime1dZFE5LMP3vJC',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 23,
					x : -1147401.033203125,
					y : 1292735.5400390625,
					zoom : 597062.3427734375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1018272.96875,
				w : 99,
				h : 94,
				preload_prefix_size : 1,
				video_start_ts : 1589449.34375,
				video_codec : 'K5DmdXgwTU9YERlF',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 77,
				title : 'v4aAinSYkTK7Cq69',
				performer : 'jbmFd6G2u1tf5JVE',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Tlqhw9GZ5FgykPIB',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'LG5OfgWljAhESYR3',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 81,
		mime_type : 'D2bwy6GEdNrQKYug',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 46,
				h : 54,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'pmn7NT9bVYyajluQ',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 24,
					x : -1678.779296875,
					y : 1108855.0849609375,
					zoom : -84343.4072265625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1289679.80859375,
				w : 42,
				h : 97,
				preload_prefix_size : 0,
				video_start_ts : 1541347.9736328125,
				video_codec : '2bVS4epymO0uMwPA',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 9,
				title : 'bM5nfj7LBel3oZig',
				performer : 'ws6Rd9TLxNlr1QKO',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'q8HeVrUdb9mkAytu',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'WSe2ci1UJFtwqVN8',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'Ahb1Qe2raBPlWZ3f',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 63,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 57,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 4,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 62,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 47,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 73,
				language : '0grCdLxlUEYcAt6i',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 73,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 24,
				user_id : 5943470799692556692,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 41,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 92,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 72,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 80,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 49,
				document_id : 7521026187612464304,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 55,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```