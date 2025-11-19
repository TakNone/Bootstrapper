# messages.discussionMessage

**Description** : *Information about a message thread*

**Layer** : 218

```tl
messages.discussionMessage#a6341782 flags:# messages:Vector<Message> max_id:flags.0?int read_inbox_max_id:flags.1?int read_outbox_max_id:flags.2?int unread_count:int chats:Vector<Chat> users:Vector<User> = messages.DiscussionMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | The messages from which the thread starts. The messages are returned in reverse chronological order (i.e., in order of decreasing message ID) |
| **max_id** | [`flags.0?int`](type/int) | Message ID of latest reply in this thread |
| **read_inbox_max_id** | [`flags.1?int`](type/int) | Message ID of latest read incoming message in this thread |
| **read_outbox_max_id** | [`flags.2?int`](type/int) | Message ID of latest read outgoing message in this thread |
| <mark>unread_count</mark> | [`int`](type/int) | Number of unread messages |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in constructor |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in constructor |

---

## Type

[messages.DiscussionMessage](type/messages.DiscussionMessage)

---

## Example

```php
$messagesDiscussionMessage = $client->messages->discussionMessage(
	messages : array(
		$client->messageEmpty(
			id : 79,
			peer_id : $client->peerUser(
				user_id : -8222221359600295490,
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
			id : 22,
			from_id : $client->peerUser(
				user_id : 2872850413486912024,
			),
			from_boosts_applied : 42,
			peer_id : $client->peerUser(
				user_id : 4795848152295602682,
			),
			saved_peer_id : $client->peerUser(
				user_id : 2596760344079416427,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -8815779235336871536,
				),
				from_name : 'QJmATCxjf29e5b3p',
				date : 62,
				channel_post : 37,
				post_author : 'or1NilHXxyACqSeZ',
				saved_from_peer : $client->peerUser(
					user_id : -202417827553271674,
				),
				saved_from_msg_id : 79,
				saved_from_id : $client->peerUser(
					user_id : 3132787089164184539,
				),
				saved_from_name : 'D5Qfrk4lYamGhudB',
				saved_date : 90,
				psa_type : 'p528KnGmgykSFvtE',
			),
			via_bot_id : 7321021435113250894,
			via_business_bot_id : -4949512660208502140,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 85,
				reply_to_peer_id : $client->peerUser(
					user_id : 3212977432818324172,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'VG5P6HITcFrOs8KA',
					date : 9,
					channel_post : 77,
					post_author : 'o4zCjuX5gYDBP60p',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 84,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'KsY4ZeQG867EWUF0',
					saved_date : 28,
					psa_type : 'LlvfMk1pnWT8XOJP',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 12,
				quote_text : 'SlDkxrFYTEJN0t89',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 50,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 70,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 89,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 71,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 30,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 72,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 2,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 32,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 25,
						language : 'hkMtKWZzBUX6LxqR',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 93,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 11,
						user_id : -7328537241866874586,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 48,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 57,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 80,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 36,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 72,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 46,
						document_id : 280392475458699396,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 63,
					),
				),
				quote_offset : 7,
				todo_item_id : 44,
			),
			date : 63,
			message : 'Cb8y2dLqhN0JBtZV',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 86,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 26,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 37,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 43,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 4,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 57,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 59,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 40,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 34,
					language : 'Va9AOdt5MjCQghpw',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 13,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : -2275307147940616244,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 60,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 17,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 18,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 55,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 88,
					document_id : 3220577406536379414,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 18,
				),
			),
			views : 62,
			forwards : 38,
			replies : $client->messageReplies(
				comments : true,
				replies : 43,
				replies_pts : 28,
				recent_repliers : array(
					$client->peerUser(
						user_id : -3659217137421686354,
					),
					$client->peerChat(
						chat_id : 8381442682591078260,
					),
					$client->peerChannel(
						channel_id : -7963334765342817996,
					),
				),
				channel_id : 2841977174741579703,
				max_id : 58,
				read_max_id : 31,
			),
			edit_date : 3,
			post_author : 'HSNjwQOP1qzgJiet',
			grouped_id : 501454892552492075,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 41,
						reaction : $client->reactionEmpty(...),
						count : 21,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 40,
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
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IVp21KrUCmv4lRb0',
					reason : 'hZeS6yJcnrpuoFwG',
					text : 'KbysdRkUJx2Vqvle',
				),
			),
			ttl_period : 4,
			quick_reply_shortcut_id : 38,
			effect : -4665035469332226089,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'qfxuJDrCnlMO4TkF',
				text : $client->textWithEntities(
					text : 'Cew9p31zakUOJMri',
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
			report_delivery_until_date : 61,
			paid_message_stars : 2589750963171713894,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 6735800782305028380,
					nanos : 56,
				),
				schedule_date : 4,
			),
			schedule_repeat_period : 58,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 92,
			from_id : $client->peerUser(
				user_id : 5982140862115332953,
			),
			peer_id : $client->peerUser(
				user_id : -2549743515121092176,
			),
			saved_peer_id : $client->peerUser(
				user_id : 1088414359903520954,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 18,
				reply_to_peer_id : $client->peerUser(
					user_id : 8583406229920365626,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '62nbX8jAHRIpqucE',
					date : 32,
					channel_post : 75,
					post_author : 'UXEgxjPMBRZI6uqK',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 92,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'BPqmQnpDwWxk9SE4',
					saved_date : 52,
					psa_type : 'zfvxJZCTmWqan7GX',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 47,
				quote_text : 'NeGSr6qPfVt9jd3k',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 100,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 20,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 2,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 80,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 82,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 57,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 49,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 76,
						language : 'uAxBbo169s2djhZT',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 56,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 93,
						user_id : 8658016537251815845,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 70,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 56,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 96,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 73,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 50,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 13,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 50,
						document_id : -4285992732662262930,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 84,
					),
				),
				quote_offset : 24,
				todo_item_id : 14,
			),
			date : 75,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 63,
						reaction : $client->reactionEmpty(...),
						count : 26,
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
						count : 51,
					),
				),
			),
			ttl_period : 72,
		),
	),
	max_id : 14,
	read_inbox_max_id : 9,
	read_outbox_max_id : 37,
	unread_count : 65,
	chats : array(
		$client->chatEmpty(
			id : 1149733910763365835,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4697313245487089381,
			title : '12qIMrx9EWsA4PFR',
			photo : $client->chatPhotoEmpty(),
			participants_count : 92,
			date : 49,
			version : 84,
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
				until_date : 77,
			),
		),
		$client->chatForbidden(
			id : -2971538202375097830,
			title : 'XiUOW93Nn6uBoD7V',
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
			id : 1852055428945060415,
			access_hash : 6100678953689308893,
			title : 'oyfPp18vzlUgRi9Q',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 46,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ipcKSx9lO370muBk',
					reason : 'amKqX468EVIfA9nS',
					text : 'RLT2bCc1Et5z7Uoj',
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
				until_date : 48,
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
			participants_count : 41,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 83,
			),
			color : $client->peerColor(
				color : 57,
				background_emoji_id : 3922693851061306641,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : 1674129270137488611,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 97,
			subscription_until_date : 58,
			bot_verification_icon : 2240410678862308788,
			send_paid_messages_stars : -6671552144324586019,
			linked_monoforum_id : 2945700135799134414,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6119306452960848143,
			access_hash : -5751909904784807415,
			title : 'Q5j894uqGrwmTBzK',
			until_date : 100,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3624172084872873695,
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
			id : -6072059576185779813,
			access_hash : 3526313370488846755,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hJ4kMXo2p3QO7xGZ',
					reason : 'J1Vn27IuBjQMbld9',
					text : 'WcPuROK1qMp43Cvw',
				),
			),
			bot_inline_placeholder : 'F03OZTUwm1eXkzxo',
			lang_code : '2OGvW4AP7ZqD1aXi',
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
				max_id : 62,
			),
			color : $client->peerColor(
				color : 9,
				background_emoji_id : -1786363671949901361,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : 1506526935354025113,
			),
			bot_active_users : 51,
			bot_verification_icon : -496091905385858168,
			send_paid_messages_stars : -4603554768006962300,
		),
	),
);
```