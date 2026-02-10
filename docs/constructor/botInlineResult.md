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
	id : 'q3rN1kA9VFE5Tsv2',
	type : 'fFLQ2Ssr0gaqpRkE',
	title : 'AOYvi2b0qVzDxXHp',
	description : 'JDfETk37UjcX24RZ',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 7994146017142847464,
		size : 70,
		mime_type : '8lQYfCOpwqDM4bZB',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 7,
				h : 64,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '3yCSLcamDbVWXpfM',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 50,
					x : -1043144.46875,
					y : 585197.96484375,
					zoom : -1193748.5263671875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -2039878.005859375,
				w : 96,
				h : 90,
				preload_prefix_size : 87,
				video_start_ts : -1564317.31640625,
				video_codec : 'nhz8qtcwUIsLdCeJ',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 50,
				title : 'Z4njMwPLVobIiJHg',
				performer : 'BwQoY429k5mTXVKL',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'DbJkzoswAp8UeGZt',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'eshDmGHkgl5jPwxL',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -9210676386545078762,
		size : 11,
		mime_type : 'wW0qATQSrXLGekcz',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 61,
				h : 29,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'hDnGCsOKtrvikaLP',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 54,
					x : -1599009.3427734375,
					y : -108243.5263671875,
					zoom : -1265379.9794921875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1655720.1884765625,
				w : 100,
				h : 9,
				preload_prefix_size : 15,
				video_start_ts : -1292858.513671875,
				video_codec : 'CMIGnWdlBr4Pia9h',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 99,
				title : 'wr7Gp2UdWLRm1fui',
				performer : 'aqY2VZgONJbUnXwi',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Qbh1HNlP0AeipEL3',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '1CAlWOSK0B3i8tLf',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'i9w48hSPCgurAY6o',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 58,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 17,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 82,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 36,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 30,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 70,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 77,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 94,
				language : '2TBJrHlg8KEcNxWa',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 52,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 89,
				user_id : -2811214000307859035,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 65,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 74,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 83,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 2,
				document_id : -1857136051622851075,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 99,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```