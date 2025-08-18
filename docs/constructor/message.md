# message

**Description** : *A message*

**Layer** : 211

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
	id : 71,
	from_id : $client->peerUser(
		user_id : -6497335904677516771,
	),
	from_boosts_applied : 3,
	peer_id : $client->peerUser(
		user_id : 434996006325241856,
	),
	saved_peer_id : $client->peerUser(
		user_id : -3409681642599487337,
	),
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 3645204475891682848,
		),
		from_name : 'Df05dLhAc91K4ukm',
		date : 68,
		channel_post : 72,
		post_author : 'gViF8QqC47kmZJeu',
		saved_from_peer : $client->peerUser(
			user_id : 6998273093574250024,
		),
		saved_from_msg_id : 63,
		saved_from_id : $client->peerUser(
			user_id : -1541370366837983166,
		),
		saved_from_name : 'Tb8MsYi1Wm2ICOqH',
		saved_date : 82,
		psa_type : 'Z4OFUkKf7lHR1uWe',
	),
	via_bot_id : -793374754227433587,
	via_business_bot_id : -1936864946238797244,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 47,
		reply_to_peer_id : $client->peerUser(
			user_id : 365941422189087694,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'jRGTIvtAPisr9KDb',
			date : 17,
			channel_post : 2,
			post_author : 'e9KhNtbYHAZpxcnG',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 80,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'qzKsNMmtpaVfRigH',
			saved_date : 98,
			psa_type : 'qxcYES4QbKNt2W1B',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 12,
		quote_text : 'zAJVEMhPKmyUplQi',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 52,
				length : 51,
			),
			$client->messageEntityMention(
				offset : 78,
				length : 29,
			),
			$client->messageEntityHashtag(
				offset : 45,
				length : 64,
			),
			$client->messageEntityBotCommand(
				offset : 45,
				length : 52,
			),
			$client->messageEntityUrl(
				offset : 65,
				length : 0,
			),
			$client->messageEntityEmail(
				offset : 64,
				length : 4,
			),
			$client->messageEntityBold(
				offset : 91,
				length : 41,
			),
			$client->messageEntityItalic(
				offset : 51,
				length : 18,
			),
			$client->messageEntityCode(
				offset : 1,
				length : 14,
			),
			$client->messageEntityPre(
				offset : 53,
				length : 75,
				language : 'jocAP54Bb2a8FXVM',
			),
			$client->messageEntityTextUrl(
				offset : 89,
				length : 60,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 96,
				length : 39,
				user_id : 5610032990819861754,
			),
			$client->inputMessageEntityMentionName(
				offset : 65,
				length : 45,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 33,
				length : 74,
			),
			$client->messageEntityCashtag(
				offset : 62,
				length : 86,
			),
			$client->messageEntityUnderline(
				offset : 47,
				length : 89,
			),
			$client->messageEntityStrike(
				offset : 18,
				length : 97,
			),
			$client->messageEntityBankCard(
				offset : 55,
				length : 87,
			),
			$client->messageEntitySpoiler(
				offset : 75,
				length : 20,
			),
			$client->messageEntityCustomEmoji(
				offset : 68,
				length : 19,
				document_id : 4671123344651618394,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 10,
				length : 84,
			),
		),
		quote_offset : 45,
		todo_item_id : 80,
	),
	date : 10,
	message : '40W1szbiqXGOCAfU',
	media : $client->messageMediaEmpty(),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 68,
			length : 7,
		),
		$client->messageEntityMention(
			offset : 94,
			length : 73,
		),
		$client->messageEntityHashtag(
			offset : 69,
			length : 77,
		),
		$client->messageEntityBotCommand(
			offset : 16,
			length : 30,
		),
		$client->messageEntityUrl(
			offset : 83,
			length : 83,
		),
		$client->messageEntityEmail(
			offset : 69,
			length : 37,
		),
		$client->messageEntityBold(
			offset : 99,
			length : 92,
		),
		$client->messageEntityItalic(
			offset : 84,
			length : 79,
		),
		$client->messageEntityCode(
			offset : 40,
			length : 49,
		),
		$client->messageEntityPre(
			offset : 12,
			length : 65,
			language : 'z2bBquYVtWv1RsC6',
		),
		$client->messageEntityTextUrl(
			offset : 61,
			length : 68,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 61,
			length : 59,
			user_id : -3234799795501130964,
		),
		$client->inputMessageEntityMentionName(
			offset : 15,
			length : 11,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 28,
			length : 61,
		),
		$client->messageEntityCashtag(
			offset : 46,
			length : 82,
		),
		$client->messageEntityUnderline(
			offset : 38,
			length : 79,
		),
		$client->messageEntityStrike(
			offset : 38,
			length : 22,
		),
		$client->messageEntityBankCard(
			offset : 75,
			length : 19,
		),
		$client->messageEntitySpoiler(
			offset : 25,
			length : 59,
		),
		$client->messageEntityCustomEmoji(
			offset : 73,
			length : 47,
			document_id : 3752464667910262680,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 75,
			length : 50,
		),
	),
	views : 48,
	forwards : 41,
	replies : $client->messageReplies(
		comments : true,
		replies : 94,
		replies_pts : 49,
		recent_repliers : array(
			$client->peerUser(
				user_id : -4547015416260958424,
			),
			$client->peerChat(
				chat_id : -5810555034147342747,
			),
			$client->peerChannel(
				channel_id : -7300768925009408656,
			),
		),
		channel_id : -2328277671170602171,
		max_id : 42,
		read_max_id : 12,
	),
	edit_date : 82,
	post_author : 'I728DrFQtiOKcRlj',
	grouped_id : 5734367279168893376,
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 19,
				reaction : $client->reactionEmpty(...),
				count : 89,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(...),
				date : 52,
				reaction : $client->reactionEmpty(...),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(...),
				count : 79,
			),
		),
	),
	restriction_reason : array(
		$client->restrictionReason(
			platform : 'n5D0qpFcXelORE7Q',
			reason : 'RSpur5co9TAvM8NO',
			text : 'P7S9aMrlhTLj4Usb',
		),
	),
	ttl_period : 53,
	quick_reply_shortcut_id : 7,
	effect : 1999602918068061103,
	factcheck : $client->factCheck(
		need_check : true,
		country : 'B1vjNJkVC4bo8lmE',
		text : $client->textWithEntities(
			text : '7CoIM2YLQfEnez0k',
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
		hash : -7692970285819102885,
	),
	report_delivery_until_date : 2,
	paid_message_stars : 3160151767377560586,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 9207627824687817325,
			nanos : 89,
		),
		schedule_date : 51,
	),
);
```