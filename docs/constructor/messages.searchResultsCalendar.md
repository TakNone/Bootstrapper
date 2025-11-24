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
	count : 26,
	min_date : 34,
	min_msg_id : 60,
	offset_id_offset : 0,
	periods : array(
		$client->searchResultsCalendarPeriod(
			date : 97,
			min_msg_id : 78,
			max_msg_id : 88,
			count : 37,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 71,
			peer_id : $client->peerUser(
				user_id : -4763536764944101457,
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
			id : 52,
			from_id : $client->peerUser(
				user_id : 2277029495528633958,
			),
			from_boosts_applied : 14,
			peer_id : $client->peerUser(
				user_id : -7363010290756294260,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8970716386606083907,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -2051602562346670811,
				),
				from_name : '6VJ8zoH5i3CyYeW0',
				date : 39,
				channel_post : 61,
				post_author : 'mXY1okBzPMfUQvrT',
				saved_from_peer : $client->peerUser(
					user_id : 5302554948799733093,
				),
				saved_from_msg_id : 90,
				saved_from_id : $client->peerUser(
					user_id : -2827097811287073766,
				),
				saved_from_name : 'mQjn6U8pSVD9dvFy',
				saved_date : 27,
				psa_type : 'IbXuNPo751M3xl06',
			),
			via_bot_id : 2252049482164626392,
			via_business_bot_id : 3122955891213178400,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 39,
				reply_to_peer_id : $client->peerUser(
					user_id : 5301448042442327119,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'UTs67hIbv2nR38rk',
					date : 40,
					channel_post : 58,
					post_author : 'LPXlNw8TUHpuV0FM',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 13,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'Nuc8eas9GqKXmwTQ',
					saved_date : 45,
					psa_type : 'Dxev8RBlcnVPsg1W',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 3,
				quote_text : 'XZrtOhy3lUk72PvN',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 16,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 55,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 51,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 74,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 11,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 79,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 23,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 81,
						language : 'B6pkFXzCjquxvPaY',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 36,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 75,
						user_id : -4777681048347980440,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 100,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 24,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 63,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 89,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 71,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 63,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 58,
						document_id : -4768627995568904982,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 63,
					),
				),
				quote_offset : 31,
				todo_item_id : 88,
			),
			date : 39,
			message : 'ucHRIrf80VkzxQOT',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 41,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 88,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 51,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 24,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 68,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 33,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 51,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 55,
					language : 'Mt2aYyjizLSvpNIx',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 84,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 52,
					user_id : 7324754796569789683,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 16,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 0,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 74,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 10,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 79,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 78,
					document_id : 6595038444020211088,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 73,
				),
			),
			views : 91,
			forwards : 98,
			replies : $client->messageReplies(
				comments : true,
				replies : 33,
				replies_pts : 99,
				recent_repliers : array(
					$client->peerUser(
						user_id : -6249889282856860447,
					),
					$client->peerChat(
						chat_id : -3408468182266529542,
					),
					$client->peerChannel(
						channel_id : -5390824172488940058,
					),
				),
				channel_id : 4008505132051326201,
				max_id : 100,
				read_max_id : 14,
			),
			edit_date : 87,
			post_author : 'gDKJ7nNpSYjowv3l',
			grouped_id : 8396746244849546184,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 94,
						reaction : $client->reactionEmpty(...),
						count : 82,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 41,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 91,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IL59va2ryf8RtjTo',
					reason : 'fPrF4A2MWeNGm3SC',
					text : 'uor3PgsnNMB4v5Tf',
				),
			),
			ttl_period : 22,
			quick_reply_shortcut_id : 66,
			effect : -7261072332834187463,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'bpP08QGM1wE3TLv4',
				text : $client->textWithEntities(
					text : 'fuypI8XmZS2nebdo',
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
			report_delivery_until_date : 55,
			paid_message_stars : 5912402073975748460,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -8873651853376195832,
					nanos : 70,
				),
				schedule_date : 97,
			),
			schedule_repeat_period : 3,
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
				user_id : 8005356234395652121,
			),
			peer_id : $client->peerUser(
				user_id : 1000842702901434897,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8147811462237697752,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 95,
				reply_to_peer_id : $client->peerUser(
					user_id : 8535132082309693364,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'rKyBU6DVdOqRFcnb',
					date : 58,
					channel_post : 60,
					post_author : 'TS6sgGH8jXiZRraB',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 90,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'phUE0n2f8g3WMuFd',
					saved_date : 35,
					psa_type : 'wniICs1qophdbFvH',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 35,
				quote_text : '8XvTlBsZYfwSckWU',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 51,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 31,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 37,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 39,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 91,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 49,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 8,
						language : 'U0InRNKpwitYzv3E',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 19,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 43,
						user_id : -496257435902100843,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 48,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 32,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 30,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 83,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 38,
						document_id : -710163865654696682,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 50,
					),
				),
				quote_offset : 12,
				todo_item_id : 81,
			),
			date : 30,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 89,
						reaction : $client->reactionEmpty(...),
						count : 40,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 42,
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
			ttl_period : 40,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 957613455725459477,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1271844944708657595,
			title : 'Wc0eB2ZzsDMm9wgT',
			photo : $client->chatPhotoEmpty(),
			participants_count : 34,
			date : 21,
			version : 3,
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
				until_date : 14,
			),
		),
		$client->chatForbidden(
			id : -5423614339396341084,
			title : 'lbDnCFBfioZXGxJV',
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
			id : 8659400589847393139,
			access_hash : -7792435976991864482,
			title : 'n42uUCPSyrqxivbk',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 85,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YQKDtdSXosxhO1uf',
					reason : 'bJ0wtgB9Odvn1V8T',
					text : 'CA0jm5a9YLPN2Ddf',
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
				until_date : 62,
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
				until_date : 98,
			),
			participants_count : 88,
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
				color : 97,
				background_emoji_id : -6870865767778144704,
			),
			profile_color : $client->peerColor(
				color : 84,
				background_emoji_id : -1069626590021972840,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 35,
			subscription_until_date : 88,
			bot_verification_icon : -9108534183180524197,
			send_paid_messages_stars : 2823851996155377001,
			linked_monoforum_id : -2859660632279434940,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3080905649359926518,
			access_hash : 2955831932177457123,
			title : 'qXIiCwo3mzH4PfsT',
			until_date : 94,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6450722083449710917,
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
			id : 4782791684859057197,
			access_hash : -8514866912334290127,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pRSEb3fFNHghDirX',
					reason : 'prS2R0tWv7ki3fqV',
					text : 'wvjNige1UpKGH7kz',
				),
			),
			bot_inline_placeholder : 'BIdv6uwZcVSbyTaW',
			lang_code : 'bGsSMVfqAJezBiWl',
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
				max_id : 93,
			),
			color : $client->peerColor(
				color : 80,
				background_emoji_id : 706208699527726203,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : -2583397920363119598,
			),
			bot_active_users : 48,
			bot_verification_icon : -7425755654469465208,
			send_paid_messages_stars : -98604775093635692,
		),
	),
);
```