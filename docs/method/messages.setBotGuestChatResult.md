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
	query_id : -5001198865216574427,
	result : $client->inputBotInlineResult(
		id : 'mPfrW6cLtzHg5jhX',
		type : 'KyBtGdMA7P1xw9ZL',
		title : 'W5wNX7C9daRbVBkZ',
		description : 'jops4XIfbdYvTn3i',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 22,
			mime_type : 'NmDwxcfqb42nu63X',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 58,
					h : 78,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'u6fsUxILi54Sjbar',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -478443.1064453125,
					w : 85,
					h : 98,
					preload_prefix_size : 8,
					video_start_ts : 491730.841796875,
					video_codec : 'lVS5n2yORqN1faX7',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 75,
					title : 'MEBr37WKeLZ5fbuy',
					performer : 'JHeNO7gE48YB1vid',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'eF9YQ53M8kZbiIL6',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'R6LyjOFfUMoxhi5C',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 81,
			mime_type : 'nidkoOhX6Z3tp1IG',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 56,
					h : 82,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'C8PhmJ4Ert2ipn6x',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1684166.185546875,
					w : 17,
					h : 17,
					preload_prefix_size : 19,
					video_start_ts : -2075110.361328125,
					video_codec : 'aQLqdSn1WxV86rMk',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 5,
					title : 'qAKu2JSzhy18I7eo',
					performer : 'Ekm6iHUqOYa4Xhb8',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'tCMmWyxugUeFQLN0',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '2be9wvnZQ5BAY6H4',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : '1nctozfBJadmhwMO',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 9,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 19,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 26,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 85,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 85,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 51,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 31,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 14,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 10,
					language : 'ygrYi1qJuoIB90Os',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 43,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 64,
					user_id : -5672971986752437596,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 19,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 51,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 76,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 2,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 47,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 50,
					document_id : 5926481235100446914,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 99,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 84,
					date : 23,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 7,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 58,
					old_text : 'bUXinSsxaq7gO3EK',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 68,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```