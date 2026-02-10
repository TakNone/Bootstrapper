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
	count : 86,
	min_date : 75,
	min_msg_id : 75,
	offset_id_offset : 0,
	periods : array(
		$client->searchResultsCalendarPeriod(
			date : 34,
			min_msg_id : 58,
			max_msg_id : 84,
			count : 42,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 39,
			peer_id : $client->peerUser(
				user_id : -2330430291721748527,
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
			id : 49,
			from_id : $client->peerUser(
				user_id : 3953807619456387569,
			),
			from_boosts_applied : 58,
			peer_id : $client->peerUser(
				user_id : 5228129854149664023,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8573828603882378664,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 1781742682138863443,
				),
				from_name : 's5QonMXzZeHAbjU4',
				date : 2,
				channel_post : 91,
				post_author : '861mwrDuERdA7hXf',
				saved_from_peer : $client->peerUser(
					user_id : 8392215185758139428,
				),
				saved_from_msg_id : 9,
				saved_from_id : $client->peerUser(
					user_id : 7642106836658059808,
				),
				saved_from_name : 'zPINWUk3BFEiedvu',
				saved_date : 87,
				psa_type : '9Tr2AIyxSCYdcvGg',
			),
			via_bot_id : 8225774204187862238,
			via_business_bot_id : 529585230768110251,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 72,
				reply_to_peer_id : $client->peerUser(
					user_id : -5156016633479585346,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '1cTSasqrifGKVM6Y',
					date : 55,
					channel_post : 0,
					post_author : 'ekduZybVR5f93x1E',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 51,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '7dWvmKGCIe9kwyMl',
					saved_date : 40,
					psa_type : 'O4a9M5KyiGSulPIX',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 40,
				quote_text : 'Auswehk6c7oNr3py',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 8,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 56,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 30,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 36,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 81,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 1,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 29,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 15,
						language : 'YN2LSgTzjoZh5l1M',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 62,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 70,
						user_id : -717585642569486254,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 19,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 2,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 2,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 27,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 24,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 6,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 87,
						document_id : 1854492052834392232,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 39,
					),
				),
				quote_offset : 21,
				todo_item_id : 44,
			),
			date : 38,
			message : 'pteafsMi4L8OGD1y',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 70,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 0,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 91,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 90,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 38,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 16,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 89,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 8,
					language : '3dTuC2BGxybqzlLf',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 8,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 4,
					user_id : 7530034554869484864,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 98,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 88,
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
					length : 28,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 83,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 82,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 3,
					document_id : 2657131711441541257,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 1,
				),
			),
			views : 27,
			forwards : 23,
			replies : $client->messageReplies(
				comments : true,
				replies : 75,
				replies_pts : 62,
				recent_repliers : array(
					$client->peerUser(
						user_id : -3742523938121496647,
					),
					$client->peerChat(
						chat_id : 7526399722517739526,
					),
					$client->peerChannel(
						channel_id : 7984273573451019622,
					),
				),
				channel_id : -3263840695593462735,
				max_id : 34,
				read_max_id : 52,
			),
			edit_date : 99,
			post_author : 'OjsybxrhkvmKPMJ2',
			grouped_id : -9182127109071152102,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 19,
						reaction : $client->reactionEmpty(...),
						count : 36,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 12,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 100,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LhzR5gsJUZpq3EWo',
					reason : 'GgFv0cbMoQ1NDmeq',
					text : 'wWnhqJLDCivfTkHP',
				),
			),
			ttl_period : 74,
			quick_reply_shortcut_id : 90,
			effect : -8376126078440280516,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'ez9GYsTg13oNaMrp',
				text : $client->textWithEntities(
					text : 'lfvY457dqhFykseT',
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
			paid_message_stars : 6045485231151431883,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 901237024379778743,
					nanos : 29,
				),
				schedule_date : 50,
			),
			schedule_repeat_period : 93,
			summary_from_language : 'CVAJZHYdx74hz1ok',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 20,
			from_id : $client->peerUser(
				user_id : 761006377325415045,
			),
			peer_id : $client->peerUser(
				user_id : -8844955219773784930,
			),
			saved_peer_id : $client->peerUser(
				user_id : 2571000355942621061,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 10,
				reply_to_peer_id : $client->peerUser(
					user_id : -4789502100635384719,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'SBzLUoaVr9OXd4Kb',
					date : 75,
					channel_post : 52,
					post_author : '0Z3S4ImM9e6BixVg',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 82,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'QP4cOVURLyeHwsJl',
					saved_date : 19,
					psa_type : 'YyEQAHSWC036X7Oa',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 22,
				quote_text : 'rCWQlzmdjYhs56Kf',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 85,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 11,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 21,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 58,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 9,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 68,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 67,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 98,
						language : 'sSgfn4kWixF98CK0',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 78,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 44,
						user_id : -3389513600168979615,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 82,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 27,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 27,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 26,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 77,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 68,
						document_id : 7297029661693911385,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 21,
					),
				),
				quote_offset : 85,
				todo_item_id : 42,
			),
			date : 98,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 29,
						reaction : $client->reactionEmpty(...),
						count : 83,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 72,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 11,
					),
				),
			),
			ttl_period : 0,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5014107946086448684,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7883833992381088361,
			title : 'f5nCDJ9qHmlrwESo',
			photo : $client->chatPhotoEmpty(),
			participants_count : 84,
			date : 8,
			version : 59,
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
				until_date : 30,
			),
		),
		$client->chatForbidden(
			id : 6250339833298687579,
			title : 'v0J5f7oAShm4ijkH',
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
			id : -2252359496426640491,
			access_hash : 5599898327411027230,
			title : 'DMNliSJt6earRxFP',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 42,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KBjL4k5DZwI7Vdqh',
					reason : 'XGD6LzyO1ZdNjCS3',
					text : 'nIlpPhmRGZBJUeTK',
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
				until_date : 64,
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
			participants_count : 62,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 92,
			),
			color : $client->peerColor(
				color : 85,
				background_emoji_id : 2820602818743700473,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : -3118223786577744921,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 12,
			subscription_until_date : 9,
			bot_verification_icon : -7330408079349320157,
			send_paid_messages_stars : -6132853187059891886,
			linked_monoforum_id : 6875612382472765566,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -6273892546534252226,
			access_hash : 4444390780453565790,
			title : 'pyhDvQtw7omC0x13',
			until_date : 75,
		),
	),
	users : array(
		$client->userEmpty(
			id : -9022272860512724923,
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
			id : -507389348028145852,
			access_hash : -3858331459779400564,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 29,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'iN8tIrXSbe0ahx9M',
					reason : '32SuaUFezf01XjmV',
					text : 'ZObwgpDloG1J5UH9',
				),
			),
			bot_inline_placeholder : 'laIAeJ768vf3jnoZ',
			lang_code : 'DaUeRT8iQ0jn7rdw',
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
				max_id : 6,
			),
			color : $client->peerColor(
				color : 61,
				background_emoji_id : -8279827022620010609,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : -6891511530720786325,
			),
			bot_active_users : 28,
			bot_verification_icon : 340210304069628284,
			send_paid_messages_stars : 8841884649498121486,
		),
	),
);
```