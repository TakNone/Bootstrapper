# messages.quickReplies

**Description** : *Info about quick reply shortcuts &raquo;*

**Layer** : 218

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
			shortcut_id : 86,
			shortcut : 'RfAZ71DeC0PtpYn3',
			top_message : 87,
			count : 4,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 26,
			peer_id : $client->peerUser(
				user_id : 4909137850532741445,
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
			id : 19,
			from_id : $client->peerUser(
				user_id : 6391493329132382277,
			),
			from_boosts_applied : 4,
			peer_id : $client->peerUser(
				user_id : -7814746876106973747,
			),
			saved_peer_id : $client->peerUser(
				user_id : 3617700933524493914,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 4973104525157191797,
				),
				from_name : 'dfXIgKeLtvh53wDP',
				date : 22,
				channel_post : 94,
				post_author : 'kYGjBlfPNuA3SXCc',
				saved_from_peer : $client->peerUser(
					user_id : 4981944936661060780,
				),
				saved_from_msg_id : 70,
				saved_from_id : $client->peerUser(
					user_id : 3875992538929298192,
				),
				saved_from_name : 'ldznYFNCwe6rL9gK',
				saved_date : 48,
				psa_type : 'QmrJMzpsG7v20W1x',
			),
			via_bot_id : 2101466705542257750,
			via_business_bot_id : -6318909416491228841,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 67,
				reply_to_peer_id : $client->peerUser(
					user_id : 838782461398005148,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '18mABJEK2RtcsQyj',
					date : 99,
					channel_post : 58,
					post_author : 'vkNPb4SKp2XfG1wM',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 80,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'GCmM6BanydUjLieP',
					saved_date : 64,
					psa_type : 'alwoq7YkXiN9RZSt',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 88,
				quote_text : 'Ea3FwO4VKkNpLtRf',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 7,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 71,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 56,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 20,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 36,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 70,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 59,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 28,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 56,
						language : 'vrVpIZhA0qGmjbXi',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 5,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 72,
						user_id : -2654854182277991422,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 93,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 71,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 45,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 15,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 56,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 10,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 64,
						document_id : 7302598717421573166,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 83,
					),
				),
				quote_offset : 52,
				todo_item_id : 83,
			),
			date : 24,
			message : 'sdhN3B4O5Qwc0luR',
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
					length : 58,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 65,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 35,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 89,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 74,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 85,
					language : 'OvLH2d5r9NgqFPyD',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 44,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 90,
					user_id : 4263670107286928461,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 60,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 21,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 98,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 10,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 62,
					document_id : 2843917435370519478,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 27,
				),
			),
			views : 8,
			forwards : 39,
			replies : $client->messageReplies(
				comments : true,
				replies : 44,
				replies_pts : 59,
				recent_repliers : array(
					$client->peerUser(
						user_id : -4300415124679210932,
					),
					$client->peerChat(
						chat_id : -6802802045932826175,
					),
					$client->peerChannel(
						channel_id : 5918482625681698326,
					),
				),
				channel_id : 1533290850845774569,
				max_id : 82,
				read_max_id : 92,
			),
			edit_date : 17,
			post_author : 'sjegOPdqhyZ4STk8',
			grouped_id : 4333118486495739549,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 19,
						reaction : $client->reactionEmpty(...),
						count : 69,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 76,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 56,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5TodvXlt0J7ExOW3',
					reason : 'UvQC8wPeKhN4qcFy',
					text : 'As0lcBiX2hmNzeyF',
				),
			),
			ttl_period : 35,
			quick_reply_shortcut_id : 20,
			effect : -8822679060874703196,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'qGpyOcDVQZ96TWUL',
				text : $client->textWithEntities(
					text : 'cGsWEyaOd3gtY8wS',
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
			report_delivery_until_date : 100,
			paid_message_stars : -5113099928818661181,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -8479282910215311676,
					nanos : 59,
				),
				schedule_date : 76,
			),
			schedule_repeat_period : 53,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 81,
			from_id : $client->peerUser(
				user_id : 4389492282935269610,
			),
			peer_id : $client->peerUser(
				user_id : -1328105687063333383,
			),
			saved_peer_id : $client->peerUser(
				user_id : -5227966513702730809,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 76,
				reply_to_peer_id : $client->peerUser(
					user_id : -6100183933460887785,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'blmMzHFYUBwP276y',
					date : 92,
					channel_post : 60,
					post_author : 'EuP3saUbKZHN8jIx',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 60,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'VZh6jzwuUtJq1Xpo',
					saved_date : 85,
					psa_type : '2jFEIoOY5GAWckZv',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 3,
				quote_text : 'nZ0Ah8mrsuKTNv2j',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 58,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 33,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 95,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 34,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 48,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 9,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 84,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 87,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 11,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 76,
						language : 'eOkb7xRS6Uljzdmv',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 33,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 18,
						user_id : -8452511276304598524,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 67,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 28,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 39,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 8,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 59,
						document_id : -9062497883531220490,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 29,
					),
				),
				quote_offset : 62,
				todo_item_id : 20,
			),
			date : 93,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 26,
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
						date : 47,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 20,
					),
				),
			),
			ttl_period : 34,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3527505558978908321,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5331050560444767714,
			title : 'IN4z5uhGPRvcdsm0',
			photo : $client->chatPhotoEmpty(),
			participants_count : 41,
			date : 38,
			version : 2,
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
				until_date : 65,
			),
		),
		$client->chatForbidden(
			id : -7474207464700017185,
			title : 'zmvI3gha7WOLZ1Ak',
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
			id : 4524688138712805176,
			access_hash : 5631204679843708412,
			title : 'vr5ghwLCmMl48QO3',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 30,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mtR7OqGiuaFBEUIX',
					reason : 'oQK0fNmZS3dI7hg5',
					text : 'MKITQ1RxJVDBAEP5',
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
				until_date : 15,
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
				until_date : 82,
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
				max_id : 78,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : -341609993253288708,
			),
			profile_color : $client->peerColor(
				color : 25,
				background_emoji_id : -2331600834775250524,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 6,
			subscription_until_date : 88,
			bot_verification_icon : 5476156191922353662,
			send_paid_messages_stars : 488574240685165786,
			linked_monoforum_id : 7531029452145513008,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2038595088863707336,
			access_hash : -8508562879839399822,
			title : 'oDeAmgHncPKr5x2b',
			until_date : 74,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6643125192741607671,
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
			id : 8839296432232315939,
			access_hash : 5429684202908115245,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZKVtrF5MwTNu0bQd',
					reason : '0qJFEMeVGRna8v5C',
					text : 'V50ySdPNluiD4hjF',
				),
			),
			bot_inline_placeholder : '4pQMHLtjsGOodu1r',
			lang_code : '4iSba2VYwXjyvPnk',
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
				max_id : 85,
			),
			color : $client->peerColor(
				color : 32,
				background_emoji_id : -3899849417417322389,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : 3368500268154394422,
			),
			bot_active_users : 3,
			bot_verification_icon : 3000828409485098744,
			send_paid_messages_stars : -3461979553828354103,
		),
	),
);
```