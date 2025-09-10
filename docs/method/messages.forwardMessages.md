# messages.forwardMessages

**Description** : *Forwards messages by their IDs*

**Layer** : 214

```tl
messages.forwardMessages#978928ca flags:# silent:flags.5?true background:flags.6?true with_my_score:flags.8?true drop_author:flags.11?true drop_media_captions:flags.12?true noforwards:flags.14?true allow_paid_floodskip:flags.19?true from_peer:InputPeer id:Vector<int> random_id:Vector<long> to_peer:InputPeer top_msg_id:flags.9?int reply_to:flags.22?InputReplyTo schedule_date:flags.10?int send_as:flags.13?InputPeer quick_reply_shortcut:flags.17?InputQuickReplyShortcut video_timestamp:flags.20?int allow_paid_stars:flags.21?long suggested_post:flags.23?SuggestedPost = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **silent** | [`flags.5?true`](type/true) | Whether to send messages silently (no notification will be triggered on the destination clients) |
| **background** | [`flags.6?true`](type/true) | Whether to send the message in background |
| **with_my_score** | [`flags.8?true`](type/true) | When forwarding games, whether to include your score in the game |
| **drop_author** | [`flags.11?true`](type/true) | Whether to forward messages without quoting the original author |
| **drop_media_captions** | [`flags.12?true`](type/true) | Whether to strip captions from media |
| **noforwards** | [`flags.14?true`](type/true) | Only for bots, disallows further re-forwarding and saving of the messages, even if the destination chat doesn't have content protection enabled |
| **allow_paid_floodskip** | [`flags.19?true`](type/true) | Bots only: if set, allows sending up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance |
| <mark>from_peer</mark> | [`InputPeer`](type/InputPeer) | Source of messages |
| <mark>id</mark> | [`Vector<int>`](type/int) | IDs of messages |
| <mark>random_id</mark> | [`Vector<long>`](type/long) | Random ID to prevent resending of messages |
| <mark>to_peer</mark> | [`InputPeer`](type/InputPeer) | Destination peer |
| **top_msg_id** | [`flags.9?int`](type/int) | Destination forum topic |
| **reply_to** | [`flags.22?InputReplyTo`](type/InputReplyTo) | NOTHING |
| **schedule_date** | [`flags.10?int`](type/int) | Scheduled message date for scheduled messages |
| **send_as** | [`flags.13?InputPeer`](type/InputPeer) | Forward the messages as the specified peer |
| **quick_reply_shortcut** | [`flags.17?InputQuickReplyShortcut`](type/InputQuickReplyShortcut) | Add the messages to the specified quick reply shortcut », instead |
| **video_timestamp** | [`flags.20?int`](type/int) | NOTHING |
| **allow_paid_stars** | [`flags.21?long`](type/long) | NOTHING |
| **suggested_post** | [`flags.23?SuggestedPost`](type/SuggestedPost) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BROADCAST_PUBLIC_VOTERS_FORBIDDEN** | `400` | You can't forward polls with public voters |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_FORWARDS_RESTRICTED** | `406` | You can't forward messages from a protected chat |
| **CHAT_GUEST_SEND_FORBIDDEN** | `403` | You join the discussion group before commenting, see here » for more info |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_RESTRICTED** | `400` | You can't send messages in this chat, you were restricted |
| **CHAT_SEND_AUDIOS_FORBIDDEN** | `403` | You can't send audio messages in this chat |
| **CHAT_SEND_DOCS_FORBIDDEN** | `403` | You can't send documents in this chat |
| **CHAT_SEND_GAME_FORBIDDEN** | `403` | You can't send a game to this chat |
| **CHAT_SEND_GIFS_FORBIDDEN** | `403` | You can't send gifs in this chat |
| **CHAT_SEND_MEDIA_FORBIDDEN** | `403` | You can't send media in this chat |
| **CHAT_SEND_PHOTOS_FORBIDDEN** | `403` | You can't send photos in this chat |
| **CHAT_SEND_PLAIN_FORBIDDEN** | `403` | You can't send non-media (text) messages in this chat |
| **CHAT_SEND_POLL_FORBIDDEN** | `403` | You can't send polls in this chat |
| **CHAT_SEND_STICKERS_FORBIDDEN** | `403` | You can't send stickers in this chat |
| **CHAT_SEND_VIDEOS_FORBIDDEN** | `403` | You can't send videos in this chat |
| **CHAT_SEND_VOICES_FORBIDDEN** | `403` | You can't send voice recordings in this chat |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **GROUPED_MEDIA_INVALID** | `400` | Invalid grouped media |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MEDIA_EMPTY** | `400` | The provided media object is invalid |
| **MESSAGE_IDS_EMPTY** | `400` | No message ids were provided |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PAYMENT_UNSUPPORTED** | `406` | A detailed description of the error will be received separately as described here » |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |
| **PRIVACY_PREMIUM_REQUIRED** | `406` | You need a Telegram Premium subscription to send a message to this user |
| **QUICK_REPLIES_TOO_MUCH** | `400` | A maximum of appConfig.quick_replies_limit shortcuts may be created, the limit was reached |
| **QUIZ_ANSWER_MISSING** | `400` | You can forward a quiz while hiding the original author only after choosing an option in the quiz |
| **RANDOM_ID_DUPLICATE** | `500` | You provided a random ID that was already used |
| **RANDOM_ID_INVALID** | `400` | A provided random ID is invalid |
| **REPLY_MESSAGES_TOO_MUCH** | `400` | Each shortcut can contain a maximum of appConfig.quick_reply_messages_limit messages, the limit was reached |
| **SCHEDULE_BOT_NOT_ALLOWED** | `400` | Bots cannot schedule messages |
| **SCHEDULE_DATE_TOO_LATE** | `400` | You can't schedule a message this far in the future |
| **SCHEDULE_TOO_MUCH** | `400` | There are too many scheduled messages |
| **SEND_AS_PEER_INVALID** | `400` | You can't send messages as the specified peer |
| **SLOWMODE_MULTI_MSGS_DISABLED** | `400` | Slowmode is enabled, you cannot forward multiple messages to this group |
| **SLOWMODE_WAIT_%d** | `420` | Slowmode is enabled in this chat: wait %d seconds before sending another message to this chat |
| **TOPIC_CLOSED** | `406` | This topic was closed, you can't send messages to it anymore |
| **TOPIC_DELETED** | `406` | The specified topic was deleted |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |
| **USER_IS_BLOCKED** | `403` | You were blocked by this user |
| **USER_IS_BOT** | `400` | Bots can't send messages to other bots |
| **VOICE_MESSAGES_FORBIDDEN** | `403` | This user's privacy settings forbid you from sending voice messages |
| **YOU_BLOCKED_USER** | `400` | You blocked this user |

---

## Example

```php
$updates = $client->messages->forwardMessages(
	silent : true,
	background : true,
	with_my_score : true,
	drop_author : true,
	drop_media_captions : true,
	noforwards : true,
	allow_paid_floodskip : true,
	from_peer : $client->inputPeerEmpty(),
	id : array(64),
	random_id : array(-2492707861172772282),
	to_peer : $client->inputPeerEmpty(),
	top_msg_id : 15,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 48,
		top_msg_id : 77,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'gCfvWeYpc6K0ljm3',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 55,
				length : 43,
			),
			$client->messageEntityMention(
				offset : 82,
				length : 52,
			),
			$client->messageEntityHashtag(
				offset : 31,
				length : 44,
			),
			$client->messageEntityBotCommand(
				offset : 26,
				length : 82,
			),
			$client->messageEntityUrl(
				offset : 1,
				length : 10,
			),
			$client->messageEntityEmail(
				offset : 74,
				length : 7,
			),
			$client->messageEntityBold(
				offset : 87,
				length : 51,
			),
			$client->messageEntityItalic(
				offset : 72,
				length : 64,
			),
			$client->messageEntityCode(
				offset : 10,
				length : 100,
			),
			$client->messageEntityPre(
				offset : 34,
				length : 63,
				language : '8ed2tXmFVhaxcQn5',
			),
			$client->messageEntityTextUrl(
				offset : 72,
				length : 37,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 24,
				length : 49,
				user_id : -6041777104109078423,
			),
			$client->inputMessageEntityMentionName(
				offset : 94,
				length : 85,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 39,
				length : 99,
			),
			$client->messageEntityCashtag(
				offset : 61,
				length : 98,
			),
			$client->messageEntityUnderline(
				offset : 73,
				length : 6,
			),
			$client->messageEntityStrike(
				offset : 86,
				length : 77,
			),
			$client->messageEntityBankCard(
				offset : 88,
				length : 15,
			),
			$client->messageEntitySpoiler(
				offset : 14,
				length : 55,
			),
			$client->messageEntityCustomEmoji(
				offset : 61,
				length : 42,
				document_id : 3386129366686280399,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 61,
				length : 55,
			),
		),
		quote_offset : 14,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 70,
	),
	schedule_date : 26,
	send_as : $client->inputPeerEmpty(),
	quick_reply_shortcut : $client->inputQuickReplyShortcut(
		shortcut : 'tgMjw3RByHGQxEhS',
	),
	video_timestamp : 8,
	allow_paid_stars : 2469848141842588300,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 6316477089288434431,
			nanos : 49,
		),
		schedule_date : 92,
	),
);
```