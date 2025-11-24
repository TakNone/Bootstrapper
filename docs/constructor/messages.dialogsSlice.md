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
	count : 74,
	dialogs : array(
		$client->dialog(
			pinned : true,
			unread_mark : true,
			view_forum_as_messages : true,
			peer : $client->peerUser(
				user_id : -9024214230773253466,
			),
			top_message : 58,
			read_inbox_max_id : 16,
			read_outbox_max_id : 16,
			unread_count : 92,
			unread_mentions_count : 42,
			unread_reactions_count : 78,
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 36,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			pts : 13,
			draft : $client->draftMessageEmpty(
				date : 98,
			),
			folder_id : 31,
			ttl_period : 47,
		),
		$client->dialogFolder(
			pinned : true,
			folder : $client->folder(
				autofill_new_broadcasts : true,
				autofill_public_groups : true,
				autofill_new_correspondents : true,
				id : 18,
				title : 'zEXPZ0LJlys5632B',
				photo : $client->chatPhotoEmpty(),
			),
			peer : $client->peerUser(
				user_id : -4845729776968420168,
			),
			top_message : 57,
			unread_muted_peers_count : 54,
			unread_unmuted_peers_count : 31,
			unread_muted_messages_count : 73,
			unread_unmuted_messages_count : 57,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 15,
			peer_id : $client->peerUser(
				user_id : -946448898403307595,
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
			id : 68,
			from_id : $client->peerUser(
				user_id : 5720795651719019202,
			),
			from_boosts_applied : 88,
			peer_id : $client->peerUser(
				user_id : 8895079055707091686,
			),
			saved_peer_id : $client->peerUser(
				user_id : -3472996385455302353,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -3748179490986433440,
				),
				from_name : 'YiC7N9fv4uL2JR6n',
				date : 39,
				channel_post : 46,
				post_author : 'IZzHG5V7T3hbPWKO',
				saved_from_peer : $client->peerUser(
					user_id : 3379718945300423535,
				),
				saved_from_msg_id : 91,
				saved_from_id : $client->peerUser(
					user_id : 2588343786715961875,
				),
				saved_from_name : 'wm9Vk3lyeugBtLXK',
				saved_date : 72,
				psa_type : 'Z6OA0RF9MoENH7if',
			),
			via_bot_id : 8371491929435470556,
			via_business_bot_id : 546192654421773950,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 19,
				reply_to_peer_id : $client->peerUser(
					user_id : 7134420513952955479,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'DZKSmYa3vzJBuqnf',
					date : 86,
					channel_post : 54,
					post_author : 'UdF7PeZHLwEWzqQO',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 11,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'naWGmY7ltJxTZQdc',
					saved_date : 39,
					psa_type : 'mSJ0NvYWX86zdoyq',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 26,
				quote_text : 'UeHaZur7BmcShpq0',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 50,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 13,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 3,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 69,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 73,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 38,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 37,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 19,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 36,
						language : 'Lf2QAGnFvySqraxl',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 88,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 15,
						user_id : -2220120563945727434,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 65,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 34,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 19,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 83,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 90,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 65,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 24,
						document_id : -4864708259571159195,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 7,
					),
				),
				quote_offset : 58,
				todo_item_id : 69,
			),
			date : 87,
			message : 'AChvstjZBg1ocwNW',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 8,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 90,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 69,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 58,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 54,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 11,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 85,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 22,
					language : '1XgNWqBA8OydD5RK',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 14,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 91,
					user_id : -8903333654150212885,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 42,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 53,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 97,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 53,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 90,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 71,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 50,
					document_id : 7469397578541650753,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 73,
				),
			),
			views : 64,
			forwards : 96,
			replies : $client->messageReplies(
				comments : true,
				replies : 84,
				replies_pts : 14,
				recent_repliers : array(
					$client->peerUser(
						user_id : 3202825599482849874,
					),
					$client->peerChat(
						chat_id : -6186477731533695744,
					),
					$client->peerChannel(
						channel_id : -1155087516900928358,
					),
				),
				channel_id : 5762823249794441764,
				max_id : 20,
				read_max_id : 5,
			),
			edit_date : 46,
			post_author : 'mYWePUJ79ofiOZaA',
			grouped_id : -8906442198296971278,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 9,
						reaction : $client->reactionEmpty(...),
						count : 97,
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
						count : 16,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XekLvG25ZCoAliV0',
					reason : 'Bs3Wy504xXRcotFd',
					text : 'XkYHKp4bWiI59wtC',
				),
			),
			ttl_period : 48,
			quick_reply_shortcut_id : 37,
			effect : -5135208688117151798,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'PFaMBskSqC53cOjn',
				text : $client->textWithEntities(
					text : '5AYFZSuJvBrxa0tR',
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
			paid_message_stars : 6457588738999150147,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -4645508436610673042,
					nanos : 45,
				),
				schedule_date : 71,
			),
			schedule_repeat_period : 100,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 25,
			from_id : $client->peerUser(
				user_id : 8402466457633440351,
			),
			peer_id : $client->peerUser(
				user_id : -3381434833609703842,
			),
			saved_peer_id : $client->peerUser(
				user_id : 2214510049847115022,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 77,
				reply_to_peer_id : $client->peerUser(
					user_id : -2301179006738101591,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'Cl46HJfFX2j7b9a3',
					date : 49,
					channel_post : 49,
					post_author : 'HnsCN54ejlWS30iy',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 79,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'aTGvYHm6ftMP8Rc4',
					saved_date : 97,
					psa_type : 'vt9diNeIjWb5f4so',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 93,
				quote_text : 'My6j23Visvw1OYkp',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 74,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 21,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 40,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 21,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 27,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 90,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 37,
						language : 'Uw6j8BXpNn2PC9dy',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 98,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 18,
						user_id : -8659218208419214694,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 2,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 21,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 73,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 100,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 58,
						document_id : -6615677553625202948,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 1,
					),
				),
				quote_offset : 77,
				todo_item_id : 9,
			),
			date : 44,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 84,
						reaction : $client->reactionEmpty(...),
						count : 87,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 34,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 93,
					),
				),
			),
			ttl_period : 29,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -4519289531962122971,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1225740838262438836,
			title : '7W1SCpnjKVoc6qBL',
			photo : $client->chatPhotoEmpty(),
			participants_count : 79,
			date : 7,
			version : 37,
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
				until_date : 53,
			),
		),
		$client->chatForbidden(
			id : -2447692076366490078,
			title : 'CRU9c4YnLDGTpKt7',
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
			id : -3754797508922080966,
			access_hash : -9214186793269513768,
			title : 'VCifMI9d65jYpUlg',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 91,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'eO8IwWpNRGCjFKox',
					reason : 'rjdcS1paf9W2OhlM',
					text : '2rZK4pnfyMxJFTgt',
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
				until_date : 100,
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
				until_date : 60,
			),
			participants_count : 76,
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
				color : 85,
				background_emoji_id : -1263768413235148837,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : 1500654196080612634,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 85,
			subscription_until_date : 62,
			bot_verification_icon : -9070257731125352224,
			send_paid_messages_stars : 9008282652083044434,
			linked_monoforum_id : -2292422440250786135,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2016584798683839429,
			access_hash : -2640489756343554470,
			title : '9qak7VFJeZM4dBLE',
			until_date : 12,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2635109373886363065,
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
			id : -645706691130251226,
			access_hash : 7182389362180464173,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 9,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'e3TMVy2z6lpj1f0n',
					reason : '48iDwprLT3tukCyS',
					text : '2JD15qNueCG9Kt3z',
				),
			),
			bot_inline_placeholder : 'vE7agtI03SYNRLp1',
			lang_code : 'YNArzkW9J2LFPUfp',
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
				max_id : 35,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : 8114525891628294533,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : -5491025225453819126,
			),
			bot_active_users : 63,
			bot_verification_icon : -779394454528115212,
			send_paid_messages_stars : -5861432677168659625,
		),
	),
);
```