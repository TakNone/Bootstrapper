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
	count : 3,
	min_date : 50,
	min_msg_id : 31,
	offset_id_offset : 0,
	periods : array(
		$client->searchResultsCalendarPeriod(
			date : 94,
			min_msg_id : 10,
			max_msg_id : 11,
			count : 5,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 72,
			peer_id : $client->peerUser(
				user_id : 4069674123115396118,
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
			id : 24,
			from_id : $client->peerUser(
				user_id : 1403920289835791421,
			),
			from_boosts_applied : 6,
			peer_id : $client->peerUser(
				user_id : 4435112125108002789,
			),
			saved_peer_id : $client->peerUser(
				user_id : 2873473693408617623,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -7393235989814447661,
				),
				from_name : 'De95HN06LsK3gwbq',
				date : 27,
				channel_post : 84,
				post_author : 'Tny6RSvaYOc3LGK1',
				saved_from_peer : $client->peerUser(
					user_id : -8810103962751243968,
				),
				saved_from_msg_id : 32,
				saved_from_id : $client->peerUser(
					user_id : 2150173109716073502,
				),
				saved_from_name : '5gqop21vOV6yIjzb',
				saved_date : 43,
				psa_type : 'KriSRngNIvJcPCas',
			),
			via_bot_id : -874250723414368586,
			via_business_bot_id : 3476128300093013448,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 61,
				reply_to_peer_id : $client->peerUser(
					user_id : 1609292627423932201,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'TShV4zxvf7OoXatZ',
					date : 97,
					channel_post : 43,
					post_author : 'OBGlgiz0h624kacD',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 61,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 's0pvm5FnqCzZ7AE6',
					saved_date : 26,
					psa_type : 'jp3NKkOx4JZvc5Lg',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 30,
				quote_text : 'NJLCpcsAr4FWmbEk',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 51,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 84,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 26,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 78,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 78,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 61,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 40,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 69,
						language : 'C3orTczPFf0gUSDh',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 18,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 14,
						user_id : -6753198982602137419,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 76,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 32,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 4,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 39,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 90,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 87,
						document_id : -6014734796641563729,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 65,
					),
				),
				quote_offset : 51,
				todo_item_id : 2,
			),
			date : 33,
			message : 'HmRD8xht7dYUrj4Q',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 12,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 63,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 48,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 35,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 90,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 97,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 81,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 23,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 86,
					language : 'P5LFS4AdIvVanTJz',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 71,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : -232847237606141819,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 70,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 16,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 37,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 0,
					document_id : -7167973181407910371,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 84,
				),
			),
			views : 28,
			forwards : 10,
			replies : $client->messageReplies(
				comments : true,
				replies : 14,
				replies_pts : 25,
				recent_repliers : array(
					$client->peerUser(
						user_id : 2028871284080779852,
					),
					$client->peerChat(
						chat_id : -8271548368030962446,
					),
					$client->peerChannel(
						channel_id : -6458476048891946981,
					),
				),
				channel_id : 6828874468316306232,
				max_id : 98,
				read_max_id : 22,
			),
			edit_date : 9,
			post_author : 'LqdeD4YCliAhEpRk',
			grouped_id : -6330885277821051526,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 95,
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
						date : 50,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 49,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0D6WA5sRga934tji',
					reason : 'XpxuJld5CjoBNnMz',
					text : '7wPTXu38glD964vY',
				),
			),
			ttl_period : 69,
			quick_reply_shortcut_id : 52,
			effect : 479007056973202513,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'uypkxbSANBiL86K2',
				text : $client->textWithEntities(
					text : 'CmpG0vlPZUJ3MBer',
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
			report_delivery_until_date : 41,
			paid_message_stars : -73607105675711105,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 4329574181826270503,
					nanos : 17,
				),
				schedule_date : 95,
			),
			schedule_repeat_period : 43,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 96,
			from_id : $client->peerUser(
				user_id : -4345720401124999757,
			),
			peer_id : $client->peerUser(
				user_id : 4135807907697760602,
			),
			saved_peer_id : $client->peerUser(
				user_id : 5165437412712931775,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 90,
				reply_to_peer_id : $client->peerUser(
					user_id : -6814598059515685124,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'eXb4wYSsd8WA2BZv',
					date : 70,
					channel_post : 55,
					post_author : 'aKRT824ALlXpdmGq',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 81,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '4AJ09skpStbo2QcE',
					saved_date : 20,
					psa_type : 'xyBPvEK8GtJgmXeZ',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 6,
				quote_text : 'yzXS5m4iUEp3Bwvu',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 41,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 66,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 70,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 52,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 0,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 1,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 19,
						language : 'yG8aFnqgcjHdhk1b',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 94,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 22,
						user_id : 71218043068380675,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 29,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 35,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 43,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 76,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 10,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 92,
						document_id : 4904207185826476191,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 59,
					),
				),
				quote_offset : 51,
				todo_item_id : 31,
			),
			date : 61,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 33,
						reaction : $client->reactionEmpty(...),
						count : 80,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 84,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 54,
					),
				),
			),
			ttl_period : 2,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6365674992499837838,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2097057293340101721,
			title : 'q9DMBPHpRFsyor6b',
			photo : $client->chatPhotoEmpty(),
			participants_count : 10,
			date : 54,
			version : 97,
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
				until_date : 38,
			),
		),
		$client->chatForbidden(
			id : -999229305973573061,
			title : 'Vu2ZQSgcJsFbex4N',
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
			id : -6045487725378011526,
			access_hash : 2656334231338170443,
			title : 'M0VoO5elUzGtgiHS',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6exUsyBpqauWfRD2',
					reason : 'NfO7qiQKs6y324FC',
					text : 'eX4C1nyBIMwLWAiE',
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
				until_date : 9,
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
				until_date : 7,
			),
			participants_count : 14,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 59,
			),
			color : $client->peerColor(
				color : 54,
				background_emoji_id : 8065816247080955106,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : 9056542737993332289,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 9,
			subscription_until_date : 49,
			bot_verification_icon : 6370216020263015339,
			send_paid_messages_stars : 3576444661891983260,
			linked_monoforum_id : -2340429418429580073,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4602584120301555519,
			access_hash : -3888719576104999852,
			title : 'CN70HJyfdGUrSRWP',
			until_date : 90,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1994789583228041339,
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
			id : -8509229161197895151,
			access_hash : 3744709649507788691,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HW3pqoN19TMIk20b',
					reason : 'hiqfGUeXJouZFDmO',
					text : 'pXYqgDTtyuWe2Uhv',
				),
			),
			bot_inline_placeholder : 'PEXaHInclU2F4smL',
			lang_code : '47B2KG5beLwXTxyJ',
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
				max_id : 38,
			),
			color : $client->peerColor(
				color : 36,
				background_emoji_id : 9130085942920083495,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : 1670112045314258905,
			),
			bot_active_users : 92,
			bot_verification_icon : 6177484416974534373,
			send_paid_messages_stars : 2603408740877032860,
		),
	),
);
```