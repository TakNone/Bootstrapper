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
			id : 17,
			peer_id : $client->peerUser(
				user_id : -9170628199156937054,
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
			id : 11,
			from_id : $client->peerUser(
				user_id : -4505642936486149777,
			),
			from_boosts_applied : 13,
			peer_id : $client->peerUser(
				user_id : 7915861813533985632,
			),
			saved_peer_id : $client->peerUser(
				user_id : -7230049292021850575,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 7881275460179279371,
				),
				from_name : '2GVM5y0uqJ3I17Zo',
				date : 22,
				channel_post : 95,
				post_author : 'OQbci2EHnY6Rg8Dl',
				saved_from_peer : $client->peerUser(
					user_id : 2077787258998929257,
				),
				saved_from_msg_id : 70,
				saved_from_id : $client->peerUser(
					user_id : -2218137124026935817,
				),
				saved_from_name : 'oLtlrGTuKCRXFEH0',
				saved_date : 13,
				psa_type : 'sNEGW8e0RAkbpF26',
			),
			via_bot_id : -5150908982160391967,
			via_business_bot_id : -3461039604948027218,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 64,
				reply_to_peer_id : $client->peerUser(
					user_id : -6361700692030358587,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'CbeT5fq4t1jshapH',
					date : 13,
					channel_post : 45,
					post_author : 'yXvWjgQcAHDGxdeP',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 81,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'o0zUI1ABknEpa4Cs',
					saved_date : 35,
					psa_type : 'wQGkhjLo1r6Z90Wb',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 98,
				quote_text : 'HTKow9nWpR6bAI5C',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 32,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 8,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 24,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 40,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 63,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 15,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 48,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 45,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 87,
						language : 'QBfmLg7SFasIOJr4',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 7,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : 3169467170527816848,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 38,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 42,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 62,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 17,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 80,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 96,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 17,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 72,
						document_id : -6151098055309423877,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 100,
					),
				),
				quote_offset : 98,
				todo_item_id : 55,
			),
			date : 26,
			message : 'zxQwCgGeAR2t3qj6',
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
					length : 32,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 23,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 66,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 72,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 23,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 79,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 32,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 10,
					language : 'Nc2qI1ybV8oDtgx9',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 23,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 14,
					user_id : -2511865992974204382,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 85,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 46,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 18,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 30,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 18,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 26,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 11,
					document_id : -1643823324268981406,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 54,
				),
			),
			views : 9,
			forwards : 50,
			replies : $client->messageReplies(
				comments : true,
				replies : 48,
				replies_pts : 50,
				recent_repliers : array(
					$client->peerUser(
						user_id : 1977146130867488661,
					),
					$client->peerChat(
						chat_id : -5967020925011017712,
					),
					$client->peerChannel(
						channel_id : -7259729964424429510,
					),
				),
				channel_id : 6711015026787021289,
				max_id : 18,
				read_max_id : 32,
			),
			edit_date : 95,
			post_author : 'm3Kljpz8BI2QiqxC',
			grouped_id : -1634297870509523103,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 66,
						reaction : $client->reactionEmpty(...),
						count : 9,
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
						count : 0,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gLJkFftrpjys5AvH',
					reason : 'l1DfHLbpBWSxkieg',
					text : 'nx7AdmujX8Gl3qoN',
				),
			),
			ttl_period : 8,
			quick_reply_shortcut_id : 76,
			effect : -1526977878650992194,
			factcheck : $client->factCheck(
				need_check : true,
				country : '3VmnJDbWzcQ72iS9',
				text : $client->textWithEntities(
					text : 'J6AtdcRf0G5IDnq4',
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
			report_delivery_until_date : 73,
			paid_message_stars : 702003342902753850,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 165046381327309783,
					nanos : 63,
				),
				schedule_date : 78,
			),
			schedule_repeat_period : 20,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 95,
			from_id : $client->peerUser(
				user_id : 7618724131564498530,
			),
			peer_id : $client->peerUser(
				user_id : -7252536126575529905,
			),
			saved_peer_id : $client->peerUser(
				user_id : 236345508157592021,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 43,
				reply_to_peer_id : $client->peerUser(
					user_id : -8067134588329114696,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'DYSj2Fvwnm1ryQ3R',
					date : 26,
					channel_post : 96,
					post_author : '4Bod2Yeyp5PKZWCf',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 64,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'snmj9QdeBDWYfOql',
					saved_date : 10,
					psa_type : 'e3LGvlkyb4E0oZRM',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 79,
				quote_text : 'I2qNMx3HZb9wYLBr',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 81,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 47,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 47,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 45,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 64,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 85,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 30,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 35,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 76,
						language : '64gcqubU7ekO92C0',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 23,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 52,
						user_id : 9058992790035575051,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 71,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 23,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 52,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 77,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 58,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 14,
						document_id : 4054941715163406248,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 95,
					),
				),
				quote_offset : 27,
				todo_item_id : 37,
			),
			date : 85,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 34,
						reaction : $client->reactionEmpty(...),
						count : 77,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 42,
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
			ttl_period : 45,
		),
	),
	max_id : 84,
	read_inbox_max_id : 15,
	read_outbox_max_id : 42,
	unread_count : 83,
	chats : array(
		$client->chatEmpty(
			id : -2388195235757090095,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6150205420195563361,
			title : 'lzLyTjZR1Q2t7GuF',
			photo : $client->chatPhotoEmpty(),
			participants_count : 87,
			date : 91,
			version : 18,
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
				until_date : 91,
			),
		),
		$client->chatForbidden(
			id : 7758668870516173113,
			title : 'WUfBeuwhtXz4RvQL',
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
			id : 2837288406243076863,
			access_hash : 7718054722106245662,
			title : 'wFzbTm0BNIcOXsfQ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'JoaxvWwfzYgPciBM',
					reason : 'wGP3HceaUZpghb4k',
					text : 'b3L6JVcqlyjuXdHf',
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
				until_date : 75,
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
				until_date : 25,
			),
			participants_count : 55,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 43,
			),
			color : $client->peerColor(
				color : 33,
				background_emoji_id : -2732109826547363110,
			),
			profile_color : $client->peerColor(
				color : 83,
				background_emoji_id : -6329050115520385801,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 47,
			subscription_until_date : 98,
			bot_verification_icon : 867852228954280798,
			send_paid_messages_stars : -628117437003876194,
			linked_monoforum_id : -3439677215485792737,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 630093160485219686,
			access_hash : 4725098373384524996,
			title : '6Eylv5e7qGUcBQ9a',
			until_date : 15,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3295945119919466883,
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
			id : 1913678311081648206,
			access_hash : -8845918728565639885,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fzjeZTCB7EWhlKsF',
					reason : 'CkgD5nJlWvOhAI3F',
					text : 'Uy8paJZBYmONH5Cs',
				),
			),
			bot_inline_placeholder : 'cJy1nku7lH4PYVbA',
			lang_code : 'hdWctXGAqSkFD5sn',
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
				max_id : 68,
			),
			color : $client->peerColor(
				color : 32,
				background_emoji_id : 8298099953235813250,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : 6181810281216043199,
			),
			bot_active_users : 26,
			bot_verification_icon : -7037177677737386551,
			send_paid_messages_stars : -1831007757506758853,
		),
	),
);
```