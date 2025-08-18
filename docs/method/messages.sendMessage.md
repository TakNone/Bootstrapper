# messages.sendMessage

**Description** : *Sends a message to a chat*

**Layer** : 211

```tl
messages.sendMessage#fe05dc9a flags:# no_webpage:flags.1?true silent:flags.5?true background:flags.6?true clear_draft:flags.7?true noforwards:flags.14?true update_stickersets_order:flags.15?true invert_media:flags.16?true allow_paid_floodskip:flags.19?true peer:InputPeer reply_to:flags.0?InputReplyTo message:string random_id:long reply_markup:flags.2?ReplyMarkup entities:flags.3?Vector<MessageEntity> schedule_date:flags.10?int send_as:flags.13?InputPeer quick_reply_shortcut:flags.17?InputQuickReplyShortcut effect:flags.18?long allow_paid_stars:flags.21?long suggested_post:flags.22?SuggestedPost = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.1?true`](type/true) | Set this flag to disable generation of the webpage preview |
| **silent** | [`flags.5?true`](type/true) | Send this message silently (no notifications for the receivers) |
| **background** | [`flags.6?true`](type/true) | Send this message as background message |
| **clear_draft** | [`flags.7?true`](type/true) | Clear the draft field |
| **noforwards** | [`flags.14?true`](type/true) | Only for bots, disallows forwarding and saving of the messages, even if the destination chat doesn't have content protection enabled |
| **update_stickersets_order** | [`flags.15?true`](type/true) | Whether to move used stickersets to top, see here for more info on this flag » |
| **invert_media** | [`flags.16?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| **allow_paid_floodskip** | [`flags.19?true`](type/true) | Bots only: if set, allows sending up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The destination where the message will be sent |
| **reply_to** | [`flags.0?InputReplyTo`](type/InputReplyTo) | If set, indicates that the message should be sent in reply to the specified message or story. Also used to quote other messages |
| <mark>message</mark> | [`string`](type/string) | The message |
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID required to prevent message resending |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Reply markup for sending bot buttons |
| **entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for sending styled text |
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
| **ADMIN_RIGHTS_EMPTY** | `400` | The chatAdminRights constructor passed in keyboardButtonRequestPeer.peer_type.user_admin_rights has no rights set (i.e. flags is 0) |
| **BOT_DOMAIN_INVALID** | `400` | Bot domain invalid |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **BUSINESS_PEER_INVALID** | `400` | Messages can't be set to the specified peer through the current business connection |
| **BUSINESS_PEER_USAGE_MISSING** | `400` | You cannot send a message to a user through a business connection if the user hasn't recently contacted us |
| **BUTTON_COPY_TEXT_INVALID** | `400` | The specified keyboardButtonCopy.copy_text is invalid |
| **BUTTON_DATA_INVALID** | `400` | The data of one or more of the buttons you provided is invalid |
| **BUTTON_ID_INVALID** | `400` | The specified button ID is invalid |
| **BUTTON_TYPE_INVALID** | `400` | The type of one or more of the buttons you provided is invalid |
| **BUTTON_URL_INVALID** | `400` | Button URL invalid |
| **BUTTON_USER_INVALID** | `400` | The user_id passed to inputKeyboardButtonUserProfile is invalid! |
| **BUTTON_USER_PRIVACY_RESTRICTED** | `400` | The privacy setting of the user specified in a inputKeyboardButtonUserProfile button do not allow creating such a button |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_GUEST_SEND_FORBIDDEN** | `403` | You join the discussion group before commenting, see here » for more info |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_RESTRICTED** | `400` | You can't send messages in this chat, you were restricted |
| **CHAT_SEND_PLAIN_FORBIDDEN** | `403` | You can't send non-media (text) messages in this chat |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |
| **ENCRYPTION_DECLINED** | `400` | The secret chat was declined |
| **ENTITIES_TOO_LONG** | `400` | You provided too many styled message entities |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **ENTITY_MENTION_USER_INVALID** | `400` | You mentioned an invalid user |
| **FROM_MESSAGE_BOT_DISABLED** | `400` | Bots can't use fromMessage min constructors |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MESSAGE_EMPTY** | `400` | The provided message is empty |
| **MESSAGE_TOO_LONG** | `400` | The provided message is too long |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **MSG_WAIT_FAILED** | `500` | A waiting call returned an error |
| **PAYMENT_UNSUPPORTED** | `406` | A detailed description of the error will be received separately as described here » |
| **PEER_ID_INVALID** | `404` | The provided peer id is invalid |
| **PINNED_DIALOGS_TOO_MUCH** | `400` | Too many pinned dialogs |
| **POLL_OPTION_INVALID** | `400` | Invalid poll option provided |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |
| **PRIVACY_PREMIUM_REQUIRED** | `406` | You need a Telegram Premium subscription to send a message to this user |
| **QUICK_REPLIES_TOO_MUCH** | `400` | A maximum of appConfig.quick_replies_limit shortcuts may be created, the limit was reached |
| **QUOTE_TEXT_INVALID** | `400` | The specified reply_to.quote_text field is invalid |
| **RANDOM_ID_DUPLICATE** | `500` | You provided a random ID that was already used |
| **REPLY_MARKUP_INVALID** | `400` | The provided reply markup is invalid |
| **REPLY_MARKUP_TOO_LONG** | `400` | The specified reply_markup is too long |
| **REPLY_MESSAGES_TOO_MUCH** | `400` | Each shortcut can contain a maximum of appConfig.quick_reply_messages_limit messages, the limit was reached |
| **REPLY_MESSAGE_ID_INVALID** | `400` | The specified reply-to message ID is invalid |
| **REPLY_TO_INVALID** | `400` | The specified reply_to field is invalid |
| **REPLY_TO_USER_INVALID** | `400` | The replied-to user is invalid |
| **SCHEDULE_BOT_NOT_ALLOWED** | `400` | Bots cannot schedule messages |
| **SCHEDULE_DATE_TOO_LATE** | `400` | You can't schedule a message this far in the future |
| **SCHEDULE_STATUS_PRIVATE** | `400` | Can't schedule until user is online, if the user's last seen timestamp is hidden by their privacy settings |
| **SCHEDULE_TOO_MUCH** | `400` | There are too many scheduled messages |
| **SEND_AS_PEER_INVALID** | `400` | You can't send messages as the specified peer |
| **SLOWMODE_WAIT_%d** | `420` | Slowmode is enabled in this chat: wait %d seconds before sending another message to this chat |
| **STORY_ID_INVALID** | `400` | The specified story ID is invalid |
| **TOPIC_CLOSED** | `406` | This topic was closed, you can't send messages to it anymore |
| **TOPIC_DELETED** | `406` | The specified topic was deleted |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |
| **USER_IS_BLOCKED** | `403` | You were blocked by this user |
| **USER_IS_BOT** | `400` | Bots can't send messages to other bots |
| **WC_CONVERT_URL_INVALID** | `400` | WC convert URL invalid |
| **YOU_BLOCKED_USER** | `400` | You blocked this user |

---

## Example

```php
$updates = $client->messages->sendMessage(
	no_webpage : true,
	silent : true,
	background : true,
	clear_draft : true,
	noforwards : true,
	update_stickersets_order : true,
	invert_media : true,
	allow_paid_floodskip : true,
	peer : $client->inputPeerEmpty(),
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 97,
		top_msg_id : 17,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'xSB04fqArFMEionw',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 18,
				length : 72,
			),
			$client->messageEntityMention(
				offset : 17,
				length : 16,
			),
			$client->messageEntityHashtag(
				offset : 57,
				length : 42,
			),
			$client->messageEntityBotCommand(
				offset : 100,
				length : 7,
			),
			$client->messageEntityUrl(
				offset : 89,
				length : 63,
			),
			$client->messageEntityEmail(
				offset : 27,
				length : 17,
			),
			$client->messageEntityBold(
				offset : 32,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 75,
				length : 51,
			),
			$client->messageEntityCode(
				offset : 57,
				length : 16,
			),
			$client->messageEntityPre(
				offset : 50,
				length : 97,
				language : 'IcZqs1yLuegnS7Rf',
			),
			$client->messageEntityTextUrl(
				offset : 30,
				length : 68,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 77,
				length : 30,
				user_id : -6796307990402942854,
			),
			$client->inputMessageEntityMentionName(
				offset : 84,
				length : 28,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 83,
				length : 50,
			),
			$client->messageEntityCashtag(
				offset : 24,
				length : 5,
			),
			$client->messageEntityUnderline(
				offset : 44,
				length : 34,
			),
			$client->messageEntityStrike(
				offset : 26,
				length : 43,
			),
			$client->messageEntityBankCard(
				offset : 38,
				length : 33,
			),
			$client->messageEntitySpoiler(
				offset : 74,
				length : 50,
			),
			$client->messageEntityCustomEmoji(
				offset : 95,
				length : 71,
				document_id : 8181409607236127051,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 97,
				length : 15,
			),
		),
		quote_offset : 11,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 43,
	),
	message : 'bfVKuAhYHlR07QMq',
	random_id : 4868941223211653586,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 82,
			length : 99,
		),
		$client->messageEntityMention(
			offset : 33,
			length : 26,
		),
		$client->messageEntityHashtag(
			offset : 29,
			length : 51,
		),
		$client->messageEntityBotCommand(
			offset : 83,
			length : 73,
		),
		$client->messageEntityUrl(
			offset : 99,
			length : 18,
		),
		$client->messageEntityEmail(
			offset : 5,
			length : 30,
		),
		$client->messageEntityBold(
			offset : 22,
			length : 48,
		),
		$client->messageEntityItalic(
			offset : 81,
			length : 65,
		),
		$client->messageEntityCode(
			offset : 92,
			length : 22,
		),
		$client->messageEntityPre(
			offset : 60,
			length : 84,
			language : 'tnP3JoH6ylLC9RcD',
		),
		$client->messageEntityTextUrl(
			offset : 69,
			length : 73,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 87,
			length : 5,
			user_id : 981619637880870654,
		),
		$client->inputMessageEntityMentionName(
			offset : 64,
			length : 82,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 23,
			length : 84,
		),
		$client->messageEntityCashtag(
			offset : 43,
			length : 5,
		),
		$client->messageEntityUnderline(
			offset : 85,
			length : 70,
		),
		$client->messageEntityStrike(
			offset : 69,
			length : 58,
		),
		$client->messageEntityBankCard(
			offset : 33,
			length : 69,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 87,
		),
		$client->messageEntityCustomEmoji(
			offset : 70,
			length : 96,
			document_id : 2539272499622875990,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 98,
			length : 32,
		),
	),
	schedule_date : 75,
	send_as : $client->inputPeerEmpty(),
	quick_reply_shortcut : $client->inputQuickReplyShortcut(
		shortcut : 'OSlZF7z86dEr0pcb',
	),
	effect : 6518308031348448931,
	allow_paid_stars : -4385378373800379005,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -1659543595353231671,
			nanos : 90,
		),
		schedule_date : 83,
	),
);
```