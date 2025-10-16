# messages.setInlineBotResults

**Description** : *Answer an inline query, for bots only*

**Layer** : 216

```tl
messages.setInlineBotResults#bb12a419 flags:# gallery:flags.0?true private:flags.1?true query_id:long results:Vector<InputBotInlineResult> cache_time:int next_offset:flags.2?string switch_pm:flags.3?InlineBotSwitchPM switch_webview:flags.4?InlineBotWebView = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **gallery** | [`flags.0?true`](type/true) | Set this flag if the results are composed of media files |
| **private** | [`flags.1?true`](type/true) | Set this flag if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query |
| <mark>query_id</mark> | [`long`](type/long) | Unique identifier for the answered query |
| <mark>results</mark> | [`Vector<InputBotInlineResult>`](type/InputBotInlineResult) | Vector of results for the inline query |
| <mark>cache_time</mark> | [`int`](type/int) | The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300 |
| **next_offset** | [`flags.2?string`](type/string) | Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes |
| **switch_pm** | [`flags.3?InlineBotSwitchPM`](type/InlineBotSwitchPM) | If passed, clients will display a button on top of the remaining inline result list with the specified text, that switches the user to a private chat with the bot and sends the bot a start message with a certain parameter |
| **switch_webview** | [`flags.4?InlineBotWebView`](type/InlineBotWebView) | If passed, clients will display a button on top of the remaining inline result list with the specified text, that switches the user to the specified inline mode mini app |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ARTICLE_TITLE_EMPTY** | `400` | The title of the article is empty |
| **AUDIO_CONTENT_URL_EMPTY** | `400` | The remote URL specified in the content field is empty |
| **AUDIO_TITLE_EMPTY** | `400` | An empty audio title was provided |
| **BUTTON_DATA_INVALID** | `400` | The data of one or more of the buttons you provided is invalid |
| **BUTTON_TYPE_INVALID** | `400` | The type of one or more of the buttons you provided is invalid |
| **BUTTON_URL_INVALID** | `400` | Button URL invalid |
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |
| **FILE_CONTENT_TYPE_INVALID** | `400` | File content-type is invalid |
| **FILE_TITLE_EMPTY** | `400` | An empty file title was specified |
| **GIF_CONTENT_TYPE_INVALID** | `400` | GIF content-type invalid |
| **MESSAGE_EMPTY** | `400` | The provided message is empty |
| **MESSAGE_TOO_LONG** | `400` | The provided message is too long |
| **NEXT_OFFSET_INVALID** | `400` | The specified offset is longer than 64 bytes |
| **PEER_TYPES_INVALID** | `400` | The passed keyboardButtonSwitchInline.peer_types field is invalid |
| **PHOTO_CONTENT_TYPE_INVALID** | `400` | Photo mime-type invalid |
| **PHOTO_CONTENT_URL_EMPTY** | `400` | Photo URL invalid |
| **PHOTO_INVALID** | `400` | Photo invalid |
| **PHOTO_THUMB_URL_EMPTY** | `400` | Photo thumbnail URL is empty |
| **QUERY_ID_INVALID** | `400` | The query ID is invalid |
| **REPLY_MARKUP_INVALID** | `400` | The provided reply markup is invalid |
| **RESULTS_TOO_MUCH** | `400` | Too many results were provided |
| **RESULT_ID_DUPLICATE** | `400` | You provided a duplicate result ID |
| **RESULT_ID_INVALID** | `400` | One of the specified result IDs is invalid |
| **RESULT_TYPE_INVALID** | `400` | Result type invalid |
| **SEND_MESSAGE_MEDIA_INVALID** | `400` | Invalid media provided |
| **SEND_MESSAGE_TYPE_INVALID** | `400` | The message type is invalid |
| **START_PARAM_EMPTY** | `400` | The start parameter is empty |
| **START_PARAM_INVALID** | `400` | Start parameter invalid |
| **STICKER_DOCUMENT_INVALID** | `400` | The specified sticker document is invalid |
| **SWITCH_PM_TEXT_EMPTY** | `400` | The switch_pm.text field was empty |
| **SWITCH_WEBVIEW_URL_INVALID** | `400` | The URL specified in switch_webview.url is invalid! |
| **URL_INVALID** | `400` | Invalid URL provided |
| **USER_BOT_INVALID** | `403` | User accounts must provide the bot method parameter when calling this method. If there is no such method parameter, this method can only be invoked by bot accounts |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |
| **VIDEO_CONTENT_TYPE_INVALID** | `400` | The video's content type is invalid |
| **VIDEO_TITLE_EMPTY** | `400` | The specified video title is empty |
| **WEBDOCUMENT_INVALID** | `400` | Invalid webdocument URL provided |
| **WEBDOCUMENT_MIME_INVALID** | `400` | Invalid webdocument mime type provided |
| **WEBDOCUMENT_SIZE_TOO_BIG** | `400` | Webdocument is too big! |
| **WEBDOCUMENT_URL_INVALID** | `400` | The specified webdocument URL is invalid |

---

## Example

```php
$bool = $client->messages->setInlineBotResults(
	gallery : true,
	private : true,
	query_id : 5092172625448892564,
	results : array(
		$client->inputBotInlineResult(
			id : 'OZFqQWNEtPpHKIrM',
			type : 'oGSPKMZrEbOs5H4F',
			title : '7D6GbMfypK5VE2Ze',
			description : 'j39rw2Ovt5VAaCY8',
			url : 'https://docs.liveproto.dev',
			thumb : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 72,
				mime_type : 'XhRMxa3UKsOFyEQb',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			content : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 51,
				mime_type : 'mcVxvgTFG2j8EW3s',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'SWctCVQuU8FAE0TX',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				reply_markup : $client->replyKeyboardHide(...),
			),
		),
		$client->inputBotInlineResultPhoto(
			id : 'TpefAurh9iJ7O5o4',
			type : 'S8I1xDKRn5kemhWQ',
			photo : $client->inputPhotoEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'kwGlezYb2IuWd7jZ',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				reply_markup : $client->replyKeyboardHide(...),
			),
		),
		$client->inputBotInlineResultDocument(
			id : 'mU0gCbknPA3hvraR',
			type : 'dNq0YBiO4QxMVHKZ',
			title : 'RTP7pDoKa69jM4z2',
			description : 'u4QrITDvjYamV51l',
			document : $client->inputDocumentEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'tZ8yVx0ar6Tihdk2',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				reply_markup : $client->replyKeyboardHide(...),
			),
		),
		$client->inputBotInlineResultGame(
			id : 'Vu8jD7sIt1O4NJqn',
			short_name : 'ADX2Vc5JGnZeQMst',
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'plXU05rTNK39RA7d',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				reply_markup : $client->replyKeyboardHide(...),
			),
		),
	),
	cache_time : 46,
	next_offset : 'e4o906PpabskBFJQ',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'fV5Y23acZ07o6FER',
		start_param : '9tWHaiSoTA02yU5Y',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'eH9ERLv2yA1V4Tic',
		url : 'https://docs.liveproto.dev',
	),
);
```