# messages.sendWebViewResultMessage

**Description** : *Terminate webview interaction started with messages\.requestWebView, sending the specified message to the chat on behalf of the user*

**Layer** : 218

```tl
messages.sendWebViewResultMessage#a4314f5 bot_query_id:string result:InputBotInlineResult = WebViewMessageSent;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_query_id</mark> | [`string`](type/string) | Webview interaction ID obtained from messages.requestWebView |
| <mark>result</mark> | [`InputBotInlineResult`](type/InputBotInlineResult) | Message to send |

---

## Result

[WebViewMessageSent](type/WebViewMessageSent)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **QUERY_ID_INVALID** | `400` | The query ID is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$webViewMessageSent = $client->messages->sendWebViewResultMessage(
	bot_query_id : 'TPjYrtlQasgCMdVA',
	result : $client->inputBotInlineResult(
		id : 'OtIaAWbx5L2rzYyH',
		type : 'ce0hnd6Dk4JqQHuY',
		title : 'L1P9iabyJv7xQEf6',
		description : '9umNqeHDVU7gSiZY',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 17,
			mime_type : 'pU8r7zAyLtne5ZdK',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 12,
					h : 76,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'pR9FhsXMGjcTHeQ3',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1528028.462890625,
					w : 76,
					h : 27,
					preload_prefix_size : 42,
					video_start_ts : -912462.291015625,
					video_codec : 'ThazJZOxoYvVQ5jm',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 86,
					title : 'jSWnUNkHDeJ5xvqc',
					performer : 'jZIHlOrbJBSDApsi',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'fkCISz9VGjrKagNH',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '98WgIGkqw2oAnJ7l',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 33,
			mime_type : 'i4BW3XgJcbAo2QmV',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 23,
					h : 57,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '5CwRHleaOEYItfT6',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1235537.251953125,
					w : 59,
					h : 86,
					preload_prefix_size : 31,
					video_start_ts : 814444.560546875,
					video_codec : 'ohEYCRpuN9Dedq8W',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 3,
					title : 'L1H75Jwuy06ci4QA',
					performer : 'Tu7hv0HGUBkopJKI',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'aMtPdn8O2IzQZGhA',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'xWJnY4VTGN17pAPQ',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'u2LZAVyCl7KxXkPc',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 31,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 15,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 71,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 20,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 32,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 40,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 51,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 81,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 27,
					language : 'vWwhZE08A3qtmMLp',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 28,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 44,
					user_id : 8052239471345544718,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 51,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 46,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 64,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 20,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 41,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 12,
					document_id : -7552042073386519064,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 97,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```