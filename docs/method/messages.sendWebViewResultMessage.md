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
	bot_query_id : '5qd0eVlnObxouCFA',
	result : $client->inputBotInlineResult(
		id : 'bWvCTLuwyI4B9Olh',
		type : 'qZnFmiul5ceEp1Pb',
		title : 'vhraWVpKgEsfijTQ',
		description : 'gipX7eQw2qdWBjN4',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 75,
			mime_type : '2NwlPW0G637fuk84',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 7,
					h : 6,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'pLkm6wAIY0UCXrfN',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1228119.2392578125,
					w : 43,
					h : 42,
					preload_prefix_size : 81,
					video_start_ts : 913819.5,
					video_codec : 'CwOgR1LQfjZz69s7',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 81,
					title : 'CbgnXqL0GEpo3Ou7',
					performer : 'gvGV8Ab2MPhN1t0Y',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '7Y2ocQvHJIKtrZSd',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'J5kG8AWVls7abnhY',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 11,
			mime_type : 'CWKfEJ0mwsbLp9jo',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 24,
					h : 12,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Wy8pkla6D3IBuoxQ',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1577509.7568359375,
					w : 82,
					h : 44,
					preload_prefix_size : 68,
					video_start_ts : -861357.123046875,
					video_codec : '6kba9F5chrZUxRAg',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 61,
					title : 'C6yt4BLwjgxu5JOA',
					performer : '3YPxldte18anFiv6',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'vkCGjKzdRfAO75oY',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'w4g9mpIEcqrvWRHG',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'Zbz7pAuD94B0Tg3I',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 54,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 51,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 52,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 53,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 94,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 1,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 14,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 91,
					language : 'qldc9zC5ULMxISW3',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 0,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 38,
					user_id : 3650357066124809531,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 62,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 57,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 75,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 59,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 28,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 35,
					document_id : 6698657995307442461,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 78,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```