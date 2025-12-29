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
	count : 67,
	dialogs : array(
		$client->savedDialog(
			pinned : true,
			peer : $client->peerUser(
				user_id : 4957170233082408620,
			),
			top_message : 44,
		),
		$client->monoForumDialog(
			unread_mark : true,
			nopaid_messages_exception : true,
			peer : $client->peerUser(
				user_id : -4606338184135685046,
			),
			top_message : 91,
			read_inbox_max_id : 100,
			read_outbox_max_id : 27,
			unread_count : 24,
			unread_reactions_count : 100,
			draft : $client->draftMessageEmpty(
				date : 13,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 32,
			peer_id : $client->peerUser(
				user_id : 8342354048509018570,
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
			id : 31,
			from_id : $client->peerUser(
				user_id : 1920206786248441664,
			),
			from_boosts_applied : 42,
			peer_id : $client->peerUser(
				user_id : -3356976514149059093,
			),
			saved_peer_id : $client->peerUser(
				user_id : 2705124022464862691,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -7259131161420118418,
				),
				from_name : 'SAZJtEscgwiTVbWy',
				date : 73,
				channel_post : 97,
				post_author : 'zowLUAWsrukGeQE2',
				saved_from_peer : $client->peerUser(
					user_id : -1780623765521644162,
				),
				saved_from_msg_id : 36,
				saved_from_id : $client->peerUser(
					user_id : 7240730888710707303,
				),
				saved_from_name : 'e7yluOSRUG6qkYK8',
				saved_date : 74,
				psa_type : 'jTlXy8PIWhHcpSmv',
			),
			via_bot_id : 1176995665297553784,
			via_business_bot_id : -5865498303541149055,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 84,
				reply_to_peer_id : $client->peerUser(
					user_id : -6977639338420242015,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '42p83a9itkH5ZLyP',
					date : 86,
					channel_post : 42,
					post_author : 'x2KMOzdwgijQloAu',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 85,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'Ioa7VRzNJTDktQL6',
					saved_date : 57,
					psa_type : 'n5YaEfjlzvPqOVre',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 71,
				quote_text : 'TfsN4Jyk6imGcPBp',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 100,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 15,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 34,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 54,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 89,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 76,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 13,
						language : 'BYOxrNVcIuz493CP',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 50,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 45,
						user_id : 3470296551586497734,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 90,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 2,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 19,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 71,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 47,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 97,
						document_id : 2689779298120997654,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 22,
					),
				),
				quote_offset : 78,
				todo_item_id : 83,
			),
			date : 12,
			message : 'qc0ViBu3TkU7pwN4',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 32,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 65,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 74,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 0,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 24,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 25,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 49,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 73,
					language : 'tVYhKzLB9biNI8rC',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 36,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 63,
					user_id : -2062746727397755115,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 20,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 77,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 97,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 5,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 6,
					document_id : -8560189510718197083,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 84,
				),
			),
			views : 55,
			forwards : 38,
			replies : $client->messageReplies(
				comments : true,
				replies : 97,
				replies_pts : 47,
				recent_repliers : array(
					$client->peerUser(
						user_id : -8698478254666165973,
					),
					$client->peerChat(
						chat_id : 8090825857106237154,
					),
					$client->peerChannel(
						channel_id : 7943034952459688291,
					),
				),
				channel_id : 5873897699328699747,
				max_id : 25,
				read_max_id : 85,
			),
			edit_date : 8,
			post_author : 'vXBPltQ5Y9LCMFbi',
			grouped_id : 2550375731773314864,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 12,
						reaction : $client->reactionEmpty(...),
						count : 43,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 96,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 67,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2CFtpYBN5ixQRPzr',
					reason : '3m0CWlfdTMZq9Qi8',
					text : 'c2jMqlzRy1xbBT0D',
				),
			),
			ttl_period : 28,
			quick_reply_shortcut_id : 17,
			effect : 8840365098000808027,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'Cyo2bTVtgk1WzOAL',
				text : $client->textWithEntities(
					text : 'Ef4RyzsVUadB5wkv',
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
			report_delivery_until_date : 54,
			paid_message_stars : -8218673867271193522,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -8620902736742535731,
					nanos : 72,
				),
				schedule_date : 40,
			),
			schedule_repeat_period : 68,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 23,
			from_id : $client->peerUser(
				user_id : -5244956790120406374,
			),
			peer_id : $client->peerUser(
				user_id : 2348265079082278220,
			),
			saved_peer_id : $client->peerUser(
				user_id : 3522469565359988705,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 31,
				reply_to_peer_id : $client->peerUser(
					user_id : 5040150929886294724,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'YBlPSW0p5RCLUcsG',
					date : 79,
					channel_post : 22,
					post_author : 'X9FcDvkPYOt5H1Ve',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 40,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'SOuZNMKmejwiTq5v',
					saved_date : 77,
					psa_type : 'mkl7nO2Q3gsHRWiU',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 17,
				quote_text : 'BRGQtvNaujpszC1Z',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 31,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 37,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 69,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 26,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 43,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 41,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 87,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 27,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 37,
						language : 'ZS4h0xCitdWl9pbH',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 5,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 58,
						user_id : 6574966921114400657,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 94,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 24,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 31,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 10,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 58,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 9,
						document_id : -8767411812420609673,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 54,
					),
				),
				quote_offset : 40,
				todo_item_id : 17,
			),
			date : 43,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 99,
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
						date : 97,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 97,
					),
				),
			),
			ttl_period : 61,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2107727430081455569,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7628622529234581383,
			title : 'bUevnZqMsk7r6t4G',
			photo : $client->chatPhotoEmpty(),
			participants_count : 62,
			date : 5,
			version : 61,
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
				until_date : 43,
			),
		),
		$client->chatForbidden(
			id : -2291912545639981047,
			title : 'P8mO9gC5RBGEQcoM',
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
			id : -3194664121018437647,
			access_hash : 610941815744103756,
			title : 'vu4z3M5GSlotb7dw',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'WnI80i746wCPTStp',
					reason : 'HmQZldR8h9jJOx3r',
					text : 'VAFdMrhNJfK4z0Z2',
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
				until_date : 72,
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
				until_date : 100,
			),
			participants_count : 78,
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
				color : 94,
				background_emoji_id : -8851389893702989671,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : 2197209307965895730,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 72,
			subscription_until_date : 62,
			bot_verification_icon : -6674432399798677609,
			send_paid_messages_stars : -1754477183080601115,
			linked_monoforum_id : -9183031081142889054,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4593508985215638513,
			access_hash : -1179365498572299228,
			title : 'rQKYhWcinLytGuSX',
			until_date : 92,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7510071143918388638,
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
			id : 4304626194162418463,
			access_hash : -7299286950836364421,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 91,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7ZhL95kSrM6mfcul',
					reason : 'm5rx4hKs6DRdTQ30',
					text : 'xrFB0Z7R8sUyiqf9',
				),
			),
			bot_inline_placeholder : 'Pq74YGsMBSTwfmAz',
			lang_code : 'rJEUCPT9dVw3qhMv',
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
				max_id : 35,
			),
			color : $client->peerColor(
				color : 23,
				background_emoji_id : 3773778661545021501,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : -7362133003031200526,
			),
			bot_active_users : 54,
			bot_verification_icon : 8008662977606226059,
			send_paid_messages_stars : -7445988368376094582,
		),
	),
);
```