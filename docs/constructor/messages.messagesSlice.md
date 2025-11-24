# messages.messagesSlice

**Description** : *Incomplete list of messages and auxiliary data*

**Layer** : 218

```tl
messages.messagesSlice#5f206716 flags:# inexact:flags.1?true count:int next_rate:flags.0?int offset_id_offset:flags.2?int search_flood:flags.3?SearchPostsFlood messages:Vector<Message> topics:Vector<ForumTopic> chats:Vector<Chat> users:Vector<User> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **inexact** | [`flags.1?true`](type/true) | If set, indicates that the results may be inexact |
| <mark>count</mark> | [`int`](type/int) | Total number of messages in the list |
| **next_rate** | [`flags.0?int`](type/int) | Rate to use in the offset_rate parameter in the next call to messages.searchGlobal |
| **offset_id_offset** | [`flags.2?int`](type/int) | Indicates the absolute position of messages[0] within the total result set with count count. This is useful, for example, if the result was fetched using offset_id, and we need to display a progress/total counter (like photo 134 of 200, for all media in a chat, we could simply use photo ${offset_id_offset} of ${count}) |
| **search_flood** | [`flags.3?SearchPostsFlood`](type/SearchPostsFlood) | For global post searches », the remaining amount of free searches, here query_is_free is related to the current call only, not to the next paginated call, and all subsequent pagination calls will always be free |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | List of messages |
| <mark>topics</mark> | [`Vector<ForumTopic>`](type/ForumTopic) | NOTHING |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in messages |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in messages and chats |

---

## Type

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->messagesSlice(
	inexact : true,
	count : 23,
	next_rate : 70,
	offset_id_offset : 0,
	search_flood : $client->searchPostsFlood(
		query_is_free : true,
		total_daily : 61,
		remains : 73,
		wait_till : 19,
		stars_amount : 1902266056557626519,
	),
	messages : array(
		$client->messageEmpty(
			id : 23,
			peer_id : $client->peerUser(
				user_id : -4107749915538365265,
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
			id : 88,
			from_id : $client->peerUser(
				user_id : -6411052322812876687,
			),
			from_boosts_applied : 6,
			peer_id : $client->peerUser(
				user_id : 2278804315375833946,
			),
			saved_peer_id : $client->peerUser(
				user_id : 2551630098579497328,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 505111894028382080,
				),
				from_name : 'AZQM5NygzDtcLeEj',
				date : 20,
				channel_post : 79,
				post_author : 'wF0Us6o9QYfTgXdt',
				saved_from_peer : $client->peerUser(
					user_id : -4782975472912912673,
				),
				saved_from_msg_id : 97,
				saved_from_id : $client->peerUser(
					user_id : 9174647765569362220,
				),
				saved_from_name : 'xO3YzjBAnXlQLaPi',
				saved_date : 14,
				psa_type : 'kF5IbyqdKR13hvB2',
			),
			via_bot_id : -286170402231158635,
			via_business_bot_id : -4872236368201391757,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 3,
				reply_to_peer_id : $client->peerUser(
					user_id : 6912000908790960278,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '3ZLNFcl7rCIob4AS',
					date : 33,
					channel_post : 34,
					post_author : 'wSeazk1fvbjT5VpH',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 36,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'mwsLNFAiv3teD4nb',
					saved_date : 21,
					psa_type : 'gXOf2TZP1t4WcdYC',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 53,
				quote_text : 'D82veUA7E49LbR6x',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 79,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 71,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 100,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 19,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 47,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 22,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 71,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 31,
						language : 'AEXu8GOnT4omwLJj',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 77,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 77,
						user_id : -3803952316843850032,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 5,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 82,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 59,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 68,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 54,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 72,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 18,
						document_id : 7088737248140257868,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 53,
					),
				),
				quote_offset : 76,
				todo_item_id : 42,
			),
			date : 66,
			message : 'V4nWZyij5eD0uwTv',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 65,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 77,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 64,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 28,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 46,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 12,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 91,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 47,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 77,
					language : 'VdNuF0oxMgqDm1vz',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 5,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 11,
					user_id : -8997057740937955897,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 90,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 93,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 82,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 33,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 73,
					document_id : -853648933930116830,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 98,
				),
			),
			views : 35,
			forwards : 39,
			replies : $client->messageReplies(
				comments : true,
				replies : 56,
				replies_pts : 45,
				recent_repliers : array(
					$client->peerUser(
						user_id : -8440578294132876768,
					),
					$client->peerChat(
						chat_id : 7043295547644733876,
					),
					$client->peerChannel(
						channel_id : 1980140038532815183,
					),
				),
				channel_id : -7743901417784867080,
				max_id : 75,
				read_max_id : 76,
			),
			edit_date : 53,
			post_author : 'NJLRm3YQIdOpgzBt',
			grouped_id : -2423036727826439646,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 93,
						reaction : $client->reactionEmpty(...),
						count : 84,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 25,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 78,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'X1ZaTBYNos0Iiwrj',
					reason : 'IetxrKpuXYWUg4Ss',
					text : '0K9q8WnDXhCakoYO',
				),
			),
			ttl_period : 27,
			quick_reply_shortcut_id : 97,
			effect : -784963289778092739,
			factcheck : $client->factCheck(
				need_check : true,
				country : '9JyhqMQHEK8pBXiR',
				text : $client->textWithEntities(
					text : 'hSMwQzNZPBW9CeAy',
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
			report_delivery_until_date : 0,
			paid_message_stars : 2498049800338454540,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -7950065007859582503,
					nanos : 46,
				),
				schedule_date : 51,
			),
			schedule_repeat_period : 49,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 68,
			from_id : $client->peerUser(
				user_id : -3464415813071519952,
			),
			peer_id : $client->peerUser(
				user_id : -1253660251759765200,
			),
			saved_peer_id : $client->peerUser(
				user_id : 1211827429208395424,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 29,
				reply_to_peer_id : $client->peerUser(
					user_id : -582364778658435207,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'NWpHAPVOLYxmnEDl',
					date : 56,
					channel_post : 32,
					post_author : 'lger16GZVE59HT3K',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 23,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'WGFiEOvpMbrewRUm',
					saved_date : 83,
					psa_type : '6KW8ZbaxcqRN0vCu',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 11,
				quote_text : 'WVXAY0CPUiok49pv',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 86,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 34,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 52,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 78,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 49,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 88,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 5,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 67,
						language : 'INmO2PKfWFiV08lA',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 15,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 50,
						user_id : -2124555199159737825,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 57,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 79,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 26,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 20,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 72,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 65,
						document_id : 3452271261348890570,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 84,
					),
				),
				quote_offset : 30,
				todo_item_id : 29,
			),
			date : 61,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 74,
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
						date : 17,
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
			ttl_period : 91,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 80,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 20,
			date : 73,
			peer : $client->peerUser(
				user_id : 1333466158298942364,
			),
			title : 'fr2apgJqcdbW8RKs',
			icon_color : 36,
			icon_emoji_id : -2617235708251772616,
			top_message : 2,
			read_inbox_max_id : 31,
			read_outbox_max_id : 14,
			unread_count : 23,
			unread_mentions_count : 85,
			unread_reactions_count : 22,
			from_id : $client->peerUser(
				user_id : 6921666737173346711,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 8,
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
				date : 26,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6248891563600508380,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7546747065748172438,
			title : 'Gsz3jkcL21xIqpEw',
			photo : $client->chatPhotoEmpty(),
			participants_count : 25,
			date : 100,
			version : 9,
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
				until_date : 9,
			),
		),
		$client->chatForbidden(
			id : 1101442881180320746,
			title : 'jM5169Zy8JnYXvpI',
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
			id : -3530533829067270999,
			access_hash : 4958474647539703024,
			title : 'cjypqxYvoi13gnC0',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7ZMgn1kdL9FGpEm6',
					reason : 'z2mV01IDchB74Hvn',
					text : '0TdrNhqCVMi1LGmA',
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
				until_date : 71,
			),
			participants_count : 39,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 64,
			),
			color : $client->peerColor(
				color : 9,
				background_emoji_id : 529222310420295582,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : -4621889429921027280,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 55,
			subscription_until_date : 1,
			bot_verification_icon : 462800646048032710,
			send_paid_messages_stars : 2705506256360130492,
			linked_monoforum_id : -285764301129836535,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8613617483170053899,
			access_hash : -8564193437896631371,
			title : '5CkiVEgfzXYIhbZx',
			until_date : 1,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6631495534435625780,
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
			id : -4312573082645507681,
			access_hash : -362816319599793322,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 26,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dA5cJfsjDN61Fbor',
					reason : 'do8YLFCy1Ok2EV9l',
					text : 'cHbxVjE6Zi1CrOhJ',
				),
			),
			bot_inline_placeholder : 'kUljMYyVqKRbX70L',
			lang_code : 'iWtIyQlRG95dPe6s',
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
				max_id : 12,
			),
			color : $client->peerColor(
				color : 84,
				background_emoji_id : 5062011795947188878,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : 8714330339387162496,
			),
			bot_active_users : 1,
			bot_verification_icon : 2666818810228335313,
			send_paid_messages_stars : 5556189998052542972,
		),
	),
);
```