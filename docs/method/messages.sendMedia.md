# messages.sendMedia

**Description** : *Send a media*

**Layer** : 214

```tl
messages.sendMedia#ac55d9c1 flags:# silent:flags.5?true background:flags.6?true clear_draft:flags.7?true noforwards:flags.14?true update_stickersets_order:flags.15?true invert_media:flags.16?true allow_paid_floodskip:flags.19?true peer:InputPeer reply_to:flags.0?InputReplyTo media:InputMedia message:string random_id:long reply_markup:flags.2?ReplyMarkup entities:flags.3?Vector<MessageEntity> schedule_date:flags.10?int send_as:flags.13?InputPeer quick_reply_shortcut:flags.17?InputQuickReplyShortcut effect:flags.18?long allow_paid_stars:flags.21?long suggested_post:flags.22?SuggestedPost = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **silent** | [`flags.5?true`](type/true) | Send message silently (no notification should be triggered) |
| **background** | [`flags.6?true`](type/true) | Send message in background |
| **clear_draft** | [`flags.7?true`](type/true) | Clear the draft |
| **noforwards** | [`flags.14?true`](type/true) | Only for bots, disallows forwarding and saving of the messages, even if the destination chat doesn't have content protection enabled |
| **update_stickersets_order** | [`flags.15?true`](type/true) | Whether to move used stickersets to top, see here for more info on this flag » |
| **invert_media** | [`flags.16?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| **allow_paid_floodskip** | [`flags.19?true`](type/true) | Bots only: if set, allows sending up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Destination |
| **reply_to** | [`flags.0?InputReplyTo`](type/InputReplyTo) | If set, indicates that the message should be sent in reply to the specified message or story |
| <mark>media</mark> | [`InputMedia`](type/InputMedia) | Attached media |
| <mark>message</mark> | [`string`](type/string) | Caption |
| <mark>random_id</mark> | [`long`](type/long) | Random ID to avoid resending the same message |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Reply markup for bot keyboards |
| **entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **schedule_date** | [`flags.10?int`](type/int) | Scheduled message date for scheduled messages |
| **send_as** | [`flags.13?InputPeer`](type/InputPeer) | Send this message as the specified peer |
| **quick_reply_shortcut** | [`flags.17?InputQuickReplyShortcut`](type/InputQuickReplyShortcut) | Add the message to the specified quick reply shortcut », instead |
| **effect** | [`flags.18?long`](type/long) | Specifies a message effect » to use for the message |
| **allow_paid_stars** | [`flags.21?long`](type/long) | NOTHING |
| **suggested_post** | [`flags.22?SuggestedPost`](type/SuggestedPost) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_GAMES_DISABLED** | `400` | Games can't be sent to channels |
| **BOT_PAYMENTS_DISABLED** | `400` | Please enable bot payments in botfather before calling this method |
| **BROADCAST_PUBLIC_VOTERS_FORBIDDEN** | `400` | You can't forward polls with public voters |
| **BUSINESS_PEER_INVALID** | `400` | Messages can't be set to the specified peer through the current business connection |
| **BUTTON_COPY_TEXT_INVALID** | `400` | The specified keyboardButtonCopy.copy_text is invalid |
| **BUTTON_DATA_INVALID** | `400` | The data of one or more of the buttons you provided is invalid |
| **BUTTON_POS_INVALID** | `400` | The position of one of the keyboard buttons is invalid (i.e. a Game or Pay button not in the first position, and so on...) |
| **BUTTON_TYPE_INVALID** | `400` | The type of one or more of the buttons you provided is invalid |
| **BUTTON_URL_INVALID** | `400` | Button URL invalid |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_FORWARDS_RESTRICTED** | `400` | You can't forward messages from a protected chat |
| **CHAT_GUEST_SEND_FORBIDDEN** | `403` | You join the discussion group before commenting, see here » for more info |
| **CHAT_RESTRICTED** | `400` | You can't send messages in this chat, you were restricted |
| **CHAT_SEND_AUDIOS_FORBIDDEN** | `403` | You can't send audio messages in this chat |
| **CHAT_SEND_DOCS_FORBIDDEN** | `403` | You can't send documents in this chat |
| **CHAT_SEND_GIFS_FORBIDDEN** | `403` | You can't send gifs in this chat |
| **CHAT_SEND_MEDIA_FORBIDDEN** | `403` | You can't send media in this chat |
| **CHAT_SEND_PHOTOS_FORBIDDEN** | `403` | You can't send photos in this chat |
| **CHAT_SEND_PLAIN_FORBIDDEN** | `403` | You can't send non-media (text) messages in this chat |
| **CHAT_SEND_POLL_FORBIDDEN** | `403` | You can't send polls in this chat |
| **CHAT_SEND_ROUNDVIDEOS_FORBIDDEN** | `403` | You can't send round videos to this chat |
| **CHAT_SEND_STICKERS_FORBIDDEN** | `403` | You can't send stickers in this chat |
| **CHAT_SEND_VIDEOS_FORBIDDEN** | `403` | You can't send videos in this chat |
| **CHAT_SEND_VOICES_FORBIDDEN** | `403` | You can't send voice recordings in this chat |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **CURRENCY_TOTAL_AMOUNT_INVALID** | `400` | The total amount of all prices is invalid |
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |
| **EMOTICON_INVALID** | `400` | The specified emoji is invalid |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **EXTENDED_MEDIA_AMOUNT_INVALID** | `400` | The specified stars_amount of the passed inputMediaPaidMedia is invalid |
| **EXTERNAL_URL_INVALID** | `400` | External URL invalid |
| **FILE_PARTS_INVALID** | `400` | The number of file parts is invalid |
| **FILE_PART_LENGTH_INVALID** | `400` | The length of a file part is invalid |
| **FILE_REFERENCE_EMPTY** | `400` | An empty file reference was specified |
| **FILE_REFERENCE_EXPIRED** | `400` | File reference expired, it must be refetched as described in the documentation |
| **GAME_BOT_INVALID** | `400` | Bots can't send another bot's game |
| **IMAGE_PROCESS_FAILED** | `400` | Failure while processing image |
| **INPUT_FILE_INVALID** | `400` | The specified InputFile is invalid |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **INVOICE_PAYLOAD_INVALID** | `400` | The specified invoice payload is invalid |
| **MD5_CHECKSUM_INVALID** | `400` | The MD5 checksums do not match |
| **MEDIA_CAPTION_TOO_LONG** | `400` | The caption is too long |
| **MEDIA_EMPTY** | `400` | The provided media object is invalid |
| **MEDIA_INVALID** | `400` | Media invalid |
| **MESSAGE_EMPTY** | `400` | The provided message is empty |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PAYMENT_PROVIDER_INVALID** | `400` | The specified payment provider is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PHOTO_EXT_INVALID** | `400` | The extension of the photo is invalid |
| **PHOTO_INVALID_DIMENSIONS** | `400` | The photo dimensions are invalid |
| **PHOTO_SAVE_FILE_INVALID** | `400` | Internal issues, try again later |
| **POLL_ANSWERS_INVALID** | `400` | Invalid poll answers were provided |
| **POLL_ANSWER_INVALID** | `400` | One of the poll answers is not acceptable |
| **POLL_OPTION_DUPLICATE** | `400` | Duplicate poll options provided |
| **POLL_OPTION_INVALID** | `400` | Invalid poll option provided |
| **POLL_QUESTION_INVALID** | `400` | One of the poll questions is not acceptable |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |
| **PRIVACY_PREMIUM_REQUIRED** | `403` | You need a Telegram Premium subscription to send a message to this user |
| **QUICK_REPLIES_TOO_MUCH** | `400` | A maximum of appConfig.quick_replies_limit shortcuts may be created, the limit was reached |
| **QUIZ_CORRECT_ANSWERS_EMPTY** | `400` | No correct quiz answer was specified |
| **QUIZ_CORRECT_ANSWERS_TOO_MUCH** | `400` | You specified too many correct answers in a quiz, quizzes can only have one right answer! |
| **QUIZ_CORRECT_ANSWER_INVALID** | `400` | An invalid value was provided to the correct_answers field |
| **QUIZ_MULTIPLE_INVALID** | `400` | Quizzes can't have the multiple_choice flag set! |
| **RANDOM_ID_DUPLICATE** | `500` | You provided a random ID that was already used |
| **REPLY_MARKUP_BUY_EMPTY** | `400` | Reply markup for buy button empty |
| **REPLY_MARKUP_GAME_EMPTY** | `400` | A game message is being edited, but the newly provided keyboard doesn't have a keyboardButtonGame button |
| **REPLY_MARKUP_INVALID** | `400` | The provided reply markup is invalid |
| **REPLY_MARKUP_TOO_LONG** | `400` | The specified reply_markup is too long |
| **REPLY_MESSAGES_TOO_MUCH** | `400` | Each shortcut can contain a maximum of appConfig.quick_reply_messages_limit messages, the limit was reached |
| **SCHEDULE_BOT_NOT_ALLOWED** | `400` | Bots cannot schedule messages |
| **SCHEDULE_DATE_TOO_LATE** | `400` | You can't schedule a message this far in the future |
| **SCHEDULE_TOO_MUCH** | `400` | There are too many scheduled messages |
| **SEND_AS_PEER_INVALID** | `400` | You can't send messages as the specified peer |
| **SLOWMODE_WAIT_%d** | `420` | Slowmode is enabled in this chat: wait %d seconds before sending another message to this chat |
| **STARS_INVOICE_INVALID** | `400` | The specified Telegram Star invoice is invalid |
| **STORY_ID_INVALID** | `400` | The specified story ID is invalid |
| **SUBSCRIPTION_EXPORT_MISSING** | `400` | You cannot send a bot subscription invoice directly, you may only create invoice links using payments.exportInvoice |
| **TERMS_URL_INVALID** | `400` | The specified invoice.terms_url is invalid |
| **TOPIC_CLOSED** | `406` | This topic was closed, you can't send messages to it anymore |
| **TOPIC_DELETED** | `406` | The specified topic was deleted |
| **TTL_MEDIA_INVALID** | `400` | Invalid media Time To Live was provided |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |
| **USER_IS_BLOCKED** | `403` | You were blocked by this user |
| **USER_IS_BOT** | `400` | Bots can't send messages to other bots |
| **VIDEO_CONTENT_TYPE_INVALID** | `400` | The video's content type is invalid |
| **VOICE_MESSAGES_FORBIDDEN** | `400` | This user's privacy settings forbid you from sending voice messages |
| **WEBDOCUMENT_MIME_INVALID** | `400` | Invalid webdocument mime type provided |
| **WEBPAGE_CURL_FAILED** | `400` | Failure while fetching the webpage with cURL |
| **WEBPAGE_MEDIA_EMPTY** | `400` | Webpage media empty |
| **WEBPAGE_NOT_FOUND** | `400` | A preview for the specified webpage url could not be generated |
| **WEBPAGE_URL_INVALID** | `400` | The specified webpage url is invalid |
| **YOU_BLOCKED_USER** | `400` | You blocked this user |

---

## Example

```php
$updates = $client->messages->sendMedia(
	silent : true,
	background : true,
	clear_draft : true,
	noforwards : true,
	update_stickersets_order : true,
	invert_media : true,
	allow_paid_floodskip : true,
	peer : $client->inputPeerEmpty(),
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 78,
		top_msg_id : 72,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'uXlgAf3Irep5ySKx',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 51,
				length : 26,
			),
			$client->messageEntityMention(
				offset : 17,
				length : 56,
			),
			$client->messageEntityHashtag(
				offset : 57,
				length : 38,
			),
			$client->messageEntityBotCommand(
				offset : 33,
				length : 81,
			),
			$client->messageEntityUrl(
				offset : 16,
				length : 36,
			),
			$client->messageEntityEmail(
				offset : 42,
				length : 53,
			),
			$client->messageEntityBold(
				offset : 48,
				length : 9,
			),
			$client->messageEntityItalic(
				offset : 11,
				length : 52,
			),
			$client->messageEntityCode(
				offset : 80,
				length : 65,
			),
			$client->messageEntityPre(
				offset : 44,
				length : 82,
				language : '2SOs4oteRVWvn6xI',
			),
			$client->messageEntityTextUrl(
				offset : 45,
				length : 50,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 12,
				length : 24,
				user_id : -8333756103323417736,
			),
			$client->inputMessageEntityMentionName(
				offset : 74,
				length : 62,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 6,
				length : 40,
			),
			$client->messageEntityCashtag(
				offset : 87,
				length : 12,
			),
			$client->messageEntityUnderline(
				offset : 18,
				length : 18,
			),
			$client->messageEntityStrike(
				offset : 93,
				length : 97,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 64,
			),
			$client->messageEntitySpoiler(
				offset : 98,
				length : 84,
			),
			$client->messageEntityCustomEmoji(
				offset : 41,
				length : 35,
				document_id : 2406050273013787539,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 46,
				length : 57,
			),
		),
		quote_offset : 17,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 83,
	),
	media : $client->inputMediaEmpty(),
	message : '1bjdO8UVgM6nDkZW',
	random_id : 1852027794633297431,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 84,
			length : 28,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 31,
		),
		$client->messageEntityHashtag(
			offset : 23,
			length : 95,
		),
		$client->messageEntityBotCommand(
			offset : 86,
			length : 62,
		),
		$client->messageEntityUrl(
			offset : 19,
			length : 54,
		),
		$client->messageEntityEmail(
			offset : 97,
			length : 0,
		),
		$client->messageEntityBold(
			offset : 58,
			length : 92,
		),
		$client->messageEntityItalic(
			offset : 41,
			length : 15,
		),
		$client->messageEntityCode(
			offset : 16,
			length : 27,
		),
		$client->messageEntityPre(
			offset : 42,
			length : 9,
			language : 'jGqYJAPkx5l40Twg',
		),
		$client->messageEntityTextUrl(
			offset : 42,
			length : 94,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 47,
			length : 57,
			user_id : -4154655808451697459,
		),
		$client->inputMessageEntityMentionName(
			offset : 95,
			length : 73,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCashtag(
			offset : 75,
			length : 76,
		),
		$client->messageEntityUnderline(
			offset : 19,
			length : 42,
		),
		$client->messageEntityStrike(
			offset : 34,
			length : 78,
		),
		$client->messageEntityBankCard(
			offset : 90,
			length : 7,
		),
		$client->messageEntitySpoiler(
			offset : 45,
			length : 6,
		),
		$client->messageEntityCustomEmoji(
			offset : 47,
			length : 72,
			document_id : 175237433739183930,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 96,
			length : 26,
		),
	),
	schedule_date : 97,
	send_as : $client->inputPeerEmpty(),
	quick_reply_shortcut : $client->inputQuickReplyShortcut(
		shortcut : 'vBUks5aj4y9lL0nw',
	),
	effect : 6528419349181184528,
	allow_paid_stars : 5733895525406984094,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 2004269713606119219,
			nanos : 55,
		),
		schedule_date : 11,
	),
);
```