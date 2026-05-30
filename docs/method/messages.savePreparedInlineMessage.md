# messages.savePreparedInlineMessage

**Description** : *Save a prepared inline message, to be shared by the user of the mini app using a web\_app\_send\_prepared\_message event*

**Layer** : 222

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
		id : 'tNQ9bTVcA4XKzU0h',
		type : 'chTqK9isBNwVARko',
		title : 'jyAEDCFZmBHSwzgM',
		description : '1ZgehNnwYMR5kUWa',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 0,
			mime_type : 'cC10bR8ditrz4H5e',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 28,
					h : 13,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ODrhYaIw5ZvEiHc1',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1784924.7119140625,
					w : 75,
					h : 33,
					preload_prefix_size : 32,
					video_start_ts : 1806208.6298828125,
					video_codec : 'tW1fvyD6iUo7MN2C',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 41,
					title : 'PBQC3OosvNKYAD2R',
					performer : 'xk1glnJOCB84H2Lm',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '8PIeVGchaBEZxOfY',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'J74dTaUFGim2MLk1',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 32,
			mime_type : 'T3YMFKw1A0NUCc6m',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 95,
					h : 57,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'DuJZSBwHkF3G8C1i',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1262862.5791015625,
					w : 13,
					h : 27,
					preload_prefix_size : 6,
					video_start_ts : -880240.9462890625,
					video_codec : '5sAGTRy3gWzf8xSZ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 19,
					title : 'aoVZFw2lUAf9WuIm',
					performer : 'm8TOpDXfyq5AghoL',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'gsKAJWVm86MlSDdE',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'pKZCOySiQ6x08rYU',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'b3tICan2uTHy9B0m',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 25,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 0,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 37,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 79,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 3,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 5,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 78,
					language : 'c5KFWtCqp3RbBXaA',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 25,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 56,
					user_id : 8112397208549036829,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 57,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 32,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 45,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 91,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 62,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 45,
					document_id : 6366646092004131705,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 60,
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