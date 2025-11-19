# messages.savedDialogs

**Description** : *Represents some saved message dialogs &raquo;*

**Layer** : 218

```tl
messages.savedDialogs#f83ae221 dialogs:Vector<SavedDialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.SavedDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dialogs</mark> | [`Vector<SavedDialog>`](type/SavedDialog) | Saved message dialogs » |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | List of last messages from each saved dialog |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.SavedDialogs](type/messages.SavedDialogs)

---

## Example

```php
$messagesSavedDialogs = $client->messages->savedDialogs(
	dialogs : array(
		$client->savedDialog(
			pinned : true,
			peer : $client->peerUser(
				user_id : -5947580045312558702,
			),
			top_message : 70,
		),
		$client->monoForumDialog(
			unread_mark : true,
			nopaid_messages_exception : true,
			peer : $client->peerUser(
				user_id : 5746100490843013238,
			),
			top_message : 95,
			read_inbox_max_id : 65,
			read_outbox_max_id : 93,
			unread_count : 73,
			unread_reactions_count : 69,
			draft : $client->draftMessageEmpty(
				date : 16,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 99,
			peer_id : $client->peerUser(
				user_id : 4083964315815933290,
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
			id : 68,
			from_id : $client->peerUser(
				user_id : 7361014626829016720,
			),
			from_boosts_applied : 97,
			peer_id : $client->peerUser(
				user_id : -6284271105370978335,
			),
			saved_peer_id : $client->peerUser(
				user_id : -476681572518159059,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -1466972635611066220,
				),
				from_name : 'ogHEAmcQCxtYnFI6',
				date : 6,
				channel_post : 12,
				post_author : 'J5tjvVQlz6gnI3xX',
				saved_from_peer : $client->peerUser(
					user_id : 436445911253478747,
				),
				saved_from_msg_id : 74,
				saved_from_id : $client->peerUser(
					user_id : -7628206925958567500,
				),
				saved_from_name : 'V6XKgvOEu9qnWbDM',
				saved_date : 99,
				psa_type : 'br5fIFMpwziYUaX3',
			),
			via_bot_id : -8331720115534979815,
			via_business_bot_id : 744123518635555271,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 60,
				reply_to_peer_id : $client->peerUser(
					user_id : -5564982133420564588,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'l4YeMbHtsFiQKE71',
					date : 29,
					channel_post : 73,
					post_author : 'XxebH2znfRs39uSa',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 27,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'VPfmjRU2Zez8T1da',
					saved_date : 30,
					psa_type : 'zEgpDVr9SlKUjXiP',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 4,
				quote_text : 'YPZDqjSifUdBah7L',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 64,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 78,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 26,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 73,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 26,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 38,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 34,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 97,
						language : 'LebdKMgwGSyBrloa',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 100,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 90,
						user_id : 3688266491019176329,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 22,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 59,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 63,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 68,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 75,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 67,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 99,
						document_id : -8547593726209493303,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 16,
					),
				),
				quote_offset : 53,
				todo_item_id : 52,
			),
			date : 35,
			message : 'VE4SokZGsLNHAdhj',
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
					length : 15,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 47,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 93,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 9,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 34,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 47,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 26,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 52,
					language : 'aQrN6jx7m58nzBU9',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 10,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 27,
					user_id : -915116941002782707,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 51,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 0,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 42,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 87,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 27,
					document_id : -3054817552401107452,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 38,
				),
			),
			views : 7,
			forwards : 70,
			replies : $client->messageReplies(
				comments : true,
				replies : 35,
				replies_pts : 39,
				recent_repliers : array(
					$client->peerUser(
						user_id : 7712140024817627817,
					),
					$client->peerChat(
						chat_id : 3890078052884468937,
					),
					$client->peerChannel(
						channel_id : 8759315665286715813,
					),
				),
				channel_id : 7268916072935406881,
				max_id : 19,
				read_max_id : 14,
			),
			edit_date : 58,
			post_author : '1FhkrxbJ4B6LvWRO',
			grouped_id : -4095078747159047358,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 50,
						reaction : $client->reactionEmpty(...),
						count : 33,
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
						count : 37,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tiOw8PbponWUKyG1',
					reason : 'HrBxdFEezVspURqW',
					text : 'GR3AQIf2aj8KpHze',
				),
			),
			ttl_period : 25,
			quick_reply_shortcut_id : 85,
			effect : -4683417532034790894,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'cerUQhxmPFys48B9',
				text : $client->textWithEntities(
					text : 'q6g2mdeY9zoFBrSA',
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
			report_delivery_until_date : 70,
			paid_message_stars : 2405523078355566606,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 662356180234782411,
					nanos : 22,
				),
				schedule_date : 35,
			),
			schedule_repeat_period : 25,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 39,
			from_id : $client->peerUser(
				user_id : -6548219327820775421,
			),
			peer_id : $client->peerUser(
				user_id : -8266387154710748699,
			),
			saved_peer_id : $client->peerUser(
				user_id : 655151753001050627,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 49,
				reply_to_peer_id : $client->peerUser(
					user_id : -3689043971200665523,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'NuInpDcG3fXlzvHF',
					date : 16,
					channel_post : 0,
					post_author : '9sAty6lZhQHBMnq4',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 15,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'xoqHSalFv8ITmBPU',
					saved_date : 0,
					psa_type : 'PuyrtoxUmgn8SRYh',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 71,
				quote_text : 'OrxFs7pIbZQtjGX6',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 35,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 84,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 31,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 10,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 100,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 80,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 12,
						language : 'VG8x1SLZKDwJkR6M',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 4,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 15,
						user_id : -1800680669449390687,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 96,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 56,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 38,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 19,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 84,
						document_id : -8105990538399424401,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 81,
					),
				),
				quote_offset : 7,
				todo_item_id : 96,
			),
			date : 100,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 42,
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
						date : 33,
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
			ttl_period : 48,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3511798442287239982,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2584858612942200066,
			title : 'ZaUM8uD6HPTbvVxQ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 74,
			date : 79,
			version : 24,
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
				until_date : 3,
			),
		),
		$client->chatForbidden(
			id : -5003609662468104360,
			title : 'LZjX5Osf48rYEmuR',
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
			id : 676889766854141619,
			access_hash : -4971514812821320831,
			title : '70YXcpyJNighK9r8',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'T2DLKAxJgrhNd6CX',
					reason : 'wJRTmElKjDMdu6F3',
					text : 'AJO81WmiM5gDVuz7',
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
				until_date : 16,
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
				until_date : 0,
			),
			participants_count : 78,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 78,
			),
			color : $client->peerColor(
				color : 36,
				background_emoji_id : 5695840991552385581,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : -5948138567643718514,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 44,
			subscription_until_date : 37,
			bot_verification_icon : 2852099526990505516,
			send_paid_messages_stars : -3691873300074014540,
			linked_monoforum_id : -6028985102260468913,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8367518219502000121,
			access_hash : 1364942648247592664,
			title : 'AIPyzaZNYpsD6dTC',
			until_date : 30,
		),
	),
	users : array(
		$client->userEmpty(
			id : 646740094041563859,
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
			id : -142624000706508129,
			access_hash : -3548903077077807370,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 91,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GctITernYlk3RDyB',
					reason : 'lXvx29GbhMBOcL4e',
					text : 'UA2kyZlaY4Ct0g9L',
				),
			),
			bot_inline_placeholder : 'CSGiE4lsty6hHdAk',
			lang_code : 'WNwD1QzZAvoOPdp5',
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
				max_id : 80,
			),
			color : $client->peerColor(
				color : 90,
				background_emoji_id : 1194590862691230958,
			),
			profile_color : $client->peerColor(
				color : 37,
				background_emoji_id : -5219835368178401877,
			),
			bot_active_users : 69,
			bot_verification_icon : -8569610454493666278,
			send_paid_messages_stars : 4134432525738843775,
		),
	),
);
```