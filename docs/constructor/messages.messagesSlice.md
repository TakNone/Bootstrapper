# messages.messagesSlice

**Description** : *Incomplete list of messages and auxiliary data*

**Layer** : 222

```tl
messages.messagesSlice#5f206716 flags:# inexact:flags.1?true count:int next_rate:flags.0?int offset_id_offset:flags.2?int search_flood:flags.3?SearchPostsFlood messages:Vector<Message> topics:Vector<ForumTopic> chats:Vector<Chat> users:Vector<User> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 75,
	next_rate : 51,
	offset_id_offset : 0,
	search_flood : $client->searchPostsFlood(
		query_is_free : true,
		total_daily : 51,
		remains : 90,
		wait_till : 46,
		stars_amount : 129738777901895431,
	),
	messages : array(
		$client->messageEmpty(
			id : 69,
			peer_id : $client->peerUser(
				user_id : -6977606843295129688,
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
			id : 75,
			from_id : $client->peerUser(
				user_id : -1633047443337674165,
			),
			from_boosts_applied : 8,
			peer_id : $client->peerUser(
				user_id : -4766151766790656199,
			),
			saved_peer_id : $client->peerUser(
				user_id : -5820810752490876888,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -7000445469502917928,
				),
				from_name : 'EbBQHvyKanpq3L0i',
				date : 56,
				channel_post : 84,
				post_author : '1SwUVGqulo80KmiC',
				saved_from_peer : $client->peerUser(
					user_id : -2503335712880221464,
				),
				saved_from_msg_id : 94,
				saved_from_id : $client->peerUser(
					user_id : -6996218216725855488,
				),
				saved_from_name : 'GQqSTPxEJONfemLv',
				saved_date : 100,
				psa_type : 'H92hO73VCrXAwpua',
			),
			via_bot_id : -5749602507274175742,
			via_business_bot_id : -79544911240204939,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 10,
				reply_to_peer_id : $client->peerUser(
					user_id : 1502686509003005899,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '8ZxuMsKajiTvyQ35',
					date : 52,
					channel_post : 12,
					post_author : 'V6EUNdPYyHC7M9gR',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 51,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'BqgPuMaRsFUlEctz',
					saved_date : 21,
					psa_type : 'cLrCNG0tORMwJpbj',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 73,
				quote_text : 'F7H5aL6OhCiqPXp8',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 66,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 89,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 86,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 46,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 82,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 2,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 62,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 95,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 23,
						language : 'vsNE5rU3gkSuOZXQ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 29,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 35,
						user_id : 2889773705575016873,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 56,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 26,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 15,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 31,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 50,
						document_id : 5145232105253109952,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 92,
					),
				),
				quote_offset : 25,
				todo_item_id : 14,
			),
			date : 95,
			message : 'YrsAHJOb8Ct0SzFD',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 7,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 99,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 19,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 11,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 6,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 39,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 35,
					language : 'ypLM7EZ1WiaP9KUS',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 38,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 19,
					user_id : 2482563653646590612,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 3,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 18,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 37,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 63,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 24,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 31,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 29,
					document_id : 727112367769703801,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 0,
				),
			),
			views : 100,
			forwards : 37,
			replies : $client->messageReplies(
				comments : true,
				replies : 42,
				replies_pts : 97,
				recent_repliers : array(
					$client->peerUser(
						user_id : -6451819156422983985,
					),
					$client->peerChat(
						chat_id : -7643128794228769847,
					),
					$client->peerChannel(
						channel_id : 2808435177747481419,
					),
				),
				channel_id : 370099901914730041,
				max_id : 19,
				read_max_id : 95,
			),
			edit_date : 16,
			post_author : '1zJ0BPdtk4reb8Y6',
			grouped_id : 4577709982793007372,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 73,
						reaction : $client->reactionEmpty(...),
						count : 3,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 56,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 28,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'phetNuy1MmEJgiZK',
					reason : 'c1CYETMJAD3SbFtk',
					text : 'g4J1j9DOpkZNY0bs',
				),
			),
			ttl_period : 64,
			quick_reply_shortcut_id : 87,
			effect : -350075125957543359,
			factcheck : $client->factCheck(
				need_check : true,
				country : '9XV5dSDNgx3TZ4hr',
				text : $client->textWithEntities(
					text : 'XoQ2vIGfuKtg7qU0',
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
			report_delivery_until_date : 13,
			paid_message_stars : 693502263324141199,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -6275910341543422380,
					nanos : 66,
				),
				schedule_date : 56,
			),
			schedule_repeat_period : 1,
			summary_from_language : 'Cmk1ljzDXychJE8V',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 12,
			from_id : $client->peerUser(
				user_id : -2627566720021233088,
			),
			peer_id : $client->peerUser(
				user_id : -3826840197131056336,
			),
			saved_peer_id : $client->peerUser(
				user_id : 3725769632615905832,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 50,
				reply_to_peer_id : $client->peerUser(
					user_id : -3236483142316933183,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'oILrWg85n4zUwPmd',
					date : 99,
					channel_post : 84,
					post_author : 'TgoNlUkS3F15cxuD',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 20,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'roxGNpSEUgHvOF9Q',
					saved_date : 73,
					psa_type : 'UL6KiepHoMR5Vjch',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 92,
				quote_text : 'Jals18IALi6MgrCD',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 73,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 68,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 21,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 11,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 96,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 28,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 37,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 69,
						language : 'ZkAsfDQVv2tXBeH6',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 45,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 61,
						user_id : -1780167770914318044,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 21,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 6,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 25,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 46,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 20,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 9,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 31,
						document_id : 8325400199224210835,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 64,
					),
				),
				quote_offset : 55,
				todo_item_id : 68,
			),
			date : 54,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 84,
						reaction : $client->reactionEmpty(...),
						count : 62,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 80,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 6,
					),
				),
			),
			ttl_period : 50,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 71,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 25,
			date : 97,
			peer : $client->peerUser(
				user_id : 8462738444172460884,
			),
			title : 'PrlLcUpF0ysISwTm',
			icon_color : 21,
			icon_emoji_id : 633717831640833389,
			top_message : 68,
			read_inbox_max_id : 99,
			read_outbox_max_id : 5,
			unread_count : 32,
			unread_mentions_count : 19,
			unread_reactions_count : 36,
			from_id : $client->peerUser(
				user_id : 3028257204007095474,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 67,
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
				date : 44,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2324015646242277411,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 698786461238347111,
			title : 'a6eyWcdFHKE05uLA',
			photo : $client->chatPhotoEmpty(),
			participants_count : 29,
			date : 63,
			version : 33,
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
				until_date : 22,
			),
		),
		$client->chatForbidden(
			id : -3246171252241570284,
			title : 'xrg7OS4P5sbw6QZp',
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
			id : -6111869725561040034,
			access_hash : 134188484072644280,
			title : 'EvN9O5h4LCsgpVQP',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 7,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tQPKb1yxGSjMvTal',
					reason : 'MhV7vzlYTE0pJsOk',
					text : 'isx3m7V59TgaD6Zk',
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
				until_date : 72,
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
				until_date : 36,
			),
			participants_count : 86,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 86,
			),
			color : $client->peerColor(
				color : 18,
				background_emoji_id : 1807056722534856748,
			),
			profile_color : $client->peerColor(
				color : 97,
				background_emoji_id : -2525970699708182179,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 65,
			subscription_until_date : 6,
			bot_verification_icon : 1481134113414106884,
			send_paid_messages_stars : -7230158261184392899,
			linked_monoforum_id : -5395306271980886427,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 8886321335959770299,
			access_hash : 2645955641512079390,
			title : 'IEJk7dBoDsgLHCFG',
			until_date : 3,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5665301791550998972,
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
			id : 1634040143953518267,
			access_hash : -3260558824804581121,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pLTFBS2aKC3lR4nW',
					reason : '7Ex9HdVvgIGfFKZ4',
					text : '9xX2Kd7ufoJ54ZkN',
				),
			),
			bot_inline_placeholder : 'NQI6HRzBrxj38wLt',
			lang_code : 'jLYrt3qkANv1S7yg',
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
				max_id : 46,
			),
			color : $client->peerColor(
				color : 93,
				background_emoji_id : -4281701406502638677,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : 1004304686476075249,
			),
			bot_active_users : 77,
			bot_verification_icon : 4694444316950370501,
			send_paid_messages_stars : 232939668168862065,
		),
	),
);
```