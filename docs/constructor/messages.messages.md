# messages.messages

**Description** : *Full list of messages with auxiliary data*

**Layer** : 222

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
			id : 38,
			peer_id : $client->peerUser(
				user_id : -6764358201772831690,
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
			id : 64,
			from_id : $client->peerUser(
				user_id : -882316171016003596,
			),
			from_boosts_applied : 69,
			peer_id : $client->peerUser(
				user_id : -3686875029447950215,
			),
			saved_peer_id : $client->peerUser(
				user_id : 6717557299564904772,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 6080344355282860183,
				),
				from_name : '89H1vKYzaNPlhbIJ',
				date : 26,
				channel_post : 42,
				post_author : 'HJx7XdI2QMYejoNu',
				saved_from_peer : $client->peerUser(
					user_id : 6606900035750116008,
				),
				saved_from_msg_id : 92,
				saved_from_id : $client->peerUser(
					user_id : 3860802571004830980,
				),
				saved_from_name : 'sFZc89kjORwvozJy',
				saved_date : 73,
				psa_type : 'KUTczbPnFOlNaug3',
			),
			via_bot_id : -6563531645615769178,
			via_business_bot_id : 3740075660877601313,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 3,
				reply_to_peer_id : $client->peerUser(
					user_id : -6579443147146292647,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'VR7XcUIBydegmhEC',
					date : 35,
					channel_post : 79,
					post_author : 'ZBgHn1lqQRYdew64',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 28,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '0M3fNZ25xwvRpqo8',
					saved_date : 85,
					psa_type : 'nthaRxifOQvS8L7l',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 22,
				quote_text : 'TB4EqLfxhAG5WIvm',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 21,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 44,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 45,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 84,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 51,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 99,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 50,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 2,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 62,
						language : '7NDzvWyu0IioP21c',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 67,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : 7686007314628873790,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 50,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 81,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 41,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 29,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 72,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 82,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 68,
						document_id : -141827287653287752,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 16,
					),
				),
				quote_offset : 87,
				todo_item_id : 72,
			),
			date : 31,
			message : 'dpEG0oDnTWZmLgxv',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 83,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 47,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 65,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 77,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 11,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 51,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 46,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 12,
					language : 'TAm8LbtKSNeUudkx',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 31,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 35,
					user_id : 3187647972995904116,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 15,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 26,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 15,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 71,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 24,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 93,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 4,
					document_id : -8420581188545454073,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 89,
				),
			),
			views : 53,
			forwards : 59,
			replies : $client->messageReplies(
				comments : true,
				replies : 12,
				replies_pts : 93,
				recent_repliers : array(
					$client->peerUser(
						user_id : -7819343825250912223,
					),
					$client->peerChat(
						chat_id : -2782215318831216718,
					),
					$client->peerChannel(
						channel_id : 2549588356061448519,
					),
				),
				channel_id : -1482603453880786428,
				max_id : 58,
				read_max_id : 40,
			),
			edit_date : 78,
			post_author : 'OCDGk3ZagtWJB8NU',
			grouped_id : 6619250265996620010,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 93,
						reaction : $client->reactionEmpty(...),
						count : 58,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 42,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 69,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'miJ2zhpH9w7X0Yl5',
					reason : '5eibpHsOLU1qMfcg',
					text : 'CsMtYgaXOvmecUFl',
				),
			),
			ttl_period : 30,
			quick_reply_shortcut_id : 20,
			effect : -3684544678208060823,
			factcheck : $client->factCheck(
				need_check : true,
				country : '9lRmUZHbIzqj2YEt',
				text : $client->textWithEntities(
					text : 'EGvDuSoW1fNjVKm0',
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
			paid_message_stars : 5642128150915702822,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 1551319765754173669,
					nanos : 95,
				),
				schedule_date : 2,
			),
			schedule_repeat_period : 22,
			summary_from_language : 'fUAoP5x7CcpdtN6g',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 74,
			from_id : $client->peerUser(
				user_id : 1963890552624862202,
			),
			peer_id : $client->peerUser(
				user_id : -4964828144549357450,
			),
			saved_peer_id : $client->peerUser(
				user_id : -4786571822679860398,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 26,
				reply_to_peer_id : $client->peerUser(
					user_id : 8138950255253793608,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'T5PwXO4q6HMgAbUs',
					date : 46,
					channel_post : 11,
					post_author : 'fK2TWIjaXiqwu4mF',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 21,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'akY18cAmPO4tXZr2',
					saved_date : 31,
					psa_type : 'JgXTzeRaMVlGCPN9',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 98,
				quote_text : 'uNFU6lVWvoDmhTGA',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 96,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 12,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 19,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 73,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 54,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 69,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 84,
						language : 'rDHYijeWI1tchRmg',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 53,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 78,
						user_id : 2597711775177740626,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 90,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 2,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 10,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 88,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 80,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 8,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 10,
						document_id : -1147655302209005118,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 89,
					),
				),
				quote_offset : 39,
				todo_item_id : 72,
			),
			date : 6,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 92,
						reaction : $client->reactionEmpty(...),
						count : 8,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 26,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 20,
					),
				),
			),
			ttl_period : 38,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 65,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 59,
			date : 52,
			peer : $client->peerUser(
				user_id : -5731532132817215955,
			),
			title : 'IGj350xdDYP8WZFn',
			icon_color : 43,
			icon_emoji_id : -8936502696974499061,
			top_message : 73,
			read_inbox_max_id : 18,
			read_outbox_max_id : 29,
			unread_count : 76,
			unread_mentions_count : 58,
			unread_reactions_count : 28,
			from_id : $client->peerUser(
				user_id : 5690952237190299478,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 21,
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
				date : 77,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4780445703922842851,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6766347568431126487,
			title : 'KvYqExJkXlsN4fAz',
			photo : $client->chatPhotoEmpty(),
			participants_count : 5,
			date : 42,
			version : 91,
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
				until_date : 14,
			),
		),
		$client->chatForbidden(
			id : -4452772184068743015,
			title : 'jAR4vZ5h0KBpor3s',
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
			id : -6393705790723194707,
			access_hash : 6107076960466030628,
			title : 'dnLvz1w9kVc57roK',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 30,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'osCB4dbhWpJtSlkV',
					reason : 'MW7NnQ0FUvTsrBjc',
					text : 'pDYR7OJLzeuEjSBr',
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
				until_date : 10,
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
				until_date : 85,
			),
			participants_count : 19,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 38,
			),
			color : $client->peerColor(
				color : 35,
				background_emoji_id : -5641255046515461614,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : 2847967724523117481,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 31,
			subscription_until_date : 75,
			bot_verification_icon : -5795266869274525657,
			send_paid_messages_stars : -6842673510877865367,
			linked_monoforum_id : 2660083356925428185,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -5814962734541385327,
			access_hash : 7444898652643110267,
			title : 'nHGemd8NzpIuxj7E',
			until_date : 76,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1289482553167795535,
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
			id : -6973969297123225045,
			access_hash : -6840647733914960323,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'q5sfBz4Ll8mTXQEn',
					reason : '4TDi56ZBFj8vG17I',
					text : 'mEQq1oWnHUhvd5r6',
				),
			),
			bot_inline_placeholder : 'E7xZhpPqHbMBFsKf',
			lang_code : 'oj7QIJNinR4pFUmw',
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
				max_id : 60,
			),
			color : $client->peerColor(
				color : 26,
				background_emoji_id : -2641773672506697602,
			),
			profile_color : $client->peerColor(
				color : 10,
				background_emoji_id : -3882871219893202994,
			),
			bot_active_users : 85,
			bot_verification_icon : 7430392863662041663,
			send_paid_messages_stars : -4283051063026124248,
		),
	),
);
```