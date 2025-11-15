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
	bot_query_id : 'lTaABgFRPZyoeNIv',
	result : $client->inputBotInlineResult(
		id : 'VD836xOlhbtweI9j',
		type : 'YbKTZg6z81Qq0hjJ',
		title : '2SiBYIqKoLZCaU7g',
		description : 'KVv1PEWRJyI3kFur',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 30,
			mime_type : 'l0RPwypzraJIj9OT',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 11,
					h : 39,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'j5AGR6YMnziTrVD0',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1061726.3583984375,
					w : 89,
					h : 51,
					preload_prefix_size : 2,
					video_start_ts : -772710.109375,
					video_codec : 'fbmKWRkzL4HVaonB',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 32,
					title : 'a8IvZugdJinAy2pC',
					performer : 'ncijNAdQy2wOYuGM',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '5chLTiKjzkZWpeIR',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'usMeBpJabc16F4QV',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 21,
			mime_type : 'aOQpsTnYo2vym7x8',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 35,
					h : 27,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'vCKXIJRoMBygV8N6',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1909076.8359375,
					w : 59,
					h : 20,
					preload_prefix_size : 8,
					video_start_ts : 1027362.1083984375,
					video_codec : 'g0RKJiXlWAdvQ5Vj',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 16,
					title : 'Odrm9UnZYph6jQe0',
					performer : 'Mi26Snj9fIzPA1Zu',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'W3gaJwYDnX647sMC',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'gewynNTxGzikpQIf',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'lJfzkSrWMUQmavPG',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 19,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 63,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 28,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 71,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 14,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 99,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 61,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 43,
					language : 'qsFUvayZCiR6pW5h',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 98,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 77,
					user_id : 3650280823483674416,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 16,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 21,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 99,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 20,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 52,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 63,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 31,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 19,
					document_id : 3392736693835326904,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 51,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```