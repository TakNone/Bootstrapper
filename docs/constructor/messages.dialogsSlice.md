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
	count : 13,
	dialogs : array(
		$client->dialog(
			pinned : true,
			unread_mark : true,
			view_forum_as_messages : true,
			peer : $client->peerUser(
				user_id : -7447268370715607917,
			),
			top_message : 20,
			read_inbox_max_id : 61,
			read_outbox_max_id : 45,
			unread_count : 54,
			unread_mentions_count : 17,
			unread_reactions_count : 65,
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 42,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			pts : 7,
			draft : $client->draftMessageEmpty(
				date : 24,
			),
			folder_id : 37,
			ttl_period : 76,
		),
		$client->dialogFolder(
			pinned : true,
			folder : $client->folder(
				autofill_new_broadcasts : true,
				autofill_public_groups : true,
				autofill_new_correspondents : true,
				id : 58,
				title : 'AbLytc6MU3WmCsBf',
				photo : $client->chatPhotoEmpty(),
			),
			peer : $client->peerUser(
				user_id : -6340009999382843243,
			),
			top_message : 50,
			unread_muted_peers_count : 46,
			unread_unmuted_peers_count : 4,
			unread_muted_messages_count : 92,
			unread_unmuted_messages_count : 78,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 74,
			peer_id : $client->peerUser(
				user_id : 4668446298885464689,
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
			id : 24,
			from_id : $client->peerUser(
				user_id : 4474536535355388994,
			),
			from_boosts_applied : 14,
			peer_id : $client->peerUser(
				user_id : -8983413934080874788,
			),
			saved_peer_id : $client->peerUser(
				user_id : 7330466343048767730,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 8451549690715983799,
				),
				from_name : 'AVa0puUoiJ5G7OrK',
				date : 73,
				channel_post : 99,
				post_author : 'H52Psd7yN8VFtU6B',
				saved_from_peer : $client->peerUser(
					user_id : -7151201637527597270,
				),
				saved_from_msg_id : 6,
				saved_from_id : $client->peerUser(
					user_id : 1254427026893107098,
				),
				saved_from_name : 'Fvfq3EWn8cR5zaVY',
				saved_date : 63,
				psa_type : 'Gv9LJ4PUVdfHQnw6',
			),
			via_bot_id : 4635066180216235734,
			via_business_bot_id : 741827245374138722,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 88,
				reply_to_peer_id : $client->peerUser(
					user_id : -5172046838061081513,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'b91y0AGH7KNCMip6',
					date : 3,
					channel_post : 52,
					post_author : 'vsHAXSc0UZo6F5az',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 87,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'dvt9Z6ufToPgxMV4',
					saved_date : 90,
					psa_type : 'wyGjuQ0C7ZrhpiA9',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 77,
				quote_text : 'Wsi3yXHuvdC7xZDT',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 3,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 1,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 47,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 19,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 30,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 35,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 86,
						language : '9cMUgvWyCz5emLwA',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 22,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 91,
						user_id : -6263984804527058504,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 18,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 48,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 7,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 60,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 51,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 11,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 51,
						document_id : -2878915072940089610,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 72,
					),
				),
				quote_offset : 14,
				todo_item_id : 50,
			),
			date : 73,
			message : 'YN9WCq4tolGTgLKH',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 79,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 51,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 10,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 17,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 24,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 11,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 90,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 40,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 48,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 33,
					language : 'rwZ8WkCdgbqVE6hj',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 31,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 35,
					user_id : -6010927820464535171,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 21,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 52,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 62,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 87,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 17,
					document_id : 2484414458486219825,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 96,
				),
			),
			views : 8,
			forwards : 70,
			replies : $client->messageReplies(
				comments : true,
				replies : 65,
				replies_pts : 31,
				recent_repliers : array(
					$client->peerUser(
						user_id : -69881911643170919,
					),
					$client->peerChat(
						chat_id : -1098040252580807545,
					),
					$client->peerChannel(
						channel_id : -3505172998747936543,
					),
				),
				channel_id : 7384341948550585773,
				max_id : 22,
				read_max_id : 8,
			),
			edit_date : 33,
			post_author : 'MuQB2iWLkxOoCFUg',
			grouped_id : 4436988068564169473,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 28,
						reaction : $client->reactionEmpty(...),
						count : 30,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 66,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 92,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vtlj49Uh3gu7PXOM',
					reason : 'SAEgeFcz3OmChVbL',
					text : '2a6Cf4YtgiIGBlw9',
				),
			),
			ttl_period : 36,
			quick_reply_shortcut_id : 55,
			effect : 2681575531005786219,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'MxQAIsJFioqBepG0',
				text : $client->textWithEntities(
					text : 'QEK2UItNzr718bno',
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
			report_delivery_until_date : 86,
			paid_message_stars : -949379897278620796,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 5985450866680363277,
					nanos : 99,
				),
				schedule_date : 23,
			),
			schedule_repeat_period : 53,
			summary_from_language : 'gunXmbGTIDilZqBJ',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 95,
			from_id : $client->peerUser(
				user_id : 3987432185643242188,
			),
			peer_id : $client->peerUser(
				user_id : -8042080935655887801,
			),
			saved_peer_id : $client->peerUser(
				user_id : -8899140198608398278,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 15,
				reply_to_peer_id : $client->peerUser(
					user_id : 7672670947767489371,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'xpgyAbGTItdi1UKO',
					date : 73,
					channel_post : 4,
					post_author : 'xaJMr71hc3uy8iPv',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 8,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '5txG3NMVhSov9JCI',
					saved_date : 60,
					psa_type : '8u47bFXAmMEqgIUQ',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 92,
				quote_text : 'uBP9wpL4TDQFovdi',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 51,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 18,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 26,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 21,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 60,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 46,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 25,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 54,
						language : 'i4nJXHa5KvCTwmSx',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 98,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : 9031404482325177914,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 74,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 81,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 49,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 9,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 85,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 87,
						document_id : 6663610128677080328,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 26,
					),
				),
				quote_offset : 68,
				todo_item_id : 72,
			),
			date : 39,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 59,
						reaction : $client->reactionEmpty(...),
						count : 25,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 45,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 44,
					),
				),
			),
			ttl_period : 85,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1139361926248757247,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2000826473127522539,
			title : 'DEVFhUkGemQSCoW8',
			photo : $client->chatPhotoEmpty(),
			participants_count : 32,
			date : 52,
			version : 55,
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
				until_date : 50,
			),
		),
		$client->chatForbidden(
			id : -5526308800127802861,
			title : 'NxJvTAteLyWmjoqz',
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
			id : -3744338804584291218,
			access_hash : -2853181921676997247,
			title : 'uGY2EigpvQS1lxLB',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 't5r3gwJSyViUMpb4',
					reason : 'JsSbIxyRUitAEVHN',
					text : 'kgIJKQXsb9URcH6j',
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
				until_date : 15,
			),
			participants_count : 19,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 34,
			),
			color : $client->peerColor(
				color : 100,
				background_emoji_id : -8535736427596855126,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : 4545070623694494651,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 64,
			subscription_until_date : 29,
			bot_verification_icon : -176484526484139640,
			send_paid_messages_stars : -2504181690871981624,
			linked_monoforum_id : 7850743079699147161,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 7617434894923981925,
			access_hash : -7795500314102649279,
			title : '6uINHiq8LCcBnbjZ',
			until_date : 45,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6092820103275189111,
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
			id : 7056034671814035695,
			access_hash : -4390707764536140750,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XrCdjpM31kJz7Hfq',
					reason : '6CI5dTmMnEzs71Lt',
					text : '3JSMdYIBHkyfZtnC',
				),
			),
			bot_inline_placeholder : '06PFXoYLp1Owge2T',
			lang_code : 'vus5XLW4kVAeyGSZ',
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
				max_id : 2,
			),
			color : $client->peerColor(
				color : 6,
				background_emoji_id : 7587723326463571403,
			),
			profile_color : $client->peerColor(
				color : 93,
				background_emoji_id : 2431076650487956091,
			),
			bot_active_users : 20,
			bot_verification_icon : -4730929296993421745,
			send_paid_messages_stars : -732361927191859162,
		),
	),
);
```