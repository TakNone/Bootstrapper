# message

**Description** : *A message*

**Layer** : 218

```tl
message#b92f76cf flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true post:flags.14?true from_scheduled:flags.18?true legacy:flags.19?true edit_hide:flags.21?true pinned:flags.24?true noforwards:flags.26?true invert_media:flags.27?true flags2:# offline:flags2.1?true video_processing_pending:flags2.4?true paid_suggested_post_stars:flags2.8?true paid_suggested_post_ton:flags2.9?true id:int from_id:flags.8?Peer from_boosts_applied:flags.29?int peer_id:Peer saved_peer_id:flags.28?Peer fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long via_business_bot_id:flags2.0?long reply_to:flags.3?MessageReplyHeader date:int message:string media:flags.9?MessageMedia reply_markup:flags.6?ReplyMarkup entities:flags.7?Vector<MessageEntity> views:flags.10?int forwards:flags.10?int replies:flags.23?MessageReplies edit_date:flags.15?int post_author:flags.16?string grouped_id:flags.17?long reactions:flags.20?MessageReactions restriction_reason:flags.22?Vector<RestrictionReason> ttl_period:flags.25?int quick_reply_shortcut_id:flags.30?int effect:flags2.2?long factcheck:flags2.3?FactCheck report_delivery_until_date:flags2.5?int paid_message_stars:flags2.6?long suggested_post:flags2.7?SuggestedPost schedule_repeat_period:flags2.10?int = Message;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
| <mark>flags2</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **offline** | [`flags2.1?true`](type/true) | If set, the message was sent because of a scheduled action by the message sender, for example, as away, or a greeting service message |
| **video_processing_pending** | [`flags2.4?true`](type/true) | The video contained in the message is currently being processed by the server (i.e. to generate alternative qualities, that will be contained in the final messageMediaDocument.alt_document), and will be sent once the video is processed, which will happen approximately at the specified date (i.e. messages with this flag set should be treated similarly to scheduled messages, but instead of the scheduled date, date contains the estimated conversion date). See here » for more info |
| **paid_suggested_post_stars** | [`flags2.8?true`](type/true) | Set if this is a suggested channel post » that was paid using Telegram Stars |
| **paid_suggested_post_ton** | [`flags2.9?true`](type/true) | Set if this is a suggested channel post » that was paid using Toncoins |
| <mark>id</mark> | [`int`](type/int) | ID of the message |
| **from_id** | [`flags.8?Peer`](type/Peer) | ID of the sender of the message |
| **from_boosts_applied** | [`flags.29?int`](type/int) | Supergroups only, contains the number of boosts this user has given the current supergroup, and should be shown in the UI in the header of the message. Only present for incoming messages from non-anonymous supergroup members that have boosted the supergroup. Note that this counter should be locally overridden for non-anonymous outgoing messages, according to the current value of channelFull.boosts_applied, to ensure the value is correct even for messages sent by the current user before a supergroup was boosted (or after a boost has expired or the number of boosts has changed); do not update this value for incoming messages from other users, even if their boosts have changed |
| <mark>peer_id</mark> | [`Peer`](type/Peer) | Peer ID, the chat where this message was sent |
| **saved_peer_id** | [`flags.28?Peer`](type/Peer) | Messages from a saved messages dialog » will have peer=inputPeerSelf and the saved_peer_id flag set to the ID of the saved dialog.Messages from a monoforum » will have peer=ID of the monoforum and the saved_peer_id flag set to the ID of a topic |
| **fwd_from** | [`flags.2?MessageFwdHeader`](type/MessageFwdHeader) | Info about forwarded messages |
| **via_bot_id** | [`flags.11?long`](type/long) | ID of the inline bot that generated the message |
| **via_business_bot_id** | [`flags2.0?long`](type/long) | Whether the message was sent by the business bot specified in via_bot_id on behalf of the user |
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
	id : 91,
	from_id : $client->peerUser(
		user_id : -6804933202554464726,
	),
	from_boosts_applied : 50,
	peer_id : $client->peerUser(
		user_id : -1025168216218650912,
	),
	saved_peer_id : $client->peerUser(
		user_id : 6504019757231523243,
	),
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -9046214939396442825,
		),
		from_name : '1lSDJz0oOx9pvQFr',
		date : 13,
		channel_post : 36,
		post_author : 'a1TP6BkKCNshdzfp',
		saved_from_peer : $client->peerUser(
			user_id : 8837900976678786125,
		),
		saved_from_msg_id : 89,
		saved_from_id : $client->peerUser(
			user_id : 7624285516358292108,
		),
		saved_from_name : 'gfVq75lS23TNU4EW',
		saved_date : 4,
		psa_type : '3u6TjBn5kPWfJV1I',
	),
	via_bot_id : -4044321073146432821,
	via_business_bot_id : -1341979136401514198,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 40,
		reply_to_peer_id : $client->peerUser(
			user_id : -8826183913513452060,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 7386090246222150534,
			),
			from_name : 'C02ZSivEKG3QHyFj',
			date : 39,
			channel_post : 69,
			post_author : '0EcVjtwvLRDngq3N',
			saved_from_peer : $client->peerUser(
				user_id : -1679410061941675227,
			),
			saved_from_msg_id : 24,
			saved_from_id : $client->peerUser(
				user_id : 4215837199683209762,
			),
			saved_from_name : 'y6oDGCS1H3A8X2RY',
			saved_date : 60,
			psa_type : 't6RNZMD34iIlfBmK',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 3,
		quote_text : 'qHsNmajczd8RVEpg',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 79,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 36,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 91,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 17,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 46,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 45,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 88,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 20,
				language : 'd2sE7M8emLJ9vyjZ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 58,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : -5090153707555193819,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 6,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 37,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 12,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 31,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 63,
				document_id : 8479286581584855143,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 85,
			),
		),
		quote_offset : 62,
		todo_item_id : 24,
	),
	date : 47,
	message : 'LVYc01yrKwu2Tqgf',
	media : $client->messageMediaEmpty(),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 98,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 72,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 79,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 81,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 7,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 81,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 96,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 51,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 65,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 75,
			language : 'gl7EP9bzRp3vwT4L',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 35,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 84,
			user_id : 4595503784962586277,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 79,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 8,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 30,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 50,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 36,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 83,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 59,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 14,
			document_id : -1287601614456535741,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 96,
		),
	),
	views : 99,
	forwards : 67,
	replies : $client->messageReplies(
		comments : true,
		replies : 1,
		replies_pts : 64,
		recent_repliers : array(
			$client->peerUser(
				user_id : -3897442601918925995,
			),
			$client->peerChat(
				chat_id : 5505729747085201861,
			),
			$client->peerChannel(
				channel_id : -5722033437712302275,
			),
		),
		channel_id : -7480793545220829006,
		max_id : 62,
		read_max_id : 93,
	),
	edit_date : 45,
	post_author : '8EFe3jk1g5M76XJm',
	grouped_id : 8086611124900353990,
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 64,
				reaction : $client->reactionEmpty(),
				count : 41,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(
					user_id : 5364976903132117069,
				),
				date : 2,
				reaction : $client->reactionEmpty(),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(
					user_id : 5054601043694950116,
				),
				count : 0,
			),
		),
	),
	restriction_reason : array(
		$client->restrictionReason(
			platform : 'c0mWGTSa1b3PnjML',
			reason : 'UCHKF9RjmqwLsec5',
			text : 'W5ALyYUaZTXMdgKl',
		),
	),
	ttl_period : 41,
	quick_reply_shortcut_id : 25,
	effect : -3658126060815647058,
	factcheck : $client->factCheck(
		need_check : true,
		country : '8EbYGcWhjriASOmp',
		text : $client->textWithEntities(
			text : 'JWE0mZ1867SDqMir',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 95,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 33,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 77,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 30,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 32,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 14,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 49,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 44,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 14,
					language : '0aC3nU7movNf6rxY',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 33,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 10,
					user_id : 8343365892150999252,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 38,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 15,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 95,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 14,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 79,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 62,
					document_id : -1977683484709901887,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 93,
				),
			),
		),
		hash : 0,
	),
	report_delivery_until_date : 61,
	paid_message_stars : -5497906559775394706,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 5462728766676023156,
			nanos : 72,
		),
		schedule_date : 25,
	),
	schedule_repeat_period : 49,
);
```