# messages.savePreparedInlineMessage

**Description** : *Save a prepared inline message, to be shared by the user of the mini app using a web\_app\_send\_prepared\_message event*

**Layer** : 227

```tl
messages.savePreparedInlineMessage#f21f7f2f flags:# result:InputBotInlineResult user_id:InputUser peer_types:flags.0?Vector<InlineQueryPeerType> = messages.BotPreparedInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>result</mark> | [`InputBotInlineResult`](type/InputBotInlineResult) | The message |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user to whom the web_app_send_prepared_message event event will be sent |
| **peer_types** | [`flags.0?Vector<InlineQueryPeerType>`](type/InlineQueryPeerType) | Types of chats where this message can be sent |

---

## Result

[messages.BotPreparedInlineMessage](type/messages.BotPreparedInlineMessage)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **RESULT_ID_INVALID** | `400` | One of the specified result IDs is invalid |
| **SEND_MESSAGE_GAME_INVALID** | `400` | An inputBotInlineMessageGame can only be contained in an inputBotInlineResultGame, not in an inputBotInlineResult/inputBotInlineResultPhoto/etc |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$messagesBotPreparedInlineMessage = $client->messages->savePreparedInlineMessage(
	result : $client->inputBotInlineResult(
		id : 'xwSW1dPiJ02CnXU5',
		type : 'hAbiE8TCsr7tfDZF',
		title : '2ZRlIgqwXPGtyBxc',
		description : 'r4kHcn5Uo7i1Py3A',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 85,
			mime_type : 'flvx51epoU03TkLw',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 3,
					h : 1,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'KcDyWUMwj86HTBxl',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -193141.1005859375,
					w : 98,
					h : 1,
					preload_prefix_size : 22,
					video_start_ts : -1018299.0341796875,
					video_codec : 'fbNnVamD7SpeOyz9',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 17,
					title : 'tsxBF0oz9rpwcYUv',
					performer : 'FqALWOpK8seSVHbv',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'N8Rc6UhYEJIo7Hfj',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'VCylUToYswdJnXAB',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 76,
			mime_type : 'OHtPsngYq0ZTaB3e',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 37,
					h : 17,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'DOgcPNAFp7qREH9I',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -590097.0810546875,
					w : 66,
					h : 58,
					preload_prefix_size : 70,
					video_start_ts : -455880.7275390625,
					video_codec : 'B5VjxgFKudpU3wST',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 93,
					title : 'boADtZsJyjWBVnUX',
					performer : 'rF5hHewPqlv12RTZ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'RstFgqLaVBbG9EfW',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '89MBQSA6FbhkDfGP',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'AvqwEDKiHmTg6VJt',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 30,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 39,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 77,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 33,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 18,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 60,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 56,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 85,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 45,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 31,
					language : 'pH04Tn5whyzgQoqP',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 74,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 67,
					user_id : -7864401750431237697,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 17,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 91,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 4,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 55,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 32,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 32,
					document_id : -3929307309908957528,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 40,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 86,
					date : 66,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 51,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 75,
					old_text : '3c1OgsZbDL5S9rWf',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 38,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
	user_id : $client->get_input_user(user : '@TakNone'),
	peer_types : array(
		$client->inlineQueryPeerTypeSameBotPM(),
		$client->inlineQueryPeerTypePM(),
		$client->inlineQueryPeerTypeChat(),
		$client->inlineQueryPeerTypeMegagroup(),
		$client->inlineQueryPeerTypeBroadcast(),
		$client->inlineQueryPeerTypeBotPM(),
	),
);
```