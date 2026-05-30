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
			shortcut_id : 89,
			shortcut : 'MR3Y5nmfr1hLyiCV',
			top_message : 39,
			count : 48,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 87,
			peer_id : $client->peerUser(
				user_id : -4989784924140700923,
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
			id : 72,
			from_id : $client->peerUser(
				user_id : -6284300100194080533,
			),
			from_boosts_applied : 91,
			peer_id : $client->peerUser(
				user_id : -4543623629715425243,
			),
			saved_peer_id : $client->peerUser(
				user_id : -4799370043461161546,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -8108270203535662079,
				),
				from_name : 'iGBeYEtWsLhJmnc0',
				date : 41,
				channel_post : 98,
				post_author : 'CqNfeY2pZ0QDaicz',
				saved_from_peer : $client->peerUser(
					user_id : -2820938111085202555,
				),
				saved_from_msg_id : 31,
				saved_from_id : $client->peerUser(
					user_id : -7003053968273164159,
				),
				saved_from_name : 'AIRsnUGDPaTVFzmh',
				saved_date : 95,
				psa_type : '3Mio6EOUjlBKCwQW',
			),
			via_bot_id : -9093629217181274612,
			via_business_bot_id : 3044330555972844686,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 35,
				reply_to_peer_id : $client->peerUser(
					user_id : 9009265145233610314,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'fV6a07GKQIycAYsW',
					date : 62,
					channel_post : 25,
					post_author : '0Gz547BaxC3g9AbR',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 21,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'julUTbA3ahRWMm2F',
					saved_date : 27,
					psa_type : 'KyJXcvwfEjCrexNF',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 21,
				quote_text : 'P7yimG42zSTYxsRQ',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 92,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 6,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 32,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 43,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 61,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 49,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 99,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 84,
						language : 'IoXjzNe2GiuSLMc1',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 37,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 15,
						user_id : -535750647571161315,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 3,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 35,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 38,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 5,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 4,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 44,
						document_id : -1297934976034166456,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 86,
					),
				),
				quote_offset : 24,
				todo_item_id : 69,
			),
			date : 24,
			message : 'NyIDPek2BiVsA7bL',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 0,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 52,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 40,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 79,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 9,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 57,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 93,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 45,
					language : 'RD7ExgozhNcwlydi',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 2,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 45,
					user_id : -4774629027775558246,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 62,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 69,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 86,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 25,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 44,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 42,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 16,
					document_id : -7839192385876749659,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 84,
				),
			),
			views : 98,
			forwards : 70,
			replies : $client->messageReplies(
				comments : true,
				replies : 16,
				replies_pts : 63,
				recent_repliers : array(
					$client->peerUser(
						user_id : 3603480965870435217,
					),
					$client->peerChat(
						chat_id : 133218196246641557,
					),
					$client->peerChannel(
						channel_id : 107632832333765770,
					),
				),
				channel_id : -8186905737053170791,
				max_id : 17,
				read_max_id : 31,
			),
			edit_date : 16,
			post_author : 'HgJymCcX9jtInvKq',
			grouped_id : 3955046419787613770,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 77,
						reaction : $client->reactionEmpty(...),
						count : 20,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 98,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 7,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fqRFl0cBIgkW6ZHr',
					reason : 'lJxF8CuKiUnY9BD0',
					text : 'tj6whN2syBM0517K',
				),
			),
			ttl_period : 93,
			quick_reply_shortcut_id : 63,
			effect : -5473062595585020909,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'vwykSQJVu0FHM39t',
				text : $client->textWithEntities(
					text : 'wiH0kKmhpRZMdlYj',
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
			report_delivery_until_date : 60,
			paid_message_stars : 6107255646587191633,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 3305222265423841761,
					nanos : 66,
				),
				schedule_date : 92,
			),
			schedule_repeat_period : 36,
			summary_from_language : 'X5mOJqKLduUQMrpn',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 71,
			from_id : $client->peerUser(
				user_id : 8451983480131912951,
			),
			peer_id : $client->peerUser(
				user_id : -3094848965166590855,
			),
			saved_peer_id : $client->peerUser(
				user_id : 3528409396953107746,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 22,
				reply_to_peer_id : $client->peerUser(
					user_id : 1729804619597262202,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'b1dFYxXh5C4SDvPq',
					date : 59,
					channel_post : 9,
					post_author : 'CsqfgwJYF4pt3m2P',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 32,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'NmS8YRU3AxPyOFQz',
					saved_date : 97,
					psa_type : 'FR0oAKuajTpMlCd3',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 0,
				quote_text : 'WOhcdt4ws0RGNnEy',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 42,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 2,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 11,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 43,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 53,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 50,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 86,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 56,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 31,
						language : '2OiEdfZnxsTmjPBu',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 27,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 76,
						user_id : -628464111458704578,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 65,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 41,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 66,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 86,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 23,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 16,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 97,
						document_id : -3914175442758754143,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 7,
					),
				),
				quote_offset : 47,
				todo_item_id : 34,
			),
			date : 7,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 10,
						reaction : $client->reactionEmpty(...),
						count : 57,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 62,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 87,
					),
				),
			),
			ttl_period : 2,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6136486612619340903,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1851820643222800226,
			title : 'kz3lumqZQ74dGTjf',
			photo : $client->chatPhotoEmpty(),
			participants_count : 70,
			date : 86,
			version : 79,
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
				until_date : 79,
			),
		),
		$client->chatForbidden(
			id : -2579204777693729864,
			title : 'TdNxiWJUV3y1bqfe',
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
			id : 8814251295234681645,
			access_hash : -36454090678658367,
			title : 'BMjOGJKfrYmky5eP',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QxM7Nmjz9VGPwihb',
					reason : 'UPG5nzXio09TIBaR',
					text : '8oZpW1tlYMs3gCKu',
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
				until_date : 95,
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
				until_date : 44,
			),
			participants_count : 92,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 71,
			),
			color : $client->peerColor(
				color : 84,
				background_emoji_id : -8629744524681739416,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : 2723532121397097351,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 87,
			subscription_until_date : 71,
			bot_verification_icon : 9015487668016470539,
			send_paid_messages_stars : -2303828915043730170,
			linked_monoforum_id : -911056725280331075,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 5749508575544562682,
			access_hash : -1085756651629499590,
			title : 'iocCYBkfNMRQXd1y',
			until_date : 51,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5926444395597738331,
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
			id : -4910974981836673024,
			access_hash : 6032313683768732012,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xITDEwkW5dVXgh6t',
					reason : 'cJIl0MHLEpNSqnD3',
					text : 'epvOH4kunjo6g7dT',
				),
			),
			bot_inline_placeholder : 'b2iS8PV4zykZTXpn',
			lang_code : 'uGDzqR6V34UhHix8',
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
				max_id : 41,
			),
			color : $client->peerColor(
				color : 1,
				background_emoji_id : -2552448516164877873,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : 3520249199481411527,
			),
			bot_active_users : 32,
			bot_verification_icon : 8410805424580361048,
			send_paid_messages_stars : 1756258998943114305,
		),
	),
);
```