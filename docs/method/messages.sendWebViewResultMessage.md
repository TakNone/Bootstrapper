# messages.sendWebViewResultMessage

**Description** : *Terminate webview interaction started with messages\.requestWebView, sending the specified message to the chat on behalf of the user*

**Layer** : 222

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
	bot_query_id : 'bJXMfysmZgHuBeiD',
	result : $client->inputBotInlineResult(
		id : 'SobEYH2G5giyQkmn',
		type : 'rXJqFHSin1oU2fOs',
		title : '6oSIunOZ1exyUiBz',
		description : 'E1IkbwH0AnvixcGW',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 41,
			mime_type : 'QiEvLFWcMtbx9hZD',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 58,
					h : 100,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'xRci5fvT1wloL64A',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1952494.89453125,
					w : 32,
					h : 83,
					preload_prefix_size : 6,
					video_start_ts : 1516731.0068359375,
					video_codec : 'u1PzJMNol4g5TsFG',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 84,
					title : 'qkW2pRoS6TI50XwF',
					performer : '3hxB2F7fNWSTkgQ8',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'iUcF1pZkyxX4eBuo',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'pDOHyUr5dLmoSA4I',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 75,
			mime_type : 'tLSqQbxOcrJdlZeK',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 74,
					h : 91,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Lu1JaSMhECY4wvmG',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -228596.447265625,
					w : 17,
					h : 51,
					preload_prefix_size : 90,
					video_start_ts : -313644.9443359375,
					video_codec : 'wench8YzBXK7v5lV',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 58,
					title : 'dciEFH9OVefz07xC',
					performer : 'GnYMBqxd5pemy9kZ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'e1DyNwsT6JzUk4Bj',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Ptw2ghmpTq3KW5F0',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'cYLGZVqH498Wzjds',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 26,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 62,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 52,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 25,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 40,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 66,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 30,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 91,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 79,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 92,
					language : 'S36rcEzGFlX84j7w',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 75,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 69,
					user_id : 8498009549351185360,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 85,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 28,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 17,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 92,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 5,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 34,
					document_id : 9096954065387873322,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 54,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```