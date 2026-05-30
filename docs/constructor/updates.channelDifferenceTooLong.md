# updates.channelDifferenceTooLong

**Description** : *The provided pts \+ limit &lt; remote pts\. Simply, there are too many updates to be fetched \(more than limit\), the client has to resolve the update gap in one of the following ways \(assuming the existence of a persistent database to locally store messages\):*

**Layer** : 222

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
	timeout : 63,
	dialog : $client->dialog(
		pinned : true,
		unread_mark : true,
		view_forum_as_messages : true,
		peer : $client->peerUser(
			user_id : -8276519919034904949,
		),
		top_message : 36,
		read_inbox_max_id : 82,
		read_outbox_max_id : 44,
		unread_count : 39,
		unread_mentions_count : 42,
		unread_reactions_count : 75,
		notify_settings : $client->peerNotifySettings(
			show_previews : false,
			silent : true,
			mute_until : 24,
			ios_sound : $client->notificationSoundDefault(),
			android_sound : $client->notificationSoundDefault(),
			other_sound : $client->notificationSoundDefault(),
			stories_muted : true,
			stories_hide_sender : false,
			stories_ios_sound : $client->notificationSoundDefault(),
			stories_android_sound : $client->notificationSoundDefault(),
			stories_other_sound : $client->notificationSoundDefault(),
		),
		pts : 43,
		draft : $client->draftMessageEmpty(
			date : 89,
		),
		folder_id : 100,
		ttl_period : 39,
	),
	messages : array(
		$client->messageEmpty(
			id : 19,
			peer_id : $client->peerUser(
				user_id : -5709559818520369623,
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
			id : 1,
			from_id : $client->peerUser(
				user_id : 2605621657848474594,
			),
			from_boosts_applied : 43,
			peer_id : $client->peerUser(
				user_id : 6868297631789440133,
			),
			saved_peer_id : $client->peerUser(
				user_id : 1575730625103973454,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -2464354349717106908,
				),
				from_name : 'pGzaE7u3FQntHg8R',
				date : 69,
				channel_post : 14,
				post_author : 'TvqDVguWXGmfFSBz',
				saved_from_peer : $client->peerUser(
					user_id : -1916053334218972175,
				),
				saved_from_msg_id : 29,
				saved_from_id : $client->peerUser(
					user_id : -1278161603055572644,
				),
				saved_from_name : 'NDQ4vGfbmJV2FEdH',
				saved_date : 86,
				psa_type : 'bejsGyfU9Ca38gS5',
			),
			via_bot_id : 6978551032729989852,
			via_business_bot_id : 4743954355262789901,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 29,
				reply_to_peer_id : $client->peerUser(
					user_id : 1002088288744906786,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'TyDC64ARbUkO0NFn',
					date : 89,
					channel_post : 9,
					post_author : 'gIw9pmKbfACF5zSx',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 0,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'PrBe2RNVxHKY8nDk',
					saved_date : 35,
					psa_type : 'YaOR8flDJdCKNpyS',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 65,
				quote_text : 'jwopNOBPyFqWlb1H',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 12,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 70,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 64,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 50,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 32,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 19,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 51,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 36,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 57,
						language : 'jiVk5Hdt6Bf2qDcz',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 56,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 56,
						user_id : 5423228627420174605,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 78,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 39,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 52,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 97,
						document_id : 2985886639883811664,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 24,
					),
				),
				quote_offset : 36,
				todo_item_id : 26,
			),
			date : 17,
			message : 'juTANrIMet72db13',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 59,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 39,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 90,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 22,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 73,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 92,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 77,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 45,
					language : 'A1Qtmn80dIrMBfhK',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 78,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 10,
					user_id : -8985828433853047465,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 48,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 12,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 1,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 23,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 19,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 31,
					document_id : -5375276796257184732,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 13,
				),
			),
			views : 44,
			forwards : 35,
			replies : $client->messageReplies(
				comments : true,
				replies : 33,
				replies_pts : 81,
				recent_repliers : array(
					$client->peerUser(
						user_id : 3398085569660663346,
					),
					$client->peerChat(
						chat_id : -4865451822197220241,
					),
					$client->peerChannel(
						channel_id : 8661962049704313590,
					),
				),
				channel_id : 8442732358986662750,
				max_id : 45,
				read_max_id : 73,
			),
			edit_date : 0,
			post_author : 'q8fRUyGrC3YuIwAb',
			grouped_id : 3257320763242194261,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 64,
						reaction : $client->reactionEmpty(...),
						count : 89,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 83,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 32,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'g8czZwv6klIQyR5b',
					reason : '0WOfU298IT6QD5xS',
					text : 'MkOgRNZydmCh9SDG',
				),
			),
			ttl_period : 41,
			quick_reply_shortcut_id : 62,
			effect : -4354427594790159652,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'mOx4J5PXzW83bHNK',
				text : $client->textWithEntities(
					text : 'Xgkdav56lTsWrU2m',
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
			report_delivery_until_date : 34,
			paid_message_stars : 5152496735912456010,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -1673482393158289534,
					nanos : 19,
				),
				schedule_date : 10,
			),
			schedule_repeat_period : 85,
			summary_from_language : 'YgAHVsK6e58BfdaR',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 49,
			from_id : $client->peerUser(
				user_id : -5672658516948514000,
			),
			peer_id : $client->peerUser(
				user_id : 4359355650560553757,
			),
			saved_peer_id : $client->peerUser(
				user_id : 4033258856503049839,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 94,
				reply_to_peer_id : $client->peerUser(
					user_id : -9045758288359217318,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '0fakhYKIH9FQey6j',
					date : 66,
					channel_post : 87,
					post_author : 'uJsxXiyLrmPF2dTo',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 65,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'QSeL2oVB4qFHbIOg',
					saved_date : 87,
					psa_type : 'DleuBGfQ3bLtXMY5',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 55,
				quote_text : 'wiSzAan4oyxMPZfu',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 52,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 37,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 43,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 58,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 21,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 65,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 90,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 51,
						language : 'fz1YMpSTRk5OAo4c',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 50,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 14,
						user_id : -2239094868343297830,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 96,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 67,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 10,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 63,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 27,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 83,
						document_id : 7394844716288177558,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 57,
					),
				),
				quote_offset : 50,
				todo_item_id : 55,
			),
			date : 10,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 6,
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
						count : 47,
					),
				),
			),
			ttl_period : 9,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5488357099195337648,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 160900786648739774,
			title : 'hvsXkjmUA2l3YPE7',
			photo : $client->chatPhotoEmpty(),
			participants_count : 7,
			date : 79,
			version : 93,
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
				until_date : 34,
			),
		),
		$client->chatForbidden(
			id : -4819836059810965389,
			title : 'S8Ic0dzqWQPayKCi',
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
			id : -3750707557039348755,
			access_hash : 5946571063710679162,
			title : 'iUXJlxz25eIhaK10',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tSKO3lz57dFYGj1D',
					reason : 'r8VUoLnQpIhcqGjE',
					text : 'pF9TaGWRz35JrAO7',
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
				until_date : 26,
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
				until_date : 41,
			),
			participants_count : 80,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 74,
			),
			color : $client->peerColor(
				color : 4,
				background_emoji_id : 7516209597065405154,
			),
			profile_color : $client->peerColor(
				color : 93,
				background_emoji_id : -3125083370878223414,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 43,
			subscription_until_date : 79,
			bot_verification_icon : 819021972897131306,
			send_paid_messages_stars : 2506817629330748131,
			linked_monoforum_id : 4509458103043002821,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 6213388953684605479,
			access_hash : 4527415031513992499,
			title : '875NEDrc4tUI2hib',
			until_date : 88,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6410124488056492579,
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
			id : 5416088775410712436,
			access_hash : 4529357625235896620,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 42,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UIKlCZHWb0R3PDtY',
					reason : 'XijI6l7RzdKgM0q3',
					text : 'ilbRdFnHG45NWgwU',
				),
			),
			bot_inline_placeholder : 'g3F1NaqJ87z06L4i',
			lang_code : 'noDARkmjrNM0al8x',
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
				max_id : 24,
			),
			color : $client->peerColor(
				color : 45,
				background_emoji_id : 5992138216290856798,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : 2820906040657023193,
			),
			bot_active_users : 86,
			bot_verification_icon : 6736451820355056211,
			send_paid_messages_stars : 4063825555492460768,
		),
	),
);
```