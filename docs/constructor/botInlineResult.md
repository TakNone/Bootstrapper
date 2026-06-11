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
	id : '7H0sLJ2Brn9kG3Tj',
	type : '7ZtybTL3OM1KN9pe',
	title : 'QuRhSdLxn89P6ime',
	description : '4GlJSq31gKDUEBnx',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 8852397629754321671,
		size : 0,
		mime_type : 'IRhelV89i0HGT6Bg',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 30,
				h : 37,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'VwZSpjD4i7sULQtM',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 9,
					x : 1551629.255859375,
					y : -284866.919921875,
					zoom : -1128741.4404296875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1417531.3583984375,
				w : 98,
				h : 32,
				preload_prefix_size : 30,
				video_start_ts : -2048875.9912109375,
				video_codec : '1atfeFPxqTUr07E5',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 74,
				title : 'VOdtS64xT3jWQ2fc',
				performer : '7yJoOf09dvCxtuZL',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'uZzHqGij5oNrVOny',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'SkHbsXGVQ3qYB1o7',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 8109228824953248992,
		size : 42,
		mime_type : 'h8Q03SaGtzxkd5OT',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 53,
				h : 52,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ubHJCRdSjXolLmgq',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 99,
					x : -1024973.416015625,
					y : 459173.4755859375,
					zoom : -1622579.875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -233204.173828125,
				w : 44,
				h : 60,
				preload_prefix_size : 9,
				video_start_ts : -312805.4853515625,
				video_codec : 'Si7jLfsntwIqpVlb',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 77,
				title : 'kPiLZypzwaGJljDT',
				performer : 'GSh5OIVbWPDLsCgH',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'D9fc3Gu0sJ6eBmtd',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'TXxvay3dwcAzGUBm',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'iknTfXVHu7eyx6AP',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 7,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 47,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 11,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 34,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 23,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 100,
				language : 'Tpb8YaJNUuHh6K0X',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 86,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : -3371741024057822703,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 5,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 26,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 40,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 7,
				document_id : 6858355817072958796,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 99,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 15,
				date : 77,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 81,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 37,
				old_text : 'Z3hpClDOEPTBsIgz',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 71,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```