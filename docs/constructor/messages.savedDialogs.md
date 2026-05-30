# messages.savedDialogs

**Description** : *Represents some saved message dialogs &raquo;*

**Layer** : 222

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
				user_id : 5509373433064893932,
			),
			top_message : 16,
		),
		$client->monoForumDialog(
			unread_mark : true,
			nopaid_messages_exception : true,
			peer : $client->peerUser(
				user_id : 6859306084221995361,
			),
			top_message : 64,
			read_inbox_max_id : 50,
			read_outbox_max_id : 36,
			unread_count : 8,
			unread_reactions_count : 13,
			draft : $client->draftMessageEmpty(
				date : 16,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 10,
			peer_id : $client->peerUser(
				user_id : 2283278806997911733,
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
			id : 95,
			from_id : $client->peerUser(
				user_id : -8145481119662956114,
			),
			from_boosts_applied : 65,
			peer_id : $client->peerUser(
				user_id : 1417863778893891088,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8695428610354415873,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -6275069132044587302,
				),
				from_name : 'R1p4hOQK9y8WlCw6',
				date : 92,
				channel_post : 24,
				post_author : '9XAbOclBJqYoiT61',
				saved_from_peer : $client->peerUser(
					user_id : 183177200550258177,
				),
				saved_from_msg_id : 48,
				saved_from_id : $client->peerUser(
					user_id : -6844902864900615927,
				),
				saved_from_name : 'KEkcFbR1Z80ayTGU',
				saved_date : 23,
				psa_type : 'YrXVl5vLawiQgn1o',
			),
			via_bot_id : -7115278345512349971,
			via_business_bot_id : -4189245603292618896,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 44,
				reply_to_peer_id : $client->peerUser(
					user_id : -8065517933862353541,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '1eIs2f3pLh5NcXaP',
					date : 74,
					channel_post : 0,
					post_author : 'rEW3G2pgmnK1jxM0',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 33,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'X19hftVnOzMEiQb2',
					saved_date : 90,
					psa_type : '85rCgJjhALxTUp1Q',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 78,
				quote_text : 'iytl0zKXhUDGYOqj',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 0,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 28,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 93,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 87,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 90,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 70,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 98,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 31,
						language : 'AZ1vzBntwbTIr5KM',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 68,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 67,
						user_id : -3505522265871501768,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 3,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 51,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 74,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 10,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 98,
						document_id : 4818085068146766023,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 9,
					),
				),
				quote_offset : 26,
				todo_item_id : 57,
			),
			date : 92,
			message : 'y9eG3ojsbRznKpDJ',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 3,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 87,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 69,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 56,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 79,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 2,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 94,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 40,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 74,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 37,
					language : 'CNBFLnDeKmpld19i',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 68,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : 1012689784754510817,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 49,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 17,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 52,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 86,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 60,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 9,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 30,
					document_id : 2857315890547041548,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 8,
				),
			),
			views : 39,
			forwards : 41,
			replies : $client->messageReplies(
				comments : true,
				replies : 7,
				replies_pts : 59,
				recent_repliers : array(
					$client->peerUser(
						user_id : -908196505723572697,
					),
					$client->peerChat(
						chat_id : 1512096120405993002,
					),
					$client->peerChannel(
						channel_id : -3624829470360358974,
					),
				),
				channel_id : 4520729453212288120,
				max_id : 37,
				read_max_id : 13,
			),
			edit_date : 67,
			post_author : 'kQmPuCohjabMdID7',
			grouped_id : -3655003154245336558,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 80,
						reaction : $client->reactionEmpty(...),
						count : 7,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 52,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 29,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2SNHeL0MKu1sRWEy',
					reason : 'mjDAXCd5agt4qlby',
					text : 'PNvz4crQ5TVx6pgC',
				),
			),
			ttl_period : 67,
			quick_reply_shortcut_id : 98,
			effect : 1578463878713745955,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'oJwZbXNam5zFn3jA',
				text : $client->textWithEntities(
					text : 'SoNK6w1BfImjsyYL',
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
			report_delivery_until_date : 37,
			paid_message_stars : 1824865364616371886,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 5013012900921853790,
					nanos : 94,
				),
				schedule_date : 75,
			),
			schedule_repeat_period : 72,
			summary_from_language : '34fyq2UcBGPAvwbr',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 24,
			from_id : $client->peerUser(
				user_id : 6234724808737937405,
			),
			peer_id : $client->peerUser(
				user_id : 8265843078471331677,
			),
			saved_peer_id : $client->peerUser(
				user_id : 4399028540637674342,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 32,
				reply_to_peer_id : $client->peerUser(
					user_id : 8214452479679379405,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'EqaAyB2PVXdOrLew',
					date : 63,
					channel_post : 67,
					post_author : 'W7mvF1nAZkSu9bO0',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 96,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '6ikcKDV2lBf0APSM',
					saved_date : 1,
					psa_type : 'a6Ry3d5Hm8h1jsIv',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 74,
				quote_text : '4tTZIdmfh7kSxPNY',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 86,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 36,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 83,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 1,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 82,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 52,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 54,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 77,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 42,
						language : 'm3DUuYTxkBiCn9Mr',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 87,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : -3959248141296388807,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 39,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 22,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 38,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 29,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 25,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 85,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 39,
						document_id : -8381007348793392936,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 59,
					),
				),
				quote_offset : 90,
				todo_item_id : 59,
			),
			date : 28,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 50,
						reaction : $client->reactionEmpty(...),
						count : 18,
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
						count : 63,
					),
				),
			),
			ttl_period : 12,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -601729882436034319,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6635268794111074212,
			title : 'wgUXPBnhOM4yKvDa',
			photo : $client->chatPhotoEmpty(),
			participants_count : 55,
			date : 76,
			version : 70,
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
				until_date : 40,
			),
		),
		$client->chatForbidden(
			id : -944224354229824633,
			title : 'csjv6M7azLCN8QEI',
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
			id : 5653317034162789764,
			access_hash : 6275620510175203824,
			title : 'MGtSCHEf5oBNuRew',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'zx7iUwvL6hD8T4EF',
					reason : 'vPJ1jMYoe5izhOsg',
					text : 'KvcaqOP0pg3Z9LhB',
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
				until_date : 5,
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
				until_date : 75,
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
				max_id : 91,
			),
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -7993611468334763686,
			),
			profile_color : $client->peerColor(
				color : 93,
				background_emoji_id : -1314359887933629139,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 4,
			subscription_until_date : 70,
			bot_verification_icon : -4321407846505586816,
			send_paid_messages_stars : 5630165221781011296,
			linked_monoforum_id : -638398615953172376,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 4939343993718192361,
			access_hash : 6224705784536053284,
			title : '0OulbJtmed5AP91Z',
			until_date : 94,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7791338300450504673,
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
			id : -4486783232806582983,
			access_hash : 6335298618803692674,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 15,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cGjk8xVELR94ZfoH',
					reason : 'hvtfjcUoyxI8sBRp',
					text : 'PTlWVCsnNhyFKIYB',
				),
			),
			bot_inline_placeholder : 'sTuMC9HaPjvrn6Vb',
			lang_code : 'fJUdXnespA0LS8Vk',
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
				max_id : 4,
			),
			color : $client->peerColor(
				color : 81,
				background_emoji_id : 3716750662341867172,
			),
			profile_color : $client->peerColor(
				color : 99,
				background_emoji_id : -1288147770621706449,
			),
			bot_active_users : 48,
			bot_verification_icon : -3328094445636527391,
			send_paid_messages_stars : 7165126731493120082,
		),
	),
);
```