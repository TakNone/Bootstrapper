# messages.messages

**Description** : *Full list of messages with auxiliary data*

**Layer** : 218

```tl
messages.messages#1d73e7ea messages:Vector<Message> topics:Vector<ForumTopic> chats:Vector<Chat> users:Vector<User> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | List of messages |
| <mark>topics</mark> | [`Vector<ForumTopic>`](type/ForumTopic) | NOTHING |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in dialogs |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in messages and chats |

---

## Type

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->messages(
	messages : array(
		$client->messageEmpty(
			id : 14,
			peer_id : $client->peerUser(
				user_id : 4756003677910607016,
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
			id : 99,
			from_id : $client->peerUser(
				user_id : 5160782621333410750,
			),
			from_boosts_applied : 57,
			peer_id : $client->peerUser(
				user_id : -1242460452351381001,
			),
			saved_peer_id : $client->peerUser(
				user_id : 2547477908324641875,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -8458460714252988391,
				),
				from_name : 'B6nJ0hMvNLmijlUV',
				date : 3,
				channel_post : 24,
				post_author : 'TViJ47sHIuSvELAB',
				saved_from_peer : $client->peerUser(
					user_id : 7952099204012616556,
				),
				saved_from_msg_id : 81,
				saved_from_id : $client->peerUser(
					user_id : 4850013233117721719,
				),
				saved_from_name : 'iMDI1fJGotWrNsLe',
				saved_date : 36,
				psa_type : 'N1ug35weO8m7qKxE',
			),
			via_bot_id : -8898429716647904686,
			via_business_bot_id : 4452895644747775400,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 2,
				reply_to_peer_id : $client->peerUser(
					user_id : 3447735244752440985,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'iskc1p08tXhCZuoD',
					date : 49,
					channel_post : 23,
					post_author : 'QAK4Chs7vVbyOPw1',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 14,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '4kpZiawbQG5lx0Hy',
					saved_date : 59,
					psa_type : 'MmSjUi5C2QcxJ3oa',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 59,
				quote_text : 'lyiEds1NDAj0ofJ4',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 85,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 31,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 59,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 86,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 86,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 2,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 82,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 60,
						language : 'RFLOSM64CxsZBErH',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 97,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : 5238559755725621166,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 74,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 39,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 85,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 99,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 95,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 89,
						document_id : -6752283406628394910,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 22,
					),
				),
				quote_offset : 6,
				todo_item_id : 26,
			),
			date : 75,
			message : 'szt5MAbUGmd6H2gr',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 17,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 21,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 69,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 78,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 52,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 30,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 61,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 8,
					language : '1zCQFwBOTnx5gVRh',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 20,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 42,
					user_id : 391223968055749865,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 34,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 87,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 70,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 47,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 46,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 64,
					document_id : 2927741856123918088,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 88,
				),
			),
			views : 0,
			forwards : 30,
			replies : $client->messageReplies(
				comments : true,
				replies : 59,
				replies_pts : 7,
				recent_repliers : array(
					$client->peerUser(
						user_id : 3959103493059743161,
					),
					$client->peerChat(
						chat_id : 7631937316039106040,
					),
					$client->peerChannel(
						channel_id : 286493379064648889,
					),
				),
				channel_id : -3249294666975536745,
				max_id : 75,
				read_max_id : 8,
			),
			edit_date : 3,
			post_author : 'tFIs8ZyOSB4AmkQU',
			grouped_id : 6569936164458279734,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 68,
						reaction : $client->reactionEmpty(...),
						count : 20,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 64,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 13,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XY4ArBZ7O0TP2cKW',
					reason : '2GY7M5U9asXWBpub',
					text : 'wzXYxkVcWfodpbHJ',
				),
			),
			ttl_period : 43,
			quick_reply_shortcut_id : 21,
			effect : -142491190020827644,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'iRrE63gTdtG1VxN2',
				text : $client->textWithEntities(
					text : 'bW7skAEvhtZYpnj8',
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
			report_delivery_until_date : 77,
			paid_message_stars : -876067690959157703,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -3581188906580617161,
					nanos : 15,
				),
				schedule_date : 28,
			),
			schedule_repeat_period : 11,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 45,
			from_id : $client->peerUser(
				user_id : -7062277026129546461,
			),
			peer_id : $client->peerUser(
				user_id : 7102489173805925163,
			),
			saved_peer_id : $client->peerUser(
				user_id : -1041025364673785746,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 14,
				reply_to_peer_id : $client->peerUser(
					user_id : 1342682864228036520,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'DQdzhkJw2vg6Fb7u',
					date : 63,
					channel_post : 43,
					post_author : 'ItCm49Hdf5nkcD7e',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 28,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '98UzBLrOpCVd7HFu',
					saved_date : 5,
					psa_type : 'EkGlPdeJihOQ6Nzw',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 97,
				quote_text : 'BYrkUs4benJMD3V0',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 45,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 28,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 33,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 71,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 5,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 9,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 18,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 39,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 25,
						language : 'McFBt72l6KxHLNIs',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 95,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 44,
						user_id : -4754690622914172857,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 39,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 48,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 83,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 20,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 53,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 88,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 89,
						document_id : -1964932829404490148,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 31,
					),
				),
				quote_offset : 80,
				todo_item_id : 12,
			),
			date : 43,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 97,
						reaction : $client->reactionEmpty(...),
						count : 49,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 33,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 90,
					),
				),
			),
			ttl_period : 39,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 60,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 84,
			date : 95,
			peer : $client->peerUser(
				user_id : 6974930747053162447,
			),
			title : '4pqOBxwbtcnVm6lk',
			icon_color : 27,
			icon_emoji_id : 4271508563630116145,
			top_message : 72,
			read_inbox_max_id : 24,
			read_outbox_max_id : 9,
			unread_count : 66,
			unread_mentions_count : 32,
			unread_reactions_count : 97,
			from_id : $client->peerUser(
				user_id : 1524817292887216813,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 72,
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
				date : 7,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5814937161386272599,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7702280939167601865,
			title : 'uOZR8wpQWHP267Mr',
			photo : $client->chatPhotoEmpty(),
			participants_count : 1,
			date : 36,
			version : 19,
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
				until_date : 20,
			),
		),
		$client->chatForbidden(
			id : -5140999481461756008,
			title : 'YzkR2OvljKQ04i7B',
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
			id : -1220633833147663186,
			access_hash : 4441028815875779281,
			title : 'azN3LKl1F8GCSOuw',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 23,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ga1CRBMKsAnQ0kmc',
					reason : 'ybaT9I2XZ8rJPgFC',
					text : 'VPHS31hg4CjZ2aer',
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
				until_date : 74,
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
			participants_count : 36,
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
				color : 58,
				background_emoji_id : -975047106682730529,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : 7828896916202626774,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 83,
			subscription_until_date : 24,
			bot_verification_icon : -7983176964594725770,
			send_paid_messages_stars : -8719476056217653445,
			linked_monoforum_id : 3360943013543303294,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7509793386411933554,
			access_hash : -3765487096837594798,
			title : '6DxkwpdTW4tRLvmq',
			until_date : 26,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1907779287156000372,
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
			id : 557566523846490799,
			access_hash : 1629489458288971047,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UCoPtyEpbS7iv8nD',
					reason : 'X6j0qRPi5eCnmOE2',
					text : 'RCgymBPVXsAdw1a6',
				),
			),
			bot_inline_placeholder : 'flOmg83dpGFLHiQy',
			lang_code : '2PHxWMoGfFzhSZ0g',
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
				max_id : 56,
			),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 6635192604916067335,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : -2463010650893626961,
			),
			bot_active_users : 29,
			bot_verification_icon : 4756676739484064377,
			send_paid_messages_stars : 7179723923370005378,
		),
	),
);
```