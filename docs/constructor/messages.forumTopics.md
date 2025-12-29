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
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 14,
	topics : array(
		$client->forumTopicDeleted(
			id : 88,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 96,
			date : 98,
			peer : $client->peerUser(
				user_id : 7499026259254170388,
			),
			title : 'ZfvwCoXY0QP8yTaE',
			icon_color : 35,
			icon_emoji_id : 1959120235286625812,
			top_message : 94,
			read_inbox_max_id : 36,
			read_outbox_max_id : 68,
			unread_count : 70,
			unread_mentions_count : 69,
			unread_reactions_count : 70,
			from_id : $client->peerUser(
				user_id : -3112170319102823623,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 88,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			draft : $client->draftMessageEmpty(
				date : 8,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 77,
			peer_id : $client->peerUser(
				user_id : -6437750163446434073,
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
			id : 66,
			from_id : $client->peerUser(
				user_id : -2480306944754369055,
			),
			from_boosts_applied : 84,
			peer_id : $client->peerUser(
				user_id : -791908280778888228,
			),
			saved_peer_id : $client->peerUser(
				user_id : -4648116727353156646,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -1362828931361192864,
				),
				from_name : 'LRmesxInth2pYCkP',
				date : 49,
				channel_post : 89,
				post_author : 'stzVUEDfrlk0eSFK',
				saved_from_peer : $client->peerUser(
					user_id : 699387343349842964,
				),
				saved_from_msg_id : 69,
				saved_from_id : $client->peerUser(
					user_id : 5773836346251779010,
				),
				saved_from_name : 'RnplDhZ2eLV4P9db',
				saved_date : 25,
				psa_type : 'vC1BxbZSpIEJkVq2',
			),
			via_bot_id : -2728504066561607121,
			via_business_bot_id : -1423798216812971139,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 12,
				reply_to_peer_id : $client->peerUser(
					user_id : -634293454772846515,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'YzusKWvUfyIqCbS9',
					date : 87,
					channel_post : 11,
					post_author : 'fs8YUGbTKEza5uPr',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 10,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '8cWf6zdDnIqHMaST',
					saved_date : 48,
					psa_type : 'r0CdR7UiwOs5LXWh',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 95,
				quote_text : '3kLmTc4ojyusHdxJ',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 72,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 25,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 78,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 70,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 12,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 11,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 6,
						language : 'CxBJUZ9jFk7ERoyi',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 51,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 30,
						user_id : -5328900976802604560,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 73,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 31,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 15,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 61,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 61,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 43,
						document_id : 3392326608922110507,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 78,
					),
				),
				quote_offset : 30,
				todo_item_id : 94,
			),
			date : 48,
			message : 'Wg9KNvfI4Qp8oVXF',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 54,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 20,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 21,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 55,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 77,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 50,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 53,
					language : 'l7I2aDM6FuoYf1p3',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 51,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 22,
					user_id : -6226089273574294662,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 25,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 44,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 49,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 43,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 9,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 36,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 90,
					document_id : -4304914330772454653,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 82,
				),
			),
			views : 0,
			forwards : 18,
			replies : $client->messageReplies(
				comments : true,
				replies : 98,
				replies_pts : 33,
				recent_repliers : array(
					$client->peerUser(
						user_id : -9076944186792170025,
					),
					$client->peerChat(
						chat_id : -5647059810216898013,
					),
					$client->peerChannel(
						channel_id : 2055715137009051526,
					),
				),
				channel_id : 3475686139130619374,
				max_id : 50,
				read_max_id : 74,
			),
			edit_date : 2,
			post_author : 'g4feaRvFmuyqLOQ0',
			grouped_id : 3450180707628580888,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 18,
						reaction : $client->reactionEmpty(...),
						count : 41,
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
						count : 66,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6XiRwecEK28AICpO',
					reason : 'i8gucBJPlE165jtf',
					text : 'DeOv0y3CtsRHKzif',
				),
			),
			ttl_period : 16,
			quick_reply_shortcut_id : 49,
			effect : 423592099794332331,
			factcheck : $client->factCheck(
				need_check : true,
				country : '7tE643AfNZQRBkIg',
				text : $client->textWithEntities(
					text : 'nHPOl0Nk1hX4rQep',
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
			report_delivery_until_date : 65,
			paid_message_stars : 165870197566229021,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 8545541235146214094,
					nanos : 22,
				),
				schedule_date : 52,
			),
			schedule_repeat_period : 95,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 66,
			from_id : $client->peerUser(
				user_id : -7049054758174837667,
			),
			peer_id : $client->peerUser(
				user_id : 5596215037088990231,
			),
			saved_peer_id : $client->peerUser(
				user_id : -7449046592276497242,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 44,
				reply_to_peer_id : $client->peerUser(
					user_id : 2960237265766479063,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'ZERFfzHg6dysBeWb',
					date : 94,
					channel_post : 88,
					post_author : 'lBa2JYZKCiLzRFQj',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 83,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '3axndc2mCSJT4pgz',
					saved_date : 5,
					psa_type : '6BY4qPRkazrK9t2m',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 87,
				quote_text : 'MRjayZEdBNSq85Dp',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 63,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 64,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 53,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 42,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 72,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 38,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 27,
						language : '1ov2zIXcltWd9km7',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 93,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 32,
						user_id : 8577749906140848022,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 60,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 1,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 61,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 12,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 0,
						document_id : 813297375943140354,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 54,
					),
				),
				quote_offset : 8,
				todo_item_id : 34,
			),
			date : 18,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 83,
						reaction : $client->reactionEmpty(...),
						count : 50,
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
						count : 22,
					),
				),
			),
			ttl_period : 10,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5707736370596578849,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5218858218861092176,
			title : 'T5Nhiz7qYnEKQGcr',
			photo : $client->chatPhotoEmpty(),
			participants_count : 22,
			date : 96,
			version : 94,
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
				until_date : 25,
			),
		),
		$client->chatForbidden(
			id : 575230508588711652,
			title : '8gpqEhVUN9CjmMl3',
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
			id : -60939882367725320,
			access_hash : 798400143780830736,
			title : 'y7awp4nLzA0qEOxt',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'aVUNpnse08KEtyQ5',
					reason : 'ryaLEd0tvDsM64IH',
					text : 'qdBpguTVeiw2G6mP',
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
				until_date : 98,
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
				until_date : 80,
			),
			participants_count : 34,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 51,
			),
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -5112182473654520575,
			),
			profile_color : $client->peerColor(
				color : 97,
				background_emoji_id : 1082427112236427751,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 94,
			subscription_until_date : 37,
			bot_verification_icon : 7099778239328109540,
			send_paid_messages_stars : -7701648091994885712,
			linked_monoforum_id : 7268884724755917678,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 1853983673240935798,
			access_hash : -4320224349223964270,
			title : 'idKo4yYkOmTqQAnl',
			until_date : 11,
		),
	),
	users : array(
		$client->userEmpty(
			id : 851113163476183920,
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
			id : -1681025074026625471,
			access_hash : -7043840005320658219,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qiX5T6NjPU8f7dow',
					reason : 'anbITPhwGcQp0Wkl',
					text : '2c6VnNLEbJxsieW9',
				),
			),
			bot_inline_placeholder : 'GjZCFeknbJiXp0rK',
			lang_code : 'tuxMrmsZ2I4dfR3F',
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
				max_id : 25,
			),
			color : $client->peerColor(
				color : 21,
				background_emoji_id : -188947657029947588,
			),
			profile_color : $client->peerColor(
				color : 71,
				background_emoji_id : 2214420836667434747,
			),
			bot_active_users : 25,
			bot_verification_icon : -4712345083775338308,
			send_paid_messages_stars : -7507597179448114704,
		),
	),
	pts : 40,
);
```