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
	timeout : 41,
	dialog : $client->dialog(
		pinned : true,
		unread_mark : true,
		view_forum_as_messages : true,
		peer : $client->peerUser(
			user_id : -7527766651482630071,
		),
		top_message : 79,
		read_inbox_max_id : 34,
		read_outbox_max_id : 51,
		unread_count : 12,
		unread_mentions_count : 2,
		unread_reactions_count : 7,
		notify_settings : $client->peerNotifySettings(
			show_previews : false,
			silent : true,
			mute_until : 41,
			ios_sound : $client->notificationSoundDefault(),
			android_sound : $client->notificationSoundDefault(),
			other_sound : $client->notificationSoundDefault(),
			stories_muted : true,
			stories_hide_sender : false,
			stories_ios_sound : $client->notificationSoundDefault(),
			stories_android_sound : $client->notificationSoundDefault(),
			stories_other_sound : $client->notificationSoundDefault(),
		),
		pts : 8,
		draft : $client->draftMessageEmpty(
			date : 45,
		),
		folder_id : 65,
		ttl_period : 26,
	),
	messages : array(
		$client->messageEmpty(
			id : 15,
			peer_id : $client->peerUser(
				user_id : -9188286872123681956,
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
			id : 25,
			from_id : $client->peerUser(
				user_id : 4976832852772953185,
			),
			from_boosts_applied : 4,
			peer_id : $client->peerUser(
				user_id : 8805952282950688831,
			),
			saved_peer_id : $client->peerUser(
				user_id : -4059177415365304851,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -8945761561842289536,
				),
				from_name : 'bqBLkKUd0V1ISYzn',
				date : 27,
				channel_post : 30,
				post_author : 'pcl4v3FZEnNTWYSI',
				saved_from_peer : $client->peerUser(
					user_id : 1412532230617832772,
				),
				saved_from_msg_id : 72,
				saved_from_id : $client->peerUser(
					user_id : -8855224485941110126,
				),
				saved_from_name : 'Fbqa2yxltMXpWo7L',
				saved_date : 55,
				psa_type : 'Lg4Tq1tu2FOVERec',
			),
			via_bot_id : -8458490791337304006,
			via_business_bot_id : 6216922055111132358,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 68,
				reply_to_peer_id : $client->peerUser(
					user_id : -8504864296737393620,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '5cbGsVxw7ehK8Xqj',
					date : 99,
					channel_post : 54,
					post_author : 'OZJNMbYedlRG75i2',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 95,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'SouQk6lwb9JZYpgx',
					saved_date : 18,
					psa_type : 'Bcdafh6eEZ9uq8OY',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 36,
				quote_text : 'WL52NgTxoJY9tK8r',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 30,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 13,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 56,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 26,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 63,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 23,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 29,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 32,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 52,
						language : 'kDA8NGZw0vfHyUVL',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 83,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 27,
						user_id : -307638670126607164,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 7,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 42,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 39,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 55,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 71,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 12,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 31,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 36,
						document_id : 3369305635101896642,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 51,
					),
				),
				quote_offset : 62,
				todo_item_id : 74,
			),
			date : 97,
			message : 'pWMJd9OD8kmit7aC',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 82,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 83,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 69,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 100,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 52,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 61,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 96,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 52,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 97,
					language : 'UB50jlOpdnXt3GYc',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 72,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 78,
					user_id : 4841917051005614533,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 64,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 99,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 22,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 42,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 18,
					document_id : 2591886593166201366,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 5,
				),
			),
			views : 2,
			forwards : 16,
			replies : $client->messageReplies(
				comments : true,
				replies : 26,
				replies_pts : 56,
				recent_repliers : array(
					$client->peerUser(
						user_id : 6863003905906939804,
					),
					$client->peerChat(
						chat_id : 6356262524036887337,
					),
					$client->peerChannel(
						channel_id : -3372564454125808765,
					),
				),
				channel_id : 8649798365265095591,
				max_id : 36,
				read_max_id : 79,
			),
			edit_date : 90,
			post_author : 'XM9KUBv847SQYnzw',
			grouped_id : 7955638691833548992,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 98,
						reaction : $client->reactionEmpty(...),
						count : 31,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 44,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 25,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dqNer2Uz0gI9vmBR',
					reason : 'H0kd1ljqRuFeYDZK',
					text : 'PZRY0qBjJUH1otXn',
				),
			),
			ttl_period : 85,
			quick_reply_shortcut_id : 32,
			effect : -2740454091473098408,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'ZUzuWdfJxMLnT6qg',
				text : $client->textWithEntities(
					text : '9tXkbFohCBPfjHwa',
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
			report_delivery_until_date : 26,
			paid_message_stars : 3343063242779047650,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -8740183953549706360,
					nanos : 78,
				),
				schedule_date : 67,
			),
			schedule_repeat_period : 26,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 20,
			from_id : $client->peerUser(
				user_id : -1739615687203113863,
			),
			peer_id : $client->peerUser(
				user_id : -4158186902551166817,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6751152770859125471,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 10,
				reply_to_peer_id : $client->peerUser(
					user_id : -1061082698659758866,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '9Eg7Om4jPvVdQLtD',
					date : 94,
					channel_post : 43,
					post_author : 'smrlxchCW5f4zRQ8',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 31,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '4ioyBlNKJS0ctLEG',
					saved_date : 72,
					psa_type : 'A3XR19WwM4ibYDvp',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 96,
				quote_text : 'GAF0p81ScB7LuOr6',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 64,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 21,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 48,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 1,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 56,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 61,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 99,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 21,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 40,
						language : 'nLDFQqfNU0grlbha',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 15,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : -7919436810907101061,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 50,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 72,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 88,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 44,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 99,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 17,
						document_id : 4926186505459086021,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 9,
					),
				),
				quote_offset : 35,
				todo_item_id : 92,
			),
			date : 91,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 10,
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
						date : 66,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 53,
					),
				),
			),
			ttl_period : 40,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -5828663815125609569,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2608033707919479067,
			title : 'XBiPYKMCb102mvqk',
			photo : $client->chatPhotoEmpty(),
			participants_count : 55,
			date : 13,
			version : 76,
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
				until_date : 49,
			),
		),
		$client->chatForbidden(
			id : 3834182396293428683,
			title : '4QtWowXPEmLc9Y80',
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
			id : 7171407000032223432,
			access_hash : 4761879080685338019,
			title : 'Qpf4CAjkhoWBwmcs',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mvCKQAu6iNc0X9Hs',
					reason : 'BZVWIDc0FmJ7XxOM',
					text : 't9sUmR1P2dFAlEaW',
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
				until_date : 12,
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
				until_date : 78,
			),
			participants_count : 85,
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
				color : 92,
				background_emoji_id : -3067364746111853276,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : -3762370638875238811,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 80,
			subscription_until_date : 86,
			bot_verification_icon : -4190427573862412710,
			send_paid_messages_stars : 502942952436294876,
			linked_monoforum_id : 5764373377169838031,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -9130280749680618849,
			access_hash : -9069705285593972480,
			title : '1wrWIsUk3RCdmPDQ',
			until_date : 69,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6275369138334661135,
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
			id : -4983525420615169850,
			access_hash : -5265281748056793991,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9KNkv2nhxLVGsj46',
					reason : '8QTp2gnfHru3Pv0D',
					text : 'KFMyHkgn7rmiW3oN',
				),
			),
			bot_inline_placeholder : 'bfVTF9wdAkgCX7De',
			lang_code : 'M6yJf8mGL03er7BA',
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
				max_id : 58,
			),
			color : $client->peerColor(
				color : 94,
				background_emoji_id : 1037125911634059319,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : -1574516627255635614,
			),
			bot_active_users : 6,
			bot_verification_icon : -8148876112595192710,
			send_paid_messages_stars : 437552122904939886,
		),
	),
);
```