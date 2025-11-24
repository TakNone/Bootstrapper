# messages.savedDialogsSlice

**Description** : *Incomplete list of saved message dialogs &raquo; with messages and auxiliary data*

**Layer** : 218

```tl
messages.savedDialogsSlice#44ba9dd9 count:int dialogs:Vector<SavedDialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.SavedDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of saved message dialogs |
| <mark>dialogs</mark> | [`Vector<SavedDialog>`](type/SavedDialog) | List of saved message dialogs |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | List of last messages from dialogs |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.SavedDialogs](type/messages.SavedDialogs)

---

## Example

```php
$messagesSavedDialogs = $client->messages->savedDialogsSlice(
	count : 27,
	dialogs : array(
		$client->savedDialog(
			pinned : true,
			peer : $client->peerUser(
				user_id : -555385917518022537,
			),
			top_message : 89,
		),
		$client->monoForumDialog(
			unread_mark : true,
			nopaid_messages_exception : true,
			peer : $client->peerUser(
				user_id : 4781698869917012634,
			),
			top_message : 30,
			read_inbox_max_id : 3,
			read_outbox_max_id : 52,
			unread_count : 18,
			unread_reactions_count : 44,
			draft : $client->draftMessageEmpty(
				date : 47,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 29,
			peer_id : $client->peerUser(
				user_id : -2716740813523720692,
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
			id : 64,
			from_id : $client->peerUser(
				user_id : 5314338427369083239,
			),
			from_boosts_applied : 34,
			peer_id : $client->peerUser(
				user_id : 9024432281689010493,
			),
			saved_peer_id : $client->peerUser(
				user_id : -8039019656069891517,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -4495174122156857570,
				),
				from_name : 'DMSIvj8l0RGXU1A6',
				date : 41,
				channel_post : 6,
				post_author : 'dxrbYioFWwUDMZ56',
				saved_from_peer : $client->peerUser(
					user_id : 4496930636460168984,
				),
				saved_from_msg_id : 32,
				saved_from_id : $client->peerUser(
					user_id : 5710294387968137752,
				),
				saved_from_name : 'rQfI532tnScUK4xW',
				saved_date : 66,
				psa_type : 'eEhKiL8nS03kqrFN',
			),
			via_bot_id : -1373558245095821181,
			via_business_bot_id : -5506892769390733759,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 79,
				reply_to_peer_id : $client->peerUser(
					user_id : 2044427184862217098,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'QSWqGOn2jAYKw7us',
					date : 76,
					channel_post : 30,
					post_author : 'fJhZV67I0z3rEtK8',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 7,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'IUt7iz2XwHoh4gPF',
					saved_date : 4,
					psa_type : 'kRj3yWm8JpVYiUvw',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 30,
				quote_text : 'LaoIJPxjRCpfhkbN',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 45,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 43,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 49,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 6,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 39,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 6,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 63,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 31,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 74,
						language : 'FRTwPC4vxjyMZIHd',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 60,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 17,
						user_id : 497677966019022927,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 65,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 17,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 63,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 52,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 81,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 46,
						document_id : -853483885185247958,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 49,
					),
				),
				quote_offset : 88,
				todo_item_id : 47,
			),
			date : 100,
			message : 'tg2EUc1NG0JyARid',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 67,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 87,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 80,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 94,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 30,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 36,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 32,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 19,
					language : 'RoltIBgSfXHFiJVN',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 7,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 67,
					user_id : 7240174293215038855,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 5,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 46,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 2,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 60,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 12,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 68,
					document_id : -7154820232782020009,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 76,
				),
			),
			views : 27,
			forwards : 15,
			replies : $client->messageReplies(
				comments : true,
				replies : 70,
				replies_pts : 36,
				recent_repliers : array(
					$client->peerUser(
						user_id : -6545319752932373246,
					),
					$client->peerChat(
						chat_id : 5578318346865503448,
					),
					$client->peerChannel(
						channel_id : 2696896779648979520,
					),
				),
				channel_id : -826601143891278392,
				max_id : 12,
				read_max_id : 4,
			),
			edit_date : 75,
			post_author : 'kDzwhYQB0TO1Mvac',
			grouped_id : 5651895234389621766,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 4,
						reaction : $client->reactionEmpty(...),
						count : 44,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 10,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 71,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'WLBFX0zZ5pg4dbyI',
					reason : 'aTO2hExDSoAfNegw',
					text : 'YTMnwC8yPIr1sO6j',
				),
			),
			ttl_period : 89,
			quick_reply_shortcut_id : 76,
			effect : 5910880967155820053,
			factcheck : $client->factCheck(
				need_check : true,
				country : '4V7muQFaZMxYsBg3',
				text : $client->textWithEntities(
					text : 'HsOcokiB1RVEXzW7',
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
			report_delivery_until_date : 50,
			paid_message_stars : 2613013551598969682,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 1782021575019626848,
					nanos : 19,
				),
				schedule_date : 22,
			),
			schedule_repeat_period : 26,
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
				user_id : -4426674122692118828,
			),
			peer_id : $client->peerUser(
				user_id : 8331226149595109255,
			),
			saved_peer_id : $client->peerUser(
				user_id : 1562476957363930847,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 25,
				reply_to_peer_id : $client->peerUser(
					user_id : -2490317675045510582,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'BWk9NHAqQh36rTpu',
					date : 17,
					channel_post : 63,
					post_author : '7V1MwjEUZhCFbnAW',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 97,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'zx5FSEvAl34tBIVJ',
					saved_date : 65,
					psa_type : 'OsYZ19uznhAJo0Nr',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 45,
				quote_text : 'IWioYUd3ngwF7cmy',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 58,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 96,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 52,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 56,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 62,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 88,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 26,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 54,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 97,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 31,
						language : 'S6H21wTcRzqDEhyY',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 11,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 2,
						user_id : 4181078400912628191,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 19,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 56,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 66,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 78,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 84,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 8,
						document_id : -4760727035924067043,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 42,
					),
				),
				quote_offset : 14,
				todo_item_id : 26,
			),
			date : 88,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 94,
						reaction : $client->reactionEmpty(...),
						count : 98,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 79,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 58,
					),
				),
			),
			ttl_period : 80,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -8841657442788882805,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7172285754028430146,
			title : 'UxTh10FImACN6epY',
			photo : $client->chatPhotoEmpty(),
			participants_count : 77,
			date : 82,
			version : 39,
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
				until_date : 86,
			),
		),
		$client->chatForbidden(
			id : 1312760463608472977,
			title : 'hzFiwdxclPrYQGLA',
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
			id : -7623644461892122414,
			access_hash : 8728220407720206348,
			title : 'DSdmCjQoURu0r7kE',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1O6UsoF8LVjqBE5f',
					reason : 'kCyc9F6RJfQDmWwq',
					text : 'GXBJErRcPDUl5hQv',
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
				until_date : 29,
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
			participants_count : 51,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 10,
			),
			color : $client->peerColor(
				color : 12,
				background_emoji_id : 564196757085745992,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : 8895234738510629444,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 90,
			subscription_until_date : 18,
			bot_verification_icon : 1907672392283477396,
			send_paid_messages_stars : 2558964671242724095,
			linked_monoforum_id : 6962078689746643213,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2496574395717675445,
			access_hash : -2027877577944468374,
			title : 'H5nyBZMxGRmdjqcY',
			until_date : 31,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7082879697825881302,
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
			id : 3664859716360094773,
			access_hash : -7628820232485970272,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MbBxgmnIe4zdvESu',
					reason : 'cR7YJK0tl8N59Zid',
					text : 'CW3DRw2nbXZP0v4k',
				),
			),
			bot_inline_placeholder : 'yNdeiU68OaHrmkWR',
			lang_code : 'Fo2iJnIBcXYKSUjA',
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
				max_id : 26,
			),
			color : $client->peerColor(
				color : 50,
				background_emoji_id : 3165084342114060893,
			),
			profile_color : $client->peerColor(
				color : 84,
				background_emoji_id : -8827040346164577406,
			),
			bot_active_users : 73,
			bot_verification_icon : -1742473658292195524,
			send_paid_messages_stars : 630754341584376737,
		),
	),
);
```