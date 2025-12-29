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
			shortcut_id : 72,
			shortcut : 'TLJNMudPtqXnzvj9',
			top_message : 48,
			count : 16,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 76,
			peer_id : $client->peerUser(
				user_id : -8479087444289018716,
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
				user_id : 7064213620365602964,
			),
			from_boosts_applied : 50,
			peer_id : $client->peerUser(
				user_id : 9026800489655615211,
			),
			saved_peer_id : $client->peerUser(
				user_id : 3942021328328703139,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -192853432277751162,
				),
				from_name : '72MsbmRA0KSxkJca',
				date : 96,
				channel_post : 1,
				post_author : 'aHDkwPji9ohvsFbe',
				saved_from_peer : $client->peerUser(
					user_id : 1707712471391144823,
				),
				saved_from_msg_id : 40,
				saved_from_id : $client->peerUser(
					user_id : 4813034749992669241,
				),
				saved_from_name : 'vRUViAFzJpPcZDEd',
				saved_date : 68,
				psa_type : '0rtYLa2FzWOpEANS',
			),
			via_bot_id : 8797794013216695665,
			via_business_bot_id : 4325244463605856401,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 53,
				reply_to_peer_id : $client->peerUser(
					user_id : -6363203358762493221,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'Li693TfDSUpFqOMk',
					date : 74,
					channel_post : 36,
					post_author : 'ukURJPpSw6MZOj9i',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 52,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'WvQ8DL67hYqX4xPE',
					saved_date : 16,
					psa_type : 'yC56GSklzpnhxru8',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 14,
				quote_text : 'gwRWkmMH2o8OuaSA',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 28,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 80,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 7,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 11,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 56,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 97,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 10,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 16,
						language : 'RU0crAp5LbnPgKdF',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 85,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 15,
						user_id : -7648398035402643628,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 32,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 45,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 93,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 62,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 70,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 75,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 94,
						document_id : -8849731242425023369,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 78,
					),
				),
				quote_offset : 43,
				todo_item_id : 94,
			),
			date : 82,
			message : '65mL2cBUF0jQx8MA',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 2,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 16,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 38,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 75,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 72,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 31,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 96,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 15,
					language : 'OW1Vgm8cDpdPYTSZ',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 97,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 93,
					user_id : -6758200879495283948,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 44,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 36,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 50,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 9,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 14,
					document_id : 7345165358493466506,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 42,
				),
			),
			views : 72,
			forwards : 4,
			replies : $client->messageReplies(
				comments : true,
				replies : 55,
				replies_pts : 14,
				recent_repliers : array(
					$client->peerUser(
						user_id : -3112439111131731792,
					),
					$client->peerChat(
						chat_id : 6454760906877964522,
					),
					$client->peerChannel(
						channel_id : -1671017041380954431,
					),
				),
				channel_id : 2439902688281182010,
				max_id : 17,
				read_max_id : 34,
			),
			edit_date : 40,
			post_author : 'LT673oQdXxJs2bIt',
			grouped_id : -4758693743190098989,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 63,
						reaction : $client->reactionEmpty(...),
						count : 17,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 51,
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
					platform : 'tjdwh35lcPsiEfUX',
					reason : 'mBayeXpoIDdGfVOR',
					text : 'r237zPOxWVRNtSEn',
				),
			),
			ttl_period : 36,
			quick_reply_shortcut_id : 15,
			effect : 8153188713408529140,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'xmhcfpbK5iFsDU7d',
				text : $client->textWithEntities(
					text : 'Eg7TYVaSqpmXvlMf',
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
			report_delivery_until_date : 51,
			paid_message_stars : 2502265946505649933,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 8852294513586218117,
					nanos : 90,
				),
				schedule_date : 22,
			),
			schedule_repeat_period : 69,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 52,
			from_id : $client->peerUser(
				user_id : 1240809891520380841,
			),
			peer_id : $client->peerUser(
				user_id : 3544767849275117439,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8905282640486551570,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 77,
				reply_to_peer_id : $client->peerUser(
					user_id : -5883044742074824990,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'pDQFVUq4d13KskLI',
					date : 74,
					channel_post : 67,
					post_author : '8nrCQVO9PIwKX7mq',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 65,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'bDxZWJ8PdaEzweT3',
					saved_date : 14,
					psa_type : 'yJB5YNL3rxQGkR8C',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 30,
				quote_text : 'NLmb8lU3XArVyejz',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 60,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 51,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 3,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 10,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 81,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 50,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 75,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 6,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 31,
						language : 'rXNdzp4AmfPSUT59',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 50,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 75,
						user_id : -3329482338474875037,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 44,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 52,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 57,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 3,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 93,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 90,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 7,
						document_id : 8168955156941575057,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 70,
					),
				),
				quote_offset : 8,
				todo_item_id : 87,
			),
			date : 80,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 52,
						reaction : $client->reactionEmpty(...),
						count : 1,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 36,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 55,
					),
				),
			),
			ttl_period : 59,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3791304563249847480,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8437483450269072179,
			title : 'nR8BUuxbcvKIXZ2N',
			photo : $client->chatPhotoEmpty(),
			participants_count : 78,
			date : 60,
			version : 94,
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
				until_date : 33,
			),
		),
		$client->chatForbidden(
			id : -6753947253807216799,
			title : 'Ej1zD2YFIrcQuCBW',
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
			id : -8585570644773601233,
			access_hash : 2896422260508174260,
			title : 'x1sCNEBqvFt0PIXY',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'WsVwSCZ1ujkTFXxU',
					reason : 'yO6idctXTJmqUNQ8',
					text : 'ZgnQPX5xHdFcOY4v',
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
				until_date : 68,
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
				until_date : 50,
			),
			participants_count : 29,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 40,
			),
			color : $client->peerColor(
				color : 40,
				background_emoji_id : -353551271308501186,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : 733035599470774502,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 92,
			subscription_until_date : 23,
			bot_verification_icon : -1707233557954839221,
			send_paid_messages_stars : 636475430494468064,
			linked_monoforum_id : -5891982211256173419,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4461111357378437963,
			access_hash : -7977834938465134772,
			title : 'DTBLrgpYm2jaqEey',
			until_date : 0,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2772185015202208088,
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
			id : -9221620200442452220,
			access_hash : 2359540702578491392,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YNLmJ1aeVSk3Wupy',
					reason : 'h1JR4XxPyFSrHnCe',
					text : 'SKlLptwH8vrAojqI',
				),
			),
			bot_inline_placeholder : 'rUIvuXtR6AHySgEM',
			lang_code : 'ljBrbDSyN9pa1F5z',
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
				max_id : 20,
			),
			color : $client->peerColor(
				color : 70,
				background_emoji_id : 4290408087367240510,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : -3464667637917989249,
			),
			bot_active_users : 100,
			bot_verification_icon : 7242361361747176563,
			send_paid_messages_stars : -3478823914428698001,
		),
	),
);
```