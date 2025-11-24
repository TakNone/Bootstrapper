# messages.savedDialogs

**Description** : *Represents some saved message dialogs &raquo;*

**Layer** : 218

```tl
messages.savedDialogs#f83ae221 dialogs:Vector<SavedDialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.SavedDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dialogs</mark> | [`Vector<SavedDialog>`](type/SavedDialog) | Saved message dialogs » |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | List of last messages from each saved dialog |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.SavedDialogs](type/messages.SavedDialogs)

---

## Example

```php
$messagesSavedDialogs = $client->messages->savedDialogs(
	dialogs : array(
		$client->savedDialog(
			pinned : true,
			peer : $client->peerUser(
				user_id : -2503060673259985734,
			),
			top_message : 26,
		),
		$client->monoForumDialog(
			unread_mark : true,
			nopaid_messages_exception : true,
			peer : $client->peerUser(
				user_id : 2104918028873432017,
			),
			top_message : 13,
			read_inbox_max_id : 1,
			read_outbox_max_id : 86,
			unread_count : 92,
			unread_reactions_count : 40,
			draft : $client->draftMessageEmpty(
				date : 15,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 96,
			peer_id : $client->peerUser(
				user_id : 3608670428771774413,
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
			id : 61,
			from_id : $client->peerUser(
				user_id : -6455330803473676949,
			),
			from_boosts_applied : 76,
			peer_id : $client->peerUser(
				user_id : -6698791621619743964,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6231650033865516583,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -9129783666980808433,
				),
				from_name : 'xNped4Gyan1oLOjS',
				date : 50,
				channel_post : 78,
				post_author : 'K0m94nAPUgW3DXQz',
				saved_from_peer : $client->peerUser(
					user_id : -9033687225221923067,
				),
				saved_from_msg_id : 26,
				saved_from_id : $client->peerUser(
					user_id : -5140773657443083979,
				),
				saved_from_name : 'Gfd70vmk9qUQ584P',
				saved_date : 61,
				psa_type : 'sOxBXg6oRJjYqimd',
			),
			via_bot_id : -556423080357903646,
			via_business_bot_id : 1612768507794199540,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 50,
				reply_to_peer_id : $client->peerUser(
					user_id : -8677807051234486094,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'Pf4ZGWCYXdMluvT8',
					date : 24,
					channel_post : 66,
					post_author : 'p2YVNsFP0fLeU5jk',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 60,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '02afyzKsPR1oApeX',
					saved_date : 16,
					psa_type : 'LItmRpNQGzPivMcZ',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 85,
				quote_text : '0fJY4VXR81g2aAcp',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 60,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 1,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 29,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 96,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 43,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 63,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 32,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 61,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 60,
						language : 'KPAgMnU1kGqXFYt7',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 96,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 34,
						user_id : -4807939947163520271,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 28,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 20,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 25,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 49,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 48,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 83,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 55,
						document_id : -4042387353149083879,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 90,
					),
				),
				quote_offset : 1,
				todo_item_id : 39,
			),
			date : 84,
			message : 'iIsGuFHnwUK7moVQ',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 33,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 32,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 25,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 69,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 5,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 77,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 52,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 87,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 76,
					language : '0AdBO4vkVEjTnFxr',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 51,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 47,
					user_id : -491089018054429705,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 47,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 34,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 68,
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
					length : 24,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 98,
					document_id : 1019985723636225186,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 9,
				),
			),
			views : 49,
			forwards : 62,
			replies : $client->messageReplies(
				comments : true,
				replies : 54,
				replies_pts : 89,
				recent_repliers : array(
					$client->peerUser(
						user_id : 4592917798150080453,
					),
					$client->peerChat(
						chat_id : 205448104146582836,
					),
					$client->peerChannel(
						channel_id : -1763692582350281601,
					),
				),
				channel_id : -1144907426920036912,
				max_id : 4,
				read_max_id : 20,
			),
			edit_date : 98,
			post_author : 'HaVs8DimKQYhrqAd',
			grouped_id : 5946883681682535096,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 65,
						reaction : $client->reactionEmpty(...),
						count : 96,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 54,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 42,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'SmTr2LzFPy1JinOl',
					reason : 'S2PUzZlXQBRjr4Jk',
					text : 'xoWypVSivEU4N5dR',
				),
			),
			ttl_period : 24,
			quick_reply_shortcut_id : 79,
			effect : -5937877940137394845,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'cpYh1NXLBxtny2SV',
				text : $client->textWithEntities(
					text : 'n46WZSpkLJIwryvg',
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
			report_delivery_until_date : 66,
			paid_message_stars : -9148015927177403221,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 2849880672577618139,
					nanos : 61,
				),
				schedule_date : 46,
			),
			schedule_repeat_period : 38,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 68,
			from_id : $client->peerUser(
				user_id : 3108687700274529020,
			),
			peer_id : $client->peerUser(
				user_id : -7688385039971686084,
			),
			saved_peer_id : $client->peerUser(
				user_id : -7010842496889320757,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 39,
				reply_to_peer_id : $client->peerUser(
					user_id : -8783541121138222825,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '5XdkEOUZgiwVuebs',
					date : 59,
					channel_post : 65,
					post_author : 'AqYWPp51zML2Udis',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 92,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'IdN8MEi4lboaf1Js',
					saved_date : 43,
					psa_type : 'TcKkoyJuDSpAR5jM',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 75,
				quote_text : 'QXdItKj87awNPDs4',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 68,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 55,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 20,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 54,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 0,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 13,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 16,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 87,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 79,
						language : '75sb1VQvpdAaJPl2',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 28,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 76,
						user_id : 250760504979303387,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 1,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 42,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 32,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 19,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 83,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 43,
						document_id : 3983942389173687209,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 53,
					),
				),
				quote_offset : 64,
				todo_item_id : 8,
			),
			date : 26,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 49,
						reaction : $client->reactionEmpty(...),
						count : 47,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 98,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 6,
					),
				),
			),
			ttl_period : 34,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -296480944965584787,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 505645340461617802,
			title : 'BOLofTQ62EahxrN5',
			photo : $client->chatPhotoEmpty(),
			participants_count : 51,
			date : 100,
			version : 94,
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
				until_date : 93,
			),
		),
		$client->chatForbidden(
			id : 9188714476539815848,
			title : 'FV3YpwNc0BUWhfbq',
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
			id : -699005985138341813,
			access_hash : 2978786541641604904,
			title : 'uwcnUiH0txDoC9as',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 81,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dw4gYWPzKAm1Xuh7',
					reason : 'TcKP2BihQ4Gg1NdR',
					text : 'yCtoGvkw81Qd0aZX',
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
				until_date : 68,
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
				until_date : 43,
			),
			participants_count : 95,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 28,
			),
			color : $client->peerColor(
				color : 98,
				background_emoji_id : -4820222237686973946,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : -5019743239935306363,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 26,
			subscription_until_date : 37,
			bot_verification_icon : 1452750194269691274,
			send_paid_messages_stars : -8802698044035535478,
			linked_monoforum_id : -9042693807043869848,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4475746153970569420,
			access_hash : -2745154140122286921,
			title : '9uo3zvPFqBJye2lR',
			until_date : 78,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4109072617191311278,
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
			id : -4179957405377580256,
			access_hash : -2291092253464325264,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 31,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Iz2QLmq0H5g4Nba7',
					reason : 'DEzdnmTIA78QfwbV',
					text : 'GBnHRDzVdYT0Fjh7',
				),
			),
			bot_inline_placeholder : 'l8OrumviVnDUxjfd',
			lang_code : 'gU38HqxGhAWlFPik',
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
				max_id : 44,
			),
			color : $client->peerColor(
				color : 56,
				background_emoji_id : 3265577176220639157,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : 5521873292818938255,
			),
			bot_active_users : 12,
			bot_verification_icon : 246115378337357731,
			send_paid_messages_stars : 1572992430033940542,
		),
	),
);
```