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
	count : 62,
	next_rate : 33,
	offset_id_offset : 0,
	search_flood : $client->searchPostsFlood(
		query_is_free : true,
		total_daily : 8,
		remains : 3,
		wait_till : 55,
		stars_amount : 275263069266223684,
	),
	messages : array(
		$client->messageEmpty(
			id : 25,
			peer_id : $client->peerUser(
				user_id : -4882194366622282167,
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
			id : 93,
			from_id : $client->peerUser(
				user_id : 999896346568325070,
			),
			from_boosts_applied : 72,
			peer_id : $client->peerUser(
				user_id : -4890264782098179710,
			),
			saved_peer_id : $client->peerUser(
				user_id : -2278697978842301577,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 7312449761506231503,
				),
				from_name : 'GwfAylXJp4SxWNji',
				date : 28,
				channel_post : 80,
				post_author : 'oJxdBalbFygHOVzr',
				saved_from_peer : $client->peerUser(
					user_id : 563482182929713845,
				),
				saved_from_msg_id : 7,
				saved_from_id : $client->peerUser(
					user_id : -8063928955191726133,
				),
				saved_from_name : '3R0tcovUmKPr5ue1',
				saved_date : 70,
				psa_type : 'WXiQ1u6wsaFApH4M',
			),
			via_bot_id : -6219137704033951603,
			via_business_bot_id : -4851080375950191172,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 70,
				reply_to_peer_id : $client->peerUser(
					user_id : 6841768409031797044,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'ph74KIi5yo8lXtB6',
					date : 72,
					channel_post : 2,
					post_author : 'np64xALPKVqJolNu',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 82,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'glV0CzYpbnAItRK5',
					saved_date : 27,
					psa_type : 'xId5UJihY0Ogmptc',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 68,
				quote_text : 'lU48WQGtJXFkaBYw',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 75,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 3,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 75,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 26,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 38,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 47,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 94,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 80,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 2,
						language : 'CGQz2hAvYI60a1RS',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 69,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 59,
						user_id : 375212456913298368,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 11,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 43,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 11,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 93,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 20,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 12,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 52,
						document_id : 7010435861012906488,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 100,
					),
				),
				quote_offset : 50,
				todo_item_id : 59,
			),
			date : 35,
			message : 'cXi69as8qumBwgW4',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 34,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 99,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 44,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 12,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 7,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 31,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 1,
					language : 'DrQepch67tMZ9mTx',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 1,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : -1755533359885479792,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 65,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 5,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 50,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 4,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 45,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 95,
					document_id : -5117699519240435815,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 44,
				),
			),
			views : 37,
			forwards : 79,
			replies : $client->messageReplies(
				comments : true,
				replies : 80,
				replies_pts : 99,
				recent_repliers : array(
					$client->peerUser(
						user_id : -3834580925809726704,
					),
					$client->peerChat(
						chat_id : -6028148318552119808,
					),
					$client->peerChannel(
						channel_id : -8896214486466522880,
					),
				),
				channel_id : -9030065401545986801,
				max_id : 0,
				read_max_id : 58,
			),
			edit_date : 14,
			post_author : 'q18YsbTHAK3MoeEy',
			grouped_id : -8745590169461650783,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 47,
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
						date : 38,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 73,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VZWJL5Ac3YMhmoRj',
					reason : 'dbSlKA51COmgUcas',
					text : 'Hk0GbWVnXZ1r2v9I',
				),
			),
			ttl_period : 81,
			quick_reply_shortcut_id : 42,
			effect : -1905063072653474394,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'pKLTcQkR6oGzyU18',
				text : $client->textWithEntities(
					text : 'mvtUhGpqLHC2YV5M',
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
			report_delivery_until_date : 5,
			paid_message_stars : 5369303443831067509,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -4790131484435462116,
					nanos : 88,
				),
				schedule_date : 80,
			),
			schedule_repeat_period : 9,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 36,
			from_id : $client->peerUser(
				user_id : 2467002759293290474,
			),
			peer_id : $client->peerUser(
				user_id : -1077140589363645934,
			),
			saved_peer_id : $client->peerUser(
				user_id : -5609194806701906258,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 21,
				reply_to_peer_id : $client->peerUser(
					user_id : 6127258512426215263,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'GSwzBT3jtdynei9b',
					date : 64,
					channel_post : 86,
					post_author : 'L51kcFCHX9tK0YMN',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 46,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'KE0Ra4knPqJYBhDv',
					saved_date : 17,
					psa_type : 'P1mOFuGknX07MRND',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 12,
				quote_text : 'NhIzdqykv8sGX206',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 63,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 38,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 68,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 45,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 8,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 92,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 38,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 26,
						language : 'T6Nlmoz7IM2rXLOS',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 59,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 64,
						user_id : 6397045963570515195,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 56,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 38,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 56,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 100,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 89,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 4,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 86,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 67,
						document_id : -5178216562187608794,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 8,
					),
				),
				quote_offset : 77,
				todo_item_id : 85,
			),
			date : 18,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 9,
						reaction : $client->reactionEmpty(...),
						count : 27,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 44,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 22,
					),
				),
			),
			ttl_period : 72,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 98,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 32,
			date : 35,
			peer : $client->peerUser(
				user_id : -72814639437210921,
			),
			title : 'RYmClryckfSvbpP4',
			icon_color : 58,
			icon_emoji_id : 5647905509762443079,
			top_message : 39,
			read_inbox_max_id : 95,
			read_outbox_max_id : 85,
			unread_count : 41,
			unread_mentions_count : 10,
			unread_reactions_count : 96,
			from_id : $client->peerUser(
				user_id : 3592272446220933151,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 77,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			draft : $client->draftMessageEmpty(
				date : 31,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8632358320522075038,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1242700497165063560,
			title : 'c1x9nP0Mw3dyhU2B',
			photo : $client->chatPhotoEmpty(),
			participants_count : 2,
			date : 81,
			version : 67,
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
			id : 4563556598963713659,
			title : 'CNvJsAWU1DkuxYrB',
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
			id : 5569558521578242210,
			access_hash : -1513599940584750694,
			title : 'CRviBlx2WzXMNDbO',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 0,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Vsmjr6f8yaZRqQkB',
					reason : '8XVDUqorQiJjfZbB',
					text : 'FXLQ7s5wB3z1alpP',
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
				until_date : 44,
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
				until_date : 53,
			),
			participants_count : 60,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 88,
			),
			color : $client->peerColor(
				color : 60,
				background_emoji_id : -1798701271639470508,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -1475545844792895555,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 47,
			subscription_until_date : 64,
			bot_verification_icon : 6105842512707370488,
			send_paid_messages_stars : -8101530673184699571,
			linked_monoforum_id : 1475327308227383393,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8847490575995615293,
			access_hash : -6744621779489271838,
			title : 'lvgRnLHzOUsIdCTa',
			until_date : 20,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4186395607275189219,
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
			id : -6761862881004581372,
			access_hash : 6827091423640283871,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 44,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gNbarG2dun8MxmlA',
					reason : 'fVd1qnQFoZRvLu4J',
					text : 'sjNSAkKmx7Ew38op',
				),
			),
			bot_inline_placeholder : 'QwzNiCWtRKyYGBUH',
			lang_code : '2vXn7ZzHJBsKjoq1',
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
				max_id : 68,
			),
			color : $client->peerColor(
				color : 21,
				background_emoji_id : -4524689820564101255,
			),
			profile_color : $client->peerColor(
				color : 50,
				background_emoji_id : 5450262799512336224,
			),
			bot_active_users : 35,
			bot_verification_icon : -3126293799680607395,
			send_paid_messages_stars : -8189193362272786095,
		),
	),
);
```