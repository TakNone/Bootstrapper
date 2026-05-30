# messages.channelMessages

**Description** : *Channel messages*

**Layer** : 222

```tl
messages.channelMessages#c776ba4e flags:# inexact:flags.1?true pts:int count:int offset_id_offset:flags.2?int messages:Vector<Message> topics:Vector<ForumTopic> chats:Vector<Chat> users:Vector<User> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **inexact** | [`flags.1?true`](type/true) | If set, returned results may be inexact |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |
| <mark>count</mark> | [`int`](type/int) | Total number of results were found server-side (may not be all included here) |
| **offset_id_offset** | [`flags.2?int`](type/int) | Indicates the absolute position of messages[0] within the total result set with count count. This is useful, for example, if the result was fetched using offset_id, and we need to display a progress/total counter (like photo 134 of 200, for all media in a chat, we could simply use photo ${offset_id_offset} of ${count} |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | Found messages |
| <mark>topics</mark> | [`Vector<ForumTopic>`](type/ForumTopic) | Forum topic information |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->channelMessages(
	inexact : true,
	pts : 71,
	count : 97,
	offset_id_offset : 0,
	messages : array(
		$client->messageEmpty(
			id : 60,
			peer_id : $client->peerUser(
				user_id : 3337216548545647907,
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
			id : 22,
			from_id : $client->peerUser(
				user_id : 2092186132271078497,
			),
			from_boosts_applied : 7,
			peer_id : $client->peerUser(
				user_id : 7779789127325403907,
			),
			saved_peer_id : $client->peerUser(
				user_id : -3350756245239641654,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 4162562297976929225,
				),
				from_name : 'l9IKhyGULF07QHxC',
				date : 84,
				channel_post : 62,
				post_author : 'ABbxfNtZwhHVrlIu',
				saved_from_peer : $client->peerUser(
					user_id : 227401927887689464,
				),
				saved_from_msg_id : 51,
				saved_from_id : $client->peerUser(
					user_id : 3703470247113632539,
				),
				saved_from_name : 'gRvFIxzmdUXeNq0E',
				saved_date : 45,
				psa_type : 'Jgs0BRaExcC1hH9q',
			),
			via_bot_id : 4252083531456250739,
			via_business_bot_id : -6938864316209040956,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 92,
				reply_to_peer_id : $client->peerUser(
					user_id : 7204174207141873583,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'LujoOc4x2r7qzDXY',
					date : 94,
					channel_post : 95,
					post_author : '7tUp9Xg2ZlbFLk5r',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 1,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'zSE23RUDFkpeVymA',
					saved_date : 97,
					psa_type : 'FWemhPlbgdTQIBkr',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 34,
				quote_text : '2m9ZTezjPnta73X6',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 99,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 65,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 3,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 18,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 87,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 63,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 22,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 5,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 20,
						language : 'sKioN9DA3JWEXZ17',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 16,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 59,
						user_id : 2422699872790672992,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 33,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 57,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 97,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 68,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 23,
						document_id : -3779092304478039861,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 53,
					),
				),
				quote_offset : 79,
				todo_item_id : 9,
			),
			date : 51,
			message : 'uUOXITF8AE6aRBih',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 84,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 10,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 40,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 83,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 44,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 95,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 30,
					language : '4sl3McmigYNrQwPL',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 33,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 3,
					user_id : -2538271380494570769,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 7,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 46,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 63,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 5,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 5,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 20,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 57,
					document_id : -5451950370731578825,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 81,
				),
			),
			views : 8,
			forwards : 86,
			replies : $client->messageReplies(
				comments : true,
				replies : 26,
				replies_pts : 46,
				recent_repliers : array(
					$client->peerUser(
						user_id : 1022575286053996269,
					),
					$client->peerChat(
						chat_id : 3822104973453303115,
					),
					$client->peerChannel(
						channel_id : -1574861666295111464,
					),
				),
				channel_id : 2154521701909128691,
				max_id : 12,
				read_max_id : 78,
			),
			edit_date : 5,
			post_author : '2xJ4br8HhpLZ7aBI',
			grouped_id : 5226827536301870782,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 77,
						reaction : $client->reactionEmpty(...),
						count : 23,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 37,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 85,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MG9NqHOZ8QW7j0nv',
					reason : 'vOFh9zpkeBAsoLwm',
					text : 'XSUsbkdALfTy45qQ',
				),
			),
			ttl_period : 54,
			quick_reply_shortcut_id : 54,
			effect : 6410389381419025644,
			factcheck : $client->factCheck(
				need_check : true,
				country : '4zn7bhrMSd2FwuyZ',
				text : $client->textWithEntities(
					text : 'dv1NRwm8fG9UyTpS',
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
			report_delivery_until_date : 11,
			paid_message_stars : 7452476323601845882,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 5163228308797613214,
					nanos : 32,
				),
				schedule_date : 21,
			),
			schedule_repeat_period : 74,
			summary_from_language : 'QEjM4u68pkXhfA7D',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 29,
			from_id : $client->peerUser(
				user_id : -3056633853334831169,
			),
			peer_id : $client->peerUser(
				user_id : -8076238226461244004,
			),
			saved_peer_id : $client->peerUser(
				user_id : -7901147761104684865,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 35,
				reply_to_peer_id : $client->peerUser(
					user_id : 6322428278214228370,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'UsQ13ybBvaNTKMZc',
					date : 35,
					channel_post : 6,
					post_author : 'tdxaq34eRJ0c1nQr',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 63,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'w0cRUaXLZQYrHxPj',
					saved_date : 74,
					psa_type : '9wWsISJFvCxy8Tai',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 14,
				quote_text : 'W72a3qopLHwRGPUs',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 16,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 16,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 81,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 24,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 58,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 9,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 47,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 95,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 11,
						language : 'Gsfij1nHDLvmwBR0',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 90,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 58,
						user_id : -8645646256536604325,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 15,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 58,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 80,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 87,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 90,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 87,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 20,
						document_id : 8932751263802508536,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 45,
					),
				),
				quote_offset : 32,
				todo_item_id : 91,
			),
			date : 15,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 18,
						reaction : $client->reactionEmpty(...),
						count : 52,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 52,
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
			ttl_period : 25,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 18,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 27,
			date : 24,
			peer : $client->peerUser(
				user_id : 751751401968330895,
			),
			title : 'CGp4mgXO8WsbRfSP',
			icon_color : 57,
			icon_emoji_id : -5393381784065385965,
			top_message : 85,
			read_inbox_max_id : 86,
			read_outbox_max_id : 66,
			unread_count : 19,
			unread_mentions_count : 8,
			unread_reactions_count : 50,
			from_id : $client->peerUser(
				user_id : -7859057332337871430,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 30,
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
				date : 25,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7891938400773285200,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7732447542282372328,
			title : 'IcjvQSrXybE5n39O',
			photo : $client->chatPhotoEmpty(),
			participants_count : 92,
			date : 65,
			version : 34,
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
				until_date : 61,
			),
		),
		$client->chatForbidden(
			id : -5151907610801901911,
			title : 'WPTZFb1HCEMQrU6l',
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
			id : 7304051097533500975,
			access_hash : 1101989961233492982,
			title : 'MSuZyD7aOrThHzxL',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 23,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2ko4ACI3e6EwSHOg',
					reason : 'OLtsTJEQo5bhpXxe',
					text : 'DCfFQmti6wzW4kJe',
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
				until_date : 58,
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
				until_date : 5,
			),
			participants_count : 77,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 31,
			),
			color : $client->peerColor(
				color : 89,
				background_emoji_id : -6260080660754920731,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : -3730237543098702991,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 61,
			subscription_until_date : 84,
			bot_verification_icon : 8090491150216376982,
			send_paid_messages_stars : 3487185418124957025,
			linked_monoforum_id : -2522961455572990183,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 6487397144764396716,
			access_hash : 3315137103794832811,
			title : 'M1L4oC3curVhdqUy',
			until_date : 52,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8229395113868376027,
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
			id : -5689211703593143506,
			access_hash : 6712763807294603397,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 72,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZRUFXcQHk0KSysAz',
					reason : 'ZQg2oL3x8GvqHlme',
					text : 'o76Fzjr9IpUNXx2i',
				),
			),
			bot_inline_placeholder : 'q7ePOBCNT4Qfw08u',
			lang_code : 'hOvT7NCofbEGHnXS',
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
				max_id : 9,
			),
			color : $client->peerColor(
				color : 27,
				background_emoji_id : 683425944619614120,
			),
			profile_color : $client->peerColor(
				color : 72,
				background_emoji_id : -7629233057188824798,
			),
			bot_active_users : 20,
			bot_verification_icon : -1491461034862299712,
			send_paid_messages_stars : -3134109736726454028,
		),
	),
);
```