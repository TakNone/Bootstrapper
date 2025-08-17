# messages.editMessage

**Description** : *Edit message*

**Layer** : 211

```tl
messages.editMessage#dfd14005 flags:# no_webpage:flags.1?true invert_media:flags.16?true peer:InputPeer id:int message:flags.11?string media:flags.14?InputMedia reply_markup:flags.2?ReplyMarkup entities:flags.3?Vector<MessageEntity> schedule_date:flags.15?int quick_reply_shortcut_id:flags.17?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.1?true`](type/true) | Disable webpage preview |
| **invert_media** | [`flags.16?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Where was the message sent |
| <mark>id</mark> | [`int`](type/int) | ID of the message to edit |
| **message** | [`flags.11?string`](type/string) | New message |
| **media** | [`flags.14?InputMedia`](type/InputMedia) | New attached media |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Reply markup for inline keyboards |
| **entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **schedule_date** | [`flags.15?int`](type/int) | Scheduled message date for scheduled messages |
| **quick_reply_shortcut_id** | [`flags.17?int`](type/int) | If specified, edits a quick reply shortcut message, instead » |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_DOMAIN_INVALID** | `400` | Bot domain invalid |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **BUTTON_COPY_TEXT_INVALID** | `400` | The specified keyboardButtonCopy.copy_text is invalid |
| **BUTTON_DATA_INVALID** | `400` | The data of one or more of the buttons you provided is invalid |
| **BUTTON_TYPE_INVALID** | `400` | The type of one or more of the buttons you provided is invalid |
| **BUTTON_URL_INVALID** | `400` | Button URL invalid |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_FORWARDS_RESTRICTED** | `400` | You can't forward messages from a protected chat |
| **CHAT_SEND_GIFS_FORBIDDEN** | `403` | You can't send gifs in this chat |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |
| **ENTITIES_TOO_LONG** | `400` | You provided too many styled message entities |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **FILE_PARTS_INVALID** | `400` | The number of file parts is invalid |
| **IMAGE_PROCESS_FAILED** | `400` | Failure while processing image |
| **INLINE_BOT_REQUIRED** | `403` | Only the inline bot can edit message |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MEDIA_CAPTION_TOO_LONG** | `400` | The caption is too long |
| **MEDIA_EMPTY** | `400` | The provided media object is invalid |
| **MEDIA_GROUPED_INVALID** | `400` | You tried to send media of different types in an album |
| **MEDIA_INVALID** | `400` | Media invalid |
| **MEDIA_NEW_INVALID** | `400` | The new media is invalid |
| **MEDIA_PREV_INVALID** | `400` | Previous media invalid |
| **MEDIA_TTL_INVALID** | `400` | The specified media TTL is invalid |
| **MESSAGE_AUTHOR_REQUIRED** | `403` | Message author required |
| **MESSAGE_EDIT_TIME_EXPIRED** | `400` | You can't edit this message anymore, too much time has passed since its creation |
| **MESSAGE_EMPTY** | `400` | The provided message is empty |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **MESSAGE_NOT_MODIFIED** | `400` | The provided message data is identical to the previous message data, the message wasn't modified |
| **MESSAGE_TOO_LONG** | `400` | The provided message is too long |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **MSG_WAIT_FAILED** | `500` | A waiting call returned an error |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PEER_TYPES_INVALID** | `400` | The passed keyboardButtonSwitchInline.peer_types field is invalid |
| **REPLY_MARKUP_INVALID** | `400` | The provided reply markup is invalid |
| **REPLY_MARKUP_TOO_LONG** | `400` | The specified reply_markup is too long |
| **SCHEDULE_DATE_INVALID** | `400` | Invalid schedule date provided |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |
| **WEBPAGE_NOT_FOUND** | `400` | A preview for the specified webpage url could not be generated |

---

## Example

```php
$updates = $client->messages->editMessage(
	no_webpage : true,
	invert_media : true,
	peer : $client->inputPeerEmpty(),
	id : 15,
	message : 'K7H8wxCXdFV3G9W6',
	media : $client->inputMediaEmpty(),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 78,
			length : 70,
		),
		$client->messageEntityMention(
			offset : 74,
			length : 3,
		),
		$client->messageEntityHashtag(
			offset : 5,
			length : 79,
		),
		$client->messageEntityBotCommand(
			offset : 71,
			length : 81,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 62,
		),
		$client->messageEntityEmail(
			offset : 41,
			length : 18,
		),
		$client->messageEntityBold(
			offset : 45,
			length : 16,
		),
		$client->messageEntityItalic(
			offset : 55,
			length : 92,
		),
		$client->messageEntityCode(
			offset : 46,
			length : 48,
		),
		$client->messageEntityPre(
			offset : 29,
			length : 70,
			language : 'fq45dUwlHLyD87JZ',
		),
		$client->messageEntityTextUrl(
			offset : 99,
			length : 47,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 1,
			length : 92,
			user_id : 1407299712678324955,
		),
		$client->inputMessageEntityMentionName(
			offset : 93,
			length : 5,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 99,
			length : 48,
		),
		$client->messageEntityCashtag(
			offset : 62,
			length : 8,
		),
		$client->messageEntityUnderline(
			offset : 97,
			length : 63,
		),
		$client->messageEntityStrike(
			offset : 72,
			length : 78,
		),
		$client->messageEntityBankCard(
			offset : 16,
			length : 80,
		),
		$client->messageEntitySpoiler(
			offset : 53,
			length : 11,
		),
		$client->messageEntityCustomEmoji(
			offset : 32,
			length : 57,
			document_id : -5086051868414014331,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 37,
			length : 51,
		),
	),
	schedule_date : 26,
	quick_reply_shortcut_id : 48,
);
```