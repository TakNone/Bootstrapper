# messages.discussionMessage

**Description** : *Information about a message thread*

**Layer** : 222

```tl
messages.discussionMessage#a6341782 flags:# messages:Vector<Message> max_id:flags.0?int read_inbox_max_id:flags.1?int read_outbox_max_id:flags.2?int unread_count:int chats:Vector<Chat> users:Vector<User> = messages.DiscussionMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
			id : 65,
			peer_id : $client->peerUser(
				user_id : 4599803109475406116,
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
			id : 74,
			from_id : $client->peerUser(
				user_id : -7587855993950152430,
			),
			from_boosts_applied : 14,
			peer_id : $client->peerUser(
				user_id : 1247168673197942074,
			),
			saved_peer_id : $client->peerUser(
				user_id : -8977408830373494671,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -430403730483372520,
				),
				from_name : 'ELeFaSVkQx83JUcf',
				date : 51,
				channel_post : 49,
				post_author : 'IDiyx4LNnAEXS25B',
				saved_from_peer : $client->peerUser(
					user_id : 1250956554395415260,
				),
				saved_from_msg_id : 93,
				saved_from_id : $client->peerUser(
					user_id : -3909967130944839567,
				),
				saved_from_name : 'SdVspiWroALMBg6U',
				saved_date : 3,
				psa_type : 'VZoO8Aj3hn0RiUma',
			),
			via_bot_id : 3665706152013736085,
			via_business_bot_id : -8470132586259478170,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 90,
				reply_to_peer_id : $client->peerUser(
					user_id : -9059836254165164033,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'dIuMeTs3HnXqRbVJ',
					date : 85,
					channel_post : 68,
					post_author : 'JSQwqYCAWeKkXdnx',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 91,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'HLjWodrBQPza6vNq',
					saved_date : 25,
					psa_type : 'uaVg0BAJyIGTW4iR',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 100,
				quote_text : 'kGAfh96wCN2XrcEF',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 29,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 60,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 14,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 48,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 96,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 44,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 42,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 14,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 17,
						language : 'O5pKL6r2xmTCvJMI',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 60,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 36,
						user_id : 4463181655965034509,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 42,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 83,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 39,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 6,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 52,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 9,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 38,
						document_id : 4197981971726280561,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 84,
					),
				),
				quote_offset : 95,
				todo_item_id : 79,
			),
			date : 9,
			message : 'wdNOLMD5VRC4x7vH',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 89,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 73,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 22,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 98,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 46,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 70,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 62,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 67,
					language : 'gTcZHAV0G29M1z3N',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 47,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 76,
					user_id : -2552762375243979748,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 20,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 36,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 52,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 76,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 26,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 77,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 91,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 24,
					document_id : 7186975945108337131,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 51,
				),
			),
			views : 75,
			forwards : 16,
			replies : $client->messageReplies(
				comments : true,
				replies : 65,
				replies_pts : 85,
				recent_repliers : array(
					$client->peerUser(
						user_id : 7646576902166919287,
					),
					$client->peerChat(
						chat_id : 6465648484329531628,
					),
					$client->peerChannel(
						channel_id : 7378404136596746814,
					),
				),
				channel_id : 5099837699425638803,
				max_id : 99,
				read_max_id : 27,
			),
			edit_date : 27,
			post_author : 'oWGySPxdKMDXOav5',
			grouped_id : -7673328488174524361,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 45,
						reaction : $client->reactionEmpty(...),
						count : 99,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 93,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 47,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'S7F5uWv40RLraGD8',
					reason : 'xCwQNrDlfWqsbP6o',
					text : 'mTF1bM2QyfR7ipkZ',
				),
			),
			ttl_period : 42,
			quick_reply_shortcut_id : 89,
			effect : -6246702614983963651,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'gTuYB5V4bIzrh3Zt',
				text : $client->textWithEntities(
					text : 'dZ6iW3JEr89sLUv5',
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
			report_delivery_until_date : 93,
			paid_message_stars : -6987703462171884217,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -4861956484280828945,
					nanos : 95,
				),
				schedule_date : 56,
			),
			schedule_repeat_period : 38,
			summary_from_language : 'gnt2lqfmpshjPDc7',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 91,
			from_id : $client->peerUser(
				user_id : -2706385482844921672,
			),
			peer_id : $client->peerUser(
				user_id : -343483549654977587,
			),
			saved_peer_id : $client->peerUser(
				user_id : 536906545441367895,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 11,
				reply_to_peer_id : $client->peerUser(
					user_id : -3347506089681232045,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '7oBxFgbPcQ08WNAY',
					date : 1,
					channel_post : 30,
					post_author : 'El1U2RqICeQSi5A7',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 10,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'qDAfEQj6IZiYoasv',
					saved_date : 61,
					psa_type : '7Q3JqpeAXvIx9NzP',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 28,
				quote_text : 'Zsv7UeBirgp901cF',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 19,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 59,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 75,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 76,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 43,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 83,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 93,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 61,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 34,
						language : 'XFxuidwZzIVBYlqU',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 24,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 94,
						user_id : -226237779926027216,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 34,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 6,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 21,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 19,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 55,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 64,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 85,
						document_id : 8351806178331392213,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 6,
					),
				),
				quote_offset : 29,
				todo_item_id : 67,
			),
			date : 68,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 60,
						reaction : $client->reactionEmpty(...),
						count : 66,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 29,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 35,
					),
				),
			),
			ttl_period : 55,
		),
	),
	max_id : 38,
	read_inbox_max_id : 46,
	read_outbox_max_id : 62,
	unread_count : 3,
	chats : array(
		$client->chatEmpty(
			id : -2866159357624176597,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7857546582494646351,
			title : '1PGqBbvT0jUrLKks',
			photo : $client->chatPhotoEmpty(),
			participants_count : 43,
			date : 86,
			version : 97,
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
				until_date : 89,
			),
		),
		$client->chatForbidden(
			id : -1951139653998639620,
			title : 'dDc5VWeCPNvZkMyq',
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
			id : 1339728432283837421,
			access_hash : 5024071214083465984,
			title : 'Dc3Ew58TiPQjZYnk',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7dFvapn3y85CkYWl',
					reason : 'UDZntlcMfrT8yXE6',
					text : 'dB3qsD4HovZc7rwA',
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
				until_date : 94,
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
				until_date : 1,
			),
			participants_count : 100,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 78,
			),
			color : $client->peerColor(
				color : 99,
				background_emoji_id : -3704663000638112234,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : 316914076755195314,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 28,
			subscription_until_date : 53,
			bot_verification_icon : -458695513660138980,
			send_paid_messages_stars : -1712742174011315566,
			linked_monoforum_id : -8601545039519164958,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -8451529608901388037,
			access_hash : 1305831296995164995,
			title : 'JDp2PBWlsvnjqoCb',
			until_date : 44,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7346831600739615743,
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
			bot_forum_can_manage_topics : true,
			id : -4834467234608847120,
			access_hash : -44054220564297999,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'sjgkrt83oeaCPZMO',
					reason : 'zFoMVmYNnW2bdEGS',
					text : 'PD8ksiNOcBFxAdIT',
				),
			),
			bot_inline_placeholder : 'jxOP6sMYULIbtuWV',
			lang_code : 'G3s1FHyZlKtXS7V6',
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
				max_id : 17,
			),
			color : $client->peerColor(
				color : 21,
				background_emoji_id : -7434632490566204102,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : 9016721361051697664,
			),
			bot_active_users : 80,
			bot_verification_icon : -7391001410831760402,
			send_paid_messages_stars : 6952338463662627001,
		),
	),
);
```