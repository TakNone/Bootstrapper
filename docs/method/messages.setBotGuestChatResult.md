# messages.setBotGuestChatResult

**Layer** : 227

```tl
messages.setBotGuestChatResult#b8f106e3 query_id:long result:InputBotInlineResult = InputBotInlineMessageID;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>result</mark> | [`InputBotInlineResult`](type/InputBotInlineResult) | NOTHING |

---

## Result

[InputBotInlineMessageID](type/InputBotInlineMessageID)

---

## Example

```php
$inputBotInlineMessageID = $client->messages->setBotGuestChatResult(
	query_id : 1284325098682218648,
	result : $client->inputBotInlineResult(
		id : 'NtKpifosYuHlqr1c',
		type : 'p3UX9DftycnjbumF',
		title : '4PSJAMvhHFjLXr8Q',
		description : 'QLnRSXWsK5MkUE3v',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 40,
			mime_type : 'wQUGe539bWt7HozK',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 8,
					h : 9,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'VkgCtje2FMpaWPuD',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1916685.9990234375,
					w : 54,
					h : 15,
					preload_prefix_size : 64,
					video_start_ts : -1576503.5810546875,
					video_codec : '7NXytkHYq386QAzx',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 30,
					title : 'Ggvsd3uhB9yQDPYI',
					performer : 'rZHRJPFuliQLxk1v',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'UwuRmaho9sDFk4JA',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'xWc5HPbpQvY9otey',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 9,
			mime_type : '249QS3vO7I8rhcNe',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 17,
					h : 93,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'rpWTOsD4mUyJVAC7',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1364215.353515625,
					w : 60,
					h : 23,
					preload_prefix_size : 31,
					video_start_ts : 775041.4189453125,
					video_codec : 'HRsfxrSXZwFQbAlE',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 65,
					title : 'O3wgENc2150MDqPR',
					performer : 'GMhVTUFwEqpyBKau',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'MI57BH1eCkuZaTDP',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'SDYbrfvtux4Vm53j',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : '73zrjYmtM5PnyEIH',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 1,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 13,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 41,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 78,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 51,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 15,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 44,
					language : '1xA4N09tHpnbscZG',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 76,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 20,
					user_id : -7412556591918157943,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 12,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 83,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 28,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 51,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 91,
					document_id : -3105129751443272748,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 96,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 6,
					date : 51,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 90,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 62,
					old_text : 'QyTOwYm7MR4JL0jU',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 63,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```