# messages.savedDialogsSlice

**Description** : *Incomplete list of saved message dialogs &raquo; with messages and auxiliary data*

**Layer** : 218

```tl
messages.savedDialogsSlice#44ba9dd9 count:int dialogs:Vector<SavedDialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.SavedDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of saved message dialogs |
| <mark>dialogs</mark> | [`Vector<SavedDialog>`](type/SavedDialog) | List of saved message dialogs |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | List of last messages from dialogs |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.SavedDialogs](type/messages.SavedDialogs)

---

## Example

```php
$messagesSavedDialogs = $client->messages->savedDialogsSlice(
	count : 87,
	dialogs : array(
		$client->savedDialog(
			pinned : true,
			peer : $client->peerUser(
				user_id : 4513102083379143081,
			),
			top_message : 87,
		),
		$client->monoForumDialog(
			unread_mark : true,
			nopaid_messages_exception : true,
			peer : $client->peerUser(
				user_id : 8572820750347084614,
			),
			top_message : 31,
			read_inbox_max_id : 97,
			read_outbox_max_id : 26,
			unread_count : 77,
			unread_reactions_count : 17,
			draft : $client->draftMessageEmpty(
				date : 80,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 8,
			peer_id : $client->peerUser(
				user_id : -8914358366215177032,
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
			id : 88,
			from_id : $client->peerUser(
				user_id : 6340831506479558805,
			),
			from_boosts_applied : 98,
			peer_id : $client->peerUser(
				user_id : 1960462282983631179,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6283947228688956912,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 907406017787145568,
				),
				from_name : 'AJ1PriX6R5KY9qNs',
				date : 67,
				channel_post : 9,
				post_author : 'Qx1BJh7ZwcsbyKYH',
				saved_from_peer : $client->peerUser(
					user_id : 3087997507237017678,
				),
				saved_from_msg_id : 50,
				saved_from_id : $client->peerUser(
					user_id : 7155582656708191835,
				),
				saved_from_name : 'CjBuULMRKha4FyqE',
				saved_date : 50,
				psa_type : '4RIB37wAmgfqCbOJ',
			),
			via_bot_id : -7949104529167900466,
			via_business_bot_id : -1164074812104619272,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 72,
				reply_to_peer_id : $client->peerUser(
					user_id : 3380739248148177886,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'mBJFaPdYj9SRyoQc',
					date : 47,
					channel_post : 27,
					post_author : 'XABip2usTaErUjPO',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 79,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'nzkmbaIKigTh1eLM',
					saved_date : 42,
					psa_type : 'AHaTnfkUiK3wIXMQ',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 47,
				quote_text : '6CqTbc29zVvWRfwZ',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 80,
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
						length : 90,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 62,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 94,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 73,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 88,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 94,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 7,
						language : '8FRucKd6wNbVDXT7',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 36,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : 8402063976651515227,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 66,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 30,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 39,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 37,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 68,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 60,
						document_id : -1434733665178641863,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 84,
					),
				),
				quote_offset : 97,
				todo_item_id : 30,
			),
			date : 95,
			message : '2rSpLmiz4PIjeya8',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 99,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 99,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 32,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 26,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 81,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 16,
					language : '8BJXC5K3kZQivl9G',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 63,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 85,
					user_id : 3269347076972683803,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 21,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 80,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 64,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 86,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 9,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 58,
					document_id : -1612502790151253520,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 25,
				),
			),
			views : 4,
			forwards : 8,
			replies : $client->messageReplies(
				comments : true,
				replies : 53,
				replies_pts : 30,
				recent_repliers : array(
					$client->peerUser(
						user_id : -2337687066979281504,
					),
					$client->peerChat(
						chat_id : -5320930301613951118,
					),
					$client->peerChannel(
						channel_id : -2508589923113488675,
					),
				),
				channel_id : 8361728739007047661,
				max_id : 28,
				read_max_id : 6,
			),
			edit_date : 75,
			post_author : 'NUSliHRVEpwQB9O3',
			grouped_id : -5999297812998500555,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 9,
						reaction : $client->reactionEmpty(...),
						count : 44,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 7,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 1,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'SjlZXWrEC9ixvqwH',
					reason : 'N0x9JV6nfOoBPFzm',
					text : 'Fji9r83MNem4fU5R',
				),
			),
			ttl_period : 83,
			quick_reply_shortcut_id : 6,
			effect : -8756978995781997959,
			factcheck : $client->factCheck(
				need_check : true,
				country : '9LzmpI25J6Vi8sdk',
				text : $client->textWithEntities(
					text : 'VRMbAG8S4F3acslC',
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
			report_delivery_until_date : 95,
			paid_message_stars : 1832212438714365772,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 8524698466155233601,
					nanos : 58,
				),
				schedule_date : 19,
			),
			schedule_repeat_period : 3,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 37,
			from_id : $client->peerUser(
				user_id : 2244619120937687195,
			),
			peer_id : $client->peerUser(
				user_id : 2386832556739596513,
			),
			saved_peer_id : $client->peerUser(
				user_id : -7256535656424184203,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 63,
				reply_to_peer_id : $client->peerUser(
					user_id : -6772100850102404647,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'iXQZNrP5AjuYJC4h',
					date : 44,
					channel_post : 14,
					post_author : 'PiDYKw7ZEdGRgA0F',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 51,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'yQtKCm6GdHv5OMJx',
					saved_date : 89,
					psa_type : 'LdScemay75I4Tbo2',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 25,
				quote_text : 'iGD6lqCL1S2cWaXR',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 58,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 74,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 72,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 93,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 18,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 52,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 48,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 29,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 28,
						language : '47JYngWrGus1Afh0',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 15,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 71,
						user_id : 1765459082407049272,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 94,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 10,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 62,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 83,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 16,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 33,
						document_id : -3442249144521429444,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 86,
					),
				),
				quote_offset : 58,
				todo_item_id : 17,
			),
			date : 49,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 95,
						reaction : $client->reactionEmpty(...),
						count : 74,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 3,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 29,
					),
				),
			),
			ttl_period : 90,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2776656010482016938,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8017360390985373985,
			title : 'CJV4DczAMbUvamt8',
			photo : $client->chatPhotoEmpty(),
			participants_count : 98,
			date : 83,
			version : 79,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 60,
			),
		),
		$client->chatForbidden(
			id : 3931492242360650581,
			title : 'gUzyaVIpdqw5eikB',
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
			id : 3235119211768402615,
			access_hash : 8325240357435078954,
			title : 'KAZyovcQ0GFd72rl',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 3,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ngFDQq5tc9ZBYOaK',
					reason : 'qbizgwponSvAkCFe',
					text : 'PhWl8xyZASdmL5Dk',
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
				until_date : 13,
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
				until_date : 19,
			),
			participants_count : 13,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 69,
			),
			color : $client->peerColor(
				color : 98,
				background_emoji_id : 7092350875423575490,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : 1389173614948434234,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 17,
			subscription_until_date : 5,
			bot_verification_icon : -779836831883783084,
			send_paid_messages_stars : 373316616384404885,
			linked_monoforum_id : 7365853414847545112,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -910858344248734120,
			access_hash : 7255136615744366276,
			title : 'EBOuLYP7onFH5U6x',
			until_date : 94,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8557492690213592238,
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
			id : 4771971461241815529,
			access_hash : 2396468978132567788,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'roYj8SlIx7Wwuzn1',
					reason : 'zkCS1brngmQlc0ix',
					text : 'cMp8xuzBte7vJNUX',
				),
			),
			bot_inline_placeholder : 'oKn19aO5jMqcBFRL',
			lang_code : '7nEmao6MSVI8AzCK',
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
				max_id : 82,
			),
			color : $client->peerColor(
				color : 74,
				background_emoji_id : -3796226476695805821,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : -6643133699145141955,
			),
			bot_active_users : 85,
			bot_verification_icon : -4064026357188708699,
			send_paid_messages_stars : 6727792905906341097,
		),
	),
);
```