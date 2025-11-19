# messages.dialogsSlice

**Description** : *Incomplete list of dialogs with messages and auxiliary data*

**Layer** : 218

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
	count : 72,
	dialogs : array(
		$client->dialog(
			pinned : true,
			unread_mark : true,
			view_forum_as_messages : true,
			peer : $client->peerUser(
				user_id : 3904122435238000103,
			),
			top_message : 30,
			read_inbox_max_id : 11,
			read_outbox_max_id : 97,
			unread_count : 90,
			unread_mentions_count : 51,
			unread_reactions_count : 90,
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 90,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			pts : 97,
			draft : $client->draftMessageEmpty(
				date : 61,
			),
			folder_id : 30,
			ttl_period : 52,
		),
		$client->dialogFolder(
			pinned : true,
			folder : $client->folder(
				autofill_new_broadcasts : true,
				autofill_public_groups : true,
				autofill_new_correspondents : true,
				id : 84,
				title : 'uv1efNU6rG4VMdYa',
				photo : $client->chatPhotoEmpty(),
			),
			peer : $client->peerUser(
				user_id : 6594570529276051917,
			),
			top_message : 47,
			unread_muted_peers_count : 39,
			unread_unmuted_peers_count : 9,
			unread_muted_messages_count : 51,
			unread_unmuted_messages_count : 44,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 35,
			peer_id : $client->peerUser(
				user_id : 7243269892083769223,
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
			id : 50,
			from_id : $client->peerUser(
				user_id : -2753006698286404844,
			),
			from_boosts_applied : 70,
			peer_id : $client->peerUser(
				user_id : -5026695091771538483,
			),
			saved_peer_id : $client->peerUser(
				user_id : -25983131525358726,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 1866151012220824166,
				),
				from_name : 'jA7wKNPS26Bfz8Vl',
				date : 94,
				channel_post : 97,
				post_author : 'Csynqz6K4N0lgvYu',
				saved_from_peer : $client->peerUser(
					user_id : 265965134710575051,
				),
				saved_from_msg_id : 33,
				saved_from_id : $client->peerUser(
					user_id : 4900205024018381186,
				),
				saved_from_name : 't4XoFlSfiVw2561x',
				saved_date : 8,
				psa_type : 'Z5tgSO4iEkpsR7DK',
			),
			via_bot_id : -8294371479832328004,
			via_business_bot_id : 5829649105039837630,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 34,
				reply_to_peer_id : $client->peerUser(
					user_id : -4478270979212594129,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'pLRUmbDfczQGkrya',
					date : 27,
					channel_post : 50,
					post_author : 'OW8fDFsMYEbol69Z',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 45,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'yAsFIVo4MptgXkcn',
					saved_date : 32,
					psa_type : 'VURJf0upkIaMPilb',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 68,
				quote_text : '6ajfQM4mlvDAXo5p',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 73,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 98,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 17,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 34,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 36,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 33,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 53,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 72,
						language : 'SeRlnbB4Z9Wwx6fY',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 49,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 12,
						user_id : -7290251148204672634,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 96,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 38,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 25,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 64,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 8,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 24,
						document_id : 1863419656984437329,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 54,
					),
				),
				quote_offset : 74,
				todo_item_id : 79,
			),
			date : 41,
			message : 'jrUf0bKkNglh6B8s',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 6,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 28,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 70,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 78,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 59,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 60,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 79,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 7,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 37,
					language : 'QNbTSUEYi7HJZBAM',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 37,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 80,
					user_id : 5071674773947631290,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 50,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 74,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 39,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 24,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 59,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 41,
					document_id : 480080873222202584,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 25,
				),
			),
			views : 99,
			forwards : 38,
			replies : $client->messageReplies(
				comments : true,
				replies : 31,
				replies_pts : 34,
				recent_repliers : array(
					$client->peerUser(
						user_id : 3759687944309968617,
					),
					$client->peerChat(
						chat_id : 1802835748607845711,
					),
					$client->peerChannel(
						channel_id : -2158921007714871026,
					),
				),
				channel_id : 2637935202820822851,
				max_id : 50,
				read_max_id : 60,
			),
			edit_date : 69,
			post_author : 'mikGD1lWOwETPSfh',
			grouped_id : 5040132826402313357,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 77,
						reaction : $client->reactionEmpty(...),
						count : 64,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 16,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 40,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'U06G5XWmxwVJiLvq',
					reason : 'BMbZxXt16vow2OnJ',
					text : 'MgyPBmDZh2o54uxK',
				),
			),
			ttl_period : 51,
			quick_reply_shortcut_id : 7,
			effect : 4385553901535984471,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'pvLluocWjk8zHZmf',
				text : $client->textWithEntities(
					text : 'mvtsDHaOSIWwz1h9',
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
			report_delivery_until_date : 25,
			paid_message_stars : -8394830637588542420,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 5842742399321625471,
					nanos : 96,
				),
				schedule_date : 13,
			),
			schedule_repeat_period : 52,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 89,
			from_id : $client->peerUser(
				user_id : -8622626103674320636,
			),
			peer_id : $client->peerUser(
				user_id : 7870824191512279206,
			),
			saved_peer_id : $client->peerUser(
				user_id : -2663329000958127477,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 26,
				reply_to_peer_id : $client->peerUser(
					user_id : 8284168838837037874,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'VwdlqKv5rOUzkZHM',
					date : 48,
					channel_post : 47,
					post_author : 'siDAd3xfSEZctbQ0',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 90,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'p4gZfMi5Yrqd7Cam',
					saved_date : 73,
					psa_type : 'mN8lRYw7TGV1pWen',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 74,
				quote_text : 'xITCGrLguRVs1eB3',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 13,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 53,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 77,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 52,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 52,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 70,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 48,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 19,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 44,
						language : 'y0BdoMzaXvhxH7u6',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 64,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 95,
						user_id : 2534668383351114366,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 29,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 73,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 54,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 56,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 40,
						document_id : -857100336284730957,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 4,
					),
				),
				quote_offset : 21,
				todo_item_id : 17,
			),
			date : 12,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 10,
						reaction : $client->reactionEmpty(...),
						count : 70,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 89,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 95,
					),
				),
			),
			ttl_period : 80,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7984083681671079548,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6722504925227298133,
			title : 'KWxtFwvC8g4cdBP7',
			photo : $client->chatPhotoEmpty(),
			participants_count : 47,
			date : 15,
			version : 33,
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
				until_date : 92,
			),
		),
		$client->chatForbidden(
			id : 2640456272217872121,
			title : 'kJMs9aoNC5IHZnqK',
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
			id : -6735170192131400393,
			access_hash : -3245648110393228088,
			title : 'Kzcwfyj3QP08245H',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 78,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XUvFlam9f0EG3MhC',
					reason : 'XYMcohf70GC4xy8V',
					text : 'wRxckFECe8AUJfap',
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
				until_date : 75,
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
				until_date : 91,
			),
			participants_count : 10,
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
				color : 45,
				background_emoji_id : -963982583956843444,
			),
			profile_color : $client->peerColor(
				color : 13,
				background_emoji_id : 6301542951125184910,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 19,
			subscription_until_date : 50,
			bot_verification_icon : -9059910924011571248,
			send_paid_messages_stars : -7703689250299185551,
			linked_monoforum_id : -7672447191504488566,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6478346389946729323,
			access_hash : -7968193794244283061,
			title : 'aWreLXtKQbAiwgIj',
			until_date : 51,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3113595496498304594,
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
			id : 6444664619186162469,
			access_hash : -5713757843705462334,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tsayl4P82BrcIVS1',
					reason : 'yCT6PEtb2vxk7LKH',
					text : 'zaD4ErBJtNx01oZI',
				),
			),
			bot_inline_placeholder : 'gnhzcEjUAaC4ZrYd',
			lang_code : 'VPg47yQAWhNz8djH',
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
				color : 67,
				background_emoji_id : -2588726347124407683,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : 2607300718806587818,
			),
			bot_active_users : 57,
			bot_verification_icon : -580176836557895923,
			send_paid_messages_stars : 3004446720219827984,
		),
	),
);
```