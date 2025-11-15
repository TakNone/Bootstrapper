# messages.sendInlineBotResult

**Description** : *Send a result obtained using messages\.getInlineBotResults*

**Layer** : 216

```tl
messages.sendInlineBotResult#c0cf7646 flags:# silent:flags.5?true background:flags.6?true clear_draft:flags.7?true hide_via:flags.11?true peer:InputPeer reply_to:flags.0?InputReplyTo random_id:long query_id:long id:string schedule_date:flags.10?int send_as:flags.13?InputPeer quick_reply_shortcut:flags.17?InputQuickReplyShortcut allow_paid_stars:flags.21?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **silent** | [`flags.5?true`](type/true) | Whether to send the message silently (no notification will be triggered on the other client) |
| **background** | [`flags.6?true`](type/true) | Whether to send the message in background |
| **clear_draft** | [`flags.7?true`](type/true) | Whether to clear the draft |
| **hide_via** | [`flags.11?true`](type/true) | Whether to hide the via @botname in the resulting message (only for bot usernames encountered in the config) |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Destination |
| **reply_to** | [`flags.0?InputReplyTo`](type/InputReplyTo) | If set, indicates that the message should be sent in reply to the specified message or story |
| <mark>random_id</mark> | [`long`](type/long) | Random ID to avoid resending the same query |
| <mark>query_id</mark> | [`long`](type/long) | Query ID from messages.getInlineBotResults |
| <mark>id</mark> | [`string`](type/string) | Result ID from messages.getInlineBotResults |
| **schedule_date** | [`flags.10?int`](type/int) | Scheduled message date for scheduled messages |
| **send_as** | [`flags.13?InputPeer`](type/InputPeer) | Send this message as the specified peer |
| **quick_reply_shortcut** | [`flags.17?InputQuickReplyShortcut`](type/InputQuickReplyShortcut) | Add the message to the specified quick reply shortcut », instead |
| **allow_paid_stars** | [`flags.21?long`](type/long) | For paid messages », specifies the amount of Telegram Stars the user has agreed to pay in order to send the message |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ALLOW_PAYMENT_REQUIRED_%d** | `403` | This peer charges %d Telegram Stars per message, but the allow_paid_stars was not set or its value is smaller than %d |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_GUEST_SEND_FORBIDDEN** | `403` | You join the discussion group before commenting, see here » for more info |
| **CHAT_RESTRICTED** | `400` | You can't send messages in this chat, you were restricted |
| **CHAT_SEND_AUDIOS_FORBIDDEN** | `403` | You can't send audio messages in this chat |
| **CHAT_SEND_GAME_FORBIDDEN** | `403` | You can't send a game to this chat |
| **CHAT_SEND_GIFS_FORBIDDEN** | `403` | You can't send gifs in this chat |
| **CHAT_SEND_INLINE_FORBIDDEN** | `403` | You can't send inline messages in this group |
| **CHAT_SEND_MEDIA_FORBIDDEN** | `403` | You can't send media in this chat |
| **CHAT_SEND_PHOTOS_FORBIDDEN** | `403` | You can't send photos in this chat |
| **CHAT_SEND_PLAIN_FORBIDDEN** | `403` | You can't send non-media (text) messages in this chat |
| **CHAT_SEND_STICKERS_FORBIDDEN** | `403` | You can't send stickers in this chat |
| **CHAT_SEND_VOICES_FORBIDDEN** | `403` | You can't send voice recordings in this chat |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **INLINE_RESULT_EXPIRED** | `400` | The inline query expired |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MEDIA_EMPTY** | `400` | The provided media object is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PRIVACY_PREMIUM_REQUIRED** | `403` | You need a Telegram Premium subscription to send a message to this user |
| **QUERY_ID_EMPTY** | `400` | The query ID is empty |
| **QUICK_REPLIES_TOO_MUCH** | `400` | A maximum of appConfig.quick_replies_limit shortcuts may be created, the limit was reached |
| **RANDOM_ID_DUPLICATE** | `500` | You provided a random ID that was already used |
| **REPLY_MESSAGES_TOO_MUCH** | `400` | Each shortcut can contain a maximum of appConfig.quick_reply_messages_limit messages, the limit was reached |
| **RESULT_ID_EMPTY** | `400` | Result ID empty |
| **RESULT_ID_INVALID** | `400` | One of the specified result IDs is invalid |
| **SCHEDULE_DATE_TOO_LATE** | `400` | You can't schedule a message this far in the future |
| **SCHEDULE_TOO_MUCH** | `400` | There are too many scheduled messages |
| **SEND_AS_PEER_INVALID** | `400` | You can't send messages as the specified peer |
| **SEND_MEDIA_INVALID** | `500` | The specified media is invalid |
| **SLOWMODE_WAIT_%d** | `420` | Slowmode is enabled in this chat: wait %d seconds before sending another message to this chat |
| **TOPIC_DELETED** | `400` | The specified topic was deleted |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |
| **VOICE_MESSAGES_FORBIDDEN** | `400` | This user's privacy settings forbid you from sending voice messages |
| **WEBPAGE_CURL_FAILED** | `400` | Failure while fetching the webpage with cURL |
| **WEBPAGE_MEDIA_EMPTY** | `400` | Webpage media empty |
| **YOU_BLOCKED_USER** | `400` | You blocked this user |

---

## Example

```php
$updates = $client->messages->sendInlineBotResult(
	silent : true,
	background : true,
	clear_draft : true,
	hide_via : true,
	peer : $client->inputPeerEmpty(),
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 29,
		top_msg_id : 81,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'pwVb0uToaG8MAzF2',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 57,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 8,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 31,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 69,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 75,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 9,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 48,
				language : '7xmy15SdCwcOzQYP',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 11,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 47,
				user_id : -4336283368690809176,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 89,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 52,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 50,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 68,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 41,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 82,
				document_id : -5531907395055630649,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 43,
			),
		),
		quote_offset : 99,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 61,
	),
	random_id : -3619088423037485005,
	query_id : 2677255181744426530,
	id : '8BqKeGtDd5HJ0iap',
	schedule_date : 55,
	send_as : $client->inputPeerEmpty(),
	quick_reply_shortcut : $client->inputQuickReplyShortcut(
		shortcut : 'B2Eta5h19ek0ijF4',
	),
	allow_paid_stars : -1681454772296858921,
);
```