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
	count : 14,
	dialogs : array(
		$client->dialog(
			pinned : true,
			unread_mark : true,
			view_forum_as_messages : true,
			peer : $client->peerUser(
				user_id : -3414452989790039151,
			),
			top_message : 22,
			read_inbox_max_id : 86,
			read_outbox_max_id : 99,
			unread_count : 64,
			unread_mentions_count : 11,
			unread_reactions_count : 31,
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 83,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			pts : 16,
			draft : $client->draftMessageEmpty(
				date : 48,
			),
			folder_id : 76,
			ttl_period : 10,
		),
		$client->dialogFolder(
			pinned : true,
			folder : $client->folder(
				autofill_new_broadcasts : true,
				autofill_public_groups : true,
				autofill_new_correspondents : true,
				id : 84,
				title : 'aWemi35jPETbsh2Q',
				photo : $client->chatPhotoEmpty(),
			),
			peer : $client->peerUser(
				user_id : 6942454184184087366,
			),
			top_message : 93,
			unread_muted_peers_count : 85,
			unread_unmuted_peers_count : 35,
			unread_muted_messages_count : 83,
			unread_unmuted_messages_count : 24,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 87,
			peer_id : $client->peerUser(
				user_id : -6861765504905924486,
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
			id : 9,
			from_id : $client->peerUser(
				user_id : 1873524847059538962,
			),
			from_boosts_applied : 10,
			peer_id : $client->peerUser(
				user_id : 6186526119024860734,
			),
			saved_peer_id : $client->peerUser(
				user_id : 587725493807843428,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -6196147081287824070,
				),
				from_name : 'cSoJ2MnZePwksQ30',
				date : 71,
				channel_post : 33,
				post_author : 'TyDu2ZiXUFIgCMbf',
				saved_from_peer : $client->peerUser(
					user_id : -5658688779595021747,
				),
				saved_from_msg_id : 70,
				saved_from_id : $client->peerUser(
					user_id : -7421053904179803843,
				),
				saved_from_name : 'HgywBvkhVLneQf9A',
				saved_date : 79,
				psa_type : 'Psdy3NlvEfI6kgCK',
			),
			via_bot_id : 7508271074582819180,
			via_business_bot_id : 4246182428023864636,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 38,
				reply_to_peer_id : $client->peerUser(
					user_id : 1584021780838057385,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'mfJGsb0aNItd9BPT',
					date : 80,
					channel_post : 71,
					post_author : 'pLalfBDs3Z5jdmNT',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 94,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'qwFIDlNCS6VdAPKO',
					saved_date : 41,
					psa_type : 'TtUcQ2F7s0RveMPV',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 16,
				quote_text : 'M4kiPm8WEUYKNTCL',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 31,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 96,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 3,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 18,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 42,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 70,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 8,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 49,
						language : 'FSGtpkemXjyDfcwQ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 55,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 66,
						user_id : 4616954723138949728,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 63,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 68,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 15,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 27,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 9,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 57,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 88,
						document_id : -8983947873211397040,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 0,
					),
				),
				quote_offset : 25,
				todo_item_id : 83,
			),
			date : 3,
			message : 'wvLPIza59FDGeqiO',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 63,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 63,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 80,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 54,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 46,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 7,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 8,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 72,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 26,
					language : 'XQVDukMf9S8cpn3K',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 49,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 40,
					user_id : -6076768765274218155,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 100,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 12,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 17,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 52,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 86,
					document_id : 791605507897249572,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 51,
				),
			),
			views : 60,
			forwards : 41,
			replies : $client->messageReplies(
				comments : true,
				replies : 5,
				replies_pts : 37,
				recent_repliers : array(
					$client->peerUser(
						user_id : 1091063074708642630,
					),
					$client->peerChat(
						chat_id : 3110020488737847642,
					),
					$client->peerChannel(
						channel_id : -2387362288560169895,
					),
				),
				channel_id : -1292828342706975975,
				max_id : 43,
				read_max_id : 19,
			),
			edit_date : 77,
			post_author : 'xVBSWn4cMo0b3HRl',
			grouped_id : 4428279855751352103,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 14,
						reaction : $client->reactionEmpty(...),
						count : 10,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 77,
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
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nOImhGbwyVpgiqRo',
					reason : 'ltY8nXOroeSz0Z1T',
					text : 'm3frOlhG29AgkY6B',
				),
			),
			ttl_period : 33,
			quick_reply_shortcut_id : 31,
			effect : 7555798471818207287,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'BNcDK1yfxgZJa7R8',
				text : $client->textWithEntities(
					text : 'kOWqscdFB5JuUPxm',
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
			report_delivery_until_date : 97,
			paid_message_stars : 4104062768557608434,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 8240814882169284316,
					nanos : 48,
				),
				schedule_date : 19,
			),
			schedule_repeat_period : 60,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 43,
			from_id : $client->peerUser(
				user_id : 5561582953190815886,
			),
			peer_id : $client->peerUser(
				user_id : 6173879077932922416,
			),
			saved_peer_id : $client->peerUser(
				user_id : 6944512861563574509,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 42,
				reply_to_peer_id : $client->peerUser(
					user_id : -7986602025586631759,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'eYm57uVlJZxAbycp',
					date : 19,
					channel_post : 64,
					post_author : '8swOodaB47bP95KW',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 22,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'FHajKIsL61TP8pBJ',
					saved_date : 36,
					psa_type : 'ruxKZUMSCiBgzGc3',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 12,
				quote_text : '7K4up6h5AXjmYTbL',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 51,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 42,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 48,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 55,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 49,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 7,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 46,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 33,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 12,
						language : 'ZADJrwvUtPuOsG5j',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 19,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 40,
						user_id : 5483357552805437692,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 56,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 41,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 72,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 47,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 95,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 48,
						document_id : -3272745335578878847,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 17,
					),
				),
				quote_offset : 99,
				todo_item_id : 50,
			),
			date : 64,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 33,
						reaction : $client->reactionEmpty(...),
						count : 50,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 2,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 27,
					),
				),
			),
			ttl_period : 42,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 489039149437211337,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4840300781153724466,
			title : 'FKWEgxQijhrMopO3',
			photo : $client->chatPhotoEmpty(),
			participants_count : 30,
			date : 26,
			version : 90,
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
				until_date : 58,
			),
		),
		$client->chatForbidden(
			id : 893984235045517828,
			title : 'EaFoCLNUyvbmXYnx',
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
			id : -4835424112703768282,
			access_hash : -6231997531670022213,
			title : 'Q7zeYvRVUdGaAjZp',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'L6n3mOUoDcYvluWz',
					reason : 'Y8Iy9MBKQsu4frSb',
					text : 'S2EO8Hy610sGoxPT',
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
				until_date : 71,
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
				until_date : 18,
			),
			participants_count : 1,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 2,
			),
			color : $client->peerColor(
				color : 34,
				background_emoji_id : -5820116408716876317,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : -426583938805503276,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 4,
			subscription_until_date : 21,
			bot_verification_icon : -7358811202112289967,
			send_paid_messages_stars : 1212594534588086337,
			linked_monoforum_id : -8863262568310436172,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 1338108523495669454,
			access_hash : -992368958882171055,
			title : 'qwzyEfbP0CmV7MnW',
			until_date : 39,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3464766150423434930,
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
			id : -7606969145197350241,
			access_hash : -1264368506547679692,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'foKlkxOuhZ20pDw6',
					reason : 'jKrQfmuSg9vJonHw',
					text : 'ovAVgE4XdjH9FWl0',
				),
			),
			bot_inline_placeholder : 'FWotTLp0SMBr2kX7',
			lang_code : 'dIoKh0bJCF63GRu9',
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
				max_id : 67,
			),
			color : $client->peerColor(
				color : 3,
				background_emoji_id : -2115596503082164988,
			),
			profile_color : $client->peerColor(
				color : 91,
				background_emoji_id : 5000056558826123214,
			),
			bot_active_users : 44,
			bot_verification_icon : -5634966340825778583,
			send_paid_messages_stars : -5676962795829293695,
		),
	),
);
```