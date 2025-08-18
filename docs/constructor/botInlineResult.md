# botInlineResult

**Description** : *Generic result*

**Layer** : 211

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
	id : '3aMmOTxIXEH7wzJK',
	type : '8xeVMpm65w2YPtbE',
	title : 'CKNLzr9sDc35Q2an',
	description : 'UrM51EWNfGye3JoF',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -2413585102915839409,
		size : 77,
		mime_type : 'hJYL1XC7bWxnMSia',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 1,
				h : 52,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 's9TwQhDVuzaBpNJE',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1313375.6328125,
				w : 48,
				h : 80,
				preload_prefix_size : 48,
				video_start_ts : 1932897.390625,
				video_codec : '3bY856vZyTfVuitU',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 28,
				title : 'zuPDntobkH4LcG6E',
				performer : 'tBMHIEDx3b8cGZ7i',
				waveform : '??,LiveProto???x?',
			),
			$client->documentAttributeFilename(
				file_name : 'RafDiOgWGzhsXjUp',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'BuK4GmOCyLk58RzP',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -1866483533900354933,
		size : 75,
		mime_type : 'ma1eq2Bixg34KYIo',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 14,
				h : 45,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'LnaQ2lsHYv3gJirC',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 2026116.8388671875,
				w : 80,
				h : 21,
				preload_prefix_size : 87,
				video_start_ts : 1259817.8369140625,
				video_codec : 'FmMAQNV0inwza37B',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 59,
				title : 'HhAG9ZW2g0UYoxwn',
				performer : 'thsTlBFcdvMNVqk9',
				waveform : '?G?|?LiveProto????',
			),
			$client->documentAttributeFilename(
				file_name : '7lOjc1p9CG3Z2sxK',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '6Hmz50JhrMinqQwC',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'NR2dKsluUB3PcJtF',
		entities : array(
			$client->messageEntityUnknown(
				offset : 54,
				length : 21,
			),
			$client->messageEntityMention(
				offset : 47,
				length : 47,
			),
			$client->messageEntityHashtag(
				offset : 34,
				length : 19,
			),
			$client->messageEntityBotCommand(
				offset : 15,
				length : 66,
			),
			$client->messageEntityUrl(
				offset : 88,
				length : 79,
			),
			$client->messageEntityEmail(
				offset : 29,
				length : 27,
			),
			$client->messageEntityBold(
				offset : 92,
				length : 26,
			),
			$client->messageEntityItalic(
				offset : 55,
				length : 14,
			),
			$client->messageEntityCode(
				offset : 71,
				length : 42,
			),
			$client->messageEntityPre(
				offset : 23,
				length : 14,
				language : 'Gwz1M27KBoqgX9pd',
			),
			$client->messageEntityTextUrl(
				offset : 62,
				length : 94,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 12,
				length : 70,
				user_id : 8974026072245518718,
			),
			$client->inputMessageEntityMentionName(
				offset : 46,
				length : 51,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 12,
				length : 80,
			),
			$client->messageEntityCashtag(
				offset : 75,
				length : 67,
			),
			$client->messageEntityUnderline(
				offset : 38,
				length : 88,
			),
			$client->messageEntityStrike(
				offset : 56,
				length : 26,
			),
			$client->messageEntityBankCard(
				offset : 88,
				length : 49,
			),
			$client->messageEntitySpoiler(
				offset : 12,
				length : 49,
			),
			$client->messageEntityCustomEmoji(
				offset : 36,
				length : 6,
				document_id : 7790826547676299014,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 50,
				length : 29,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```