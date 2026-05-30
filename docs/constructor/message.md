# message

**Description** : *A message*

**Layer** : 222

```tl
message#9cb490e9 flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true post:flags.14?true from_scheduled:flags.18?true legacy:flags.19?true edit_hide:flags.21?true pinned:flags.24?true noforwards:flags.26?true invert_media:flags.27?true flags2:# offline:flags2.1?true video_processing_pending:flags2.4?true paid_suggested_post_stars:flags2.8?true paid_suggested_post_ton:flags2.9?true id:int from_id:flags.8?Peer from_boosts_applied:flags.29?int peer_id:Peer saved_peer_id:flags.28?Peer fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long via_business_bot_id:flags2.0?long reply_to:flags.3?MessageReplyHeader date:int message:string media:flags.9?MessageMedia reply_markup:flags.6?ReplyMarkup entities:flags.7?Vector<MessageEntity> views:flags.10?int forwards:flags.10?int replies:flags.23?MessageReplies edit_date:flags.15?int post_author:flags.16?string grouped_id:flags.17?long reactions:flags.20?MessageReactions restriction_reason:flags.22?Vector<RestrictionReason> ttl_period:flags.25?int quick_reply_shortcut_id:flags.30?int effect:flags2.2?long factcheck:flags2.3?FactCheck report_delivery_until_date:flags2.5?int paid_message_stars:flags2.6?long suggested_post:flags2.7?SuggestedPost schedule_repeat_period:flags2.10?int summary_from_language:flags2.11?string = Message;
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
	id : 63,
	from_id : $client->peerUser(
		user_id : -9014754175150549912,
	),
	from_boosts_applied : 39,
	peer_id : $client->peerUser(
		user_id : 4741129075868277217,
	),
	saved_peer_id : $client->peerUser(
		user_id : 3267727193084790598,
	),
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 5239031662126901528,
		),
		from_name : 'SlbceoG0UniBf7wh',
		date : 81,
		channel_post : 70,
		post_author : 'xSk2puz3TZs9JFVU',
		saved_from_peer : $client->peerUser(
			user_id : 7541774797591346575,
		),
		saved_from_msg_id : 48,
		saved_from_id : $client->peerUser(
			user_id : 7061981558015085435,
		),
		saved_from_name : 'VZipd1GFDurcAfjO',
		saved_date : 7,
		psa_type : 'idUWwGzfYvZaElCJ',
	),
	via_bot_id : -2896744186779499546,
	via_business_bot_id : 6513199638651397146,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 32,
		reply_to_peer_id : $client->peerUser(
			user_id : 6583386634926988589,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 7778876685738910466,
			),
			from_name : 'Pgk9A1FHX0SCnvIe',
			date : 79,
			channel_post : 9,
			post_author : 'EpIZnkRCs1GKmhFt',
			saved_from_peer : $client->peerUser(
				user_id : 5033622923662778643,
			),
			saved_from_msg_id : 70,
			saved_from_id : $client->peerUser(
				user_id : 7023671030652562910,
			),
			saved_from_name : 'wxL8ip20vHNqbZJC',
			saved_date : 0,
			psa_type : 'VkcRt2sNudnoFA0E',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 39,
		quote_text : 'OmFx6DrXp2TYyA8P',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 57,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 72,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 96,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 24,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 64,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 70,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 92,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 1,
				language : 'lDHVAX4izMpxQU9q',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 25,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : 8482693911902606638,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 82,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 75,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 87,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 84,
				document_id : -758102991165363058,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 65,
			),
		),
		quote_offset : 38,
		todo_item_id : 14,
	),
	date : 3,
	message : 'IumLRafl1T9kACnq',
	media : $client->messageMediaEmpty(),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 13,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 96,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 70,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 80,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 0,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 67,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 63,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 39,
			language : 'RAQshNKMcmfloiXz',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 41,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 66,
			user_id : -7104228107906238414,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 95,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 86,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 82,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 80,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 41,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 41,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 45,
			document_id : 3931842588958993068,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 32,
		),
	),
	views : 2,
	forwards : 73,
	replies : $client->messageReplies(
		comments : true,
		replies : 92,
		replies_pts : 57,
		recent_repliers : array(
			$client->peerUser(
				user_id : 6548010699975910539,
			),
			$client->peerChat(
				chat_id : 4210445529762606540,
			),
			$client->peerChannel(
				channel_id : -6762351511605300362,
			),
		),
		channel_id : 2780571886913363159,
		max_id : 75,
		read_max_id : 57,
	),
	edit_date : 11,
	post_author : 'BlrFdqOtbTCIA34c',
	grouped_id : 4995463765699074159,
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 45,
				reaction : $client->reactionEmpty(),
				count : 22,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(
					user_id : -3002805199648745372,
				),
				date : 6,
				reaction : $client->reactionEmpty(),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(
					user_id : -8874824675798785305,
				),
				count : 55,
			),
		),
	),
	restriction_reason : array(
		$client->restrictionReason(
			platform : 'vQuAULW6GT5yF21d',
			reason : 'gfdovKH7tj5BykLz',
			text : 'PN6W0ZptmVbeRhSi',
		),
	),
	ttl_period : 4,
	quick_reply_shortcut_id : 30,
	effect : -4473544842184109698,
	factcheck : $client->factCheck(
		need_check : true,
		country : 'geiSvGnZlXTB92AL',
		text : $client->textWithEntities(
			text : '7iGBSrY940HELp8m',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 66,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 26,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 7,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 82,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 57,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 43,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 35,
					language : 'zyD6rUGZ5aQFO02c',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 8,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 93,
					user_id : 7595068357298099257,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 100,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 80,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 6,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 33,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 9,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 38,
					document_id : -2651811142329569078,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 95,
				),
			),
		),
		hash : 0,
	),
	report_delivery_until_date : 53,
	paid_message_stars : 3911489355342378264,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 2210201823146031237,
			nanos : 10,
		),
		schedule_date : 26,
	),
	schedule_repeat_period : 91,
	summary_from_language : '0R4ImZKywWOSrxk8',
);
```