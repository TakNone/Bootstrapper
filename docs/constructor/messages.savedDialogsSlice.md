# messages.savedDialogsSlice

**Description** : *Incomplete list of saved message dialogs &raquo; with messages and auxiliary data*

**Layer** : 222

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
	count : 38,
	dialogs : array(
		$client->savedDialog(
			pinned : true,
			peer : $client->peerUser(
				user_id : 4190859064461583757,
			),
			top_message : 47,
		),
		$client->monoForumDialog(
			unread_mark : true,
			nopaid_messages_exception : true,
			peer : $client->peerUser(
				user_id : -2612982975919155202,
			),
			top_message : 67,
			read_inbox_max_id : 6,
			read_outbox_max_id : 15,
			unread_count : 74,
			unread_reactions_count : 91,
			draft : $client->draftMessageEmpty(
				date : 63,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 29,
			peer_id : $client->peerUser(
				user_id : -6863487962565357852,
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
			id : 71,
			from_id : $client->peerUser(
				user_id : -3720515247324341738,
			),
			from_boosts_applied : 99,
			peer_id : $client->peerUser(
				user_id : 7575110187579367263,
			),
			saved_peer_id : $client->peerUser(
				user_id : -2535988538436710396,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 5911713586700616735,
				),
				from_name : 'NDwYKJrvWl5juAGR',
				date : 33,
				channel_post : 97,
				post_author : 'qKIZtL4FnJoPVwQ0',
				saved_from_peer : $client->peerUser(
					user_id : 5982773687935479750,
				),
				saved_from_msg_id : 64,
				saved_from_id : $client->peerUser(
					user_id : 8079969778214512233,
				),
				saved_from_name : 'p9YbIQxa4PiCWEnK',
				saved_date : 71,
				psa_type : '6LmgyMenF4wqbV5t',
			),
			via_bot_id : -8625593014444957825,
			via_business_bot_id : 7661048401773118561,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 61,
				reply_to_peer_id : $client->peerUser(
					user_id : 1204362925484786208,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '6Kah8yfZ0pUVBuCt',
					date : 78,
					channel_post : 64,
					post_author : 'VQUu7KlFiZJPXIzE',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 3,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'GMAgDFl6zPrxpSt4',
					saved_date : 87,
					psa_type : '1yCSk3TjBqLu7bop',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 73,
				quote_text : '9foIgCXMb4H3mUae',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 21,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 19,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 5,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 54,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 58,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 42,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 87,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 91,
						language : 'ilV3o8mztcBp6MIU',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 10,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 36,
						user_id : -2289619076897715937,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 5,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 20,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 93,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 98,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 28,
						document_id : -976917212204065573,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 45,
					),
				),
				quote_offset : 75,
				todo_item_id : 64,
			),
			date : 59,
			message : 'FvW1LVGOp2JA8ruP',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 78,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 16,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 29,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 53,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 29,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 99,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 46,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 66,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 57,
					language : 'xrBlpkfvy9WHtaTG',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 38,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 64,
					user_id : -2430845807064210520,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 75,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 28,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 33,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 2,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 6,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 18,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 50,
					document_id : -4204787110522146341,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 19,
				),
			),
			views : 65,
			forwards : 91,
			replies : $client->messageReplies(
				comments : true,
				replies : 16,
				replies_pts : 62,
				recent_repliers : array(
					$client->peerUser(
						user_id : -6383725515714361491,
					),
					$client->peerChat(
						chat_id : 8100457954241808524,
					),
					$client->peerChannel(
						channel_id : 7594531696070533091,
					),
				),
				channel_id : -906554579893220512,
				max_id : 30,
				read_max_id : 61,
			),
			edit_date : 2,
			post_author : '2syFTo3XnqjIwLPl',
			grouped_id : -1782392093726431464,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 53,
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
						date : 61,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 2,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6pFcJAqYO7ogVsZu',
					reason : 'v4DQ8Fcuprs7oAwk',
					text : 'bA7L4j3sTMIdD8Zg',
				),
			),
			ttl_period : 31,
			quick_reply_shortcut_id : 95,
			effect : -8957181095083650605,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'LUKFZc97zphx5NbO',
				text : $client->textWithEntities(
					text : 'nUNLjKGPArzHXqIk',
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
			report_delivery_until_date : 90,
			paid_message_stars : 2059400621189742315,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 802393457368150774,
					nanos : 38,
				),
				schedule_date : 53,
			),
			schedule_repeat_period : 84,
			summary_from_language : 'V18eiLcBhk7bXsDG',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 30,
			from_id : $client->peerUser(
				user_id : 5755865188693374305,
			),
			peer_id : $client->peerUser(
				user_id : -290138049972994935,
			),
			saved_peer_id : $client->peerUser(
				user_id : -1285763710298176498,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 73,
				reply_to_peer_id : $client->peerUser(
					user_id : 1916328703227794675,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'lENY6AvPGmet4gJu',
					date : 41,
					channel_post : 44,
					post_author : 'AiV8vW5g69pPeuOD',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 69,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'xAHTEznibLVtSJ9y',
					saved_date : 68,
					psa_type : 'aYq2UFAtVysNehIm',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 74,
				quote_text : '9ylWT3Lvkt8PsVKY',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 42,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 86,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 72,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 27,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 66,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 83,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 26,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 41,
						language : 'qYTasguN3x8mzAXC',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 50,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 81,
						user_id : -8592281028710192158,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 1,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 21,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 77,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 2,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 51,
						document_id : -5907040697408163889,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 55,
					),
				),
				quote_offset : 28,
				todo_item_id : 26,
			),
			date : 22,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 26,
						reaction : $client->reactionEmpty(...),
						count : 65,
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
						count : 85,
					),
				),
			),
			ttl_period : 69,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 972767216888851704,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7998748066327947259,
			title : 'VcQb7mTKJz5CqawY',
			photo : $client->chatPhotoEmpty(),
			participants_count : 61,
			date : 13,
			version : 71,
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
				until_date : 57,
			),
		),
		$client->chatForbidden(
			id : -7543489349550621293,
			title : 'F01Ne85I7aCMxpGm',
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
			id : -5197113374892731800,
			access_hash : -4415189403481007749,
			title : 'BEgtxPr37SQ4o8WO',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HlOVgJ2AkFMh1w5q',
					reason : 'W3HlAZ7ObIMiGrmX',
					text : 'IFX3AEgUV9sMbH8W',
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
				until_date : 81,
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
			participants_count : 47,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 95,
			),
			color : $client->peerColor(
				color : 95,
				background_emoji_id : -91553713535133256,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : 7601795763477448728,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 6,
			subscription_until_date : 7,
			bot_verification_icon : 4450426565504733949,
			send_paid_messages_stars : -6058909617521369929,
			linked_monoforum_id : 8328232117424996375,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -3893992915153085230,
			access_hash : -134078610972779378,
			title : 'KU7tHv1aFqGnXLAV',
			until_date : 77,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2431268076424682025,
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
			id : -7830271422905673609,
			access_hash : 5641553309710630501,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'c79F2nkfhPQtrl5T',
					reason : 'L8u9Sp5XxhodvnAb',
					text : 'vlcDFnhmEgB4Tfku',
				),
			),
			bot_inline_placeholder : '6UoFY13SxmNXgbOV',
			lang_code : 'buXT3EGs7Urm0cZB',
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
				max_id : 31,
			),
			color : $client->peerColor(
				color : 56,
				background_emoji_id : 3090765813292739821,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : -8653529851886023680,
			),
			bot_active_users : 89,
			bot_verification_icon : -8327076801214108462,
			send_paid_messages_stars : 4752387535916214691,
		),
	),
);
```