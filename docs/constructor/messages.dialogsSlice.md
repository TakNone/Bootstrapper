# messages.dialogsSlice

**Description** : *Incomplete list of dialogs with messages and auxiliary data*

**Layer** : 222

```tl
messages.dialogsSlice#71e094f3 count:int dialogs:Vector<Dialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.Dialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of dialogs |
| <mark>dialogs</mark> | [`Vector<Dialog>`](type/Dialog) | List of dialogs |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | List of last messages from dialogs |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in dialogs |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in messages and chats |

---

## Type

[messages.Dialogs](type/messages.Dialogs)

---

## Example

```php
$messagesDialogs = $client->messages->dialogsSlice(
	count : 47,
	dialogs : array(
		$client->dialog(
			pinned : true,
			unread_mark : true,
			view_forum_as_messages : true,
			peer : $client->peerUser(
				user_id : -6172466213839163160,
			),
			top_message : 33,
			read_inbox_max_id : 81,
			read_outbox_max_id : 13,
			unread_count : 0,
			unread_mentions_count : 55,
			unread_reactions_count : 35,
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 74,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			pts : 20,
			draft : $client->draftMessageEmpty(
				date : 92,
			),
			folder_id : 11,
			ttl_period : 88,
		),
		$client->dialogFolder(
			pinned : true,
			folder : $client->folder(
				autofill_new_broadcasts : true,
				autofill_public_groups : true,
				autofill_new_correspondents : true,
				id : 64,
				title : 'vD2CtdTQNFL6HUi7',
				photo : $client->chatPhotoEmpty(),
			),
			peer : $client->peerUser(
				user_id : 1129387683139795865,
			),
			top_message : 72,
			unread_muted_peers_count : 3,
			unread_unmuted_peers_count : 98,
			unread_muted_messages_count : 8,
			unread_unmuted_messages_count : 82,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 30,
			peer_id : $client->peerUser(
				user_id : -4858321000248574758,
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
			id : 74,
			from_id : $client->peerUser(
				user_id : 13627119150827719,
			),
			from_boosts_applied : 40,
			peer_id : $client->peerUser(
				user_id : 3556265096440939424,
			),
			saved_peer_id : $client->peerUser(
				user_id : 4520944550681717117,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 1011855454390190809,
				),
				from_name : 'fUnrPx2t3Sslzw6j',
				date : 74,
				channel_post : 31,
				post_author : 'CwJNZzbKDcQidoVy',
				saved_from_peer : $client->peerUser(
					user_id : 7682471004319932219,
				),
				saved_from_msg_id : 55,
				saved_from_id : $client->peerUser(
					user_id : 7004895186162031999,
				),
				saved_from_name : '7WMhXqYrbekxl54d',
				saved_date : 99,
				psa_type : 'h9vEaXPyNFrJHf0d',
			),
			via_bot_id : -2879573348116510542,
			via_business_bot_id : -4420936786608576104,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 52,
				reply_to_peer_id : $client->peerUser(
					user_id : -1436582196968611069,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'KF5M8u3ADevZftmz',
					date : 8,
					channel_post : 77,
					post_author : 'sIeozM8GxdfVFDgN',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 75,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'ED9z87cRfIgjLOAJ',
					saved_date : 66,
					psa_type : 'cCmFeN0ZK1USgAvr',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 16,
				quote_text : 'Agvsuxci2RXpV3GY',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 30,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 21,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 82,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 94,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 56,
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
						length : 13,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 54,
						language : '4KDRuvl8QBWAJ1Oy',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 81,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 31,
						user_id : -3420188563212473740,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 89,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 24,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 15,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 33,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 49,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 17,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 17,
						document_id : 6550732622066531109,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 28,
					),
				),
				quote_offset : 38,
				todo_item_id : 34,
			),
			date : 0,
			message : 'W7m5ifEnhY2vJ8eP',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 95,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 6,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 7,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 57,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 80,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 74,
					language : 'gydpxrfmI8UVJue3',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 96,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 56,
					user_id : -3233483385961519479,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 64,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 92,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 33,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 48,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 87,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 41,
					document_id : 8393495597408328445,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 31,
				),
			),
			views : 73,
			forwards : 99,
			replies : $client->messageReplies(
				comments : true,
				replies : 64,
				replies_pts : 60,
				recent_repliers : array(
					$client->peerUser(
						user_id : -3743254039392789312,
					),
					$client->peerChat(
						chat_id : -682128040147504371,
					),
					$client->peerChannel(
						channel_id : 1345266138472120832,
					),
				),
				channel_id : 3419880207224702251,
				max_id : 10,
				read_max_id : 92,
			),
			edit_date : 58,
			post_author : 'roV2YqkIWKZNL3zA',
			grouped_id : -2598157292771357006,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 48,
						reaction : $client->reactionEmpty(...),
						count : 41,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 13,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 25,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6gANIDphzWBOrwj0',
					reason : 'wQpLAbvEohGaJBKl',
					text : 'A3GozvV7OPhdRqUk',
				),
			),
			ttl_period : 19,
			quick_reply_shortcut_id : 8,
			effect : 8748481977555162552,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'FXQ1CR2tuw4KW0aq',
				text : $client->textWithEntities(
					text : 'Xy2daOWQgYGBnbui',
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
			report_delivery_until_date : 56,
			paid_message_stars : 4506050121449294038,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 5265139825627532847,
					nanos : 76,
				),
				schedule_date : 99,
			),
			schedule_repeat_period : 1,
			summary_from_language : 'B1gwMSF6CJZufsLa',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 42,
			from_id : $client->peerUser(
				user_id : -5610621959529673962,
			),
			peer_id : $client->peerUser(
				user_id : -6382783428699018731,
			),
			saved_peer_id : $client->peerUser(
				user_id : -1371500763698697949,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 50,
				reply_to_peer_id : $client->peerUser(
					user_id : -1032965699198992349,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'q6dVAptnwzgWls0U',
					date : 15,
					channel_post : 53,
					post_author : 'oOB9PREf4sx7CUrj',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 98,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'iXQO7VSvgkWhZJC3',
					saved_date : 36,
					psa_type : 'czojnaEFs35SMX8g',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 44,
				quote_text : 'SmFU1PuvrAYcdCWK',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 16,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 72,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 59,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 50,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 62,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 66,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 79,
						language : 'KDvz7WVRopLJuTYr',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 7,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 39,
						user_id : 6818842056836385404,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 17,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 88,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 73,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 77,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 60,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 26,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 30,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 47,
						document_id : -528267037381985541,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 10,
					),
				),
				quote_offset : 16,
				todo_item_id : 48,
			),
			date : 10,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 52,
						reaction : $client->reactionEmpty(...),
						count : 59,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 25,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 19,
					),
				),
			),
			ttl_period : 3,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -9173515539918348260,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 888124525014782396,
			title : 'E4InvWCdUVOg7ymx',
			photo : $client->chatPhotoEmpty(),
			participants_count : 92,
			date : 11,
			version : 21,
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
				until_date : 56,
			),
		),
		$client->chatForbidden(
			id : -2239732887947511193,
			title : 'fiaTzRGISCUWtEr3',
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
			id : -7983891376841407780,
			access_hash : -5457633860624791454,
			title : 'yt1DGc0Irno3wksZ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'q6DxN7rwAkbd8oGt',
					reason : 'QLdZgikH5tsMAhzD',
					text : 'oSjc5zkUlgbi1MrH',
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
				until_date : 53,
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
				until_date : 83,
			),
			participants_count : 77,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 81,
			),
			color : $client->peerColor(
				color : 42,
				background_emoji_id : 3388817077190639841,
			),
			profile_color : $client->peerColor(
				color : 35,
				background_emoji_id : 3507871827458393058,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 29,
			subscription_until_date : 66,
			bot_verification_icon : 4675707411760248194,
			send_paid_messages_stars : 9072755255438878361,
			linked_monoforum_id : 7077730830703714690,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 1133185977675860932,
			access_hash : -4149015544966335856,
			title : 'sUNCVXve0pu16HSB',
			until_date : 80,
		),
	),
	users : array(
		$client->userEmpty(
			id : -948280878983164329,
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
			id : 7188674004276438575,
			access_hash : 4080533440945651788,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 44,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kw3C0fuOvV1F2cpY',
					reason : 'hQkBEnIuAmoy9pZG',
					text : 'KfGNr71L9vtFbXiT',
				),
			),
			bot_inline_placeholder : 'rptPRd1wlXTzxgSA',
			lang_code : 'J5wTKFknuYB7sbOc',
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
				max_id : 58,
			),
			color : $client->peerColor(
				color : 10,
				background_emoji_id : -1686371000525305815,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : -4196468136707116416,
			),
			bot_active_users : 54,
			bot_verification_icon : -493854882012484568,
			send_paid_messages_stars : -4278502975431256667,
		),
	),
);
```