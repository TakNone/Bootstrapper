# messages.sendMultiMedia

**Description** : *Send an album or grouped media*

**Layer** : 222

```tl
messages.sendMultiMedia#1bf89d74 flags:# silent:flags.5?true background:flags.6?true clear_draft:flags.7?true noforwards:flags.14?true update_stickersets_order:flags.15?true invert_media:flags.16?true allow_paid_floodskip:flags.19?true peer:InputPeer reply_to:flags.0?InputReplyTo multi_media:Vector<InputSingleMedia> schedule_date:flags.10?int send_as:flags.13?InputPeer quick_reply_shortcut:flags.17?InputQuickReplyShortcut effect:flags.18?long allow_paid_stars:flags.21?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
| **allow_paid_stars** | [`flags.21?long`](type/long) | For paid messages », specifies the amount of Telegram Stars the user has agreed to pay in order to send the message |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ALLOW_PAYMENT_REQUIRED_%d** | `403` | This peer charges %d Telegram Stars per message, but the allow_paid_stars was not set or its value is smaller than %d |
| **BUSINESS_CONNECTION_INVALID** | `400` | The connection_id passed to the wrapping invokeWithBusinessConnection call is invalid |
| **BUSINESS_PEER_INVALID** | `400` | Messages can't be set to the specified peer through the current business connection |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_FORWARDS_RESTRICTED** | `400` | You can't forward messages from a protected chat |
| **CHAT_SEND_MEDIA_FORBIDDEN** | `403` | You can't send media in this chat |
| **CHAT_SEND_PHOTOS_FORBIDDEN** | `403` | You can't send photos in this chat |
| **CHAT_SEND_VIDEOS_FORBIDDEN** | `403` | You can't send videos in this chat |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **EFFECT_ID_INVALID** | `400` | The specified effect ID is invalid |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **FILE_REFERENCE_%d_EXPIRED** | `400` | The file reference of the media file at index %d in the passed media array expired, it must be refreshed as specified in the documentation.  |
| **FILE_REFERENCE_%d_INVALID** | `400` | The file reference of the media file at index %d in the passed media array is invalid |
| **MEDIA_CAPTION_TOO_LONG** | `400` | The caption is too long |
| **MEDIA_EMPTY** | `400` | The provided media object is invalid |
| **MEDIA_INVALID** | `400` | Media invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **MULTI_MEDIA_TOO_LONG** | `400` | Too many media files for album |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **QUICK_REPLIES_BOT_NOT_ALLOWED** | `400` | Quick replies cannot be used by bots |
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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 26,
		top_msg_id : 89,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : '5jPsWgDvTMX2Y3wG',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 82,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 6,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 7,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 43,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 21,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 84,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 21,
				language : 'DTrlSwBzRv4KWu9s',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 57,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 72,
				user_id : -8518960123874237107,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 29,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 46,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 57,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 35,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 24,
				document_id : 1166157805803625814,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 10,
			),
		),
		quote_offset : 70,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 92,
	),
	multi_media : array(
		$client->inputSingleMedia(
			media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
			random_id : 9100728564963244405,
			message : '3sriQWRJPKSHt8L4',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 63,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 31,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 17,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 26,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 18,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 46,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 94,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 65,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 47,
					language : 'Xm7axfdioLlej0SF',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 47,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 38,
					user_id : -1185619532555102504,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 20,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 10,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 77,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 73,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 81,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 53,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 35,
					document_id : -6702401300880331942,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 20,
				),
			),
		),
	),
	schedule_date : 97,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
	quick_reply_shortcut : $client->inputQuickReplyShortcut(
		shortcut : 'n6yrJXCLP9bSjut7',
	),
	effect : 890603798872546171,
	allow_paid_stars : 5522277417392205122,
);
```