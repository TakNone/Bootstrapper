# message

**Description** : *A message*

**Layer** : 225

```tl
message#95ef6f2b flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true post:flags.14?true from_scheduled:flags.18?true legacy:flags.19?true edit_hide:flags.21?true pinned:flags.24?true noforwards:flags.26?true invert_media:flags.27?true flags2:# offline:flags2.1?true video_processing_pending:flags2.4?true paid_suggested_post_stars:flags2.8?true paid_suggested_post_ton:flags2.9?true id:int from_id:flags.8?Peer from_boosts_applied:flags.29?int from_rank:flags2.12?string peer_id:Peer saved_peer_id:flags.28?Peer fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long via_business_bot_id:flags2.0?long guestchat_via_from:flags2.19?Peer reply_to:flags.3?MessageReplyHeader date:int message:string media:flags.9?MessageMedia reply_markup:flags.6?ReplyMarkup entities:flags.7?Vector<MessageEntity> views:flags.10?int forwards:flags.10?int replies:flags.23?MessageReplies edit_date:flags.15?int post_author:flags.16?string grouped_id:flags.17?long reactions:flags.20?MessageReactions restriction_reason:flags.22?Vector<RestrictionReason> ttl_period:flags.25?int quick_reply_shortcut_id:flags.30?int effect:flags2.2?long factcheck:flags2.3?FactCheck report_delivery_until_date:flags2.5?int paid_message_stars:flags2.6?long suggested_post:flags2.7?SuggestedPost schedule_repeat_period:flags2.10?int summary_from_language:flags2.11?string = Message;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **out** | [`flags.1?true`](type/true) | Is this an outgoing message |
| **mentioned** | [`flags.4?true`](type/true) | Whether we were mentioned in this message |
| **media_unread** | [`flags.5?true`](type/true) | Whether there are unread media attachments in this message |
| **silent** | [`flags.13?true`](type/true) | Whether this is a silent message (no notification triggered) |
| **post** | [`flags.14?true`](type/true) | Whether this is a channel post |
| **from_scheduled** | [`flags.18?true`](type/true) | Whether this is a scheduled message |
| **legacy** | [`flags.19?true`](type/true) | This is a legacy message: it has to be refetched with the new layer |
| **edit_hide** | [`flags.21?true`](type/true) | Whether the message should be shown as not modified to the user, even if an edit date is present |
| **pinned** | [`flags.24?true`](type/true) | Whether this message is pinned |
| **noforwards** | [`flags.26?true`](type/true) | Whether this message is protected and thus cannot be forwarded; clients should also prevent users from saving attached media (i.e. videos should only be streamed, photos should be kept in RAM, et cetera) |
| **invert_media** | [`flags.27?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| <del style = 'opacity : 0.4'>flags2</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **offline** | [`flags2.1?true`](type/true) | If set, the message was sent because of a scheduled action by the message sender, for example, as away, or a greeting service message |
| **video_processing_pending** | [`flags2.4?true`](type/true) | The video contained in the message is currently being processed by the server (i.e. to generate alternative qualities, that will be contained in the final messageMediaDocument.alt_document), and will be sent once the video is processed, which will happen approximately at the specified date (i.e. messages with this flag set should be treated similarly to scheduled messages, but instead of the scheduled date, date contains the estimated conversion date). See here » for more info |
| **paid_suggested_post_stars** | [`flags2.8?true`](type/true) | Set if this is a suggested channel post » that was paid using Telegram Stars |
| **paid_suggested_post_ton** | [`flags2.9?true`](type/true) | Set if this is a suggested channel post » that was paid using Toncoins |
| <mark>id</mark> | [`int`](type/int) | ID of the message |
| **from_id** | [`flags.8?Peer`](type/Peer) | ID of the sender of the message |
| **from_boosts_applied** | [`flags.29?int`](type/int) | Supergroups only, contains the number of boosts this user has given the current supergroup, and should be shown in the UI in the header of the message. Only present for incoming messages from non-anonymous supergroup members that have boosted the supergroup. Note that this counter should be locally overridden for non-anonymous outgoing messages, according to the current value of channelFull.boosts_applied, to ensure the value is correct even for messages sent by the current user before a supergroup was boosted (or after a boost has expired or the number of boosts has changed); do not update this value for incoming messages from other users, even if their boosts have changed |
| **from_rank** | [`flags2.12?string`](type/string) | NOTHING |
| <mark>peer_id</mark> | [`Peer`](type/Peer) | Peer ID, the chat where this message was sent |
| **saved_peer_id** | [`flags.28?Peer`](type/Peer) | Messages from a saved messages dialog » will have peer=inputPeerSelf and the saved_peer_id flag set to the ID of the saved dialog.Messages from a monoforum » will have peer=ID of the monoforum and the saved_peer_id flag set to the ID of a topic |
| **fwd_from** | [`flags.2?MessageFwdHeader`](type/MessageFwdHeader) | Info about forwarded messages |
| **via_bot_id** | [`flags.11?long`](type/long) | ID of the inline bot that generated the message |
| **via_business_bot_id** | [`flags2.0?long`](type/long) | Whether the message was sent by the business bot specified in via_bot_id on behalf of the user |
| **guestchat_via_from** | [`flags2.19?Peer`](type/Peer) | NOTHING |
| **reply_to** | [`flags.3?MessageReplyHeader`](type/MessageReplyHeader) | Reply information |
| <mark>date</mark> | [`int`](type/int) | Date of the message |
| <mark>message</mark> | [`string`](type/string) | The message |
| **media** | [`flags.9?MessageMedia`](type/MessageMedia) | Media attachment |
| **reply_markup** | [`flags.6?ReplyMarkup`](type/ReplyMarkup) | Reply markup (bot/inline keyboards) |
| **entities** | [`flags.7?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **views** | [`flags.10?int`](type/int) | View count for channel posts |
| **forwards** | [`flags.10?int`](type/int) | Forward counter |
| **replies** | [`flags.23?MessageReplies`](type/MessageReplies) | Info about post comments (for channels) or message replies (for groups) |
| **edit_date** | [`flags.15?int`](type/int) | Last edit date of this message |
| **post_author** | [`flags.16?string`](type/string) | Name of the author of this message for channel posts (with signatures enabled) |
| **grouped_id** | [`flags.17?long`](type/long) | Multiple media messages sent using messages.sendMultiMedia with the same grouped ID indicate an album or media group |
| **reactions** | [`flags.20?MessageReactions`](type/MessageReactions) | Reactions to this message |
| **restriction_reason** | [`flags.22?Vector<RestrictionReason>`](type/RestrictionReason) | Contains the reason why access to this message must be restricted |
| **ttl_period** | [`flags.25?int`](type/int) | Time To Live of the message, once message.date+message.ttl_period === time(), the message will be deleted on the server, and must be deleted locally as well |
| **quick_reply_shortcut_id** | [`flags.30?int`](type/int) | If set, this message is a quick reply shortcut message » (note that quick reply shortcut messages sent to a private chat will not have this field set) |
| **effect** | [`flags2.2?long`](type/long) | A message effect that should be played as specified here » |
| **factcheck** | [`flags2.3?FactCheck`](type/FactCheck) | Represents a fact-check » |
| **report_delivery_until_date** | [`flags2.5?int`](type/int) | Used for Telegram Gateway verification messages: if set and the current unixtime is bigger than the specified unixtime, invoke messages.reportMessagesDelivery passing the ID and the peer of this message as soon as it is received by the client (optionally batching requests for the same peer) |
| **paid_message_stars** | [`flags2.6?long`](type/long) | The amount of stars the sender has paid to send the message, see here » for more info |
| **suggested_post** | [`flags2.7?SuggestedPost`](type/SuggestedPost) | Used to suggest a post to a channel, see here » for more info on the full flow |
| **schedule_repeat_period** | [`flags2.10?int`](type/int) | NOTHING |
| **summary_from_language** | [`flags2.11?string`](type/string) | NOTHING |

---

## Type

[Message](type/Message)

---

## Example

```php
$message = $client->message(
	out : true,
	mentioned : true,
	media_unread : true,
	silent : true,
	post : true,
	from_scheduled : true,
	legacy : true,
	edit_hide : true,
	pinned : true,
	noforwards : true,
	invert_media : true,
	offline : true,
	video_processing_pending : true,
	paid_suggested_post_stars : true,
	paid_suggested_post_ton : true,
	id : 75,
	from_id : $client->peerUser(
		user_id : 3460231085224749909,
	),
	from_boosts_applied : 93,
	from_rank : 'zoCFBYeJuDd1s0fG',
	peer_id : $client->peerUser(
		user_id : -3662421629193959268,
	),
	saved_peer_id : $client->peerUser(
		user_id : -7865865090604878229,
	),
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -6018693512910979761,
		),
		from_name : 'Aao6BJ0r3KvNnuFy',
		date : 35,
		channel_post : 83,
		post_author : 'bRhnvt1lSLdXeYz5',
		saved_from_peer : $client->peerUser(
			user_id : 1484455564517182818,
		),
		saved_from_msg_id : 32,
		saved_from_id : $client->peerUser(
			user_id : 3383634258732355200,
		),
		saved_from_name : 'CrqJy08TNF3dAUIX',
		saved_date : 27,
		psa_type : 'RWTPwtkfOn9yuYM8',
	),
	via_bot_id : -1020151696403834885,
	via_business_bot_id : -8436743065520549917,
	guestchat_via_from : $client->peerUser(
		user_id : 2791900942147444091,
	),
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 55,
		reply_to_peer_id : $client->peerUser(
			user_id : 8880593208896892850,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : -4213686035167392198,
			),
			from_name : '6cyQDdCqmztElHkA',
			date : 92,
			channel_post : 10,
			post_author : 'S8vHw9V2skj3ZxNz',
			saved_from_peer : $client->peerUser(
				user_id : -3631780959189234401,
			),
			saved_from_msg_id : 11,
			saved_from_id : $client->peerUser(
				user_id : 4827817747243319665,
			),
			saved_from_name : '7SDIQxWN3CT4t0Jg',
			saved_date : 30,
			psa_type : '1TCM4H6q8StafcAo',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 51,
		quote_text : 'bH960jpTaRgDGwih',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 76,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 7,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 12,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 59,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 24,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 68,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 7,
				language : 'jL394F1pUfq8Xxwk',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 34,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 50,
				user_id : -5035914082298112443,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 69,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 26,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 37,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 65,
				document_id : 5288900262514857628,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 17,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 13,
				date : 26,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 58,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 90,
				old_text : '7ekxbUYz9vVKQcqs',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 52,
			),
		),
		quote_offset : 84,
		todo_item_id : 61,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	date : 50,
	message : 'ihU9zMvPLTCBS0pk',
	media : $client->messageMediaEmpty(),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 4,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 54,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 15,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 27,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 63,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 78,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 75,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 98,
			language : 'XcE24BnHhltyJPzF',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 51,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 42,
			user_id : 4278929887158477632,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 82,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 84,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 6,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 57,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 73,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 81,
			document_id : 7936674602206818016,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 7,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 42,
			date : 2,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 10,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 88,
			old_text : 'RF2w4qEOZezvCjGK',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 92,
		),
	),
	views : 5,
	forwards : 57,
	replies : $client->messageReplies(
		comments : true,
		replies : 21,
		replies_pts : 75,
		recent_repliers : array(
			$client->peerUser(
				user_id : 4021077130126621854,
			),
			$client->peerChat(
				chat_id : 7183681597668916147,
			),
			$client->peerChannel(
				channel_id : 5050204191765110027,
			),
		),
		channel_id : -6440917138416849358,
		max_id : 38,
		read_max_id : 7,
	),
	edit_date : 40,
	post_author : '2R6Awq9DhSQl3081',
	grouped_id : -8630264980172261552,
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 92,
				reaction : $client->reactionEmpty(),
				count : 90,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(
					user_id : 4714176753513569448,
				),
				date : 46,
				reaction : $client->reactionEmpty(),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(
					user_id : -8704612555084627274,
				),
				count : 39,
			),
		),
	),
	restriction_reason : array(
		$client->restrictionReason(
			platform : 'zsThc9l0WAGtUmQu',
			reason : 'JOLvfk7UK0MwrtFm',
			text : 'Hjx0PisaNp1BEdqz',
		),
	),
	ttl_period : 88,
	quick_reply_shortcut_id : 7,
	effect : 8119600169000434052,
	factcheck : $client->factCheck(
		need_check : true,
		country : 'Fly9WL6r03a2mwub',
		text : $client->textWithEntities(
			text : 'hbJAFQkw1CVXfelW',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 97,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 92,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 51,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 33,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 91,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 72,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 76,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 71,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 24,
					language : 'Hp2yvJLrcbd7OPFS',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 28,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 96,
					user_id : -4846558037859376875,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 93,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 42,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 63,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 79,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 12,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 47,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 55,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 98,
					document_id : -4318070164666784455,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 56,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 17,
					date : 60,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 23,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 88,
					old_text : 'a0ZdLocTqWnxDXHg',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 23,
				),
			),
		),
		hash : 0,
	),
	report_delivery_until_date : 69,
	paid_message_stars : 3478038955636157632,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 7754426213765143699,
			nanos : 16,
		),
		schedule_date : 74,
	),
	schedule_repeat_period : 62,
	summary_from_language : 'pTnHRB6vhSGi1Voj',
);
```