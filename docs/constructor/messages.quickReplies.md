# messages.quickReplies

**Description** : *Info about quick reply shortcuts &raquo;*

**Layer** : 222

```tl
messages.quickReplies#c68d6695 quick_replies:Vector<QuickReply> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.QuickReplies;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>quick_replies</mark> | [`Vector<QuickReply>`](type/QuickReply) | Quick reply shortcuts |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | Messages mentioned in quick_replies |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.QuickReplies](type/messages.QuickReplies)

---

## Example

```php
$messagesQuickReplies = $client->messages->quickReplies(
	quick_replies : array(
		$client->quickReply(
			shortcut_id : 7,
			shortcut : 'hdzF2963t1WTvVLj',
			top_message : 64,
			count : 85,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 59,
			peer_id : $client->peerUser(
				user_id : 8922705230722861305,
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
			id : 30,
			from_id : $client->peerUser(
				user_id : 4790500439175148802,
			),
			from_boosts_applied : 12,
			peer_id : $client->peerUser(
				user_id : 3998308167390995433,
			),
			saved_peer_id : $client->peerUser(
				user_id : -5003280775608605118,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -6723634749658798272,
				),
				from_name : 'BNGmoqA3S0laCnWd',
				date : 0,
				channel_post : 32,
				post_author : 'fHsjvlIpSGh5xYAQ',
				saved_from_peer : $client->peerUser(
					user_id : -3672662304896634805,
				),
				saved_from_msg_id : 48,
				saved_from_id : $client->peerUser(
					user_id : 4457451511242987371,
				),
				saved_from_name : 'wVorBht8PUzdxJ4D',
				saved_date : 27,
				psa_type : 'qc3g6NuAFOiDSvsR',
			),
			via_bot_id : 9084032708283727309,
			via_business_bot_id : -8492381592044441939,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 3,
				reply_to_peer_id : $client->peerUser(
					user_id : -5353414881596617627,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'QcosCOPKFA3MUDj7',
					date : 96,
					channel_post : 22,
					post_author : 'cn1FVz387sWJrQbE',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 59,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'rqcFwaOPmLYsyVH5',
					saved_date : 60,
					psa_type : 'NkHp4AS6xoz2q7RL',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 34,
				quote_text : 'Lm6M1tvWFIGTUkAR',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 15,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 13,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 97,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 92,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 96,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 46,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 38,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 0,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 25,
						language : 'iRZLTjfVJGXHyBv6',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 55,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : 1873746781332682547,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 17,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 1,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 10,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 15,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 83,
						document_id : -7631354095627338826,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 11,
					),
				),
				quote_offset : 15,
				todo_item_id : 60,
			),
			date : 15,
			message : '0rX5VioCDHZSPTEI',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 29,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 38,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 46,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 86,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 40,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 66,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 55,
					language : '8GslSwA5vBVa1qRU',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 93,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 58,
					user_id : 3553153165462331546,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 91,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 12,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 50,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 70,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 46,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 14,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 14,
					document_id : 2105299230239766693,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 43,
				),
			),
			views : 94,
			forwards : 83,
			replies : $client->messageReplies(
				comments : true,
				replies : 80,
				replies_pts : 8,
				recent_repliers : array(
					$client->peerUser(
						user_id : 8321748593930246961,
					),
					$client->peerChat(
						chat_id : 1382075048385083665,
					),
					$client->peerChannel(
						channel_id : -8341615282557228773,
					),
				),
				channel_id : -1331963554951428332,
				max_id : 1,
				read_max_id : 79,
			),
			edit_date : 98,
			post_author : 'y56Dx4egOAGVK1MX',
			grouped_id : 528981952814546140,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 42,
						reaction : $client->reactionEmpty(...),
						count : 0,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 55,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 67,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'L4EBIhskRfOtmxw0',
					reason : 'RqJOxBs1oY3rTpLn',
					text : 'wCpveoHTc4XN89t2',
				),
			),
			ttl_period : 69,
			quick_reply_shortcut_id : 96,
			effect : -8206016245652250862,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'gAcu75DSqzYjo34M',
				text : $client->textWithEntities(
					text : 'W8to12ayTV0mNzMU',
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
			report_delivery_until_date : 6,
			paid_message_stars : -1481427136261511318,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -1938506689804184321,
					nanos : 77,
				),
				schedule_date : 75,
			),
			schedule_repeat_period : 91,
			summary_from_language : 'sm6cp3PbtrETFzQf',
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
				user_id : 2416163219907110270,
			),
			peer_id : $client->peerUser(
				user_id : 2737727849658318553,
			),
			saved_peer_id : $client->peerUser(
				user_id : -2866806888850593674,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 88,
				reply_to_peer_id : $client->peerUser(
					user_id : 5126807517213006895,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'zktyw3ro47VOahXc',
					date : 93,
					channel_post : 60,
					post_author : '1ylPFKiOT4VeSj8N',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 25,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'NmDzCtfpOQg7exAc',
					saved_date : 84,
					psa_type : 'mFskObqco8S9Hh7L',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 90,
				quote_text : 'BFxDWGjdem7PkItU',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 61,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 29,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 87,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 37,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 23,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 79,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 60,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 3,
						language : 'GNa3zFvMbWYICXJq',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 78,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 22,
						user_id : -8642298269738761371,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 56,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 86,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 77,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 27,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 94,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 48,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 88,
						document_id : -4805274175725567813,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 9,
					),
				),
				quote_offset : 32,
				todo_item_id : 59,
			),
			date : 51,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 35,
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
						date : 66,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 92,
					),
				),
			),
			ttl_period : 74,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -643660566403953857,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2889612476099125603,
			title : '25vtqJ7W1RzPVUoy',
			photo : $client->chatPhotoEmpty(),
			participants_count : 49,
			date : 4,
			version : 16,
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
				until_date : 93,
			),
		),
		$client->chatForbidden(
			id : -4864313970098834174,
			title : '8n9XKYLhSVe75fEM',
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
			id : 4706289630852617318,
			access_hash : -8094308192463724141,
			title : 'eUZnDvtCBFq3xfcH',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CeEDdlviS0WAToa3',
					reason : 'JRHDsdmYv8huApZX',
					text : 'Z2XoRCjaOP0s4Jtm',
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
				until_date : 23,
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
				until_date : 78,
			),
			participants_count : 94,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 5,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : 5872053868530450820,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : 6935894638565193094,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 95,
			subscription_until_date : 70,
			bot_verification_icon : -8562997793901026366,
			send_paid_messages_stars : 227784721591305645,
			linked_monoforum_id : -7759480786079065313,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 990778433599656562,
			access_hash : 8997625582479878770,
			title : 'gn1AXsumvitJoM3a',
			until_date : 44,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3336735754736803662,
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
			id : 1757941203902782845,
			access_hash : -5188438293785558648,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 46,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'rLHDC87E6Kbx59Ou',
					reason : '5Q1taqJG2yod0cNF',
					text : 'JEj8vwlhXa5pVb0x',
				),
			),
			bot_inline_placeholder : '4MYtL6vjDuFUxaAe',
			lang_code : 'bdU1J3q40RLelFzo',
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
				color : 4,
				background_emoji_id : -1292358917143234035,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : -738826949388351579,
			),
			bot_active_users : 97,
			bot_verification_icon : -6663947795028814639,
			send_paid_messages_stars : -403928408812985305,
		),
	),
);
```