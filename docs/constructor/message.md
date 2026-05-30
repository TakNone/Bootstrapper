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
	id : 72,
	from_id : $client->peerUser(
		user_id : 4933360477069249691,
	),
	from_boosts_applied : 11,
	peer_id : $client->peerUser(
		user_id : 5260066080178285774,
	),
	saved_peer_id : $client->peerUser(
		user_id : -6308732821637192569,
	),
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -6769230460896211758,
		),
		from_name : 'NiQLwlnIDcXPq1Kb',
		date : 95,
		channel_post : 95,
		post_author : 'EIro0vGRZM1LAX9W',
		saved_from_peer : $client->peerUser(
			user_id : 1329397753784887950,
		),
		saved_from_msg_id : 90,
		saved_from_id : $client->peerUser(
			user_id : -5653525656602328511,
		),
		saved_from_name : 'Z53mazNReLwVUQdM',
		saved_date : 98,
		psa_type : 'sPXE3kvmblHnLtu9',
	),
	via_bot_id : -3698104796676700422,
	via_business_bot_id : 1882953120395213709,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 0,
		reply_to_peer_id : $client->peerUser(
			user_id : 1275832017121780240,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 985413296188363143,
			),
			from_name : 'txAshZkHdKPjDI9B',
			date : 77,
			channel_post : 15,
			post_author : '2QRzlfBW6YrsU4F8',
			saved_from_peer : $client->peerUser(
				user_id : -5757257287091706597,
			),
			saved_from_msg_id : 58,
			saved_from_id : $client->peerUser(
				user_id : 1397705640702412566,
			),
			saved_from_name : 'vIlRC9iZbzmFQ7LX',
			saved_date : 61,
			psa_type : 'YlC9nLA43v20WDor',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 35,
		quote_text : 'v79Z6mCVzlJj5ptc',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 6,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 33,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 63,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 61,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 17,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 79,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 12,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 62,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 26,
				language : 'gBLISm6z4Z0fXo8A',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 18,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 0,
				user_id : 5950145528097994065,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 22,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 97,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 95,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 39,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 72,
				document_id : -3083764836715526007,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 96,
			),
		),
		quote_offset : 53,
		todo_item_id : 90,
	),
	date : 19,
	message : 'E9ZdkvAszOW5XS1h',
	media : $client->messageMediaEmpty(),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 10,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 31,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 6,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 1,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 32,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 4,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 44,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 77,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 44,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 44,
			language : 'LBGHIZz3RaEyYi0x',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 32,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 91,
			user_id : 7445298944958213760,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 46,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 3,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 87,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 84,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 15,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 97,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 26,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 57,
			document_id : -3133894924322204395,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 50,
		),
	),
	views : 27,
	forwards : 58,
	replies : $client->messageReplies(
		comments : true,
		replies : 85,
		replies_pts : 66,
		recent_repliers : array(
			$client->peerUser(
				user_id : -7032317925707764508,
			),
			$client->peerChat(
				chat_id : -8887282505175129788,
			),
			$client->peerChannel(
				channel_id : 585357981602258668,
			),
		),
		channel_id : 8588790441014605034,
		max_id : 87,
		read_max_id : 84,
	),
	edit_date : 49,
	post_author : 'M4Zk1Qg2n9VHc6fU',
	grouped_id : -5180161155791501027,
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 21,
				reaction : $client->reactionEmpty(),
				count : 77,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(
					user_id : 5320287870980933546,
				),
				date : 82,
				reaction : $client->reactionEmpty(),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(
					user_id : 3382578101526674916,
				),
				count : 22,
			),
		),
	),
	restriction_reason : array(
		$client->restrictionReason(
			platform : '8BkPMiFgmZqTlSXO',
			reason : 'iljmewhUzNx6nC2k',
			text : '0NHOB9ES1MTflyGb',
		),
	),
	ttl_period : 10,
	quick_reply_shortcut_id : 60,
	effect : 2773951068553268741,
	factcheck : $client->factCheck(
		need_check : true,
		country : 'Lu8oBs5hPXl3pfY4',
		text : $client->textWithEntities(
			text : 'bx5TY4ZNPrHiUm8R',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 55,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 32,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 41,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 14,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 50,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 84,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 22,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 55,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 68,
					language : 'EhLXsiv2FJMaC89G',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 88,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 46,
					user_id : 3523055638832350786,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 19,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 36,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 0,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 0,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 32,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 85,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 93,
					document_id : -3669886413650530086,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 28,
				),
			),
		),
		hash : 0,
	),
	report_delivery_until_date : 98,
	paid_message_stars : 4746046061689887864,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 2699116216036296333,
			nanos : 66,
		),
		schedule_date : 72,
	),
	schedule_repeat_period : 49,
	summary_from_language : 'TRAxjs8gCQPhLBVm',
);
```