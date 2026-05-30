# messages.searchResultsCalendar

**Description** : *Information about found messages sent on a specific day*

**Layer** : 225

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
	count : 41,
	min_date : 29,
	min_msg_id : 79,
	offset_id_offset : 0,
	periods : array(
		$client->searchResultsCalendarPeriod(
			date : 35,
			min_msg_id : 0,
			max_msg_id : 100,
			count : 4,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 46,
			peer_id : $client->peerUser(
				user_id : 317839022838535256,
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
			id : 46,
			from_id : $client->peerUser(
				user_id : 5003689989040157378,
			),
			from_boosts_applied : 3,
			from_rank : 'GnyhYMC1lkD6ZgIx',
			peer_id : $client->peerUser(
				user_id : -1753848053248983475,
			),
			saved_peer_id : $client->peerUser(
				user_id : 1471876292769566372,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -2518651302844783930,
				),
				from_name : 'jMGFqnv0B9utLbPY',
				date : 73,
				channel_post : 44,
				post_author : 'hHIDVT2wveuoUz5M',
				saved_from_peer : $client->peerUser(
					user_id : 539166792944405177,
				),
				saved_from_msg_id : 49,
				saved_from_id : $client->peerUser(
					user_id : -8227875229360120299,
				),
				saved_from_name : 'rRyIKFNwOJ2E5i9m',
				saved_date : 13,
				psa_type : 'lBLF7WXO5d0Eo3ys',
			),
			via_bot_id : -2891976739350324704,
			via_business_bot_id : -9118435469757531952,
			guestchat_via_from : $client->peerUser(
				user_id : -1470190098058818482,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 90,
				reply_to_peer_id : $client->peerUser(
					user_id : -2088054230989769059,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'qMftkhbIUjGAy5S0',
					date : 10,
					channel_post : 8,
					post_author : 'NwGMyT3haxvOjAU5',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 36,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'rigMLh61I9GsF5ne',
					saved_date : 96,
					psa_type : 'Ado6MRwpUP0XF4jE',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 54,
				quote_text : 'etXsFjarPJz39b5G',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 22,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 49,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 76,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 77,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 31,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 6,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 35,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 36,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 24,
						language : 'vAGmQoe2xdHiMbEC',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 97,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 41,
						user_id : -6863759760238942402,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 55,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 30,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 62,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 50,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 14,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 16,
						document_id : 4055153017467516959,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 16,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 35,
						date : 82,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 56,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 0,
						old_text : 'oQ3Ts8XZhrk6Yj7D',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 14,
					),
				),
				quote_offset : 77,
				todo_item_id : 14,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			date : 10,
			message : 'mU5fWdrVH2n7qbev',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 21,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 67,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 74,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 79,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 13,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 46,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 49,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 66,
					language : 'CYyNLvs6RiUPgzxS',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 51,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 38,
					user_id : 1434187307297847535,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 35,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 9,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 16,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 16,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 28,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 81,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 58,
					document_id : -7353568883093052848,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 66,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 67,
					date : 84,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 49,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 31,
					old_text : 'aZikKTvHNLE72Iwj',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 16,
				),
			),
			views : 5,
			forwards : 86,
			replies : $client->messageReplies(
				comments : true,
				replies : 65,
				replies_pts : 37,
				recent_repliers : array(
					$client->peerUser(
						user_id : 9108619532955868465,
					),
					$client->peerChat(
						chat_id : -2609283119404295004,
					),
					$client->peerChannel(
						channel_id : 3652637634999605108,
					),
				),
				channel_id : 1118667036834724370,
				max_id : 57,
				read_max_id : 73,
			),
			edit_date : 3,
			post_author : '9RuQETxMd4mNgsWX',
			grouped_id : 6168320204890789134,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 57,
						reaction : $client->reactionEmpty(...),
						count : 45,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 23,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 30,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tx2S5sRYLrlG4yzB',
					reason : 'D3FtyhRAZo6f1IPL',
					text : 'Bz63YcXmRLnNA8V2',
				),
			),
			ttl_period : 48,
			quick_reply_shortcut_id : 3,
			effect : -8964443119273477522,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'C1S5Z7QhvXbFgmEL',
				text : $client->textWithEntities(
					text : 'TRcHmSjz7t9Nf0hY',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				hash : 0,
			),
			report_delivery_until_date : 44,
			paid_message_stars : -2727387281671624215,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 3322167303116076610,
					nanos : 71,
				),
				schedule_date : 70,
			),
			schedule_repeat_period : 14,
			summary_from_language : 'iUFm3LnAa5p1q09c',
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
				user_id : 94872455533102543,
			),
			peer_id : $client->peerUser(
				user_id : -6971494483510503204,
			),
			saved_peer_id : $client->peerUser(
				user_id : -9097798090254070104,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 31,
				reply_to_peer_id : $client->peerUser(
					user_id : -7795044427221833540,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'snQP1MqLBN3dj6Du',
					date : 75,
					channel_post : 27,
					post_author : 'Ebs6eSHVWhnA2tXk',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 67,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'yIEC4kpm5Kb3rdNe',
					saved_date : 67,
					psa_type : 'Cu9n4glrAwHMm51J',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 15,
				quote_text : 'tSPrWa18okFGsHeK',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 59,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 25,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 35,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 7,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 31,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 32,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 78,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 22,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 69,
						language : '1ZmeO4wvV79jrMCx',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 87,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 44,
						user_id : -7415927079021358057,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 23,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 81,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 53,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 51,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 98,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 54,
						document_id : 8439876985290721594,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 59,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 20,
						date : 64,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 95,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 52,
						old_text : 'ZjJ1oQUv25pMcRTw',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 4,
					),
				),
				quote_offset : 54,
				todo_item_id : 78,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			date : 69,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 38,
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
						date : 100,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 53,
					),
				),
			),
			ttl_period : 50,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2178872689494188279,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4921228143745314807,
			title : 'smqg43I8f9ekdVHz',
			photo : $client->chatPhotoEmpty(),
			participants_count : 13,
			date : 89,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 85,
			),
		),
		$client->chatForbidden(
			id : -4827217522780554356,
			title : 'd7nKRcfUlVAD8YMQ',
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
			id : -4645803708511547019,
			access_hash : 3917876941425142765,
			title : 'W13Nm9isGVIq80RM',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'f8ZdaGIbxTRc7BtJ',
					reason : '4sEALYKuXgaUhSGc',
					text : 'sfnSahd7tlomCgwq',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 85,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 100,
			),
			participants_count : 35,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 57,
			),
			color : $client->peerColor(
				color : 71,
				background_emoji_id : 1815423151905978621,
			),
			profile_color : $client->peerColor(
				color : 3,
				background_emoji_id : -2803038686201906560,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 3,
			subscription_until_date : 61,
			bot_verification_icon : -3392713031856354956,
			send_paid_messages_stars : 2805921262043210542,
			linked_monoforum_id : 4017309205970392658,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 4266720080013665192,
			access_hash : 7539207500342684809,
			title : 'RnCifjPQ9c4w2q8m',
			until_date : 55,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5123701535280129680,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			id : 9214414570130253254,
			access_hash : -7819413537220913159,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 13,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'y5sRbk2BdXn90NxF',
					reason : 'MBd9fXvhCNzcWn48',
					text : 'CSAoTsRLWuh49n01',
				),
			),
			bot_inline_placeholder : 'bUhECgeVcTGQP8kO',
			lang_code : 'XncjLzRH1qS7xgfI',
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
				max_id : 72,
			),
			color : $client->peerColor(
				color : 60,
				background_emoji_id : 3205141004585498789,
			),
			profile_color : $client->peerColor(
				color : 91,
				background_emoji_id : -1174240299409448981,
			),
			bot_active_users : 6,
			bot_verification_icon : -6334305398066344919,
			send_paid_messages_stars : 1684646918917780450,
		),
	),
);
```