# messages.forumTopics

**Description** : *Contains information about multiple forum topics*

**Layer** : 218

```tl
messages.forumTopics#367617d3 flags:# order_by_create_date:flags.0?true count:int topics:Vector<ForumTopic> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> pts:int = messages.ForumTopics;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **order_by_create_date** | [`flags.0?true`](type/true) | Whether the returned topics are ordered by creation date; if set, pagination by offset_date should use forumTopic.date; otherwise topics are ordered by the last message date, so paginate by the date of the message referenced by forumTopic.top_message |
| <mark>count</mark> | [`int`](type/int) | Total number of topics matching query; may be more than the topics contained in topics, in which case pagination is required |
| <mark>topics</mark> | [`Vector<ForumTopic>`](type/ForumTopic) | Forum topics |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | Related messages (contains the messages mentioned by forumTopic.top_message) |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related users |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |

---

## Type

[messages.ForumTopics](type/messages.ForumTopics)

---

## Example

```php
$messagesForumTopics = $client->messages->forumTopics(
	order_by_create_date : true,
	count : 96,
	topics : array(
		$client->forumTopicDeleted(
			id : 34,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 32,
			date : 3,
			peer : $client->peerUser(
				user_id : -2595315626301906007,
			),
			title : 'CWLIn3aJHRg4UxSB',
			icon_color : 24,
			icon_emoji_id : -5256961668474595127,
			top_message : 36,
			read_inbox_max_id : 20,
			read_outbox_max_id : 0,
			unread_count : 61,
			unread_mentions_count : 48,
			unread_reactions_count : 96,
			from_id : $client->peerUser(
				user_id : -432746785659757479,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 55,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			draft : $client->draftMessageEmpty(
				date : 29,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 38,
			peer_id : $client->peerUser(
				user_id : 2178953599881943515,
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
				user_id : 7554268996342231873,
			),
			from_boosts_applied : 30,
			peer_id : $client->peerUser(
				user_id : 7425216175145979508,
			),
			saved_peer_id : $client->peerUser(
				user_id : 691856431421002742,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 2133185077226640494,
				),
				from_name : '7y3pkl2NnZraPKsJ',
				date : 46,
				channel_post : 63,
				post_author : 'CFijY7EvOS15rIPT',
				saved_from_peer : $client->peerUser(
					user_id : -4755086744827846733,
				),
				saved_from_msg_id : 21,
				saved_from_id : $client->peerUser(
					user_id : -2861096163378565225,
				),
				saved_from_name : 'kpn0HKYzESgPhy2e',
				saved_date : 30,
				psa_type : 'qBpsGCdL7AW93MPT',
			),
			via_bot_id : 5230290975614808898,
			via_business_bot_id : -7181687286889761577,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 88,
				reply_to_peer_id : $client->peerUser(
					user_id : -19231144140987080,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'aNhpMzsdkZCTtmS4',
					date : 85,
					channel_post : 23,
					post_author : 'Eg1ZkITtsVqrz3Qp',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 98,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'wg03xXAKmNeHhGCP',
					saved_date : 51,
					psa_type : 'JLI4xQDCmW9OE0X2',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 86,
				quote_text : '3i8ZFoQP07GbhTIO',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 96,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 22,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 60,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 14,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 12,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 5,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 26,
						language : 'aIESd7KmTW9qM6hb',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 62,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 94,
						user_id : 9040516115349382932,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 49,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 51,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 76,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 33,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 72,
						document_id : 370215199473349285,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 78,
					),
				),
				quote_offset : 72,
				todo_item_id : 95,
			),
			date : 14,
			message : 'molAVaxKdPFUgvIB',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 68,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 43,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 85,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 96,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 95,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 80,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 69,
					language : 'wvkfYJKecXSNBC8m',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 31,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 74,
					user_id : 7724505724037157538,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 61,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 65,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 40,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 72,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 6,
					document_id : -7595032719638393249,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 61,
				),
			),
			views : 73,
			forwards : 53,
			replies : $client->messageReplies(
				comments : true,
				replies : 86,
				replies_pts : 59,
				recent_repliers : array(
					$client->peerUser(
						user_id : 4960564093839962369,
					),
					$client->peerChat(
						chat_id : -8306301139628234859,
					),
					$client->peerChannel(
						channel_id : 6311039618792589229,
					),
				),
				channel_id : -5317908931367471700,
				max_id : 26,
				read_max_id : 25,
			),
			edit_date : 18,
			post_author : 'FbNP74vU6mYa9txj',
			grouped_id : -9156159126439929470,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 14,
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
						date : 63,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 8,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'K2wWUzZ7EMnlJjCi',
					reason : 'y2GnoVBfICdjk5aJ',
					text : 'RTbEW6ADroqQtUsa',
				),
			),
			ttl_period : 95,
			quick_reply_shortcut_id : 16,
			effect : 2955292107957973078,
			factcheck : $client->factCheck(
				need_check : true,
				country : '2f9TUyoWh16B8nmz',
				text : $client->textWithEntities(
					text : 'OxpQYog2VMNt3e54',
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
			report_delivery_until_date : 99,
			paid_message_stars : -103988059301702638,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -5226636975189076786,
					nanos : 42,
				),
				schedule_date : 76,
			),
			schedule_repeat_period : 47,
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
				user_id : -7068201498753607813,
			),
			peer_id : $client->peerUser(
				user_id : -4805850489305789733,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8688122303944402894,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 17,
				reply_to_peer_id : $client->peerUser(
					user_id : 5844484570006053810,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'xFhSAVXPsg2EL3RZ',
					date : 82,
					channel_post : 78,
					post_author : 'egDkjmnfFzIKTlHc',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 47,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'WtuVMfgxy0cKLsIP',
					saved_date : 94,
					psa_type : '2JUChEeYOWIx9nSB',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 13,
				quote_text : 'Sd8fWyGiPZt21Uo6',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 35,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 37,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 60,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 41,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 18,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 4,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 40,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 59,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 96,
						language : 'kydcTw02q4jZxRXv',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 29,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 5,
						user_id : -6802157790829748639,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 79,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 63,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 3,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 8,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 94,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 14,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 30,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 30,
						document_id : -6418319239631001143,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 43,
					),
				),
				quote_offset : 36,
				todo_item_id : 50,
			),
			date : 13,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 100,
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
						date : 38,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 56,
					),
				),
			),
			ttl_period : 2,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8345548857685920991,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1327171434491470891,
			title : 'rGn2BS8x7sVwQZa5',
			photo : $client->chatPhotoEmpty(),
			participants_count : 25,
			date : 11,
			version : 12,
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
				until_date : 24,
			),
		),
		$client->chatForbidden(
			id : -2637873514494118770,
			title : 'ZlSiDH4Udx73JaMv',
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
			id : -6424053889070855784,
			access_hash : -4310472051607182632,
			title : 'puhzymxCj6WAitr1',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jQCXUh8F92Rdezqs',
					reason : 'r6iEM4LzFxOXZ1V7',
					text : 'r2HD0B6iXjFYacxO',
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
				until_date : 24,
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
			participants_count : 31,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 4,
			),
			color : $client->peerColor(
				color : 39,
				background_emoji_id : -8661532762400042552,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : -4330401435627480268,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 92,
			subscription_until_date : 77,
			bot_verification_icon : 3330924944017749364,
			send_paid_messages_stars : -3379994993645560563,
			linked_monoforum_id : -353910864492010974,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8084658509748360106,
			access_hash : -3980896574718545000,
			title : 'erOYXqSbx0iRvDuj',
			until_date : 13,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2237586089707185163,
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
			id : 5753901473784306683,
			access_hash : 7156590270990231501,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'C0BIRfY6J2joAxrN',
					reason : '0vVGbX7CgU2colMr',
					text : 'AmyKl4ZpNOsc2FWP',
				),
			),
			bot_inline_placeholder : '8H9pbfKq1xDLu5tF',
			lang_code : 'uWM9NKfItXQsR5eH',
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
				max_id : 27,
			),
			color : $client->peerColor(
				color : 39,
				background_emoji_id : 1765362676886278898,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : -5987592018957810000,
			),
			bot_active_users : 36,
			bot_verification_icon : 2269940738000065686,
			send_paid_messages_stars : -425963275495769170,
		),
	),
	pts : 33,
);
```