# messages.searchResultsCalendar

**Description** : *Information about found messages sent on a specific day*

**Layer** : 218

```tl
messages.searchResultsCalendar#147ee23c flags:# inexact:flags.0?true count:int min_date:int min_msg_id:int offset_id_offset:flags.1?int periods:Vector<SearchResultsCalendarPeriod> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.SearchResultsCalendar;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 29,
	min_date : 12,
	min_msg_id : 37,
	offset_id_offset : 0,
	periods : array(
		$client->searchResultsCalendarPeriod(
			date : 28,
			min_msg_id : 79,
			max_msg_id : 56,
			count : 45,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 87,
			peer_id : $client->peerUser(
				user_id : 1453638230700929367,
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
			id : 39,
			from_id : $client->peerUser(
				user_id : -1072952983527298474,
			),
			from_boosts_applied : 20,
			peer_id : $client->peerUser(
				user_id : 4847431574999123332,
			),
			saved_peer_id : $client->peerUser(
				user_id : -177180639393934073,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 1639998127503948236,
				),
				from_name : 'Zc4ib9sqWtPwGlXv',
				date : 45,
				channel_post : 76,
				post_author : 'zlaFpTG1ePImud7E',
				saved_from_peer : $client->peerUser(
					user_id : -5273989662943019363,
				),
				saved_from_msg_id : 27,
				saved_from_id : $client->peerUser(
					user_id : -1039288061619028001,
				),
				saved_from_name : 'BaI1gX2dDNH0hp96',
				saved_date : 36,
				psa_type : 'DjcdHOzQ01fUiJy5',
			),
			via_bot_id : 4833415912254392487,
			via_business_bot_id : 4327914182252071077,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 49,
				reply_to_peer_id : $client->peerUser(
					user_id : -7588685262405889417,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '5M6nV7JhFlWIzgRk',
					date : 63,
					channel_post : 0,
					post_author : 'aQyK68k4Tp5AIuGZ',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 45,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'nmJHvtz2MVpoU8ye',
					saved_date : 65,
					psa_type : 'Us7CvXzGB2cTSAdP',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 12,
				quote_text : '8eP9y1iDQgkfFHRb',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 24,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 67,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 11,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 36,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 37,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 60,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 66,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 11,
						language : '3Ad9m7tRXkH4zVSy',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 0,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 94,
						user_id : -5500967856581467020,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 25,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 76,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 45,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 30,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 54,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 19,
						document_id : 9145249133216665638,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 100,
					),
				),
				quote_offset : 54,
				todo_item_id : 19,
			),
			date : 46,
			message : 'bAzg3wrdOKMTFe7V',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 16,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 41,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 61,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 10,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 99,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 93,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 71,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 76,
					language : 'wBxNfyoLOHVsp93a',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 72,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 34,
					user_id : -4040853946770612742,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 94,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 51,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 52,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 69,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 81,
					document_id : 6414060433948146123,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 100,
				),
			),
			views : 58,
			forwards : 22,
			replies : $client->messageReplies(
				comments : true,
				replies : 82,
				replies_pts : 11,
				recent_repliers : array(
					$client->peerUser(
						user_id : 8811621110721296758,
					),
					$client->peerChat(
						chat_id : -3382371650604774506,
					),
					$client->peerChannel(
						channel_id : 5851540798578947044,
					),
				),
				channel_id : -1483694360516698784,
				max_id : 99,
				read_max_id : 73,
			),
			edit_date : 4,
			post_author : 'q3xkpOCK6w4RWN8i',
			grouped_id : -3050106854123406594,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 50,
						reaction : $client->reactionEmpty(...),
						count : 39,
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
						count : 34,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fASumETx8MbHU9D2',
					reason : 'Xl3Vmok60LvWwiKG',
					text : 'LpcklU56wMd7yuGt',
				),
			),
			ttl_period : 20,
			quick_reply_shortcut_id : 4,
			effect : 3431735351094074582,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'V7vJQr3pcfqWIgaN',
				text : $client->textWithEntities(
					text : 'B3PW2bHVGRi7uNrC',
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
			paid_message_stars : -7218484643167876064,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -7360258182189215904,
					nanos : 80,
				),
				schedule_date : 25,
			),
			schedule_repeat_period : 88,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 63,
			from_id : $client->peerUser(
				user_id : -7493109207003174908,
			),
			peer_id : $client->peerUser(
				user_id : 3767007648266027040,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8331016025094322936,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 99,
				reply_to_peer_id : $client->peerUser(
					user_id : -9076994087098073651,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'FjS7tXcU2J19yCK6',
					date : 12,
					channel_post : 100,
					post_author : 'Z9iFkeN1J68QbGYU',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 97,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'zJNHulKIBLOC8cTf',
					saved_date : 19,
					psa_type : 'Glwb4d7Uop0xV8iR',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 95,
				quote_text : 'lqIsAGaYvjZ5pHcR',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 87,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 5,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 5,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 49,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 35,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 0,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 49,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 13,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 78,
						language : 'xbAyCLfM1lFe7acO',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 72,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 47,
						user_id : 2892471801768989464,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 39,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 59,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 96,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 31,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 14,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 95,
						document_id : -2493411816827871340,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 47,
					),
				),
				quote_offset : 69,
				todo_item_id : 65,
			),
			date : 50,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 65,
						reaction : $client->reactionEmpty(...),
						count : 76,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 29,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 0,
					),
				),
			),
			ttl_period : 61,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -8625785184375033371,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2702859376583493822,
			title : '6ObaNAvFDdGf7j0q',
			photo : $client->chatPhotoEmpty(),
			participants_count : 77,
			date : 51,
			version : 58,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 54,
			),
		),
		$client->chatForbidden(
			id : 5116236160725320430,
			title : 'a9ZeJPUyTW4wOCXN',
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
			id : 6160833903707249823,
			access_hash : 5158208355466559549,
			title : 'nJ0Aazuf6j9cEhpM',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HvcxC4I5hiWMuPkT',
					reason : 'jZXxgenFEVLC5yP3',
					text : 'iATDkdZN2JKzhUR7',
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
				until_date : 51,
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
				until_date : 27,
			),
			participants_count : 55,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 85,
			),
			color : $client->peerColor(
				color : 23,
				background_emoji_id : -5500470114625376086,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : -8991080888321086194,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 14,
			subscription_until_date : 86,
			bot_verification_icon : -8439235605471461165,
			send_paid_messages_stars : 1835271280584871678,
			linked_monoforum_id : 5274898130828688296,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 1334531645449513034,
			access_hash : 8244580995917125060,
			title : 'laGOcJPRp3eS04F5',
			until_date : 31,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2638051945182447245,
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
			id : 3411844272130226135,
			access_hash : 4801579471864655894,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'beZvHA32GLi8UOCx',
					reason : 'gbYvnPGsBOEqAyKa',
					text : 'mp8FYI3WCuKxdDVN',
				),
			),
			bot_inline_placeholder : 'VBXe5HKh0d7QiNtw',
			lang_code : 'X2ijv5YN8ZtdkfKz',
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
				max_id : 95,
			),
			color : $client->peerColor(
				color : 33,
				background_emoji_id : -7573466640957750640,
			),
			profile_color : $client->peerColor(
				color : 52,
				background_emoji_id : -1088063904453481843,
			),
			bot_active_users : 75,
			bot_verification_icon : -5689369242874130719,
			send_paid_messages_stars : 5172011206085716017,
		),
	),
);
```