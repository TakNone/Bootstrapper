# updates.channelDifferenceTooLong

**Description** : *The provided pts \+ limit &lt; remote pts\. Simply, there are too many updates to be fetched \(more than limit\), the client has to resolve the update gap in one of the following ways \(assuming the existence of a persistent database to locally store messages\):*

**Layer** : 218

```tl
updates.channelDifferenceTooLong#a4bcc6fe flags:# final:flags.0?true timeout:flags.1?int dialog:Dialog messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = updates.ChannelDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **final** | [`flags.0?true`](type/true) | Whether there are more updates that must be fetched (always false) |
| **timeout** | [`flags.1?int`](type/int) | Clients are supposed to refetch the channel difference after timeout seconds have elapsed |
| <mark>dialog</mark> | [`Dialog`](type/Dialog) | Dialog containing the latest PTS that can be used to reset the channel state |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | The latest messages |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats from messages |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users from messages |

---

## Type

[updates.ChannelDifference](type/updates.ChannelDifference)

---

## Example

```php
$updatesChannelDifference = $client->updates->channelDifferenceTooLong(
	final : true,
	timeout : 43,
	dialog : $client->dialog(
		pinned : true,
		unread_mark : true,
		view_forum_as_messages : true,
		peer : $client->peerUser(
			user_id : 1958089179185889676,
		),
		top_message : 18,
		read_inbox_max_id : 47,
		read_outbox_max_id : 61,
		unread_count : 48,
		unread_mentions_count : 17,
		unread_reactions_count : 10,
		notify_settings : $client->peerNotifySettings(
			show_previews : false,
			silent : false,
			mute_until : 17,
			ios_sound : $client->notificationSoundDefault(),
			android_sound : $client->notificationSoundDefault(),
			other_sound : $client->notificationSoundDefault(),
			stories_muted : false,
			stories_hide_sender : false,
			stories_ios_sound : $client->notificationSoundDefault(),
			stories_android_sound : $client->notificationSoundDefault(),
			stories_other_sound : $client->notificationSoundDefault(),
		),
		pts : 0,
		draft : $client->draftMessageEmpty(
			date : 100,
		),
		folder_id : 19,
		ttl_period : 34,
	),
	messages : array(
		$client->messageEmpty(
			id : 21,
			peer_id : $client->peerUser(
				user_id : 3901830063528825790,
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
			id : 2,
			from_id : $client->peerUser(
				user_id : 9061610909158821394,
			),
			from_boosts_applied : 35,
			peer_id : $client->peerUser(
				user_id : -5527059175004896293,
			),
			saved_peer_id : $client->peerUser(
				user_id : 5622455456899628365,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 1949351249321870814,
				),
				from_name : '8OQIvaZK5WFpDGHq',
				date : 27,
				channel_post : 79,
				post_author : 'eRYqcztj8FUkS6AH',
				saved_from_peer : $client->peerUser(
					user_id : 2512736968061096232,
				),
				saved_from_msg_id : 28,
				saved_from_id : $client->peerUser(
					user_id : 3846313981573510446,
				),
				saved_from_name : 'VFQM5KlGu0DSvcys',
				saved_date : 95,
				psa_type : 'OChJWwNucaFSyQYk',
			),
			via_bot_id : -300412054677984550,
			via_business_bot_id : -2649721390052041527,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 98,
				reply_to_peer_id : $client->peerUser(
					user_id : 3008777398534215655,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '1HWPTLAp4EwS5nQJ',
					date : 30,
					channel_post : 19,
					post_author : 'eqXNxhSY82VlfMjs',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 5,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'W9MRzsigEDjtupaZ',
					saved_date : 28,
					psa_type : 'tkGCiDBzj7aQOXVm',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 25,
				quote_text : 'HGJzlQ5Bx9Au8Zcd',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 28,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 71,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 14,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 84,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 38,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 32,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 13,
						language : 'hpHiQsIRjnGckMVq',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 55,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 83,
						user_id : -451865674525467526,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 36,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 14,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 41,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 49,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 85,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 94,
						document_id : 7661493052692042915,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 32,
					),
				),
				quote_offset : 70,
				todo_item_id : 87,
			),
			date : 42,
			message : 'W7MXTAGVHv2DixY1',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 45,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 64,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 59,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 69,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 21,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 3,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 68,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 21,
					language : 'l15F0TDQBA8EtLar',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 69,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 77,
					user_id : -6116823301420790495,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 83,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 51,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 19,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 33,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 40,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 69,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 78,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 92,
					document_id : -3350528016446269747,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 37,
				),
			),
			views : 37,
			forwards : 40,
			replies : $client->messageReplies(
				comments : true,
				replies : 17,
				replies_pts : 34,
				recent_repliers : array(
					$client->peerUser(
						user_id : -2365756609645930319,
					),
					$client->peerChat(
						chat_id : 1318070609336486105,
					),
					$client->peerChannel(
						channel_id : -7401454219189697844,
					),
				),
				channel_id : -3215519491219117678,
				max_id : 44,
				read_max_id : 72,
			),
			edit_date : 59,
			post_author : 'ci4ALENUbvJRuwr9',
			grouped_id : -1255765412457768112,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 83,
						reaction : $client->reactionEmpty(...),
						count : 60,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 0,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 22,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oKxY2fDR1nd8FAtS',
					reason : 'Xok1ZR3Nq0Ymc25g',
					text : '4P6XLZcE0hmkIF3S',
				),
			),
			ttl_period : 99,
			quick_reply_shortcut_id : 36,
			effect : -5302787427421392361,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'Wcfak2MEhiKGIBrp',
				text : $client->textWithEntities(
					text : 'LFaNQWRJbwS2pEXV',
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
			paid_message_stars : 1187301545547331978,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 5388070223022652953,
					nanos : 40,
				),
				schedule_date : 85,
			),
			schedule_repeat_period : 22,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 11,
			from_id : $client->peerUser(
				user_id : 4281104934076418643,
			),
			peer_id : $client->peerUser(
				user_id : -3823774432512937149,
			),
			saved_peer_id : $client->peerUser(
				user_id : -281180553756769842,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 4,
				reply_to_peer_id : $client->peerUser(
					user_id : 3816567109422307027,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'zy2ZpIKasmAeWSQw',
					date : 95,
					channel_post : 52,
					post_author : 'G0yfuhA4wmSneviH',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 21,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'HRgsXxhntJroi5uk',
					saved_date : 88,
					psa_type : 'fNs3QSpRHjwtWhPa',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 59,
				quote_text : 'yANQzTokg0lWadvR',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 33,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 88,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 6,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 73,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 56,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 69,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 96,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 82,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 61,
						language : 'BOgIvlVXA98eWcus',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 59,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : 3777358093288946368,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 0,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 10,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 42,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 17,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 56,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 53,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 59,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 99,
						document_id : 6618619481496358485,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 89,
					),
				),
				quote_offset : 27,
				todo_item_id : 74,
			),
			date : 36,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 78,
						reaction : $client->reactionEmpty(...),
						count : 38,
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
						count : 28,
					),
				),
			),
			ttl_period : 15,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1171903801119466958,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6695752394956083393,
			title : 'oaXBb4yJPfIlRw6S',
			photo : $client->chatPhotoEmpty(),
			participants_count : 31,
			date : 83,
			version : 58,
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
				until_date : 54,
			),
		),
		$client->chatForbidden(
			id : -3247718098780454382,
			title : 'uKPWbw1DkXx49zMy',
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
			id : 5836285942978629470,
			access_hash : 1366126182320218698,
			title : '26WNurfwYzyXIDxm',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 0,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hkfyH5gC2TUc9NjG',
					reason : 'qjvgU7G8saE4fTwY',
					text : 'D0HEUfy679XmxwMu',
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
				until_date : 67,
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
				until_date : 94,
			),
			participants_count : 98,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 56,
			),
			color : $client->peerColor(
				color : 38,
				background_emoji_id : 2213666211490773826,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : -4482131121550457943,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 4,
			subscription_until_date : 75,
			bot_verification_icon : -2971502998116047952,
			send_paid_messages_stars : 7764528854980281294,
			linked_monoforum_id : -9062670212450465382,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3125659139651214593,
			access_hash : -3630922972778797993,
			title : 'mswrxMVSNzKbhXon',
			until_date : 13,
		),
	),
	users : array(
		$client->userEmpty(
			id : 677081714953163360,
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
			id : 1751139682955665062,
			access_hash : 4139970005572097038,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 74,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'JGrDTtxEwf3AQ0Fe',
					reason : 'eQTB4ZaHczjPpdDx',
					text : '2E4ZepGwkHCfRVzI',
				),
			),
			bot_inline_placeholder : 'NK08jLDymMrnIxJo',
			lang_code : 'KbHh0ZdE8PQ3cqGB',
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
				color : 24,
				background_emoji_id : -3913660895810881098,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : 3562211714886050133,
			),
			bot_active_users : 42,
			bot_verification_icon : 5508160541968063004,
			send_paid_messages_stars : 2196080510010470101,
		),
	),
);
```