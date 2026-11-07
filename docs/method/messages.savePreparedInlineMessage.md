# messages.savePreparedInlineMessage

**Description** : *Save a prepared inline message, to be shared by the user of the mini app using a web\_app\_send\_prepared\_message event*

**Layer** : 233

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
		id : '2nZq7irvez4fd3bs',
		type : '0q6fLrguSvYCXMQW',
		title : 'vS46OVRi0NwgK8hp',
		description : 'WCkyrTY8euADgnvE',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 75,
			mime_type : '0MCR5BoLfhdFH43Q',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 98,
					h : 75,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'hzQ0tBXYsy3PZoxV',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1081130.1171875,
					w : 84,
					h : 50,
					preload_prefix_size : 13,
					video_start_ts : -1427773.0478515625,
					video_codec : 'Kdz4p1acxf3s7UXS',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 98,
					title : '3PCrunh8oXVGjWmQ',
					performer : 'ke2iXfzZGqP95oyB',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'nT7HdhePKZwksciD',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'EVvGhIH4CfRpYbkK',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 7,
			mime_type : 'hvGwCOBmUrJteNTI',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 12,
					h : 99,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Lci5r7OemfERuTCJ',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1233602.0498046875,
					w : 75,
					h : 36,
					preload_prefix_size : 29,
					video_start_ts : 1008983.3388671875,
					video_codec : 'UYERz1KL8FvhA9rC',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 34,
					title : 'CamigDyVzxZkFNJf',
					performer : 'PmJrwbNWva1g4Yle',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'XrwxdJYS9FAs1gfz',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ETBaU7FQhXpJeLRK',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'ok1sFCBKrmW9RwnX',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 17,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 87,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 37,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 66,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 36,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 62,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 81,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 23,
					language : 'aUqrMRCkpEmG8FyN',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 11,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 47,
					user_id : -6816223552317030310,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 93,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 26,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 69,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 26,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 93,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 23,
					document_id : -8452284375413223516,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 10,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 70,
					date : 93,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 12,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 10,
					old_text : 'sNVL1PgnUB7ySGCr',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 66,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 97,
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