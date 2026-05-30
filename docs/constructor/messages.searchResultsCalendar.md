# messages.searchResultsCalendar

**Description** : *Information about found messages sent on a specific day*

**Layer** : 222

```tl
messages.searchResultsCalendar#147ee23c flags:# inexact:flags.0?true count:int min_date:int min_msg_id:int offset_id_offset:flags.1?int periods:Vector<SearchResultsCalendarPeriod> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.SearchResultsCalendar;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **inexact** | [`flags.0?true`](type/true) | If set, indicates that the results may be inexact |
| <mark>count</mark> | [`int`](type/int) | Total number of results matching query |
| <mark>min_date</mark> | [`int`](type/int) | Starting timestamp of attached messages |
| <mark>min_msg_id</mark> | [`int`](type/int) | Ending timestamp of attached messages |
| **offset_id_offset** | [`flags.1?int`](type/int) | Indicates the absolute position of messages[0] within the total result set with count count. This is useful, for example, if we need to display a progress/total counter (like photo 134 of 200, for all media in a chat, we could simply use photo ${offset_id_offset} of ${count} |
| <mark>periods</mark> | [`Vector<SearchResultsCalendarPeriod>`](type/SearchResultsCalendarPeriod) | Used to split the messages by days: multiple SearchResultsCalendarPeriod constructors are returned, each containing information about the first, last and total number of messages matching the filter that were sent on a specific day.  This information can be easily used to split the returned messages by day |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | Messages |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.SearchResultsCalendar](type/messages.SearchResultsCalendar)

---

## Example

```php
$messagesSearchResultsCalendar = $client->messages->searchResultsCalendar(
	inexact : true,
	count : 2,
	min_date : 88,
	min_msg_id : 57,
	offset_id_offset : 0,
	periods : array(
		$client->searchResultsCalendarPeriod(
			date : 41,
			min_msg_id : 41,
			max_msg_id : 100,
			count : 37,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 65,
			peer_id : $client->peerUser(
				user_id : 4141898292511394094,
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
			id : 45,
			from_id : $client->peerUser(
				user_id : 8084867428303561938,
			),
			from_boosts_applied : 82,
			peer_id : $client->peerUser(
				user_id : 5359596194719610323,
			),
			saved_peer_id : $client->peerUser(
				user_id : -9060206011948887506,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -4819874285729189962,
				),
				from_name : 'NYv3dqp6zlw1foZW',
				date : 64,
				channel_post : 47,
				post_author : 'vOmxn4aA01SKdbtC',
				saved_from_peer : $client->peerUser(
					user_id : -319946485672976231,
				),
				saved_from_msg_id : 16,
				saved_from_id : $client->peerUser(
					user_id : 8967410337974747285,
				),
				saved_from_name : '8FzZgapdvJT3SCW6',
				saved_date : 18,
				psa_type : 'usLyCWFUNcPHVqA5',
			),
			via_bot_id : -117647420917152243,
			via_business_bot_id : 6103422511484959830,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 68,
				reply_to_peer_id : $client->peerUser(
					user_id : 1856231154234480726,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'euDYCcHw7pT2kXsz',
					date : 82,
					channel_post : 67,
					post_author : 'ebvB90DVuInQZLtd',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 90,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'Skxd6THQj80I7FuE',
					saved_date : 1,
					psa_type : 'MXwVZuJR9CPrU16E',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 86,
				quote_text : 'Dq32rzUNnf86pSAL',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 21,
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
						length : 58,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 9,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 75,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 40,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 95,
						language : 'RgbBEXyriZxfNKWO',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 8,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 84,
						user_id : 186693266374370497,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 6,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 92,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 15,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 69,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 47,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 8,
						document_id : 7701179078971458018,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 39,
					),
				),
				quote_offset : 31,
				todo_item_id : 94,
			),
			date : 51,
			message : 'k02MT6sfqznNxFag',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 72,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 48,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 37,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 48,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 27,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 68,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 91,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 73,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 57,
					language : 'tGWjaOA68QIUL3SV',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 77,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 98,
					user_id : 1332253982101877171,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 7,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 6,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 48,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 54,
					document_id : -4083338076463642508,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 55,
				),
			),
			views : 43,
			forwards : 97,
			replies : $client->messageReplies(
				comments : true,
				replies : 75,
				replies_pts : 58,
				recent_repliers : array(
					$client->peerUser(
						user_id : -2058946831548380248,
					),
					$client->peerChat(
						chat_id : -6616602332258486818,
					),
					$client->peerChannel(
						channel_id : -4593559502942937791,
					),
				),
				channel_id : 1473660364579467252,
				max_id : 72,
				read_max_id : 33,
			),
			edit_date : 41,
			post_author : 'So6Yr05yDcHPIbdQ',
			grouped_id : 4372276290472953249,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 56,
						reaction : $client->reactionEmpty(...),
						count : 86,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 20,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 64,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6Myrc4NHiuBw5lZD',
					reason : 'FLMQ1oDq2U0SkVeW',
					text : '7tzBYagqHJs3wGDj',
				),
			),
			ttl_period : 0,
			quick_reply_shortcut_id : 20,
			effect : 30569050375384104,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'bt2KQAcHgPkwhqxW',
				text : $client->textWithEntities(
					text : 'W9HFLZVo5XYSJAts',
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
			report_delivery_until_date : 7,
			paid_message_stars : -3152179419362289209,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 6827921111370652866,
					nanos : 8,
				),
				schedule_date : 54,
			),
			schedule_repeat_period : 6,
			summary_from_language : 'GiZDUKQ8cEarqxOf',
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
				user_id : -2812532268952544234,
			),
			peer_id : $client->peerUser(
				user_id : -5326907494133290556,
			),
			saved_peer_id : $client->peerUser(
				user_id : 28301985529716769,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 22,
				reply_to_peer_id : $client->peerUser(
					user_id : -7773527831603039350,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'gtGLx6reBPJTiSZm',
					date : 48,
					channel_post : 52,
					post_author : 'heXAZGU1Fmp0rVft',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 39,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'XsU8RI3nxe7LTyfq',
					saved_date : 16,
					psa_type : 'O9FWnY5symlKXRiB',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 45,
				quote_text : 'gtRMyOIUpQKeNj4z',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 95,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 56,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 83,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 60,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 40,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 2,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 53,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 53,
						language : 'foNTu0rCOSka4V8H',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 35,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 88,
						user_id : 1005909398536853321,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 80,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 99,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 67,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 21,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 0,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 55,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 61,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 99,
						document_id : 2898347799252316005,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 94,
					),
				),
				quote_offset : 87,
				todo_item_id : 83,
			),
			date : 83,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 47,
						reaction : $client->reactionEmpty(...),
						count : 86,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 77,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 31,
					),
				),
			),
			ttl_period : 2,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 1737523093442993075,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7986650349360567851,
			title : 'cHQh8fxXBVsro7UO',
			photo : $client->chatPhotoEmpty(),
			participants_count : 83,
			date : 74,
			version : 60,
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
				until_date : 32,
			),
		),
		$client->chatForbidden(
			id : 3569436361034954731,
			title : 'YgnZ7MGsPWUiIbTp',
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
			id : 4573124967906000076,
			access_hash : -5183413625162093269,
			title : '1vh3ZmHys9DgFXRU',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 48,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'uUaPpQ26b5Ydw8oc',
					reason : 'tC3MH2qnyBLONSis',
					text : 'EJRUH9m8lrIMZdzA',
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
				until_date : 63,
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
				until_date : 2,
			),
			participants_count : 44,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 75,
			),
			color : $client->peerColor(
				color : 57,
				background_emoji_id : -6264438807445264752,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : -1642854166130481764,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 100,
			subscription_until_date : 84,
			bot_verification_icon : 6798166380697439980,
			send_paid_messages_stars : 715621535190024139,
			linked_monoforum_id : 2653734871714523475,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 6061858643914459599,
			access_hash : 2659460170672923177,
			title : 'uSrzgelcyT0jMPGI',
			until_date : 36,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1026319538425551805,
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
			id : 1138716654567425843,
			access_hash : -7937646505259077014,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 5,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'E6d8bw1g0eX5Ynsh',
					reason : 'nJdY8hojFGyNMZH1',
					text : 'b1TdXji0ce8BxCft',
				),
			),
			bot_inline_placeholder : 'U98FNKX6v5rCfiAa',
			lang_code : 'qJFQT4PbSdA086Mh',
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
				max_id : 20,
			),
			color : $client->peerColor(
				color : 64,
				background_emoji_id : -2668622021472740455,
			),
			profile_color : $client->peerColor(
				color : 85,
				background_emoji_id : 8640228037685532148,
			),
			bot_active_users : 73,
			bot_verification_icon : -6656289728603514760,
			send_paid_messages_stars : -8088229570643096155,
		),
	),
);
```