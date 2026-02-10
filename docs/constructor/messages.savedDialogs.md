# messages.savedDialogs

**Description** : *Represents some saved message dialogs &raquo;*

**Layer** : 222

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
				user_id : -7168573552472954852,
			),
			top_message : 7,
		),
		$client->monoForumDialog(
			unread_mark : true,
			nopaid_messages_exception : true,
			peer : $client->peerUser(
				user_id : -1624227892214577477,
			),
			top_message : 59,
			read_inbox_max_id : 35,
			read_outbox_max_id : 91,
			unread_count : 92,
			unread_reactions_count : 18,
			draft : $client->draftMessageEmpty(
				date : 95,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 41,
			peer_id : $client->peerUser(
				user_id : 7584172421215365922,
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
			id : 19,
			from_id : $client->peerUser(
				user_id : 3269539092157851426,
			),
			from_boosts_applied : 42,
			peer_id : $client->peerUser(
				user_id : -46347693446877604,
			),
			saved_peer_id : $client->peerUser(
				user_id : -2443478139063668231,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 3987883622363923794,
				),
				from_name : 'AcoIqE2BS6P0RumK',
				date : 86,
				channel_post : 75,
				post_author : 'nACd6MV4w51mGYLR',
				saved_from_peer : $client->peerUser(
					user_id : -7838639417119995490,
				),
				saved_from_msg_id : 27,
				saved_from_id : $client->peerUser(
					user_id : 1744888405577407724,
				),
				saved_from_name : 'jFGgLR74BQTnfIay',
				saved_date : 10,
				psa_type : 'qX9BKM74DzL8RoE3',
			),
			via_bot_id : 8744050852500085572,
			via_business_bot_id : -5119661932106378409,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 31,
				reply_to_peer_id : $client->peerUser(
					user_id : -6823644754631576024,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'MqnsNDKpW0vIdua9',
					date : 61,
					channel_post : 40,
					post_author : 'RnwFZrMxXHfYVNSc',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 31,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'J8bCtVdeuwsjh6vY',
					saved_date : 17,
					psa_type : 'nxwDib6BLtU4c03u',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 38,
				quote_text : 'laGXCxmqjgBA0z1e',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 44,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 80,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 68,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 95,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 90,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 30,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 71,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 2,
						language : 'BCNtsS5VXk8ORvAq',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 38,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 57,
						user_id : 1815637527130613674,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 48,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 52,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 71,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 95,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 98,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 23,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 32,
						document_id : -1532983000713396989,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 84,
					),
				),
				quote_offset : 84,
				todo_item_id : 25,
			),
			date : 6,
			message : '6PlVru9O1ni8jWAZ',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 8,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 40,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 44,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 3,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 24,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 19,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 55,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 7,
					language : 'QVHRhYJKuvt5Dgqc',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 65,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 55,
					user_id : -312977866380801656,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 70,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 81,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 44,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 47,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 18,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 11,
					document_id : 6731061156185445187,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 46,
				),
			),
			views : 94,
			forwards : 89,
			replies : $client->messageReplies(
				comments : true,
				replies : 10,
				replies_pts : 74,
				recent_repliers : array(
					$client->peerUser(
						user_id : -780487741176113888,
					),
					$client->peerChat(
						chat_id : 6817373333040253045,
					),
					$client->peerChannel(
						channel_id : 8879938793176834463,
					),
				),
				channel_id : 2571862331885824102,
				max_id : 30,
				read_max_id : 41,
			),
			edit_date : 14,
			post_author : 'RcYxw5uD1pivd0LB',
			grouped_id : 1290253058339371253,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 64,
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
						date : 14,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 16,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'r4xQ68hDzoGypbWZ',
					reason : 'NKRm1kdLJ6jHiWDg',
					text : 'xmP6FSLK9BJjAg8G',
				),
			),
			ttl_period : 41,
			quick_reply_shortcut_id : 51,
			effect : 6698097815363195306,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'CWPu0SbLOjEva1Y5',
				text : $client->textWithEntities(
					text : 'uRjd1nMoB8UcGgts',
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
			report_delivery_until_date : 2,
			paid_message_stars : -4604138573667004292,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 2495457114335229659,
					nanos : 62,
				),
				schedule_date : 30,
			),
			schedule_repeat_period : 79,
			summary_from_language : 'QX4ST1Z8K6GDocdx',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 81,
			from_id : $client->peerUser(
				user_id : -6940521362431424431,
			),
			peer_id : $client->peerUser(
				user_id : 8989577004927337521,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6693781797554785762,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 51,
				reply_to_peer_id : $client->peerUser(
					user_id : 2858168087220504626,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'CarqjXMgQ8ElIDG4',
					date : 34,
					channel_post : 8,
					post_author : 'nbClMsrPmycUheXD',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 25,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'GMSnTv5Z71p8bhHg',
					saved_date : 64,
					psa_type : 'XMhiQ5yufseWqmO4',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 41,
				quote_text : 'XlyWT3ORAPvfbwSC',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 49,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 29,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 92,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 92,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 49,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 38,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 66,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 65,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 71,
						language : 'Y5O8sJ1kL9c4xn7E',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 4,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 88,
						user_id : -4900267287855422905,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 66,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 86,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 20,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 73,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 37,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 40,
						document_id : -179233645242986219,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 13,
					),
				),
				quote_offset : 73,
				todo_item_id : 68,
			),
			date : 40,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 16,
						reaction : $client->reactionEmpty(...),
						count : 84,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 16,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 4,
					),
				),
			),
			ttl_period : 10,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4271856849061633091,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6158206677258481940,
			title : 'yhgQiVINnjtTLGuZ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 14,
			date : 39,
			version : 65,
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
				until_date : 53,
			),
		),
		$client->chatForbidden(
			id : 116698051267860383,
			title : 'lwdHUsMYKQ9VegB2',
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
			id : 6037406218426153139,
			access_hash : -5477661229478397081,
			title : 'InRW24NQMjCPqokV',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 31,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wgErxVF2jJvsmkS0',
					reason : 'wWnQ5rGidcR2HUm6',
					text : 'SpjYneOtQxui0JGK',
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
				until_date : 9,
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
				until_date : 28,
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
				max_id : 27,
			),
			color : $client->peerColor(
				color : 21,
				background_emoji_id : 2623876435511899357,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : -8415379762847861353,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 93,
			subscription_until_date : 45,
			bot_verification_icon : 7219742827868679822,
			send_paid_messages_stars : 2283323288823520584,
			linked_monoforum_id : -8261733861331636362,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -706698099973569628,
			access_hash : 2527279993743181322,
			title : '5Vhe4mZMqNtP7HGF',
			until_date : 2,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1822294986266897421,
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
			id : -7813792634049121634,
			access_hash : 4680037890218782019,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yUtRYx3PSOw1XzdJ',
					reason : 'S6Ptvpf8TuRBx3WQ',
					text : 'uI6Nz1jnPQKXVTy5',
				),
			),
			bot_inline_placeholder : 'wVxTZUBKdJy0pFuE',
			lang_code : '2rH5VRY0yJwKlhAW',
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
				max_id : 39,
			),
			color : $client->peerColor(
				color : 40,
				background_emoji_id : -771054408070545828,
			),
			profile_color : $client->peerColor(
				color : 78,
				background_emoji_id : 6856532094234846315,
			),
			bot_active_users : 36,
			bot_verification_icon : -3603419675734374818,
			send_paid_messages_stars : 3761924702304985045,
		),
	),
);
```