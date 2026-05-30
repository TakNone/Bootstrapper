# messages.forumTopics

**Description** : *Contains information about multiple forum topics*

**Layer** : 222

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
	count : 96,
	topics : array(
		$client->forumTopicDeleted(
			id : 99,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 72,
			date : 26,
			peer : $client->peerUser(
				user_id : 4811561389931931986,
			),
			title : '6sUmYiNyb7JGLXC0',
			icon_color : 34,
			icon_emoji_id : -9182684487060179948,
			top_message : 74,
			read_inbox_max_id : 92,
			read_outbox_max_id : 96,
			unread_count : 95,
			unread_mentions_count : 66,
			unread_reactions_count : 20,
			from_id : $client->peerUser(
				user_id : -2558562499215275774,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 2,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			draft : $client->draftMessageEmpty(
				date : 1,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 12,
			peer_id : $client->peerUser(
				user_id : 5944248871003073528,
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
			id : 28,
			from_id : $client->peerUser(
				user_id : -5676754676402251161,
			),
			from_boosts_applied : 39,
			peer_id : $client->peerUser(
				user_id : 9147186760737485590,
			),
			saved_peer_id : $client->peerUser(
				user_id : -3835569286338339774,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -8449110017972527248,
				),
				from_name : 'Kh6MXUJQl70n4GHb',
				date : 56,
				channel_post : 42,
				post_author : 'EriUPAxQwBIjsNb9',
				saved_from_peer : $client->peerUser(
					user_id : -8965660171049301208,
				),
				saved_from_msg_id : 20,
				saved_from_id : $client->peerUser(
					user_id : 3882452132294614695,
				),
				saved_from_name : 'BcurpN8DdwJtksHl',
				saved_date : 93,
				psa_type : 'bT1tv8PaXAl2R6zB',
			),
			via_bot_id : 865753359172466044,
			via_business_bot_id : 3581435850614133722,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 66,
				reply_to_peer_id : $client->peerUser(
					user_id : -2199273208452109363,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'pCr7WlxgeMzEwnA9',
					date : 72,
					channel_post : 63,
					post_author : 'bjlBKZWHtuIShTcE',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 100,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'GLc3UKvgilCxHu84',
					saved_date : 93,
					psa_type : '35DWqYzl6PArt2aX',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 71,
				quote_text : 'psLSda2Uvm3YnRGV',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 8,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 35,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 28,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 81,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 52,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 88,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 2,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 51,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 34,
						language : '20njWmxdY16a8sMU',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 68,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 60,
						user_id : 9079618486698766771,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 27,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 57,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 3,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 35,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 3,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 78,
						document_id : -6114390123169926915,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 40,
					),
				),
				quote_offset : 67,
				todo_item_id : 12,
			),
			date : 51,
			message : 'jkfRKnF09ZxrWmgB',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 62,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 100,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 15,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 96,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 70,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 77,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 91,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 22,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 58,
					language : '72PvJ6N8GUVOp3cq',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 100,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 97,
					user_id : -399072585652532139,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 43,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 66,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 49,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 33,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 22,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 31,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 12,
					document_id : 4672579874265695759,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 32,
				),
			),
			views : 20,
			forwards : 21,
			replies : $client->messageReplies(
				comments : true,
				replies : 97,
				replies_pts : 58,
				recent_repliers : array(
					$client->peerUser(
						user_id : -1890208274517261498,
					),
					$client->peerChat(
						chat_id : 3553562098287090119,
					),
					$client->peerChannel(
						channel_id : 6493196210067545531,
					),
				),
				channel_id : -661091787926347467,
				max_id : 7,
				read_max_id : 11,
			),
			edit_date : 79,
			post_author : 'vcRhf4DrCILyiSY5',
			grouped_id : 5146913664046715615,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 41,
						reaction : $client->reactionEmpty(...),
						count : 68,
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
						count : 33,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vRVhgAQfMo9ydueT',
					reason : 'Q60rBCmUtRKfoPNb',
					text : 'BfnOGQuzKjvyhqxs',
				),
			),
			ttl_period : 88,
			quick_reply_shortcut_id : 73,
			effect : 7793363056203050671,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'TwyuGx79nY5HKBfd',
				text : $client->textWithEntities(
					text : 'GJptmyxDSZnU1r5s',
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
			report_delivery_until_date : 54,
			paid_message_stars : 8082292879845129168,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 8807445466826024274,
					nanos : 74,
				),
				schedule_date : 50,
			),
			schedule_repeat_period : 8,
			summary_from_language : 'j81nhsmrPYioTCb9',
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
				user_id : -7182331774662274326,
			),
			peer_id : $client->peerUser(
				user_id : 4770069148325805338,
			),
			saved_peer_id : $client->peerUser(
				user_id : 5304987774767158740,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 62,
				reply_to_peer_id : $client->peerUser(
					user_id : -5153412651554280163,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'tOGbRYxqJhAg3M1D',
					date : 14,
					channel_post : 72,
					post_author : 'QU56MP9zfEi01KsO',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 31,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'PIJd6yR9ixguWomA',
					saved_date : 65,
					psa_type : 'CHoMrX4FAfu1zvI5',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 42,
				quote_text : '1GoDwrNYime3RXEZ',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 100,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 61,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 17,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 26,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 12,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 50,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 6,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 10,
						language : 'uv2JlBpsN4PME3Aq',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 14,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 35,
						user_id : -1865210350181666983,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 96,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 90,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 27,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 38,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 11,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 29,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 95,
						document_id : 6259382679496859046,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 99,
					),
				),
				quote_offset : 58,
				todo_item_id : 19,
			),
			date : 45,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 87,
						reaction : $client->reactionEmpty(...),
						count : 97,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 15,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 15,
					),
				),
			),
			ttl_period : 91,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1087063152184803075,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -250664938496884461,
			title : '9XA08zlxbwjSJiIM',
			photo : $client->chatPhotoEmpty(),
			participants_count : 8,
			date : 30,
			version : 2,
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
				until_date : 23,
			),
		),
		$client->chatForbidden(
			id : 3499580560730393855,
			title : 'bDYdnJtzpBuwraMW',
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
			id : -6133538442713379377,
			access_hash : -3260319757953630552,
			title : 'H2wsKhMSxkYUD7Eq',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wlQhJo1PKgX2OE9I',
					reason : 'BzukXTtcGDY3JHSx',
					text : 'JIs0mjbA2kyviYE5',
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
				until_date : 49,
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
				until_date : 68,
			),
			participants_count : 40,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 97,
			),
			color : $client->peerColor(
				color : 97,
				background_emoji_id : 9163603727471328296,
			),
			profile_color : $client->peerColor(
				color : 44,
				background_emoji_id : -6279423288811977208,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 93,
			subscription_until_date : 28,
			bot_verification_icon : -5745006424333915698,
			send_paid_messages_stars : -6283726367743046111,
			linked_monoforum_id : -8959577509297786574,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 3331910555552360282,
			access_hash : -3672851714094854300,
			title : 'Phbev7aM0mSxdnj3',
			until_date : 42,
		),
	),
	users : array(
		$client->userEmpty(
			id : -845211417602874906,
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
			id : -2566646130292200785,
			access_hash : 7877571628628038572,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'U7wY2FIsZf3uMbHx',
					reason : 'pRJKj9ezZghQ3mHX',
					text : '6JAVyPaigEDvnRYH',
				),
			),
			bot_inline_placeholder : 'mF3kDCY8y9HMqhX2',
			lang_code : 'q8rOpRtm6BlUE0bV',
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
				max_id : 30,
			),
			color : $client->peerColor(
				color : 91,
				background_emoji_id : -8765461789364639489,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : 8927343184792147658,
			),
			bot_active_users : 16,
			bot_verification_icon : -5658032358481926132,
			send_paid_messages_stars : 1827678543934167550,
		),
	),
	pts : 3,
);
```