# updateBotGuestChatQuery

**Layer** : 225

```tl
updateBotGuestChatQuery#cdd4093d flags:# query_id:long message:Message reference_messages:flags.0?Vector<Message> qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>message</mark> | [`Message`](type/Message) | NOTHING |
| **reference_messages** | [`flags.0?Vector<Message>`](type/Message) | NOTHING |
| <mark>qts</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotGuestChatQuery(
	query_id : 3874762870780325718,
	message : $client->messageEmpty(
		id : 47,
		peer_id : $client->peerUser(
			user_id : 4634799347678212742,
		),
	),
	reference_messages : array(
		$client->messageEmpty(
			id : 37,
			peer_id : $client->peerUser(
				user_id : -682588126482226332,
			),
		),
		$client->message(
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
			id : 29,
			from_id : $client->peerUser(
				user_id : -1882622648019827203,
			),
			from_boosts_applied : 84,
			from_rank : '24NCdczoEBHajtuI',
			peer_id : $client->peerUser(
				user_id : 3252971555592277397,
			),
			saved_peer_id : $client->peerUser(
				user_id : -3846461442405980954,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -1487882501074686554,
				),
				from_name : 'W4mzHB9ha2T70nFD',
				date : 61,
				channel_post : 31,
				post_author : 'hVBdvAxteKPlUNCy',
				saved_from_peer : $client->peerUser(
					user_id : 7897976267920069696,
				),
				saved_from_msg_id : 3,
				saved_from_id : $client->peerUser(
					user_id : 2398034674378757225,
				),
				saved_from_name : 'b5CLXMDIT6eOt3NP',
				saved_date : 67,
				psa_type : 'ZyC3u6sPJ2KbxEBj',
			),
			via_bot_id : 2005087885055860787,
			via_business_bot_id : 5121912548371984667,
			guestchat_via_from : $client->peerUser(
				user_id : 8693093126272703174,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 96,
				reply_to_peer_id : $client->peerUser(
					user_id : -4222863013201025311,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'xOZnJDmGizc945u2',
					date : 5,
					channel_post : 72,
					post_author : 'r4ay7xAYQ3wUKjS8',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 84,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'Ud4AsYo6HNDr2KRO',
					saved_date : 21,
					psa_type : 'VrP0ev6dmtFslZj1',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 39,
				quote_text : 'xs2L6pnGYkH1RiIq',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 66,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 70,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 75,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 45,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 45,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 72,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 100,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 23,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 96,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 80,
						language : 'fXNYTPqZ3Kw1Ght4',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 11,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 29,
						user_id : -732406194164241813,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 55,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 59,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 52,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 95,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 42,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 55,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 29,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 59,
						document_id : 2614691918417073969,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 89,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 8,
						date : 78,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 28,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 71,
						old_text : 'koAP3hXCOF1LQfsp',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 65,
					),
				),
				quote_offset : 2,
				todo_item_id : 80,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			date : 7,
			message : 'gewoFWhalr4sBDJS',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 79,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 23,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 65,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 71,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 0,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 77,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 47,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 21,
					language : 'MJXCK8WPjoxiHsyZ',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 53,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 56,
					user_id : 2930965528707055232,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 7,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 96,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 79,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 2,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 63,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 78,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 54,
					document_id : 456799455156372994,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 45,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 51,
					date : 19,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 4,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 39,
					old_text : 'uX4hB5VKjHw9yLAT',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 39,
				),
			),
			views : 36,
			forwards : 9,
			replies : $client->messageReplies(
				comments : true,
				replies : 70,
				replies_pts : 60,
				recent_repliers : array(
					$client->peerUser(
						user_id : 1807461645355830862,
					),
					$client->peerChat(
						chat_id : 995994139827223685,
					),
					$client->peerChannel(
						channel_id : -3627249068158684404,
					),
				),
				channel_id : 3658145463169705192,
				max_id : 40,
				read_max_id : 1,
			),
			edit_date : 53,
			post_author : 'yimG1buQCsVBMqj6',
			grouped_id : -6401858897913715393,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 72,
						reaction : $client->reactionEmpty(...),
						count : 2,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 63,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 33,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'rDbs0NhjKuW3EPLH',
					reason : 'RGYZcyNpadL235BF',
					text : 'YNRcE4u3TUK6gmWJ',
				),
			),
			ttl_period : 35,
			quick_reply_shortcut_id : 64,
			effect : -216780564797548883,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'idxf2kprAygw8qDW',
				text : $client->textWithEntities(
					text : 'V2LZbsRw1tfic3JI',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				hash : 0,
			),
			report_delivery_until_date : 32,
			paid_message_stars : -7993621195001222142,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -7504598318024113971,
					nanos : 66,
				),
				schedule_date : 12,
			),
			schedule_repeat_period : 68,
			summary_from_language : 'IXqe2Hgvi3t7PQEr',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 9,
			from_id : $client->peerUser(
				user_id : 8056633100541170244,
			),
			peer_id : $client->peerUser(
				user_id : 2143624076366306492,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8654235719407363226,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 4,
				reply_to_peer_id : $client->peerUser(
					user_id : -6831250811607125592,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'zPq8pwlvT051HW6D',
					date : 70,
					channel_post : 73,
					post_author : 'hWBPr7IxNH8LKGV5',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 39,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'KBo2CUT6149h5SyH',
					saved_date : 3,
					psa_type : 'ZLXPmHTeBVs6AjF1',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 65,
				quote_text : 'X3mObxFLpqAasE8N',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 59,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 3,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 39,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 72,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 3,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 71,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 36,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 82,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 49,
						language : 'K7Ss4IgoepRZkyXY',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 52,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 66,
						user_id : 8325077375380960344,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 57,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 2,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 75,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 0,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 61,
						document_id : -7023679379631779588,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 71,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 81,
						date : 83,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 53,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 58,
						old_text : 'iT2yrYWBUK8pe5AQ',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 4,
					),
				),
				quote_offset : 23,
				todo_item_id : 93,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			date : 28,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 1,
						reaction : $client->reactionEmpty(...),
						count : 8,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 60,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 77,
					),
				),
			),
			ttl_period : 76,
		),
	),
	qts : 70,
);
```