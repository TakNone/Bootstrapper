# messages.sendMultiMedia

**Description** : *Send an album or grouped media*

**Layer** : 211

```tl
messages.sendMultiMedia#1bf89d74 flags:# silent:flags.5?true background:flags.6?true clear_draft:flags.7?true noforwards:flags.14?true update_stickersets_order:flags.15?true invert_media:flags.16?true allow_paid_floodskip:flags.19?true peer:InputPeer reply_to:flags.0?InputReplyTo multi_media:Vector<InputSingleMedia> schedule_date:flags.10?int send_as:flags.13?InputPeer quick_reply_shortcut:flags.17?InputQuickReplyShortcut effect:flags.18?long allow_paid_stars:flags.21?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **silent** | [`flags.5?true`](type/true) | Whether to send the album silently (no notification triggered) |
| **background** | [`flags.6?true`](type/true) | Send in background? |
| **clear_draft** | [`flags.7?true`](type/true) | Whether to clear drafts |
| **noforwards** | [`flags.14?true`](type/true) | Only for bots, disallows forwarding and saving of the messages, even if the destination chat doesn't have content protection enabled |
| **update_stickersets_order** | [`flags.15?true`](type/true) | Whether to move used stickersets to top, see here for more info on this flag » |
| **invert_media** | [`flags.16?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| **allow_paid_floodskip** | [`flags.19?true`](type/true) | Bots only: if set, allows sending up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The destination chat |
| **reply_to** | [`flags.0?InputReplyTo`](type/InputReplyTo) | If set, indicates that the message should be sent in reply to the specified message or story |
| <mark>multi_media</mark> | [`Vector<InputSingleMedia>`](type/InputSingleMedia) | The medias to send: note that they must be separately uploaded using messages.uploadMedia first, using raw inputMediaUploaded* constructors is not supported |
| **schedule_date** | [`flags.10?int`](type/int) | Scheduled message date for scheduled messages |
| **send_as** | [`flags.13?InputPeer`](type/InputPeer) | Send this message as the specified peer |
| **quick_reply_shortcut** | [`flags.17?InputQuickReplyShortcut`](type/InputQuickReplyShortcut) | Add the message to the specified quick reply shortcut », instead |
| **effect** | [`flags.18?long`](type/long) | Specifies a message effect » to use for the message |
| **allow_paid_stars** | [`flags.21?long`](type/long) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BUSINESS_PEER_INVALID** | `400` | Messages can't be set to the specified peer through the current business connection |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_FORWARDS_RESTRICTED** | `400` | You can't forward messages from a protected chat |
| **CHAT_SEND_MEDIA_FORBIDDEN** | `403` | You can't send media in this chat |
| **CHAT_SEND_PHOTOS_FORBIDDEN** | `403` | You can't send photos in this chat |
| **CHAT_SEND_VIDEOS_FORBIDDEN** | `403` | You can't send videos in this chat |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **FILE_REFERENCE_%d_EXPIRED** | `400` | The file reference of the media file at index %d in the passed media array expired, it must be refreshed |
| **FILE_REFERENCE_%d_INVALID** | `400` | The file reference of the media file at index %d in the passed media array is invalid |
| **MEDIA_CAPTION_TOO_LONG** | `400` | The caption is too long |
| **MEDIA_EMPTY** | `400` | The provided media object is invalid |
| **MEDIA_INVALID** | `400` | Media invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **MULTI_MEDIA_TOO_LONG** | `400` | Too many media files for album |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **QUICK_REPLIES_TOO_MUCH** | `400` | A maximum of appConfig.quick_replies_limit shortcuts may be created, the limit was reached |
| **RANDOM_ID_DUPLICATE** | `500` | You provided a random ID that was already used |
| **RANDOM_ID_EMPTY** | `400` | Random ID empty |
| **REPLY_MESSAGES_TOO_MUCH** | `400` | Each shortcut can contain a maximum of appConfig.quick_reply_messages_limit messages, the limit was reached |
| **REPLY_TO_INVALID** | `400` | The specified reply_to field is invalid |
| **SCHEDULE_DATE_TOO_LATE** | `400` | You can't schedule a message this far in the future |
| **SCHEDULE_TOO_MUCH** | `400` | There are too many scheduled messages |
| **SEND_AS_PEER_INVALID** | `400` | You can't send messages as the specified peer |
| **SLOWMODE_WAIT_%d** | `420` | Slowmode is enabled in this chat: wait %d seconds before sending another message to this chat |
| **TOPIC_CLOSED** | `400` | This topic was closed, you can't send messages to it anymore |
| **TOPIC_DELETED** | `400` | The specified topic was deleted |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |

---

## Example

```php
$updates = $client->messages->sendMultiMedia(
	silent : true,
	background : true,
	clear_draft : true,
	noforwards : true,
	update_stickersets_order : true,
	invert_media : true,
	allow_paid_floodskip : true,
	peer : $client->inputPeerEmpty(),
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 74,
		top_msg_id : 51,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : '302w9tYuW5Us7JkO',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 44,
				length : 32,
			),
			$client->messageEntityMention(
				offset : 82,
				length : 43,
			),
			$client->messageEntityHashtag(
				offset : 22,
				length : 89,
			),
			$client->messageEntityBotCommand(
				offset : 46,
				length : 55,
			),
			$client->messageEntityUrl(
				offset : 53,
				length : 86,
			),
			$client->messageEntityEmail(
				offset : 76,
				length : 62,
			),
			$client->messageEntityBold(
				offset : 37,
				length : 95,
			),
			$client->messageEntityItalic(
				offset : 79,
				length : 60,
			),
			$client->messageEntityCode(
				offset : 93,
				length : 1,
			),
			$client->messageEntityPre(
				offset : 30,
				length : 49,
				language : '6Ap9ExX0b751wTfk',
			),
			$client->messageEntityTextUrl(
				offset : 13,
				length : 63,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 19,
				length : 100,
				user_id : 11451464025775330,
			),
			$client->inputMessageEntityMentionName(
				offset : 63,
				length : 68,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 73,
				length : 46,
			),
			$client->messageEntityCashtag(
				offset : 45,
				length : 81,
			),
			$client->messageEntityUnderline(
				offset : 57,
				length : 47,
			),
			$client->messageEntityStrike(
				offset : 45,
				length : 79,
			),
			$client->messageEntityBankCard(
				offset : 37,
				length : 71,
			),
			$client->messageEntitySpoiler(
				offset : 16,
				length : 53,
			),
			$client->messageEntityCustomEmoji(
				offset : 48,
				length : 75,
				document_id : 3552451500145700780,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 6,
				length : 8,
			),
		),
		quote_offset : 31,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 24,
	),
	multi_media : array(
		$client->inputSingleMedia(
			media : $client->inputMediaEmpty(),
			random_id : 9166530607205151311,
			message : 'jbkwguNRp1Q2tHae',
			entities : array(
				$client->messageEntityUnknown(
					offset : 29,
					length : 10,
				),
				$client->messageEntityMention(
					offset : 97,
					length : 10,
				),
				$client->messageEntityHashtag(
					offset : 74,
					length : 48,
				),
				$client->messageEntityBotCommand(
					offset : 31,
					length : 98,
				),
				$client->messageEntityUrl(
					offset : 94,
					length : 11,
				),
				$client->messageEntityEmail(
					offset : 29,
					length : 51,
				),
				$client->messageEntityBold(
					offset : 57,
					length : 62,
				),
				$client->messageEntityItalic(
					offset : 100,
					length : 72,
				),
				$client->messageEntityCode(
					offset : 70,
					length : 58,
				),
				$client->messageEntityPre(
					offset : 62,
					length : 54,
					language : 'avzpCDFBGPhqRsY4',
				),
				$client->messageEntityTextUrl(
					offset : 48,
					length : 86,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 13,
					length : 84,
					user_id : -2759590249838160500,
				),
				$client->inputMessageEntityMentionName(
					offset : 69,
					length : 56,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 82,
					length : 55,
				),
				$client->messageEntityCashtag(
					offset : 100,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 94,
					length : 82,
				),
				$client->messageEntityStrike(
					offset : 82,
					length : 85,
				),
				$client->messageEntityBankCard(
					offset : 82,
					length : 72,
				),
				$client->messageEntitySpoiler(
					offset : 28,
					length : 54,
				),
				$client->messageEntityCustomEmoji(
					offset : 42,
					length : 24,
					document_id : -103758537141353239,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 72,
					length : 4,
				),
			),
		),
	),
	schedule_date : 46,
	send_as : $client->inputPeerEmpty(),
	quick_reply_shortcut : $client->inputQuickReplyShortcut(
		shortcut : 'Ab4UdxBVqnoNsPtI',
	),
	effect : 3105364201205393707,
	allow_paid_stars : 4415400738863485562,
);
```