# messages.peerDialogs

**Description** : *Dialog info of multiple peers*

**Layer** : 218

```tl
messages.peerDialogs#3371c354 dialogs:Vector<Dialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> state:updates.State = messages.PeerDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dialogs</mark> | [`Vector<Dialog>`](type/Dialog) | Dialog info |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | Messages mentioned in dialog info |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |
| <mark>state</mark> | [`updates.State`](type/updates.State) | Current update state of dialog |

---

## Type

[messages.PeerDialogs](type/messages.PeerDialogs)

---

## Example

```php
$messagesPeerDialogs = $client->messages->peerDialogs(
	dialogs : array(
		$client->dialog(
			pinned : true,
			unread_mark : true,
			view_forum_as_messages : true,
			peer : $client->peerUser(
				user_id : -1114901730228920478,
			),
			top_message : 45,
			read_inbox_max_id : 18,
			read_outbox_max_id : 82,
			unread_count : 14,
			unread_mentions_count : 26,
			unread_reactions_count : 88,
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 9,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			pts : 52,
			draft : $client->draftMessageEmpty(
				date : 15,
			),
			folder_id : 93,
			ttl_period : 63,
		),
		$client->dialogFolder(
			pinned : true,
			folder : $client->folder(
				autofill_new_broadcasts : true,
				autofill_public_groups : true,
				autofill_new_correspondents : true,
				id : 13,
				title : 'tqHdZgVxPnTUm89L',
				photo : $client->chatPhotoEmpty(),
			),
			peer : $client->peerUser(
				user_id : 3130789150877626666,
			),
			top_message : 82,
			unread_muted_peers_count : 27,
			unread_unmuted_peers_count : 49,
			unread_muted_messages_count : 60,
			unread_unmuted_messages_count : 98,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 12,
			peer_id : $client->peerUser(
				user_id : 1578133732819116767,
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
			id : 27,
			from_id : $client->peerUser(
				user_id : -3408895070918029497,
			),
			from_boosts_applied : 3,
			peer_id : $client->peerUser(
				user_id : -8676124657303195437,
			),
			saved_peer_id : $client->peerUser(
				user_id : 5609841603378383864,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -2303808439169832055,
				),
				from_name : 'KSdUE0faFwHDOejC',
				date : 50,
				channel_post : 73,
				post_author : 'Jjo4dGpXE6zx1arn',
				saved_from_peer : $client->peerUser(
					user_id : 8640953554832104924,
				),
				saved_from_msg_id : 39,
				saved_from_id : $client->peerUser(
					user_id : -721028074453093885,
				),
				saved_from_name : 'FkSq39fjTypZG0oY',
				saved_date : 36,
				psa_type : 'Adb84r59OnZsBylv',
			),
			via_bot_id : -336666503808739545,
			via_business_bot_id : 703324761206628209,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 30,
				reply_to_peer_id : $client->peerUser(
					user_id : 9068347539644096118,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'ytTHQ9bgnRIX0e3E',
					date : 46,
					channel_post : 23,
					post_author : '8hlJxvLfAetpBOVG',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 15,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'ZjluL62CwASVx9NI',
					saved_date : 3,
					psa_type : 'rcpTxyVJCq3nS1ZW',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 40,
				quote_text : 'IvY9EVUBnAbt3cJi',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 95,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 96,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 2,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 90,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 7,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 13,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 36,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 36,
						language : 'bEgQXFUhOnrvCPzZ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 57,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 66,
						user_id : -8444149867557400361,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 31,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 79,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 90,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 83,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 40,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 78,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 62,
						document_id : -795792106293818399,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 16,
					),
				),
				quote_offset : 99,
				todo_item_id : 83,
			),
			date : 6,
			message : 'GVNbyQ85xCkv0qLW',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 34,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 45,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 59,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 32,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 100,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 100,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 29,
					language : 'izyUX1eH8dqtv2rB',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 21,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 75,
					user_id : 3094627916622925274,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 0,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 84,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 44,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 33,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 87,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 56,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 94,
					document_id : -6704797655061790965,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 0,
				),
			),
			views : 83,
			forwards : 0,
			replies : $client->messageReplies(
				comments : true,
				replies : 97,
				replies_pts : 48,
				recent_repliers : array(
					$client->peerUser(
						user_id : -5009210889763383919,
					),
					$client->peerChat(
						chat_id : -6883100907571663273,
					),
					$client->peerChannel(
						channel_id : 8822068049022072908,
					),
				),
				channel_id : -6350171815955462386,
				max_id : 83,
				read_max_id : 18,
			),
			edit_date : 4,
			post_author : '8g3zOvFWaJqjPl5n',
			grouped_id : -7544829536252515510,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 68,
						reaction : $client->reactionEmpty(...),
						count : 72,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 74,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 7,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yxpQqHfiNOXeEW6l',
					reason : 'KkSPgHNTUD84tmRY',
					text : 'HLJ3ZY4RG6In29j7',
				),
			),
			ttl_period : 25,
			quick_reply_shortcut_id : 18,
			effect : -4513358870113646661,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'aSWdcKhe2DJZzj6C',
				text : $client->textWithEntities(
					text : 'Hv4xdE3S1nGrpIJL',
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
			report_delivery_until_date : 53,
			paid_message_stars : -6903347393650309419,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 2702538342656572194,
					nanos : 43,
				),
				schedule_date : 39,
			),
			schedule_repeat_period : 96,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 83,
			from_id : $client->peerUser(
				user_id : 4885130789695318084,
			),
			peer_id : $client->peerUser(
				user_id : -6872845708950597643,
			),
			saved_peer_id : $client->peerUser(
				user_id : -8024431044851536467,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 68,
				reply_to_peer_id : $client->peerUser(
					user_id : 3055257096014014280,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'O2k8SwnViZfIed5h',
					date : 45,
					channel_post : 99,
					post_author : 'LvRPcg4hOfDWoJq6',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 11,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '5GSDxb0as2ql36Td',
					saved_date : 43,
					psa_type : '0MpCdhTQ5RLn2GBc',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 2,
				quote_text : 'u4sPFqSJTZXCxmbw',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 45,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 83,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 14,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 4,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 81,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 44,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 9,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 18,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 2,
						language : 'KkwIu3FR8QSP0Xrq',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 58,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : -1112829776037865626,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 14,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 75,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 88,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 39,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 4,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 23,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 43,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 33,
						document_id : -2267023978398949472,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 10,
					),
				),
				quote_offset : 64,
				todo_item_id : 53,
			),
			date : 36,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 8,
						reaction : $client->reactionEmpty(...),
						count : 98,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 49,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 3,
					),
				),
			),
			ttl_period : 24,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 1290782100899457058,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7704285253049182497,
			title : 'p7ZewkmzHofIJtR5',
			photo : $client->chatPhotoEmpty(),
			participants_count : 100,
			date : 77,
			version : 31,
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
				until_date : 40,
			),
		),
		$client->chatForbidden(
			id : 3884016473937473191,
			title : 'Us2BxCSb1KV0hJnW',
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
			id : -29973912339302492,
			access_hash : 6317938750890895972,
			title : 'Xy1NzAuZJvPCQ5ke',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'FEhUNClvko4t3D8q',
					reason : 'qJ9l6OVd7oQtRnCp',
					text : 'smGUcxNMT2BezqrC',
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
				until_date : 53,
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
				until_date : 95,
			),
			participants_count : 24,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 96,
			),
			color : $client->peerColor(
				color : 12,
				background_emoji_id : 7366817496875921685,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : 2878299827387548358,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 99,
			subscription_until_date : 65,
			bot_verification_icon : -3426233602643373222,
			send_paid_messages_stars : 1730423622201214007,
			linked_monoforum_id : -4125440307088066174,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3946917294858186085,
			access_hash : -1930986468216236855,
			title : 'sZHFe8N2uUWc6QOY',
			until_date : 80,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4158439598239907366,
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
			id : 4776139829266047113,
			access_hash : 1738203906938963187,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QkpdNwUWGIHZXntT',
					reason : 'wn1hWp3D6Pto0THV',
					text : 'FlpN6KRG904ECTds',
				),
			),
			bot_inline_placeholder : 'hIpcgLO3Ew8QiKfx',
			lang_code : '1TdxFDqukVACWE08',
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
				max_id : 83,
			),
			color : $client->peerColor(
				color : 65,
				background_emoji_id : -5104250668124292163,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : -5749157659464028521,
			),
			bot_active_users : 82,
			bot_verification_icon : -7908037551912271370,
			send_paid_messages_stars : -811532189517885015,
		),
	),
	state : $client->updates->state(
		pts : 64,
		qts : 79,
		date : 26,
		seq : 28,
		unread_count : 29,
	),
);
```