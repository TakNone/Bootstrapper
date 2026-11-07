# messages.forwardMessages

**Description** : *Forwards messages by their IDs*

**Layer** : 233

```tl
messages.forwardMessages#13704a7c flags:# silent:flags.5?true background:flags.6?true with_my_score:flags.8?true drop_author:flags.11?true drop_media_captions:flags.12?true noforwards:flags.14?true allow_paid_floodskip:flags.19?true from_ephemeral:flags.25?true from_peer:InputPeer id:Vector<int> random_id:Vector<long> to_peer:InputPeer top_msg_id:flags.9?int reply_to:flags.22?InputReplyTo schedule_date:flags.10?int schedule_repeat_period:flags.24?int send_as:flags.13?InputPeer quick_reply_shortcut:flags.17?InputQuickReplyShortcut effect:flags.18?long video_timestamp:flags.20?int allow_paid_stars:flags.21?long suggested_post:flags.23?SuggestedPost = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **silent** | [`flags.5?true`](type/true) | Whether to send messages silently (no notification will be triggered on the destination clients) |
| **background** | [`flags.6?true`](type/true) | Whether to send the message in background |
| **with_my_score** | [`flags.8?true`](type/true) | When forwarding games, whether to include your score in the game |
| **drop_author** | [`flags.11?true`](type/true) | Whether to forward messages without quoting the original author |
| **drop_media_captions** | [`flags.12?true`](type/true) | Whether to strip captions from media |
| **noforwards** | [`flags.14?true`](type/true) | Only for bots, disallows further re-forwarding and saving of the messages, even if the destination chat doesn't have content protection enabled |
| **allow_paid_floodskip** | [`flags.19?true`](type/true) | Bots only: if set, allows sending up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance |
| **from_ephemeral** | [`flags.25?true`](type/true) | NOTHING |
| <mark>from_peer</mark> | [`InputPeer`](type/InputPeer) | Source of messages |
| <mark>id</mark> | [`Vector<int>`](type/int) | IDs of messages |
| <mark>random_id</mark> | [`Vector<long>`](type/long) | Random ID to prevent resending of messages. See here » for more info on random ID deduplication and updateMessageID mapping |
| <mark>to_peer</mark> | [`InputPeer`](type/InputPeer) | Destination peer |
| **top_msg_id** | [`flags.9?int`](type/int) | Destination forum topic |
| **reply_to** | [`flags.22?InputReplyTo`](type/InputReplyTo) | Can only contain an inputReplyToMonoForum, to forward messages to a monoforum topic (mutually exclusive with top_msg_id) |
| **schedule_date** | [`flags.10?int`](type/int) | Scheduled message date for scheduled messages |
| **schedule_repeat_period** | [`flags.24?int`](type/int) | Once sent, this message will be automatically re-scheduled to be re-sent again this many seconds in the future, see here » for more info on repeating scheduled messages |
| **send_as** | [`flags.13?InputPeer`](type/InputPeer) | Forward the messages as the specified peer |
| **quick_reply_shortcut** | [`flags.17?InputQuickReplyShortcut`](type/InputQuickReplyShortcut) | Add the messages to the specified quick reply shortcut », instead |
| **effect** | [`flags.18?long`](type/long) | Specifies a message effect » to use for the message |
| **video_timestamp** | [`flags.20?int`](type/int) | Start playing the video at the specified timestamp (seconds) |
| **allow_paid_stars** | [`flags.21?long`](type/long) | For paid messages », specifies the amount of Telegram Stars the user has agreed to pay in order to send the message |
| **suggested_post** | [`flags.23?SuggestedPost`](type/SuggestedPost) | Used to suggest a post to a channel, see here » for more info on the full flow |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ALLOW_PAYMENT_REQUIRED** | `406` | This peer only accepts paid messages »: this error is only emitted for older layers without paid messages support, so the client must be updated in order to use paid messages.   |
| **ALLOW_PAYMENT_REQUIRED_%d** | `403` | This peer charges %d Telegram Stars per message, but the allow_paid_stars was not set or its value is smaller than %d |
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
| **CHAT_SEND_INLINE_FORBIDDEN** | `403` | You can't send inline messages in this group |
| **CHAT_SEND_MEDIA_FORBIDDEN** | `403` | You can't send media in this chat |
| **CHAT_SEND_PHOTOS_FORBIDDEN** | `403` | You can't send photos in this chat |
| **CHAT_SEND_PLAIN_FORBIDDEN** | `403` | You can't send non-media (text) messages in this chat |
| **CHAT_SEND_POLL_FORBIDDEN** | `403` | You can't send polls in this chat |
| **CHAT_SEND_STICKERS_FORBIDDEN** | `403` | You can't send stickers in this chat |
| **CHAT_SEND_VIDEOS_FORBIDDEN** | `403` | You can't send videos in this chat |
| **CHAT_SEND_VOICES_FORBIDDEN** | `403` | You can't send voice recordings in this chat |
| **CHAT_SEND_WEBPAGE_FORBIDDEN** | `403` | You can't send webpage previews to this chat |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **GROUPED_MEDIA_INVALID** | `400` | Invalid grouped media |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MEDIA_EMPTY** | `400` | The provided media object is invalid |
| **MEDIA_FILE_INVALID** | `400` | The specified media file is invalid |
| **MESSAGE_IDS_EMPTY** | `400` | No message ids were provided |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PAYMENT_UNSUPPORTED** | `406` | A detailed description of the error will be received separately as described here » |
| **PEER_ID_INVALID** | `406` | The provided peer id is invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |
| **PRIVACY_PREMIUM_REQUIRED** | `406` | You need a Telegram Premium subscription to send a message to this user |
| **QUICK_REPLIES_BOT_NOT_ALLOWED** | `400` | Quick replies cannot be used by bots |
| **QUICK_REPLIES_TOO_MUCH** | `400` | A maximum of appConfig.quick_replies_limit shortcuts may be created, the limit was reached |
| **QUIZ_ANSWER_MISSING** | `400` | You can forward a quiz while hiding the original author only after choosing an option in the quiz |
| **RANDOM_ID_DUPLICATE** | `500` | You provided a random ID that was already used |
| **RANDOM_ID_INVALID** | `400` | A provided random ID is invalid |
| **REPLY_MESSAGES_TOO_MUCH** | `400` | Each shortcut can contain a maximum of appConfig.quick_reply_messages_limit messages, the limit was reached |
| **REPLY_TO_MONOFORUM_PEER_INVALID** | `400` | The specified inputReplyToMonoForum.monoforum_peer_id is invalid |
| **SCHEDULE_BOT_NOT_ALLOWED** | `400` | Bots cannot schedule messages |
| **SCHEDULE_DATE_TOO_LATE** | `400` | You can't schedule a message this far in the future |
| **SCHEDULE_TOO_MUCH** | `400` | There are too many scheduled messages |
| **SEND_AS_PEER_INVALID** | `400` | You can't send messages as the specified peer |
| **SLOWMODE_MULTI_MSGS_DISABLED** | `400` | Slowmode is enabled, you cannot forward multiple messages to this group |
| **SLOWMODE_WAIT_%d** | `420` | Slowmode is enabled in this chat: wait %d seconds before sending another message to this chat |
| **SUGGESTED_POST_PEER_INVALID** | `400` | You cannot send suggested posts to non-monoforum peers |
| **TOPIC_CLOSED** | `406` | This topic was closed, you can't send messages to it anymore |
| **TOPIC_DELETED** | `406` | The specified topic was deleted |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |
| **USER_BOT_TO_BOT_DISABLED** | `400` | Bot-to-bot messaging is disabled because one of the two bots hasn't enabled the Bot to Bot setting in @BotFather |
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
	from_ephemeral : true,
	from_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : array(30),
	random_id : array(2235287044276200312),
	to_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	top_msg_id : 4,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 27,
		top_msg_id : 41,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'mPahAT6v9ntbq5W7',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 67,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 14,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 19,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 77,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 65,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 37,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 36,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 14,
				language : 'GNYvqKWSXdFwMU5h',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 10,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : 327085464535706065,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 49,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 6,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 3,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 56,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 48,
				document_id : 426046880094676497,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 20,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 91,
				date : 22,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 49,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 56,
				old_text : 'MQO1PgFnrD3f9So5',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 74,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 33,
			),
		),
		quote_offset : 1,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 35,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		quote_rich : array(
			$client->textEmpty(),
			$client->textPlain(
				text : 'HsTp02VvUZMzrClx',
			),
			$client->textBold(
				text : $client->textEmpty(),
			),
			$client->textItalic(
				text : $client->textEmpty(),
			),
			$client->textUnderline(
				text : $client->textEmpty(),
			),
			$client->textStrike(
				text : $client->textEmpty(),
			),
			$client->textFixed(
				text : $client->textEmpty(),
			),
			$client->textUrl(
				text : $client->textEmpty(),
				url : 'https://docs.liveproto.dev',
				webpage_id : -9027216335854697328,
			),
			$client->textEmail(
				text : $client->textEmpty(),
				email : 'reply@liveproto.dev',
			),
			$client->textConcat(
				texts : array(
					$client->textEmpty(),
					$client->textPlain(
						text : '9mCsXFJw7SUey1cB',
					),
					$client->textBold(
						text : $client->textEmpty(...),
					),
					$client->textItalic(
						text : $client->textEmpty(...),
					),
					$client->textUnderline(
						text : $client->textEmpty(...),
					),
					$client->textStrike(
						text : $client->textEmpty(...),
					),
					$client->textFixed(
						text : $client->textEmpty(...),
					),
					$client->textUrl(
						text : $client->textEmpty(...),
						url : 'https://docs.liveproto.dev',
						webpage_id : 449623160376678436,
					),
					$client->textEmail(
						text : $client->textEmpty(...),
						email : 'reply@liveproto.dev',
					),
					$client->textConcat(
						texts : array(
							$client->textEmpty(...),
							$client->textPlain(...),
							$client->textBold(...),
							$client->textItalic(...),
							$client->textUnderline(...),
							$client->textStrike(...),
							$client->textFixed(...),
							$client->textUrl(...),
							$client->textEmail(...),
							$client->textConcat(...),
							$client->textSubscript(...),
							$client->textSuperscript(...),
							$client->textMarked(...),
							$client->textPhone(...),
							$client->textImage(...),
							$client->textAnchor(...),
							$client->textMath(...),
							$client->textCustomEmoji(...),
							$client->textSpoiler(...),
							$client->textMention(...),
							$client->textHashtag(...),
							$client->textBotCommand(...),
							$client->textCashtag(...),
							$client->textAutoUrl(...),
							$client->textAutoEmail(...),
							$client->textAutoPhone(...),
							$client->textBankCard(...),
							$client->textMentionName(...),
							$client->textDate(...),
							$client->textDiff(...),
							$client->textButton(...),
							$client->textTonAddress(...),
						),
					),
					$client->textSubscript(
						text : $client->textEmpty(...),
					),
					$client->textSuperscript(
						text : $client->textEmpty(...),
					),
					$client->textMarked(
						text : $client->textEmpty(...),
					),
					$client->textPhone(
						text : $client->textEmpty(...),
						phone : '+1234567890',
					),
					$client->textImage(
						document_id : 1939311577081107023,
						w : 32,
						h : 19,
					),
					$client->textAnchor(
						text : $client->textEmpty(...),
						name : 'yHTdARj12Ure68tE',
					),
					$client->textMath(
						source : 'zAUVINZYPD407uJB',
					),
					$client->textCustomEmoji(
						document_id : -1027207930235425397,
						alt : 'nDa5giqrzAce1PTU',
					),
					$client->textSpoiler(
						text : $client->textEmpty(...),
					),
					$client->textMention(
						text : $client->textEmpty(...),
					),
					$client->textHashtag(
						text : $client->textEmpty(...),
					),
					$client->textBotCommand(
						text : $client->textEmpty(...),
					),
					$client->textCashtag(
						text : $client->textEmpty(...),
					),
					$client->textAutoUrl(
						text : $client->textEmpty(...),
					),
					$client->textAutoEmail(
						text : $client->textEmpty(...),
					),
					$client->textAutoPhone(
						text : $client->textEmpty(...),
					),
					$client->textBankCard(
						text : $client->textEmpty(...),
					),
					$client->textMentionName(
						text : $client->textEmpty(...),
						user_id : 2054508287028261300,
					),
					$client->textDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						text : $client->textEmpty(...),
						date : 13,
					),
					$client->textDiff(
						text : $client->textEmpty(...),
						old_text : $client->textEmpty(...),
					),
					$client->textButton(
						text : $client->textEmpty(...),
						type : $client->inlineButtonTypeUrl(...),
						style : $client->richButtonStyle(...),
					),
					$client->textTonAddress(
						text : $client->textEmpty(...),
					),
				),
			),
			$client->textSubscript(
				text : $client->textEmpty(),
			),
			$client->textSuperscript(
				text : $client->textEmpty(),
			),
			$client->textMarked(
				text : $client->textEmpty(),
			),
			$client->textPhone(
				text : $client->textEmpty(),
				phone : '+1234567890',
			),
			$client->textImage(
				document_id : 1101991327838581765,
				w : 53,
				h : 85,
			),
			$client->textAnchor(
				text : $client->textEmpty(),
				name : '14qWei2kgO9Gw05l',
			),
			$client->textMath(
				source : 'Vs5W3E6hCu2alI1q',
			),
			$client->textCustomEmoji(
				document_id : 5919086733416056907,
				alt : '7Fy2LJwm1dlhcYkP',
			),
			$client->textSpoiler(
				text : $client->textEmpty(),
			),
			$client->textMention(
				text : $client->textEmpty(),
			),
			$client->textHashtag(
				text : $client->textEmpty(),
			),
			$client->textBotCommand(
				text : $client->textEmpty(),
			),
			$client->textCashtag(
				text : $client->textEmpty(),
			),
			$client->textAutoUrl(
				text : $client->textEmpty(),
			),
			$client->textAutoEmail(
				text : $client->textEmpty(),
			),
			$client->textAutoPhone(
				text : $client->textEmpty(),
			),
			$client->textBankCard(
				text : $client->textEmpty(),
			),
			$client->textMentionName(
				text : $client->textEmpty(),
				user_id : -75899459845901799,
			),
			$client->textDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				text : $client->textEmpty(),
				date : 9,
			),
			$client->textDiff(
				text : $client->textEmpty(),
				old_text : $client->textEmpty(),
			),
			$client->textButton(
				text : $client->textEmpty(),
				type : $client->inlineButtonTypeUrl(
					url : 'https://docs.liveproto.dev',
				),
				style : $client->richButtonStyle(
					bg_primary : true,
					bg_danger : true,
					bg_success : true,
					link : true,
				),
			),
			$client->textTonAddress(
				text : $client->textEmpty(),
			),
		),
	),
	schedule_date : 76,
	schedule_repeat_period : 53,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
	quick_reply_shortcut : $client->inputQuickReplyShortcut(
		shortcut : 'P4dBoTjqz3HXxLnO',
	),
	effect : -8154538381143776748,
	video_timestamp : 41,
	allow_paid_stars : 8938288054441924419,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 7202332155830244894,
			nanos : 93,
		),
		schedule_date : 69,
	),
);
```