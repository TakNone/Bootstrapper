# messages.channelMessages

**Description** : *Channel messages*

**Layer** : 218

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
	pts : 66,
	count : 10,
	offset_id_offset : 0,
	messages : array(
		$client->messageEmpty(
			id : 87,
			peer_id : $client->peerUser(
				user_id : 4680896960549962625,
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
			id : 83,
			from_id : $client->peerUser(
				user_id : -5660541945376747979,
			),
			from_boosts_applied : 59,
			peer_id : $client->peerUser(
				user_id : 7162789298329482183,
			),
			saved_peer_id : $client->peerUser(
				user_id : -612448939548644459,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -1865516420719835694,
				),
				from_name : '0h2su9ITzRl3PmF4',
				date : 96,
				channel_post : 67,
				post_author : 'Q7AEByWtPZLpHksb',
				saved_from_peer : $client->peerUser(
					user_id : 4894076037948472856,
				),
				saved_from_msg_id : 52,
				saved_from_id : $client->peerUser(
					user_id : 7006099611029785050,
				),
				saved_from_name : 'JFOMZr5EoGL9Shke',
				saved_date : 9,
				psa_type : 'qKtJ3nAN8s1GO6jv',
			),
			via_bot_id : 1699524121616511191,
			via_business_bot_id : 7684867242685378478,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 64,
				reply_to_peer_id : $client->peerUser(
					user_id : 4239279039892462318,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'ipMqtywF3xk0L8Bj',
					date : 45,
					channel_post : 34,
					post_author : 'SvcCt12riGVgnsmZ',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 75,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'RKI5h9NVpWcZ204C',
					saved_date : 96,
					psa_type : 'r1HS436PK8QDslyG',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 0,
				quote_text : 'ga3hWXqs6v1rMFwc',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 40,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 32,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 37,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 97,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 36,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 59,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 60,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 68,
						language : 'hbCLQYOro1inx5KF',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 91,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 1,
						user_id : -986561363337905670,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 51,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 7,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 40,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 85,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 71,
						document_id : -5668253797033797051,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 76,
					),
				),
				quote_offset : 92,
				todo_item_id : 6,
			),
			date : 100,
			message : '5ugY0Z1oMqxCstnO',
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
					length : 30,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 15,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 47,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 25,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 74,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 90,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 6,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 95,
					language : 'wJj7pESFDRqzV83g',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 65,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 5,
					user_id : -707763570014421283,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 42,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 15,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 24,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 9,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 93,
					document_id : 2523818586496871682,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 82,
				),
			),
			views : 100,
			forwards : 11,
			replies : $client->messageReplies(
				comments : true,
				replies : 24,
				replies_pts : 88,
				recent_repliers : array(
					$client->peerUser(
						user_id : 3592909528826501600,
					),
					$client->peerChat(
						chat_id : -5914970585008280203,
					),
					$client->peerChannel(
						channel_id : -3038769188378151863,
					),
				),
				channel_id : -8800669201068732794,
				max_id : 65,
				read_max_id : 47,
			),
			edit_date : 83,
			post_author : 'LspcyVAIH3wjGFZ0',
			grouped_id : -4148444300514758404,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 35,
						reaction : $client->reactionEmpty(...),
						count : 91,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 28,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 34,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dNovhqUcQlnV1wIE',
					reason : 'UShO1sHezq3WyBQl',
					text : 'ZWdFiQlavt7x05nc',
				),
			),
			ttl_period : 1,
			quick_reply_shortcut_id : 76,
			effect : 517377121876191224,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'wSlWiC0smh2PapF6',
				text : $client->textWithEntities(
					text : '52MFVHX3lh9Gn6gp',
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
			report_delivery_until_date : 64,
			paid_message_stars : 3431792496251922912,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -2462481694038771898,
					nanos : 39,
				),
				schedule_date : 75,
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
			id : 24,
			from_id : $client->peerUser(
				user_id : 1817575381222893567,
			),
			peer_id : $client->peerUser(
				user_id : -8300097778644009459,
			),
			saved_peer_id : $client->peerUser(
				user_id : -2773373336748533416,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 55,
				reply_to_peer_id : $client->peerUser(
					user_id : -1286676401787041569,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'dSEUVYH9l7XFOpnx',
					date : 42,
					channel_post : 78,
					post_author : '6zOTYWUNsh4kBuLj',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 82,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'GfaoUmdJWZIlHet5',
					saved_date : 18,
					psa_type : 'RnevKxolmZkgda8H',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 18,
				quote_text : 'wNWJgSKL2sa7A93R',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 24,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 83,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 5,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 69,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 4,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 60,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 71,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 57,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 91,
						language : 'qka6r5lR3E1JuUty',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 64,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 38,
						user_id : 5111702368171089968,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 18,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 63,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 16,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 16,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 48,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 55,
						document_id : 1680281580084261803,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 9,
					),
				),
				quote_offset : 18,
				todo_item_id : 15,
			),
			date : 41,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 81,
						reaction : $client->reactionEmpty(...),
						count : 29,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 7,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 80,
					),
				),
			),
			ttl_period : 11,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 49,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 12,
			date : 32,
			peer : $client->peerUser(
				user_id : -1495692387087665855,
			),
			title : 'DAEzuBoC8yXQS5jl',
			icon_color : 40,
			icon_emoji_id : 9217596683726250290,
			top_message : 57,
			read_inbox_max_id : 52,
			read_outbox_max_id : 71,
			unread_count : 92,
			unread_mentions_count : 41,
			unread_reactions_count : 79,
			from_id : $client->peerUser(
				user_id : -4316509223414521758,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 11,
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
				date : 99,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1034096220459132477,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -565817528980048081,
			title : 'y4lUf9Vc1e5PavSd',
			photo : $client->chatPhotoEmpty(),
			participants_count : 45,
			date : 84,
			version : 13,
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
				until_date : 57,
			),
		),
		$client->chatForbidden(
			id : 257808174607923771,
			title : 'OhpNRL0zkBXfa8Cn',
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
			id : -8967385741473115871,
			access_hash : 4914619934223401707,
			title : 'qloOATZ16JnXvtiF',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 97,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Lf3zNdk9AZ45t7HI',
					reason : 'kGEKNMv2Oj7IuqFZ',
					text : 'xeBmJclyzXkIf1sG',
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
				until_date : 81,
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
				max_id : 14,
			),
			color : $client->peerColor(
				color : 66,
				background_emoji_id : -4285721138293058207,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : -9073685411560966627,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 18,
			subscription_until_date : 21,
			bot_verification_icon : 5253892743595067693,
			send_paid_messages_stars : -1067740949674275130,
			linked_monoforum_id : 4865452957177284654,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6764774933679036647,
			access_hash : 9325190157385276,
			title : '5U2NfjG7PyDYRkcl',
			until_date : 5,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1233056065209843397,
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
			id : -1950904596299956521,
			access_hash : -1707529161948015304,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XUKHtEnBGQf4OVbI',
					reason : '4d0QvsyxwWiP8VgE',
					text : 'kALiRmjCWOIeg6a4',
				),
			),
			bot_inline_placeholder : 'rzc7DFMtY1Wy3eVJ',
			lang_code : 'X1tILNrk7U2AaFeB',
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
				max_id : 52,
			),
			color : $client->peerColor(
				color : 84,
				background_emoji_id : 14468253530268336,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -546020022551704920,
			),
			bot_active_users : 9,
			bot_verification_icon : 6541082187371627555,
			send_paid_messages_stars : 4943777794954312573,
		),
	),
);
```