# messages.sendWebViewResultMessage

**Description** : *Terminate webview interaction started with messages\.requestWebView, sending the specified message to the chat on behalf of the user*

**Layer** : 229

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
	bot_query_id : 'ef71MywEOjcTx56J',
	result : $client->inputBotInlineResult(
		id : 'LoPSp7mZFDO8Usq2',
		type : 'h8aTc49UznrYukfx',
		title : 'ObU17NDd9Wcpv3Cy',
		description : 'r5nph6Qq8ad0vPX4',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 43,
			mime_type : 'YiP3qCwdTUBXe6zk',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 49,
					h : 63,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'AlxKv14OUbqP6ETW',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1315647.3076171875,
					w : 25,
					h : 22,
					preload_prefix_size : 80,
					video_start_ts : 1657945.9365234375,
					video_codec : 's8OVCbcduFmMtwlY',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 17,
					title : 'DyJfI3UPFtWuNCsb',
					performer : 'vqjaQxcBPbMeY47Z',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'aEiA0pC28TyrwBJf',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '2oN1vW7AwMpHg5GU',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 63,
			mime_type : 'RQ7EDMSHJcLXlVu1',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 46,
					h : 17,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'HGTUCAanzRxlIoXd',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 714937.37890625,
					w : 57,
					h : 31,
					preload_prefix_size : 44,
					video_start_ts : 120168.974609375,
					video_codec : 'cg9Sjx0WwurtslHi',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 61,
					title : '5zVSbLw38N0p47rh',
					performer : 'MbTK3V0JBtkXwWOn',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 's5u48tn3YvljHT7b',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'XzYsfIpRyJDO0m61',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'd23SYF7iXDGbq8xU',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 93,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 61,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 52,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 32,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 60,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 69,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 100,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 36,
					language : '9WbO0j5AdNepH8z2',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 61,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 74,
					user_id : -8131104018767336218,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 82,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 95,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 50,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 74,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 35,
					document_id : 4256293977651819045,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 86,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 67,
					date : 18,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 87,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 71,
					old_text : 'rWRHSzfnJhs3jZM2',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 33,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```