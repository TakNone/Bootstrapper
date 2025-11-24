# messages.savePreparedInlineMessage

**Description** : *Save a prepared inline message, to be shared by the user of the mini app using a web\_app\_send\_prepared\_message event*

**Layer** : 218

```tl
messages.savePreparedInlineMessage#f21f7f2f flags:# result:InputBotInlineResult user_id:InputUser peer_types:flags.0?Vector<InlineQueryPeerType> = messages.BotPreparedInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		id : 'El1qHwvdLe8AyCYu',
		type : 'XEa5xjytTcVFf4Q1',
		title : 'zSLuUkfhOmEHT8t2',
		description : 'mY5vo8bM23RpsNTn',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 29,
			mime_type : 'q0vrU3miP9bo1CJ8',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 100,
					h : 67,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'oxaVkLh0ISKfdDUj',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -903799.30859375,
					w : 28,
					h : 77,
					preload_prefix_size : 6,
					video_start_ts : 270622.0927734375,
					video_codec : 'EOywvFx5A9gj4nDR',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 36,
					title : 'DhR7M3eoVYIPz0xi',
					performer : 'FQqGNduf8IOibxp6',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'yedQHKwZi4Eog3JX',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'FVwOYnSje0W1rfgA',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 51,
			mime_type : 'tAOb3UhlL7rxJPGR',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 33,
					h : 38,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'bIqXEgA3w0pczaRo',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 885982.0849609375,
					w : 83,
					h : 88,
					preload_prefix_size : 99,
					video_start_ts : 1228164.607421875,
					video_codec : 'ZEb7ytGgdAeTVO58',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 0,
					title : '3Itx5MEoJuPVr79S',
					performer : '0lUF2DaReTJKMVmj',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '1lVXejE92TmLdkZM',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '2tNC9ri5vbnBcY1d',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : '4jGRe10mHSI52JD8',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 50,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 64,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 90,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 18,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 25,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 24,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 76,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 10,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 74,
					language : 'JCTymiFEj3GkqQ9s',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 47,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 54,
					user_id : -6814793933127946016,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 72,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 17,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 90,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 64,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 11,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 56,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 87,
					document_id : -7384215795961278895,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 33,
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