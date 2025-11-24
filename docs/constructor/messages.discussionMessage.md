# messages.discussionMessage

**Description** : *Information about a message thread*

**Layer** : 218

```tl
messages.discussionMessage#a6341782 flags:# messages:Vector<Message> max_id:flags.0?int read_inbox_max_id:flags.1?int read_outbox_max_id:flags.2?int unread_count:int chats:Vector<Chat> users:Vector<User> = messages.DiscussionMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | The messages from which the thread starts. The messages are returned in reverse chronological order (i.e., in order of decreasing message ID) |
| **max_id** | [`flags.0?int`](type/int) | Message ID of latest reply in this thread |
| **read_inbox_max_id** | [`flags.1?int`](type/int) | Message ID of latest read incoming message in this thread |
| **read_outbox_max_id** | [`flags.2?int`](type/int) | Message ID of latest read outgoing message in this thread |
| <mark>unread_count</mark> | [`int`](type/int) | Number of unread messages |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in constructor |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in constructor |

---

## Type

[messages.DiscussionMessage](type/messages.DiscussionMessage)

---

## Example

```php
$messagesDiscussionMessage = $client->messages->discussionMessage(
	messages : array(
		$client->messageEmpty(
			id : 23,
			peer_id : $client->peerUser(
				user_id : -4603099418417825587,
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
			id : 73,
			from_id : $client->peerUser(
				user_id : 3284009755193450436,
			),
			from_boosts_applied : 78,
			peer_id : $client->peerUser(
				user_id : 8410357353932381463,
			),
			saved_peer_id : $client->peerUser(
				user_id : -3860719738410682892,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 6811985826670000403,
				),
				from_name : 'cKCJ7XYTaSj3GhIe',
				date : 86,
				channel_post : 1,
				post_author : 'a6FjBkwNt91sn3fb',
				saved_from_peer : $client->peerUser(
					user_id : -8083128511228336785,
				),
				saved_from_msg_id : 71,
				saved_from_id : $client->peerUser(
					user_id : -6101451517021871675,
				),
				saved_from_name : 'FeUnoqMQDcbSREv5',
				saved_date : 82,
				psa_type : 'BVCEhbRlQL9PKwcn',
			),
			via_bot_id : 4384871852139287590,
			via_business_bot_id : -963463738236699904,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 30,
				reply_to_peer_id : $client->peerUser(
					user_id : -8607674121363447988,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'oLOgFNJ4tW9PyBQk',
					date : 82,
					channel_post : 74,
					post_author : 'ztu5PsZAycUMx9wK',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 28,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'b7qkH2aI3UumQnEg',
					saved_date : 4,
					psa_type : 'vO4SrIbhYx0MnZL8',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 47,
				quote_text : 'bNQRTC3qL7iEDj9S',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 37,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 49,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 60,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 45,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 8,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 84,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 74,
						language : 'ZVYRNTiE5j9KuLFn',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 78,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 60,
						user_id : 5132663167416024043,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 12,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 0,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 82,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 15,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 56,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 5,
						document_id : 6902892882568532896,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 58,
					),
				),
				quote_offset : 54,
				todo_item_id : 19,
			),
			date : 83,
			message : 'y9E7ADwPzWvsl5Co',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 60,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 54,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 6,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 75,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 16,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 96,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 84,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 52,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 99,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 56,
					language : 'NALYBckWEQtqiKJn',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 50,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 37,
					user_id : -1609304056563060879,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 12,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 8,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 23,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 60,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 75,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 12,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 70,
					document_id : 3436520920577745203,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 16,
				),
			),
			views : 12,
			forwards : 64,
			replies : $client->messageReplies(
				comments : true,
				replies : 28,
				replies_pts : 92,
				recent_repliers : array(
					$client->peerUser(
						user_id : 5023060834552284560,
					),
					$client->peerChat(
						chat_id : 5995021972933402798,
					),
					$client->peerChannel(
						channel_id : -3866149499861059451,
					),
				),
				channel_id : -976878814659865164,
				max_id : 11,
				read_max_id : 51,
			),
			edit_date : 31,
			post_author : 'MZJnNVehlIbgB1va',
			grouped_id : 2765527709711321285,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 21,
						reaction : $client->reactionEmpty(...),
						count : 17,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 48,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 66,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'n6dmv4sSuyrWpGcP',
					reason : 'SEQN16vVnMedkKUs',
					text : 'I1plBCGrYXMt6h0L',
				),
			),
			ttl_period : 85,
			quick_reply_shortcut_id : 56,
			effect : -8243430601108900728,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'nyUQCAgfJl4GvRb7',
				text : $client->textWithEntities(
					text : 'NdAKXr6tn2HL7z8x',
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
				hash : 0,
			),
			report_delivery_until_date : 89,
			paid_message_stars : -7095657641737850967,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -6901392743702174550,
					nanos : 28,
				),
				schedule_date : 95,
			),
			schedule_repeat_period : 69,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 21,
			from_id : $client->peerUser(
				user_id : 7959112031001596615,
			),
			peer_id : $client->peerUser(
				user_id : 4418451385306016921,
			),
			saved_peer_id : $client->peerUser(
				user_id : 5208323510328636136,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 93,
				reply_to_peer_id : $client->peerUser(
					user_id : 3715791047166781504,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '3cLBrQDA5y2aFUdp',
					date : 74,
					channel_post : 20,
					post_author : '9C8IdlaZUG5AriyK',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 47,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'zEv6q0X24fdKN37k',
					saved_date : 66,
					psa_type : 'J8TLBjnxV9MHuKiD',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 86,
				quote_text : 'RW0xoQz1wF26A3bk',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 6,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 8,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 16,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 45,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 39,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 84,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 19,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 47,
						language : '0nvNIbj7uhmHspZD',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 74,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 52,
						user_id : -4150435830842436744,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 29,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 57,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 48,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 88,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 89,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 96,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 15,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 62,
						document_id : 6614684918662446063,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 27,
					),
				),
				quote_offset : 32,
				todo_item_id : 16,
			),
			date : 59,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 54,
						reaction : $client->reactionEmpty(...),
						count : 65,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 5,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 66,
					),
				),
			),
			ttl_period : 43,
		),
	),
	max_id : 61,
	read_inbox_max_id : 22,
	read_outbox_max_id : 26,
	unread_count : 80,
	chats : array(
		$client->chatEmpty(
			id : -5522470122581223673,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1996017545391287853,
			title : '1n4d7oESkMWGsxlr',
			photo : $client->chatPhotoEmpty(),
			participants_count : 49,
			date : 52,
			version : 0,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 72,
			),
		),
		$client->chatForbidden(
			id : -4159633108086250978,
			title : 'cg0W483KFfaHbLMr',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 2177575882368395935,
			access_hash : 2840194888050405538,
			title : 'rHSIZiBfAkqsYCwd',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 6,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xbSgfZBw9YdNsoPn',
					reason : 'dYbt9VX6l3oE2aIQ',
					text : 'Ww0SPQJc421byrEg',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 44,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 61,
			),
			participants_count : 76,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 58,
			),
			color : $client->peerColor(
				color : 14,
				background_emoji_id : 2050174541119441007,
			),
			profile_color : $client->peerColor(
				color : 16,
				background_emoji_id : -3941965348448863336,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 74,
			subscription_until_date : 96,
			bot_verification_icon : -4827539318702573731,
			send_paid_messages_stars : -5962187502533413456,
			linked_monoforum_id : -7315786775750876364,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7969644449687402308,
			access_hash : -6553293555409244544,
			title : 'z30Mfol2IbAnTtCU',
			until_date : 37,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2848995194830793636,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : -4335551037309180886,
			access_hash : 7365055774009362179,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 37,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Z80LXcR5nhBrNHlF',
					reason : 'KWlE2BRu5q7XzayJ',
					text : 'HQ9GZO4cp8AJFYwK',
				),
			),
			bot_inline_placeholder : 'K3PspdihMXH4bD1r',
			lang_code : 'xtr0G12ALYonBJvs',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 51,
			),
			color : $client->peerColor(
				color : 42,
				background_emoji_id : 4668524503370492049,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : -3271387284208872703,
			),
			bot_active_users : 96,
			bot_verification_icon : -6602793218747538570,
			send_paid_messages_stars : -1051037976220124689,
		),
	),
);
```