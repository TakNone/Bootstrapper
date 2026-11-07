# messages.setBotGuestChatResult

**Description** : *Bots may use this method to answer a guest mode &raquo; query received via an updateBotGuestChatQuery update, providing the message to post into the chat as a guest, see here &raquo; for more info*

**Layer** : 233

```tl
messages.setBotGuestChatResult#b8f106e3 query_id:long result:InputBotInlineResult = InputBotInlineMessageID;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | Query identifier from the updateBotGuestChatQuery.query_id field |
| <mark>result</mark> | [`InputBotInlineResult`](type/InputBotInlineResult) | The result to send as the answer to the query |

---

## Result

[InputBotInlineMessageID](type/InputBotInlineMessageID)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_BOT_INVALID** | `403` | User accounts must provide the bot method parameter when calling this method. If there is no such method parameter, this method can only be invoked by bot accounts |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$inputBotInlineMessageID = $client->messages->setBotGuestChatResult(
	query_id : -3503577657879989494,
	result : $client->inputBotInlineResult(
		id : '6HcWI3qOnpdgNvtk',
		type : 'qQcTzEGjHWFmkt4i',
		title : 'kLUNlavRBj9yGoMu',
		description : 'SHCm713UiWTeXof0',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 44,
			mime_type : 'AULk6ixlgQKPhZWr',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 95,
					h : 50,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ofEIqTmLdDl5v0H9',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -901814.41015625,
					w : 85,
					h : 0,
					preload_prefix_size : 99,
					video_start_ts : -1041293.8310546875,
					video_codec : 'YKRxGqZFWEPc1ga9',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 52,
					title : 'ql2QYZsbzPDpKUiJ',
					performer : 's8Jdu4jOW9bPHiyG',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'IGrjeyn8wlT3YZBb',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'jxDXSELpbtlIvT3h',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 78,
			mime_type : 'DPvf71q2jwGCNOQn',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 30,
					h : 56,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'vyTJN1MS7j8EIP23',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1762563.744140625,
					w : 82,
					h : 10,
					preload_prefix_size : 77,
					video_start_ts : 836342.990234375,
					video_codec : 'u6YMjZPidcHgyp0h',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 30,
					title : '6I5qhtAmVTnkzvju',
					performer : 'vLSIi0aUur25OhDV',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'ayrD0EdekqsZOcbt',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '8tkfRDhv2OmuVz7i',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : '1drJoRta2j6MNmsz',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 58,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 13,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 25,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 57,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 3,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 89,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 36,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 16,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 24,
					language : 'YLuOqgnF0Uj3GtbZ',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 53,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 36,
					user_id : -5133711924663685886,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 19,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 6,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 95,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 41,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 29,
					document_id : -2754646240054278635,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 64,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 58,
					date : 11,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 53,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 42,
					old_text : 'kOtFonwgy1A2z4NG',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 14,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 91,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```