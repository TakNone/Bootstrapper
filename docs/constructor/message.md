# message

**Description** : *A message*

**Layer** : 214

```tl
message#9815cec8 flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true post:flags.14?true from_scheduled:flags.18?true legacy:flags.19?true edit_hide:flags.21?true pinned:flags.24?true noforwards:flags.26?true invert_media:flags.27?true flags2:# offline:flags2.1?true video_processing_pending:flags2.4?true paid_suggested_post_stars:flags2.8?true paid_suggested_post_ton:flags2.9?true id:int from_id:flags.8?Peer from_boosts_applied:flags.29?int peer_id:Peer saved_peer_id:flags.28?Peer fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long via_business_bot_id:flags2.0?long reply_to:flags.3?MessageReplyHeader date:int message:string media:flags.9?MessageMedia reply_markup:flags.6?ReplyMarkup entities:flags.7?Vector<MessageEntity> views:flags.10?int forwards:flags.10?int replies:flags.23?MessageReplies edit_date:flags.15?int post_author:flags.16?string grouped_id:flags.17?long reactions:flags.20?MessageReactions restriction_reason:flags.22?Vector<RestrictionReason> ttl_period:flags.25?int quick_reply_shortcut_id:flags.30?int effect:flags2.2?long factcheck:flags2.3?FactCheck report_delivery_until_date:flags2.5?int paid_message_stars:flags2.6?long suggested_post:flags2.7?SuggestedPost = Message;
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
| **paid_suggested_post_stars** | [`flags2.8?true`](type/true) | NOTHING |
| **paid_suggested_post_ton** | [`flags2.9?true`](type/true) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | ID of the message |
| **from_id** | [`flags.8?Peer`](type/Peer) | ID of the sender of the message |
| **from_boosts_applied** | [`flags.29?int`](type/int) | Supergroups only, contains the number of boosts this user has given the current supergroup, and should be shown in the UI in the header of the message. Only present for incoming messages from non-anonymous supergroup members that have boosted the supergroup. Note that this counter should be locally overridden for non-anonymous outgoing messages, according to the current value of channelFull.boosts_applied, to ensure the value is correct even for messages sent by the current user before a supergroup was boosted (or after a boost has expired or the number of boosts has changed); do not update this value for incoming messages from other users, even if their boosts have changed |
| <mark>peer_id</mark> | [`Peer`](type/Peer) | Peer ID, the chat where this message was sent |
| **saved_peer_id** | [`flags.28?Peer`](type/Peer) | Messages fetched from a saved messages dialog » will have peer=inputPeerSelf and the saved_peer_id flag set to the ID of the saved dialog |
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
| **report_delivery_until_date** | [`flags2.5?int`](type/int) | NOTHING |
| **paid_message_stars** | [`flags2.6?long`](type/long) | NOTHING |
| **suggested_post** | [`flags2.7?SuggestedPost`](type/SuggestedPost) | NOTHING |

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
	id : 14,
	from_id : $client->peerUser(
		user_id : 1404930792359573700,
	),
	from_boosts_applied : 97,
	peer_id : $client->peerUser(
		user_id : 8396959968034656507,
	),
	saved_peer_id : $client->peerUser(
		user_id : -8767034277592210060,
	),
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -6638492314748197369,
		),
		from_name : 'Cr13oEZV64xhUm58',
		date : 24,
		channel_post : 9,
		post_author : 'MWVbUxqApo9DGgNw',
		saved_from_peer : $client->peerUser(
			user_id : -2064492816091199094,
		),
		saved_from_msg_id : 100,
		saved_from_id : $client->peerUser(
			user_id : 8791713603612013151,
		),
		saved_from_name : 'rl5XqMbhi4dpQRuZ',
		saved_date : 57,
		psa_type : 'nkWCIzS0ytvbQ1BT',
	),
	via_bot_id : 5082916116846736481,
	via_business_bot_id : -971954582081668716,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 74,
		reply_to_peer_id : $client->peerUser(
			user_id : -771760589086591927,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'K8PRngFNZ6ifTrtH',
			date : 67,
			channel_post : 64,
			post_author : 'rRa21hYl397tMC4n',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 82,
			saved_from_id : $client->peerUser(...),
			saved_from_name : '3FMOlBxEgymAKkah',
			saved_date : 69,
			psa_type : '4lZqU5fjziAwPuVo',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 57,
		quote_text : 'vQznbUhtdNI62cZL',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 62,
				length : 5,
			),
			$client->messageEntityMention(
				offset : 45,
				length : 51,
			),
			$client->messageEntityHashtag(
				offset : 72,
				length : 35,
			),
			$client->messageEntityBotCommand(
				offset : 53,
				length : 67,
			),
			$client->messageEntityUrl(
				offset : 34,
				length : 21,
			),
			$client->messageEntityEmail(
				offset : 52,
				length : 10,
			),
			$client->messageEntityBold(
				offset : 99,
				length : 88,
			),
			$client->messageEntityItalic(
				offset : 17,
				length : 13,
			),
			$client->messageEntityCode(
				offset : 82,
				length : 15,
			),
			$client->messageEntityPre(
				offset : 26,
				length : 72,
				language : 'J3BZGcFktopPnbzD',
			),
			$client->messageEntityTextUrl(
				offset : 15,
				length : 9,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 20,
				length : 47,
				user_id : 4152688282071514183,
			),
			$client->inputMessageEntityMentionName(
				offset : 24,
				length : 15,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 70,
				length : 85,
			),
			$client->messageEntityCashtag(
				offset : 58,
				length : 37,
			),
			$client->messageEntityUnderline(
				offset : 41,
				length : 78,
			),
			$client->messageEntityStrike(
				offset : 50,
				length : 68,
			),
			$client->messageEntityBankCard(
				offset : 80,
				length : 49,
			),
			$client->messageEntitySpoiler(
				offset : 23,
				length : 44,
			),
			$client->messageEntityCustomEmoji(
				offset : 87,
				length : 1,
				document_id : 4866096416527800497,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 9,
				length : 72,
			),
		),
		quote_offset : 57,
		todo_item_id : 63,
	),
	date : 9,
	message : 'x7TJNP5SfoDuR3Eg',
	media : $client->messageMediaEmpty(),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 82,
			length : 75,
		),
		$client->messageEntityMention(
			offset : 46,
			length : 32,
		),
		$client->messageEntityHashtag(
			offset : 65,
			length : 32,
		),
		$client->messageEntityBotCommand(
			offset : 84,
			length : 16,
		),
		$client->messageEntityUrl(
			offset : 35,
			length : 11,
		),
		$client->messageEntityEmail(
			offset : 48,
			length : 6,
		),
		$client->messageEntityBold(
			offset : 60,
			length : 41,
		),
		$client->messageEntityItalic(
			offset : 47,
			length : 83,
		),
		$client->messageEntityCode(
			offset : 90,
			length : 44,
		),
		$client->messageEntityPre(
			offset : 20,
			length : 61,
			language : 'UW9M6dpsrISczmNg',
		),
		$client->messageEntityTextUrl(
			offset : 4,
			length : 43,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 44,
			length : 9,
			user_id : 8522216318125578594,
		),
		$client->inputMessageEntityMentionName(
			offset : 12,
			length : 14,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 64,
			length : 34,
		),
		$client->messageEntityCashtag(
			offset : 53,
			length : 17,
		),
		$client->messageEntityUnderline(
			offset : 73,
			length : 88,
		),
		$client->messageEntityStrike(
			offset : 93,
			length : 78,
		),
		$client->messageEntityBankCard(
			offset : 69,
			length : 65,
		),
		$client->messageEntitySpoiler(
			offset : 19,
			length : 23,
		),
		$client->messageEntityCustomEmoji(
			offset : 6,
			length : 67,
			document_id : -952967091881111521,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 55,
			length : 73,
		),
	),
	views : 75,
	forwards : 57,
	replies : $client->messageReplies(
		comments : true,
		replies : 61,
		replies_pts : 97,
		recent_repliers : array(
			$client->peerUser(
				user_id : 2750900256271158624,
			),
			$client->peerChat(
				chat_id : 8543291780069940869,
			),
			$client->peerChannel(
				channel_id : -8629360258393721083,
			),
		),
		channel_id : -7950718808214598591,
		max_id : 45,
		read_max_id : 15,
	),
	edit_date : 61,
	post_author : 'IpEyaAOGDUw3xtcQ',
	grouped_id : 2165167976770110056,
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 100,
				reaction : $client->reactionEmpty(...),
				count : 42,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(...),
				date : 33,
				reaction : $client->reactionEmpty(...),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(...),
				count : 10,
			),
		),
	),
	restriction_reason : array(
		$client->restrictionReason(
			platform : '6ATMBmvDRrQ1FK2b',
			reason : 'fkcYXUP7p3duKx5o',
			text : 'Eusbldq7nGvtAehV',
		),
	),
	ttl_period : 3,
	quick_reply_shortcut_id : 5,
	effect : -655379175834088055,
	factcheck : $client->factCheck(
		need_check : true,
		country : 'MOPeTVnJztv7E8Y2',
		text : $client->textWithEntities(
			text : 'jEANTVS9L7Z8Pcad',
			entities : array(
				$client->messageEntityUnknown(...),
				$client->messageEntityMention(...),
				$client->messageEntityHashtag(...),
				$client->messageEntityBotCommand(...),
				$client->messageEntityUrl(...),
				$client->messageEntityEmail(...),
				$client->messageEntityBold(...),
				$client->messageEntityItalic(...),
				$client->messageEntityCode(...),
				$client->messageEntityPre(...),
				$client->messageEntityTextUrl(...),
				$client->messageEntityMentionName(...),
				$client->inputMessageEntityMentionName(...),
				$client->messageEntityPhone(...),
				$client->messageEntityCashtag(...),
				$client->messageEntityUnderline(...),
				$client->messageEntityStrike(...),
				$client->messageEntityBankCard(...),
				$client->messageEntitySpoiler(...),
				$client->messageEntityCustomEmoji(...),
				$client->messageEntityBlockquote(...),
			),
		),
		hash : -8152226316909263030,
	),
	report_delivery_until_date : 79,
	paid_message_stars : 5713248897907157798,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 1140681503140693337,
			nanos : 30,
		),
		schedule_date : 21,
	),
);
```