# messages.peerDialogs

**Description** : *Dialog info of multiple peers*

**Layer** : 218

```tl
messages.peerDialogs#3371c354 dialogs:Vector<Dialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> state:updates.State = messages.PeerDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dialogs</mark> | [`Vector<Dialog>`](type/Dialog) | Dialog info |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | Messages mentioned in dialog info |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |
| <mark>state</mark> | [`updates.State`](type/updates.State) | Current update state of dialog |

---

## Type

[messages.PeerDialogs](type/messages.PeerDialogs)

---

## Example

```php
$messagesPeerDialogs = $client->messages->peerDialogs(
	dialogs : array(
		$client->dialog(
			pinned : true,
			unread_mark : true,
			view_forum_as_messages : true,
			peer : $client->peerUser(
				user_id : 6942282784433264648,
			),
			top_message : 70,
			read_inbox_max_id : 34,
			read_outbox_max_id : 89,
			unread_count : 11,
			unread_mentions_count : 95,
			unread_reactions_count : 5,
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 36,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			pts : 38,
			draft : $client->draftMessageEmpty(
				date : 2,
			),
			folder_id : 67,
			ttl_period : 54,
		),
		$client->dialogFolder(
			pinned : true,
			folder : $client->folder(
				autofill_new_broadcasts : true,
				autofill_public_groups : true,
				autofill_new_correspondents : true,
				id : 36,
				title : 'oRgnm752dulJbILa',
				photo : $client->chatPhotoEmpty(),
			),
			peer : $client->peerUser(
				user_id : -4436444906589750833,
			),
			top_message : 12,
			unread_muted_peers_count : 10,
			unread_unmuted_peers_count : 48,
			unread_muted_messages_count : 55,
			unread_unmuted_messages_count : 34,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 19,
			peer_id : $client->peerUser(
				user_id : 5587823139052473588,
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
			id : 0,
			from_id : $client->peerUser(
				user_id : -4703044670282181607,
			),
			from_boosts_applied : 35,
			peer_id : $client->peerUser(
				user_id : 5053220359285573878,
			),
			saved_peer_id : $client->peerUser(
				user_id : 5471024066334585536,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -809495016426634766,
				),
				from_name : 'n8LmbIK9CuW3a5cv',
				date : 8,
				channel_post : 30,
				post_author : 'HueWdlmD4I1LNkqi',
				saved_from_peer : $client->peerUser(
					user_id : -8501576818804673436,
				),
				saved_from_msg_id : 60,
				saved_from_id : $client->peerUser(
					user_id : 1725199861249929540,
				),
				saved_from_name : 'i7D1NZoy0pREa2fg',
				saved_date : 56,
				psa_type : 'k16rtIn3yjpwhY9l',
			),
			via_bot_id : 860006861699694451,
			via_business_bot_id : -8734694333329013168,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 97,
				reply_to_peer_id : $client->peerUser(
					user_id : 3929912381969951069,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'ONExV4uYTjIcfeA8',
					date : 69,
					channel_post : 40,
					post_author : 'NOiawteUxSy1khQI',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 97,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'r53GCw6z2SYEpTdg',
					saved_date : 79,
					psa_type : 'jReXAcNMUhnB8dYm',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 35,
				quote_text : '0peVzm4j72TcX3fw',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 5,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 85,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 67,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 34,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 4,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 9,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 23,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 100,
						language : 'CLBwm4hMGsZS1gp9',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 88,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 33,
						user_id : -6933929857107726639,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 76,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 27,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 39,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 91,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 25,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 7,
						document_id : 2807435843742653935,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 18,
					),
				),
				quote_offset : 21,
				todo_item_id : 34,
			),
			date : 84,
			message : 'F3uR9E7t4CAIVdoi',
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
					length : 67,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 83,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 48,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 60,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 7,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 10,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 71,
					language : 'hM5jPWL2VOFJepfC',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 11,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 84,
					user_id : 1880165248733635753,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 45,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 9,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 60,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 71,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 79,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 84,
					document_id : -6436102110705812657,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 17,
				),
			),
			views : 0,
			forwards : 0,
			replies : $client->messageReplies(
				comments : true,
				replies : 34,
				replies_pts : 46,
				recent_repliers : array(
					$client->peerUser(
						user_id : -2109746174101499250,
					),
					$client->peerChat(
						chat_id : -8398789955437438223,
					),
					$client->peerChannel(
						channel_id : -7071347090179152491,
					),
				),
				channel_id : -5087871955320444621,
				max_id : 10,
				read_max_id : 41,
			),
			edit_date : 36,
			post_author : 'v1FJSbYQq30GpxPA',
			grouped_id : -5024433442125039308,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 24,
						reaction : $client->reactionEmpty(...),
						count : 83,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 7,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 69,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KvlZsLiSxr4BuPAh',
					reason : 'Kexo1WRrQ7zMG8kv',
					text : 'aTybS5Ncue69DGWY',
				),
			),
			ttl_period : 46,
			quick_reply_shortcut_id : 71,
			effect : 4372145644537682881,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'Dvq0KaTY8V1iZGy7',
				text : $client->textWithEntities(
					text : '0mW5DRH1YgLNupjM',
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
			report_delivery_until_date : 61,
			paid_message_stars : -5463840645073387420,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -9145695958687368333,
					nanos : 35,
				),
				schedule_date : 35,
			),
			schedule_repeat_period : 6,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 29,
			from_id : $client->peerUser(
				user_id : -6190902699374096078,
			),
			peer_id : $client->peerUser(
				user_id : 2155571442026197746,
			),
			saved_peer_id : $client->peerUser(
				user_id : 9089653309358764315,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 33,
				reply_to_peer_id : $client->peerUser(
					user_id : -1430587129337193862,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'EJ6LMDPgfovNTCQ2',
					date : 45,
					channel_post : 61,
					post_author : 'uJnqoFZ8bhQceMjL',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 9,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '2eiRG3PKB0kV9Zpq',
					saved_date : 39,
					psa_type : 'Vdkync2v0jLbO56G',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 44,
				quote_text : 'dEvsZTwV8a7IBRcf',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 76,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 4,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 74,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 69,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 68,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 75,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 11,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 75,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 39,
						language : '6KdSi7aLOf8Jck1A',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 63,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 83,
						user_id : -7224348766739577804,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 25,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 11,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 26,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 57,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 67,
						document_id : 8049417726012097379,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 28,
					),
				),
				quote_offset : 21,
				todo_item_id : 55,
			),
			date : 29,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 41,
						reaction : $client->reactionEmpty(...),
						count : 46,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 73,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 53,
					),
				),
			),
			ttl_period : 23,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7494319245362041996,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6015154199036294251,
			title : '9jXyYOG0rCeqJc3z',
			photo : $client->chatPhotoEmpty(),
			participants_count : 55,
			date : 53,
			version : 88,
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
				until_date : 13,
			),
		),
		$client->chatForbidden(
			id : -7825963738914554924,
			title : 'zuiTPd80mr7KlGwv',
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
			id : -3981578320940839011,
			access_hash : 4627016454338835475,
			title : '8Qpa5rxcDEIHJCmR',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KmUgHGwdX548Bnjs',
					reason : 'RrfWhmBIPixXutkV',
					text : 'p1nbWGF0SqYijOJg',
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
				until_date : 22,
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
				until_date : 98,
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
				max_id : 94,
			),
			color : $client->peerColor(
				color : 27,
				background_emoji_id : 2000292823052511363,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : 5408926732229417579,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 45,
			subscription_until_date : 27,
			bot_verification_icon : 7967297934589349301,
			send_paid_messages_stars : -3888058590921548899,
			linked_monoforum_id : -695382268326647336,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8285550509693232412,
			access_hash : -8196159852150317,
			title : '8ZwefqjlXAN7BnaK',
			until_date : 75,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2594907582994051935,
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
			id : 7027180941219549934,
			access_hash : 2946307134440848161,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'bYA1nW0LQfXVFDtd',
					reason : 'L841l5MHjKVSFbxD',
					text : '76waZEqrWLskAlUG',
				),
			),
			bot_inline_placeholder : 'KGRzfgay2IMNwdPV',
			lang_code : 'Bk35yagZlpEtxdem',
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
				max_id : 74,
			),
			color : $client->peerColor(
				color : 10,
				background_emoji_id : 1500740751592367469,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : -7075197080614783776,
			),
			bot_active_users : 43,
			bot_verification_icon : 5383354128289585202,
			send_paid_messages_stars : 6293843887284536626,
		),
	),
	state : $client->updates->state(
		pts : 15,
		qts : 90,
		date : 65,
		seq : 5,
		unread_count : 78,
	),
);
```