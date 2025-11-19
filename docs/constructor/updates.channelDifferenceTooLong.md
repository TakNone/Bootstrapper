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
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	timeout : 5,
	dialog : $client->dialog(
		pinned : true,
		unread_mark : true,
		view_forum_as_messages : true,
		peer : $client->peerUser(
			user_id : -7046429536185686401,
		),
		top_message : 68,
		read_inbox_max_id : 87,
		read_outbox_max_id : 30,
		unread_count : 0,
		unread_mentions_count : 95,
		unread_reactions_count : 31,
		notify_settings : $client->peerNotifySettings(
			show_previews : false,
			silent : false,
			mute_until : 7,
			ios_sound : $client->notificationSoundDefault(),
			android_sound : $client->notificationSoundDefault(),
			other_sound : $client->notificationSoundDefault(),
			stories_muted : true,
			stories_hide_sender : true,
			stories_ios_sound : $client->notificationSoundDefault(),
			stories_android_sound : $client->notificationSoundDefault(),
			stories_other_sound : $client->notificationSoundDefault(),
		),
		pts : 16,
		draft : $client->draftMessageEmpty(
			date : 6,
		),
		folder_id : 15,
		ttl_period : 95,
	),
	messages : array(
		$client->messageEmpty(
			id : 70,
			peer_id : $client->peerUser(
				user_id : -1197442060452238017,
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
			id : 100,
			from_id : $client->peerUser(
				user_id : -7765535493408570492,
			),
			from_boosts_applied : 57,
			peer_id : $client->peerUser(
				user_id : -1599696308418348972,
			),
			saved_peer_id : $client->peerUser(
				user_id : -2047357105997868661,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 4252708543160605414,
				),
				from_name : 'jd279spELzSFrhWu',
				date : 94,
				channel_post : 76,
				post_author : 'Tgj1L47AtoJ09Mqs',
				saved_from_peer : $client->peerUser(
					user_id : 5702416020452465948,
				),
				saved_from_msg_id : 58,
				saved_from_id : $client->peerUser(
					user_id : -8520496177318250814,
				),
				saved_from_name : 'RxCe0KQJvzgH6has',
				saved_date : 13,
				psa_type : 'RzuUbP4CmhAy8sjK',
			),
			via_bot_id : 5775338236778547613,
			via_business_bot_id : -4118388083559947650,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 78,
				reply_to_peer_id : $client->peerUser(
					user_id : -6133480993993716816,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'QqMR4CBpL7Yd8Goh',
					date : 27,
					channel_post : 54,
					post_author : 'ANYM8zVrXR6b241e',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 66,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '5W7nmPCM0cahLFUN',
					saved_date : 4,
					psa_type : 'OsCxjbao6dinDKBq',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 70,
				quote_text : 'pEHN6QCwcVaUoI8M',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 18,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 91,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 92,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 34,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 36,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 80,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 65,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 99,
						language : 'vJ4EgprbX6SW13jA',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 34,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 81,
						user_id : 6601084566238965598,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 23,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 81,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 65,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 20,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 90,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 5,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 57,
						document_id : -4951293343212171662,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 33,
					),
				),
				quote_offset : 76,
				todo_item_id : 9,
			),
			date : 83,
			message : '7GQ4tBON0vw9rYgu',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 9,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 76,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 39,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 69,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 90,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 94,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 24,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 19,
					language : 'oCibqRvYOaPxljMt',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 38,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 31,
					user_id : 1248884499548433819,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 2,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 66,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 57,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 20,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 26,
					document_id : -7934440361176053807,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 82,
				),
			),
			views : 17,
			forwards : 12,
			replies : $client->messageReplies(
				comments : true,
				replies : 27,
				replies_pts : 91,
				recent_repliers : array(
					$client->peerUser(
						user_id : -1779582297753669945,
					),
					$client->peerChat(
						chat_id : -6062916203867717876,
					),
					$client->peerChannel(
						channel_id : 5037048431715231267,
					),
				),
				channel_id : -6866609563168083288,
				max_id : 88,
				read_max_id : 15,
			),
			edit_date : 93,
			post_author : '3fSvcTNAKboOjeag',
			grouped_id : -332649410703954647,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 38,
						reaction : $client->reactionEmpty(...),
						count : 67,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 27,
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
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pzq9TMy2iJdtjIfb',
					reason : 'FVjGWkgMmP98U1cQ',
					text : 'rbAmnfY7FMdvsKuN',
				),
			),
			ttl_period : 20,
			quick_reply_shortcut_id : 80,
			effect : -1151446190702104124,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'Y0qL85DbwCHZxPoE',
				text : $client->textWithEntities(
					text : 'tWGPpYS2DAuKl34C',
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
			report_delivery_until_date : 98,
			paid_message_stars : 5252768549839234739,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 3885962145331589826,
					nanos : 88,
				),
				schedule_date : 96,
			),
			schedule_repeat_period : 44,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 67,
			from_id : $client->peerUser(
				user_id : -8419938412467397190,
			),
			peer_id : $client->peerUser(
				user_id : 8384950091725117679,
			),
			saved_peer_id : $client->peerUser(
				user_id : 30659915299578237,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 48,
				reply_to_peer_id : $client->peerUser(
					user_id : -4057008082233101907,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'ht8BvOiATpVFowY0',
					date : 8,
					channel_post : 35,
					post_author : 'MKcasxJ56tVG1QHU',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 28,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'qtauU02FlofvTpez',
					saved_date : 54,
					psa_type : 'RJYfcLAkWrENCKyZ',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 86,
				quote_text : 'qvfV1wXBIb24me3o',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 80,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 85,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 59,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 46,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 30,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 16,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 20,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 31,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 61,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 42,
						language : 'IAsyFVPTHYcUnogK',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 28,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 64,
						user_id : -889932133535668065,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 12,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 34,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 87,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 7,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 65,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 85,
						document_id : -984193579422840635,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 21,
					),
				),
				quote_offset : 91,
				todo_item_id : 0,
			),
			date : 21,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 43,
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
						date : 87,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 50,
					),
				),
			),
			ttl_period : 49,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8211273199466270039,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3846720112656036109,
			title : 'QqvwFloCLU63bT7e',
			photo : $client->chatPhotoEmpty(),
			participants_count : 9,
			date : 71,
			version : 33,
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
				until_date : 71,
			),
		),
		$client->chatForbidden(
			id : -5908514032111657034,
			title : 'iF69Csr3IU5wtA4P',
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
			id : 7784368212772760952,
			access_hash : 2299642565827967423,
			title : 'U2SPBno8OywMaAgq',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'l93DdFczJkoiHvYG',
					reason : 'H0Ul9i4ENbOQqtDX',
					text : 'lC1E7mn29hLiSJfR',
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
				until_date : 80,
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
				until_date : 75,
			),
			participants_count : 4,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 13,
			),
			color : $client->peerColor(
				color : 52,
				background_emoji_id : -4402106905536457543,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : 3283903938945183003,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 21,
			subscription_until_date : 6,
			bot_verification_icon : 892667660278075085,
			send_paid_messages_stars : -5973528618842250243,
			linked_monoforum_id : -1886231774133889224,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4530786030563074796,
			access_hash : -8445013223129714030,
			title : 'X79Pb6SgEsTOdQwi',
			until_date : 3,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3359518804306875005,
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
			id : -5973534689083334879,
			access_hash : -6720237096475393444,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'aYBlspLtZDIzAMnO',
					reason : 'b8CgVixQRcPXmKGq',
					text : 'l8mVdPo6BTrGvAKH',
				),
			),
			bot_inline_placeholder : 'T9PhV7npojMfERDJ',
			lang_code : 'X8gpBPUchweR2Zx4',
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
				max_id : 55,
			),
			color : $client->peerColor(
				color : 83,
				background_emoji_id : -4563443568897189263,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : 6335584610780522550,
			),
			bot_active_users : 97,
			bot_verification_icon : 8229592216133440336,
			send_paid_messages_stars : 3468420656173719383,
		),
	),
);
```