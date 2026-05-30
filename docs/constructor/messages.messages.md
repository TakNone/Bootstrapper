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
			id : 11,
			peer_id : $client->peerUser(
				user_id : 6856672141563781836,
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
			id : 65,
			from_id : $client->peerUser(
				user_id : 3950820126989285039,
			),
			from_boosts_applied : 50,
			peer_id : $client->peerUser(
				user_id : 2504618993869426144,
			),
			saved_peer_id : $client->peerUser(
				user_id : 3017525966561285355,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 5352340621628091750,
				),
				from_name : 'ZT2vbIp3jMQSDxBV',
				date : 6,
				channel_post : 68,
				post_author : '6XHIy7GmPhvt9BCs',
				saved_from_peer : $client->peerUser(
					user_id : 7834356759405408367,
				),
				saved_from_msg_id : 65,
				saved_from_id : $client->peerUser(
					user_id : 2177004066966633237,
				),
				saved_from_name : '5F8vwely6NJjRdUr',
				saved_date : 69,
				psa_type : 'eSjJ05DlcMuKhvi1',
			),
			via_bot_id : 5406023940822919910,
			via_business_bot_id : 1458077378478098437,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 69,
				reply_to_peer_id : $client->peerUser(
					user_id : -6129993536686419815,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '86lhM0gfIatKF9T1',
					date : 75,
					channel_post : 8,
					post_author : 'vNG5ZayYVzLgEUi7',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 90,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'AMGWsgcJv6VH2Kjk',
					saved_date : 23,
					psa_type : 'TtGg1AnI0mlpZUPO',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 14,
				quote_text : 'duMXornImQf4iGRA',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 96,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 80,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 32,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 8,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 91,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 92,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 84,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 3,
						language : '0264HDjXsSOqYPb9',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 1,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 54,
						user_id : -3232017361428027142,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 48,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 49,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 94,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 48,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 41,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 74,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 12,
						document_id : -4615131206685460955,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 23,
					),
				),
				quote_offset : 64,
				todo_item_id : 18,
			),
			date : 91,
			message : 'CReYUhuWSHAPE4Vs',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 92,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 45,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 63,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 89,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 50,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 69,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 88,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 56,
					language : 'Mqc7XLxVG0BjseQb',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 55,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 25,
					user_id : -8735181216315701087,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 92,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 29,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 95,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 27,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 20,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 93,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 90,
					document_id : -5016259009778992027,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 74,
				),
			),
			views : 11,
			forwards : 0,
			replies : $client->messageReplies(
				comments : true,
				replies : 28,
				replies_pts : 53,
				recent_repliers : array(
					$client->peerUser(
						user_id : 527779766417102982,
					),
					$client->peerChat(
						chat_id : 7554696036069050270,
					),
					$client->peerChannel(
						channel_id : 18437364804305595,
					),
				),
				channel_id : -7360451205101257769,
				max_id : 14,
				read_max_id : 31,
			),
			edit_date : 32,
			post_author : '2xLqG0ifYbDRd1ov',
			grouped_id : -6462077217810791096,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 20,
						reaction : $client->reactionEmpty(...),
						count : 82,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 14,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 54,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'RLlFdv8kWYJftXra',
					reason : 'H9C4GVoBdWFfg2wK',
					text : 'jygwOcW0nF4G7VUp',
				),
			),
			ttl_period : 89,
			quick_reply_shortcut_id : 46,
			effect : 7228061972251162560,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'IJzcHBtUd3MQjZwL',
				text : $client->textWithEntities(
					text : 'oyTsHNXA0nzqBwfF',
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
			report_delivery_until_date : 74,
			paid_message_stars : -7799209528705972590,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -6288101810733269259,
					nanos : 58,
				),
				schedule_date : 49,
			),
			schedule_repeat_period : 10,
			summary_from_language : 'MPygs7DOV6qZY24R',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 52,
			from_id : $client->peerUser(
				user_id : -3932415352199777595,
			),
			peer_id : $client->peerUser(
				user_id : -6622935883896482989,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6312227538386081136,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 51,
				reply_to_peer_id : $client->peerUser(
					user_id : -1958834189813004894,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'X2Wb67nyr0jDmlFx',
					date : 30,
					channel_post : 10,
					post_author : 'X5zYvUclHhw6o1jn',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 90,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'OM4yAsPeUbQja3kw',
					saved_date : 91,
					psa_type : 'khKOSrxbo4C1iazv',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 47,
				quote_text : 'loxLjGqWEtfFg4Ni',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 51,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 90,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 35,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 0,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 0,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 22,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 35,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 32,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 32,
						language : 'dqkSv4x1NBeXjVIY',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 99,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : 5883715572143046641,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 52,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 27,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 73,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 30,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 31,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 17,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 67,
						document_id : -895638444176215967,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 30,
					),
				),
				quote_offset : 48,
				todo_item_id : 32,
			),
			date : 5,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 76,
						reaction : $client->reactionEmpty(...),
						count : 26,
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
						count : 88,
					),
				),
			),
			ttl_period : 33,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 19,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 28,
			date : 17,
			peer : $client->peerUser(
				user_id : 5780480826166013075,
			),
			title : 'bLmU2nfAC1Kd6oST',
			icon_color : 92,
			icon_emoji_id : -9187705289452875186,
			top_message : 15,
			read_inbox_max_id : 54,
			read_outbox_max_id : 16,
			unread_count : 83,
			unread_mentions_count : 12,
			unread_reactions_count : 27,
			from_id : $client->peerUser(
				user_id : -3530215262076464185,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 57,
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
				date : 27,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -5638540757530264722,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2300556281018526812,
			title : 'GJsOvFCAqRjcu9WX',
			photo : $client->chatPhotoEmpty(),
			participants_count : 96,
			date : 81,
			version : 49,
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
				until_date : 56,
			),
		),
		$client->chatForbidden(
			id : -5493866253429097728,
			title : 'Ev1KNIabltyJWh0B',
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
			id : -3645791716058745485,
			access_hash : -5955765652482822236,
			title : 'e8ptJysHnkz9hoXd',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 87,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'a6kOqN2LMtXs8Hry',
					reason : '6czmkTW1GEB5l7b3',
					text : 'OjthaIw4TLWlMS1P',
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
				until_date : 55,
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
				until_date : 55,
			),
			participants_count : 91,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 87,
			),
			color : $client->peerColor(
				color : 67,
				background_emoji_id : -679545767144506195,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : -6763662581374400792,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 4,
			subscription_until_date : 48,
			bot_verification_icon : 1409036297952212259,
			send_paid_messages_stars : -2697563625150560346,
			linked_monoforum_id : 6279023714591320618,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 6073035458812978223,
			access_hash : 7520847798035196563,
			title : 'XS78hvBm3Tp5RlDe',
			until_date : 35,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4696606789185993404,
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
			id : -7720029482522175301,
			access_hash : 3656984644181902112,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pnNrfXeqQR1IoBYx',
					reason : 'Ok5Ejf4z8gQVxewy',
					text : 'J4Xd1iNwhqyKQWUI',
				),
			),
			bot_inline_placeholder : 'HJCWaGQh7wY8obSX',
			lang_code : 'puQb96GcdMLEXDxW',
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
				max_id : 26,
			),
			color : $client->peerColor(
				color : 17,
				background_emoji_id : 2853663262493954591,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : -2625370000408265263,
			),
			bot_active_users : 48,
			bot_verification_icon : 6347411744705505056,
			send_paid_messages_stars : -5107566581410584547,
		),
	),
);
```