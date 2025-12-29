# messages.sendMessage

**Description** : *Sends a message to a chat*

**Layer** : 218

```tl
messages.sendMessage#545cd15a flags:# no_webpage:flags.1?true silent:flags.5?true background:flags.6?true clear_draft:flags.7?true noforwards:flags.14?true update_stickersets_order:flags.15?true invert_media:flags.16?true allow_paid_floodskip:flags.19?true peer:InputPeer reply_to:flags.0?InputReplyTo message:string random_id:long reply_markup:flags.2?ReplyMarkup entities:flags.3?Vector<MessageEntity> schedule_date:flags.10?int schedule_repeat_period:flags.24?int send_as:flags.13?InputPeer quick_reply_shortcut:flags.17?InputQuickReplyShortcut effect:flags.18?long allow_paid_stars:flags.21?long suggested_post:flags.22?SuggestedPost = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
| **schedule_repeat_period** | [`flags.24?int`](type/int) | NOTHING |
| **send_as** | [`flags.13?InputPeer`](type/InputPeer) | Send this message as the specified peer |
| **quick_reply_shortcut** | [`flags.17?InputQuickReplyShortcut`](type/InputQuickReplyShortcut) | Add the message to the specified quick reply shortcut », instead |
| **effect** | [`flags.18?long`](type/long) | Specifies a message effect » to use for the message |
| **allow_paid_stars** | [`flags.21?long`](type/long) | For paid messages », specifies the amount of Telegram Stars the user has agreed to pay in order to send the message |
| **suggested_post** | [`flags.22?SuggestedPost`](type/SuggestedPost) | Used to suggest a post to a channel, see here » for more info on the full flow |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ADMIN_RIGHTS_EMPTY** | `400` | The chatAdminRights constructor passed in keyboardButtonRequestPeer.peer_type.user_admin_rights has no rights set (i.e. flags is 0) |
| **ALLOW_PAYMENT_REQUIRED** | `406` | This peer only accepts paid messages »: this error is only emitted for older layers without paid messages support, so the client must be updated in order to use paid messages.   |
| **ALLOW_PAYMENT_REQUIRED_%d** | `403` | This peer charges %d Telegram Stars per message, but the allow_paid_stars was not set or its value is smaller than %d |
| **BALANCE_TOO_LOW** | `400` | The transaction cannot be completed because the current Telegram Stars balance is too low |
| **BOT_DOMAIN_INVALID** | `400` | Bot domain invalid |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **BUSINESS_CONNECTION_INVALID** | `400` | The connection_id passed to the wrapping invokeWithBusinessConnection call is invalid |
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
| **CHANNEL_MONOFORUM_UNSUPPORTED** | `400` | Monoforums do not support this feature |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_FORWARDS_RESTRICTED** | `400` | You can't forward messages from a protected chat |
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
| **PEER_TYPES_INVALID** | `400` | The passed keyboardButtonSwitchInline.peer_types field is invalid |
| **PINNED_DIALOGS_TOO_MUCH** | `400` | Too many pinned dialogs |
| **POLL_OPTION_INVALID** | `400` | Invalid poll option provided |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |
| **PRIVACY_PREMIUM_REQUIRED** | `403` | You need a Telegram Premium subscription to send a message to this user |
| **QUICK_REPLIES_BOT_NOT_ALLOWED** | `400` | Quick replies cannot be used by bots |
| **QUICK_REPLIES_TOO_MUCH** | `400` | A maximum of appConfig.quick_replies_limit shortcuts may be created, the limit was reached |
| **QUOTE_TEXT_INVALID** | `400` | The specified reply_to.quote_text field is invalid |
| **RANDOM_ID_DUPLICATE** | `500` | You provided a random ID that was already used |
| **REPLY_MARKUP_INVALID** | `400` | The provided reply markup is invalid |
| **REPLY_MARKUP_TOO_LONG** | `400` | The specified reply_markup is too long |
| **REPLY_MESSAGES_TOO_MUCH** | `400` | Each shortcut can contain a maximum of appConfig.quick_reply_messages_limit messages, the limit was reached |
| **REPLY_MESSAGE_ID_INVALID** | `400` | The specified reply-to message ID is invalid |
| **REPLY_TO_INVALID** | `400` | The specified reply_to field is invalid |
| **REPLY_TO_MONOFORUM_PEER_INVALID** | `400` | The specified inputReplyToMonoForum.monoforum_peer_id is invalid |
| **REPLY_TO_USER_INVALID** | `400` | The replied-to user is invalid |
| **SCHEDULE_BOT_NOT_ALLOWED** | `400` | Bots cannot schedule messages |
| **SCHEDULE_DATE_TOO_LATE** | `400` | You can't schedule a message this far in the future |
| **SCHEDULE_STATUS_PRIVATE** | `400` | Can't schedule until user is online, if the user's last seen timestamp is hidden by their privacy settings |
| **SCHEDULE_TOO_MUCH** | `400` | There are too many scheduled messages |
| **SEND_AS_PEER_INVALID** | `400` | You can't send messages as the specified peer |
| **SLOWMODE_WAIT_%d** | `420` | Slowmode is enabled in this chat: wait %d seconds before sending another message to this chat |
| **STORIES_NEVER_CREATED** | `400` | This peer hasn't ever posted any stories |
| **STORY_ID_INVALID** | `400` | The specified story ID is invalid |
| **SUGGESTED_POST_AMOUNT_INVALID** | `400` | The specified price for the suggested post is invalid |
| **SUGGESTED_POST_PEER_INVALID** | `400` | You cannot send suggested posts to non-monoforum peers |
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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 70,
		top_msg_id : 85,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 't9inZvKmN5jQWyC7',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 72,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 21,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 48,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 74,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 55,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 25,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 74,
				language : 'NKI9pVinJRXxBHLU',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 58,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : -525625404088886599,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 18,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 49,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 30,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 46,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 9,
				document_id : 5349442901624673228,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 89,
			),
		),
		quote_offset : 82,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 74,
	),
	message : 'Bdqu83rT4YkLzVMo',
	random_id : 5300061853374757458,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 91,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 29,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 64,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 41,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 90,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 9,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 85,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 70,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 77,
			language : '9in1I83WPFh6sXRg',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 60,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 66,
			user_id : 6218179923822852611,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 4,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 68,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 50,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 26,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 77,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 32,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 67,
			document_id : -8986006401700945784,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 56,
		),
	),
	schedule_date : 47,
	schedule_repeat_period : 44,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
	quick_reply_shortcut : $client->inputQuickReplyShortcut(
		shortcut : 'lwK1UE4tnfre0Yx9',
	),
	effect : -43286744803547412,
	allow_paid_stars : -496205684752115010,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -3618400887070355821,
			nanos : 18,
		),
		schedule_date : 25,
	),
);
```