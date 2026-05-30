# messages.savePreparedInlineMessage

**Description** : *Save a prepared inline message, to be shared by the user of the mini app using a web\_app\_send\_prepared\_message event*

**Layer** : 225

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
		id : 'KCGpfDO9i0UjzebP',
		type : 'pg9mNbTYCDlsfk8S',
		title : 'FpmEituvxKU70HWC',
		description : 'ghlTNVf9IZGCBai7',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 86,
			mime_type : 'lvuy6zKk2QGUN1wq',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 53,
					h : 76,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'pY7RzWeI51FxoXhn',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1871742.443359375,
					w : 38,
					h : 96,
					preload_prefix_size : 61,
					video_start_ts : -623451.767578125,
					video_codec : 'InDtKjcl8bhvxikZ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 8,
					title : 'JKWe6TE2I58COnSv',
					performer : 'qn1JFl4UD37XyCY5',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Mze1A7SJc86YGCWD',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '4mTSGyVK0Ut1oDjO',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 40,
			mime_type : 'hHXW8jt1fGFvYDUi',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 65,
					h : 66,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Njmrfbdh1QCKH3cO',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1681885.884765625,
					w : 21,
					h : 82,
					preload_prefix_size : 53,
					video_start_ts : -1548102.0166015625,
					video_codec : 'j1NY8tgUBHFXreiZ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 6,
					title : 'ON7aKUjsgmhzJqLR',
					performer : 'ecYlWJDhtzArg8PH',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'GXwyMzKDFcCEVmPr',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'BRG1uS4qZzjTsICO',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : '1vCYbpP4JTcQWMfu',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 91,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 26,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 44,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 38,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 88,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 63,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 86,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 26,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 45,
					language : 'ovlHrAJtn6BNs12i',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 90,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 31,
					user_id : -3750403931040833491,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 5,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 91,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 14,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 29,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 79,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 72,
					document_id : -3656527487297947985,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 61,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 23,
					date : 1,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 51,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 57,
					old_text : 'lU8ctk4HaM9LGjp1',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 3,
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